<?php

defined('BASEPATH') or exit('No direct script access allowed');

include_once(APPPATH . 'libraries/App_gstitems_table_template.php');

class App_gstitems_table extends App_gstitems_table_template
{
    public function __construct($transaction, $type, $for = 'html', $admin_preview = false)
    {
        // Required
        $this->type          = strtolower($type);
        $this->admin_preview = $admin_preview;
        $this->for           = $for;
        $this->gst_type      = ($transaction->billing_state=="UTTAR PRADESH")?"UGST":"IGST";
        $this->set_transaction($transaction);
        $this->set_items($transaction->items);

        parent::__construct();
    }

    /**
     * Builds the actual table items rows preview
     * @return string
     */
    public function items()
    {
        $html          = '';
        $custom_fields = $this->get_custom_fields_for_table();

        $i = 1;
        foreach ($this->items as $item) {
            $itemHTML = '';

            // Open table row
            $itemHTML .= '<tr nobr="true"' . $this->tr_attributes($item) . '>';

            // Table data number
            $itemHTML .= '<td' . $this->td_attributes() . ' align="center">' . $i . '</td>';

            $itemHTML .= '<td class="description" align="left;">';

            /**
             * Item description
             */
            if (!empty($item['description'])) {
                $itemHTML .= '<span style="font-size:' . $this->get_pdf_font_size() . 'px;"><strong>' . $item['description'] . '</strong></span>';

                if (!empty($item['long_description'])) {
                    $itemHTML .= '<br />';
                }
            }

            /**
             * Item long description
             */
            if (!empty($item['long_description'])) {
                $itemHTML .= '<span style="color:#424242;">' . $item['long_description'] . '</span>';
            }

            $itemHTML .= '</td>';

            /**
             * Item custom fields
             */
            foreach ($custom_fields as $custom_field) {
                $itemHTML .= '<td align="left">' . get_custom_field_value($item['id'], $custom_field['id'], 'items') . '</td>';
            }

            /**
             * Item quantity
             */
            $itemHTML .= '<td align="right">' . floatVal($item['qty']);

            /**
             * Maybe item has added unit?
             */
            if ($item['unit']) {
                $itemHTML .= ' ' . $item['unit'];
            }

            $itemHTML .= '</td>';

            /**
             * Item rate
             * @var string
             */
            $rate = hooks()->apply_filters(
                'item_preview_rate',
                app_format_money($item['rate'], $this->transaction->currency_name, $this->exclude_currency()),
                ['item' => $item, 'transaction' => $this->transaction]
            );

            $itemHTML .= '<td align="right">' . $rate . '</td>';

            /**
             * Possible action hook user to include tax in item total amount calculated with the quantiy
             * eq Rate * QTY + TAXES APPLIED
             */
            $item_amount_with_quantity = hooks()->apply_filters(
                'item_preview_amount_with_currency',
                app_format_money(($item['qty'] * $item['rate']), $this->transaction->currency_name, $this->exclude_currency()),
                $item
            );
            $taxable_value = $item['qty'] * $item['rate'];

            // $itemHTML .= '<td class="amount" align="right">' . $item_amount_with_quantity . '</td>';
            // $itemHTML .= '<td class="amount" align="right">' . $item_amount_with_quantity . '</td>';
            $itemHTML .= '<td class="amount" align="right">' . $item_amount_with_quantity . '</td>';

            /**
             * Items table taxes HTML custom function because it's too general for all features/options
             * @var string
             */
            if($this->gst_type == "UGST"):
                $ugst_amt = $taxable_value*$this->taxes_html($item, "amt", "UGST")/100;
                $itemHTML .= $this->taxes_html($item, "rate", "UGST");
                $itemHTML .= '<td align="right">'.app_format_money($ugst_amt, $this->transaction->currency_name, $this->exclude_currency()).'</td>';
                $itemHTML .= $this->taxes_html($item, "rate", "UGST");
                $itemHTML .= '<td align="right">'.app_format_money($ugst_amt, $this->transaction->currency_name, $this->exclude_currency()).'</td>';
            else:
                $igst_amt = $taxable_value*$this->taxes_html($item, "amt", "IGST")/100;
                $itemHTML .= $this->taxes_html($item, "rate", "IGST");
                $itemHTML .= '<td align="right">'.app_format_money($igst_amt, $this->transaction->currency_name, $this->exclude_currency()).'</td>';
            endif;

            // Close table row
            $itemHTML .= '</tr>';

            $html .= $itemHTML;

            $i++;
        }

        return $html;
    }

    /**
     * Html headings preview
     * @return string
     */
    public function html_headings()
    {
        $html = '<tr>';
        $html .= '<th align="center">' . $this->number_heading() . '</th>';
        $html .= '<th class="description" width="50%" align="left">' . $this->item_heading() . '</th>';

        $custom_fields = $this->get_custom_fields_for_table();
        foreach ($custom_fields as $cf) {
            $html .= '<th class="custom_field" align="left">' . $cf['name'] . '</th>';
        }

        $html .= '<th align="right">' . $this->qty_heading() . '</th>';
        $html .= '<th align="right">' . $this->rate_heading() . '</th>';
        // $html .= '<th align="right">' . $this->amount_heading() . '</th>';
        // $html .= '<th align="right">' . $this->amount_heading() . '</th>';
        $html .= '<th align="right">' . $this->amount_heading() . '</th>';
        if ($this->show_tax_per_item()) {
            if($this->gst_type == "UGST"):
                $html .= '<th align="right">' . $this->tax_heading('Rate') . '</th>';
                $html .= '<th align="right">' . $this->tax_heading('Amt') . '</th>';
                $html .= '<th align="right">' . $this->tax_heading('Rate') . '</th>';
                $html .= '<th align="right">' . $this->tax_heading('Amt') . '</th>';
            else:
                $html .= '<th align="right">' . $this->tax_heading('Rate') . '</th>';
                $html .= '<th align="right">' . $this->tax_heading('Amt') . '</th>';
            endif;
        }
        $html .= '</tr>';

        return $html;
    }

    /**
     * PDF headings preview
     * @return string
     */
    public function pdf_headings()
    {
      	//$this->gst_type = "UGST";
        $item_width = 38;//12;
      	if($this->gst_type == "UGST")
        	$item_width = 25;
        $extra_wd = 2;

        // If show item taxes is disabled in PDF we should increase the item width table heading
        $item_width = $this->show_tax_per_item() == 0 ? $item_width + 15 : $item_width;

        $custom_fields_items = $this->get_custom_fields_for_table();
        // Calculate headings width, in case there are custom fields for items
        $total_headings = $this->show_tax_per_item() == 1 ? 4 : 3;
        if($this->gst_type == "UGST")
            $total_headings += 1;
        $total_headings += count($custom_fields_items);
        $headings_width = (100 - ($item_width + 6)) / $total_headings;

        $tblhtml = '<tr height="30" bgcolor="' . get_option('pdf_table_heading_color') . '" style="color:' . get_option('pdf_table_heading_text_color') . ';">';

        $tblhtml .= '<th rowspan="2" width="5%;" align="center">' . $this->number_heading() . '</th>';
        $tblhtml .= '<th rowspan="2" width="' . $item_width . '%" align="left">' . $this->item_heading() . '</th>';

        foreach ($custom_fields_items as $cf) {
            $tblhtml .= '<th rowspan="2" width="' . $headings_width . '%" align="left">' . $cf['name'] . '</th>';
        }

        $tblhtml .= '<th rowspan="2" width="' . $headings_width*0.5 . '%" align="right">' . $this->qty_heading() . '</th>';
        $tblhtml .= '<th rowspan="2" width="' . $headings_width . '%" align="right">' . $this->rate_heading() . '</th>';

        // $tblhtml .= '<th rowspan="2" width="' . $headings_width . '%" align="right">' . $this->amount_heading() . '</th>';
        // $tblhtml .= '<th rowspan="2" width="' . $headings_width . '%" align="right">' . $this->amount_heading() . '</th>';
        $tblhtml .= '<th rowspan="2" width="' . $headings_width . '%" align="right">' . $this->amount_heading() . '</th>';

        if ($this->show_tax_per_item()) {
            if($this->gst_type == "UGST"):
                $tblhtml .= '<th colspan="2" width="' . $headings_width*1.25 . '%" align="center">' . $this->tax_heading('CGST') . '</th>';
                $tblhtml .= '<th colspan="2" width="' . $headings_width*1.25 . '%" align="center">' . $this->tax_heading('SGST') . '</th>';
            else:
                $tblhtml .= '<th colspan="2" width="' . $headings_width*1.5 . '%" align="center">' . $this->tax_heading('IGST') . '</th>';
            endif;
        }

        $tblhtml .= '</tr><tr height="30" bgcolor="' . get_option('pdf_table_heading_color') . '" style="color:' . get_option('pdf_table_heading_text_color') . ';">';
        if($this->gst_type == "UGST"):
            $tblhtml .= '<th align="right" width="' . $headings_width*1.25*2.5/6 . '%">' . $this->tax_heading('Rate') . '</th>';
            $tblhtml .= '<th align="right" width="' . $headings_width*1.25*3.5/6 . '%">' . $this->tax_heading('Amt') . '</th>';
            $tblhtml .= '<th align="right" width="' . $headings_width*1.25*2.5/6 . '%">' . $this->tax_heading('Rate') . '</th>';
            $tblhtml .= '<th align="right" width="' . $headings_width*1.25*3.5/6 . '%">' . $this->tax_heading('Amt') . '</th>';
        else:
            $tblhtml .= '<th align="right" width="' . $headings_width*1.5*2.5/6 . '%">' . $this->tax_heading('Rate') . '</th>';
            $tblhtml .= '<th align="right" width="' . $headings_width*1.5*3.5/6 . '%">' . $this->tax_heading('Amt') . '</th>';
        endif;
        $tblhtml .= '</tr>';

        return $tblhtml;
    }
}

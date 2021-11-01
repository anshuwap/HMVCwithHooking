<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Accounts_data_report extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Reports_model');
    }

    public function index($month = "06", $last_date="30")
    {
        $report_months = array(
            "report_months" => "custom",
            "report_from" => "01-".$month."-2020",
            "report_to" => $last_date."-".$month."-2020"
        );
        foreach($this->Reports_model->payment_report_received($report_months) as $datas):
            $data_arrays[date('j', strtotime($datas['tblinvoicepaymentrecords.date']))][] = $datas;
        endforeach;
        // $path = "https://crm.binplus.in/admin/reports/payment_report_received";
        // $data = file_get_contents($path);
        // $data_array = json_decode($data);
        // Payment Received:
        // 01/05/2020
        // 5000 rs from Gyan(Projects)
        
        // Total: 1,02,476 rs received.
        
        echo "<pre>";
        echo "Payment Received:<br>";
        // print_r($data_array);
        $total = 0;
        $cdate = "";
        ksort($data_arrays);
        // print_r($data_arrays);exit;
        foreach($data_arrays as $data_array):
            foreach($data_array as $data):
                 $date = date('d/m/Y', strtotime($data['tblinvoicepaymentrecords.date']));
                 if($cdate != $date)
                    echo $date.'<br>';
                 $cdate = $date;
                 $to = "";
                 if($data['name']=='Gyan Personal Account')
                    $to = " TO GYAN";
                 echo $data['amount'].' rs from '.$data['company'].$to.'<br>';
                 $total += $data['amount'];
            endforeach;
        endforeach;
        echo "<br>Total: ".number_format($total, 2)." rs received.";
        echo "</pre>";
    }

    public function gst($month = "06", $last_date="30")
    {
        $report_months = array(
            "report_months" => "custom",
            "report_from" => "01-".$month."-2020",
            "report_to" => $last_date."-".$month."-2020"
        );
        foreach($this->Reports_model->payment_report_received($report_months) as $datas):
            $data_arrays[date('j', strtotime($datas['tblinvoicepaymentrecords.date']))][] = $datas;
        endforeach;
        // $path = "https://crm.binplus.in/admin/reports/payment_report_received";
        // $data = file_get_contents($path);
        // $data_array = json_decode($data);
        // Payment Received:
        // 01/05/2020
        // 5000 rs from Gyan(Projects)
        
        // Total: 1,02,476 rs received.
        
        echo "<pre>";
        echo "-------------------------------------------<br>Sales:<br>-------------------------------------------<br>";
        // print_r($data_array);
        $total = 0;
        $cdate = "";
        ksort($data_arrays);
        // print_r($data_arrays);exit;
// 11/09/2020
// 6700.00 + 603.00(CGST) + 603.00(SGST) = 7906.00
// RENOV8DESIGN LLP
// 09AAXFR2736D1ZT
        foreach($data_arrays as $data_array):
            foreach($data_array as $data):
                 $date = date('d/m/Y', strtotime($data['tblinvoicepaymentrecords.date']));
                //  if($cdate != $date)
                 echo $date.'<br>';
                //  $cdate = $date;
                //  $to = "";
                //  if($data['name']=='Gyan Personal Account')
                //     $to = " TO GYAN";
                //  echo $data['amount'].' rs from '.$data['company'].$to.'<br>';
                $amt = (float)$data['amount'];
                $taxable_value = (float)round(($amt*100)/118, 2);
                $igst = $amt-$taxable_value;
                $gst = $igst/2;
                $gstn = $gst.'(CGST) '.$gst.'(SGST) ';
                // $gstn = $igst.'(IGST) ';
                // var_dump($taxable_value);
                echo $taxable_value.' + '.$gstn.' = '.$data['amount'].'<br>'.$data['company'].'<br><br>';
                 $total += $data['amount'];
            endforeach;
        endforeach;
        echo "<br>Total: ".number_format($total, 2)." rs received.";
        echo "</pre>";
    }

    public function expenses($month = "06", $last_date="30")
    {
        $report_months = array(
            "report_months" => "custom",
            "report_from" => "01-".$month."-2020",
            "report_to" => $last_date."-".$month."-2020"
        );
        foreach($this->Reports_model->payment_report_paid($report_months) as $datas):
            $data_arrays[date('j', strtotime($datas['date']))][] = $datas;
        endforeach;
        // $path = "https://crm.binplus.in/admin/reports/payment_report_received";
        // $data = file_get_contents($path);
        // $data_array = json_decode($data);
        // Payment Received:
        // 01/05/2020
        // 5000 rs from Gyan(Projects)
        
        // Total: 1,02,476 rs received.
        
        echo "<pre>";
        echo "Paid:<br>";
        // print_r($data_array);
        $total = 0;
        $cdate = "";
        ksort($data_arrays);
        // print_r($data_arrays);exit;
        foreach($data_arrays as $key => $data_array):
            foreach($data_array as $data):
                 $date = date('d/m/Y', strtotime($data['date']));
                 if($cdate != $date)
                    echo $date.'<br>';
                 $cdate = $date;
                 $to = "";
                //  if($data['name']=='Gyan Personal Account')
                //     $to = " TO GYAN";
                 echo $data['amount'].' rs paid for '.$data['purpose'].$to.'<br>';
                 $total += $data['amount'];
            endforeach;
        endforeach;
        echo "<br>Total: ".number_format($total, 2)." rs paid.";
        echo "</pre>";
    }
}
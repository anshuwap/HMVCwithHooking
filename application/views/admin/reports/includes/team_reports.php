<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div id="team-report" class="hide">
   <div class="row">
   <!--   <div class="col-md-4">-->
   <!--      <div class="form-group">-->
   <!--         <label for="invoice_status"><?php echo _l('report_invoice_status'); ?></label>-->
   <!--         <select name="invoice_status" class="selectpicker" multiple data-width="100%" data-none-selected-text="<?php echo _l('invoice_status_report_all'); ?>">-->
   <!--            <?php foreach($invoice_statuses as $status){ if($status ==5){continue;} ?>-->
   <!--            <option value="<?php echo $status; ?>"><?php echo format_invoice_status($status,'',false) ?></option>-->
   <!--         <?php } ?>-->
   <!--      </select>-->
   <!--   </div>-->
   <!--</div>-->
   <?php if(count($notes_sale_agents) > 0 ) { ?>
      <div class="col-md-4">
         <div class="form-group">
            <label for="sale_agent_team"><?php echo _l('sale_agent_string'); ?></label>
            <select name="sale_agent_team" class="selectpicker" multiple data-width="100%" data-none-selected-text="<?php echo _l('invoice_status_report_all'); ?>">
               <?php foreach($notes_sale_agents as $agent){ ?>
                  <option value="<?php echo $agent['sale_agent']; ?>"><?php echo get_staff_full_name($agent['sale_agent']); ?></option>
               <?php } ?>
            </select>
         </div>
      </div>
      <div class="col-md-4">&nbsp;</div>
      <div class="col-md-4">
         <div class="form-group pull-right">
             <label>Download</label><br>
            <a class="btn btn-primary" id="team_report_download">Download Report</a>
         </div>
      </div>
   <?php } ?>
   <div class="clearfix"></div>
</div>
<table class="table table-team-report scroll-responsive">
   <thead>
      <tr>
         <th>Notes ID</th>
         <th><?php echo _l('report_invoice_customer'); ?></th>
         <!--<th>Lead ID</th>-->
         <th>Company</th>
         <th>Description</th>
         <th>Added at</th>
         <th>Added by</th>
         <th>Status (Last)</th>
         <th><?php echo _l('report_invoice_status'); ?></th>
         <th><?php echo 'Last contacted' ?></th>
         <th><?php echo 'Created at' ?></th>
      </tr>
   </thead>
   <tbody></tbody>
   <tfoot>
      <tr>
         <td></td>
         <!--<td></td>-->
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
   </tfoot>
</table>
</div>

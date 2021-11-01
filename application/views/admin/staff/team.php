<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
	<div class="content">
		<div class="row">
			<div class="col-md-12">

				<div class="panel_s">
					<div class="panel-body">
						<?php
						$table_data = array(
							_l('staff_dt_name'),
							_l('staff_dt_email'),
							_l('role'),
							_l('last_active'),
							_l('staff_dt_last_Login'),
							);
						$custom_fields = get_custom_fields('staff',array('show_on_table'=>1));
						foreach($custom_fields as $field){
							array_push($table_data,$field['name']);
						}
						render_datatable($table_data,'staff');
				        // print_r($table_data); exit;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php init_tail(); ?>
<script>
	$(function(){
		initDataTable('.table-staff', window.location.href);
	});
</script>
</body>
</html>

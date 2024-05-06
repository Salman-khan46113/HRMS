<?php
/* Smarty version 4.3.2, created on 2024-05-05 23:34:41
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_combo_off.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6637ca39a0f1f4_14170487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27b84c90a7a6a04295167e7484adb078f2a21066' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_combo_off.tpl',
      1 => 1714932280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6637ca39a0f1f4_14170487 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
    <div class="sub-header-left pull-left">
        <h3>Combo Off</h3>
        
    </div>
    <div class="sub-header-right pull-right">
        <div class="timesheet-summary">
            
            <!-- <div class="timesheet-summary-lst year-drop-down ">
                <select class="form-select form-control" name="month_drop_down" id="month_drop_down">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'month', false, 'key_val');
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
?>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['key_val']->value+1 == count($_smarty_tpl->tpl_vars['months']->value)) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                            <option value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                        <?php ob_start();
} else {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                         <option value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                        <?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div> -->
            <div class="timesheet-summary-lst">
               <button type="button" class="btn btn-primary add-combo-off add-action">
               	<i class="ti ti-plus"></i>
               	<span>Apply Combo Off</span>
           		</button>
            </div>
        </div>
    </div>

</div>
<div class="inner-container" style="position: static; zoom: 1;">
    <div class="timesheet-container">

        <div class="custom-modal-content custom-content-table-with-fixed-column ">
            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" style="border-collapse: collapse;" border-color="#e1e1e1">
                <thead>
                    <tr>
                        <th align="center" valign="middle" class="text-center att-date">Reference date</th>
                        <th align="center" valign="middle" class="text-center att-date">Combo Off Date</th>
                        <th align="center" valign="middle" class="text-center att-date">Overtime</th>
                        <th align="center" valign="middle" class="text-center att-time">Combo Off Reason</th>
                        <th align="center" valign="middle" class="text-center att-time">Approve/Reject Reason</th>
                        <th align="center" valign="middle" class="text-center att-time">Status</th>
                        <th align="center" valign="middle" class="text-center att-time">Action</th>
                    </tr>
                </thead>
                <tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
                    
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applied_combo_off']->value, 'sem_row', false, 'sem_index');
$_smarty_tpl->tpl_vars['sem_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sem_index']->value => $_smarty_tpl->tpl_vars['sem_row']->value) {
$_smarty_tpl->tpl_vars['sem_row']->do_else = false;
?>
                        <tr class="combo-off-request-row">
                            <td align="center" valign="middle" class="text-center  " >
                             	<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['combo_off_date'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

                         	</td>
                            <td align="center" valign="middle" class="text-center ">
                            	<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['reference_date'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

                            </td>
                            <td align="center" valign="middle" class="text-center over_time_row">
                            	<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['over_time'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

                            </td>
                            <td align="center" valign="left" class="text-left combo-off-reason">	
                            	<?php ob_start();
echo display_no_character($_smarty_tpl->tpl_vars['sem_row']->value['added_reason']);
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>

                           	</td>
                            <td align="center" valign="left" class="text-left">
                            	<?php ob_start();
echo display_no_character($_smarty_tpl->tpl_vars['sem_row']->value['update_reason']);
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>

                            </td>
                            <td align="center" valign="middle" class="text-center status-row">
                                <span class="<?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['sem_row']->value['status']);
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['status'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</span>
                            </td>
                            <td align="center" valign="middle" class="text-center ">
                            	<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['action'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>

                           	</td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               	</tbody>
               
            </table>
        </div>
    </div>
</div>

</div>

<div class="modal fade leave-popup-block" id="employee_combo_off_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Combo Off Request</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="main-content">
            	<form id="comboOffForm" action="javascript:void(0)" method="post">
                	<div class="card mb-3 user-details-block">
                    <input type="hidden"  value="" id="mode" name="mode">
                    <input type="hidden"  value="" id="employee_combo_off_id" name="employee_combo_off_id">
                        <div class="row g-0 m-3">
                            <div class="col-2">
                                <div class="image-block">
                                    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['profile_image'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
" width="100" height="100" >                                   
                                </div>
                            </div>
                            <div class="col-10 employee-detils">
                                <div class="row">
                                	<div class="col-4 p-1">
                                		<span class="employee-name"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['first_name'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['middle_name'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['last_name'];
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</span> 
                            			<span class="emp-grid-code" id="employee_code"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['employee_code'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
</span>
                                	</div>
                                	<div class="col-4 p-1">
                                		<span class="title-box">Location</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['city'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
</span>
                                	</div>
                                	<div class="col-4 p-1">
                                		<span class="title-box" >Designation</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['designation_name'];
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
</span>
                                	</div>
                                	<div class="col-4 p-1">
                                		<span class="title-box">Department</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['department_name'];
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
</span>
                                	</div>
                                	<div class="col-4 p-1">
                                		<span class="title-box">Week Off</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['employee_week_off'];
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
</span>
                                	</div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card mb-3 leave-box">
                        <div class="row g-0 m-3">
                            <div class="col-6 p-2">
                                <div class="ms-3">
                                    <p class="fs-5 mb-1 fw-bold attendance-lable">Refrence Date</p>
                                    <span >
                                    	<div class="input-group date-box-block">
										  <input type="text" class="form-control" id="reference_date" name="reference_date"  placeholder="Refrence Date">
										  <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
										</div>
                                    </span>                                    
                                </div>
                            </div>
                            <div class="col-6 p-2">
                                <p class="fs-5 mb-1 fw-bold attendance-lable">Over Time</p>
                                <span >
                                    <div class="input-group ">
                                    	<input type="hidden" name="overtime_hours" value="--" id="overtime_hours">
                                    	<span class="overtimes-value-block fs-5">

                                    		--
                                    	</span>
										  
									</div>
                                    	
                                </span>  
                                    
                            </div>
                            <div class="col-6 p-2 ">
                            	 <div class="ms-3">
                                <p class="fs-5 mb-1 fw-bold attendance-lable">Combo Off Date</p>
                                <span >
                                    	<div class="input-group date-box-block">
										  <input type="text" class="form-control" id="combo_off_date" name="combo_off_date"  placeholder="Combo Off Date">
										  <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
										</div>
                                    	
                                </span>  
                            </div>
                                    
                            </div>
                            
                            <div class="col-6 p-2 ">
                            	<div class="">
	                                <p class="fs-5 mb-1 fw-bold attendance-lable">Combo Off Reason</p>
	                                <span >
	                                    <textarea class="form-control" id="combo_off_reason" name="combo_off_reason" placeholder="Combo Off Reason" ></textarea>
	                                    	
	                                </span>
	                            </div>  
                                    
                            </div>
                        </div>
                        <span class="note-box"><lable>Note</lable> : &nbsp;Combo off only applicable from <?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
 to <?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
.</span>
                    </div>
                    <div class="modal-footer justify-content-center">
			            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			            <button class="btn btn-primary submit-combo_off" type="submit" >Submit</button>
			          </div>
                </form>
            </div>


          </div>
          
        </div>
      </div>
    </div>
</div>
<!-- extra for footer -->
        </div>
    </div>
  </div>
    </div>

    <link rel="stylesheet" href="public/css/attendance_sheet.css" />
    <link rel="stylesheet" href="public/css/employee_combo_off.css" />

    <?php echo '<script'; ?>
 type="text/javascript" >
        var overtime_date_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['overtimes_date']->value);
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
;
        var overall_combo_off_dates = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['overall_combo_off_dates']->value);
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>

    <?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/employee_combo_off.js"><?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

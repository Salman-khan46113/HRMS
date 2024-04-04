<?php
/* Smarty version 4.3.2, created on 2024-04-04 18:58:11
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_leave.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660eaaebcaf068_51886838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35902323a0aeb94f9765903986ed798d8a726ee2' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_leave.tpl',
      1 => 1712237279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660eaaebcaf068_51886838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
    <div class="sub-header-left pull-left">
        <h3>Leave Request</h3>
        
    </div>
    <div class="sub-header-right pull-right">
        <div class="timesheet-summary">
            
            <div class="timesheet-summary-lst year-drop-down ">
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
            </div>
            <div class="timesheet-summary-lst">
               <button type="button" class="btn btn-primary add-leave add-action">
               	<i class="ti ti-plus"></i>
               	<span>Apply for leave</span>
           		</button>
            </div>
            <!-- <div class="timesheet-summary-lst">
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="las la-fill-drip"></i>
                  </button>
                  <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                    <li title="Present" class="pl-3"><span class="color-box present"></span>Present</li>
                    <li title="Absent" class="pl-3"><span class="color-box absent"></span>Absent</li>
                    <li title="Week Off" class="pl-3"><span class="color-box week_off"></span>Week Off</li>
                    
                  </ul>
                </div>
            </div> -->
           
        </div>
    </div>

</div>
<div class="inner-container" style="position: static; zoom: 1;">
    <div class="timesheet-container">

        <div class="custom-modal-content custom-content-table-with-fixed-column ">
            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" style="border-collapse: collapse;" border-color="#e1e1e1">
                <thead>
                    <tr>
                        <th align="center" valign="middle" class="text-center att-date">Leave Name</th>
                        <th align="center" valign="middle" class="text-center att-date">From Date</th>
                        <th align="center" valign="middle" class="text-center att-time">To Date</th>
                        <th align="center" valign="middle" class="text-center att-time">Type</th>
                        <th align="center" valign="middle" class="text-center att-time">Reason</th>
                        <th align="center" valign="middle" class="text-center att-time">Approved By</th>
                        <th align="center" valign="middle" class="text-center att-time">Applied Leave (Days)</th>
                        <th align="center" valign="middle" class="text-center att-time">Status</th>
                        <th align="center" valign="middle" class="text-center att-time">Action</th>
                    </tr>
                </thead>
               	<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
                    
               		   <?php ob_start();
if (count($_smarty_tpl->tpl_vars['leave_list']->value) > 0) {
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leave_list']->value, 'sem_row', false, 'sem_index');
$_smarty_tpl->tpl_vars['sem_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sem_index']->value => $_smarty_tpl->tpl_vars['sem_row']->value) {
$_smarty_tpl->tpl_vars['sem_row']->do_else = false;
?>
                        <tr class="leave-request-row">
                             <td align="center" valign="middle" class="text-center att-date leave-name" data-leave-type="<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['leave_name'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
"><?php ob_start();
echo get_status($_smarty_tpl->tpl_vars['sem_row']->value['leave_name']);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</td>
                            <td align="center" valign="middle" class="text-center att-date start-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['leave_start_date'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</td>
                            <td align="center" valign="middle" class="text-center att-date end-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['leave_end_date'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</td>
                            <td align="center" valign="middle" class="text-center att-date "><?php ob_start();
echo get_status($_smarty_tpl->tpl_vars['sem_row']->value['leave_type']);
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</td>
                            <td align="center" valign="middle" class="text-center att-date reason-box"><?php ob_start();
echo display_no_character($_smarty_tpl->tpl_vars['sem_row']->value['reason']);
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</td>
                            <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['approved_by'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</td>
                            <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['applied_days'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</td>
                            <td align="center" valign="middle" class="text-center att-date status-row">
                                <span class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['status'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
"><?php ob_start();
echo get_status($_smarty_tpl->tpl_vars['sem_row']->value['status']);
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</span>
                            </td>
                            <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['action'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php ob_start();
} else {
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>

                            <tr >
                                <td colspan="10">
                                    <div class="mb-5 ">
                                     <img
                                        alt=""
                                        src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
public/assets/images/images/no_data_found_new.png"
                                        height="150"
                                        width="150"
                                         class="mt-5"
                                    />
                                    <br>
                                    <span class="mb-4 no-data-found-message">No leave data found!</span>
                                    </div>
                                </td>
                            </tr>


                        <?php ob_start();
}
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
 



               	</tbody>
            </table>
        </div>
    </div>
</div>

</div>

<div class="modal fade leave-popup-block" id="employee_leave_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Leave Reuqest</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="main-content">
                <div class="card mb-3 user-details-block">
                    <input type="hidden"  value="" id="mode">
                    <input type="hidden"  value="" id="leave_end_date">
                     <input type="hidden"  value="" id="leave_start_date">
                     <input type="hidden"  value="" id="leave_request_id">
                        <div class="row g-0 m-3">
                            
                            <div class="col-2">
                                <div class="image-block">
                                    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
/public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['profile_image']->value;
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
" width="100" height="100" >                                   
                                </div>
                            </div>
                            <div class="col-10 employee-detils">
                                <div class="row">
                                	<div class="col-4 p-1">
                                		<span class="employee-name"><?php ob_start();
echo $_smarty_tpl->tpl_vars['first_name']->value;
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['middle_name']->value;
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['last_name']->value;
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
</span> 
                            			<span class="emp-grid-code" id="employee_code"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_code']->value;
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
</span>
                                	</div>
                                	<div class="col-4 p-1">
                                		<span class="title-box">Location</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['city']->value;
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
</span>
                                	</div>
                                	<div class="col-4 p-1">
                                		<span class="title-box" >Designation</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['designation']->value;
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
</span>
                                	</div>
                                	<div class="col-4 p-1">
                                		<span class="title-box">Department</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['department']->value;
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
</span>
                                	</div>
                                	<div class="col-4 p-1">
                                		<span class="title-box">Week Off</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_week_off']->value;
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
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
                                    <p class="fs-5 mb-1 fw-bold attendance-lable">Start Date</p>
                                    <span >
                                    	<div class="input-group ">
										  <input type="text" class="form-control" id="start_date"  placeholder="Start Date">
										  <span class="input-group-text"><i class="las la-calendar-alt"></i></span>
										</div>
                                    	
                                    </span>                                    
                                </div>
                            </div>
                            <div class="col-6 p-2">
                                <p class="fs-5 mb-1 fw-bold attendance-lable">End Date</p>
                                <span >
                                    	<div class="input-group ">
										  <input type="text" class="form-control" id="end_date"  placeholder="End Date">
										  <span class="input-group-text"><i class="las la-calendar-alt"></i></span>
										</div>
                                    	
                                </span>  
                                    
                            </div>
                            <div class="col-6 p-2">
                                <div class=" half-full-day-box ms-3">
                                    <p class="fs-5 mb-1 fw-bold attendance-lable">Leave Name</p>
                                    <div class=" select-box">
                                    <select class="form-select form-control" name="leave_name" id="leave_name">
                                            <option value=""></option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leave_type']->value, 'sem_row', false, 'sem_index');
$_smarty_tpl->tpl_vars['sem_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sem_index']->value => $_smarty_tpl->tpl_vars['sem_row']->value) {
$_smarty_tpl->tpl_vars['sem_row']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['sem_row']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['sem_row']->value['val'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                </div>  
                                    
                            </div>
                            <div class="col-6 p-2">
                                <div class=" half-full-day-box ">
                                    <p class="fs-5 mb-1 fw-bold attendance-lable">Leave Type</p>
                                    <div class=" select-box">
                                    <select class="form-select form-control" name="leave_type" id="leave_type">
                                        <option value=""></option>
                                            <option value="half_day" >Half Day</option>
                                            <option value="full_day" >Full Day</option>
                                    </select>
                                </div>
                                </div>  
                                    
                            </div>
                            <div class="col-6 p-2 ms-3">
                            	<div class="">
	                                <p class="fs-5 mb-1 fw-bold attendance-lable">Leave Reason</p>
	                                <span >
	                                    	<textarea class="form-control" id="leave_reason" placeholder="Leave reason" id="floatingTextarea"></textarea>
	                                    	
	                                </span>
	                            </div>  
                                    
                            </div>
                            
                        </div>
                    </div>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary submit-leave" >Submit</button>
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
    <link rel="stylesheet" href="public/css/leave.css" />

    <?php echo '<script'; ?>
 type="text/javascript" >
        var month_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['months']->value);
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>
;
        var leave_dates = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['leave_dates']->value);
$_prefixVariable30 = ob_get_clean();
echo $_prefixVariable30;?>
;
        var leave_range_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['leave_range_arr']->value);
$_prefixVariable31 = ob_get_clean();
echo $_prefixVariable31;?>
;
        var date_range_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['date_range_arr']->value);
$_prefixVariable32 = ob_get_clean();
echo $_prefixVariable32;?>

    <?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/employee_leave.js"><?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

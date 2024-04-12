<?php
/* Smarty version 4.3.2, created on 2024-04-09 18:02:27
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_shift.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6615355b65d306_60849649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35f262aaf88be419d68ad52ed11f797ebc43db35' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_shift.tpl',
      1 => 1712665946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6615355b65d306_60849649 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-middle-container">
	<aside class="right-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between filter-title-bolock">
            <a href="javascript:void(0)" class="text-nowrap logo-img">
                Filter
            </a>
            <div class="close-filter-btn d-xl-none d-block filter-popup cursor-pointer" >
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px -24px;">
                <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: -7px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow-y: scroll;">
                            <div class="simplebar-content" style="padding: 0px 15px;">
                                <ul id="sidebarnav" class="in">
                                    
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Department Name </span>

                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="department_name_search" class="form-control" placeholder="Department Name">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Department Code</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="department_code_search" class="form-control" placeholder="Department Code">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Added By</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="added_by_search"  placeholder="Added By">
                                              <!-- <span class="input-group-text"><i class="las la-calendar-alt"></i></span> -->
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Added Date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="added_date_search" class="form-control"  placeholder="Added Date">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Updated By</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="updated_by_search"  placeholder="Updated By">
                                              <!-- <span class="input-group-text"><i class="las la-calendar-alt"></i></span> -->
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Updated Date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="updated_date_search"  placeholder="Updated Date">
                                              <!-- <span class="input-group-text"><i class="las la-calendar-alt"></i></span> -->
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 810px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 214px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div>
        </nav>
         <div class="filter-popup-btn">
            <button class="btn btn-primary reset-filter">Reset</button>
            <button class="btn btn-primary search-filter">Search</button>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Employee Shift</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary icon-box">
				<div class="timesheet-summary-lst">
                   <div class="dropdown grid-drop-down reset-filter" title="Reset Filter">
                        <button class="btn btn-secondary top-btn-row" type="button"  >
                            <i class="ti ti-refresh " style="color: black"></i> 
                        </button>
                    </div>
                </div>
            <div class="timesheet-summary-lst">
                   <div class="dropdown grid-drop-down filter-popup" title="Filter">
                        <button class="btn btn-secondary top-btn-row" type="button"  >
                            <i class="ti ti-filter " style="color: black"></i> 
                        </button>
                    </div>
                </div>
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Group</span>
					</button>
				</div>
			</div>
		</div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">

			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" id="employee_shift" style="border-collapse: collapse;" border-color="#e1e1e1">
					<thead>
						<tr class="text-center">
							<!-- <th scope="col">#</th> -->
							<th scope="col">Group Name</th>
							<th scope="col">Shift Name</th>
							<th scope="col">Shift type</th>
							<th scope="col">Start Date</th>
							<th scope="col">End Date</th>
							<th scope="col">Start Time</th>
							<th scope="col">End Time</th>
							<th scope="col">Employee Count</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						<?php if (count($_smarty_tpl->tpl_vars['data']->value) > 0) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'data_row', false, 'data_index');
$_smarty_tpl->tpl_vars['data_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_index']->value => $_smarty_tpl->tpl_vars['data_row']->value) {
$_smarty_tpl->tpl_vars['data_row']->do_else = false;
?>
						<tr class="leave-request-row">
							<!-- <td><?php echo $_smarty_tpl->tpl_vars['data_index']->value+1;?>
</td> -->
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['group_title'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['shift_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['shift_type'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['start_date'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['end_date'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['start_time'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['end_time'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['employee_ids_count'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['action'];?>
</td>

						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
						<tr>
							<td colspan="8">
								<div class="mb-5">
									<img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
									<br />
									<span class="mb-4 no-data-found-message">No data found!</span>
								</div>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

<!-- <div class="modal fade leave-popup-block" id="Shift_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered ">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalToggleLabel">Employee Shift</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form id="shiftForm" action="javascript:void(0)" method="post">
<div class="modal-body">
<div class="main-content">

<div class="card mb-3 leave-box">
<div class="row g-0 m-3">


<div class="mb-3">
<label for="group_title" class="form-label">Group Title</label>
<input type="text" class="form-control group_title" id="group_title" name="group_title"  placeholder="Enter Group Title">
</div>
<div class="mb-3">
<label for="shift_id" class="form-label">Shift</label>
<select class="form-select shift_id" name="shift_id" id="shift_id">
<option value="">Select Shift</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shift']->value, 'shift_row', false, 'shift_index');
$_smarty_tpl->tpl_vars['shift_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shift_index']->value => $_smarty_tpl->tpl_vars['shift_row']->value) {
$_smarty_tpl->tpl_vars['shift_row']->do_else = false;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['shift_row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['shift_row']->value['shift_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['shift_row']->value['shift_type'];?>
)</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</div>
<div class="mb-3">
<label for="employee_ids" class="form-label">Employee</label>
<select class="form-select employee_ids" name="employee_ids" id="employee_ids">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employee']->value, 'employee_row', false, 'employee_index');
$_smarty_tpl->tpl_vars['employee_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee_index']->value => $_smarty_tpl->tpl_vars['employee_row']->value) {
$_smarty_tpl->tpl_vars['employee_row']->do_else = false;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['employee_row']->value['employee_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['employee_row']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['employee_row']->value['middle_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['employee_row']->value['last_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['employee_row']->value['employee_code'];?>
)</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</div>

<input type="hidden" class="form-control employee_shift_id "  name="employee_shift_id" >


</div>
</div>
</div>


</div>





<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary submit-shift">Submit</button>
</div>
</form>
</div>
</div>
</div>  -->

<!-- view shift details popup -->

<div class="modal fade" id="Shift_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Employee Shift</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="shiftForm" action="javascript:void(0)" method="post">
				<div class="modal-body ">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">
								<div class="col-6 mb-3">
									<label for="group_title" class="form-label">Group Title</label>
									<input type="text" class="form-control group_title" id="group_title" name="group_title"  placeholder="Enter Group Title">
								</div>
								<div class="col-6  mb-3">
                                    <label for="start_date" class="form-label">Start Date <span class="star_required">*</span></label>
                                    <div class="input-group">
                                    	<input type="text" class="form-control" id="start_date" name="start_date" value="" placeholder="Select Start Date" />
                                    	<span class="input-group-text"><i class="las la-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class=" col-6 mb-3">
                                    <label for="end_date" class="form-label">End Date <span class="star_required">*</span></label>
                                    <div class="input-group">
                                    	<input type="text" class="form-control" id="end_date" name="end_date" value="" placeholder="Select End Date" />
                                    	<span class="input-group-text"><i class="las la-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-6  mb-3 select-box-block" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['role'] != 'arom') {?> style="display: none" <?php }?>>
                                    <label for="company_id" class="form-label">Company</label>
                                    <select class="form-select company_id" name="company_id" id="company_id">
                                        <option value="">Select Company</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company_details']->value, 'company_name');
$_smarty_tpl->tpl_vars['company_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company_name']->value) {
$_smarty_tpl->tpl_vars['company_name']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['company_name']->value['company_id'] == $_smarty_tpl->tpl_vars['selected_company']->value) {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['company_name']->value['company_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['company_name']->value['company_name'];?>
</option>
                                            <?php } else { ?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['company_name']->value['company_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['company_name']->value['company_name'];?>
</option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="col-6  mb-3">
									<label for="department" class="form-label">Department</label>
									<select class="form-select department" name="department" id="department">
										<option value="">Select Department</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'departments_val');
$_smarty_tpl->tpl_vars['departments_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['departments_val']->value) {
$_smarty_tpl->tpl_vars['departments_val']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['departments_val']->value['department_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['departments_val']->value['departmen_name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['departments_val']->value['department_code'];?>
]</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="col-6  mb-3">
									<label for="shift_id" class="form-label">Shift</label>
									<select class="form-select shift_id" name="shift_id" id="shift_id">
										<option value="">Select Shift</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shift']->value, 'shift_row', false, 'shift_index');
$_smarty_tpl->tpl_vars['shift_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shift_index']->value => $_smarty_tpl->tpl_vars['shift_row']->value) {
$_smarty_tpl->tpl_vars['shift_row']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['shift_row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['shift_row']->value['shift_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['shift_row']->value['shift_type'];?>
)</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="col-6  mb-3">
									<label for="employee_ids" class="form-label">Employee</label>
									<select class="form-select employee_ids" name="employee_ids" id="employee_ids" placeholder="Select Employee">

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employee']->value, 'employee_row', false, 'employee_index');
$_smarty_tpl->tpl_vars['employee_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee_index']->value => $_smarty_tpl->tpl_vars['employee_row']->value) {
$_smarty_tpl->tpl_vars['employee_row']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['employee_row']->value['employee_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['employee_row']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['employee_row']->value['middle_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['employee_row']->value['last_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['employee_row']->value['employee_code'];?>
)</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>


								<input type="hidden" class="form-control employee_shift_id "  name="employee_shift_id" >
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit-shift">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="employee_shift_details" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">

			<div class="modal-header border-bottom">
				<h4 class="modal-title" id="exampleModalToggleLabel">Group  Details</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>


			<div class="modal-body border-bottom employee-shift-conatiner">

			</div>


			<div class="modal-footer">

				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 19px;">Close</button>
				<!-- <button class="btn btn-primary submit-active" style="font-size: 19px;">Yes</button> -->
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
<style media="screen">
	.select2-container{
		width: 100% !important;
	}
	.select2-container.select2-container--default.select2-container--open{
		z-index: 1056;
	}

	.select2-container--default .select2-results__option[aria-selected=true] {
	    background-color: #ddd;
	    pointer-events: none;
	    color:#000;
	        color: var(--bs-body-color);
	}
	b.val-box {
		    color: #000000 !important;
	}
	table thead th{
		color: #504d4d;
	}
	.leave-box .input-group {
    width: 100% !important;
}
.employee-shift-conatiner .table{
    border: 1px solid #dadada;
}
.employee-shift-conatiner .table tr,.employee-shift-conatiner .table th {
    border: none !important;
}
.employee-shift-conatiner .table>thead,.employee-shift-conatiner .table>thead>th ,.employee-shift-conatiner .table tr{
    display: table;
    table-layout: fixed;
    width: 100%;
    
}
.employee-shift-conatiner .table>tbody{
        display: block;
    max-height: 150px;
    overflow-y: scroll;
}
</style>
<?php echo '<script'; ?>
 type="text/javascript" >
 var selected_company = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['selected_company']->value);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
;
 var no_data_message = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
;
<?php echo '</script'; ?>
>
<link rel="stylesheet" href="public/css/employee_shift.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/employee_shift.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.3.2, created on 2024-04-03 20:00:48
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_shift.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660d6818c2ac20_22816569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35f262aaf88be419d68ad52ed11f797ebc43db35' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_shift.tpl',
      1 => 1711970510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660d6818c2ac20_22816569 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Employee Shift</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
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
				<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" style="border-collapse: collapse;" border-color="#e1e1e1">
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
                                    <label for="start_date" class="form-label">Start Date <span class="star_required">*</span></label>
                                    <div class="input-group">
                                    	<input type="text" class="form-control" id="start_date" name="start_date" value="" placeholder="Select Start Date" />
                                    	<span class="input-group-text"><i class="las la-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date <span class="star_required">*</span></label>
                                    <div class="input-group">
                                    	<input type="text" class="form-control" id="end_date" name="end_date" value="" placeholder="Select End Date" />
                                    	<span class="input-group-text"><i class="las la-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
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


			<div class="modal-body border-bottom">

				<!-- Details satrt-->
				<div class="details">


					<!-- Grp detatils start -->
					<table class="table">
						<tbody >
							<tr>
								<td>	
									<p > <label class="fs-4 mb-1 ">Group Title:</label> <b class="val-box"><span id="group_title_v"></span></b>

									</p>
								</td>
								<td><p ><label class="fs-4 mb-1 ">Shift Name: </label> <b class="val-box"><span id="shift_name_v"></span></b></p>
								</td>
							</tr>
							<tr>
								<td><p><label class="fs-4 mb-1 ">Start Date: </label> <b class="val-box"><span id="start_date_v"></span></b></p>
								</td>
								<td><p><label class="fs-4 mb-1 ">End Date: </label> <b class="val-box"><span id="end_date_v"></span></b></p>
								</td>
							</tr>
							<tr>
								<td><p><label class="fs-4 mb-1 ">Start Time: </label> <b class="val-box"><span id="start_time_v"></span></b></p>
								</td>
								<td><p><label class="fs-4 mb-1 ">End Time: </label> <b class="val-box"><span id="end_time_v"></span></b></p>
								</td>
							</tr>
							<tr>
								<td><p><label class="fs-4 mb-1 ">Shift Type: </label> <b class="val-box"><span id="shift_type_v"></span></b></p>
								</td>
								<td><p><label class="fs-4 mb-1 ">Total Employee: </label> <b class="val-box"><span id="employee_count_v"></span></b></p>
								</td>
							</tr>
						</tbody>
					</table>

					<!--grp detail end  -->
					<h5 class="mb-3">Employee Details</h5>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Employee Code</th>
								<th scope="col">Department</th>
							</tr>
						</thead>
						<tbody class="shift_employee_details">

						</tbody>
					</table>
				</div>

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
</style>
<?php echo '<script'; ?>
 type="text/javascript" >
 var selected_company = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['selected_company']->value);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

<?php echo '</script'; ?>
>
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

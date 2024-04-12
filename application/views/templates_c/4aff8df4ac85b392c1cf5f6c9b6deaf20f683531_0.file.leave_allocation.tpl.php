<?php
/* Smarty version 4.3.2, created on 2024-04-05 22:08:15
  from '/var/www/html/extra_work/HRMS/application/views/templates/leave_allocation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661028f7b5ccd0_48569331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aff8df4ac85b392c1cf5f6c9b6deaf20f683531' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/leave_allocation.tpl',
      1 => 1712333501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661028f7b5ccd0_48569331 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Leave Allocation</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Allocation</span>
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
							<th scope="col">Department Name</th>
							<th scope="col">Designation Name</th>
							<th scope="col">Sick Leave</th>
							<th scope="col">paid Leave</th>
							<th scope="col">casual Leave</th>
							<th scope="col">Total Leave</th>
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
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['departmen_name'];?>
 </td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['designation_name'];?>
 (Grade - <?php echo $_smarty_tpl->tpl_vars['data_row']->value['grads'];?>
)</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['sick_leave'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['paid_leave'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['casual_leave'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['total_leave'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['action'];?>
</td>

						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
						<tr>
							<td colspan="7">
								<div class="mb-5">
									<img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
									<br />
									<span class="mb-4 no-data-found-message">No leave allocation data found!</span>
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

<div class="modal fade leave-popup-block" id="leave_allocation_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Leave Allocation</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="leaveallocationForm" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">
								<div class="mb-3">
									<label for="department_id" class="form-label">Department</label>
									<select class="form-select department_id" name="department_id" id="department_id">
										<option value="">Select Department</option>

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['department']->value, 'department_row', false, 'department_index');
$_smarty_tpl->tpl_vars['department_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department_index']->value => $_smarty_tpl->tpl_vars['department_row']->value) {
$_smarty_tpl->tpl_vars['department_row']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['department_row']->value['department_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['department_row']->value['departmen_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['department_row']->value['department_code'];?>
)</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>

								<div class="mb-3">
									<label for="designation_id" class="form-label">Designation</label>
									<select class="form-select designation_id" name="designation_id" id="designation_id">
										<option value="">Select Designation</option>
									</select>
								</div>

								<div class="mb-3">
									<label for="sick_leave" class="form-label">Sick Leave</label>
									<input type="number" class="form-control sick_leave" id="sick_leave" name="sick_leave"  placeholder="Enter sick leave">
								</div>

								<div class="mb-3">
									<label for="paid_leave" class="form-label">Paid Leave</label>
									<input type="number" class="form-control paid_leave" id="paid_leave" name="paid_leave"  placeholder="Enter paid leave">
								</div>
								<div class="mb-3">
									<label for="casual_leave" class="form-label">Casual Leave</label>
									<input type="number" class="form-control casual_leave" id="casual_leave" name="casual_leave" placeholder="Enter casual leave" >
								</div>
								<input type="hidden" class="form-control leave_allocation_id "  name="id" >


							</div>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit-leave-allocation">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<!-- extra for footer -->
</div>
</div>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" >
var holiday_dates = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['holiday_dates']->value);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
;
<?php echo '</script'; ?>
>
<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />

<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/leave_allocation.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

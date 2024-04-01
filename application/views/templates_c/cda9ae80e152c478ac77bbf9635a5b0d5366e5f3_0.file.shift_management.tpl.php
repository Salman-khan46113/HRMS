<?php
/* Smarty version 4.3.2, created on 2024-03-31 23:20:38
  from '/var/www/html/extra_work/employee/application/views/templates/shift_management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6609a26e6b1b61_51368168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cda9ae80e152c478ac77bbf9635a5b0d5366e5f3' => 
    array (
      0 => '/var/www/html/extra_work/employee/application/views/templates/shift_management.tpl',
      1 => 1711907386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6609a26e6b1b61_51368168 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Shift Management</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Shift</span>
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
							<th scope="col">Comapny Name</th>
							<th scope="col">Department</th>
							<th scope="col">Shift Name</th>
							<th scope="col">Shift type</th>
							<th scope="col">Start Time</th>
							<th scope="col">End Time</th>
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
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['company_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['departmen_name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['data_row']->value['department_code'];?>
]</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['shift_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['shift_type'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['start_time'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['end_time'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['action'];?>
</td>

						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
						<tr>
							<td colspan="6">
								<div class="mb-5">
									<img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
									<br />
									<span class="mb-4 no-data-found-message">No shift data found!</span>
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

<div class="modal fade leave-popup-block" id="Shift_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Shift</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="shiftForm" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">


								<div class="mb-3">
									<label for="shift_name" class="form-label">Shift Name</label>
									<input type="text" class="form-control shift_name" id="shift_name" name="shift_name"  placeholder="Enter Shift Name">
								</div>
								<div class="mb-3 select-box-block" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['role'] != 'arom') {?> style="display: none" <?php }?>>
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
									<label for="shift_type" class="form-label">Shift type</label>
									<select class="form-select shift_type" name="shift_type" id="shift_type">
										<option value="">Select Shift Type</option>
										<option value="I">I</option>
										<option value="II">II</option>
										<option value="III">III</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="start_time" class="form-label">Start Time</label>
									<input type="text" class="form-control start_time" id="start_time" name="start_time"  placeholder="Enter Satrt Time">
								</div>
								<div class="mb-3">
									<label for="end_time" class="form-label">End Time</label>
									<input type="text" class="form-control end_time" id="end_time" name="end_time" placeholder="Enter End time" >
								</div>
								<input type="hidden" class="form-control shift_id"  name="id" >


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
</div>
<!-- extra for footer -->
</div>
</div>
</div>
</div>
<style type="text/css">
	.chosen-disabled *{
	    
	    cursor: not-allowed;
	    /* cursor: none; */
	}
</style>
<?php echo '<script'; ?>
 type="text/javascript" >
var holiday_dates = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['holiday_dates']->value);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
;
 var selected_company = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['selected_company']->value);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

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
 src="public/js/shift_management.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

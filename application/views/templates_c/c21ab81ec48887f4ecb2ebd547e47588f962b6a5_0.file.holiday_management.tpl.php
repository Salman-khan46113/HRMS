<?php
/* Smarty version 4.3.2, created on 2024-04-05 21:40:28
  from '/var/www/html/extra_work/HRMS/application/views/templates/holiday_management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661022740dfd35_43166732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c21ab81ec48887f4ecb2ebd547e47588f962b6a5' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/holiday_management.tpl',
      1 => 1710764215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661022740dfd35_43166732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra_work/HRMS/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Holiday Management</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Holiday</span>
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
							<th scope="col">Holiday Name</th>
							<th scope="col">Holiday Date</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						<?php if (count($_smarty_tpl->tpl_vars['holiday']->value) > 0) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holiday']->value, 'holiday_row', false, 'holiday_index');
$_smarty_tpl->tpl_vars['holiday_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['holiday_index']->value => $_smarty_tpl->tpl_vars['holiday_row']->value) {
$_smarty_tpl->tpl_vars['holiday_row']->do_else = false;
?>
						<tr class="leave-request-row">
							<!-- <td><?php echo $_smarty_tpl->tpl_vars['holiday_index']->value+1;?>
</td> -->
							<td><?php echo $_smarty_tpl->tpl_vars['holiday_row']->value['holiday_name'];?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['holiday_row']->value['holiday_date'],"%d %B %Y");?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['holiday_row']->value['action'];?>
</td>

					</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
					<tr>
						<td colspan="4">
							<div class="mb-5">
								<img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
								<br />
								<span class="mb-4 no-data-found-message">No holiday data found!</span>
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

<div class="modal fade leave-popup-block" id="employee_holiday_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Holiday</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="holidayForm" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">


								<div class="mb-3">
									<label for="holidayName" class="form-label">Holiday Name</label>
									<input type="text" class="form-control holiday_name" id="holiday_name" name="holiday_name"  placeholder="Enter Holiday Name">
								</div>
								<div class="mb-3">
									<label for="holidayDate" class="form-label">Holiday Date</label>
									<input type="text" class="form-control holiday_date" id="holiday_date" name="holiday_date" placeholder="dd-mm-yy" >
								</div>
								<input type="hidden" class="form-control holiday_id"  name="id" >


							</div>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit-holiday">Submit</button>
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
<?php echo '<script'; ?>
 src="public/js/holiday-management.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

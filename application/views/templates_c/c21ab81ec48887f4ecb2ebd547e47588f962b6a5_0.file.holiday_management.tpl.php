<?php
/* Smarty version 4.3.2, created on 2024-04-18 11:27:29
  from '/var/www/html/extra_work/HRMS/application/views/templates/holiday_management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6620b6492b9637_14822728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c21ab81ec48887f4ecb2ebd547e47588f962b6a5' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/holiday_management.tpl',
      1 => 1713265212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6620b6492b9637_14822728 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Holiday Management</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst year-drop-down ">
                <select class="form-select form-control" name="month_drop_down" id="year_drop_down">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_arr']->value, 'year', false, 'key_val');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['key_val']->value+1 == count($_smarty_tpl->tpl_vars['year_arr']->value)) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                            <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                        <?php ob_start();
} else {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                         <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
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
						<span>Add Holiday</span>
					</button>
				</div>
			</div>
		</div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">

			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" style="border-collapse: collapse;" border-color="#e1e1e1" id="holiday-management-table">
					<thead>
                        <tr>
                            <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

                            <th><b>Search <?php ob_start();
echo $_smarty_tpl->tpl_vars['val']->value['title'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</b></th>
                            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

                        </tr>
                    </thead>
                    <tbody></tbody>
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
									<div class="input-group">
										<input type="text" class="form-control holiday_date" id="holiday_date" name="holiday_date" placeholder="Select Holiday Date" >
									<span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
                                
                                </div>
                                
								</div>
								<input type="hidden" class="form-control holiday_id"  name="id" value="" id="holiday_id">


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
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
;
    var column_details =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['data']->value);
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
;
    var page_length_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['page_length_arr']->value);
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>

    var is_searching_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_searching_enable']->value);
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
;
    var is_top_searching_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_top_searching_enable']->value);
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
;
    var is_paging_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_paging_enable']->value);
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
;
    var is_serverSide =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_serverSide']->value);
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
;
    var no_data_message =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
;
    var is_ordering =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_ordering']->value);
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
;
    var sorting_column = <?php ob_start();
echo $_smarty_tpl->tpl_vars['sorting_column']->value;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>

    var api_name =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['api_name']->value);
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
;
    var page_name = 'teacher_page';
    var base_url = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
;
    <?php echo '</script'; ?>
>

<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/holiday_management.css" />
<style type="text/css">
	.timesheet-container .custom-content-table-with-fixed-column {
    overflow-y: auto;
    height: unset;

}
</style>
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/holiday-management.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

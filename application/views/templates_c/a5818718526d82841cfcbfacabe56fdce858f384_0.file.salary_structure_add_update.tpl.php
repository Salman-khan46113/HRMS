<?php
/* Smarty version 4.3.2, created on 2024-04-23 10:10:50
  from '/var/www/html/HRMS/application/views/templates/salary_structure_add_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66273bd2541cb0_74721474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5818718526d82841cfcbfacabe56fdce858f384' => 
    array (
      0 => '/var/www/html/HRMS/application/views/templates/salary_structure_add_update.tpl',
      1 => 1713846708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:salary_structure_component_row.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66273bd2541cb0_74721474 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3><?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Add') {?>Add Salary Structure<?php } else { ?>Update Salary Structure<?php }?></h3>
		</div>
		<div class="sub-header-right pull-right">
          <div class="timesheet-summary icon-box">
            <div class="timesheet-summary-lst">
                <div class="dropdown grid-drop-down">
                  <a class="btn btn-secondary top-btn-row" href="<?php echo get_entiry_url("salary_structure","List");?>
" title="Back"  >
                        <i class="ti ti-arrow-left"></i>
                    
                  </a>
                  
                </div>
            </div>
          </div>
        </div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">
            <form action="javascript:void(0)" method="POST" id="salary_structure_form">
			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<div class="form-contain-box p-4">
                        <input type="hidden" name="mode" id="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
">
                        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>
                            <input type="hidden" name="company_id"  value="<?php echo $_smarty_tpl->tpl_vars['selected_company']->value;?>
">
                            <input type="hidden" name="department_id"  value="<?php echo $_smarty_tpl->tpl_vars['department_id']->value;?>
">
                            <input type="hidden" name="designation_id"  value="<?php echo $_smarty_tpl->tpl_vars['designation_id']->value;?>
">

                        <?php }?>
                        <div class="column-view-parent form-row row-fluid tab-focus-child">
                            <div class="two-block-view tab-focus-element" id="cc_sh_sys_static_field_1">
                                <div class="form-right-div form-static-div">
                                    <h3 class="inner-title">
                                        Company Details
                                    </h3>
                                </div>
                            </div>
                            <div class="two-block-view tab-focus-element" id="cc_sh_sys_static_field_4"><div class="form-right-div form-static-div">&nbsp;&nbsp;</div></div>
                        </div>
                        <div class="form-contain company-detail-box">
                            <div class="row mb-3">
                                <div class="col-6 form-input-box">
                                    <label for="email" class="form-label">Company <span class="star_required">*</span></label>
                                    <div class="input-group select-box">
                                        <select class="form-select form-control" name="company_id" id="company_id" <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>disabled<?php }?>>
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
                                </div>

                                <div class="col-6 form-input-box ">
                                    <label for="dob" class="form-label">Department <span class="star_required">*</span></label>

                                    <div class="input-group select-box" >
                                        <select class="form-select form-control" name="department_id" id="department_id" <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>disabled<?php }?>>
                                            <option value="">Select Department</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department_val');
$_smarty_tpl->tpl_vars['department_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department_val']->value) {
$_smarty_tpl->tpl_vars['department_val']->do_else = false;
?> 
                                                <?php if ($_smarty_tpl->tpl_vars['department_val']->value['department_id'] == $_smarty_tpl->tpl_vars['department_id']->value) {?> 
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['department_val']->value['departmen_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_code'];?>
)</option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['department_val']->value['departmen_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_code'];?>
)</option>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-6 form-input-box">
                                    <label for="dob" class="form-label">Designation <span class="star_required">*</span></label>

                                    <div class="input-group select-box">
                                       <select class="form-select form-control" name="designation_id" id="designation_id" <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>disabled<?php }?>>
                                            <option value="">Select Designation</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['designation']->value, 'designation_val');
$_smarty_tpl->tpl_vars['designation_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['designation_val']->value) {
$_smarty_tpl->tpl_vars['designation_val']->do_else = false;
?> 
                                                <?php if ($_smarty_tpl->tpl_vars['designation_val']->value['id'] == $_smarty_tpl->tpl_vars['designation_id']->value) {?> 
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['designation_val']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['designation_val']->value['designation_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['designation_val']->value['grads'];?>
)</option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['designation_val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['designation_val']->value['designation_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['designation_val']->value['grads'];?>
)</option>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 form-input-box">
                                    <label for="dob" class="form-label">CTC <span class="star_required">*</span></label>

                                    <div class="input-group">
                                        <input type="text" class="form-control number-formatter"  id="ctc_value" name="ctc_value" placeholder="Enter CTC" value="<?php echo getNumberFormate($_smarty_tpl->tpl_vars['ctc_value']->value);?>
" />
                                    </div>
                                </div>
                            </div>
                            <div class="column-view-parent form-row row-fluid tab-focus-child">
                                <div class="two-block-view tab-focus-element" id="cc_sh_sys_static_field_1">
                                    <div class="form-right-div form-static-div">
                                        <h3 class="inner-title">
                                            Salary Component
                                            <div class="status_color float-right"> 
                                                <ul class="float-left mr-3">
                                                   <li class="label_used"><span ></span>Existing Component</li>
                                                   <li class="label_compulsory"><input style="width: 1px !important;    height: 23px !important;border: 1px solid white;border-radius: 14px !important;" type="checkbox" class="form-check-input is_compulsory  disabled_check " checked>Compulsory Component</li>
                                                </ul>                                                 
                                            </div>
                                        </h3>
                                    </div>
                                </div>
                                <div class="two-block-view tab-focus-element" id="cc_sh_sys_static_field_4"><div class="form-right-div form-static-div">&nbsp;&nbsp;</div></div>
                            </div>
                            <div class="content noPad form-table-row" style="display: block;">
                                <table class="responsive dataTable table table-bordered" id="component-table">
                                    <thead>
                                        <tr>
                                            <th width="20%">Component Name</th>
                                            <th width="20%">Component Type</th>
                                            <th width="20%">Component Value Type</th>
                                            <th width="20%">Component Value<em class="color-red">*</em></th>
                                            <th width="12%">Is Compulsory</th>
                                        </tr>
                                    </thead>
                                    <tbody id="salary-component-row-box">
                                         <?php $_smarty_tpl->_subTemplateRender('file:salary_structure_component_row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    </tbody>
                                </table>
                            </div>

                        </div>                    
                </div>
			</div>
             <div class="frm-bot-btn frm-ctrls-bar bot-btn-rtl mt-3 w-100 d-inline-block mb-3">
                            <div class="action-btn-align" id="action_btn_container">
                                <div class="action-btn-align" id="action_btn_container">
                                    <a  name="next" href="./salary-component.html"  class="btn btn-outline-danger py-8 fs-4 rounded-2 discard me-2" >
                                        Discard
                                    </a>
                                    <button  name="submit" type="submit" class="btn btn-primary py-8 fs-4 rounded-2 me-3 next">
                                        Submit
                                    </button>
                                </div>
                            </div>
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
>
    var mode =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['mode']->value);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
;
    var selected_company = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['selected_company']->value);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

<?php echo '</script'; ?>
>
<link rel="stylesheet" href="public/css/salary_structure_add_update.css" />
<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/salary_structure_form.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

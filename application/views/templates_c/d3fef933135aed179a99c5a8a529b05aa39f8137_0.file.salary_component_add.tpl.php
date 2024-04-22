<?php
/* Smarty version 4.3.2, created on 2024-04-21 00:17:44
  from '/var/www/html/extra_work/HRMS/application/views/templates/salary_component_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66240dd0389996_63582997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3fef933135aed179a99c5a8a529b05aa39f8137' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/salary_component_add.tpl',
      1 => 1713638863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:salary_component_row.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66240dd0389996_63582997 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Add Salary Components</h3>
		</div>
		<div class="sub-header-right pull-right">
          <div class="timesheet-summary icon-box">
            <div class="timesheet-summary-lst">
                <div class="dropdown grid-drop-down">
                  <a class="btn btn-secondary top-btn-row" href="<?php echo get_entiry_url('salary_component','List','');?>
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
			<form id="SalaryComponentForm" action="javascript:void(0)" method="post">
				<input type="hidden" class="form-control mode"  name="mode" id="mode" value="Add">
			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<div class="form-contain-box ">
					<div class="tabTitle position-relative">
					    <h2 id="cc_sh_sys_static_field_3">
					        <span>Salary Component</span>
					    </h2>
					    <div class="target_rt">
					    
					    	

							<div class="drop-down-div">
								<div class="drop-down-box">
						    	<select class="form-select company_id" name="company_id" id="company_id"  >
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
                                <div class="drop-down-box">
                                	<select class="form-select form-control" name="year_drop_down" id="year_drop_down">
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
                           	</div>
                           		<a href="javascript:void(0)" class="btn btn-primary add-action">
								<i class="ti ti-plus"></i>
								<span>Add New</span>
							</a>
						    
						</div>
					</div>
                    <div class="content noPad form-table-row" style="display: block;">
						    <table class="responsive table table-bordered" id="component-table">
						        <thead>
						            <tr>
						                <th width="20%">Component Name</th>
						                <th width="14%">Component Type<em class="color-red">*</em></th>
						                <th width="14%">Component Value Type<em class="color-red">*</em></th>
						                <th width="14%">Component Value</th>
						                <th width="12%">Is Compulsory<em class="color-red">*</em></th>

						                <th width="20%">Description<span class="def_cur"></span><em class="color-red">*</em></th>
						                <th width="6%">
						                    <div align="center">Actions</div>
						                </th>
						            </tr>
						        </thead>
						        <tbody id="salary-component-row-box">
						             <?php $_smarty_tpl->_subTemplateRender('file:salary_component_row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						        </tbody>
						    </table>
						</div>

                </div>
			</div>
			<div class="frm-bot-btn frm-ctrls-bar bot-btn-rtl mt-3 w-100 d-inline-block">
			    <div class="action-btn-align" id="action_btn_container">
			        <div class="action-btn-align" id="action_btn_container">
			            <a  name="next" href="<?php echo get_entiry_url('salary_component','List','');?>
"  class="btn btn-outline-danger py-8 fs-4 rounded-2 discard me-2" >
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
    // var no_data_message =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
;
    // var selected_company = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['selected_company']->value);
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

<?php echo '</script'; ?>
>

<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/salary_component_add.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/salary_component_add.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

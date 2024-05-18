<?php
/* Smarty version 4.3.2, created on 2024-05-10 22:30:22
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_salary_structure_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_663e52a6020606_44725343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c59b3a68ca84bb0538b232aa22cf6501345aea51' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_salary_structure_form.tpl',
      1 => 1713691388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:salary_structure_component_row.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_663e52a6020606_44725343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h1>
                	Salary
                	
				<a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing"><i class="las la-angle-double-right"></i><em>Employee Salary Structure</em></a>
				<span><?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Extended') {?>Extend Salary Structure<?php } else { ?>Update Salary Structure<?php }?></span>
			</h1>
		</div>
		<div class="sub-header-right pull-right">
          <div class="timesheet-summary icon-box">
            <div class="timesheet-summary-lst">
                <div class="dropdown grid-drop-down">
                  <a class="btn btn-secondary top-btn-row" href="<?php echo get_entiry_url("employee_salary_component","List",$_smarty_tpl->tpl_vars['employee_details']->value['employee_id']);?>
" title="Back"  >
                        <i class="ti ti-arrow-left"></i>
                    
                  </a>
                  
                </div>
            </div>
          </div>
        </div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<form action="javascript:void(0)" method="POST" id="salary_structure_form">
		<div class="timesheet-container">
			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<div class="title-contain-box p-4">
					<h3 class=""><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'Extended') {
echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['refrence_number'];
}?></h3>
					<div class="title-contain-bloack">
						<div class="row">
								<div class="col-3 mt-2">
									<div class="title-box">Company</div>
									<div class="value-box" title="<?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['company_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['company_name'];?>
</div>
								</div>
								<div class="col-3 mt-2">
									<div class="title-box">Employee </div>
									<div class="value-box" ><a title="<?php echo $_smarty_tpl->tpl_vars['employee_details']->value['employee_name'];?>
" href="<?php echo get_entiry_url('employee','View',$_smarty_tpl->tpl_vars['employee_details']->value['employee_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['employee_details']->value['employee_name'];?>
</a></div>
								</div>
								<div class="col-3 mt-2">
									<div class="title-box">Department</div>
									<div class="value-box" title="<?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['department'];?>
"><?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['department'];?>
</div>
								</div>
								<div class="col-3 mt-2">
									<div class="title-box">Designation</div>
									<div class="value-box" title="<?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['designation'];?>
"><?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['designation'];?>
</div>
								</div>
								<div class="col-3 mt-2">
									<div class="title-box">CTC</div>
									<div class="value-box mt-1"><input type="text" class="form-control number-formatter"  id="ctc_value" name="ctc_value" placeholder="Enter CTC" value="<?php echo getNumberFormate($_smarty_tpl->tpl_vars['designation_salary_structure']->value['ctc_value']);?>
" /></div>
								</div>
								<div class="col-3 mt-2">
									<div class="title-box">Effective From</div>
									<div class="value-box input-group mt-1">
										<input type="text" id="effective_date_from" name="effective_date_from" class="form-control"  placeholder="Effective From" value="<?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['effective_from'];?>
">
                                              <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
									</div>
								</div>
								<div class="col-3 mt-2">
									<div class="title-box">Effective To</div>
									<div class="value-box input-group mt-1">
										<input type="text" id="effective_date_to" name="effective_date_to" class="form-control"  placeholder="Effective To" value="<?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['effective_to'];?>
">
                                              <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="timesheet-container">
			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<div class="form-contain-box p-4">
                        <input type="hidden" name="mode" id="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
">
                        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <input type="hidden" name="company_id"  value="<?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['company_id'];?>
">
                        <input type="hidden" name="department_id"  value="<?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['department_id'];?>
">
                        <input type="hidden" name="designation_id"  value="<?php echo $_smarty_tpl->tpl_vars['designation_salary_structure']->value['designation_id'];?>
">
                        <input type="hidden" name="employee_id"  value="<?php echo $_smarty_tpl->tpl_vars['employee_details']->value['employee_id'];?>
">
                        
                        <div class="form-contain company-detail-box">
                            <div class="column-view-parent form-row row-fluid tab-focus-child">
                                <div class="two-block-view tab-focus-element" id="cc_sh_sys_static_field_1">
                                    <div class="form-right-div form-static-div">
                                        <h3 class="inner-title">
                                            Salary Component
                                            <div class="status_color float-right"> 
                                                <ul class="float-left mr-3">
                                                  
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
                                    <a  name="next" href="<?php echo get_entiry_url("employee_salary_component","List",$_smarty_tpl->tpl_vars['employee_details']->value['employee_id']);?>
"  class="btn btn-outline-danger py-8 fs-4 rounded-2 discard me-2" >
                                        Discard
                                    </a>
                                    <button  name="submit" type="submit" class="btn btn-primary py-8 fs-4 rounded-2 me-3 next">
                                        <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Extended') {?>Extend <?php } else { ?>Update<?php }?>
                                    </button>
                                </div>
                            </div>
                        </div>
            
		</div>
	</div>
	</form>

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
;
    var redirect_url = <?php ob_start();
echo json_encode(get_entiry_url("employee_salary_component","List",$_smarty_tpl->tpl_vars['employee_details']->value['employee_id']));
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

<?php echo '</script'; ?>
>
<link rel="stylesheet" href="public/css/salary_structure_add_update.css" />
<link rel="stylesheet" href="public/css/employee_salary_structure_form.css" />
<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/employee_salary_structure_form.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

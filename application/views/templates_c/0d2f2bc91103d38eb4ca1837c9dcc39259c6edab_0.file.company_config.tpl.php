<?php
/* Smarty version 4.3.2, created on 2024-03-31 21:26:21
  from '/var/www/html/extra_work/employee/application/views/templates/company_config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660987a5e36184_07033811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d2f2bc91103d38eb4ca1837c9dcc39259c6edab' => 
    array (
      0 => '/var/www/html/extra_work/employee/application/views/templates/company_config.tpl',
      1 => 1711900559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660987a5e36184_07033811 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-middle-container">
    <div class="sub-header att-sub-header">
        <div class="sub-header-left pull-left">
            <h3>Company Settings</h3>
        </div>
        <div class="sub-header-right pull-right">
          <div class="timesheet-summary icon-box">
            
          </div>
        </div>
        
    </div>
    <div class="inner-container" style="position: static; zoom: 1;">
    	<div class="timesheet-container">
    		<input type="hidden" name="company_id" id="company_id" value="<?php echo $_smarty_tpl->tpl_vars['company_id']->value;?>
">
    		<!-- <?php ob_start();
echo pr($_smarty_tpl->tpl_vars['company_config']->value);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 -->
    	<div class="setting-block">
    		 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company_config']->value, 'company_setting', false, 'company_key');
$_smarty_tpl->tpl_vars['company_setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company_key']->value => $_smarty_tpl->tpl_vars['company_setting']->value) {
$_smarty_tpl->tpl_vars['company_setting']->do_else = false;
?>
	    		<div class="config-box <?php if ($_smarty_tpl->tpl_vars['company_key']->value == (count($_smarty_tpl->tpl_vars['company_config']->value)-1)) {?>mb-4<?php }?> " id="<?php echo $_smarty_tpl->tpl_vars['company_setting']->value['id'];?>
">
	    			<div class="row m-2 p-2 border-bottom border-2 pt-3 pb-4">
	    				<div class="col-6 title-box">
					      <div class="mb-1">
					      	<label><?php echo $_smarty_tpl->tpl_vars['company_setting']->value['title'];?>
</label>
					      </div>	
					      <span class="mt-3"><?php echo $_smarty_tpl->tpl_vars['company_setting']->value['description'];?>
</span>
					    </div>
					    <div class="col-6 text-center pt-3 value-box" data-id="<?php echo $_smarty_tpl->tpl_vars['company_setting']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['company_setting']->value['name'];?>
">
					    	<?php if ($_smarty_tpl->tpl_vars['company_setting']->value['type'] == "check_box") {?>
						      	<div class=" form-switch">
		  						<input class="form-check-input" type="checkbox" role="switch" <?php if ($_smarty_tpl->tpl_vars['company_setting']->value['value'] == 'Yes') {?>checked<?php }?>>
		  
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['company_setting']->value['type'] == "input") {?>
								<input type="text" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['company_setting']->value['value'];?>
">
							<?php }?>
				    	</div>
    				</div>
    			</div>
    		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    		<div class="setting-btn text-center">
    			<button type="button" class="btn btn-primary fs-6 submit-config">Submit</button>
				<button type="button" class="btn btn-danger fs-6" >Discard</button>
    		</div>
    	</div>
    	</div>

    </div>
	</div>
	</div>
	<link rel="stylesheet" href="public/css/comany_setting.css" />
	<?php echo '<script'; ?>
 src="public/js/comany_setting.js"><?php echo '</script'; ?>
>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

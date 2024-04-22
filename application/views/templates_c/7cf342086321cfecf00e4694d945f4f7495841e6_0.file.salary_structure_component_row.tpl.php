<?php
/* Smarty version 4.3.2, created on 2024-04-21 01:08:27
  from '/var/www/html/extra_work/HRMS/application/views/templates/salary_structure_component_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_662419b3e706e4_45711234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf342086321cfecf00e4694d945f4f7495841e6' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/salary_structure_component_row.tpl',
      1 => 1713641906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662419b3e706e4_45711234 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['component_details']->value) > 0) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['component_details']->value, 'component_val', false, 'key_val');
$_smarty_tpl->tpl_vars['component_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['component_val']->value) {
$_smarty_tpl->tpl_vars['component_val']->do_else = false;
?> 
	<tr class="row_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <?php ob_start();
if ($_smarty_tpl->tpl_vars['component_val']->value['used'] == 'Yes' && $_smarty_tpl->tpl_vars['form_type']->value == 'salary_structure') {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
used_component<?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
 component_row">
		<input type="hidden" class="form-control component_id" id="component_id_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" name="component_id[<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['salary_component_id'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
"  />
		<input type="hidden" class="form-control year_val" id="year_val_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" name="year_val[<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['year'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" />
		<input type="hidden" class="form-control description_val" id="description_val_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" name="description_val[<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['description'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
" />
		<input type="hidden" class="form-control is_compulsory_val" id="is_compulsory_val_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
" name="is_compulsory_val[<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['is_compulsory'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
" />
	    <td class="text-center">
	    	<input type="hidden" class="form-control component_name_val" id="component_name_val_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
" name="component_name_val[<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['component_name'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
"  />
	    	<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['component_name'];
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
 
	    </td>
	    <td class="text-center">
	    	<input type="hidden" class="form-control component_type" id="component_type_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
" name="component_type[<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['component_type'];
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
"/>
	    	<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['component_type'];
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>

	    </td>
	    <td class="text-center">
	    	<input type="hidden" class="form-control value_type" id="value_type_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
" name="value_type[<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['value_type'];
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
"  />
	    	<?php ob_start();
echo $_smarty_tpl->tpl_vars['component_val']->value['value_type'];
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>

	    </td>
	    <td class="text-center">
	    	<input type="text" class="form-control number_box number-formatter" id="component_value_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
" name="component_value[<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>
]"  placeholder="Enter Component Value" value="<?php ob_start();
echo getNumberFormate($_smarty_tpl->tpl_vars['component_val']->value['component_value']);
$_prefixVariable30 = ob_get_clean();
echo $_prefixVariable30;?>
">
	    </td>
	    <td class="text-center">
	        <input type="checkbox" class="form-check-input is_compulsory <?php ob_start();
if ($_smarty_tpl->tpl_vars['component_val']->value['is_compulsory'] == 'Yes') {
$_prefixVariable31 = ob_get_clean();
echo $_prefixVariable31;?>
 disabled_check  <?php ob_start();
}
$_prefixVariable32 = ob_get_clean();
echo $_prefixVariable32;?>
" id="is_compulsory_<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable33 = ob_get_clean();
echo $_prefixVariable33;?>
" name="is_compulsory[<?php ob_start();
echo $_smarty_tpl->tpl_vars['key_val']->value;
$_prefixVariable34 = ob_get_clean();
echo $_prefixVariable34;?>
]"  <?php ob_start();
if ($_smarty_tpl->tpl_vars['component_val']->value['is_compulsory'] == 'Yes' || $_smarty_tpl->tpl_vars['component_val']->value['used'] == 'Yes') {
$_prefixVariable35 = ob_get_clean();
echo $_prefixVariable35;?>
checked value="Yes" <?php ob_start();
} else {
$_prefixVariable36 = ob_get_clean();
echo $_prefixVariable36;?>
value="No" <?php ob_start();
}
$_prefixVariable37 = ob_get_clean();
echo $_prefixVariable37;?>
/>
	    </td>
	    
	</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

<?php } else { ?>
	<tr class="odd"><td valign="top" colspan="5" class="dataTables_empty"><div class="p-3"><img class="p-2" src="http://localhost/extra_work/HRMS/public/assets/images/images/no_data_found_new.png" height="100" width="100"><br> No component data found..!</div></td></tr>
<?php }
}
}

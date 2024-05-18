<?php
/* Smarty version 4.3.2, created on 2024-05-16 23:18:44
  from '/var/www/html/extra_work/HRMS/application/views/templates/salary_component_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664646fc7040c9_32441007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5537cd9059e0690a554e077818f36ad87d90f00' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/salary_component_row.tpl',
      1 => 1713547148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664646fc7040c9_32441007 (Smarty_Internal_Template $_smarty_tpl) {
?><tr>
    <td>
        <input type="text" class="form-control component_name" id="component_name_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" name="component_name[<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
]" placeholder="Enter Component Name" />
    </td>
    <td>
        <select class="form-select component_type" id="component_type_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" name="component_type[<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
]">
            <option value="">Select Component Type</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['component_type_arr']->value, 'component_type');
$_smarty_tpl->tpl_vars['component_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['component_type']->value) {
$_smarty_tpl->tpl_vars['component_type']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['component_type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['component_type']->value['val'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </td>
    <td>
        <select class="form-select value_type" id="value_type_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" name="value_type[<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
]">
            <option value="">Select Type</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value_type_arr']->value, 'value_type');
$_smarty_tpl->tpl_vars['value_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_type']->value) {
$_smarty_tpl->tpl_vars['value_type']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['value_type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value_type']->value['val'];?>
</option>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </td>
    <td>
        <input type="text" class="form-control component_value number-formatter" id="component_value_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
" name="component_value[<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
]" placeholder="Enter Component Value" />
    </td>
    <td class="text-center">
        <input type="checkbox" class="form-check-input is_compulsory" id="is_compulsory_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
" name="is_compulsory[<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
]" value="Yes"/>
    </td>
    <td>
        <textarea class="form-control description" id="description_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
" placeholder="Enter Description" name="description[<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
]"></textarea>
    </td>
    <td class="text-center" >
        <i class="ti ti-trash delete-row" title="Delete"></i>
    </td>
</tr>
<?php }
}

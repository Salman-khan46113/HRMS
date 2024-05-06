<?php
/* Smarty version 4.3.2, created on 2024-05-04 12:14:47
  from '/var/www/html/extra_work/HRMS/application/views/templates/filter_attendance_sheet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6635d95f31f213_93228186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a619fd3af28c174257202d96bcf646257302a3a4' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/filter_attendance_sheet.tpl',
      1 => 1714804973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6635d95f31f213_93228186 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if (count($_smarty_tpl->tpl_vars['attendance_sheet']->value) > 0) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attendance_sheet']->value, 'sem_row', false, 'sem_index');
$_smarty_tpl->tpl_vars['sem_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sem_index']->value => $_smarty_tpl->tpl_vars['sem_row']->value) {
$_smarty_tpl->tpl_vars['sem_row']->do_else = false;
?>
<tr class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['row_class'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
">
    <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_date'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
    <td align="center" valign="middle" class="text-center att-time timesheet-shift-row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_in']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
    <td align="center" valign="middle" class="text-center att-time"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_in_time'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>

    <td align="center" valign="middle" class="text-center att-time timesheet-shift-row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_out']->value;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</td>
    <td align="center" valign="middle" class="text-center att-time"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_out_time'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</td>
    <td align="center" valign="middle" class="text-center att-hrs"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['working_hr'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</td>
    <td align="center" valign="middle" class="text-center att-status"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</td>
    <td align="center" valign="middle" class="text-center att-action">
        <?php echo $_smarty_tpl->tpl_vars['sem_row']->value['btn_html'];?>

    </td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php ob_start();
} else {
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>

<tr>
    <td colspan="8">
        <div class="mb-5 no-data-found-block">
            <img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
            <br />
            <span class="mb-4 no-data-found-message">No timesheet data found!</span>
        </div>
    </td>
</tr>

<?php ob_start();
}
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>

<?php }
}

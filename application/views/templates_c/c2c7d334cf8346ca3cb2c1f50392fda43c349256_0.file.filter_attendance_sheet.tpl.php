<?php
/* Smarty version 4.3.2, created on 2024-03-20 10:35:28
  from '/var/www/html/extra_work/employee/application/views/templates/filter_attendance_sheet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65fa6e98e35427_76210022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c7d334cf8346ca3cb2c1f50392fda43c349256' => 
    array (
      0 => '/var/www/html/extra_work/employee/application/views/templates/filter_attendance_sheet.tpl',
      1 => 1709548858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa6e98e35427_76210022 (Smarty_Internal_Template $_smarty_tpl) {
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
if ($_smarty_tpl->tpl_vars['sem_row']->value['week_off'] == 'Yes') {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
timesheet-week-off<?php ob_start();
} elseif ($_smarty_tpl->tpl_vars['sem_row']->value['attendance'] == 'A') {
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
timesheet-absent<?php ob_start();
} else {
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
timesheet-present<?php ob_start();
}
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
">
    <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_date'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</td>
    <td align="center" valign="middle" class="text-center att-time timesheet-shift-row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_in']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</td>
    <td align="center" valign="middle" class="text-center att-time"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_in_time'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</td>

    <td align="center" valign="middle" class="text-center att-time timesheet-shift-row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_out']->value;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</td>
    <td align="center" valign="middle" class="text-center att-time"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_out_time'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</td>
    <td align="center" valign="middle" class="text-center att-hrs"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['working_hr'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</td>
    <td align="center" valign="middle" class="text-center att-status"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</td>
    <td align="center" valign="middle" class="text-center att-action">
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['sem_row']->value['attendance_in_time'] != '--' && $_smarty_tpl->tpl_vars['sem_row']->value['attendance_in_time'] != '') {
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
<i class="las la-edit" data-id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_id'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
"></i><?php ob_start();
} else {
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
-<?php ob_start();
}
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>

    </td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php ob_start();
} else {
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>

<tr>
    <td colspan="8">
        <div class="mb-5">
            <img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
            <br />
            <span class="mb-4 no-data-found-message">No timesheet data found!</span>
        </div>
    </td>
</tr>

<?php ob_start();
}
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>

<?php }
}

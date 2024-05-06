<?php
/* Smarty version 4.3.2, created on 2024-05-04 12:53:48
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_leave_filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6635e2844d8b87_19161722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '014ac5b3abce856d65e5ccbe403393756e725134' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_leave_filter.tpl',
      1 => 1714804947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6635e2844d8b87_19161722 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php ob_start();
if (count($_smarty_tpl->tpl_vars['leave_list']->value) > 0) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leave_list']->value, 'sem_row', false, 'sem_index');
$_smarty_tpl->tpl_vars['sem_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sem_index']->value => $_smarty_tpl->tpl_vars['sem_row']->value) {
$_smarty_tpl->tpl_vars['sem_row']->do_else = false;
?>
	<tr class="leave-request-row">
        <td align="center" valign="middle" class="text-center att-date leave-name" data-leave-type="<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['leave_name'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"><?php ob_start();
echo get_status($_smarty_tpl->tpl_vars['sem_row']->value['leave_name']);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date start-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['leave_start_date'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date end-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['leave_end_date'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
        <td align="center" valign="middle" class="text-center att-date "><?php ob_start();
echo get_status($_smarty_tpl->tpl_vars['sem_row']->value['leave_type']);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date reason-box"><?php ob_start();
echo display_no_character($_smarty_tpl->tpl_vars['sem_row']->value['reason']);
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['approved_by'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['applied_days'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date status-row">
	        <span class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['status'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
"><?php ob_start();
echo get_status($_smarty_tpl->tpl_vars['sem_row']->value['status']);
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</span>
	    </td>
	    <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['action'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</td>
	</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php ob_start();
} else {
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>

                    <tr >
                        <td colspan="10">
                            <div class="mb-5 no-data-found-block">
                             <img
                                alt=""
                                src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
public/assets/images/images/no_data_found_new.png"
                                height="150"
                                width="150"
                                 class="mt-5"
                            />
                            <br>
                            <span class="mb-4 no-data-found-message">No leave data found!</span>
                            </div>
                        </td>
                    </tr>


                <?php ob_start();
}
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
 
<?php }
}

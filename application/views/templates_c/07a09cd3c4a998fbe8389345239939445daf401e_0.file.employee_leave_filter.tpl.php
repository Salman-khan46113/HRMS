<?php
/* Smarty version 4.3.2, created on 2024-03-19 11:11:21
  from '/var/www/html/extra_work/employee/application/views/templates/employee_leave_filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65f92581350437_45819811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a09cd3c4a998fbe8389345239939445daf401e' => 
    array (
      0 => '/var/www/html/extra_work/employee/application/views/templates/employee_leave_filter.tpl',
      1 => 1709815618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f92581350437_45819811 (Smarty_Internal_Template $_smarty_tpl) {
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
	    <td align="center" valign="middle" class="text-center att-date start-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['leave_start_date'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date end-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['leave_end_date'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date reason-box"><?php ob_start();
echo display_no_character($_smarty_tpl->tpl_vars['sem_row']->value['reason']);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['approved_by'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['applied_days'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</td>
	    <td align="center" valign="middle" class="text-center att-date status-row">
	        <span class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['status'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
"><?php ob_start();
echo get_status($_smarty_tpl->tpl_vars['sem_row']->value['status']);
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</span>
	    </td>
	    <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['action'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</td>
	</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php ob_start();
} else {
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>

                    <tr >
                        <td colspan="8">
                            <div class="mb-5 ">
                             <img
                                alt=""
                                src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
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
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
 
<?php }
}

<?php
/* Smarty version 4.3.2, created on 2024-04-04 21:05:28
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_shift_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660ec8c0981b26_07673074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882e4d30f11ac0647ddba8bf0a9105ea8073d45b' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_shift_details.tpl',
      1 => 1712244926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660ec8c0981b26_07673074 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="details">
    <!-- Grp detatils start -->
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Group Title:</label> <b class="val-box"><span id="group_title_v"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['group_title'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</span></b>
                    </p>
                </td>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Shift Name: </label> <b class="val-box"><span id="shift_name_v"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['shift_name'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Start Date: </label> <b class="val-box"><span id="start_date_v"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['start_date_display'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</span></b>
                    </p>
                </td>
                <td>
                    <p>
                        <label class="fs-4 mb-1">End Date: </label> <b class="val-box"><span id="end_date_v"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['end_date_display'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Start Time: </label> <b class="val-box"><span id="start_time_v"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['start_time'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</span></b>
                    </p>
                </td>
                <td>
                    <p>
                        <label class="fs-4 mb-1">End Time: </label> <b class="val-box"><span id="end_time_v"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['end_time'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Shift Type: </label> <b class="val-box"><span id="shift_type_v"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['shift_type'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</span></b>
                    </p>
                </td>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Total Employee: </label> <b class="val-box"><span id="employee_count_v"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['employee_count'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</span></b>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <!--grp detail end  -->
    <h5 class="mb-3">Employee Details</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col " style="text-align: center">Employee Code</th>
                <th scope="col" style="text-align: center">Department</th>
            </tr>
        </thead>
        <tbody class="shift_employee_details">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employees_row', false, 'employees_index');
$_smarty_tpl->tpl_vars['employees_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employees_index']->value => $_smarty_tpl->tpl_vars['employees_row']->value) {
$_smarty_tpl->tpl_vars['employees_row']->do_else = false;
?>
        		<tr>
	                <th scope="col"><?php echo $_smarty_tpl->tpl_vars['employees_row']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['employees_row']->value['last_name'];?>
</th>
	                <th scope="col"  style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['employees_row']->value['employee_code'];?>
</th>
	                <th scope="col" style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['employees_row']->value['department'];?>
</th>
	            </tr>
        	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php }
}

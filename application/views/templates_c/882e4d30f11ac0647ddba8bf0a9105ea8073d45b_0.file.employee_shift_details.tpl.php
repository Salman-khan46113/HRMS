<?php
/* Smarty version 4.3.2, created on 2024-04-12 19:44:46
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_shift_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661941d6722357_18968448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882e4d30f11ac0647ddba8bf0a9105ea8073d45b' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_shift_details.tpl',
      1 => 1712931283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661941d6722357_18968448 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="details">
    <!-- Grp detatils start -->
    <div class="card mb-3 user-details-block">
        <div class="row g-0 m-3">
            <div class="col-12 employee-detils">
                <div class="row">
                    <div class="col-3 p-2">
                        <span class="title-box">Group Title</span>
                        <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['group_title'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</span>
                    </div>
                    <div class="col-3 p-2">
                        <span class="title-box">Shift Name</span>
                        <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['shift_name'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</span>
                    </div>
                    <div class="col-3 p-2">
                        <span class="title-box">Department</span>
                        <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['department_name'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
 (<?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['department_code'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
)</span>
                    </div>
                    <div class="col-3 p-2">
                        <span class="title-box">Start Date</span>
                        <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['start_date_display'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</span>
                    </div>
                    <div class="col-3 p-2">
                        <span class="title-box">End Date</span>
                        <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['end_date_display'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</span>
                    </div>
                    <div class="col-3 p-2">
                        <span class="title-box">Start Time</span>
                        <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['start_time'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</span>
                    </div>
                    <div class="col-3 p-2">
                        <span class="title-box">End Time</span>
                        <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['end_time'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</span>
                    </div>
                    <div class="col-3 p-2">
                        <span class="title-box">Shift Type</span>
                        <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['shift_type'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</span>
                    </div>
                    <div class="col-3 p-2">
                        <span class="title-box">Total Employee</span>
                        <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shiftDetails']->value['employee_count'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

    <!--grp detail end  -->
    <h5 class="mb-3">Employee Details</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col text-center">Employee Name</th>
                <th scope="col text-center">Employee Code</th>
                <!-- <th scope="col" style="text-align: center">Department</th> -->
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
	                <th scope="col text-center"><?php echo $_smarty_tpl->tpl_vars['employees_row']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['employees_row']->value['last_name'];?>
</th>
	                <th scope="col text-center"><?php echo $_smarty_tpl->tpl_vars['employees_row']->value['employee_code'];?>
</th>
	                <!-- <th scope="col" style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['employees_row']->value['department'];?>
</th> -->
	            </tr>
        	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
        </tbody>
    </table>
</div>
<?php }
}

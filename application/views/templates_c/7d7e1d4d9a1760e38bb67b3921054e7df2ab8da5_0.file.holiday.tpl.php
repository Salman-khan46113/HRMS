<?php
/* Smarty version 4.3.2, created on 2024-04-04 19:47:31
  from '/var/www/html/extra_work/HRMS/application/views/templates/holiday.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660eb67b31c6b5_89990371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d7e1d4d9a1760e38bb67b3921054e7df2ab8da5' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/holiday.tpl',
      1 => 1710411495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660eb67b31c6b5_89990371 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left w-100">
			<h2>FESTIVAL HOLIDAY LIST - <?php ob_start();
echo $_smarty_tpl->tpl_vars['current_year']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 </h2>
		</div>

	</div>
	<div class="inner-container mt-4" >
    <div class="timesheet-container">
        <div class="custom-modal-content custom-content-table-with-fixed-column holiday-list-body ">
            <table width="50" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" style="border-collapse: collapse;" border-color="#e1e1e1">
                <?php ob_start();
$_smarty_tpl->_assignInScope('count', 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                <tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
                	<?php if (count($_smarty_tpl->tpl_vars['holiday_data']->value) > 0) {?>
	                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holiday_data']->value, 'holiday_row', false, 'holiday_index');
$_smarty_tpl->tpl_vars['holiday_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['holiday_index']->value => $_smarty_tpl->tpl_vars['holiday_row']->value) {
$_smarty_tpl->tpl_vars['holiday_row']->do_else = false;
?>
	                		<tr class="month-<?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['holiday_index']->value);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
">
		                         <td colspan="3" width="150" valign="middle" align="left" class="cell-month"><div class="text-left"><?php ob_start();
echo $_smarty_tpl->tpl_vars['holiday_index']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</div></td>
		                    </tr>
		                    <tr class="month-<?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['holiday_index']->value);
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
">
							    <td width="50" valign="middle" align="left">
							        <table border="0" cellspacing="0" cellpadding="0" class="table">
							            <tbody>
							            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holiday_row']->value, 'row', false, 'index');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
							                <tr>
							                    <td width="" valign="middle" align="left" style="border-right: 1px solid rgba(0, 0, 0, 0.1) !important; border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;"><div class="text-center"><?php ob_start();
echo $_smarty_tpl->tpl_vars['count']->value++;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</div></td>
							                </tr>
							                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							                
							            </tbody>
							        </table>
							    </td>

							    <td width="130" valign="middle" align="left">
							        <table>
							            <tbody>
							            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holiday_row']->value, 'row', false, 'index');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
							                <tr>
							                    <td width="" valign="middle" align="left"><div class="text-center"><?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['holiday_date'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</div></td>
							                </tr>
							                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							            </tbody>
							        </table>
							    </td>
							    <td width="400" valign="middle" align="left">
							        <table>
							            <tbody>
							            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holiday_row']->value, 'row', false, 'index');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
								                <tr>
								                    <td width="" valign="middle" align="left"><div class="text-left"><?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['holiday_name'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</div></td>
								                </tr>
							                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							                
							            </tbody>
							        </table>
							    </td>
							</tr>
	                	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	                <?php } else { ?>
	                <tbody class="no_holiday_found" tabindex="5001" style="overflow: hidden; outline: none;">
											<tr>
						<td colspan="4">
							<div class="mb-5">
								<img alt="" src="http://localhost/extra_work/employee/public/assets/images/images/no_holiday_found.png" height="100" width="100" class="mt-5 mb-3">
								<br>
								<span class="mb-4 no-data-found-message">No holiday data found!</span>
							</div>
						</td>
					</tr>
									</tbody>
	                <?php }?>
                	
                    

                </tbody>
            </table>
        </div>
    </div>
</div>


</div>

</div>
<!-- extra for footer -->
</div>
</div>
</div>
</div>

<link rel="stylesheet" href="public/css/holiday.css" />


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

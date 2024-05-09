<?php
/* Smarty version 4.3.2, created on 2024-05-06 22:17:14
  from '/var/www/html/HRMS/application/views/templates/salary_slip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66390992351d47_97416273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab330a31ea2bc55e36aef07921d61b934a08baca' => 
    array (
      0 => '/var/www/html/HRMS/application/views/templates/salary_slip.tpl',
      1 => 1715014003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66390992351d47_97416273 (Smarty_Internal_Template $_smarty_tpl) {
?><table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tbody>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody>
                        <tr>
                            <td bgcolor="#fff" style="padding: 0px; margin: 0px;">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" align="center">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="padding: 0px; margin: 0px;">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="border-bottom: 3px solid #5D87FF;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="50%" align="left">
                                                            	<img width="150px" src="http://localhost/extra_work/HRMS/public/assets/images/logos/logo.png" alt="" />
                                                            </td>
                                                             <td width="50%" align="right">
                                                             	<font color="#222222" face="Arial, Helvetica, sans-serif">
                                                                    <span style="color: #796f6f; font-size: 16px; padding: 0px; position: relative; display: inline-block; font-weight: normal;margin-bottom: 10px;    font-weight: 500;">Payslip For the Month</span>                                                                     
                                                                </font>
                                                                <br />
                                                                 <font color="#222222" face="Arial, Helvetica, sans-serif">
                                                                    <span style="color: #222; font-size: 16px; padding: 0px; position: relative; display: inline-block;"><strong><?php ob_start();
echo $_smarty_tpl->tpl_vars['month']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['year']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</strong></span>
                                                                </font>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" align="center" height="1"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" border="0" width="100%" align="left" bgcolor="#fff" >
                    <tbody>
                    	<tr>
                            <td height="30" align="left" valign="top" >
                            	<font color="#9a8f8f" face="Arial, Helvetica, sans-serif" style="font-size: 15px;    margin-left: 30px;margin-bottom: 20px;"><strong style="color: #5D87FF;">&nbsp;&nbsp;	Employee Summary</strong></font>
							</td>
							
                        </tr>
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" align="left" bgcolor="#fff" style="    border-bottom:2px dashed #7898f5;	">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td height="155" valign="top">
                                                                <table cellspacing="0" cellpadding="1" border="0" width="100%">
                                                                    <tbody>
                                                                    	
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>Emploayee Name  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['full_name'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>Company Name  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['company_name'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>Department  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['departmen_name'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>Date of Joining  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['employment_date'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>PF  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['pf_number'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>A/C No.  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['account_no'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>

                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td height="155" valign="top">
                                                                <table cellspacing="0" cellpadding="1" border="0" width="100%">
                                                                    <tbody>
                                                                    	
                                                                    	<tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>Employee Code  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['employee_code'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>Location  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['address'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>Designation  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['designation_name'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>Pay Period  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['month']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['year']->value;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>UAN  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;">--</font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20" align="left" valign="top">
                                                                                <font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;"><strong>Mode of Pay  :</strong></font>
                                                                            </td>
                                                                            <td height="20" align="left" valign="top">
                                                                            	<font color="#222222" face="Arial, Helvetica, sans-serif" style="font-size: 13px;font-weight: 400;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['bank_name'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</font>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
				            <td>&nbsp;</td>
				        </tr>

                        <tr>
                            <td align="left" style="max-height: 350px;">
                                <table class="default_table" cellspacing="0" cellpadding="10" border="0" width="100%" align="left" style="border-collapse: collapse;">
                                   
                                    <thead >
                                        
                                        <tr >
                                            
                                            <th width="33.33%"  height="20" valign="middle" align="center" style="text-align: center; border: 1px solid #d6d3d3;">
                                                <font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong>Working Days : </strong><?php echo $_smarty_tpl->tpl_vars['working_days']->value;?>
</font>
                                            </th>
                                            <th width="33.33%" height="20" valign="middle" align="center" style="text-align: center; border: 1px solid #d6d3d3;">
                                                <font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong>Public Holiday : </strong><?php echo $_smarty_tpl->tpl_vars['holidays']->value;?>
 Days</font>
                                            </th>
                                            <th width="33.33%"  height="20" valign="middle" align="center" style="text-align: center; border: 1px solid #d6d3d3;    margin-left: 114px;">
                                                <font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong>Week Off : </strong><?php echo $_smarty_tpl->tpl_vars['week_off']->value;?>
 Days</font>
                                            </th>
                                            
                                        </tr>
                                        <tr style="border: 1px solid #d6d3d3;">
                                            <th width="33.33%"  height="20" valign="middle" align="center" style="text-align: center; border: 1px solid #d6d3d3;    margin-left: 114px;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                                <font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong>Leaves : </strong><?php echo $_smarty_tpl->tpl_vars['leaves']->value;?>
</font>
                                            </th>
                                            
                                            <th width="33.33%"  height="20" valign="middle" align="center" style="text-align: center; border: 1px solid #d6d3d3;">
                                                <font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong>Present Days : </strong><?php echo $_smarty_tpl->tpl_vars['present_days']->value;?>
 </font>
                                            </th>
                                            <th width="33.33%" height="20" valign="middle" align="center" style="text-align: center; border: 1px solid #d6d3d3;">
                                                <font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong>Absent Days : </strong><?php echo $_smarty_tpl->tpl_vars['absent_days']->value;?>
 </font>
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                </table>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" border="0" width="100%" align="center" >
                    <tbody>
                        <tr>
                           <td></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody>
                        <tr>
                            <td bgcolor="#fff" >
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" align="center" style="border-top: 2px solid #7898f5;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="padding: 0px; margin: 0px;">
                                                <table cellspacing="0" cellpadding="10" border="0" width="98%"  >
                                    <tbody>
                                        <tr>
                                            <td>
                                                 <table class="default_table" cellspacing="0" cellpadding="5" border="0" width="98%"  >
                                                <thead >
                                                    <tr >
                                                        <th width="40%" height="20" valign="middle" align="left" style="text-align: left;border-bottom: 1px dashed #becfff">
                                                            <font style="font-size: 13px;" face="Arial, Helvetica, sans-serif" color="#5D87FF"><strong>EARNINGS</strong></font>
                                                        </th>
                                                        <th width="30%" height="20" valign="middle" align="right" style="text-align: right; border-bottom: 1px dashed #becfff;">
                                                            <font style="font-size: 13px;" face="Arial, Helvetica, sans-serif" color="#5D87FF"><strong>AMOUNT</strong></font>
                                                        </th>
                                                        <th width="30%" height="20" valign="middle" align="right" style="text-align: right; border-bottom: 1px dashed #becfff;">
                                                            <font style="font-size: 13px;" face="Arial, Helvetica, sans-serif" color="#5D87FF"><strong>YTD</strong></font>
                                                        </th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['income_arr']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                                   
                                                        <tr>
                                                            <td width="40%" height="30" valign="middle" align="left" style="text-align: left;">
                                                                <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222">
                                                                    <?php echo $_smarty_tpl->tpl_vars['val']->value['component_name'];?>

                                                                </font>
                                                            </td>

                                                            <td width="30%" height="30" valign="middle" align="right" style="text-align: right;">
                                                                <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222">
                                                                    <?php echo number_format($_smarty_tpl->tpl_vars['val']->value['component_value'],2);?>

                                                                </font>
                                                            </td>

                                                            <td width="30%" height="30" valign="middle" align="right" style="text-align: right;">
                                                                <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222">
                                                                    --
                                                                </font>
                                                            </td>
                                                        </tr>
                                                 
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <tr>
                                                    <td width="40%" height="30" valign="middle" align="left" style="text-align: left;">
                                                        <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222">
                                                            <strong>Gross Earning</strong>
                                                         </font>
                                                    </td>

                                                    <td width="30%" height="30" valign="middle" align="right" style="text-align: right;">
                                                        <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222">
                                                            <strong><?php echo number_format($_smarty_tpl->tpl_vars['total_income']->value,2);?>
</strong>
                                                        </font>
                                                    </td>

                                                    <td width="30%" height="30" valign="middle" align="right" style="text-align: right; ">
                                                        <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222">
                                                           
                                                        </font>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#fff" >
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" align="center" style="border-top: 2px solid #5D87FF;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="padding: 0px; margin: 0px;">
                                                <table cellspacing="0" cellpadding="10" border="0" width="98%"  >
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                 <table class="default_table" cellspacing="0" cellpadding="5" border="0" width="98%"  >
                                                                <thead >
                                                                    <tr >
                                                                        <th width="40%" height="20" valign="middle" align="left" style="text-align: left;border-bottom: 1px dashed #becfff;">
                                                                            <font style="font-size: 13px;" face="Arial, Helvetica, sans-serif" color="#5D87FF"><strong>Deduiation </strong></font>
                                                                        </th>
                                                                        <th width="30%" height="20" valign="middle" align="right" style="text-align: right; border-bottom: 1px dashed #becfff;">
                                                                            <font style="font-size: 13px;" face="Arial, Helvetica, sans-serif" color="#5D87FF"><strong>AMOUNT</strong></font>
                                                                        </th>
                                                                        <th width="30%" height="20" valign="middle" align="right" style="text-align: right; border-bottom: 1px dashed #becfff;">
                                                                            <font style="font-size: 13px;" face="Arial, Helvetica, sans-serif" color="#5D87FF"><strong>YTD</strong></font>
                                                                        </th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deduction_arr']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                                                           <tr>
                                                                            <td width="40%" height="30" valign="middle" align="left" style="text-align: left;">
                                                                                <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222">
                                                                                    <?php echo $_smarty_tpl->tpl_vars['val']->value['component_name'];?>

                                                                                </font>
                                                                            </td>
                                                                
                                                                            <td width="30%" height="30" valign="middle" align="right" style="text-align: right;">
                                                                                <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222">
                                                                                    <?php echo number_format($_smarty_tpl->tpl_vars['val']->value['component_value'],2);?>

                                                                                </font>
                                                                            </td>
                                                                
                                                                            <td width="30%" height="30" valign="middle" align="right" style="text-align: right;">
                                                                                <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222">
                                                                                    --
                                                                                </font>
                                                                            </td>
                                                                        </tr>
                                                                  
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                                </tbody>
                                                                <thead >
                                                                    <tr >
                                                                        <th width="58%" height="20" valign="middle" align="left" style="text-align: left" bgcolor="#cef0ff">
                                                                            <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong>NET PAY (Gross Earnings - Total Deduations)</strong>
                                                </font>
                                                                        </th>
                                                                        <th width="42%" height="20" valign="middle" align="left" style="text-align: right; border-bottom: 1px dashed #d6d3d3;" bgcolor="#cef0ff">
                                                                            <font style="font-size: 12px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong><?php echo $_smarty_tpl->tpl_vars['total_net_amount']->value;?>
</strong></font>
                                                                        </th>
                                                                        
                                                                        
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                         <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                 <table cellspacing="0" cellpadding="5" border="0" width="100%" align="center" >
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                <font style="font-size: 18px;font-weight: 900;" face="Arial, Helvetica, sans-serif" color="#000" >Total Net Payable <strong style="font-weight: 900;"><?php echo $_smarty_tpl->tpl_vars['total_net_amount']->value;?>
</strong> <span style="font-size: 15px">(Eight-seven Thousand Three Hundred Only)</span>
                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>


                        <tr>
                            <td bgcolor="#fff" >
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" align="center" style="border-top: 2px solid #5D87FF;">
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                 <table cellspacing="0" cellpadding="5" border="0" width="100%" align="center" >
                                    <tbody>
                                        <tr>
                                            <td align="left" width="48%">
                                                <font style="font-size: 14px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong>Generated By:&nbsp;</strong></font>
                                                <font style="font-size: 13px;" face="Arial, Helvetica, sans-serif" color="#222222">Akash Chopda</font>
                                            </td>
                                            <td align="left" width="48%">
                                                <font style="font-size: 14px;" face="Arial, Helvetica, sans-serif" color="#222222"><strong>Signature:&nbsp;</strong></font>
                                                <font style="font-size: 15px; display: inline-block;" align="left" face="Arial, Helvetica, sans-serif" color="#222222">

                                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        
                    </tbody>
                </table>
            </td>
        </tr>
        
       
    </tbody>
</table><?php }
}

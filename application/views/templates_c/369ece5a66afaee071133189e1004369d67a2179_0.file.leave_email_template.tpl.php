<?php
/* Smarty version 4.3.2, created on 2024-04-04 16:21:48
  from '/var/www/html/extra_work/HRMS/application/views/templates/leave_email_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660e864413eb88_26193550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '369ece5a66afaee071133189e1004369d67a2179' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/leave_email_template.tpl',
      1 => 1710584225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660e864413eb88_26193550 (Smarty_Internal_Template $_smarty_tpl) {
?><table style="width: 100%; border-collapse: collapse; border: 0; border-spacing: 0; font-family: Arial, Helvetica, sans-serif; background-color: rgba(239, 239, 239, 1);">
    <tbody>
        <tr>
            <td align="center" style="padding: 3rem 11rem; vertical-align: top; width: 100%;">
                <table
                    style="
                        max-width: 700px;
                        border-collapse: collapse;
                        border-top: 0 solid rgba(0, 0, 255, 1);
                        border-right: 0;
                        border-bottom: 0;
                        border-left: 0;
                        border-spacing: 0;
                        text-align: left;
                        min-width: 600px;
                        font-size: 14px;
                        background-color: rgba(255, 255, 255, 1);
                    "
                >
                    <tbody>
                        <tr>
                            <td>
                                <div style="padding: 20px; background-color: rgba(255, 255, 255, 1);">
                                    <table width="700" border="0" cellspacing="0" cellpadding="10" align="left" bgcolor="#fff">
                                        <tbody>
                                            <tr>
                                                <td
                                                    align="center"
                                                    style="
                                                        padding: 40px 0 30px;
                                                        background-position: initial;
                                                        background-size: initial;
                                                        background-repeat: initial;
                                                        background-attachment: initial;
                                                        background-origin: initial;
                                                        background-clip: initial;
                                                        background-color: rgba(112, 187, 217, 1);
                                                    "
                                                >
                                                    <img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/logos/dark-logo.svg" width="300" style="height: auto; display: block;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 36px 30px 42px;">
                                                    <table style="width: 100%; border-collapse: collapse; border: 0; border-spacing: 0;">	
                                                        <tbody>
                                                            <tr>
                                                            	<td style="padding: 0 0 36px; color: rgba(21, 54, 67, 1);">
                                                            		<h1 style="font-size: 24px; margin: 0 0 20px; font-family: Arial, sans-serif;">Dear <?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
,</h1>

                                                            		<?php ob_start();
if ($_smarty_tpl->tpl_vars['email_type']->value == "aprove_reject_leave") {
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                                                            		<p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
                                                                        I hope this message finds you well. I wanted to inform you about the status of your leave request that you submitted for <?php ob_start();
echo $_smarty_tpl->tpl_vars['from_date']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
 to <?php ob_start();
echo $_smarty_tpl->tpl_vars['to_date']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
. After careful consideration, I am pleased to inform you that your leave has been <?php ob_start();
echo $_smarty_tpl->tpl_vars['status']->value;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
.
                                                                    </p>

                                                                    <?php ob_start();
} elseif ($_smarty_tpl->tpl_vars['email_type']->value == "request_leave") {
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>


                                                                    <p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
																	    Thank you for submitting your leave application. We have received your request for leave from <?php ob_start();
echo $_smarty_tpl->tpl_vars['from_date']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
 to <?php ob_start();
echo $_smarty_tpl->tpl_vars['to_date']->value;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
 for <?php ob_start();
echo $_smarty_tpl->tpl_vars['leave_type']->value;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
.
																	</p>
																	<p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
																	    Your leave request is currently being reviewed by the appropriate department. We will notify you once a decision has been made.<br />
																	</p>
																	<p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
																	    If you have any urgent inquiries or concerns, please feel free to contact admin. <br>
																	   
																	</p>
																	<p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
																		 Thank you for your cooperation.
																	</p>
                                                                    <?php ob_start();
} elseif ($_smarty_tpl->tpl_vars['email_type']->value == "update_leave") {
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>

                                                                    <p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
                                                                        I trust this email finds you well. I wanted to inform you that we have received and processed the update to your leave request. Here are the details of the updated leave request:
                                                                    </p>
                                                                    <p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
                                                                        Updated Leave Dates: <?php ob_start();
echo $_smarty_tpl->tpl_vars['from_date']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
 to <?php ob_start();
echo $_smarty_tpl->tpl_vars['to_date']->value;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
<br />
                                                                        Leave Type: <?php ob_start();
echo $_smarty_tpl->tpl_vars['leave_type']->value;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
<br />
                                                                    </p>
                                                                    
                                                                    <p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
                                                                         Thank you for your cooperation.
                                                                    </p>

                                                                    <?php ob_start();
}
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>

                                                                    <br>
                                                                    Best regards,<br>
                                                                    HRMS Team
                                                            	</td>
                                                             </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td bgcolor="#F3BD30" height="6px"></td>
                                            <td bgcolor="#6E69AE" height="6px"></td>
                                            <td bgcolor="#108BC6" height="6px"></td>
                                            <td bgcolor="#3AA853" height="6px"></td>
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
<?php }
}

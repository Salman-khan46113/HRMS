<?php
/* Smarty version 4.3.2, created on 2024-05-11 00:10:41
  from '/var/www/html/extra_work/HRMS/application/views/templates/email_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_663e6a29a0a046_06164034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99026bba93fab9013c637870205322136d162e4' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/email_template.tpl',
      1 => 1710151684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e6a29a0a046_06164034 (Smarty_Internal_Template $_smarty_tpl) {
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
                                                    <img alt="" src="https://hrms-system.000webhostapp.com/employee/public/assets/images/logos/dark-logo.svg" width="300" style="height: auto; display: block;" />
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
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
,</h1>
                                                                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value == "sign_up_success") {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                                                                    <p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
                                                                        Thank you for signing up with HRMS.<br ><br>
                                                                        Please allow some time for our HR team to review and verify your account. Once your account is verified and activated, you'll receive another email notification. <br><br>
                                                                        Thank you for your patience and understanding.<br><br>
                                                                        Best regards,<br>
                                                                        HRMS Team
                                                                    </p>
                                                                    <?php ob_start();
} elseif ($_smarty_tpl->tpl_vars['type']->value == "activate_account") {
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                                                                    <p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
                                                                        We are excited to inform you that your account with HRMS has been successfully verified and activated by our HR team!<br ><br>
                                                                        You can now log in to your account and start enjoying our services. Please use the following username to access your account:<br><br>
                                                                        Username: <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_name']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
<br>
                                                                        Employee code: <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_code']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
<br><br>
                                                                        Thank you for choosing HRMS. We look forward to serving you!<br><br>
                                                                        Best regards,<br>
                                                                        HRMS Team
                                                                    </p>
                                                                    <?php ob_start();
} elseif ($_smarty_tpl->tpl_vars['type']->value == "deactivate_account") {
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

                                                                     <p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
                                                                        We regret to inform you that we were unable to activate your account at this time.<br><br>
                                                                        We apologize for any inconvenience this may cause. Our team has encountered an issue while processing your activation request. We are actively working to resolve the problem and will update you as soon as possible.<br><br>
                                                                        Rest assured, your account details are safe and secure, and we are committed to ensuring a smooth activation process for all our users.<br><br>
                                                                        Thank you for your understanding and patience.<br><br>
                                                                         Best regards,<br>
                                                                        HRMS Team
                                                                     </p>
                                                                    <?php ob_start();
}
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>

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

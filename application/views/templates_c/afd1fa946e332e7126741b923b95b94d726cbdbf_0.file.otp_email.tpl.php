<?php
/* Smarty version 4.3.2, created on 2024-03-19 14:07:09
  from '/var/www/html/extra_work/employee/application/views/templates/otp_email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65f94eb53f73f8_36996274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd1fa946e332e7126741b923b95b94d726cbdbf' => 
    array (
      0 => '/var/www/html/extra_work/employee/application/views/templates/otp_email.tpl',
      1 => 1710167061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f94eb53f73f8_36996274 (Smarty_Internal_Template $_smarty_tpl) {
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
                                                                    <div>
                                                                     <h1 style="font-size: 24px; margin: 0 0 20px; font-family: Arial, sans-serif;">Dear <?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
,</h1>
                                                                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value == "send_otp") {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                                                                    <p><span></span></p>
                                                                    <p>Please find the OTP for <span>authentication</span>.</p>
                                                                    <p>
                                                                        <span style="font-size: 16px;"><strong>OTP:</strong>&nbsp;&nbsp;<span style="color: #000000; font-size: 18px; letter-spacing: 5px; font-weight: 600;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['otp']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</span></span>
                                                                    </p>
                                                                    <p>
                                                                        <span><strong></strong></span>Best regards,
                                                                    </p>
                                                                    <p><strong>HRMS</strong></p>
                                                                    <p><span style="font-size: small;">&nbsp;</span></p>
                                                                    <?php ob_start();
}
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

                                                                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value == "password_updated") {
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>


                                                                    <p><span></span></p>
                                                                    <p>Your password has been successfully updated for your account with HRMS.<span>
                                                                    <span><strong></strong></span>
                                                                    <p><span>Thank you for keeping your account secure.</span></p>
                                                                     <p>
                                                                        <span><strong></strong></span>Best regards,
                                                                    </p>
                                                                    <p><strong>HRMS</strong></p>
                                                                    <p><span style="font-size: small;">&nbsp;</span></p>
                                                                    <?php ob_start();
}
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

                                                                </div>

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

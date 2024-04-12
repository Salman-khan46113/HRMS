<?php
/* Smarty version 4.3.2, created on 2024-04-10 11:57:50
  from '/var/www/html/extra_work/HRMS/application/views/templates/attendance_email_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66163166620e24_09174605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9690612403ba6a15838478d17d91a4428d1ab48f' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/attendance_email_template.tpl',
      1 => 1709640903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66163166620e24_09174605 (Smarty_Internal_Template $_smarty_tpl) {
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
                                                                    <p style="margin: 0 0 12px; font-size: 16px; line-height: 24px; font-family: Arial, sans-serif;">
                                                                         <?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_message']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
                                                                    </p>
                                                                    
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

<?php
/* Smarty version 4.3.2, created on 2024-04-23 10:09:40
  from '/var/www/html/HRMS/application/views/templates/404_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66273b8c1cc488_46812306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f28eb43c9b55b50efecd11f2864ca30e206237a' => 
    array (
      0 => '/var/www/html/HRMS/application/views/templates/404_page.tpl',
      1 => 1713846708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66273b8c1cc488_46812306 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.no_page_found_dib {
			text-align: center;
		}
		.no_page_found_dib img {
			    width: 45%;
    height: 95%;
		}
	</style>
</head>
<body>
<div class="no_page_found_dib">

				<div class="mb-5 ">
                             <img
                                alt=""
                                src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/images/no_page.avif"
                                height="150"
                                width="150"
                                 class="mt-5"
                            />
                            <br>
                            
                            </div>
</div>
</body>
</html>
<?php }
}

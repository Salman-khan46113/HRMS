<?php
/* Smarty version 4.3.2, created on 2024-04-03 18:20:30
  from '/var/www/html/extra_work/HRMS/application/views/templates/404_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660d5096124a64_98723209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e8c358e4f1d4a0be1cfe842d669c8f98c702d7' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/404_page.tpl',
      1 => 1709271700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d5096124a64_98723209 (Smarty_Internal_Template $_smarty_tpl) {
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

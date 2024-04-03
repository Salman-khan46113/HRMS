<?php
/* Smarty version 4.3.2, created on 2024-04-02 19:08:39
  from 'C:\xampp\htdocs\HRMS\application\views\templates\404_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660c3b9763e2e5_57197414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02d0cfaaf2b9d82459346d8cd63263d7fd930c15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HRMS\\application\\views\\templates\\404_page.tpl',
      1 => 1712075502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660c3b9763e2e5_57197414 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php
/* Smarty version 4.3.2, created on 2024-04-12 19:39:30
  from '/var/www/html/extra_work/HRMS/application/views/templates/announcement_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6619409a0d82d3_80732040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac170bf43fb500f519ef624fb37246b93d4b1a2' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/announcement_details.tpl',
      1 => 1712930969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6619409a0d82d3_80732040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra_work/HRMS/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="main-middle-container">
  <div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Announcement</h3>
		</div>


	</div>
  <div class="container">
      <div class="row p-2 shadow-sm p-3 mb-2 bg-body rounded">
        <h5><span class="float-start"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</span>
        <span class="float-end"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value['announcement_date'],"%d %B %Y");?>
</span></h5>
        <hr>
        <div class="content">
          <?php echo $_smarty_tpl->tpl_vars['announcement']->value['content'];?>

        </div>
  </div>
  </div>
</div>
</div>
<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="public/js/announcement.js"><?php echo '</script'; ?>
> -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

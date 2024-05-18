<?php
/* Smarty version 4.3.2, created on 2024-05-16 10:16:21
  from '/var/www/html/extra_work/HRMS/application/views/templates/announcement_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66458f9d4491f9_93771972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf3fc28797228fc515518c0e923416a3488f717' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/announcement_list.tpl',
      1 => 1714804868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66458f9d4491f9_93771972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra_work/HRMS/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="main-middle-container">
  <div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Announcement</h3>
		</div>
    <?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<!-- <button type="button" class="btn btn-primary add-leave">
						<i class="ti ti-plus"></i>
						<span>Add announcement</span>
					</button> -->
          <a href="announcement.html" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Announcement</span>
					</a>
				</div>
			</div>
		</div>
    <?php }?>

	</div>
  <div class="inner-container mt-2">
    <div class="timesheet-container">
      <div class="row p-2 ">
        <?php if (count($_smarty_tpl->tpl_vars['announcement']->value) > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcement']->value, 'announcement_row', false, 'announcement_index');
$_smarty_tpl->tpl_vars['announcement_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement_index']->value => $_smarty_tpl->tpl_vars['announcement_row']->value) {
$_smarty_tpl->tpl_vars['announcement_row']->do_else = false;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['announcement_row']->value)) {?>
        <div class="col-4">
          <div class=" shadow-sm p-3 mb-2 bg-body rounded announcement_row">
            <div class="title">
              <p><b><?php echo $_smarty_tpl->tpl_vars['announcement_row']->value['title'];?>
</b><span class="float-end ext-end"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement_row']->value['announcement_date'],"%d %B %Y");?>
</span> </p>
            </div>
            <div class="action">
              <?php if ((isset($_smarty_tpl->tpl_vars['announcement_row']->value['action']))) {?>
              <span><?php echo $_smarty_tpl->tpl_vars['announcement_row']->value['action'];?>
</span>
              <?php }?>

            </div>
          </div>

        </div>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php } else { ?>
        <div class="no-data no-data-found-block">
        <div class="d-flex justify-content-center">
          <img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
        </div>
          <p class="mb-4 no-data-found-message text-center">No announcement data found!</p>
        </div>
        <?php }?>
      </div>
    </div>
  </div>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" >
  var type = "listing";
<?php echo '</script'; ?>
>
<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/announcement.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

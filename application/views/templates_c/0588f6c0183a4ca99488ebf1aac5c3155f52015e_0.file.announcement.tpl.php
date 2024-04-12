<?php
/* Smarty version 4.3.2, created on 2024-04-12 19:39:40
  from '/var/www/html/extra_work/HRMS/application/views/templates/announcement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661940a4168531_83227456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0588f6c0183a4ca99488ebf1aac5c3155f52015e' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/announcement.tpl',
      1 => 1712930858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661940a4168531_83227456 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-middle-container">
  <div class="sub-header att-sub-header">
    <div class="sub-header-left pull-left">
      <h3>Add Announcement</h3>
    </div>
  </div>
  <div class="container shadow-sm p-3 mb-5 bg-body rounded">

    <form action="javascript:void(0)" method="POST" id="announcement-form">
      <div class="row p-2">
        <div class="col-6 mb-2">
          <div class="form-group">
            <label for="title">Title <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title " value="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
" >
          </div>
        </div>
        <div class="col-6 mb-2">
          <div class="form-group">  
            <label for="announcement_date">Announcement Date <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="announcement_date" name="announcement_date" placeholder="dd-mm-yyyy" value="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcement_date'];?>
">
          </div>
        </div>
        <div class="col-12 mt-2">
          <div class="form-group">
            <label for="first_name">Announcement Content <span class="star_required">*</span></label>
            <textarea id="edit_content_block " class="hide"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['content'];?>
</textarea>
          </div>
        </div>

        <div class=" text-center p-2">
          <button type="submit" class="btn btn-primary submit-announcement">Submit</button>
          <input type="hidden" class="form-control announcement_id"  name="announcement_id" id="announcement_id" value="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
" >
        </div>
      </div>
    </form>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" >
  var type = "form";
<?php echo '</script'; ?>
>
<style>
  .mce-tinymce,.mce-container-body.mce-flow-layout .mce-branding,.mce-container-body.mce-flow-layout .mce-wordcount,.mce-container-body.mce-flow-layout .mce-first ,#mceu_27-open{
    display:none ;
  }
</style>
<?php echo '<script'; ?>
 src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/announcement.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

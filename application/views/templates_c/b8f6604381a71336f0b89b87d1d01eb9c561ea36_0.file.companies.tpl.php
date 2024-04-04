<?php
/* Smarty version 4.3.2, created on 2024-04-03 19:59:37
  from '/var/www/html/extra_work/HRMS/application/views/templates/companies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660d67d1d45e31_96348951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f6604381a71336f0b89b87d1d01eb9c561ea36' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/companies.tpl',
      1 => 1711652013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660d67d1d45e31_96348951 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
	.dataTables_wrapper.no-footer .dt-buttons {
    position: fixed;
    top: 98px;
    right: 242px;
}
</style>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Companies</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<a href="add-company.html"><button type="button" class="btn btn-primary add-designation add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Company</span>
					</button>
                </a>
				</div>
			</div>
		</div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">

			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<table id="company_table" width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" style="border-collapse: collapse;" border-color="#e1e1e1">
					<thead>
						<tr class="text-center">
							<th scope="col">Image</th>
							<th scope="col">Name</th>
							<th scope="col">Code</th>
							<th scope="col">Email</th>
							<th scope="col">Date of Founding</th>
							<th scope="col">GST Number</th>
							<th scope="col">Action</th>
							
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
						<tr class="leave-request-row">
							<td class="  dt-center img-box"><img src="public/img/uploads/company_logo/<?php echo $_smarty_tpl->tpl_vars['val']->value['company_logo'];?>
" alt="" width="70" height="70" class="rounded-circle"></td>
							<td><a href="company-view?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['company_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['company_name'];?>
</a></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['company_code'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['company_email'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['date_founded'];?>
</td> 
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['gst_number'];?>
</td> 
							<td><a href = "update-company.html?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['company_id'];?>
"><i class="la-edit ti ti-edit"></a></i></td>
			  			</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					
								</tbody>
			</table>

			</div>
		</div>
	</div>

</div>


</div>
<!-- extra for footer -->
</div>
</div>
</div>
</div>

<link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/css/attendance_sheet.css" />
<link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
public/css/leave.css" />
<?php echo '<script'; ?>
>
    var no_data_message =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
;
    var base_url = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/company_listing.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

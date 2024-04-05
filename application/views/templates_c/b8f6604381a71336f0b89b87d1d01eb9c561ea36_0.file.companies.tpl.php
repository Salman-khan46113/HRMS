<?php
/* Smarty version 4.3.2, created on 2024-04-04 20:06:17
  from '/var/www/html/extra_work/HRMS/application/views/templates/companies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660ebae1c6f604_54224304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f6604381a71336f0b89b87d1d01eb9c561ea36' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/companies.tpl',
      1 => 1712239385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660ebae1c6f604_54224304 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
	.dataTables_wrapper.no-footer .dt-buttons {
    position: fixed;
    top: 98px;
    right: 362px;
}
#company_table_filter{
	display: none;
}
</style>
<div class="main-middle-container">

	<aside class="right-sidebar">
		<!-- Sidebar scroll-->
		<div>
			<div class="brand-logo d-flex align-items-center justify-content-between filter-title-bolock">
				<a href="javascript:void(0)" class="text-nowrap logo-img">
					Filter
				</a>
				<div class="close-filter-btn d-xl-none d-block filter-popup cursor-pointer" >
					<i class="ti ti-x fs-8"></i>
				</div>
			</div>
			<!-- Sidebar navigation-->
			<nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
				<div class="simplebar-wrapper" style="margin: 0px -24px;">
					<div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
					<div class="simplebar-mask">
						<div class="simplebar-offset" style="right: -7px; bottom: 0px;">
							<div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow-y: scroll;">
								<div class="simplebar-content" style="padding: 0px 15px;">
									<ul id="sidebarnav" class="in">
										
										<div class="filter-row">
											<li class="nav-small-cap">
												<span class="hide-menu filter-label">Name</span>
												<span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
											</li>
											<li class="sidebar-item">
												<div class="input-group filter-input">
												  <input type="text" id="company_name_search" class="form-control" placeholder="Name" data-column="1">
												</div>
											</li>
										</div>
										<div class="filter-row">
											<li class="nav-small-cap">
												<span class="hide-menu filter-label">Company Code</span>
												<span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
											</li>
											<li class="sidebar-item">
												<div class="input-group filter-input">
												  <input type="text" id="company_code_search" class="form-control" placeholder="Employee Code" data-column="2">
												</div>
											</li>
										</div>
										<div class="filter-row">
											<li class="nav-small-cap">
												<span class="hide-menu filter-label">Email</span>
												<span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
											</li>
											<li class="sidebar-item">
												<div class="input-group filter-input">
												  <input type="text" id="email_search" class="form-control"  placeholder="Email" data-column="3">
												</div>
											</li>
										</div>
										<div class="filter-row">
											<li class="nav-small-cap">
												<span class="hide-menu filter-label">Founding Date</span>
												<span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
											</li>
											<li class="sidebar-item">
												<div class="input-group filter-input">
												  <input type="text" class="form-control" id="founding_search"  placeholder="Founding Date" data-column="4">
												  <!-- <span class="input-group-text"><i class="las la-calendar-alt"></i></span> -->
												</div>
											</li>
										</div>
										
										<div class="filter-row">
											<li class="nav-small-cap">
												<span class="hide-menu filter-label">GST Number</span>
												<span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
											</li>
											<li class="sidebar-item">
												<div class="input-group filter-input">
												  <input type="text" class="form-control" id="GST_search"  placeholder="GST NUmber" data-column="5">
												  <!-- <span class="input-group-text"><i class="las la-calendar-alt"></i></span> -->
												</div>
											</li>
										</div>
										
									</ul>
								   
								</div>
							</div>
						</div>
					</div>
					<div class="simplebar-placeholder" style="width: auto; height: 810px;"></div>
				</div>
				<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
				<div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 214px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div>
			</nav>
			 <div class="filter-popup-btn">
				<button class="btn btn-primary reset-filter">Reset</button>
				<button class="btn btn-primary search-filter">Search</button>
			</div>
			<!-- End Sidebar navigation -->
		</div>
		<!-- End Sidebar scroll-->
	</aside>

	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Companies</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary icon-box">
			 <div class="timesheet-summary-lst">
                   <div class="dropdown grid-drop-down reset-filter" title="Reset Filter">
                        <button class="btn btn-secondary top-btn-row" type="button"  >
                            <i class="ti ti-refresh " style="color: black"></i> 
                        </button>
                    </div>
                </div>
            <div class="timesheet-summary-lst">
                   <div class="dropdown grid-drop-down filter-popup" title="Filter">
                        <button class="btn btn-secondary top-btn-row" type="button"  >
                            <i class="ti ti-filter " style="color: black"></i> 
                        </button>
                    </div>
                </div>

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

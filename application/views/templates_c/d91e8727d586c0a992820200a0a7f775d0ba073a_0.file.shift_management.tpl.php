<?php
/* Smarty version 4.3.2, created on 2024-04-09 16:49:18
  from '/var/www/html/extra_work/HRMS/application/views/templates/shift_management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66152436e5e330_74655679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91e8727d586c0a992820200a0a7f775d0ba073a' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/shift_management.tpl',
      1 => 1712661388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66152436e5e330_74655679 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                                            <span class="hide-menu">Department </span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                               <select class="form-select form-control w-100"  id="department_name_search">
                                               	<option value="" >Select Department </option>
		                                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department_val');
$_smarty_tpl->tpl_vars['department_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department_val']->value) {
$_smarty_tpl->tpl_vars['department_val']->do_else = false;
?>
		                                            <option value="<?php echo $_smarty_tpl->tpl_vars['department_val']->value['departmen_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_code'];?>
)" ><?php echo $_smarty_tpl->tpl_vars['department_val']->value['departmen_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_code'];?>
)</option>
		                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		                                    </select>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Shift Name</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>

                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <select class="form-select form-control w-100"  id="shift_name_search">
		                                    	 <option value="" >Select Shift Name</option>
		                                    	 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
											  		  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['shift_name'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['shift_name'];?>
</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		                                          
		                                      </select>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Shift Type</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>

                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <select class="form-select form-control w-100"  id="shift_type_search">
		                                    	 <option value="" >Select Grads</option>
		                                    	 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shift_type_data']->value, 'shift_type_val', false, 'key_val');
$_smarty_tpl->tpl_vars['shift_type_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['shift_type_val']->value) {
$_smarty_tpl->tpl_vars['shift_type_val']->do_else = false;
?>
											 <option value="<?php echo $_smarty_tpl->tpl_vars['shift_type_val']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['shift_type_val']->value['val'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		                                          
		                                      </select>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Start Time</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control cursor" id="start_time_search"  placeholder="Start Time">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">End Time</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control cursor" id="end_time_search"  placeholder="Start Time">
                                            </div>
                                        </li>
                                    </div>
                                    <!-- 
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Added Date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="added_date_search" class="form-control"  placeholder="Added Date">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Updated By</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="updated_by_search"  placeholder="Updated By">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Updated Date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="updated_date_search"  placeholder="Updated Date">
                                              
                                            </div>
                                        </li>
                                    </div> --> 
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
			<h3>Shift Management</h3>
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
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Shift</span>
					</button>
				</div>
			</div>
			
		</div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">

			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" id="shift_management" style="border-collapse: collapse;" border-color="#e1e1e1">
					<thead>
						<tr class="text-center">
							<!-- <th scope="col">#</th> -->
							<!-- <th scope="col">Comapny Name</th> -->
							<th scope="col">Department</th>
							<th scope="col">Shift Name</th>
							<th scope="col">Shift type</th>
							<th scope="col">Start Time</th>
							<th scope="col">End Time</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						<?php if (count($_smarty_tpl->tpl_vars['data']->value) > 0) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'data_row', false, 'data_index');
$_smarty_tpl->tpl_vars['data_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_index']->value => $_smarty_tpl->tpl_vars['data_row']->value) {
$_smarty_tpl->tpl_vars['data_row']->do_else = false;
?>
						<tr class="leave-request-row">
							<!-- <td><?php echo $_smarty_tpl->tpl_vars['data_index']->value+1;?>
</td> -->
							<!-- <td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['company_name'];?>
</td> -->
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['departmen_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['data_row']->value['department_code'];?>
)</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['shift_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['shift_type'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['start_time'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['end_time'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['data_row']->value['action'];?>
</td>

						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
						<tr>
							<td colspan="6">
								<div class="mb-5">
									<img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
									<br />
									<span class="mb-4 no-data-found-message">No shift data found!</span>
								</div>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

<div class="modal fade leave-popup-block" id="Shift_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Shift</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="shiftForm" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">


								<div class="mb-3">
									<label for="shift_name" class="form-label">Shift Name</label>
									<input type="text" class="form-control shift_name" id="shift_name" name="shift_name"  placeholder="Enter Shift Name">
								</div>
								<div class="mb-3 select-box-block" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['role'] != 'arom') {?> style="display: none" <?php }?>>
                                    <label for="company_id" class="form-label">Company</label>
                                    <select class="form-select company_id" name="company_id" id="company_id">
                                        <option value="">Select Company</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company_details']->value, 'company_name');
$_smarty_tpl->tpl_vars['company_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company_name']->value) {
$_smarty_tpl->tpl_vars['company_name']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['company_name']->value['company_id'] == $_smarty_tpl->tpl_vars['selected_company']->value) {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['company_name']->value['company_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['company_name']->value['company_name'];?>
</option>
                                            <?php } else { ?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['company_name']->value['company_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['company_name']->value['company_name'];?>
</option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="mb-3">
									<label for="department" class="form-label">Department</label>
									<select class="form-select department" name="department" id="department">
										<option value="">Select Department</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'departments_val');
$_smarty_tpl->tpl_vars['departments_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['departments_val']->value) {
$_smarty_tpl->tpl_vars['departments_val']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['departments_val']->value['department_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['departments_val']->value['departmen_name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['departments_val']->value['department_code'];?>
]</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="mb-3">
									<label for="shift_type" class="form-label">Shift type</label>
									<select class="form-select shift_type" name="shift_type" id="shift_type">
										<option value="">Select Shift Type</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shift_type_data']->value, 'shift_type_val', false, 'key_val');
$_smarty_tpl->tpl_vars['shift_type_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['shift_type_val']->value) {
$_smarty_tpl->tpl_vars['shift_type_val']->do_else = false;
?>
											 <option value="<?php echo $_smarty_tpl->tpl_vars['shift_type_val']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['shift_type_val']->value['val'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										
									</select>
								</div>
								<div class="mb-3">
									<label for="start_time" class="form-label">Start Time</label>
									<input type="text" class="form-control start_time" id="start_time" name="start_time"  placeholder="Enter Satrt Time">
								</div>
								<div class="mb-3">
									<label for="end_time" class="form-label">End Time</label>
									<input type="text" class="form-control end_time" id="end_time" name="end_time" placeholder="Enter End time" >
								</div>
								<input type="hidden" class="form-control shift_id"  name="id" >


							</div>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit-shift">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<!-- extra for footer -->
</div>
</div>
</div>
</div>
<style type="text/css">
	.chosen-disabled *{
	    
	    cursor: not-allowed;
	    /* cursor: none; */
	}
</style>

<?php echo '<script'; ?>
 type="text/javascript" >
 var selected_company = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['selected_company']->value);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

  var no_data_message =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
;
<?php echo '</script'; ?>
>

<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />
<link rel="stylesheet" href="public/css/shift_management.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
	 <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/shift_management.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

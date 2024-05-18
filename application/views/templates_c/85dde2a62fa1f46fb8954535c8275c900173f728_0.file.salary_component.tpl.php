<?php
/* Smarty version 4.3.2, created on 2024-05-16 23:41:15
  from '/var/www/html/extra_work/HRMS/application/views/templates/salary_component.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66464c43e1cc87_99216784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85dde2a62fa1f46fb8954535c8275c900173f728' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/salary_component.tpl',
      1 => 1715883074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66464c43e1cc87_99216784 (Smarty_Internal_Template $_smarty_tpl) {
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
                                            <span class="hide-menu">Component Name</span>

                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="component_name_search" class="form-control" placeholder="Component Name">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Component Type</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                               <select class="form-select " name="component_type_search" id="component_type_search">
			                                        <option value="">Select Component Type</option>
			                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['component_type_arr']->value, 'component_type');
$_smarty_tpl->tpl_vars['component_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['component_type']->value) {
$_smarty_tpl->tpl_vars['component_type']->do_else = false;
?>
			                                            <option value="<?php echo $_smarty_tpl->tpl_vars['component_type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['component_type']->value['val'];?>
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
                                            <span class="hide-menu">Component Value</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="component_value_search" class="form-control number-formatter" placeholder="Component Value">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Value Type</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                               <select class="form-select " name="type_search" id="type_search">
			                                        <option value="">Select Value Type</option>
			                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value_type_arr']->value, 'value_type');
$_smarty_tpl->tpl_vars['value_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_type']->value) {
$_smarty_tpl->tpl_vars['value_type']->do_else = false;
?>
			                                            <option value="<?php echo $_smarty_tpl->tpl_vars['value_type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value_type']->value['val'];?>
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
                                            <span class="hide-menu">Is Compulsory</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <select class="form-select " name="is_compulsory_search" id="is_compulsory_search">
			                                        <option value="">Select Is Compulsory</option>
			                                        <option value="Yes">Yes</option>
			                                        <option value="No">No</option>
			                                        
			                                    </select>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Description</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="description_search"  placeholder="Description">
                                              
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
			<h3>Salary Component</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary icon-box">
                <div class="timesheet-summary-lst year-drop-down icon-box-destop">
                    <select class="form-select form-control" name="year_drop_down" id="year_drop_down">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_arr']->value, 'year', false, 'key_val');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>
                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['key_val']->value+1 == count($_smarty_tpl->tpl_vars['year_arr']->value)) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                            <?php ob_start();
} else {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                            <?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
    			<!-- <div class="timesheet-summary-lst year-drop-down icon-box-destop">
                    <select class="form-select form-control" name="year_drop_down" id="year_drop_down">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_arr']->value, 'year', false, 'key_val');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>
    					    <?php ob_start();
if ($_smarty_tpl->tpl_vars['key_val']->value+1 == count($_smarty_tpl->tpl_vars['year_arr']->value)) {
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

    					        <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
    					    <?php ob_start();
} else {
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

    							<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
    					    <?php ob_start();
}
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

    					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="timesheet-summary-lst icon-box-destop">
                    <div class="dropdown grid-drop-down " title="Download CSV">
                            <button class="btn btn-secondary top-btn-row" type="button"  id="downloadCSVBtn">
                                <i class="ti ti-file-type-csv" style="color: black"></i> 
                            </button>
                    </div>
                </div>
                <div class="timesheet-summary-lst icon-box-destop">
                    <div class="dropdown grid-drop-down " title="Download PDF">
                            <button class="btn btn-secondary top-btn-row" type="button"  id="downloadPDFBtn">
                                <i class="ti ti-file-type-pdf" style="color: black"></i> 
                            </button>
                    </div>
                </div>
    			<div class="timesheet-summary-lst icon-box-destop">
                       <div class="dropdown grid-drop-down reset-filter" title="Reset Filter">
                            <button class="btn btn-secondary top-btn-row" type="button"  >
                                <i class="ti ti-refresh " style="color: black"></i> 
                            </button>
                        </div>
                </div>
                <div class="timesheet-summary-lst icon-box-destop">
                       <div class="dropdown grid-drop-down filter-popup" title="Filter">
                            <button class="btn btn-secondary top-btn-row" type="button"  >
                                <i class="ti ti-filter " style="color: black"></i> 
                            </button>
                        </div>
                </div> -->
            <div class="other-actions-list-btn  mr-2 icon-box-responsive">
                <a class=" btn view-btn  filter-popup" href="javascript:void(0)" type="button"  title="Filter" >
                    <i class="ti ti-filter" style="color: black"></i> 
                </a>
                <div class="dropdown">
                    <button class="dropdown-toggle  btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="dropdown-menu mt-2">
                        <li>
                            <a class="dropdown-item reset-filter icon-m-10"  href="javascript:void(0)" title="Reset Filter">
                                <i class="ti ti-refresh " style="color: black"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item icon-m-10" id="downloadPDFBtn" title="PDF">
                                <i class="ti ti-file-type-pdf" style="color: black"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item icon-m-10" id="downloadCSVBtn" title="CSV">
                                <i class="ti ti-file-type-csv" style="color: black"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
           
			<div class="timesheet-summary-lst">
					<a href="<?php echo get_entiry_url('salary_component','Add','');?>
" class="btn btn-primary add-department  add-action">
						<i class="ti ti-plus"></i>
						<span>Add Component</span>
					</a>
				</div>
			</div>
		</div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">

			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				
				<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table display" style="border-collapse: collapse;" border-color="#e1e1e1">
					<thead>
						<tr class="text-center">
							<th scope="col">Component Name</th>
							<th scope="col">Component Type</th>
							<th scope="col">Component Value</th>
							<th scope="col">Value Type</th>
							<th scope="col">Year</th>
							<th scope="col">Is Compulsory</th>
							<th scope="col">Description</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['salary_components']->value, 'salary_component_row', false, 'salary_component_index');
$_smarty_tpl->tpl_vars['salary_component_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['salary_component_index']->value => $_smarty_tpl->tpl_vars['salary_component_row']->value) {
$_smarty_tpl->tpl_vars['salary_component_row']->do_else = false;
?>
							<tr class="department-request-row">
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['salary_component_row']->value['component_name'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</td>
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['salary_component_row']->value['component_type'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</td>
								<td><?php ob_start();
echo getNumberFormate($_smarty_tpl->tpl_vars['salary_component_row']->value['component_value']);
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</td>
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['salary_component_row']->value['value_type'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</td>
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['salary_component_row']->value['year'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</td>
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['salary_component_row']->value['is_compulsory'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</td>
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['salary_component_row']->value['description'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</td>
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['salary_component_row']->value['action'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</td>
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
<div class="modal fade leave-popup-block" id="salary_component_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Salary Component</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="SalaryComponentForm" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">
								<div class="mb-3 select-box-block col-6 select-box" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['role'] != 'arom') {?> style="display: none" <?php }?>>
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
								<div class="mb-3 col-6">
									<label for="componentName" class="form-label">Component Name</label>
									<input type="text" class="form-control " id="component_name" name="component_name"  placeholder="Enter Component Name">
								</div>
								<div class="mb-3 col-6">
									<label for="componentValue" class="form-label">Component Value</label>
									<input type="text" class="form-control number-formatter" id="component_value" name="component_value"  placeholder="Enter Component Value">
								</div>
								<div class="mb-3 select-box-block col-6 select-box" >
                                    <label for="valueType" class="form-label">Type</label>
                                    <select class="form-select " name="value_type" id="value_type">
                                        <option value="">Select Type</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value_type_arr']->value, 'value_type');
$_smarty_tpl->tpl_vars['value_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_type']->value) {
$_smarty_tpl->tpl_vars['value_type']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['value_type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value_type']->value['val'];?>
</option>
                                            
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                               <div class="mb-3 select-box-block col-6 select-box" >
                                    <label for="componentType" class="form-label">Component Type</label>
                                    <select class="form-select " name="component_type" id="component_type">
                                        <option value="">Select Component Type</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['component_type_arr']->value, 'component_type');
$_smarty_tpl->tpl_vars['component_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['component_type']->value) {
$_smarty_tpl->tpl_vars['component_type']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['component_type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['component_type']->value['val'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
									<label for="year" class="form-label">Year</label>
									<select class="form-select form-control" name="year" id="year">
					                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_arr']->value, 'year', false, 'key_val');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>
					                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['key_val']->value+1 == count($_smarty_tpl->tpl_vars['year_arr']->value)) {
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>

					                            <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
					                        <?php ob_start();
} else {
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>

					                         <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
					                        <?php ob_start();
}
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>

					                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					                </select>
								</div>
								<div class="mb-3 select-box-block col-6 select-box" >
                                    <label for="isCompulsory" class="form-label">Is Compulsory</label>
                                    <select class="form-select " name="is_compulsory" id="is_compulsory">
                                        <option value="">Select Is Compulsory</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
									<label for="year" class="form-label h-10">Description</label>
									<textarea class="form-control"  placeholder="Enter Description" id="description" name="description"></textarea>
								</div>
								<input type="hidden" class="form-control"  name="salary_component_id" id="salary_component_id">
								<input type="hidden" class="form-control mode"  name="mode" id="mode">
							</div>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit-holiday">Submit</button>
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
<?php echo '<script'; ?>
>
    var no_data_message =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
;
    var selected_company = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['selected_company']->value);
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>

<?php echo '</script'; ?>
>

<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />
<link rel="stylesheet" href="public/css/salary_component.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/salary_component.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

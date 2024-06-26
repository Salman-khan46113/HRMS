<?php
/* Smarty version 4.3.2, created on 2024-05-11 01:43:54
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_salary_structure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_663e80022cbe37_50613211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f96335d74be0a9e2b5a270676aaac2554b18c4c' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_salary_structure.tpl',
      1 => 1715372033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_663e80022cbe37_50613211 (Smarty_Internal_Template $_smarty_tpl) {
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
                                            <span class="hide-menu">Employee Name</span>

                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="employee_name_search" class="form-control" placeholder="Employee Name">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Refrence Number</span>

                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="reference_number_search" class="form-control" placeholder="Refrence Number">
                                            </div>
                                        </li>
                                    </div>
                                     <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">CTC</span>

                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="ctc_search" class="form-control number-formatter" placeholder="CTC">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Effective From</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="effective_from_search" class="form-control"  placeholder="Effective From">
                                              <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Effective To</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="effective_to_search" class="form-control"  placeholder="Effective To">
                                              <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Added By</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="added_by_search" class="form-control " placeholder="Added By">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Added Date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="added_date_search" class="form-control"  placeholder="Added Date">
                                              <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Updated By</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="updated_by_search" class="form-control number-formatter" placeholder="Updated By">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Updated Date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="updated_date_search" class="form-control"  placeholder="Updated Date">
                                              <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
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
			<h3>Employee Salary Structure</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary icon-box">
                
				 <div class="timesheet-summary-lst year-drop-down ">
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
            <div class="timesheet-summary-lst">
                <div class="dropdown grid-drop-down " title="Download CSV">
                        <button class="btn btn-secondary top-btn-row" type="button"  id="downloadCSVBtn">
                            <i class="ti ti-file-type-csv" style="color: black"></i> 
                        </button>
                </div>
            </div>
            <div class="timesheet-summary-lst">
                <div class="dropdown grid-drop-down " title="Download PDF">
                        <button class="btn btn-secondary top-btn-row" type="button"  id="downloadPDFBtn">
                            <i class="ti ti-file-type-pdf" style="color: black"></i> 
                        </button>
                </div>
            </div>
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
            <?php ob_start();
if (is_valid_array($_smarty_tpl->tpl_vars['employee_salary_structure']->value)) {
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

            <div class="timesheet-summary-lst">
                    <a href="javascript:void(0)" class="btn btn-primary add-action set-default-structure">
                        <span>Set Default</span>
                    </a>
            </div>
            <?php ob_start();
}
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

           <?php ob_start();
if ($_smarty_tpl->tpl_vars['extended_salary_structure_id']->value > 0) {
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

			<div class="timesheet-summary-lst">
					<a href="<?php echo get_entiry_url('employee_salary_structure','Extend',$_smarty_tpl->tpl_vars['employee_id']->value);?>
" class="btn btn-primary add-department  add-action">
						<i class="ti ti-plus"></i>
						<span>Extend Structure</span>
					</a>
				</div>
			
			<?php ob_start();
}
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>

            </div>
		</div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">

			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				
				<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table display" style="border-collapse: collapse;" border-color="#e1e1e1">
					<thead>
						<tr class="text-center">
                            <th scope="col">Default</th>
							<th scope="col">Employee Name</th>
							<th scope="col">Refrence Number</th>
							<th scope="col">CTC</th>
							<th scope="col">Effective From</th>
							<th scope="col">Effective To</th>
							<th scope="col">Added By</th>
							<th scope="col">Added Date</th>
							<th scope="col">Updated By</th>
							<th scope="col">Updated Date</th>
							<!-- <th scope="col">Status</th> -->
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employee_salary_structure']->value, 'employee_salary_structure_row', false, 'employee_salary_structure_index');
$_smarty_tpl->tpl_vars['employee_salary_structure_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee_salary_structure_index']->value => $_smarty_tpl->tpl_vars['employee_salary_structure_row']->value) {
$_smarty_tpl->tpl_vars['employee_salary_structure_row']->do_else = false;
?>
							<tr class="department-request-row">
                                <td class="text-center">
                                    <?php echo $_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['default'];?>

                                </td>
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['employee_name'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</td>
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['refrence_number'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</td>
								<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['ctc_value'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</td>
								<td><?php ob_start();
echo date_formater($_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['effective_from']);
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</td>
								<td><?php ob_start();
echo date_formater($_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['effective_to']);
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</td>
								<td><?php ob_start();
echo display_no_character($_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['added_by_name']);
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</td>
								<td><?php ob_start();
echo date_formater($_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['added_date']);
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</td>
								<td><?php ob_start();
echo display_no_character($_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['updated_by_name']);
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</td>
								<td><?php ob_start();
echo date_formater($_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['updated_date']);
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</td>
								<!-- <td class="status-row"><span class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['status'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
"><?php ob_start();
echo get_status($_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['status']);
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
</span></td> -->
							<td><?php echo $_smarty_tpl->tpl_vars['employee_salary_structure_row']->value['action'];?>
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
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
;
    var selected_company = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['selected_company']->value);
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>

<?php echo '</script'; ?>
>

<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />
<link rel="stylesheet" href="public/css/salary_component.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/employee_salary_structure.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

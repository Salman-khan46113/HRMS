<?php
/* Smarty version 4.3.2, created on 2024-04-16 12:49:57
  from '/var/www/html/extra_work/HRMS/application/views/templates/attendance_correction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661e269d3d0176_30390875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be01f20f871f14cf60c32032e03e164c24b15e94' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/attendance_correction.tpl',
      1 => 1713251996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661e269d3d0176_30390875 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-middle-container">
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
                                            <span class="hide-menu">Status </span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                               <select class="form-select form-control w-100"  id="status_search">
                                               	<option value="" >Select Status </option>
		                                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['correction_status_arr']->value, 'correction_status_val');
$_smarty_tpl->tpl_vars['correction_status_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['correction_status_val']->value) {
$_smarty_tpl->tpl_vars['correction_status_val']->do_else = false;
?>
		                                            <option value="<?php echo $_smarty_tpl->tpl_vars['correction_status_val']->value['id'];?>
 " ><?php echo $_smarty_tpl->tpl_vars['correction_status_val']->value['val'];?>
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
                                            <span class="hide-menu">Emaployee Name </span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                            	<input type="text" class="form-control " id="employee_name_search"  placeholder="Emaployee Name">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Attendance date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>

                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" class="form-control " id="attendance_date_search"  placeholder="Attendance date">
                                              <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Attendance In Time</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control time-picker-input" id="attendance_in_time_search"  placeholder="Attendance In Time">
                                              <span class="input-group-text time-picker-addon"><i class="ti ti-clock"></i></span>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Correction In Time</span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control time-picker-input" id="correction_in_time_search"  placeholder="Correction In Time">
                                              <span class="input-group-text time-picker-addon"><i class="ti ti-clock"></i></span>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Attendance Out Time</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control time-picker-input" id="attendance_out_time_search"  placeholder="Attendance Out Time">
                                              <span class="input-group-text time-picker-addon"><i class="ti ti-clock"></i></span>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Correction Out Time</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control time-picker-input" id="correction_out_time_search"  placeholder="Correction Out Time">
                                              <span class="input-group-text time-picker-addon"><i class="ti ti-clock"></i></span>
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
            <h3>Attendance Correction Request</h3>
        </div>
        <div class="sub-header-right pull-right">
            <div class="timesheet-summary icon-box">
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
                <!-- <div class="timesheet-summary-lst">
                    <div class="dropdown grid-drop-down">
                      <button class="btn btn-secondary top-btn-row" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="las la-list-ul" style="color: black"></i>
                      </button>
                      <ul class="dropdown-menu p-0 mt-1" aria-labelledby="dropdownMenuButton1">
                        <li  class="active table" data-value="Table"><label>Table</label> <i class="las la-stream" style="color: black"></i></li>
                        <li  class="grid" data-value="Grid"><label>Grid</label><i class="las la-border-all" style="color: black"></i></li>

                      </ul>
                    </div>
                </div> -->
                
            </div>
            
           
        </div>
        </div>
    </div>
    <div class="inner-container" style="position: static; zoom: 1;">
        <div class="timesheet-container">
            <div class="custom-modal-content custom-content-table-with-fixed-column data_table_block">
                <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table display" style="border-collapse: collapse;" border-color="#e1e1e1" id="example">
                    <thead>
                        <tr>
                            <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                            <th><b>Search <?php ob_start();
echo $_smarty_tpl->tpl_vars['val']->value['title'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</b></th>
                            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- extra for footer -->
</div>
</div>
</div>
</div>
<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/attendance_correction.css" />
<?php echo '<script'; ?>
>
    var column_details =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['data']->value);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
;
    var page_length_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['page_length_arr']->value);
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

    var is_searching_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_searching_enable']->value);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
;
    var is_top_searching_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_top_searching_enable']->value);
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
;
    var is_paging_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_paging_enable']->value);
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
;
    var is_serverSide =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_serverSide']->value);
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
;
    var no_data_message =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
;
    var is_ordering =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_ordering']->value);
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
;
    var sorting_column = <?php ob_start();
echo $_smarty_tpl->tpl_vars['sorting_column']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>

    var api_name =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['api_name']->value);
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
;
    var base_url = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
;
<?php echo '</script'; ?>
>
     
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
	 <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="public/js/attendance_correction.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

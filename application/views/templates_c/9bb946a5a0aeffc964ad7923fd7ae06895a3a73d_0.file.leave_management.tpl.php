<?php
/* Smarty version 4.3.2, created on 2024-04-02 15:45:55
  from '/var/www/html/HRMS/application/views/templates/leave_management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660bdadb5bfc55_53343172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb946a5a0aeffc964ad7923fd7ae06895a3a73d' => 
    array (
      0 => '/var/www/html/HRMS/application/views/templates/leave_management.tpl',
      1 => 1711982604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660bdadb5bfc55_53343172 (Smarty_Internal_Template $_smarty_tpl) {
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
                                            <span class="hide-menu">Status</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i>
                                            </span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <select class="form-select form-control" name="status_drop_down" id="status_drop_down">
                                                <option value="" >Select Status</option>
                                                    <option value="pending" >Pending</option>
                                                    <option value="reject" >Reject</option>
                                                    <option value="approve" >Approve</option>
                                                </select>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Name</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="employee_name_search" class="form-control">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Employee Code</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="employee_code_search" class="form-control">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">From Date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="start_date_search"  placeholder="From Date">
                                              <!-- <span class="input-group-text"><i class="las la-calendar-alt"></i></span> -->
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">To Date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="end_date_search"  placeholder="To Date">
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
            <h3>Leave Request</h3>
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
                    <div class="dropdown grid-drop-down">
                      <button class="btn btn-secondary top-btn-row" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="las la-list-ul" style="color: black"></i>
                      </button>
                      <ul class="dropdown-menu p-0 mt-1" aria-labelledby="dropdownMenuButton1">
                        <li  class="active table" data-value="Table"><label>Table</label> <i class="las la-stream" style="color: black"></i></li>
                        <li  class="grid" data-value="Grid"><label>Grid</label><i class="las la-border-all" style="color: black"></i></li>

                      </ul>
                    </div>
                </div>
                
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


<div class="modal fade leave-popup-block" id="leave_aprove_reject" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Leave Reuqest</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="main-content">
                <div class="card mb-3 user-details-block">
                     <input type="hidden"  value="" id="leave_request_id">
                     <input type="hidden" value="" name="" id="user_details_input">
                        <div class="row g-0 m-3">
                            
                            <div class="col-2">
                                <div class=" image-block">
                                    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['profile_image']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" width="100" height="100" >                                   
                                </div>
                            </div>
                            <div class="col-10 employee-detils">
                                <div class="row">
                                	<div class="col-4 p-1">
                                		<span class="employee-name employee-name-block"><?php ob_start();
echo $_smarty_tpl->tpl_vars['first_name']->value;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['middle_name']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['last_name']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</span> 
                            			<span class="emp-grid-code" id="employee_code"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_code']->value;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</span>
                                	</div>
                                	<div class="col-4 p-1 location-block">
                                		<span class="title-box">Location</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['city']->value;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</span>
                                	</div>
                                	<div class="col-4 p-1 designation-block">
                                		<span class="title-box" >Designation</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['designation']->value;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</span>
                                	</div>
                                	<div class="col-4 p-1 department-block" >
                                		<span class="title-box">Department</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['department']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</span>
                                	</div>
                                	<div class="col-4 p-1 from-date-block">
                                		<span class="title-box">From Date</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_week_off']->value;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</span>
                                	</div>
                                	<div class="col-4 p-1 to-date-block">
                                		<span class="title-box">To Date</span> 
                            			<span class="val-box" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_week_off']->value;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</span>
                                	</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 leave-box">
                        <div class="row g-0 m-3">
                            
                            <div class="col-12 text-center">
                                <div class="ms-3">
                                    <div class="radio-toolbar leave_aprove_reject_check">
									    <input type="radio" id="approveAll" name="allReqs" value="approve">
									    <label for="approveAll" class="me-3"><i class="fas fa-check-circle"></i> Approve </label>

									    <input type="radio" id="denyAll" name="allReqs" value="reject">
									    <label for="denyAll"><i class="fas fa-times-circle"></i> Reject </label>
									  </div>                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary submit-leave" >Submit</button>
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
<link rel="stylesheet" href="public/css/leave.css" />
<?php echo '<script'; ?>
>
    var column_details =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['data']->value);
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
;
    var page_length_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['page_length_arr']->value);
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>

    var is_searching_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_searching_enable']->value);
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
;
    var is_top_searching_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_top_searching_enable']->value);
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
;
    var is_paging_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_paging_enable']->value);
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
;
    var is_serverSide =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_serverSide']->value);
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
;
    var no_data_message =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
;
    var is_ordering =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_ordering']->value);
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
;
    var sorting_column = <?php ob_start();
echo $_smarty_tpl->tpl_vars['sorting_column']->value;
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>

    var api_name =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['api_name']->value);
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
;
    var page_name = 'teacher_page';
    var base_url = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
;
<?php echo '</script'; ?>
>
     
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="public/js/leave_management_list.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

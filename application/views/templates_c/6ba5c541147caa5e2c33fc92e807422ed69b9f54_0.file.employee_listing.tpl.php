<?php
/* Smarty version 4.3.2, created on 2024-04-03 09:57:43
  from '/var/www/html/HRMS/application/views/templates/employee_listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660cdabf44dca9_59953243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ba5c541147caa5e2c33fc92e807422ed69b9f54' => 
    array (
      0 => '/var/www/html/HRMS/application/views/templates/employee_listing.tpl',
      1 => 1712118103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660cdabf44dca9_59953243 (Smarty_Internal_Template $_smarty_tpl) {
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
                                                    <option value="Active" >Active</option>
                                                    <option value="Inactive" >Inactive</option>
                                                    <option value="Pending" >Pending</option>
                                                    <option value="Block" >Block</option>
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
                                              <input type="text" id="employee_name_search" class="form-control" placeholder="Name">
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
                                              <input type="text" id="employee_code_search" class="form-control" placeholder="Employee Code">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Joining Date</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="join_date_search"  placeholder="Joining Date">
                                              <!-- <span class="input-group-text"><i class="las la-calendar-alt"></i></span> -->
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Email</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="email_search" class="form-control"  placeholder="Email">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Department</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="department_search"  placeholder="Department">
                                              <!-- <span class="input-group-text"><i class="las la-calendar-alt"></i></span> -->
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Designation</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="designation_search"  placeholder="Designation">
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
            <h3>Employee List</h3>
        </div>
        <div class="sub-header-right pull-right">
          <div class="timesheet-summary icon-box">
            <div class="timesheet-summary-lst">
                <div class="dropdown grid-drop-down">
                  <button class="btn btn-secondary top-btn-row" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class=" la-list-ul ti ti-list" style="color: black"></i>
                  </button>
                  <ul class="dropdown-menu p-0 mt-1" aria-labelledby="dropdownMenuButton1">
                    <li  class="active table" data-value="Table"><label>Table</label> <i class="las la-stream" style="color: black"></i></li>
                    <li  class="grid" data-value="Grid"><label>Grid</label><i class="las la-border-all" style="color: black"></i></li>

                  </ul>
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
            <div class="timesheet-summary-lst">
                    <div class="dropdown">
                      <button class="btn btn-secondary top-btn-row" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="las la-fill-drip"></i>
                      </button>
                      <ul class="dropdown-menu p-2 mt-1" aria-labelledby="dropdownMenuButton1">
                        <li title="Pending" class="pl-3"><span class="color-box pending"></span>Pending</li>
                        <li title="Block" class="pl-3"><span class="color-box block"></span>Block</li>
                        <li title="Active" class="pl-3"><span class="color-box active"></span>Active</li>
                        <li title="Inactive" class="pl-3"><span class="color-box inactive"></span>Inactive</li>
                        
                      </ul>
                    </div>
            </div>
            <div class="timesheet-summary-lst">
              <a href="employee-add.html"><button type="button" class="btn btn-primary add-designation add-leave add-action">
                <i class="ti ti-plus"></i>
                <span>Add Employee</span>
              </button>
                    </a>
            </div>
          </div>
        </div>
        </div>
    </div>
    <div class="inner-container" style="position: static; zoom: 1;">
        <div class="timesheet-container">
            <div class="custom-modal-content custom-content-table-with-fixed-column">
                <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table" style="border-collapse: collapse;" border-color="#e1e1e1" id="example">
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
<div class="modal fade" id="week_off_add" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Add week off</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="main-content">
                <div class="card mb-3 in-time-correction-box">
                    <input type="hidden"  value="" id="employee-id">
                        <div class="row g-0 m-3">
                            
                            <div class="col-4">
                                <div class="ms-3">
                                    <p class="fs-5 mb-1 fw-bold attendance-lable">Week Off </p>                                   
                                </div>
                            </div>
                            <div class="col-8 text-center">
                                <select class="form-select form-control" name="week_off" id="week_off">
                                  <option value="Monday" >Monday</option>
                                  <option value="Tuesday" >Tuesday</option>
                                  <option value="Wednesday" >Wednesday</option>
                                  <option value="Thursday" >Thursday</option>
                                  <option value="Friday" >Friday</option>
                                  <option value="Saturday" >Saturday</option>
                                  <option value="Sunday" >Sunday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary submit-week-off" >Submit</button>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="active_block" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <input type="hidden" value="" id="activate-employee-id">
      <input type="hidden" value="" id="mode-action">
      <div class="modal-header border-bottom">
        <h4 class="modal-title" id="exampleModalToggleLabel">Employee Account Activation</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body border-bottom" style="font-size: 26px;font-weight: 600;">
        Are you sure want to activate this account?
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 19px;">No</button>
        <button class="btn btn-primary submit-active" style="font-size: 19px;">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_approve_block" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <input type="hidden" value="" id="edit_approve_employee-id">
      <div class="modal-header border-bottom">
        <h4 class="modal-title" id="exampleModalToggleLabel">Employee Edit Details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary submit-approve-edit" data-type="Reject" data style="font-size: 19px;">Reject</button>
        <button class="btn btn-primary submit-approve-edit" data-type="Approve" style="font-size: 19px;">Approve</button>
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
<link rel="stylesheet" href="public/css/employee_listing.css" />

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
    var page_name = 'teacher_page';
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
<?php echo '<script'; ?>
 type="text/javascript" src="public/js/employee_listing.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

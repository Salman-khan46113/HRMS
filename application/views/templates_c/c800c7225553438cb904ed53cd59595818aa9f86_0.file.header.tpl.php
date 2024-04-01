<?php
/* Smarty version 4.3.2, created on 2024-03-31 23:14:58
  from '/var/www/html/extra_work/employee/application/views/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6609a11af36c08_01399461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c800c7225553438cb904ed53cd59595818aa9f86' => 
    array (
      0 => '/var/www/html/extra_work/employee/application/views/templates/header.tpl',
      1 => 1711907098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6609a11af36c08_01399461 (Smarty_Internal_Template $_smarty_tpl) {
?><!--  -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize</title>
  <link rel="shortcut icon" type="image/png" href="public/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="public/assets/css/styles.min.css" />
  <link href="public/css/plugin/line_awesome/line_awesome.css" rel="stylesheet" />
  
  <!-- <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/font-awesome-line-awesome/css/all.min.css"
  integrity="sha512-dC0G5HMA6hLr/E1TM623RN6qK+sL8sz5vB+Uc68J7cBon68bMfKcvbkg6OqlfGHo1nMmcCxO5AinnRTDhWbWsA=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
  /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css" />
  <!--  tabler css -->
  <link rel="stylesheet" href="public/css/plugin/tabler_css/tabler_icons.css" />
  <!--  tabler css -->

  <!-- slect2 -->
  <link href="public/css/plugin/select2/select2.css" rel="stylesheet" />
  <!-- slect2 -->

  <!-- font awesomw  -->
  <link rel="stylesheet" href="public/css/plugin/fontawesome/font_awesome.css">


  <!-- toaster -->
    <link rel="stylesheet" href="public/css/custom_toaster.css" />
  <!-- toaster -->

  <!-- time date picker -->
    <link rel="stylesheet" href="public/css/time_picker.css" />
  <!-- time date picker -->

  <!-- <?php echo '<script'; ?>
 src="public/assets/js/plugins/jquer_file.js"><?php echo '</script'; ?>
> -->

  <!-- date picker -->
  <link rel="stylesheet" type="text/css" href="public/css/plugin/date_picker.css">
  <!-- date picker -->

  <!-- loader -->
  <link rel="stylesheet" href="public/css/plugin/loader.css" />
  <!-- loader -->

  <!-- swal alert css -->
    <link rel="stylesheet" href="public/css/plugin/swal_alert/animate.css" />
    <link rel="stylesheet" href="public/css/plugin/swal_alert/sweetalert2.css" />
  <!-- swal alert css -->

  <!-- jquey -->
    <?php echo '<script'; ?>
 src="public/assets/js/plugins/jquer_file.js"><?php echo '</script'; ?>
>
    <!-- <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"><?php echo '</script'; ?>
> -->
  <!-- jquey -->

  <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="public/css/data_table/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/data_table/searchPanes.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/data_table/select.dataTables.min.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/plugin/datatable/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
  <!-- datatable -->
  
  <!-- slect2 -->
  <?php echo '<script'; ?>
 src="public/js/plugin/select2/select2.min.js"><?php echo '</script'; ?>
>
  <!-- slect2 -->

  <!-- swal alert js -->
   <?php echo '<script'; ?>
 src="public/js/plugin/swal_alert/sweetalert2.js"><?php echo '</script'; ?>
>
   <!-- swal alert js -->

  <!-- date time picker -->
    <?php echo '<script'; ?>
 src="public/js/plugin/date_picker/date_picker.js"><?php echo '</script'; ?>
>
  <!-- date time picker -->

  <!-- time picker -->
     <?php echo '<script'; ?>
 src="public/js/plugin/time_picker.js"><?php echo '</script'; ?>
>
  <!-- time picker -->
     
  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>

  <!-- chosen  -->
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"><?php echo '</script'; ?>
>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <div class=" outer-div-box">
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->

      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./home.html" class="text-nowrap logo-img">
            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/logos/dark-logo.svg" width="140" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <div class="sub-menu">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./home.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
          </div>
             <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['role']->value,array('admin','arom'))) {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Master</span>
            </li>
           <div class="sub-menu">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./company.html" aria-expanded="false">
                <span>
                  <i class="ti ti-businessplan"></i>

                </span>
                <span class="hide-menu">Companies</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./department.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Departmet</span>
              </a>
            </li>
             <li class="sidebar-item">
              <a class="sidebar-link" href="./designation.html" aria-expanded="false">
                <span>
                  <i class="ti ti-users-group"></i>
                </span>
                <span class="hide-menu">Designation</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./bank-listing.html" aria-expanded="false">
                <span>
                  <i class="ti ti-building-bank"></i>
                </span>
                <span class="hide-menu">Bank</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./shift-management.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-scan"></i>
                </span>
                <span class="hide-menu">Shift Master</span>
              </a>
            </li>

          </div>

            

            <?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">User</span>
            </li>
            <div class="sub-menu">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./employee-details.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Profile</span>
              </a>
            </li>
            <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['role']->value,array('admin','arom'))) {
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./employee-list.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-circle"></i>
                </span>
                <span class="hide-menu">Employee Listing</span>
              </a>
            </li>
           
            <?php ob_start();
}
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

        
          </div>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Leave</span>
            </li>
            <div class="sub-menu">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./leave-list.html" aria-expanded="false">
                <span>
                  <i class="ti ti-plane-departure"></i>
                </span>
                <span class="hide-menu">Leave</span>
              </a>
            </li>
            <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['role']->value,array('admin','arom'))) {
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

               <li class="sidebar-item">
              <a class="sidebar-link" href="./leave-management-list.html" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar-user"></i>
                </span>
                <span class="hide-menu">Leave Management</span>
              </a>
            </li>
            <?php ob_start();
}
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>

           </div>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Holiday</span>
            </li>
            <div class="sub-menu">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./holiday.html" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar-month"></i>
                </span>
                <span class="hide-menu">Holiday</span>
              </a>
            </li>
            <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['role']->value,array('admin','arom'))) {
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./holiday-management.html" aria-expanded="false">
                <span>
                  <i class="ti  ti-calendar-cog"></i>
                </span>
                <span class="hide-menu">Holiday Management</span>
              </a>
            </li>
            <?php ob_start();
}
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>


          </div>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Attendance</span>
            </li>
            <div class="sub-menu">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./attendance-sheet.html" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar-event"></i>
                </span>
                <span class="hide-menu">Time Sheet</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./attendance.html" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar-time"></i>
                </span>
                <span class="hide-menu">Attendance In Out</span>
              </a>
            </li>
            </div>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Alerts</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a> -->
            </li>
            <li class="nav-small-cap-auth">
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sign-out-btn" href="javascript:void(0)" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li> -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li> -->
          </ul>
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper ">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div>
            <a href="./home.html" class="text-nowrap logo-img">
            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
public/assets/images/logos/dark-logo.svg" width="140" alt="">
            </a>
    
          </div>
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="./announcement_list.html" title="Annoucement">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
                          <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['profile_image'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
" alt="" width="45" height="45" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up profile-drop-down p-0" aria-labelledby="drop2">
                  <div class="profile-block-div">
                    <div class="profile-basic-info">
                        <div class="profile-img">
                            <img width="40" height="40" class="profile-initial company-logo-top" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['first_name'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['middle_name'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['last_name'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['profile_image'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
" title="<?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['first_name'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['middle_name'];
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['last_name'];
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
">   
                        </div>
                        <div class="user-name">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['first_name'];
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['middle_name'];
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['last_name'];
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>

                        </div>
                      </div>
                    <div class="message-body">
                      <a href="./employee-details.html" class="d-flex align-items-center gap-2 dropdown-item mt-2 mb-2">
                        <i class="ti ti-user fs-6"></i>
                        <p class="mb-0 fs-3">My Profile</p>
                      </a>
                      <div class="logout-block" title="Reset Attendance Pin">
                         <a href="javascript:void(0)" class="reset-attendance-pin-btn">Reset Attendance Pin <i class="ti ti-calendar-cog"></i></a>
                      </div>
                      <div class="logout-block" title="Reset Password">
                         <a href="javascript:void(0)" class="Reset-pasword-btn">Reset Password <i class="ti ti-lock"></i>
</i></a>
                      </div>
                      <div class="logout-block" title="Logout">
                         <a href="javascript:void(0)" class="sign-out-btn">Logout <i class="ti ti-login-2"></i></a>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </li>
              <a href="javascript:void(0)"  data-bs-toggle="dropdown" class="user-name-block"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['first_name'];
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['middle_name'];
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['last_name'];
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
</a>
              <div class="modal fade leave-popup-block" id="reset_Password_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel">Reset Password</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="ResetPasswordForm" action="javascript:void(0)" method="post">
                        <div class="modal-body">
                          <div class="main-content">

                            <div class="card mb-3 leave-box">
                              <div class="row g-0 m-3">
                                <div class="mb-3">
                                  <label for="designationName" class="form-label">New Password</label>
                                  <input type="text" class="form-control new_pass" id="new_pass" name="new_pass"  placeholder="Enter New Password">
                                </div>
                                <div class="mb-3">
                                  <label for="designationName" class="form-label">Confirm Password</label>
                                  <input type="text" class="form-control confirm_pass" id="confirm_pass" name="confirm_pass"  placeholder="Enter Confirm Password">
                                </div>
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
              <div class="modal fade leave-popup-block" id="reset_attendance_pin_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel">Reset Password</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="ResetAttendancePinForm" action="javascript:void(0)" method="post">
                        <div class="modal-body">
                          <div class="main-content">

                            <div class="card mb-3 leave-box">
                              <div class="row g-0 m-3">
                                <div class="mb-3">
                                  <label for="new_attendance_pin" class="form-label">New Attendance Pin</label>
                                  <input type="number" class="form-control new_attendance_pin" id="new_attendance_pin" name="new_attendance_pin"  placeholder="Enter Attendance Pin">
                                </div>
                                <!-- <div class="mb-3">
                                  <label for="designationName" class="form-label">Confirm Password</label>
                                  <input type="text" class="form-control confirm_pass" id="confirm_pass" name="confirm_pass"  placeholder="Enter Confirm Password">
                                </div> -->
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
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid ">

       
        
      
  <?php }
}

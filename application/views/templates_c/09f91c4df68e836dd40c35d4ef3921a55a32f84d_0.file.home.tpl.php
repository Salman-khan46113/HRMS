<?php
/* Smarty version 4.3.2, created on 2024-05-04 12:14:43
  from '/var/www/html/extra_work/HRMS/application/views/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6635d95befc3a8_77844133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f91c4df68e836dd40c35d4ef3921a55a32f84d' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/home.tpl',
      1 => 1714805023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6635d95befc3a8_77844133 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="sub-header">
    <div class="sub-header-left pull-left mt-2">
        <h3>Welcome, <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['first_name'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 👋</h3>
        <div class="site-breadcrumb">Have a look at your overall summary.</div>
    </div>
</div>
<div class="p-2 dashbord-middle-box">
    <div class="row db-summary-content">
        <div class="col-lg-3 team-summary">
            <div class="dash-card-box my-summary-block">
                <div class="main-info-top">
                    <div class="my-profile-pic">
                        <img alt="" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['profile_image'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" />
                    </div>
                    <div class="my-details">
                        <h3><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['first_name'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['middle_name'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['last_name'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</h3>
                        <div class="my-designation"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['designation_name'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</div>
                        <div class="my-code"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['employee_code'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</div>
                    </div>
                </div>
                <div class="my-extra-info">
                    <div class="item-cnt">
                        <div class="item-label">Email :</div>
                        <div class="item-value email"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['email'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</div>
                    </div>
                    <div class="item-cnt">
                        <div class="item-label">Dept :</div>
                        <div class="item-value"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['department_name'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</div>
                    </div>
                    <div class="item-cnt">
                        <div class="item-label">Since :</div>
                        <div class="item-value"><?php ob_start();
echo $_smarty_tpl->tpl_vars['joining_date_arr']->value['y'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
 Years <?php ob_start();
echo $_smarty_tpl->tpl_vars['joining_date_arr']->value['m'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
 Months <?php ob_start();
echo $_smarty_tpl->tpl_vars['joining_date_arr']->value['d'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
 Days</div>
                    </div>

                    <div class="item-cnt">
                        <div class="item-label">Location :</div>
                        <div class="item-value"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['city'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</div>
                    </div>
                </div>
            </div>
            <div class="dash-card-box">
                <div class="dash-card-box-header">
                    <div class="dash-card-box-header-title">
                        My Department
                    </div>
                    <div class="dash-card-box-header-action"></div>
                </div>
                <div class="dash-card-box-content">
                    <div class="dash-card-box-content-inner">
                        <ul class="team-member-db-summary-list" id="team-member-db-summary-list">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['department_member']->value, 'department_val');
$_smarty_tpl->tpl_vars['department_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department_val']->value) {
$_smarty_tpl->tpl_vars['department_val']->do_else = false;
?>
                            <li class="summary-team-data-for-left" style="display: flex;">
                                <div class="badge-cnt">
                                    <span class="badge <?php echo $_smarty_tpl->tpl_vars['department_val']->value['team_meber_class'];?>
"> <?php echo $_smarty_tpl->tpl_vars['department_val']->value['team_meber_title'];?>
</span>
                                </div>
                                <div class="member-cnt <?php echo $_smarty_tpl->tpl_vars['department_val']->value['attendance_status_class'];?>
">
                                    <div class="emp-basic-info">
                                        <div class="emp-thumb">
                                            <img
                                                alt=""
                                                src="<?php echo $_smarty_tpl->tpl_vars['department_val']->value['profile_image'];?>
"
                                            />
                                        </div>
                                        <div class="status">
                                            <?php echo $_smarty_tpl->tpl_vars['department_val']->value['attendance_status'];?>

                                        </div>
                                    </div>
                                    <div class="emp-details">
                                        
                                        <h3><?php echo $_smarty_tpl->tpl_vars['department_val']->value['full_name'];?>
</h3>
                                        <div class="item-cnt">
                                            <!--<span class="item-label">As</span> -->
                                            <span class="item-data"> <?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_name'];?>
 </span>
                                        </div>
                                        <div class="item-cnt">
                                            <!-- <span class="item-label">Dept: </span> -->
                                            <span class="item-data"> <?php echo $_smarty_tpl->tpl_vars['department_val']->value['designation_name'];?>
</span>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['department_val']->value['attendance_status'] != 'Absent' && $_smarty_tpl->tpl_vars['department_val']->value['attendance_status'] != 'On Leave') {?>
                                <div class="inout-time  mt-2">
                                  <span class="item-label">In:</span> <span class="item-data"><?php echo $_smarty_tpl->tpl_vars['department_val']->value['attendance_in_time'];?>
 </span> | <span class="item-label">Out:</span> <span class="item-data"><?php echo display_no_character($_smarty_tpl->tpl_vars['department_val']->value['attendance_in_time']);?>
</span></div>
                                <?php }?>
                            </li>

                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6 quick-access-summary">
                    <div class="dash-card-box attendance-box">
                        <div class="dash-card-box-header">
                            <div class="dash-card-box-header-title">Attendance</div>
                            <div class="dash-card-box-header-action">Today</div>
                        </div>
                        <div class="dash-card-box-content">
                            <div class="dash-card-box-content-inner">
                                <div class="wrapper-cnt d-flex">
                                    <div class="avg-hours highlight-box">
                                        <div class="count"><?php ob_start();
echo $_smarty_tpl->tpl_vars['working_time']->value;
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</div>
                                        <span class="item-label">Working Hours <em>Today </em> </span>
                                    </div>

                                    <div class="bottom-action today-highlight w-100">
                                        <div class="d-flex">
                                            <div class="today-info">
                                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_in_time']->value != '') {
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>

                                                <div class="time">Attendance In : <?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_in_time']->value;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
</div>
                                                <?php ob_start();
} else {
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>

                                                <div class="time absent-text">Absent</div>
                                                <?php ob_start();
}
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>

                                            </div>
                                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_out_time']->value != '') {
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>

                                            <div class="today-info">
                                                <div class="time">Attendance Out : <?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_out_time']->value;
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
</div>
                                            </div>

                                            <?php ob_start();
}
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dash-card-box celebrating-birthdays">
                        <div class="dash-card-box-header">
                            <div class="dash-card-box-header-title" style="padding-left: 50px; grid-gap: 0;">
                                <div class="image-box"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
public/assets/images/images/birthday-cake_1.png" width="21" height="21" alt="" /></div>
                                Celebrating Birthdays
                                <div class="sub-title-text" style="margin: 0; color: var(--body-light-text); font-size: var(--mediumFont) !important; width: 100%; line-height: 14px; font-weight: var(--theme-font-weight-medium) !important;">
                                    <?php ob_start();
echo date("d");
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
 <?php ob_start();
echo date("D");
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
 to <?php ob_start();
echo date("d",strtotime("+7 days"));
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
 <?php ob_start();
echo date("D",strtotime("+7 days"));
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
 (Next 7 Days)
                                </div>
                            </div>
                        </div>
                        <div class="dash-card-box-content">
                            <?php if (count($_smarty_tpl->tpl_vars['bithaday']->value) > 0) {?>
                            <div class="dash-card-box-content-inner">
                                <div class="birthday-list-block">
                                    <div class="wrapper-cnt d-flex mt-2 mb-2">
                                        <div class="db-emp-thumb-list">
                                            <ul>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bithaday']->value, 'employee', false, 'index');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                                                <li>
                                                    <div class="emp-thumb tooltips" title="<?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['first_name'];
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['middle_name'];
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['last_name'];
$_prefixVariable30 = ob_get_clean();
echo $_prefixVariable30;?>
">
                                                        <img alt="" width="50" height="50" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable31 = ob_get_clean();
echo $_prefixVariable31;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['profile_image'];
$_prefixVariable32 = ob_get_clean();
echo $_prefixVariable32;?>
" />
                                                    </div>

                                                    <span class="text"><?php ob_start();
echo date("d",strtotime($_smarty_tpl->tpl_vars['employee']->value['dob']));
$_prefixVariable33 = ob_get_clean();
echo $_prefixVariable33;?>
 <?php ob_start();
echo date("M",strtotime($_smarty_tpl->tpl_vars['employee']->value['dob']));
$_prefixVariable34 = ob_get_clean();
echo $_prefixVariable34;?>
</span>
                                                </li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="birthday-list-block">
                                <div class="wrapper-cnt d-flex mt-0">
                                    <div class="db-emp-thumb-list text-center mt-0 no-birthday-block">
                                        <div class="">
                                            <img class="" src="public/assets/images/images/no_data_found_new.png" height="50" width="50" >
                                            <span class="shadow-line"></span>
                                             No birthday data found..!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="dash-card-box leave-box">
                        <div class="dash-card-box-header">
                            <div class="dash-card-box-header-title">Leave Balances</div>
                        </div>

                        <div id="leave_balance_summary_data">
                            <div class="dash-card-box-content">
                                <div class="dash-card-box-content-inner">
                                    <div class="wrapper-cnt d-flex">
                                        <div class="leave-balance highlight-box">
                                            <div class="count"><?php echo $_smarty_tpl->tpl_vars['pending_leave']->value;?>
</div>
                                            <span class="tooltips item-label" title="Privilege Leave"> PL</span>
                                        </div>

                                        <div class="bottom-action today-highlight w-100">
                                            <div class="d-flex">
                                                <div class="action-button ml-auto  mb-2 pb-1">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['apply_leave_url']->value;?>
" class="text-link">Apply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dash-card-box celebrating-birthdays celebrating-anniversary">
                        <div class="dash-card-box-header">
                            <div class="dash-card-box-header-title" style="padding-left: 50px; grid-gap: 0;">
                                <div class="image-box"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable35 = ob_get_clean();
echo $_prefixVariable35;?>
public/assets/images/images/birthday-cake_1.png" width="21" height="21" alt="" /></div>
                                Celebrating Work Anniversary
                                <div class="sub-title-text" style="margin: 0; color: var(--body-light-text); font-size: var(--mediumFont) !important; width: 100%; line-height: 14px; font-weight: var(--theme-font-weight-medium) !important;">
                                    <?php ob_start();
echo date("d");
$_prefixVariable36 = ob_get_clean();
echo $_prefixVariable36;?>
 <?php ob_start();
echo date("D");
$_prefixVariable37 = ob_get_clean();
echo $_prefixVariable37;?>
 to <?php ob_start();
echo date("d",strtotime("+7 days"));
$_prefixVariable38 = ob_get_clean();
echo $_prefixVariable38;?>
 <?php ob_start();
echo date("D",strtotime("+7 days"));
$_prefixVariable39 = ob_get_clean();
echo $_prefixVariable39;?>
 (Next 7 Days)
                                </div>
                            </div>
                        </div>
                        <div class="dash-card-box-content">
                            <?php if (count($_smarty_tpl->tpl_vars['work_anniversary']->value) > 0) {?>
                            <div class="dash-card-box-content-inner">
                                <div class="birthday-list-block">
                                    <div class="wrapper-cnt d-flex mt-2 mb-2">
                                        <div class="db-emp-thumb-list">
                                            <ul>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['work_anniversary']->value, 'employee', false, 'index');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                                                <li>
                                                    <div class="emp-thumb tooltips" title="<?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['first_name'];
$_prefixVariable40 = ob_get_clean();
echo $_prefixVariable40;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['middle_name'];
$_prefixVariable41 = ob_get_clean();
echo $_prefixVariable41;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['last_name'];
$_prefixVariable42 = ob_get_clean();
echo $_prefixVariable42;?>
">
                                                        <img alt="" width="50" height="50" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable43 = ob_get_clean();
echo $_prefixVariable43;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['profile_image'];
$_prefixVariable44 = ob_get_clean();
echo $_prefixVariable44;?>
" />
                                                    </div>

                                                    <span class="text"><?php ob_start();
echo date("d",strtotime($_smarty_tpl->tpl_vars['employee']->value['employment_date']));
$_prefixVariable45 = ob_get_clean();
echo $_prefixVariable45;?>
 <?php ob_start();
echo date("M",strtotime($_smarty_tpl->tpl_vars['employee']->value['employment_date']));
$_prefixVariable46 = ob_get_clean();
echo $_prefixVariable46;?>
</span>
                                                </li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="birthday-list-block">
                                <div class="wrapper-cnt d-flex mt-0">
                                    <div class="db-emp-thumb-list text-center mt-0 no-birthday-block">
                                        <div class="">
                                            <img class="" src="public/assets/images/images/no_data_found_new.png" height="50" width="50" >
                                            <span class="shadow-line"></span>
                                            No work anniversary data found..!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 quick-access-summary">
                    <div class="dash-card-box attendace-summary-dash-card-box">
                        <div class="dash-card-box-header">
                            <div class="dash-card-box-header-title">Attendance Summary</div>
                            <div class="dash-card-box-header-action"><?php echo $_smarty_tpl->tpl_vars['attendance_summary']->value['attendance_month'];?>
</div>
                        </div>

                        <div class="dash-card-box-content">
                            <div class="dash-card-box-content-inner">
                                <div class="attendance-summary-block summary-block w-100">
                                    <div class="chart-summary with-icon green-block">
                                        <div class="chart-summary-icon">
                                            <i class="icon-right"><img src="public/assets/images/images/shift_completed.png" /></i>
                                        </div>
                                        <div class="chart-summary-ttl d-flex flex-column">
                                            <a role="link" class="ttl-count">
                                                <span class="present-count" tip-title="">
                                                    <?php echo $_smarty_tpl->tpl_vars['attendance_summary']->value['total_present_date'];?>

                                                </span>
                                            </a>
                                            <label class="dashboard-title">Present Days</label>
                                        </div>
                                    </div>
                                    <div class="chart-summary with-icon red-block">
                                        <div class="chart-summary-icon">
                                            <i class="icon-right"><img src="public/assets/images/images/absent.png" /></i>
                                        </div>
                                        <div class="chart-summary-ttl d-flex flex-column">
                                            <a role="link" class="ttl-count">
                                                <span class="absent-count" tip-title="">
                                                    <?php echo $_smarty_tpl->tpl_vars['attendance_summary']->value['attendance_percentage'];?>

                                                </span>
                                            </a>
                                            <label class="dashboard-title">Avg. Attendance</label>
                                        </div>
                                    </div>
                                    <div class="chart-summary with-icon red-block">
                                        <div class="chart-summary-icon">
                                            <i class="icon-right"><img src="public/assets/images/images/absent.png" /></i>
                                        </div>
                                        <div class="chart-summary-ttl d-flex flex-column">
                                            <a role="link" class="ttl-count">
                                                <span class="absent-count" tip-title="">
                                                    <?php echo $_smarty_tpl->tpl_vars['attendance_summary']->value['total_absent_date'];?>

                                                </span>
                                            </a>
                                            <label class="dashboard-title">Absent Days</label>
                                        </div>
                                    </div>
                                    <div class="chart-summary with-icon yellow-block">
                                        <div class="chart-summary-icon">
                                            <i><img src="public/assets/images/images/on_leave.png" /></i>
                                        </div>
                                        <div class="chart-summary-ttl d-flex flex-column">
                                            <a role="link" class="ttl-count">
                                                <span class="leaves-count" tip-title="">
                                                    <?php echo $_smarty_tpl->tpl_vars['attendance_summary']->value['current_month_leave'];?>

                                                </span>
                                            </a>
                                            <label class="dashboard-title">Leaves</label>
                                        </div>
                                    </div>

                                    <div class="chart-summary with-icon green-block">
                                        <div class="chart-summary-icon"><i class="las la-user-clock"></i></div>
                                        <div class="chart-summary-ttl d-flex flex-column">
                                            <a role="link" class="ttl-count">
                                                <span class="trip-count" tip-title="">
                                                   <?php echo $_smarty_tpl->tpl_vars['attendance_summary']->value['total_working_hours'];?>

                                                </span>
                                            </a>
                                            <label class="dashboard-title">Working Hours</label>
                                        </div>
                                    </div>
                                    <div class="chart-summary with-icon red-block">
                                        <div class="chart-summary-icon"><i class="ti ti-calendar-time"></i></div>
                                        <div class="chart-summary-ttl d-flex flex-column">
                                            <a role="link" class="ttl-count">
                                                <span class="trip-count" tip-title="">
                                                    <?php echo $_smarty_tpl->tpl_vars['attendance_summary']->value['total_week_off_date'];?>

                                                </span>
                                            </a>
                                            <label class="dashboard-title">Week Off</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Monthly Earnings -->
                    <div class="dash-card-box announcement-box">
                        <div class="dash-card-box-header">
                            <div class="dash-card-box-header-title">
                                <i class="ti ti-speakerphone"></i>
                                Announcements
                            </div>
                            <div class="dash-card-box-header-action">
                                <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>

                            </div>
                        </div>
                        <div class="dash-card-box-content">
                            <div class="dash-card-box-content-inner">
                                <div class="wrapper-cnt d-flex pt-0">
                                    <div class="info-cnt">
                                        <?php if (count($_smarty_tpl->tpl_vars['notification_details']->value) > 0) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notification_details']->value, 'notification', false, 'index');
$_smarty_tpl->tpl_vars['notification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->do_else = false;
?>
                                            <p></p>
                                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['notification']->value['redirect_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['notification']->value['title'];?>
</a></p>
                                            <p></p>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                        <div class="text-center mt-5 pt-5">
                                            <img class="p-2 no-annocement-imag" src="public/assets/images/images/no_data_found_new.png" height="100" width="100" >
                                            <br> No announcements data found..!
                                        </div>  
                                        <?php }?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dash-card-box holiday-box">
                        <div class="dash-card-box-header">
                            <div class="dash-card-box-header-title">Next Holiday</div>
                        </div>

                        <div class="dash-card-box-content">
                            <?php if (count($_smarty_tpl->tpl_vars['holiday']->value) > 0) {?>
                            <div class="dash-card-box-content-inner">
                                <div class="wrapper-cnt d-flex mb-2">
                                    
                                    <div class="hoiday-date">
                                        <div class="date"><?php echo $_smarty_tpl->tpl_vars['holiday']->value['date'];?>
</div>
                                        <div class="month"><span><?php echo $_smarty_tpl->tpl_vars['holiday']->value['month'];?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['holiday']->value['year'];?>
</span></div>
                                    </div>
                                    <div class="features-img"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable47 = ob_get_clean();
echo $_prefixVariable47;?>
public/assets/images/images/holiday-img.png" alt="" /></div>
                                    <div class="bottom-action today-highlight w-100">
                                        <p><?php echo $_smarty_tpl->tpl_vars['holiday']->value['holiday_name'];?>
</p>
                                    </div>
                                    
                                </div>
                               
                            </div>
                             <?php } else { ?>
                                <div class="text-center">
                                    <div class="mt-3">
                                        <img class="p-2" src="public/assets/images/images/no_holiday_dash.png" height="50" width="50" style="opacity: .5;" >
                                        <br> No holiday found..!
                                    </div>
                                </div>
                                    
                            <?php }?>
                        </div>
                    </div>
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
 src="public/assets/js/dashboard.js"><?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

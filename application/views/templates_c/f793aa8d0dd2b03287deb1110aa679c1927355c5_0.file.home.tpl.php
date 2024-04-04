<?php
/* Smarty version 4.3.2, created on 2024-04-02 18:47:16
  from 'C:\xampp\htdocs\HRMS\application\views\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660c3694da76d5_14822993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f793aa8d0dd2b03287deb1110aa679c1927355c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HRMS\\application\\views\\templates\\home.tpl',
      1 => 1712075502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_660c3694da76d5_14822993 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="sub-header">
    <div class="sub-header-left pull-left">
        <h3>Welcome, <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['first_name'];
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
 👋</h3>
        <div class="site-breadcrumb">Have a look at your overall summary.</div>
        
        
        
    </div>

</div>
<div class="p-2 dashbord-middle-box">
<div class="row db-summary-content ">

  <div class="col-lg-3 team-summary">
    <div class="dash-card-box my-summary-block">
        <div class="main-info-top">
            <div class="my-profile-pic">
                <img
                    alt=""
                    src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['profile_image'];
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>
"
                />
            </div>
            <div class="my-details">
                <h3><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['first_name'];
$_prefixVariable30 = ob_get_clean();
echo $_prefixVariable30;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['middle_name'];
$_prefixVariable31 = ob_get_clean();
echo $_prefixVariable31;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['last_name'];
$_prefixVariable32 = ob_get_clean();
echo $_prefixVariable32;?>
</h3>
                <div class="my-designation"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['designation_name'];
$_prefixVariable33 = ob_get_clean();
echo $_prefixVariable33;?>
</div>
                <div class="my-code"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['employee_code'];
$_prefixVariable34 = ob_get_clean();
echo $_prefixVariable34;?>
</div>
            </div>
        </div>
        <div class="my-extra-info">
            <div class="item-cnt">
                <div class="item-label">Email :</div>
                <div class="item-value email"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['email'];
$_prefixVariable35 = ob_get_clean();
echo $_prefixVariable35;?>
</div>
            </div>
            <div class="item-cnt">
                <div class="item-label">Dept :</div>
                <div class="item-value"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['department_name'];
$_prefixVariable36 = ob_get_clean();
echo $_prefixVariable36;?>
</div>
            </div>
            <div class="item-cnt">
                <div class="item-label">Since :</div>
                <div class="item-value"><?php ob_start();
echo $_smarty_tpl->tpl_vars['joining_date_arr']->value['y'];
$_prefixVariable37 = ob_get_clean();
echo $_prefixVariable37;?>
 Years <?php ob_start();
echo $_smarty_tpl->tpl_vars['joining_date_arr']->value['m'];
$_prefixVariable38 = ob_get_clean();
echo $_prefixVariable38;?>
 Months <?php ob_start();
echo $_smarty_tpl->tpl_vars['joining_date_arr']->value['d'];
$_prefixVariable39 = ob_get_clean();
echo $_prefixVariable39;?>
 Days</div>
            </div>
            
            <div class="item-cnt">
                <div class="item-label">Location :</div>
                <div class="item-value"><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['city'];
$_prefixVariable40 = ob_get_clean();
echo $_prefixVariable40;?>
</div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12 quick-access-summary">
                <div class="dash-card-box attendance-box">
                  <div class="dash-card-box-header">
                    <div class="dash-card-box-header-title">Attendance </div>
                    <div class="dash-card-box-header-action">Today </div>
                  </div>
                  <div class="dash-card-box-content">
                    <div class="dash-card-box-content-inner">
                      <div class="wrapper-cnt d-flex">
                        <div class="avg-hours highlight-box">
                          <div class="count"><?php ob_start();
echo $_smarty_tpl->tpl_vars['working_time']->value;
$_prefixVariable41 = ob_get_clean();
echo $_prefixVariable41;?>
</div>
                          <span class="item-label">Working Hours <em>Today </em> </span> 
                        </div>

                        <div class="bottom-action today-highlight w-100">
                          <div class="d-flex">
                            <div class="today-info">
                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_in_time']->value != '') {
$_prefixVariable42 = ob_get_clean();
echo $_prefixVariable42;?>

                              <div class="time">Attendance In : <?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_in_time']->value;
$_prefixVariable43 = ob_get_clean();
echo $_prefixVariable43;?>
</div>
                            <?php ob_start();
} else {
$_prefixVariable44 = ob_get_clean();
echo $_prefixVariable44;?>

                                <div class="time absent-text">Absent</div>
                            <?php ob_start();
}
$_prefixVariable45 = ob_get_clean();
echo $_prefixVariable45;?>

                            </div>
                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_out_time']->value != '') {
$_prefixVariable46 = ob_get_clean();
echo $_prefixVariable46;?>

                            <div class="today-info">
                              <div class="time">Attendance Out : <?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_out_time']->value;
$_prefixVariable47 = ob_get_clean();
echo $_prefixVariable47;?>
</div>
                              
                            </div>

                            <?php ob_start();
}
$_prefixVariable48 = ob_get_clean();
echo $_prefixVariable48;?>

                            
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
$_prefixVariable49 = ob_get_clean();
echo $_prefixVariable49;?>
public/assets/images/images/birthday-cake_1.png" width="21" height="21" alt=""></div> Celebrating Birthdays
                            <div class="sub-title-text" style="margin: 0; color: var(--body-light-text); font-size: var(--mediumFont) !important; width: 100%; line-height: 14px; font-weight: var(--theme-font-weight-medium) !important;">
                                <?php ob_start();
echo date("d");
$_prefixVariable50 = ob_get_clean();
echo $_prefixVariable50;?>
 <?php ob_start();
echo date("D");
$_prefixVariable51 = ob_get_clean();
echo $_prefixVariable51;?>
 to <?php ob_start();
echo date("d",strtotime("+7 days"));
$_prefixVariable52 = ob_get_clean();
echo $_prefixVariable52;?>
 <?php ob_start();
echo date("D",strtotime("+7 days"));
$_prefixVariable53 = ob_get_clean();
echo $_prefixVariable53;?>
 (Next 7 Days)
                            </div>
                        </div>
                    </div>
                    <div class="dash-card-box-content">
                        <div class="dash-card-box-content-inner">
                           
                            <div class="birthday-list-block">
                                <div class="wrapper-cnt d-flex mt-3">
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
$_prefixVariable54 = ob_get_clean();
echo $_prefixVariable54;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['middle_name'];
$_prefixVariable55 = ob_get_clean();
echo $_prefixVariable55;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['last_name'];
$_prefixVariable56 = ob_get_clean();
echo $_prefixVariable56;?>
">
                                                    <img
                                                        alt=""
                                                        width="50"
                                                        height="50"
                                                        src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable57 = ob_get_clean();
echo $_prefixVariable57;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value['profile_image'];
$_prefixVariable58 = ob_get_clean();
echo $_prefixVariable58;?>
"
                                                    />
                                                </div>

                                                <span class="text"><?php ob_start();
echo date("d",strtotime($_smarty_tpl->tpl_vars['employee']->value['dob']));
$_prefixVariable59 = ob_get_clean();
echo $_prefixVariable59;?>
 <?php ob_start();
echo date("M",strtotime($_smarty_tpl->tpl_vars['employee']->value['dob']));
$_prefixVariable60 = ob_get_clean();
echo $_prefixVariable60;?>
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
                    </div>
                </div>

              </div>
              
            </div>
          </div>
<div class="col-lg-5">
            <div class="row">
           <div class="col-lg-12">
                <!-- Monthly Earnings -->
               <div class="dash-card-box holiday-box">
              <div class="dash-card-box-header">
                <div class="dash-card-box-header-title">Next Holiday</div>
              </div>
                        
              <div class="dash-card-box-content">
                <div class="dash-card-box-content-inner">
                  <div class="wrapper-cnt d-flex mb-2">
                    <?php if (count($_smarty_tpl->tpl_vars['holiday']->value) > 0) {?> 
                      <div class="hoiday-date">
                        <div class="date"><?php echo $_smarty_tpl->tpl_vars['holiday']->value['date'];?>
</div>
                        <div class="month "> <span><?php echo $_smarty_tpl->tpl_vars['holiday']->value['month'];?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['holiday']->value['year'];?>
</span> </div>
                      </div>
                      <div class="features-img"> <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable61 = ob_get_clean();
echo $_prefixVariable61;?>
public/assets/images/images/holiday-img.png" alt=""> </div>
                      <div class="bottom-action today-highlight w-100">
                        <p><?php echo $_smarty_tpl->tpl_vars['holiday']->value['holiday_name'];?>
</p>
                      </div>
                    <?php } else { ?>
                    <div class="row w-100 no-holiday-found-block">
                      <div class="col-4">
                      </div>
                      <div class="col-4 text-center">
                        <div class="mt-3"> 
                         <div class="mb-3"> <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable62 = ob_get_clean();
echo $_prefixVariable62;?>
public/assets/images/images/no_holiday_dash.png" alt="" width="60" height="60"> </div>
                        <span class="">No Holiday found!</span> 
                      </div>
                      </div>
                      <div class="col-4">
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
</div>
<div class="row hide">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Sales Overview</h5>
                  </div>
                  <div>
                    <select class="form-select">
                      <option value="1">March 2023</option>
                      <option value="2">April 2023</option>
                      <option value="3">May 2023</option>
                      <option value="4">June 2023</option>
                    </select>
                  </div>
                </div>
                <div id="chart"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">$36,358</h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="me-4">
                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2023</span>
                          </div>
                          <div>
                            <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2023</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                        <h4 class="fw-semibold mb-3">$6,820</h4>
                        <div class="d-flex align-items-center pb-1">
                          <span
                            class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-down-right text-danger"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-currency-dollar fs-6"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="earning"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row hide">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <h5 class="card-title fw-semibold">Recent Transactions</h5>
                </div>
                <ul class="timeline-widget mb-0 position-relative mb-n5">
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe of $385.90</div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                        href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to Michael</div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                        href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded 
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Assigned</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Priority</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Budget</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Elite Admin</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                            <span class="fw-normal">Project Manager</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                            <span class="fw-normal">Project Manager</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$12.8k</h6>
                        </td>
                      </tr>      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                            <span class="fw-normal">Frontend Engineer</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Hosting Press HTML</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$2.4k</h6>
                        </td>
                      </tr>                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row hide">
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable63 = ob_get_clean();
echo $_prefixVariable63;?>
public/assets/images/products/s4.jpg" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$50 <span class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable64 = ob_get_clean();
echo $_prefixVariable64;?>
public/assets/images/products/s5.jpg" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$650 <span class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable65 = ob_get_clean();
echo $_prefixVariable65;?>
public/assets/images/products/s7.jpg" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$150 <span class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable66 = ob_get_clean();
echo $_prefixVariable66;?>
public/assets/images/products/s11.jpg" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$285 <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-6 px-6 text-center hide">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
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

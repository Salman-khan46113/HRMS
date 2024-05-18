<?php
/* Smarty version 4.3.2, created on 2024-05-11 00:26:53
  from '/var/www/html/extra_work/HRMS/application/views/templates/employee_add_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_663e6df5392c28_86138631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f28f8a8ce579009afc1510d4348305f67a0051' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/employee_add_update.tpl',
      1 => 1715367406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bank_add_templete.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_663e6df5392c28_86138631 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" />
<link rel="stylesheet" href="public/css/employee.css" />
<link rel="stylesheet" href="public/css/steper.css" />
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
    <div class="sub-header-left pull-left">
        <h3><?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Add') {?>Add Employee<?php } else { ?>Update Employee<?php }?></h3>
        
    </div>
    <div class="sub-header-right pull-right">
          <div class="timesheet-summary icon-box">
            <div class="timesheet-summary-lst">
                <div class="dropdown grid-drop-down">
                  <a class="btn btn-secondary top-btn-row" href="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
" title="Back"  >
                        <i class="ti ti-arrow-left"></i>
                    
                  </a>
                  
                </div>
            </div>
          </div>
        </div>
    

</div>
<div class="inner-container" style="position: static; zoom: 1;">
        <!--  Body Wrapper -->
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            <div class="position-relative overflow-hidden  min-vh-100 d-flex align-items-center justify-content-center outer-div-box">
                <div class="d-flex w-100">
                    <div class="row justify-content-center w-100">
                        <div class="col-md-8 col-lg-6 col-xxl-11 mt-3 mb-4">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="step-bar">
                                        <ol id="progressbar" class="mb-5">
                                            <li class="active active_step step-first-block">
                                                <div class="icon-div"><i class="ti ti-user"></i></div>
                                            </li>
                                            <li class="step-second-block">
                                                <div class="icon-div"><i class="ti ti-address-book"></i></div>
                                            </li>
                                            <li class="step-third-block">
                                                <div class="icon-div"><i class="ti ti-building-bank"></i></div>
                                            </li>
                                        </ol>
                                    </div>

                                    <form action="javascript:void(0)" method="POST" id="employee_registration">
                                        <input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" id="mode">
                                        <input type="hidden" name="employee_id" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['employee_id'];?>
" id="employee_id">
                                        <div class="personal-details step-first-form" >
                                            <div class="row mb-3 title-block">
                                                <label class="h3">Personal Details</label>
                                            </div>
                                            <div class="form-contain">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="first_name" class="form-label">First Name <span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['first_name'];?>
" placeholder="First Name" />
                                                    </div>
                                                    <div class="col">
                                                        <label for="middle_name" class="form-label">Middle Name </label>
                                                        <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['middle_name'];?>
" placeholder=" Middle Name" />
                                                    </div>
                                                    <div class="col">
                                                        <label for="last_name" class="form-label">Last Name <span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['last_name'];?>
" placeholder="Last Name" />
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="email" class="form-label">Email <span class="star_required">*</span></label>
                                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['email'];?>
" placeholder="Email" />
                                                    </div>

                                                    <div class="col dob">
                                                        <label for="dob" class="form-label">Date of Birth <span class="star_required">*</span></label>

                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="dob" name="dob" value="<?php echo getDatePickerFormat($_smarty_tpl->tpl_vars['employee_data']->value['dob']);?>
" placeholder="Select Date of Birth" />

                                                            <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col mobile_number">
                                                        <div class="form-group mb-1">
                                                            <label for="mobile_number" class="w-100 form-label">Mobile Number <span class="star_required">*</span></label>
                                                            <input type="text" class="form-control tel-input" id="mobile_number" name="mobile_number" placeholder="Mobile Number" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['mobile_number'];?>
"/>
                                                        </div>
                                                    </div>

                                                    <div class="col secondary_number">
                                                        <div class="form-group mb-1">
                                                            <label for="secondary_number" class="w-100 form-label">Secondary Mobile Number </label>
                                                            <input type="text" class="form-control tel-input" id="secondary_number" name="secondary_number" placeholder="Secondary Mobile Number" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['secondary_mobile_number'];?>
" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col gender-box">
                                                        <div class="form-group mb-0">
                                                            <label for="gender" class="form-label ">Gender <span class="star_required">*</span></label><br />
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input form-control" type="radio" name="gender" id="male" value="Male" <?php ob_start();
if ($_smarty_tpl->tpl_vars['employee_data']->value['gender'] == 'Male') {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 checked <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
/>
                                                                <label class="form-check-label " for="male">Male</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php ob_start();
if ($_smarty_tpl->tpl_vars['employee_data']->value['gender'] == 'Female') {
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
 checked <?php ob_start();
}
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/>
                                                                <label class="form-check-label" for="female">Female</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input" type="radio" name="gender" id="other" value="Other" <?php ob_start();
if ($_smarty_tpl->tpl_vars['employee_data']->value['gender'] == 'Other') {
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
 checked <?php ob_start();
}
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
/>
                                                                <label class="form-check-label" for="other">Other</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col marital-box">
                                                        <div class="form-group mb-0">
                                                            <label for="marital_status" class="form-label">marital Status <span class="star_required">*</span></label><br />
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input form-control" type="radio" name="marital_status" id="single" value="Single" <?php ob_start();
if ($_smarty_tpl->tpl_vars['employee_data']->value['marital_status'] == 'Single') {
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
 checked <?php ob_start();
}
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
/>
                                                                <label class="form-check-label" for="single">Single</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="married" value="Married" <?php ob_start();
if ($_smarty_tpl->tpl_vars['employee_data']->value['marital_status'] == 'Married') {
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
 checked <?php ob_start();
}
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/>
                                                                <label class="form-check-label" for="married">Married</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="other_status" value="Other" <?php ob_start();
if ($_smarty_tpl->tpl_vars['employee_data']->value['marital_status'] == 'Other') {
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
 checked <?php ob_start();
}
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/>
                                                                <label class="form-check-label" for="other">Other</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Add") {?>
                                                <div class="row mb-3">
                                                    <div class="col password-box">
                                                        <label for="password" class="form-label">Password <span class="star_required">*</span></label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" id="password" name="password" placeholder="*******" />
                                                            <span class="input-group-text date-picker-addon">
                                                            <i class=" ti ti-eye password-icon cursor"  style=""></i>
                                                          </span>
                                                        </div>
                                                    </div>
                                                    <div class="col password-box">
                                                        <label for="confirm-password" class="form-label">Confirm Password <span class="star_required">*</span></label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="*******" />
                                                            <span class="input-group-text date-picker-addon">
                                                            <i class=" ti ti-eye password-icon cursor"  style=""></i>
                                                          </span>
                                                            <!-- <i class=" ti ti-eye password-icon cursor" id="passwordIconHide" style=""></i> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php }?>
                                                <div class="row mb-3">
                                                    <div class="col-6 col">
                                                        <label for="profile_image" class="form-label">Profile Image <span class="star_required">*</span></label>
                                                        <input type="file" class="form-control image_input" id="profile_image" name="profile_image" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['profile_image'];?>
" <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>style="display: none;"<?php }?> />
                                                        <label for="file" class="btn image-upload-block-box  mt-1" <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>style="display: none;"<?php }?>>
                                                            <i class="ti ti-upload"></i>
                                                            <span class="js-fileName">Upload a file</span>
                                                            <span tooltip="Valid extensions : gif, png, jpg, jpeg, jpe, bmp, ico.&#xa;Valid size : Less than (<) 5 MB.&#xa;" flow="right" class="tooltip-icon float-right"><i class="ti ti-info-square-rounded cursor"></i></span>
                                                          </label>
                                                        <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Update") {?>
                                                        <div class="input-group mb-1 update-file-block cursor" id="customFileInput">
                                                          <input type="text" name="profile_image_name" class="form-control cursor image_input"  aria-describedby="basic-addon1" >
                                                          <label for="file" class="btn image-upload-block-box  mt-1" >
                                                            <i class="ti ti-upload"></i>
                                                            <span class="js-fileName">Upload a file</span>
                                                            <span tooltip="Valid extensions : gif, png, jpg, jpeg, jpe, bmp, ico.&#xa;Valid size : Less than (<) 5 MB.&#xa;" flow="right" class="tooltip-icon float-right"><i class="ti ti-info-square-rounded cursor"></i></span>
                                                          </label>
                                                        </div>
                                                        <?php }?>
                                                        <div class="col-2 col update-imeg-file ps-0 mb-2"  <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Add") {?>style="display: none;"<?php }?>>
                                                        <div class="mt-2">

                                                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_data']->value['profile_image'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
" width="100">
                                                        </div>
                                                    </div>

                                                    
                                                    </div>
                                                    
                                                    
                                                </div>

                                            </div>
                                            <div <?php if ($_smarty_tpl->tpl_vars['role']->value == 'employee') {?> style="display: none"<?php }?>>
                                            <div class="row mb-3 title-block">
                                                <label class="h3">Work Details</label>
                                            </div>
                                            <div class="form-contain">
                                                <div class="row mb-3">
                                                    <div class="col-6" <?php if ($_smarty_tpl->tpl_vars['role']->value != 'arom') {?> style="display: none" <?php }?>>
                                                        <label for="country" class="form-label">Company <span class="star_required">*</span></label>
                                                        <select class="form-select form-control" name="company" id="company">
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
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="department" class="form-label">Department <span class="star_required">*</span></label>
                                                        <select class="form-select form-control" name="department" id="department">
                                                            <option value="">Select Department</option>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['department']->value, 'department_val');
$_smarty_tpl->tpl_vars['department_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department_val']->value) {
$_smarty_tpl->tpl_vars['department_val']->do_else = false;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['department_val']->value['department_id'] == $_smarty_tpl->tpl_vars['employee_data']->value['department']) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['department_val']->value['departmen_name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_code'];?>
]</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['department_val']->value['departmen_name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['department_val']->value['department_code'];?>
]</option>
                                                            <?php }?>
                                                            
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </select>
                                                        
                                                    </div>

                                                    <div class="col">
                                                        <label for="designation" class="form-label">Designation <span class="star_required">*</span></label>
                                                        <select class="form-select form-control" name="designation" id="designation">
                                                            <option value="">Select Designation</option>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['designation']->value, 'designation_val');
$_smarty_tpl->tpl_vars['designation_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['designation_val']->value) {
$_smarty_tpl->tpl_vars['designation_val']->do_else = false;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['designation_val']->value['id'] == $_smarty_tpl->tpl_vars['employee_data']->value['designation']) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['designation_val']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['designation_val']->value['designation_name'];?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['designation_val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['designation_val']->value['designation_name'];?>
</option>
                                                            <?php }?>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="row mb-3">

                                                	 <div class="col-6 col ">
                                                        <div>
                                                            <label for="employement_type" class="form-label">Employee Type <span class="star_required">*</span></label>
                                                        </div>
                                                        <select class="form-select form-control" name="employement_type" id="employement_type">

                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employement_type']->value, 'employement_type_val');
$_smarty_tpl->tpl_vars['employement_type_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employement_type_val']->value) {
$_smarty_tpl->tpl_vars['employement_type_val']->do_else = false;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['employement_type_val']->value['id'] == $_smarty_tpl->tpl_vars['employee_data']->value['role']) {?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['employement_type_val']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['employement_type_val']->value['val'];?>
</option>
                                                                <?php } else { ?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['employement_type_val']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['employement_type_val']->value['val'];?>
</option>
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </select>
                                                    </div>

                                                    <div class="col manager-block">
                                                        <label for="manager" class="form-label">Reporting Senior <span class="star_required">*</span></label>
                                                        <select class="form-select form-control" name="manager" id="manager">
                                                            <option value="">Select Reporting Senior</option>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manager']->value, 'manager_val');
$_smarty_tpl->tpl_vars['manager_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manager_val']->value) {
$_smarty_tpl->tpl_vars['manager_val']->do_else = false;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['manager_val']->value['employee_id'] == $_smarty_tpl->tpl_vars['employee_data']->value['reporting_manager']) {?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['manager_val']->value['employee_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['manager_val']->value['name'];?>
</option>
                                                                <?php } else { ?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['manager_val']->value['employee_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['manager_val']->value['name'];?>
</option>
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </select>
                                                    </div>
                                                    
                                                </div>

                                                <div class="row mb-3">
                                                	<div class="col employement_date">
                                                        <label for="dob" class="form-label">Joning Date <span class="star_required">*</span></label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="employement_date" name="employement_date" placeholder="Joning Date" value="<?php echo getDatePickerFormat($_smarty_tpl->tpl_vars['employee_data']->value['employment_date']);?>
" />

                                                            <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col ">
                                                        <div>
                                                            <label for="week_off" class="form-label">Week Off <span class="star_required">*</span></label>
                                                        </div>
                                                        <select class="form-select form-control" name="week_off" id="week_off">
                                                            <option value="Monday">Monday</option>
                                                            <option value="Tuesday">Tuesday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Thursday">Thursday</option>
                                                            <option value="Friday">Friday</option>
                                                            <option value="Saturday">Saturday</option>
                                                            <option value="Sunday">Sunday</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                	
                                                    <div class="col col-6 work_mobile_number">
                                                        <div class="form-group mb-1">
                                                            <label for="work_mobile_number" class="w-100 form-label">Work Mobile Number <span class="star_required">*</span></label>
                                                            <input type="text" class="form-control tel-input" id="work_mobile_number" name="work_mobile_number" placeholder="Work Mobile Number" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['work_mobile_number'];?>
"/>
                                                        </div>
                                                    </div>
                                                
                                                	<div class="col col-6 ">
                                                        <label for="work_email" class="form-label">Work Email <span class="star_required">*</span></label>
                                                        <input type="email" class="form-control" id="work_email" name="work_email" placeholder="Work Email" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['work_email'];?>
"/>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col overtime-allow-box">
                                                        <div class="form-group mb-0">
                                                            <label for="overtime_allow" class="form-label">Overtime Allowed <span class="star_required">*</span></label><br />
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input form-control" type="radio" name="overtime_allow" id="yes" value="Yes" <?php ob_start();
if ($_smarty_tpl->tpl_vars['employee_data']->value['over_time_allow'] == 'Yes') {
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
 checked <?php ob_start();
}
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
/>
                                                                <label class="form-check-label" for="yes">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input" type="radio" name="overtime_allow" id="no" value="No" <?php ob_start();
if ($_smarty_tpl->tpl_vars['employee_data']->value['over_time_allow'] == 'No') {
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
 checked <?php ob_start();
}
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
/>
                                                                <label class="form-check-label" for="no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-6 overtime_rate" <?php ob_start();
if ($_smarty_tpl->tpl_vars['employee_data']->value['over_time_allow'] == 'No') {
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
style="display: none;"<?php ob_start();
}
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
>
                                                        <label for="work_email" class="form-label">Overtime Rate (Per Hour) <span class="star_required">*</span></label>
                                                        <div class="input-group ">
                                                            <span class="input-group-text prefix-block"><i class="ti ti-currency-rupee"></i></span>
                                                            <input type="text" class="form-control w-auto number-formatter" id="overtime_rate_per_hour" name="overtime_rate_per_hour" placeholder="Overtime Rate" value="<?php echo getNumberFormate($_smarty_tpl->tpl_vars['employee_data']->value['overtime_rate_per_hour']);?>
"/>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="attachment-details step-second-form" style="display: none;">
                                            <div class="row mb-3 title-block">
                                                <label class="h3">Address</label>
                                            </div>

                                            <div class="form-contain">
                                                <div class="row mb-3">
                                                    <div class="col-6 col">
                                                        <label for="country" class="form-label">Country <span class="star_required">*</span></label>
                                                        <select class="form-select form-control" name="country" id="country">
                                                            <option value="">Select Country</option>

                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country']->value, 'countryname');
$_smarty_tpl->tpl_vars['countryname']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countryname']->value) {
$_smarty_tpl->tpl_vars['countryname']->do_else = false;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['countryname']->value['id'] == $_smarty_tpl->tpl_vars['employee_data']->value['country']) {?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['countryname']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['countryname']->value['country_name'];?>
</option>
                                                                <?php } else { ?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['countryname']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['countryname']->value['country_name'];?>
</option>
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </select>
                                                    </div>
                                                    <div class="col-6 col">
                                                        <label for="state" class="form-label">State <span class="star_required">*</span></label>
                                                        <select class="form-select form-control" name="state" id="state">
                                                            <option value="">Select State</option>

                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['state']->value, 'stateName');
$_smarty_tpl->tpl_vars['stateName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stateName']->value) {
$_smarty_tpl->tpl_vars['stateName']->do_else = false;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['stateName']->value['iStateId'] == $_smarty_tpl->tpl_vars['employee_data']->value['state']) {?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['stateName']->value['iStateId'];?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['stateName']->value['vState'];?>
</option>
                                                                <?php } else { ?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['stateName']->value['iStateId'];?>
"><?php echo $_smarty_tpl->tpl_vars['stateName']->value['vState'];?>
</option>
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-6">
                                                        <label for="city" class="form-label">City <span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['city'];?>
"/>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="address" class="form-label">Address <span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" 
                                                        value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['address'];?>
" />
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-6 col">
                                                        <label for="zipcode" class="form-label">Zip code <span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zip code"  value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['zipcode'];?>
"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3 title-block">
                                                <label class="h3">Additional Info</label>
                                            </div>

                                            <div class="form-contain">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="aadhar_number" class="form-label">Aadhar Number <span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="aadhar_number" name="aadhar_number" placeholder="Aadhar Number" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['aadhar_number'];?>
"/>
                                                    </div>
                                                    <div class="col">
                                                        <label for="pan_card_number" class="form-label">PAN Card Number <span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="pan_card_number" name="pan_card_number" placeholder="PAN Card Number" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['pan_card_number'];?>
"/>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="pf_number" class="form-label">PF Number </label>
                                                        <input type="text" class="form-control" id="pf_number" name="pf_number" placeholder="PF Number " value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['pf_number'];?>
"/>
                                                    </div>
                                                    <div class="col">
                                                        <label for="uan_number" class="form-label">UAN Number </label>
                                                        <input type="text" class="form-control" id="uan_number" name="uan_number" placeholder="UAN Number " value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['uan_number'];?>
"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3 title-block">
                                                <label class="h3">Education details</label>
                                            </div>

                                            <div class="form-contain">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="degree_name" class="form-label">Degree<span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="degree_name" name="degree_name" placeholder="Degree" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['education_degree'];?>
"/>
                                                    </div>
                                                    <div class="col">
                                                        <label for="education_field" class="form-label">Field <span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="education_field" name="education_field" placeholder="Field" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['education_feild'];?>
"/>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="college_name" class="form-label">College Name<span class="star_required">*</span></label>
                                                        <input type="text" class="form-control" id="college_name" name="college_name" placeholder="College Name" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['education_college'];?>
"/>
                                                    </div>
                                                    <div class="col">
                                                        <label for="pass_out_year" class="form-label">Pass Out Year <span class="star_required">*</span></label>
                                                        <input type="number" class="form-control" id="pass_out_year" name="pass_out_year" placeholder="Pass Out Year" value="<?php echo $_smarty_tpl->tpl_vars['employee_data']->value['education_pass_out_year'];?>
"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banck-details step-third-form" style="display: none;">
                                            <div class="row mb-4 title-block">
                                                <label class="h3">Bank Detail</label>
                                                <button type="button" class="btn btn-primary add-leave add-action" id="add-bank">
                                                    <i class="ti ti-plus"></i>
                                                    <span class="add-bank">Add Bank</span>
                                                </button>
                                            </div>
                                            <div class="banck-details-rows">
                                               <!--  <div class="form-contain border border-primary rounded-2 border border-2 p-3">
                                                    <div class="row action-box">
                                                        <div class="col-10"></div>

                                                        <div class="col-2">
                                                            <i class="ti ti-trash h2 pe-3 ps-2 float-right cursor delete-bank"></i>
                                                            <div class="float-right pt-1 pe-2">
                                                                <label class="h4">Default :</label><input class="form-check-input mt-1 ms-2" type="checkbox" aria-label="Checkbox for following text input" name="defaul_bank[0]" value="Yes" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="bank_name" class="form-label">Bank Name<span class="star_required">*</span></label>
                                                            <input type="text" class="form-control" id="bank_name_0" name="bank_name[]" placeholder="Bank Name" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="branch_address" class="form-label">Branch Address <span class="star_required">*</span></label>
                                                            <input type="text" class="form-control" id="branch_address_0" name="branch_address[]" placeholder="Branch Address" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="ifsc_code" class="form-label">IFSC Code <span class="star_required">*</span></label>
                                                            <input type="text" class="form-control" id="ifsc_code_0" name="ifsc_code[]" placeholder="IFSC Code" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="account_type" class="form-label">Account Type<span class="star_required">*</span></label>
                                                            <select class="form-select form-control" name="account_type[]" id="account_type_0">
                                                                <option value="">Select Account Type</option>
                                                                <option value="Saving">Saving</option>
                                                                <option value="Current">Current</option>
                                                                <option value="Domestic">Domestic</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="account_number" class="form-label">Account Number<span class="star_required">*</span></label>
                                                            <input type="text" class="form-control" id="account_number_0" name="account_number[]" placeholder="Account Number" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="account_holder_name" class="form-label">Account Holder Name <span class="star_required">*</span></label>
                                                            <input type="text" class="form-control" id="account_holder_name_0" name="account_holder_name[]" placeholder="Account Holder Name" />
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <?php $_smarty_tpl->_subTemplateRender('file:bank_add_templete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                            </div>
                                        </div>
                                        <div class="text-center step-first-btn mt-5">
                                            <button type="button" name="user_signup" class="btn btn-primary py-8 fs-4 rounded-2 me-3 next" data-target="step-second" data-current="step-first">Next</button>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
" name="user_signup" class="btn btn-outline-danger py-8 fs-4 rounded-2 discard" >Discard</a>
                                        </div>

                                        <div class="text-center step-second-btn mt-5" style="display: none;">
                                            <button type="button" name="user_signup" class="btn btn-outline-secondary py-8 fs-4 rounded-2 previous me-3" data-target="step-first" data-current="step-second">Back</button>
                                            <button type="button" name="user_signup" class="btn btn-primary py-8 fs-4 rounded-2 me-3 next" data-target="step-third" data-current="step-second" data-pre="step-first">Next</button>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
" name="user_signup" class="btn btn-outline-danger py-8 fs-4 rounded-2 discard" >Discard</a>
                                        </div>

                                        <div class="text-center step-third-btn mt-5" style="display: none;">
                                            <button type="button" name="user_signup" class="btn btn-outline-secondary py-8 fs-4 rounded-2 previous me-3" data-target="step-second" data-current="step-third">Back</button>
                                            <button type="button" data-current="step-third" name="user_signup" class="btn btn-primary py-8 fs-4 rounded-2  me-3 next">Submit</button>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
" name="user_signup" class="btn btn-outline-danger py-8 fs-4 rounded-2 discard" >Discard</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
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
 type="text/javascript" >
        var month_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['months']->value);
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
;
        var leave_dates = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['leave_dates']->value);
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
;
        var leave_range_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['leave_range_arr']->value);
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
;
        var date_range_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['date_range_arr']->value);
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
;
        var employee_week_off = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['employee_data']->value['employee_week_off']);
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
;
        var mode = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['mode']->value);
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
;
        var mobile_code = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['employee_data']->value['phone_code']);
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
;
        var mobile_number = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['employee_data']->value['mobile_number']);
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
;
        var secondary_mobile_code = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['employee_data']->value['secondary_mobile_code']);
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>
;
        var secondary_mobile_number = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['employee_data']->value['secondary_mobile_number']);
$_prefixVariable30 = ob_get_clean();
echo $_prefixVariable30;?>
;
        var work_mobile_code = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['employee_data']->value['work_mobile_code']);
$_prefixVariable31 = ob_get_clean();
echo $_prefixVariable31;?>
;
        var work_mobile_number = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['employee_data']->value['work_mobile_number']);
$_prefixVariable32 = ob_get_clean();
echo $_prefixVariable32;?>
;
        var profile_image = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['employee_data']->value['profile_image']);
$_prefixVariable33 = ob_get_clean();
echo $_prefixVariable33;?>
;
        var index= <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['index']->value);
$_prefixVariable34 = ob_get_clean();
echo $_prefixVariable34;?>
;
        var role= <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['role']->value);
$_prefixVariable35 = ob_get_clean();
echo $_prefixVariable35;?>
;
    <?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 class="iti-load-utils" async="" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/utils.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/employee_registration.js"><?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php }
}

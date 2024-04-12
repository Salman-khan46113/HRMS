<?php
/* Smarty version 4.3.2, created on 2024-04-12 21:12:22
  from '/var/www/html/extra_work/HRMS/application/views/templates/edit_aprover_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6619565e30c027_79964091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29574f891d4b2bf76cb0ff30c7bedf10dc435ec8' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/edit_aprover_template.tpl',
      1 => 1712936533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6619565e30c027_79964091 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content">
	<input type="hidden" name="edit_approve_id" id="edit_approve_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['employee_id'];?>
">
    <ul class="nav nav-tabs float-left" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Perosonal details</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Work Details</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Bank Details</button>
        </li>
    </ul>
    <ul class="nav nav-tabs justify-content-end updated-by-block" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><label>Updated By : <strong><?php echo $_smarty_tpl->tpl_vars['updated_by']->value;?>
</strong></label></button>
        </li>

    </ul>
    

     <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home">
                <div class="card mb-3 user-details-block">
                <input type="hidden" value="2" id="leave_request_id" />

                <div class="row g-0 m-3">
                    <div class="col-2">
                        <div class="image-block p-2"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['profile_image_name'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="" width="100" height="100" class="rounded-circle" /></div>
                    </div>
                    <div class="col-10 employee-detils">
                        <div class="row">
                            <div class="col-3 p-1">
                                <span class="employee-name employee-name-block"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['last_name'];?>
</span>
                                <span class="emp-grid-code" id="employee_code"><?php echo $_smarty_tpl->tpl_vars['data']->value['old_employe_data']['employee_data']['employee_code'];?>
</span>
                            </div>
                            <div class="col-3 p-1 location-block">
                                <span class="title-box">Email</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['email'];?>
</span>
                            </div>
                            <div class="col-3 p-1 designation-block">
                                <span class="title-box">Phone Number</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['phone_code'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['mobile_number'];?>
</span>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['new_employe_data']['secondary_number'] != '') {?>
                            <div class="col-3 p-1 department-block">
                                <span class="title-box">Secondary Mobile Number</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['secondary_number_code'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['secondary_number'];?>
</span>
                            </div>
                            <?php }?>
                            <div class="col-3 p-1 from-date-block">
                                <span class="title-box">Gender</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['gender'];?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">Marital Status</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['marital_status'];?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">Date Of Birth</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['dob'];?>
</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="card mb-3 user-details-block">

                <div class="row g-0 m-3">
                	<p class="lead fw-normal mb-2 ms-1 title-box-title">Address Information</p>
                    <div class="col-12 employee-detils">
                        <div class="row">
                            <div class="col-3 p-1">
                                <span class="title-box">Country</span>
                                <span class="val-box" ><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['country'];?>
</span>
                            </div>
                            <div class="col-3 p-1 location-block">
                                <span class="title-box">State</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['state'];?>
</span>
                            </div>
                            <div class="col-3 p-1 designation-block">
                                <span class="title-box">City</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['city'];?>
</span>
                            </div>
                            <div class="col-3 p-1 department-block">
                                <span class="title-box">Pincode</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['zipcode'];?>
</span>
                            </div>
                            <div class="col-3 p-1 from-date-block">
                                <span class="title-box">Address</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['address'];?>
</span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="card mb-3 user-details-block">
                <div class="row g-0 m-3">
                	<p class="lead fw-normal mb-2 ms-1 title-box-title">Work Information</p>
                    <div class="col-12 employee-detils">
                        <div class="row">
                            <div class="col-3 p-1">
                                <span class="title-box">Department</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['department'];?>
</span>
                            </div>
                            <div class="col-3 p-1 location-block">
                                <span class="title-box">Designation</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['designation'];?>
</span>
                            </div>
                            <div class="col-3 p-1 department-block">
                                <span class="title-box">Employee Type</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['employement_type'];?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">Reportiong Manager</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['manager'];?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">Joining Date</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['employement_date'];?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">Week Off</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['week_off'];?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">Overtime Allowed</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['overtime_allow'];?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">Work Mobile Numbe</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['work_mobile_number_code'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['work_mobile_number'];?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">Work Email</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['work_email'];?>
</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 user-details-block">
                <div class="row g-0 m-3">
                    <p class="lead fw-normal mb-2 ms-1 title-box-title">Additional Info</p>
                    <div class="col-12 employee-detils">
                        <div class="row">
                            <div class="col-3 p-1">
                                <span class="title-box">Aadhar Number</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['aadhar_number'];?>
</span>
                            </div>
                            <div class="col-3 p-1 location-block">
                                <span class="title-box">PAN Card Number</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['pan_card_number'];?>
</span>
                            </div>
                            <div class="col-3 p-1 department-block">
                                <span class="title-box">PF Number</span>
                                <span class="val-box"><?php echo display_no_character($_smarty_tpl->tpl_vars['data']->value['new_employe_data']['pf_number']);?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">UAN Number</span>
                                <span class="val-box"><?php echo display_no_character($_smarty_tpl->tpl_vars['data']->value['new_employe_data']['uan_number']);?>
</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 user-details-block">
                <div class="row g-0 m-3">
                    <p class="lead fw-normal mb-2 ms-1 title-box-title">Education details</p>
                    <div class="col-12 employee-detils">
                        <div class="row">
                            <div class="col-3 p-1">
                                <span class="title-box">Degree</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['degree_name'];?>
</span>
                            </div>
                            <div class="col-3 p-1 location-block">
                                <span class="title-box">Field</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['education_field'];?>
</span>
                            </div>
                            <div class="col-3 p-1 department-block">
                                <span class="title-box">College Name</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['college_name'];?>
</span>
                            </div>
                            <div class="col-3 p-1 to-date-block">
                                <span class="title-box">Pass Out Year</span>
                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['pass_out_year'];?>
</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">               
                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['new_employe_data']['bank_data'], 'bank_data_val');
$_smarty_tpl->tpl_vars['bank_data_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bank_data_val']->value) {
$_smarty_tpl->tpl_vars['bank_data_val']->do_else = false;
?>
                	<div class="card mb-3 user-details-block">
                	 <div class="row g-0 m-3 mb-3">

	                    <div class="col-12 employee-detils">
	                        <div class="row">
	                            <div class="col-3 p-1">
	                                <span class="title-box">Bank Name</span>
	                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['bank_name'];?>
</span>
	                            </div>
	                            <div class="col-3 p-1 location-block">
	                                <span class="title-box">Branch Address</span>
	                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['branch_address'];?>
</span>
	                            </div>
	                            <div class="col-3 p-1 designation-block">
	                                <span class="title-box">IFSC Code</span>
	                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['ifsc_code'];?>
</span>
	                            </div>
	                            <div class="col-3 p-1 department-block">
	                                <span class="title-box">Account Type</span>
	                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['account_type'];?>
</span>
	                            </div>
	                            <div class="col-3 p-1 from-date-block">
	                                <span class="title-box">Account No</span>
	                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['account_number'];?>
</span>
	                            </div>
	                            <div class="col-3 p-1 to-date-block">
	                                <span class="title-box">Account Holder Name</span>
	                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['account_holder_name'];?>
</span>
	                            </div>
	                            <div class="col-3 p-1 to-date-block">
	                                <span class="title-box">Default Bank</span>
	                                <span class="val-box"><?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['default_bank'];?>
</span>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	               </div>	
	                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php }
}

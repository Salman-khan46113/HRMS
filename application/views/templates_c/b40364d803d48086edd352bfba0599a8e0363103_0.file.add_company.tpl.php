<?php
/* Smarty version 4.3.2, created on 2024-05-13 23:18:22
  from '/var/www/html/extra_work/HRMS/application/views/templates/add_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66425266620036_57427553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b40364d803d48086edd352bfba0599a8e0363103' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/add_company.tpl',
      1 => 1714671973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:address.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66425266620036_57427553 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" />
<link rel="stylesheet" href="public/css/employee.css" />
<link rel="stylesheet" href="public/css/company_add_update.css" />
<link rel="stylesheet" href="public/css/steper.css" />
<div class="main-middle-container">
    <div class="sub-header att-sub-header">
        <div class="sub-header-left pull-left">
            <h3><?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Add') {?>Add Company<?php } else { ?>Update Company<?php }?></h3>
        </div>
        <div class="sub-header-right pull-right">
            <div class="timesheet-summary icon-box">
                <div class="timesheet-summary-lst">
                    <div class="dropdown grid-drop-down">
                        <a class="btn btn-secondary top-btn-row" href="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
" title="Back">
                            <i class="ti ti-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inner-container" style="position: static; zoom: 1;">
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
   
    <div
      class="position-relative overflow-hidden  min-vh-100 d-flex outer-div-box">
      <div class="d-flex w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-11 mb-4 mt-3">
            <div class="card mb-0">
              <div class="card-body">
                <div class="step-bar">
                    <ol id="progressbar" class="mb-5">
                        <li class=" active_step step-first-block step_top" data-step = '1'>
                            <div class="icon-div"><i class="ti ti-user"></i></div>
                        </li>
                        <li class="step-second-block step_top" data-step="2">
                            <div class="icon-div"><i class="ti ti-building-bank"></i></div>
                        </li>
                       
                    </ol>
                </div>
                <form action="javascript:void(0)" method="POST" id="company_form">
                    <input id="company_id" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_id'];?>
" type="hidden" name="company_id">
                    <input id="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" type="hidden" name="mode">
                    <input id="country_code" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['country_code'];?>
" type="hidden" name="country_code">
                  <div class="details-block step-1 step-form">
                        <div class="row mb-3 title-block">
                            <label class="h3">Personal Details</label>
                        </div>
                        <div class="form-contain">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="company_name" class="form-label">Company Name <span class="star_required">*</span></label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
">
                                </div>
                            
                                <div class="col">
                                    <label for="company_email" class="form-label">Email <span class="star_required">*</span></label>
                                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_email'];?>
"" class="form-control" id="company_email" name="company_email" placeholder="Email">
                                    
                                </div>


                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['mode']->value == "Add") {?>
                            <div class="row mb-3">
                              <div class="col">
                                  <label for="company_prefix" class="form-label">Prefix <span class="star_required">*</span></label>
                                  <input type="text" class="form-control" id="company_prefix" name="company_prefix" placeholder="Please enter Company Prefix" value="">
                              </div>
                          
                              <div class="col">
                                  <label for="attendance_pin" class="form-label">Attendence Pin <span class="star_required">*</span></label>
                                  <input type="text" value="" class="form-control" id="attendance_pin" name="attendance_pin" placeholder="Please enter Attendence Pin">
                                  
                              </div>


                          </div>
                            <?php }?>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="company_code" class="form-label">Company Code </label>
                                    <input type="text" value ="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_code'];?>
" class="form-control" id="company_code" name="company_code" style="text-transform: uppercase;">
                                </div>
                                <div class="col">
                                    <label for="company_logo" class="form-label">Company Logo<span class="star_required">*</span></label>
                                    <div class="file-input-wrapper">
                                        <input type="file" class="form-control" id="fileInput" onchange="updateFileName(this)" name="company_logo" style="display:none" value="">

                                        <div class="update-file-block cursor don1" id="fileInputName">
                                          <!-- <label class='input-group-text fileInputBox' for="fileInput" style="border-radius: 5px 0px 0px 5px !important;">Choose file</label>   -->
                                          <input type="text"  id="profile_image_name" class="form-control cursor  ignoreThisClass image_input" value="<?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_logo'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_logo'];
} else { ?>No file choosen<?php }?>"  style="border-radius: 0px 5px 5px 0px !important;">
                                          <!-- <span class="don">
                                            <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_logo'] != '') {?>
                                            <?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_logo'];?>

                                            <?php } else { ?>
                                             No file choosen
                                            <?php }?>
                                          </span> -->
                                           <label for="file" class="btn image-upload-block-box" >
                                                            <i class="ti ti-upload"></i>
                                                            <span class="js-fileName">Upload a file</span>
                                                            <span tooltip="Valid extensions : gif, png, jpg, jpeg, jpe, bmp, ico.&#xa;Valid size : Less than (<) 5 MB.&#xa;" flow="left" class="tooltip-icon float-right"><i class="ti ti-info-square-rounded cursor"></i></span>
                                                          </label>
                                        </div>
                                        <div id="imageContainer">
                                          <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update' && $_smarty_tpl->tpl_vars['company_data']->value['company_logo'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['log_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_logo'];?>
"><?php }?>
                                        </div>
                                      </div>

                                    <!-- <label for="company_logo" class="form-label">Company Logo</label>
                                    <input type="file" class="form-control" id="company_logo" name="company_logo" placeholder="*******"> -->
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col">

                                    <label for="contact_person" class="form-label">Contact Person <span class="star_required">*</span></label>
                                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['contact_person'];?>
" id="contact_person" name="contact_person" placeholder=" Please enter Contact Person">

                                </div>
                                <div class="col mobile_number">
                                    <div class="form-group mb-1">
                                        <label for="contact_number" class="w-100 form-label"> Contact Number <span class="star_required">*</span></label>
                                        <input type="text" class="form-control tel-input" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['contact_number'];?>
" id="contact_number" name="contact_number" placeholder=" Please enter Contact Number">
                                    </div>

                                </div>

                            </div>
                            
                            
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="country" class="form-label">Country <span class="star_required">*</span></label>
                                    <select class="form-select form-control custom_error" name="country" id="country" >
                                    <option value="">Select Country</option>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country']->value, 'countryname');
$_smarty_tpl->tpl_vars['countryname']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countryname']->value) {
$_smarty_tpl->tpl_vars['countryname']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['countryname']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['countryname']->value['id'] == $_smarty_tpl->tpl_vars['company_data']->value['country']) {?> selected <?php } elseif ($_smarty_tpl->tpl_vars['countryname']->value['country_code'] == $_smarty_tpl->tpl_vars['default_company']->value && $_smarty_tpl->tpl_vars['mode']->value == 'Add') {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['countryname']->value['country_name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </select>
                                    
                                </div>
                                <div class="col">
                                    <label for="state" class="form-label">State <span class="star_required">*</span></label>
                                    <select class="form-select form-control custom_error" name="state" id="state">
                                    <option value="">Select State</option>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['state']->value, 'stateName');
$_smarty_tpl->tpl_vars['stateName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stateName']->value) {
$_smarty_tpl->tpl_vars['stateName']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['stateName']->value['iStateId'];?>
" <?php if ($_smarty_tpl->tpl_vars['stateName']->value['iStateId'] == $_smarty_tpl->tpl_vars['company_data']->value['state']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['stateName']->value['vState'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </select>
                                    
                                </div>


                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="city" class="form-label">City </label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Please enter City" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['city'];?>
">
                                </div>
                                <div class="col">
                                    <label for="address" class="form-label">Address <span class="star_required">*</span></label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Please enter Address" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_address'];?>
">
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="zipcode" class="form-label">Zipcode <span class="star_required">*</span></label>
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Please enter Zipcode" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['zip_code'];?>
">
                                </div>
                                <div class="col">
                                    <label for="website" class="form-label">Website </label>
                                    <input type="text" class="form-control" id="website" name="website" placeholder="Please enter Website" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['website'];?>
">
                                    
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="gst_number" class="form-label">GST Number <span class="star_required">*</span></label>
                                    <input type="text" class="form-control" id="gst_number" name="gst_number" placeholder="Please enter GST Number" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['gst_number'];?>
">
                                </div>
                                <div class="col">
                                    <label for="founding_date" class="form-label">Date of Founding<span class="star_required">*</span></label>
                                    
                                    <div class="input-group">
                                    <input type="text" class="form-control custom_error" id="founding_date" name="founding_date" placeholder="Select date of birth" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['date_founded'];?>
">
                                    <span class="input-group-text date-picker-addon"><i class="las la-calendar-alt"></i></span>
                                    
                                    </div>
                                    
                                    <!-- <label id="founding_date-err" class="error" for="founding_date"></label> -->
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="tan_number" class="form-label">TAN Number </label>
                                    <input type="text" class="form-control" id="tan_number" name="tan_number" placeholder="Please enter TAN Nuber" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['tan_number'];?>
">
                                </div>
                                <div class="col">
                                    <label for="pan_number" class="form-label">PAN Number <span class="star_required">*</span></label>
                                    <input type="text" class="form-control" id="pan_number" name="pan_number" placeholder="Please enter Pan Number" value="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['pan_number'];?>
"> 
                                    
                                </div>

                            </div>
                            <div class="row mb-3">
                                
                                <div class="col-6">
                                    <label for="description" class="form-label">Description </label>
                                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Plese enter discription" value=""><?php echo $_smarty_tpl->tpl_vars['company_data']->value['description'];?>
 </textarea>
                                </div>
                                

                            </div>
                        </div>
                        </div>
                        <div class="address-block step-2 step-form hide" >
                           <div class="row mb-4 title-block">
                                                    <label class="h3">Bank Detail</label>
                                                    <button type="button" name="add_bank" class="btn btn-primary w-45 add-action add_bank"><i class="ti ti-plus"></i><span>Add Banks</span></button>
                                                </div>
                           
                           
                            <?php $_smarty_tpl->_subTemplateRender('file:address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                         </div>

              
                      <div class="button-block text-center mt-4" >
                        <button type="button" name="next" class="btn btn-primary w-45 py-8 fs-4 mb-4 rounded-2 next me-3" data-current="">Next</button>
                        <button type="button" name="back" class="btn btn-outline-secondary w-45 py-8 fs-4 mb-4 rounded-2 back hide me-3">Back</button>
                        <button type="button" id="submit_button" name="submit" class="btn btn-primary w-45 py-8 fs-4 mb-4 rounded-2 submit hide me-3">Submit</button>
                        <a href="company.html"><button type="button" name="discard" class="btn btn-outline-danger  w-45 py-8 fs-4 mb-4 rounded-2 discard">Discard</button></aa>
                      </div>
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
<!-- extra for footer -->
        </div>
    </div>
  </div>
    </div>
     <?php echo '<script'; ?>
 type="text/javascript" >
        var bank_data = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['bank_data']->value);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
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
 src="public/js/company.js"><?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

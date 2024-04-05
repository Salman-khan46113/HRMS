<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Pragma" content="no-cache">

  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="public/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="public/assets/css/styles.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/font-awesome-line-awesome/css/all.min.css"
  integrity="sha512-dC0G5HMA6hLr/E1TM623RN6qK+sL8sz5vB+Uc68J7cBon68bMfKcvbkg6OqlfGHo1nMmcCxO5AinnRTDhWbWsA=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
  />
  <link rel="stylesheet" href="public/css/plugin/tabler_css/tabler_icons.css" />
  <!--  tabler css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
  <link rel="stylesheet" href="public/css/employee.css" />
  <!-- date picker -->
  <link rel="stylesheet" type="text/css" href="public/css/plugin/date_picker.css">


   <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <!-- toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/custom_toaster.css" />
    <!-- steper -->
    <link rel="stylesheet" href="public/css/steper.css" />
    <!-- loader  -->
    <link rel="stylesheet" href="public/css/plugin/loader.css" />
 <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

 <style>
    .file-input-wrapper {
    /* position: relative;
    overflow: hidden;
    display: inline-block; */
    display: inline;
    width: 100%;
    padding: 8px 16px;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #5A6A85;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 7px;
    
    -webkit-transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out


  }

  .file-input-wrapper input[type=file] {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
  }

  .file-input-wrapper .chose-file {
    display: inline-block;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f5f5f5;
    color: #444;
    cursor: pointer;
    white-space: nowrap;
  }

  .file-input-wrapper .file-input-name label {
    cursor: pointer;
  }
.don {
  border: 1px solid #ccc;
    padding: 6px 12px;
    font-size: 16px;
    border-radius: 4px;
    display: inline-block;
    /* font-weight: lighter; */
    color: #666666;
    width: 86%;



}
#imageContainer img{
  width: 12%;

}
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    counter-reset: step;
    margin: auto;
    width: 50%;
    position: relative;
    left: 15%;
}

@media only screen and (max-width: 600px) {
    .don {
      width: auto;
      display: block;
      margin-top: 10px;
    }
  }
  .form-check-input {
    --bs-form-check-bg: transparent;
    width: 1.388em;
    height: 1.388em;
}
.next, .back, .discard,.submit {
    width: 10%;
}

.update-file-block label{
  /* width: 14% !important; */
  cursor: pointer;
  border-radius: 5px 0px 0px 5px !important;
  background: #f3eaf5 !important;
}

.update-file-block input{
  border-radius: 5px 0px 0px 5px !important;
   pointer-events: none;
       height: 39px;
}
.update-file-block label{
border-radius: 5px 0px 0px 5px !important;
}

.cursor {
  cursor: pointer;
}
.update-imeg-file img{
        width: 50%;
    height: 72px;
}
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
   
    <div
      class="position-relative overflow-hidden  min-vh-100 d-flex outer-div-box">
      <div class="d-flex w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-11 mt-4">
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
                    <input id="company_id" value="{$company_data['company_id']}" type="hidden" name="company_id">
                    <input id="mode" value="{$mode}" type="hidden" name="mode">
                    <input id="country_code" value="{$company_data['country_code']}" type="hidden" name="country_code">
                  <div class="details-block step-1 step-form">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="company_name" class="form-label">Company Name <span class="star_required">*</span></label>
                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" value="{$company_data['company_name']}">
                            </div>
                        
                            <div class="col">
                                <label for="company_email" class="form-label">Email <span class="star_required">*</span></label>
                                <input type="text" value="{$company_data['company_email']}"" class="form-control" id="company_email" name="company_email" placeholder="Email">
                                
                            </div>


                        </div>

                        {if $mode eq "Add"}
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
                        {/if}
                        <div class="row mb-3">
                            <div class="col">
                                <label for="company_code" class="form-label">Company Code </label>
                                <input type="text" value ="{$company_data['company_code']}" class="form-control" id="company_code" name="company_code" style="text-transform: uppercase;">
                            </div>
                            <div class="col">
                                <label for="company_logo" class="form-label">Company Logo<span class="star_required">*</span></label>
                                <div class="file-input-wrapper">
                                    <input type="file" class="form-control" id="fileInput" onchange="updateFileName(this)" name="company_logo" style="display:none" value="">

                                    <div class="input-group  update-file-block cursor don1" id="fileInputName">
                                      <label class='input-group-text fileInputBox' for="fileInput" style="border-radius: 5px 0px 0px 5px !important;">Choose file</label>
                                      <input type="text"  id="profile_image_name" class="form-control cursor  ignoreThisClass" value="{if $company_data['company_logo'] neq ''} {$company_data['company_logo']}{else}No file choosen{/if}"  style="border-radius: 0px 5px 5px 0px !important;">
                                      <!-- <span class="don">
                                        {if $company_data['company_logo'] neq ''}
                                        {$company_data['company_logo']}
                                        {else}
                                         No file choosen
                                        {/if}
                                      </span> -->
                                    </div>
                                    <div id="imageContainer">
                                      {if $mode eq 'Update' && $company_data['company_logo'] neq ''}<img src="{$company_data['log_url']}/{$company_data['company_logo']}">{/if}
                                    </div>
                                  </div>

                                <!-- <label for="company_logo" class="form-label">Company Logo</label>
                                <input type="file" class="form-control" id="company_logo" name="company_logo" placeholder="*******"> -->
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col">

                                <label for="contact_person" class="form-label">Contact Person <span class="star_required">*</span></label>
                                <input type="text" class="form-control" value="{$company_data['contact_person']}" id="contact_person" name="contact_person" placeholder=" Please enter Contact Person">

                            </div>
                            <div class="col mobile_number">
                                <div class="form-group mb-1">
                                    <label for="contact_number" class="w-100 form-label"> Contact Number <span class="star_required">*</span></label>
                                    <input type="text" class="form-control tel-input" value="{$company_data['contact_number']}" id="contact_number" name="contact_number" placeholder=" Please enter Contact Number">
                                </div>

                            </div>

                        </div>
                        
                        
                        <div class="row mb-3">
                            <div class="col">
                                <label for="country" class="form-label">Country <span class="star_required">*</span></label>
                                <select class="form-select form-control custom_error" name="country" id="country" >
                                <option value="">Select Country</option>

                                {foreach from=$country item=countryname}
                                <option value="{$countryname.id}" {if $countryname.id eq $company_data['country'] } selected {/if} >{$countryname.country_name}</option>
                                {/foreach}

                                </select>
                                <label id="country-err" class="error" for="country"></label>
                            </div>
                            <div class="col">
                                <label for="state" class="form-label">State <span class="star_required">*</span></label>
                                <select class="form-select form-control custom_error" name="state" id="state">
                                <option value="">Select State</option>

                                {foreach from=$state item=stateName}
                                <option value="{$stateName.iStateId}" {if $stateName.iStateId eq $company_data['state'] } selected {/if}>{$stateName.vState}</option>
                                {/foreach}

                                </select>
                                <label id="state-err" class="error" for="state"></label>
                            </div>


                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="city" class="form-label">City </label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Please enter City" value="{$company_data['city']}">
                            </div>
                            <div class="col">
                                <label for="address" class="form-label">Address <span class="star_required">*</span></label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Please enter Address" value="{$company_data['company_address']}">
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="zipcode" class="form-label">Zipcode <span class="star_required">*</span></label>
                                <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Please enter Zipcode" value="{$company_data['zip_code']}">
                            </div>
                            <div class="col">
                                <label for="website" class="form-label">Website </label>
                                <input type="text" class="form-control" id="website" name="website" placeholder="Please enter Website" value="{$company_data['website']}">
                                
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="gst_number" class="form-label">GST Number <span class="star_required">*</span></label>
                                <input type="text" class="form-control" id="gst_number" name="gst_number" placeholder="Please enter GST Number" value="{$company_data['gst_number']}">
                            </div>
                            <div class="col">
                                <label for="founding_date" class="form-label">Date of Founding<span class="star_required">*</span></label>
                                
                                <div class="input-group">
                                <input type="text" class="form-control custom_error" id="founding_date" name="founding_date" placeholder="Select date of birth" value="{$company_data['date_founded']}">
                                <span class="input-group-text"><i class="las la-calendar-alt"></i></span>
                                
                                </div>
                                
                                <label id="founding_date-err" class="error" for="founding_date"></label>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="tan_number" class="form-label">TAN Number </label>
                                <input type="text" class="form-control" id="tan_number" name="tan_number" placeholder="Please enter TAN Nuber" value="{$company_data['tan_number']}">
                            </div>
                            <div class="col">
                                <label for="pan_number" class="form-label">PAN Number <span class="star_required">*</span></label>
                                <input type="text" class="form-control" id="pan_number" name="pan_number" placeholder="Please enter Pan Number" value="{$company_data['pan_number']}"> 
                                
                            </div>

                        </div>
                        <div class="row mb-3">
                            
                            <div class="col">
                                <label for="description" class="form-label">Description </label>
                                <textarea type="text" class="form-control" id="description" name="description" placeholder="Plese enter discription" value="{$company_data['description']}"> </textarea>
                            </div>
                            

                        </div>
                    </div>
                    <div class="address-block step-2 step-form hide" >
                       <div class="row mb-4 title-block">
                                                <label class="h3">Bank Detail</label>
                                                <button type="button" name="add_bank" class="btn btn-primary w-45 py-8 fs-4 rounded-2 add_bank"><i class="ti ti-plus"></i><span>Add Banks</span></button>
                                            </div>
                       
                       
                        {include file='address.tpl'}
            </div>

          
                  <div class="button-block text-center" >
                    <button type="button" name="next" class="btn btn-primary w-45 py-8 fs-4 mb-4 rounded-2 next me-3" data-current="">Next</button>
                    <button type="button" name="back" class="btn btn-outline-secondary w-45 py-8 fs-4 mb-4 rounded-2 back hide me-3">Back</button>
                    <button type="button" id="submit_button" name="submit" class="btn btn-primary w-45 py-8 fs-4 mb-4 rounded-2 submit hide me-3">Submit</button>
                    <a href="company.html"><button type="button" name="discard" class="btn btn-outline-danger  w-45 py-8 fs-4 mb-4 rounded-2 discard">Discard</button></aa>
                  </div>
                </form>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="public/js/plugin/loader.js"></script>
  <script src="public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <!-- date picker -->
   <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
  <script class="iti-load-utils" async="" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/utils.js"></script>
  <!-- slect2  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
 <script src="public/js/custom_toaster.js"></script>
  <script src="public/js/company.js"></script>

</body>

</html>

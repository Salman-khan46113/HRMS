$(document).ready(function(){
    company_address.init();
    
})


const company_address = {
    init:function(){
        let that = this;
        that.initializePlugin();
        $('.next').off('click');
        $('.next').on('click',function(){
            let count = that.customValidation('.step-1');
            if(count > 0){
                return 0;
            }
            $('.step-form').removeClass('hide');
            $('.step-1').addClass('hide');
            $('.back').removeClass('hide');
            $('.submit').removeClass('hide');
            $(this).addClass('hide');
            that.stepHideShowValidation('next');
            
        })
    
        $('.back').off('click');
        $('.back').on('click',function(){
            $('.step-form').removeClass('hide');
            $('.step-2').addClass('hide');
            $('.next').removeClass('hide');
            $('.submit').addClass('hide');
            $(this).addClass('hide');
            that.stepHideShowValidation('back');
            
        })

        $('.add_bank').off('click');
        $('.add_bank').on('click',function(){
            let banks_len = $('.address-sub-block').length;
            let index = parseInt(banks_len)+1;
            let params_obj = {'index':index };
            $('.remove-address').show();
            $.ajax({
                url: 'company/getAddress',
                method: 'POST',
                data:params_obj,
                success: function(data) {
                  if(typeof data == 'undefined' || data == null){
                    return 0;
                  }
                  let result  = JSON.parse(data);
                  $('.address-block').append(result['html']);
                  $('#acc_type_'+index).select2()
                  that.addRules(index);
                },
                error: function(error) {
                  console.error("Error:", error);
                }
              });
    
        })
        $(document).off('click')
        $(document).on('click','.remove-address',function(){
            let ele = $(this);
            loader()
            Swal.fire({
                title: "Delete Address",
                text: "Are you sure you want to delete this address?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                customClass: {
                    confirmButton: "btn btn-primary me-1",
                    cancelButton: "btn btn-label-secondary",
                },
                buttonsStyling: false,
            }).then(function (result) {
                if (result.value) {
                    if($('.address-sub-block').length > 1){
                        ele.parents('.address-sub-block').remove();
                        hide_loader();
                        if($('.address-sub-block').length == 1){
                            $('.remove-address').hide();
                        }else{
                            $('.remove-address').show();
                        }
                    }
                }else{
                    hide_loader();
                }
            });

            
            
        })
        $('#contact_number').on('countrychange', function (e) {
            $(this).val('');
            var selectedCountry = $(this).intlTelInput('getSelectedCountryData');
            var dialCode = selectedCountry.dialCode;
            var maskNumber = intlTelInputUtils.getExampleNumber(selectedCountry.iso2, 0, 0);
            console.log("placeholder > " + maskNumber);
            maskNumber = intlTelInputUtils.formatNumber(maskNumber, selectedCountry.iso2, 2);
            console.log("placeholder > " + maskNumber);
            maskNumber = maskNumber.replace('+' + dialCode + ' ', '');
            console.log("placeholder > " + maskNumber);
            mask = maskNumber.replace(/[0-9+]/ig, '0');
        });
        $.validator.addMethod("intlTelNumber", function(value, element) {
            console.log($('#mobile_number').intlTelInput("isValidNumber"))
        return this.optional(element) || $('#mobile_number').intlTelInput("isValidNumber");
         }, "Please enter a valid phone number");
        
         $('#submit_button').on('click',function(e){
            let count = that.customValidation('.step-2');
            if (count < 1){
                $('#company_form').submit();
            }
            
         })

         $(document).off('change','.default-check');
         $(document).on('change','.default-check',function(){
            if($(this).is(":checked")){
                let id = $(this).attr('id');
                $(`.default-check:not(#${id})`).prop('checked',false);

            }

         })

         $(document).off('click','.update-file-block');
         $(document).on('click','.update-file-block',function(){
            // $("#fileInput").trigger("click");
         })



        //  if($('#mode') == 'Update'){
        //     let img_url = 
        //  }


    },
    customValidation:function(element){
        let count = 0;
            $(`${element}`+' .form-control:not(#profile_image_name)').each(function(e){
                let ele = $(this).attr('id');
                
                if(!$('#'+ele).valid()){
                    count += 1;
                }
            })
            return count;
    },
    addRules:function(index){
        
        $('#bank_name_'+index).rules('add', {
            required: true,
            messages: {
                required: "Please Enter Bank Name"
            }
        });
        $('#bank_address_'+index).rules('add', {
            required: true,
            messages: {
                required: "Please enter Bank Address."
            }
        });
        $('#ifsc_code_'+index).rules('add', {
            required: true,
            minlength: 3,
            messages: {
                required: "Please enter IFSC Code"
            }
        });
        $('#acc_type_'+index).rules('add', {
            required: true,
            messages: {
                required: "Please select Account Type",
                
            }
        });
        $('#acc_numner_'+index).rules('add', {
            required: true,
            messages: {
                required: "Please enter Account Number",
                
            }
        });
        $('#acc_holder_'+index).rules('add', {
            required: true,
           
            messages: {
                required: "Please enter Account Holder",
              
            }
        });


    },
    stepHideShowValidation:function(type){
        let index = $('.step_top.active_step').attr('data-step');
        if(type == 'next'){
            index = parseInt(index) +1;
            $(`.step_top[data-step = "${index}"]`).addClass('active_step');
        }
        else{
            $(`.step_top[data-step = "${index}"]`).removeClass('active_step');
            index = parseInt(index) -1;
        }
        $('.step_top').each(function(){
            let cur_index = $(this).attr('data-step');
            if(cur_index < index){
                $(this).removeClass('active_step');
                $(this).addClass('active');
                // $(`.step_top[data-step="${index}"]`).addClass('active_step');
            }
            else if(cur_index == index){
                $(this).addClass('active_step');
            }
            else{
                
                $(this).removeClass('active');
               
            }
        })
    },
    initializePlugin:function(){
        let that = this;
        $('#founding_date').datepicker({
            changeYear: true,
            changeMonth: true
        });
        $('#state').select2();
        $('#country').select2();
        that.validation();
        that.telInput();
        $('#acc_type_0').select2()
        that.addRules(0);
        
    },
    telInput:function(){
        $("#contact_number").intlTelInput({
            geoIpLookup: function (callback) {
                $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            initialCountry: "IN",
            separateDialCode: true
        });
        if($('#mode').val() == 'Update'){
            let country_code = $('#country_code').val();
            $("#contact_number").intlTelInput("setCountry", country_code);
        }
    },
    addMethod:function(){
        $.validator.addMethod("regex", function(value, element, regexpr) {
            return regexpr.test(value);
        }, "Please check your input.");
    },
    validation:function(){
        let that = this
        that.addMethod();
        $('#company_form').validate({
            rules: {
                
                company_name: {
                    required: true
                },
                company_email: {
                    required: true,
                    email: true
                },
                contact_person: {
                    required: true
                },
                contact_number: {
                    required: true,
                    intlTelNumber:true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
               
                address:{
                    required: true
                },
                zipcode:{
                    required: true
                },
                gst_number: {
                    required: true
                },
                founding_date:{
                    required:true
                },
                description:{
                    required:true
                },
                pan_number:{
                    required:true,
                    regex: /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/
                },
                attendance_pin:{
                    required:true,
                    minlength:6,
                    maxlength:6
                },
                company_prefix:{
                    required:true
                },
                company_logo:{
                    required:{
                        depends: function (element) {
                            var valid = $("#profile_image_name").val() == "No file choosen" ? true : false;
                            return valid;
                        },
                    }
                }
                
            },
            messages: {
                
                company_name: {
                    required: "Please enter company name"
                },
                contact_person: {
                    required: "Please enter contact name"
                },
                company_logo:{
                    required: "Please select company logo",
                },
                company_email: {
                    required: "Please enter a valid email address",
                    email: "Please enter a valid email address"
                },
                contact_number: {
                    required: 'Please Enter Contact Number'
                },
                country: {
                    required: "Please select Country"
                },
                state: {
                    required: "Please select State"
                },
               
                address:{
                    required: "Please enter Address"
                },
                zipcode:{
                    required: "Please enter Zipcode"
                },
                gst_number: {
                    required: "Please enter GST Number"
                },
                founding_date:{
                    required:"Please select Founding Date"
                },
                description:{
                    required:"Please enter discription"
                },
                pan_number:{
                    required:"Please enter Pan Number",
                    regex: 'Please enter a valid PAN number'
                },
                attendance_pin:{
                    required:"Please enter Attendence Pin"
                },
                company_prefix:{
                    required:"Please enter Company Prefix"
                },
                
            },
            ignore: ".ignoreThisClass",
            errorPlacement: function (error, element) {
                let id = $(element).attr('id');
                if(id == 'contact_number'){
                  $(".mobile_number .form-group").after(error);
                }
                else if(id == 'fileInput'){
                    $(".don1").after(error);
                }
                else{
                  error.insertAfter(element);
                }
              },
            submitHandler: function(form) {
                const file = fileInput.files[0];
                if (file && file.type.startsWith('video/')) {
                    toaster("fails",'File type does not support');
                    return 0;
                  } 
                var formData = new FormData(form);
                var countryData = $("#contact_number").intlTelInput('getSelectedCountryData');
                var countryCode = countryData.dialCode;
                let mode = $('#company_id').val() == '' ? 'Add' : 'Update';
                formData.append('phone_code', "+"+countryCode);
                formData.append('mode', mode);
                if($('.default-check:checked').length == 0){
                    toaster("fails",'Please Select default address');
                    return 0;
                };
                loader()
                $.ajax({
                  type: "POST",
                  url: "company/addAction",
                  data: formData,
                  cache: false,
                  processData: false,
                  contentType: false,
                  success: function (response) {
                    var responseObject = JSON.parse(response);
                    var msg = responseObject.message;
                    var success = responseObject.success;
                    setTimeout(function(){
                      hide_loader();
                      if (parseInt(success) == 1) {
                        toastr.success(msg);
                        toaster("success",msg);
                        setTimeout(function () {
                          window.location.href = "company.html";
                        }, 2000);
                      } else {
                        // toastr.error(msg);
                        toaster("fails",msg);
                      }
                     },1000)
                  },
                })
            }
        });    
    }
}

function updateFileName(input) {
    let fileName = input.files[0].name;
    const file = input.files[0];

    if (file) {
        $("#profile_image_name").val(file['name'])
        const reader = new FileReader();
        reader.onload = function() {
        // Create an image element
        const img = $('<img>').attr('src', reader.result);

        
        // Append the image to a container or replace an existing one
        $('#imageContainer').html(img);
        }
        reader.readAsDataURL(file);
    } else {
        $("#profile_image_name").val('No file choosen')
        // Handle the case when no file is selected
    }
        $('.don').text(fileName);

  }
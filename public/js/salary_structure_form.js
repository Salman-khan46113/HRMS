$(document).ready(function(){

    salary_structure.init();
    
})


const salary_structure = {
    init:function(){
        let that = this;
        that.initializePlugin();
        that.validation();
        $("#company_id").on("change",function(){
            var company_id = $("#company_id").val();
            $.ajax({
                type: "POST",
                url: "salary/salary_structure_component_row",
                data: {"company_id":company_id},
                success: function (response) {
                    var responseObject = JSON.parse(response);
                    $("#component-table tbody").html(responseObject.html);
                    var department = responseObject.departments;
                    var option_arr = '<option value="">Select Department</option>';
                    for (var i = 0; i < department.length; i++) {
                        option_arr += "<option value='" + department[i]["department_id"] + "'>" + department[i]["departmen_name"] + "("+department[i]["department_code"]+")</option>";
                    }
                    $("#department_id").html(option_arr).trigger("change");
                    // that.addRules(index);
                    // that.initiatePlugin();
                },
                error: function (error) {
                    // console.error("Error:", error);
                },
            });
        })
        $("#department_id").on("change",function(){
            var department_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "salary/get_designation",
                data: {"department_id":department_id},
                success: function (response) {
                    var responseObject = JSON.parse(response);
                    console.log(responseObject)
                    var designation = responseObject.designation;
                    var option_arr = '<option value="">Select Designation</option>';
                    for (var i = 0; i < designation.length; i++) {
                        option_arr += "<option value='" + designation[i]["id"] + "'>" + designation[i]["designation_name"] + "("+designation[i]["grads"]+")</option>";
                    }
                    $("#designation_id").html(option_arr).trigger("change");
                    // that.addRules(index);
                    // that.initiatePlugin();
                },
                error: function (error) {
                    // console.error("Error:", error);
                },
            });

        })
        $(".number_box").on("keyup",function(){
            var value = removeFormatterNumber($(this).val());
            var checked = $(this).parents(".component_row").find(".is_compulsory").is(':checked')
            if(value > 0){
                $(this).removeClass("error");
            }else{
                if(checked){
                    $(this).addClass("error");
                }else{
                    $(this).removeClass("error");
                }   
            }
        });
        $(".is_compulsory").on("change",function(){
            var value = $(this).is(':checked');
            if(value){
                $(this).val("Yes");
            }else{
                 $(this).val("No");
            }
        });

        // $(document).on("keypress", ".number_box,#ctc_value", function (e) {
        //     if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
        // });

    },
    initializePlugin: function(){
    	$("#company_id").select2({
	        placeholder: "Select Company",
	        allowClear: false,
	        multiple: false,
	    });
	    $("#department_id").select2({
	        allowClear: true,
	        multiple: false,
	    });
	    $("#designation_id").select2({
	        allowClear: true,
	        multiple: false,
	    });

        $(".component_name").chosen();

    },    
    
    validation:function(){
        $("#salary_structure_form").validate({
            rules: {
                company_id: {
                    required: true,
                },
                department_id:{
                    required: true,
                },
                designation_id: {
                    required: true
                },
                ctc_value: {
                    required: true,
                    min:  {
                        depends: function (element) {
                            var valid = removeFormatterNumber($("#ctc_value").val()) == 0 ? true : false;
                            return valid;
                        },
                    },

                },
                
            },
            messages: {
                company_id: {
                    required: "Please select company.",
                },
                department_id:{
                    required: "Please select department."
                },
                designation_id: {
                    required: "Please select designation."
                },
                ctc_value: {
                    required: "Please enter ctc.",
                    min: "CTC value should be greater than 0."
                },
                
                
            },
            errorPlacement: function (error, element) {
                if (element[0]["localName"] == "select") {
                    var parents = $(element).parent(".select-box");
                    $(parents).find(".select2-container").after(error);
                } else if (element[0]["id"] == "start_date" || element[0]["id"] == "end_date") {
                    var parents = $(element).parent(".input-group").after(error);
                } else {
                    error.insertAfter(element);
                }
            },
            ignore: ":hidden:not(select)",
            submitHandler: function (form) {
                var flag = 0;
                $("#component-table tbody tr").each(function(){
                   
                    var value  = removeFormatterNumber($(this).find(".number_box").val());
                    var checked  = $(this).find(".is_compulsory").is(':checked');
                     console.log(value,checked)
                    if((value == '' || value == undefined || value == null || value == 0) && checked){
                        flag = 1;
                        $(this).find(".number_box").addClass("error");
                    }
                });
                var salary_component =  $("#component-table tbody tr.component_row");
                if(flag == 0 && salary_component.length > 0){
                    var total_price = 0;
                    var total_minus_price = 0;
                    var current_ctc = removeFormatterNumber($("#ctc_value").val());
                    $("#component-table tbody tr").each(function(){
                        var value  = removeFormatterNumber($(this).find(".number_box").val());
                                                var value_type  = $(this).find(".value_type").val();
                        var component_type  = $(this).find(".component_type").val();
                        var is_compulsory  = $(this).find(".is_compulsory").val();
                        if(is_compulsory == "Yes"){
                            if(value_type == "Percentage"){
                                value = (current_ctc * value)/100;
                            }
                            if(component_type == "Income"){
                                total_price += value;
                            }else{
                                total_minus_price += value;
                            }
                        }
                    });
                    console.log(total_price,total_minus_price)
                    if(current_ctc == total_price){
                         var formData = new FormData(form);
                        var deduct_salary = parseInt(total_price) - parseInt(total_minus_price);
                        if(deduct_salary > 0 && deduct_salary <= current_ctc){
                            loader();
                            $.ajax({
                                type: "POST",
                                url: "salary/salary_structure_action",
                                data: formData,
                                cache: false,
                                processData: false,
                                contentType: false,
                                success: function (response) {
                                    var responseObject = JSON.parse(response);
                                    var msg = responseObject.message;
                                    var success = responseObject.success;
                                    setTimeout(function () {
                                        hide_loader();
                                        if (parseInt(success) == 1) {
                                            toaster("success", msg);
                                            setTimeout(function () {
                                                window.location.href = "salary-structure.html";
                                            }, 2000);
                                        } else {
                                            // toastr.error(msg);
                                            toaster("fails", msg);
                                        }
                                    }, 1000);
                                },
                                error: function (error) {
                                    // console.error("Error:", error);
                                },
                            });
                        }else if(deduct_salary > current_ctc){
                            toaster("warning","The deductions exceed the total cost of CTC")
                        }else{
                            toaster("warning","The deductions subceed the total cost of CTC")
                        } 
                    }else{
                        
                            toaster("warning","The salary structure does not meet the CTC requirements.");
                        
                    }
                    // console.log(current_ctc)
                    // console.log(total_price)
                    // console.log(total_minus_price)
                   
                }else{
                    if(salary_component.length == 0){
                            toaster("warning","The salary component is mandatory.");
                    }
                }
                
            },
        });
    }
}


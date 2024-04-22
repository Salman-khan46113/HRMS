$(document).ready(function(){

    salary_structure.init();
})


const salary_structure = {
    init:function(){
        let that = this;
        that.initializePlugin();
        that.validation();
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
    	$("#effective_date_from").datepicker({
	        showButtonPanel: true,
	        changeMonth: true,
	        changeYear: true,
	        showOtherMonths: true,
	        selectOtherMonths: true,
	        dateFormat: "yy-mm-dd",
	        minDate: new Date(new Date().getFullYear(), new Date().getMonth(), 1),
	        beforeShowDay: function(date) {
		        // Get the day of the month
		        var day = date.getDate();
		        // If it's the first day or the last day of the month, allow selection
		        return [day === 1 , ""];
		    },
		    onSelect: function(selectedDate) {
                var selectedMonth = new Date(selectedDate).getMonth();
                var selectedYear = new Date(selectedDate).getFullYear();
                // Calculate the last day of the selected month
                var lastDayOfMonth = new Date(selectedYear, selectedMonth + 1, 0);
                // Also update the minimum date of #effective_date_to based on the selected date in #effective_date_from
                $("#effective_date_to").datepicker("option", "minDate", lastDayOfMonth);
                var date = new Date(lastDayOfMonth);

                // Get the year, month, and day from the Date object
                var year = date.getFullYear();
                var month = (date.getMonth() + 1).toString().padStart(2, '0'); // Adding 1 to month as it is 0-indexed
                var day = date.getDate().toString().padStart(2, '0');

                // Format the date as "YYYY-MM-DD"
                var formattedDate = year + '-' + month + '-' + day;
                $("#effective_date_to").val(formattedDate);
	      	}
	    });
	    $("#effective_date_to").datepicker({
	        showButtonPanel: true,
	        changeMonth: true,
	        changeYear: true,
	        showOtherMonths: true,
	        selectOtherMonths: true,
	        dateFormat: "yy-mm-dd",
            minDate: mode == "Update" ? $("#effective_date_from").val() : new Date(),
	        beforeShowDay: function(date) {
		        // Get the day of the month
		        var day = date.getDate();
                console.log(date.getDate())
		        // If it's the first day or the last day of the month, allow selection
		        return [new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate() === day, ""];
		    }
	    });

    },    
    
    validation:function(){
        $("#salary_structure_form").validate({
            rules: {
                ctc_value: {
                    required: true,
                    min:  {
                        depends: function (element) {
                            var valid = removeFormatterNumber($("#ctc_value").val()) == 0 ? true : false;
                            return valid;
                        },
                    },

                },
                effective_date_from: {
                    required: true,
                },
                effective_date_to: {
                    required: true,
                }

                
            },
            messages: {
                ctc_value: {
                    required: "Please enter ctc.",
                    min: "CTC value should be greater than 0."
                },
                effective_date_from: {
                    required: "Please select effective from.",
                },
                effective_date_to: {
                    required: "Please select effective to.",
                },
                
                
            },
            errorPlacement: function (error, element) {
            	if ((element[0]["className"]).indexOf('hasDatepicker') != -1) {
               		 $('#'+element[0]["id"]).parents(".input-group").after(error);
            	} else{
                	error.insertAfter(element).focus();
                }
                
            },
            ignore: ":hidden:not(select)",
            submitHandler: function (form) {
                var flag = 0;
                $("#component-table tbody tr").each(function(){
                    var value  = removeFormatterNumber($(this).find(".number_box").val());
                    var checked  = $(this).find(".is_compulsory").is(':checked');
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
                    if(current_ctc == total_price){
                         var formData = new FormData(form);
                        var deduct_salary = parseInt(total_price) - parseInt(total_minus_price);
                        if(deduct_salary > 0 && deduct_salary <= current_ctc){
                            loader();
                            $.ajax({
                                type: "POST",
                                url: "salary/employee_salary_structure_action",
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
                                                window.location.href = redirect_url;
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


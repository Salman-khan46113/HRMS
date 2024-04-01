var holiday_date_ele = "";
$(document).ready(function () {
    var myModal = new bootstrap.Modal(document.getElementById("employee_holiday_popup"));

    $(".add-leave").on("click", function () {
        $(".holiday_name").val("");
        $(".holiday_date").val("");
        $(".holiday_id").val("");
        myModal.show();
    });
    holiday_date_ele = $("#holiday_date").datepicker({
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        // yearRange: new Date().getFullYear() + ":" + (new Date().getFullYear() + 1),
        minDate: new Date(new Date().getFullYear(), 0, 1),
        // maxDate: new Date(new Date().getFullYear(), 11, 31),
        beforeShowDay: function(date) {
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [holiday_dates.indexOf(string) == -1];
        }
    });

    $(document).on("click", ".edit_holiday", function () {
        
        var id = $(this).data("id");
        $.ajax({
            type: "POST",
            url: "holiday/get_holiday_details",
            data: {
                edit: id,
            },

            success: function (response) {
                var responseObject = JSON.parse(response);
                var data = responseObject.data;
                var new_dates = [];
                for (var i = 0; i < holiday_dates.length; i++) {
                    if(holiday_dates[i] != data.holiday_date){
                        new_dates.push(holiday_dates[i])
                    }
                }
                updateDisabledDates(new_dates,holiday_date_ele);
                $(".holiday_name").val(data.holiday_name);
                $(".holiday_date").val(data.holiday_date_fomated);
                $(".holiday_id").val(data.id);
                myModal.show();
            },
            error: function (error) {},
        });
    });

    $(document).on("click",".delete_holiday",function () {
        var id = $(this).data("id");
        loader()
        Swal.fire({
            title: "Delete Holiday",
            text: "Are you sure you want to delete this holiday?",
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
                $.ajax({
                type: "POST",
                url: "holiday/delete_holiday",
                data: {
                    id: id,
                },

                success: function (response) {
                    var responseObject = JSON.parse(response);
                    var msg = responseObject.message;
                    console.log(msg);
                    var success = responseObject.success;
                    if (parseInt(success) == 1) {
                        toaster("success", msg);
                        setTimeout(function () {
                            location.reload(true);
                        }, 2000);
                    } else {
                        toaster("fails", msg);
                    }
                },
                error: function (error) {},
            });
            }else{
                hide_loader();
            }
        });

        
    });
    
    $(".submit-holiday").on("click", function () {
        var holiday_name = $("#holiday_name").val();
        var holiday_date = $("#holiday_date").val();

        if (holiday_name == "") {
            toaster("warning", "Please Enter Holiday Title.");
        } else if (holiday_date == "") {
            toaster("warning", "Please select Holiday Date.");
        } else if (holiday_name != "" && holiday_date != "") {
            var id = $(".holiday_id").val();
            // alert(id)
            loader();
            var formData = { holiday_name: holiday_name, holiday_date: holiday_date, id: id };
            console.log(formData);
            $.ajax({
                type: "POST",
                url: "holiday/holiday_action",
                data: formData,
                success: function (response) {
                    var responseObject = JSON.parse(response);
                    var msg = responseObject.message;
                    console.log(msg);
                    var success = responseObject.success;

                    if (parseInt(success) === 1) {
                        toaster("success", msg);
                        setTimeout(function () {
                            hide_loader()
                            location.reload(true);
                        }, 2000);
                    } else {
                        toaster("fails", msg);
                    }
                },
                error: function (error) {
                    // Handle error if needed
                },
            });
        } else {
            toaster("warning", "Please select leave dates.");
        }
    });
});

function updateDisabledDates(newDisabledDates,element) {

    element.datepicker("option", "beforeShowDay", function(date) {
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [newDisabledDates.indexOf(string) == -1];
    });
}

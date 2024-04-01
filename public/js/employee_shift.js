$(document).ready(function () {
  var myModal = new bootstrap.Modal(document.getElementById('Shift_popup'))
  var shift_details_popup = new bootstrap.Modal(document.getElementById('employee_shift_details'))

  $(".add-leave").on("click", function () {
    $(".group_title").val("");
    $(".shift_id").val("").trigger('chosen:updated');
    $(".employee_ids").val([]).trigger('change');
    $(".employee_shift_id").val('');
    $("#start_date").val('');
    $("#end_date").val('');
    myModal.show();

  });
  $("#start_date").datepicker({ 
    showButtonPanel: true, 
    changeMonth: true,
     changeYear: true, 
     showOtherMonths: true, 
     selectOtherMonths: true, 
     yearRange: "c-100:c+100",
      minDate: new Date(),
     onSelect: function(selectedDate) {
            $("#end_date").datepicker("option", "minDate", selectedDate);
    } 
  });
  $("#end_date").datepicker({ 
    showButtonPanel: true, changeMonth: true,
     changeYear: true, showOtherMonths: true, 
     selectOtherMonths: true, yearRange: "c-100:c+100"
  })

  $("#shift_id").chosen();
  $("#department,#designation").select2({
        placeholder: "Select Employee",
      allowClear: false,
      autocomplete:"on",
      multiple:false,
    });
  $("#employee_ids").select2({
    placeholder: "Select Employee", minDate: new Date(),
    allowClear: false,
    autocomplete:"on",
    multiple:true,
  });
  $(document).on("click", ".edit_shift", function () {

    var id = $(this).data("id");
    $.ajax({
      type: "POST",
      url: "shift/get_employee_shift_view_details",
      data: {
        edit: id,
      },

      success: function (response) {
        var responseObject = JSON.parse(response);
        var data = responseObject.shiftDetails;
        console.log(response);
        $(".group_title").val(data.group_title);
        $(".shift_id").val(data.shift_id).trigger('chosen:updated');
        $(".employee_ids").val(data.employee_ids).trigger('change');
        $(".employee_shift_id").val(data.employee_shift_id);
        $("#start_date").val(data.start_date);
        $("#end_date").val(data.end_date);
        myModal.show();
      },
      error: function (error) {},
    });
  });
  $(document).on("click", ".view_shift", function () {
    // shift_details_popup.show();
    var id = $(this).data("id");
    $.ajax({
      type: "POST",
      url: "shift/get_employee_shift_view_details",
      data: {
        edit: id,
      },

      success: function (response) {
        var responseObject = JSON.parse(response);
        var shiftDetails = responseObject.shiftDetails;
        var employees = responseObject.employees;
        $('.shift_employee_details').html("");
        $("#group_title_v").text(shiftDetails.group_title);
        $("#shift_name_v").text(shiftDetails.shift_name);
        $("#shift_type_v").text(shiftDetails.shift_type);
        $("#start_date_v").text(shiftDetails.start_date_display);
        $("#end_date_v").text(shiftDetails.end_date_display);
        $("#start_time_v").text(shiftDetails.start_time);
        $("#end_time_v").text(shiftDetails.end_time);
        $("#employee_count_v").text(shiftDetails.employee_count);
        $.each(employees, function(index, employee) {
          var fullName = employee.first_name + (employee.middle_name ? ' ' + employee.middle_name : '') + ' ' + employee.last_name;
          var newRow = '<tr>' +
          '<td>' + (index + 1) + '</td>' +
          '<td>' + fullName + '</td>' +
          '<td>' + employee.employee_code + '</td>' +
          '<td>' + employee.department + '</td>' +
          '</tr>';

          $('.shift_employee_details').append(newRow);
        });

        shift_details_popup.show();
      },
      error: function (error) {},
    });
  });

  $(document).on("click",".delete_shift",function () {
    var id = $(this).data("id");
    loader()
    Swal.fire({
      title: "Delete Shift",
      text: "Are you sure you want to delete this Shift?",
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
          url: "shift/delete_employee_shift",
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

  $(".submit-shift").on("click", function () {
    var group_title = $("#group_title").val();
    var shift_id = $("#shift_id").val();
    var employee_ids = $("#employee_ids").val();
    var start_date = $("#start_date").val();
    var end_date = $("#end_date").val();

    if (group_title == "") {
      toaster("warning", "Please enter Group name.");
    } else if (shift_id == "") {
      toaster("warning", "Please select shift.");
    }else if (employee_ids == "") {
      toaster("warning", "Please select employee.");
    }else if (start_date == "") {
      toaster("warning", "Please select start date.");
    }else if (end_date == "") {
      toaster("warning", "Please select end date.");
    }else if (group_title != "" && shift_id != "" && employee_ids != "" ) {
      var id = $(".employee_shift_id").val();

      loader();
      var formData = {
        group_title: group_title,
        shift_id: shift_id,
        employee_ids: employee_ids,
        employee_shift_id: id,
        start_date:start_date,
        end_date:end_date
      };
      console.log(formData);
      $.ajax({
        type: "POST",
        url: "shift/employee_shift_action",
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
            hide_loader()
          }
        },
        error: function (error) {
          // Handle error if needed
        },
      });
    } else {
      toaster("warning","");
    }
  });
});

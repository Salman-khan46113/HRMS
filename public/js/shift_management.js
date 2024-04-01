$(document).ready(function () {
  var myModal = new bootstrap.Modal(document.getElementById("Shift_popup"));

  $(".add-leave").on("click", function () {
    $(".shift_name").val("");
    $(".shift_type").val("");
    $(".start_time").val("");
    $(".end_time").val("");
    $("#company_id").val(selected_company).trigger("change").prop('disabled',false);
    $(".department").val('').prop('disabled',false).trigger("chosen:updated");
    $(".shift_type").val('').prop('disabled',false).trigger("chosen:updated");
    myModal.show();
  });

  $('#start_time,#end_time').mdtimepicker();

  $("#company_id").select2();
  $(document).on("click", ".edit_shift", function () {

    var id = $(this).data("id");
    $.ajax({
      type: "POST",
      url: "shift/get_shift_details",
      data: {
        edit: id,
      },

      success: function (response) {
        var responseObject = JSON.parse(response);
        var data = responseObject.data;
        $('#start_time,#end_time').mdtimepicker('destroy');        
        $("#company_id").val(data.company_id).trigger("change").prop('disabled',true);
        $(".shift_id").val(data.id);
        $(".shift_name").val(data.shift_name);
        $(".department").val(data.department_id).prop('disabled', true).trigger("chosen:updated");
        $(".shift_type").val(data.shift_type).prop('disabled', true).trigger("chosen:updated").prop('disabled',true);
        $(".start_time").val(data.start_time);
        $(".end_time").val(data.end_time);
        $('#start_time,#end_time').mdtimepicker();
        myModal.show();
      },
      error: function (error) {},
    });
  });

  $("#shift_type,#department").chosen();

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
          url: "shift/delete_shift",
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
    var shift_name = $("#shift_name").val();
    var shift_type = $("#shift_type").val();
    var start_time = $("#start_time").val();
    var end_time = $("#end_time").val();
    var department = $("#department").val();


    if (shift_name == "") {
      toaster("warning", "Please enter shift name.");
    } else if (shift_type == "") {
      toaster("warning", "Please select shift type.");
    }else if (start_time == "") {
      toaster("warning", "Please select start time.");
    }else if (end_time == "") {
      toaster("warning", "Please select end time.");
    }else if (!(department > 0)) {
      toaster("warning", "Please select department.");
    } else if (shift_name != "" && shift_type != "" && start_time != "" && end_time != "") {
      var id = $(".shift_id").val();

      loader();
      var formData = {
        shift_name: shift_name,
        shift_type: shift_type,
        start_time: start_time,
        end_time: end_time,
        id: id,
        department_id:department
      };
      $.ajax({
        type: "POST",
        url: "shift/shift_action",
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
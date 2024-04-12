$(document).ready(function () {
  var myModal = new bootstrap.Modal(document.getElementById("leave_allocation_popup"));
  $(".department_id").chosen()
  // $(".designation_id").chosen()
  $(".add-leave").on("click", function () {
    $(".sick_leave").val("");
    $(".paid_leave").val("");
    $(".casual_leave").val("");
    $(".leave_allocation_id").val("");
    $(".department_id").val("").prop( "disabled", false ).trigger('chosen:updated');
    $(".designation_id").val("").prop( "disabled", false ).trigger('chosen:updated');
    myModal.show();
  });

  $("#designation_id").chosen();

  $("#department_id").change(function(){
    var department_id = $(this).val();
    $.ajax({
      type: "POST",
      url: "leave/get_designation",
      data: {
        department_id: department_id,
      },

      success: function (response) {
        var responseObject = JSON.parse(response);
        var designations = responseObject.designation;
        console.log(designations);
        var selectElement = $("#designation_id");
        selectElement.html("");
        selectElement.append('<option value="">Select Designation</option>');
        $.each(designations, function(index, item) {
          selectElement.append('<option value="' + item.id + '">' + item.designation_name + ' (Grade - ' + item.grads + ')</option>');
        });
        $("#designation_id").trigger("chosen:updated")

      },
      error: function (error) {},
    });

  });
  $(document).on("click", ".edit_leave_allocation", function () {

    var id = $(this).data("id");
    $.ajax({
      type: "POST",
      url: "leave/get_leave_allocation_details",
      data: {
        edit: id,
      },

      success: function (response) {
        var responseObject = JSON.parse(response);
        var data = responseObject.data;
        console.log(data);
        $(".leave_allocation_id").val(data.id);
        $(".sick_leave").val(data.sick_leave);
        $(".paid_leave").val(data.paid_leave);
        $(".casual_leave").val(data.casual_leave);
        var designation = $("#designation_id");
        designation.html("");
        designation.append('<option value='+data.designation_id+'>'+data.designation_name + ' (Grade - ' + data.grads + ')</option>');
        $(".department_id").val(data.designation_id).prop( "disabled", true ).trigger('chosen:updated');
        $(".designation_id").val(data.designation_id).prop( "disabled", true ).trigger('chosen:updated');
        myModal.show();
      },
      error: function (error) {},
    });
  });

  $(document).on("click",".delete_leave_allocation",function () {
    var id = $(this).data("id");
    loader()
    Swal.fire({
      title: "Delete Leave Allocation",
      text: "Are you sure you want to delete this Leave Allocation?",
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
          url: "leave/delete_leave_allocation",
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

  $(".submit-leave-allocation").on("click", function () {
    var sick_leave = $("#sick_leave").val();
    var paid_leave = $("#paid_leave").val();
    var casual_leave = $("#casual_leave").val();
    var department_id = $("#department_id").val();

    var designation_id = $("#designation_id").val();


     if (department_id == "") {
      toaster("warning", "Please select department.");
    } else if (designation_id == "") {
      toaster("warning", "Please select designation.");
    }else if (sick_leave == "") {
      toaster("warning", "Please enter sick leave.");
    } else if (paid_leave == "") {
      toaster("warning", "Please enter paid leave.");
    }else if (casual_leave == "") {
      toaster("warning", "Please enter casual leave.");
    } else if (sick_leave != "" && paid_leave != "" && casual_leave != "" && department_id != "" && designation_id != "") {
      var id = $(".leave_allocation_id").val();
      loader();
      var formData = {
        sick_leave: sick_leave,
        paid_leave: paid_leave,
        casual_leave: casual_leave,
        department_id:department_id,
        designation_id: designation_id,
        id: id
      };
      console.log(formData);
      $.ajax({
        type: "POST",
        url: "leave/leave_allocation_action",
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

    }
  });
});

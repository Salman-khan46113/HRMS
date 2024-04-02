$(document).ready(function () {
  var myModal = new bootstrap.Modal(document.getElementById("Shift_popup"));
  $(".designation_id").chosen()
  $(".add-leave").on("click", function () {
    $(".sick_leave").val("");
    $(".paid_leave").val("");
    $(".casual_leave").val("");
    $(".leave_allocation_id").val("");
    $(".designation_id").val("").prop( "disabled", false ).trigger('chosen:updated');
    myModal.show();
  });


  $(document).on("click", ".edit_shift", function () {

    var id = $(this).data("id");
    $.ajax({
      type: "POST",
      url: "leaveallocation/get_leave_allocation_details",
      data: {
        edit: id,
      },

      success: function (response) {
        var responseObject = JSON.parse(response);
        var data = responseObject.data;
        $(".leave_allocation_id").val(data.id);
        $(".sick_leave").val(data.sick_leave);
        $(".paid_leave").val(data.paid_leave);
        $(".casual_leave").val(data.casual_leave);
          $(".designation_id").val(data.designation_id).prop( "disabled", true ).trigger('chosen:updated');
        myModal.show();
      },
      error: function (error) {},
    });
  });

  $(document).on("click",".delete_shift",function () {
    var id = $(this).data("id");
    loader()
    Swal.fire({
      title: "Delete Shift",
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
          url: "leaveallocation/delete_leave_allocation",
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
    var sick_leave = $("#sick_leave").val();
    var paid_leave = $("#paid_leave").val();
    var casual_leave = $("#casual_leave").val();
    var designation_id = $("#designation_id").val();


    if (sick_leave == "") {
      toaster("warning", "Please enter sick leave.");
    } else if (paid_leave == "") {
      toaster("warning", "Please select paid leave.");
    }else if (casual_leave == "") {
      toaster("warning", "Please select casual leave.");
    }else if (designation_id == "") {
      toaster("warning", "Please select designation.");
    } else if (sick_leave != "" && paid_leave != "" && casual_leave != "" && designation_id != "") {
      var id = $(".leave_allocation_id").val();

      loader();
      var formData = {
        sick_leave: sick_leave,
        paid_leave: paid_leave,
        casual_leave: casual_leave,
        designation_id: designation_id,
        id: id
      };
      console.log(formData);
      $.ajax({
        type: "POST",
        url: "leaveallocation/leave_allocation_action",
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

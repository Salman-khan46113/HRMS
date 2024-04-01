$(document).ready(function(){
  var resetPasswordModal = new bootstrap.Modal(document.getElementById("reset_Password_popup"));
  var resetAttendancePinModal = new bootstrap.Modal(document.getElementById("reset_attendance_pin_popup"));
  
	$(".sign-out-btn").on('click',function(){
    loader()
    var formData = '';
    $.ajax({
        type: "POST",
        url: "user/logout_action",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (response) {
          var responseObject = JSON.parse(response);
          var msg = responseObject.message;
          var success = responseObject.success;
          toaster("success",msg)
          setTimeout(function(){
              hide_loader();
              window.location.href = "login.html";
          },2000)
         
        },
        error: function (error) {
          // console.error("Error:", error);

        },
      });
  })

  $(".Reset-pasword-btn").on('click',function(){
    resetPasswordModal.show();
  });
  $(".reset-attendance-pin-btn").on('click',function(){
    resetAttendancePinModal.show();
  });

  $("#ResetPasswordForm").validate({
    rules: {
      new_pass: {
        required: true,
        minlength: 8,
      },
      confirm_pass: {
        required: true,
        minlength: 8,
        equalTo: "#new_pass",
        
      }
    },
    messages: {
      new_pass: {
        required: "Please enter new password.",
        minlength: "Password must be at least 8 characters long.",

      },
      confirm_pass: {
        required: 'Please enter confirm password.',
        minlength: "Password must be at least 8 characters long.",
        equalTo: 'Confirm password must be same as new password.'
      }
    },

    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {

      var formData = new FormData(form);
      loader()
      $.ajax({
        type: "POST",
        url: "master/update_user_password",
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
              toaster("success",msg);
              setTimeout(function () {
                resetPasswordModal.hide();
                $("#new_pass").val('')
                $("#confirm_pass").val('')
              }, 2000);
            } else {
              // toastr.error(msg);
              toaster("fails",msg);
            }
           },1000)
        },
        error: function (error) {
          // console.error("Error:", error);

        },
      });
    },
  });
  $("#ResetAttendancePinForm").validate({
    rules: {
      new_attendance_pin: {
        required: true,
        minlength: 6,
      },
      // confirm_pass: {
      //   required: true,
      //   minlength: 8,
      //   equalTo: "#new_pass",
        
      // }
    },
    messages: {
      new_attendance_pin: {
        required: "Please enter new attendance pin.",
        minlength: "New attendance pin must be 9 Digit.",

      },
      // confirm_pass: {
      //   required: 'Please enter confirm password.',
      //   minlength: "Password must be at least 8 characters long.",
      //   equalTo: 'Confirm password must be same as new password.'
      // }
    },

    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {

      var formData = new FormData(form);
      loader()
      $.ajax({
        type: "POST",
        url: "master/update_user_attendance_pin",
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
              toaster("success",msg);
              setTimeout(function () {
                resetAttendancePinModal.hide();
                $("#new_attendance_pin").val('')
              }, 2000);
            } else {
              // toastr.error(msg);
              toaster("fails",msg);
            }
           },1000)
        },
        error: function (error) {
          // console.error("Error:", error);

        },
      });
    },
  });
})
$(document).ready(function () {
 $('body').find('[style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"]').remove()
 setTimeout(function(){
        $('body').find('a[href*="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"]').css("display","none")
    },1000)

  $("#login_form").validate({
    rules: {
      username: {
        required: true,
      },
      
      password: {
        required: true,
      },


    },
    messages: {
      username: {
        required: "Please enter username.",
      },
      password: {
        required: "Please enter password.",
      },
    },

    errorPlacement: function (error, element) {
    
      
        error.insertAfter(element);
      
    },
    submitHandler: function (form) {

    
      loader()
      var formData = new FormData(form);
      $.ajax({
        type: "POST",
        url: "user/login_action",
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
                  window.location.href = "home.html";
                }, 2000);
              } else {
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
});

function showPassword(hidePasswordIcon, passwordAttributeId, showPasswordIcon) {
  $(passwordAttributeId).attr("type", "text");
  $(hidePasswordIcon).hide();
  $(showPasswordIcon).show();
}

function hidePassword(hidePasswordIcon, passwordAttributeId, showPasswordIcon) {
  $(passwordAttributeId).attr("type", "password");
  $(hidePasswordIcon).hide();
  $(showPasswordIcon).show();
}

function validate() {

    var number = $("#mobile_number").intlTelInput('getNumber');
    iso = $("#mobile_number").intlTelInput('getSelectedCountryData').iso2;
   
    var exampleNumber = intlTelInputUtils.getExampleNumber(iso, 0, 0);
    if (number == '')
        number = exampleNumber;

    var formattedNumber = intlTelInputUtils.formatNumber(number, iso, intlTelInputUtils.numberFormat.NATIONAL);
    var isValidNumber = intlTelInputUtils.isValidNumber(number, iso);
    var validationError = intlTelInputUtils.getValidationError(number, iso);

    console.log(number);
    console.log(formattedNumber);
    console.log(intlTelInputUtils.formatNumber(number, iso, intlTelInputUtils.numberFormat.INTERNATIONAL));
    console.log(intlTelInputUtils.formatNumber(number, iso, intlTelInputUtils.numberFormat.E164));
    console.log(intlTelInputUtils.formatNumber(number, iso, intlTelInputUtils.numberFormat.RFC3966));
    console.log(isValidNumber);
    console.log(validationError);

}
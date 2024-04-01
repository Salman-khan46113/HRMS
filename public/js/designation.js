$(document).ready(function () {
    var myModal = new bootstrap.Modal(document.getElementById("designation_popup"));

    $(".add-designation").on("click", function () {
        $(".designation_name").val("");
        $(".designation_id").val("");
        $("#department").val("").trigger('change').prop( "disabled", false );
        myModal.show();
    });

    $("#department").select2({
          placeholder: "Select Week Off",
          allowClear: false

    });

    $(document).on("click", ".edit_holiday", function () {
        var id = $(this).attr("data-id");
        var department = $(this).attr("data-departmet");
        $("#department").val(department).trigger('change').prop( "disabled", true );
        var designation = $(this).attr("data-designation");
        $(".designation_name").val(designation);
        $(".designation_id").val(id);
        myModal.show()
        // $.ajax({
        // type: "POST",
        // url: "home/get_designation_details",
        // data: {
        // edit:id,
        // },

        // success: function (response) {
        // var responseObject = JSON.parse(response);
        // var data = responseObject.data;
        // console.log(data);
        // $(".designation_name").val(data.designation_name)
        // $(".designation_id").val(data.id)
        // myModal.show()

        // },
        // error: function (error) {},
        // });
    });

    $(".delete_designation").on("click", function () {
        var id = $(this).data("id");
        loader();
        Swal.fire({
            title: "Delete Designation",
            text: "Are you sure you want to delete this designation?",
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
                    url: "master/delete_designation",
                    data: {
                        id: id,
                    },

                    success: function (response) {
                        var responseObject = JSON.parse(response);
                        var msg = responseObject.message;
                      
                        var success = responseObject.success;
                        if (parseInt(success) == 1) {
                            toaster("success", msg);
                            setTimeout(function () {
                                hide_loader();
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


    $("#designation_form").validate({
    rules: {
      designation_name: {
        required: true,
      },
      department: {
        required: true,
      }
    },
    messages: {
      designation_name: {
        required: "Please enter designation name."

      },
      department: {
        required: 'Please select department.',
      }
    },

    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    submitHandler: function (form) {
      var formData = new FormData(form);
      var designation_id = $(".designation_id").val();
      formData.append('id',designation_id );
      loader()
      $.ajax({
        type: "POST",
        url: "master/designation_action",
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
                window.location.reload();
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

    // $(".submit-holiday").on("click", function () {
    //     var designation_name = $("#designation_name").val();

    //     if (designation_name == "") {
    //         toaster("warning", "Please Enter Designation .");
    //     } else if (designation_name != "") {
    //         var id = $(".designation_id").val();

    //         var formData = { designation_name: designation_name, id: id };
    //         loader();
    //         $.ajax({
    //             type: "POST",
    //             url: "master/designation_action",
    //             data: formData,
    //             success: function (response) {
    //                 var responseObject = JSON.parse(response);
    //                 var msg = responseObject.message;
    //                 console.log(msg);
    //                 var success = responseObject.success;

    //                 if (parseInt(success) === 1) {
    //                     toaster("success", msg);
    //                     setTimeout(function () {
    //                         hide_loader();
    //                         location.reload(true);
    //                     }, 2000);
    //                 } else {
    //                     hide_loader();
    //                     toaster("fails", msg);
    //                 }
    //             },
    //             error: function (error) {
    //                 // Handle error if needed
    //             },
    //         });
    //     } else {
    //         toaster("warning", "Please select leave dates.");
    //     }
    // });
});

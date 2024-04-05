$(document).ready(function () {
  var myModal = new bootstrap.Modal(document.getElementById('Shift_popup'))
  var shift_details_popup = new bootstrap.Modal(document.getElementById('employee_shift_details'))

  $(".add-leave").on("click", function () {
    $(".group_title").val("");
    var option_arr = '<option value="">Select Shift</option>';
    $(".shift_id").html(option_arr).val('').trigger('chosen:updated');
    $(".employee_ids").html('').val('').trigger('change');
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

  $("#department,#shift_id").chosen();
  // $("#designation").select2({
  //     placeholder: "Select Employee",
  //     allowClear: false,
  //     autocomplete:"on",
  //     multiple:false,
  //   });
  $("#employee_ids").select2({
    placeholder: "Select Employee",
     minDate: new Date(),
    allowClear: false,
    // autocomplete:"on",
    multiple:true,
  });
  $(document).on("click", ".view_shift", function () {
    var id = $(this).attr("data-id");
    $.ajax({
      type: "POST",
      url: "shift/get_employee_shift_view_details",
      data: {
        mode: "details",
         id: id,
      },
      success: function (response) {
        var responseObject = JSON.parse(response);
        console.log(responseObject)
        $(".employee-shift-conatiner").html(responseObject.html)
        shift_details_popup.show();
      },
      error: function (error) {},
    });
  });
  $(document).on("click", ".edit_shift", function () {
    var id = $(this).data("id");
    $.ajax({
      type: "POST",
      url: "shift/get_employee_shift_view_details",
      data: {
        edit: id,
        id:"edit"
      },

      success: function (response) {
        var responseObject = JSON.parse(response);
        var data = responseObject.shiftDetails;
        $("#department").val(data.department_id).trigger('chosen:updated');
        get_edit_data(data.department_id,data.shift_id,data.employee_ids)
        $(".group_title").val(data.group_title);
        $(".employee_shift_id").val(data.employee_shift_id);
        $("#start_date").val(data.start_date);
        $("#end_date").val(data.end_date);
        myModal.show();
      },
      error: function (error) {},
    });
  });

  $(document).on("change", "#department", function () {
    // shift_details_popup.show();
    var department_id = $(this).val();
    if(department_id > 0){
      get_edit_data(department_id)
    }else{
      var option_arr = '<option value="">Select Shift</option>';
      $(".shift_id").html(option_arr).trigger('chosen:updated');
      $(".employee_ids").html('').trigger('change');
    }
    
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

  // datatable initialise 

  table = $("#employee_shift").DataTable({
        dom: "Bfrtilp",
        buttons: [
            {
                extend: "csv",
                text: '<i class="ti ti-file-type-csv"></i>',
                init: function (api, node, config) {
                    $(node).attr("title", "Download CSV");
                },
                customize: function (csv) {
                        var lines = csv.split('\n');
                        var modifiedLines = lines.map(function(line) {
                            var values = line.split(',');
                            values.splice(8, 1);
                            return values.join(',');
                        });
                        return modifiedLines.join('\n');
                    },
                    filename : 'employee_shift_list'
                },
          
            {
                extend: "pdf",
                text: '<i class="ti ti-file-type-pdf"></i>',
                init: function (api, node, config) {
                    $(node).attr("title", "Download Pdf");
                },
                filename: "employee_shift_list",
                customize: function (doc) {
                    doc.pageMargins = [15, 15, 15, 15];
                    doc.content[0].text = "Employee Shift List";
                    doc.content[0].color = "#5d87ff";
                    doc.content[1].table.widths = ["15%", "15%", "8%", "13%", "13%", "13%", "13%", "10%"];
                    doc.content[1].table.body[0].forEach(function (cell) {
                        cell.fillColor = "#5d87ff";
                    });
                    doc.content[1].table.body.forEach(function (row, index) {
                        row.splice(8, 1);
                        row.forEach(function (cell) {
                            // Set alignment for each cell
                            cell.alignment = "center"; // Change to 'left' or 'right' as needed
                        });
                    });
                },
            },
        ],
        searching: true,
        columnDefs: [{ sortable: false, targets: 8}],
        language: {
            loadingRecords: "&nbsp;",
            processing: '<div class="spinner"></div>',
            emptyTable: no_data_message,
            paginate: {
                first: "<<",
                last: ">>",
                next: ">",
                previous: "<",
            },
        },
        infoCallback: function (settings, start, end, max, total, pre) {
            // Get the count of visible rows after search
            var api = this.api();
            var rowCount = api.rows({ search: "applied" }).count();
            if (rowCount == 0) {
                $(".dataTables_empty").html(no_data_message);
            }
            // Construct the info string with the actual count
            var info = "Showing " + start + " to " + end + " of " + rowCount + " entries";

            // Optionally, you can append any other information you want to show
            // For example: 'Showing 1 to 10 of 57 entries'

            return info;
        },
    });
   $(".dataTables_length")
        .find("label")
        .contents()
        .filter(function () {
            return this.nodeType === 3; // Filter out text nodes
        })
        .remove();

});

function get_edit_data(department_id = '',shift_id = '',employe_ids = ''){
  console.log(department_id)
  $.ajax({
        type: "POST",
        url: "shift/get_shits",
        data: {
          department_id: department_id,
          selected_company:selected_company
        },
        success: function (response) {
          var responseObject = JSON.parse(response);
          var employee = responseObject.employee;
          var shift = responseObject.shift;
          var option_arr = '';
          for (var i = 0; i < employee.length; i++) {
            option_arr += "<option value='" + employee[i]["employee_id"] + "'>" + employee[i]["employee_name"] + "</option>";
          }
          
          if(employe_ids.length > 0){
              $("#employee_ids").html(option_arr).val(["2","3"]).trigger('change');
          }else{
              $("#employee_ids").html(option_arr).trigger('change')
          }
          option_arr = '<option value="">Select Shift</option>';
          for (var i = 0; i < shift.length; i++) {
            option_arr += "<option value='" + shift[i]["id"] + "'>" + shift[i]["shift_name"] + "("+shift[i]["shift_type"]+")</option>";
          }

          if(shift_id > 0){
             $("#shift_id").html(option_arr).val(shift_id).trigger('chosen:updated');
          }else{
            $("#shift_id").html(option_arr).trigger('chosen:updated')
          }

          
        },
        error: function (error) {},
      });
}

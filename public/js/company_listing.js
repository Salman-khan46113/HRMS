$(document).ready(function(){
   
    var table =  new DataTable("#company_table", {
        dom: 'Bfrtip',
        buttons: [
              {     
                extend: 'csv',
                  text: '<i class="ti ti-file-type-csv"></i>',
                  init: function(api, node, config) {
                  $(node).attr('title', 'Download CSV');
                  }
              },
              {
                  extend: 'pdf',
                  text: '<i class="ti ti-file-type-pdf"></i>',
                  init: function(api, node, config) {
                      $(node).attr('title', 'Download Pdf');
                  },
                  filename: 'company_list',
                  customize: function (doc) {
                      doc.content[0].text = 'Company List';
                      doc.content[0].color = '#5d87ff';
                      doc.content[1].table.widths = ['19%', '19%', '13%', '13%','15%', '15%'];
                      doc.content[1].table.body[0].forEach(function(cell) {
                          cell.fillColor = '#5d87ff';
                      });
                      doc.content[1].table.body.forEach(function(row, index) {
                          row.splice(1, 1);
                          row.splice(0, 1);
                          row.forEach(function(cell) {
                              // Set alignment for each cell
                              cell.alignment = 'center'; // Change to 'left' or 'right' as needed
                          });
                          
                      });
                  }
              }
          ],
          searching : false,
          "columnDefs": [
          { "sortable": false, "targets": 1}],
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
  
      });
  
    //   $('#department_name').on('keyup', function() {
    //           table.column(0).search(this.value).draw();
    //   });
})


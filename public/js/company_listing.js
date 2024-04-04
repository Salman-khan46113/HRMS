var table = '';
$(document).ready(function(){
    data_table_obj.init();
});

const data_table_obj = {
    init:function(){
        let that = this;
        that.makeTable();
        $('.search-filter').off('click');
        $('.search-filter').on('click',function(e){
           that.getSearchParams();
        })
        $('.reset-filter').off('click');
        $(".reset-filter").on("click",function(){
            $('.filter-input input').each(function(index,data){
                $(this).val('');
            })
            that.getSearchParams();
        })
    },
    makeTable:function(){
        table =  new DataTable("#company_table", {
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
              searching : true,
              fixedHeader: true,
              "columnDefs": [
                { "sortable": false, "targets": 0 },
                { "sortable": true, "targets": 1},
                { "sortable": true, "targets": 2 },
                { "sortable": true, "targets": 3 },
                { "sortable": true, "targets": 4 },
                { "sortable": true, "targets": 5 },
                { "sortable": false, "targets": 6 }],
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
    },
    getSearchParams:function(){
        $('.filter-input input').each(function(index,val){
            let cur_val = $(this).val();
            let cur_col = $(this).attr('data-column');
            table.column(cur_col).search(cur_val).draw();
        })
        
    }
}
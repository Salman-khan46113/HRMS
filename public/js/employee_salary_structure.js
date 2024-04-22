var table = '';
$(document).ready(function(){

    employee_salary_structure.init();
    
})

var employee_salary_structure = {
	init : function(){
		this.iniateDataTable();
		this.initiatePlagin();
	},
	initiatePlagin: function(){
		$("#year_drop_down").select2();
	},
	iniateDataTable: function(){
		table = $(".leave-list-table").DataTable({
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
	                            values.splice(7, 1);
	                            return values.join(',');
	                        });
	                        return modifiedLines.join('\n');
	                    },
	                    filename : 'salary_component_list'
	                },
	          
	            {
	                extend: "pdf",
	                text: '<i class="ti ti-file-type-pdf"></i>',
	                init: function (api, node, config) {
	                    $(node).attr("title", "Download Pdf");
	                },
	                filename: "salary_component_list",
	                customize: function (doc) {
	                    doc.pageMargins = [15, 15, 15, 15];
	                    doc.content[0].text = "Salary Component List";
	                    doc.content[0].color = "#5d87ff";
	                    doc.content[1].table.widths = ["16%", "14%", "14%", "14%", "14%", "14%","14%"];
	                    doc.content[1].table.body[0].forEach(function (cell) {
	                        cell.fillColor = "#5d87ff";
	                    });
	                    // for (var i = 1; i < doc.content[1].table.body.length; i++) {
	                       
	                    //     doc.content[1].table.body[i][2].text = format_number(doc.content[1].table.body[i][2].text);
	                    // }
	                    doc.content[1].table.body.forEach(function (row, index) {
	                        row.splice(7, 1);
	                        row.forEach(function (cell) {
	                            // Set alignment for each cell
	                            cell.alignment = "center"; // Change to 'left' or 'right' as needed
	                        });
	                    });
	                },
	            },
	        ],
	        searching: true,
	        columnDefs: [{ sortable: false, targets: 10 }],
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
	}
}
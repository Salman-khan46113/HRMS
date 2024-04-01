
<style>
	.dataTables_wrapper.no-footer .dt-buttons {
    position: fixed;
    top: 98px;
    right: 242px;
}
</style>
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Companies</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<a href="add-company.html"><button type="button" class="btn btn-primary add-designation add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Company</span>
					</button>
                </a>
				</div>
			</div>
		</div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">

			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<table id="company_table" width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" style="border-collapse: collapse;" border-color="#e1e1e1">
					<thead>
						<tr class="text-center">
							<th scope="col">Image</th>
							<th scope="col">Name</th>
							<th scope="col">Code</th>
							<th scope="col">Email</th>
							<th scope="col">Date of Founding</th>
							<th scope="col">GST Number</th>
							<th scope="col">Action</th>
							
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						{foreach $data as $key=>$val}
						<tr class="leave-request-row">
							<td class="  dt-center img-box"><img src="public/img/uploads/company_logo/{$val['company_logo']}" alt="" width="70" height="70" class="rounded-circle"></td>
							<td><a href="company-view?id={$val['company_id']}">{$val['company_name']}</a></td> 
							<td>{$val['company_code']}</td>
							<td>{$val['company_email']}</td>
							<td>{$val['date_founded']}</td> 
							<td>{$val['gst_number']}</td> 
							<td><a href = "update-company.html?id={$val['company_id']}"><i class="la-edit ti ti-edit"></a></i></td>
			  			</tr>
						{/foreach}
					
				{*	<tr>
						<td colspan="4">
							<div class="mb-5">
								<img alt="" src="{{$base_url}}public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
								<br />
								<span class="mb-4 no-data-found-message">No Companies found!</span>
							</div>
						</td>
					</tr>
					*}
				</tbody>
			</table>

			</div>
		</div>
	</div>

</div>


</div>
<!-- extra for footer -->
</div>
</div>
</div>
</div>

<link rel="stylesheet" href="{{$base_url}}public/css/attendance_sheet.css" />
<link rel="stylesheet" href="{{$base_url}}public/css/leave.css" />
<script>
    var no_data_message =  {{$no_data_message|json_encode}};
    var base_url = {{$base_url|json_encode}};
</script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="public/js/company_listing.js"></script>

{include file="footer.tpl" }
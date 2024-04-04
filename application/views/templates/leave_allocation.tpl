
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Leave Allocation</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Allocation</span>
					</button>
				</div>
			</div>
		</div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">

			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table" style="border-collapse: collapse;" border-color="#e1e1e1">
					<thead>
						<tr class="text-center">
							<th scope="col">Department Name</th>
							<th scope="col">Designation Name</th>
							<th scope="col">Sick Leave</th>
							<th scope="col">paid Leave</th>
							<th scope="col">casual Leave</th>
							<th scope="col">Total Leave</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						{if count($data) > 0}
						{foreach $data as $data_index => $data_row}
						<tr class="leave-request-row">
							<td>{$data_row.departmen_name} </td>
							<td>{$data_row.designation_name} (Grade - {$data_row.grads})</td>
							<td>{$data_row.sick_leave}</td>
							<td>{$data_row.paid_leave}</td>
							<td>{$data_row.casual_leave}</td>
							<td>{$data_row.total_leave}</td>
							<td>{$data_row.action}</td>

						</tr>
						{/foreach}
						{else}
						<tr>
							<td colspan="7">
								<div class="mb-5">
									<img alt="" src="{{$base_url}}public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
									<br />
									<span class="mb-4 no-data-found-message">No leave allocation data found!</span>
								</div>
							</td>
						</tr>
						{/if}
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

<div class="modal fade leave-popup-block" id="leave_allocation_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Leave Allocation</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="leaveallocationForm" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">
								<div class="mb-3">
									<label for="department_id" class="form-label">Department</label>
									<select class="form-select department_id" name="department_id" id="department_id">
										<option value="">Select Department</option>

										{foreach $department as $department_index => $department_row}
										<option value="{$department_row.department_id }">{$department_row.departmen_name} ({$department_row.department_code})</option>
										{/foreach}
									</select>
								</div>

								<div class="mb-3">
									<label for="designation_id" class="form-label">Designation</label>
									<select class="form-select designation_id" name="designation_id" id="designation_id">

									</select>
								</div>

								<div class="mb-3">
									<label for="sick_leave" class="form-label">Sick Leave</label>
									<input type="number" class="form-control sick_leave" id="sick_leave" name="sick_leave"  placeholder="Enter sick leave">
								</div>

								<div class="mb-3">
									<label for="paid_leave" class="form-label">Paid Leave</label>
									<input type="number" class="form-control paid_leave" id="paid_leave" name="paid_leave"  placeholder="Enter paid leave">
								</div>
								<div class="mb-3">
									<label for="casual_leave" class="form-label">Casual Leave</label>
									<input type="number" class="form-control casual_leave" id="casual_leave" name="casual_leave" placeholder="Enter casual leave" >
								</div>
								<input type="hidden" class="form-control leave_allocation_id "  name="id" >


							</div>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit-leave-allocation">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<!-- extra for footer -->
</div>
</div>
</div>
</div>
<script type="text/javascript" >
var holiday_dates = {{$holiday_dates|json_encode}};
</script>
<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
<script src="public/js/leave_allocation.js"></script>
{include file="footer.tpl" }

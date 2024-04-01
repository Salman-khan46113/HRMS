<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Employee Shift</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Group</span>
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
							<!-- <th scope="col">#</th> -->
							<th scope="col">Group Name</th>
							<th scope="col">Shift Name</th>
							<th scope="col">Shift type</th>
							<th scope="col">Start Date</th>
							<th scope="col">End Date</th>
							<th scope="col">Start Time</th>
							<th scope="col">End Time</th>
							<th scope="col">Employee Count</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						{if count($data) > 0}
						{foreach $data as $data_index => $data_row}
						<tr class="leave-request-row">
							<!-- <td>{$data_index + 1}</td> -->
							<td>{$data_row.group_title}</td>
							<td>{$data_row.shift_name}</td>
							<td>{$data_row.shift_type}</td>
							<td>{$data_row.start_date}</td>
							<td>{$data_row.end_date}</td>
							<td>{$data_row.start_time}</td>
							<td>{$data_row.end_time}</td>
							<td>{$data_row.employee_ids_count}</td>
							<td>{$data_row.action}</td>

						</tr>
						{/foreach}
						{else}
						<tr>
							<td colspan="8">
								<div class="mb-5">
									<img alt="" src="{{$base_url}}public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
									<br />
									<span class="mb-4 no-data-found-message">No data found!</span>
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

<!-- <div class="modal fade leave-popup-block" id="Shift_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered ">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalToggleLabel">Employee Shift</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form id="shiftForm" action="javascript:void(0)" method="post">
<div class="modal-body">
<div class="main-content">

<div class="card mb-3 leave-box">
<div class="row g-0 m-3">


<div class="mb-3">
<label for="group_title" class="form-label">Group Title</label>
<input type="text" class="form-control group_title" id="group_title" name="group_title"  placeholder="Enter Group Title">
</div>
<div class="mb-3">
<label for="shift_id" class="form-label">Shift</label>
<select class="form-select shift_id" name="shift_id" id="shift_id">
<option value="">Select Shift</option>
{foreach $shift as $shift_index => $shift_row}
<option value="{$shift_row.id}">{$shift_row.shift_name} ({$shift_row.shift_type})</option>
{/foreach}
</select>
</div>
<div class="mb-3">
<label for="employee_ids" class="form-label">Employee</label>
<select class="form-select employee_ids" name="employee_ids" id="employee_ids">

{foreach $employee as $employee_index => $employee_row}
<option value="{$employee_row.employee_id }">{$employee_row.first_name} {$employee_row.middle_name} {$employee_row.last_name} ({$employee_row.employee_code})</option>
{/foreach}
</select>
</div>

<input type="hidden" class="form-control employee_shift_id "  name="employee_shift_id" >


</div>
</div>
</div>


</div>





<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary submit-shift">Submit</button>
</div>
</form>
</div>
</div>
</div>  -->

<!-- view shift details popup -->

<div class="modal fade" id="Shift_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Employee Shift</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="shiftForm" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">
								<div class="mb-3">
									<label for="group_title" class="form-label">Group Title</label>
									<input type="text" class="form-control group_title" id="group_title" name="group_title"  placeholder="Enter Group Title">
								</div>
								<div class="mb-3">
                                    <label for="start_date" class="form-label">Start Date <span class="star_required">*</span></label>
                                    <div class="input-group">
                                    	<input type="text" class="form-control" id="start_date" name="start_date" value="" placeholder="Select Start Date" />
                                    	<span class="input-group-text"><i class="las la-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date <span class="star_required">*</span></label>
                                    <div class="input-group">
                                    	<input type="text" class="form-control" id="end_date" name="end_date" value="" placeholder="Select End Date" />
                                    	<span class="input-group-text"><i class="las la-calendar-alt"></i></span>
                                    </div>
                                </div>
								<div class="mb-3">
									<label for="shift_id" class="form-label">Shift</label>
									<select class="form-select shift_id" name="shift_id" id="shift_id">
										<option value="">Select Shift</option>
										{foreach $shift as $shift_index => $shift_row}
										<option value="{$shift_row.id}">{$shift_row.shift_name} ({$shift_row.shift_type})</option>
										{/foreach}
									</select>
								</div>
								<div class="mb-3">
									<label for="employee_ids" class="form-label">Employee</label>
									<select class="form-select employee_ids" name="employee_ids" id="employee_ids">

										{foreach $employee as $employee_index => $employee_row}
										<option value="{$employee_row.employee_id }">{$employee_row.first_name} {$employee_row.middle_name} {$employee_row.last_name} ({$employee_row.employee_code})</option>
										{/foreach}
									</select>
								</div>


								<input type="hidden" class="form-control employee_shift_id "  name="employee_shift_id" >
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit-shift">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="employee_shift_details" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">

			<div class="modal-header border-bottom">
				<h4 class="modal-title" id="exampleModalToggleLabel">Group  Details</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>


			<div class="modal-body border-bottom">

				<!-- Details satrt-->
				<div class="details">


					<!-- Grp detatils start -->
					<table class="table">
						<tbody >
							<tr>
								<td>	
									<p > <label class="fs-4 mb-1 ">Group Title:</label> <b class="val-box"><span id="group_title_v"></span></b>

									</p>
								</td>
								<td><p ><label class="fs-4 mb-1 ">Shift Name: </label> <b class="val-box"><span id="shift_name_v"></span></b></p>
								</td>
							</tr>
							<tr>
								<td><p><label class="fs-4 mb-1 ">Start Date: </label> <b class="val-box"><span id="start_date_v"></span></b></p>
								</td>
								<td><p><label class="fs-4 mb-1 ">End Date: </label> <b class="val-box"><span id="end_date_v"></span></b></p>
								</td>
							</tr>
							<tr>
								<td><p><label class="fs-4 mb-1 ">Start Time: </label> <b class="val-box"><span id="start_time_v"></span></b></p>
								</td>
								<td><p><label class="fs-4 mb-1 ">End Time: </label> <b class="val-box"><span id="end_time_v"></span></b></p>
								</td>
							</tr>
							<tr>
								<td><p><label class="fs-4 mb-1 ">Shift Type: </label> <b class="val-box"><span id="shift_type_v"></span></b></p>
								</td>
								<td><p><label class="fs-4 mb-1 ">Total Employee: </label> <b class="val-box"><span id="employee_count_v"></span></b></p>
								</td>
							</tr>
						</tbody>
					</table>

					<!--grp detail end  -->
					<h5 class="mb-3">Employee Details</h5>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Employee Code</th>
								<th scope="col">Department</th>
							</tr>
						</thead>
						<tbody class="shift_employee_details">

						</tbody>
					</table>
				</div>

			</div>


			<div class="modal-footer">

				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 19px;">Close</button>
				<!-- <button class="btn btn-primary submit-active" style="font-size: 19px;">Yes</button> -->
			</div>
		</div>
	</div>
</div>

<!-- extra for footer -->
</div>
</div>
</div>
</div>

<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />
<style media="screen">
	.select2-container{
		width: 100% !important;
	}
	.select2-container.select2-container--default.select2-container--open{
		z-index: 1056;
	}

	.select2-container--default .select2-results__option[aria-selected=true] {
	    background-color: #ddd;
	    pointer-events: none;
	    color:#000;
	        color: var(--bs-body-color);
	}
	b.val-box {
		    color: #000000 !important;
	}
	table thead th{
		color: #504d4d;
	}
	.leave-box .input-group {
    width: 100% !important;
}
</style>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
<script src="public/js/employee_shift.js"></script>
{include file="footer.tpl" }


<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Shift Management</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Shift</span>
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
							<th scope="col">Comapny Name</th>
							<th scope="col">Department</th>
							<th scope="col">Shift Name</th>
							<th scope="col">Shift type</th>
							<th scope="col">Start Time</th>
							<th scope="col">End Time</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						{if count($data) > 0}
						{foreach $data as $data_index => $data_row}
						<tr class="leave-request-row">
							<!-- <td>{$data_index + 1}</td> -->
							<td>{$data_row.company_name}</td>
							<td>{$data_row.departmen_name} [{$data_row.department_code}]</td>
							<td>{$data_row.shift_name}</td>
							<td>{$data_row.shift_type}</td>
							<td>{$data_row.start_time}</td>
							<td>{$data_row.end_time}</td>
							<td>{$data_row.action}</td>

						</tr>
						{/foreach}
						{else}
						<tr>
							<td colspan="6">
								<div class="mb-5">
									<img alt="" src="{{$base_url}}public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
									<br />
									<span class="mb-4 no-data-found-message">No shift data found!</span>
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

<div class="modal fade leave-popup-block" id="Shift_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Shift</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="shiftForm" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">


								<div class="mb-3">
									<label for="shift_name" class="form-label">Shift Name</label>
									<input type="text" class="form-control shift_name" id="shift_name" name="shift_name"  placeholder="Enter Shift Name">
								</div>
								<div class="mb-3 select-box-block" {if $user_data['role'] != 'arom'} style="display: none" {/if}>
                                    <label for="company_id" class="form-label">Company</label>
                                    <select class="form-select company_id" name="company_id" id="company_id">
                                        <option value="">Select Company</option>
                                        {foreach from=$company_details item=company_name}
                                            {if $company_name.company_id == $selected_company}
                                                <option value="{$company_name.company_id}" selected>{$company_name.company_name}</option>
                                            {else}
                                                <option value="{$company_name.company_id}">{$company_name.company_name}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="mb-3">
									<label for="department" class="form-label">Department</label>
									<select class="form-select department" name="department" id="department">
										<option value="">Select Department</option>
										{foreach from=$departments item=departments_val}
											<option value="{$departments_val.department_id}">{$departments_val.departmen_name} [{$departments_val.department_code}]</option>
										{/foreach}
									</select>
								</div>
								<div class="mb-3">
									<label for="shift_type" class="form-label">Shift type</label>
									<select class="form-select shift_type" name="shift_type" id="shift_type">
										<option value="">Select Shift Type</option>
										<option value="I">I</option>
										<option value="II">II</option>
										<option value="III">III</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="start_time" class="form-label">Start Time</label>
									<input type="text" class="form-control start_time" id="start_time" name="start_time"  placeholder="Enter Satrt Time">
								</div>
								<div class="mb-3">
									<label for="end_time" class="form-label">End Time</label>
									<input type="text" class="form-control end_time" id="end_time" name="end_time" placeholder="Enter End time" >
								</div>
								<input type="hidden" class="form-control shift_id"  name="id" >


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
</div>
<!-- extra for footer -->
</div>
</div>
</div>
</div>
<style type="text/css">
	.chosen-disabled *{
	    
	    cursor: not-allowed;
	    /* cursor: none; */
	}
</style>
<script type="text/javascript" >
var holiday_dates = {{$holiday_dates|json_encode}};
 var selected_company = {{$selected_company|json_encode}}
</script>

<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
<script src="public/js/shift_management.js"></script>
{include file="footer.tpl" }

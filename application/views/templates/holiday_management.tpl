
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Holiday Management</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Holiday</span>
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
							<th scope="col">Holiday Name</th>
							<th scope="col">Holiday Date</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						{if count($holiday) > 0}
						{foreach $holiday as $holiday_index => $holiday_row}
						<tr class="leave-request-row">
							<!-- <td>{$holiday_index + 1}</td> -->
							<td>{$holiday_row.holiday_name}</td>
							<td>{$holiday_row.holiday_date|date_format:"%d %B %Y"}</td>
							<td>{$holiday_row.action}</td>

					</tr>
					{/foreach}
					{else}
					<tr>
						<td colspan="4">
							<div class="mb-5">
								<img alt="" src="{{$base_url}}public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
								<br />
								<span class="mb-4 no-data-found-message">No holiday data found!</span>
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

<div class="modal fade leave-popup-block" id="employee_holiday_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Holiday</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="holidayForm" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">


								<div class="mb-3">
									<label for="holidayName" class="form-label">Holiday Name</label>
									<input type="text" class="form-control holiday_name" id="holiday_name" name="holiday_name"  placeholder="Enter Holiday Name">
								</div>
								<div class="mb-3">
									<label for="holidayDate" class="form-label">Holiday Date</label>
									<input type="text" class="form-control holiday_date" id="holiday_date" name="holiday_date" placeholder="dd-mm-yy" >
								</div>
								<input type="hidden" class="form-control holiday_id"  name="id" >


							</div>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit-holiday">Submit</button>
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
<script src="public/js/holiday-management.js"></script>
{include file="footer.tpl" }

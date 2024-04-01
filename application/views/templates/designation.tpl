
<div class="main-middle-container">
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Designation</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary">
				<div class="timesheet-summary-lst">
					<button type="button" class="btn btn-primary add-designation add-leave add-action">
						<i class="ti ti-plus"></i>
						<span>Add Designation</span>
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
							<th scope="col">Designation Name</th>
							<th scope="col">Department Name</th>
							<th scope="col">Grads</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">
						{if count($designation) > 0}
						{foreach $designation as $designation_index => $designation_row}
						<tr class="leave-request-row">
							<!-- <td>{$designation_index + 1}</td> -->
							<td>{$designation_row.designation_name}</td>
							<td>{$designation_row.departmen_name}<br>({$designation_row.department_code})</td>
							<td>{$designation_row.grads}</td>
							<td><span  class="edit_holiday me-2 text-secondary" data-id='{$designation_row.id}' data-designation='{$designation_row.designation_name}' data-departmet='{$designation_row.department_id}' data-grads='{$designation_row.grads}'><i title="Edit" class=" la-edit ti ti-edit cursor" ></i></span>
              <span class="delete_designation text-danger" data-id='{$designation_row.id}' ><i class=" la-trash cursor ti ti-trash" title="Remove"></i></span></td>

					</tr>
					{/foreach}
					{else}
					<tr>
						<td colspan="4">
							<div class="mb-5">
								<img alt="" src="{{$base_url}}public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
								<br />
								<span class="mb-4 no-data-found-message">No designation data found!</span>
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

<div class="modal fade leave-popup-block" id="designation_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Designation</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="designation_form" action="javascript:void(0)" method="post">
				<div class="modal-body">
					<div class="main-content">

						<div class="card mb-3 leave-box">
							<div class="row g-0 m-3">
								<div class="col-12 mb-3">
									<label for="designationName" class="form-label">Designation Name</label>
									<input type="text" class="form-control designation_name" id="designation_name" name="designation_name"  placeholder="Enter Designation Name">
								</div>
								<div class="col-12 mb-3">
	                                <div class="department-box ">
	                                    <p class="fs-5 mb-1 fw-bold attendance-lable">Department</p>
	                                    <div class=" select-box">
		                                    <select class="form-select form-control w-100" name="department" id="department">
		                                    	{foreach from=$departmen item=department_val}
		                                            <option value="{$department_val.department_id}" >{$department_val.departmen_name} [{$department_val.department_code}]</option>
		                                        {/foreach}
		                                    </select>
	                                	</div>
	                                </div>
                                </div>
                                <div class="col-12 mb-3">  
	                                <div class="grads-box ">
		                                    <p class="fs-5 mb-1 fw-bold attendance-lable">Grads</p>
		                                    <div class=" select-box">
		                                    <select class="form-select form-control w-100" name="grads" id="grads">
		                                    	 <option value="" >Select Grads</option>
		                                    	 <option value="I" >I</option>
		                                    	 <option value="II" >II</option>
		                                    	 <option value="III" >III</option>
		                                          
		                                    </select>
		                                </div>
	                                </div>

                                    
                            </div>
								<input type="hidden" class="form-control designation_id"  name="designation_id" >


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
<style type="text/css">
	.department-box  .select2-container{
		width: 100% !important;
	}
</style>

<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="public/js/designation.js"></script>
{include file="footer.tpl" }

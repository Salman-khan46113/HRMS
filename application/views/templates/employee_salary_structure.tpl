
<div class="main-middle-container">
	<aside class="right-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between filter-title-bolock">
            <a href="javascript:void(0)" class="text-nowrap logo-img">
                Filter
            </a>
            <div class="close-filter-btn d-xl-none d-block filter-popup cursor-pointer" >
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px -24px;">
                <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: -7px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow-y: scroll;">
                            <div class="simplebar-content" style="padding: 0px 15px;">
                                <ul id="sidebarnav" class="in">
                                    
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Component Name</span>

                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="component_name_search" class="form-control" placeholder="Component Name">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Component Type</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                               <select class="form-select " name="component_type_search" id="component_type_search">
			                                        <option value="">Select Component Type</option>
			                                        {foreach from=$component_type_arr item=component_type}
			                                            <option value="{$component_type.id}">{$component_type.val}</option>
			                                        {/foreach}
			                                    </select>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Component Value</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <input type="text" id="component_value_search" class="form-control number-formatter" placeholder="Component Value">
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Value Type</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                               <select class="form-select " name="type_search" id="type_search">
			                                        <option value="">Select Value Type</option>
			                                        {foreach from=$value_type_arr item=value_type}
			                                            <option value="{$value_type.id}">{$value_type.val}</option>
			                                            
			                                        {/foreach}
			                                    </select>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Is Compulsory</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group">
                                              <select class="form-select " name="is_compulsory_search" id="is_compulsory_search">
			                                        <option value="">Select Is Compulsory</option>
			                                        <option value="Yes">Yes</option>
			                                        <option value="No">No</option>
			                                        
			                                    </select>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="filter-row">
                                        <li class="nav-small-cap">
                                            <span class="hide-menu">Description</span>
                                            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                                        </li>
                                        <li class="sidebar-item">
                                            <div class="input-group ">
                                              <input type="text" class="form-control" id="description_search"  placeholder="Description">
                                              
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 810px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 214px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div>
        </nav>
         <div class="filter-popup-btn">
            <button class="btn btn-primary reset-filter">Reset</button>
            <button class="btn btn-primary search-filter">Search</button>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
	<div class="sub-header att-sub-header">
		<div class="sub-header-left pull-left">
			<h3>Employee Salary Structure</h3>
		</div>
		<div class="sub-header-right pull-right">
			<div class="timesheet-summary icon-box">
				 <div class="timesheet-summary-lst year-drop-down ">
                <select class="form-select form-control" name="year_drop_down" id="year_drop_down">
                    {foreach from=$year_arr key=key_val item=year}
					    {{if $key_val+1 == count($year_arr)}}
					        <option value="{$year}" selected>{$year}</option>
					    {{else}}
							<option value="{$year}" >{$year}</option>
					    {{/if}}
					{/foreach}
                </select>
            </div>
            <div class="timesheet-summary-lst">
                <div class="dropdown grid-drop-down " title="Download CSV">
                        <button class="btn btn-secondary top-btn-row" type="button"  id="downloadCSVBtn">
                            <i class="ti ti-file-type-csv" style="color: black"></i> 
                        </button>
                </div>
            </div>
            <div class="timesheet-summary-lst">
                <div class="dropdown grid-drop-down " title="Download PDF">
                        <button class="btn btn-secondary top-btn-row" type="button"  id="downloadPDFBtn">
                            <i class="ti ti-file-type-pdf" style="color: black"></i> 
                        </button>
                </div>
            </div>
				<div class="timesheet-summary-lst">
                   <div class="dropdown grid-drop-down reset-filter" title="Reset Filter">
                        <button class="btn btn-secondary top-btn-row" type="button"  >
                            <i class="ti ti-refresh " style="color: black"></i> 
                        </button>
                    </div>
                </div>
            <div class="timesheet-summary-lst">
                   <div class="dropdown grid-drop-down filter-popup" title="Filter">
                        <button class="btn btn-secondary top-btn-row" type="button"  >
                            <i class="ti ti-filter " style="color: black"></i> 
                        </button>
                    </div>
            </div>
           {{if $extended_salary_structure_id gt 0}}
			<div class="timesheet-summary-lst">
					<a href="{get_entiry_url('employee_salary_structure','Extend',$employee_id)}" class="btn btn-primary add-department  add-action">
						<i class="ti ti-plus"></i>
						<span>Extend Structure</span>
					</a>
				</div>
			
			{{/if}}
            </div>
		</div>

	</div>
	<div class="inner-container" style="position: static; zoom: 1;">
		<div class="timesheet-container">

			<div class="custom-modal-content custom-content-table-with-fixed-column ">
				
				<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table leave-list-table display" style="border-collapse: collapse;" border-color="#e1e1e1">
					<thead>
						<tr class="text-center">
							<th scope="col">Employee Name</th>
							<th scope="col">Refrence Name</th>
							<th scope="col">CTC</th>
							<th scope="col">Effective From</th>
							<th scope="col">Effective To</th>
							<th scope="col">Added By</th>
							<th scope="col">Added Date</th>
							<th scope="col">Updated By</th>
							<th scope="col">Updated Date</th>
							<th scope="col">Status</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="leave_data_body" tabindex="5001" style="overflow: hidden; outline: none;">

						{foreach $employee_salary_structure as $employee_salary_structure_index => $employee_salary_structure_row}
							<tr class="department-request-row">
								<td>{{$employee_salary_structure_row.employee_name}}</td>
								<td>{{$employee_salary_structure_row.refrence_number}}</td>
								<td>{{$employee_salary_structure_row.ctc_value}}</td>
								<td>{{date_formater($employee_salary_structure_row.effective_from)}}</td>
								<td>{{date_formater($employee_salary_structure_row.effective_to)}}</td>
								<td>{{display_no_character($employee_salary_structure_row.added_by_name)}}</td>
								<td>{{date_formater($employee_salary_structure_row.added_date)}}</td>
								<td>{{display_no_character($employee_salary_structure_row.updated_by_name)}}</td>
								<td>{{date_formater($employee_salary_structure_row.updated_date)}}</td>
								<td class="status-row"><span class="{{$employee_salary_structure_row['status']}}">{{get_status($employee_salary_structure_row['status'])}}</span></td>
							<td>{$employee_salary_structure_row['action']}</td>
								
								
							</tr>
						{/foreach}
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
<script>
    var no_data_message =  {{$no_data_message|json_encode}};
    var selected_company = {{$selected_company|json_encode}}
</script>

<link rel="stylesheet" href="public/css/attendance_sheet.css" />
<link rel="stylesheet" href="public/css/leave.css" />
<link rel="stylesheet" href="public/css/salary_component.css" />
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="public/js/employee_salary_structure.js"></script>
{include file="footer.tpl" }

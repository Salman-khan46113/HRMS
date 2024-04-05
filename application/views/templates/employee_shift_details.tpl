<div class="details">
    <!-- Grp detatils start -->
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Group Title:</label> <b class="val-box"><span id="group_title_v">{{$shiftDetails['group_title']}}</span></b>
                    </p>
                </td>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Shift Name: </label> <b class="val-box"><span id="shift_name_v">{{$shiftDetails['shift_name']}}</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Start Date: </label> <b class="val-box"><span id="start_date_v">{{$shiftDetails['start_date_display']}}</span></b>
                    </p>
                </td>
                <td>
                    <p>
                        <label class="fs-4 mb-1">End Date: </label> <b class="val-box"><span id="end_date_v">{{$shiftDetails['end_date_display']}}</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Start Time: </label> <b class="val-box"><span id="start_time_v">{{$shiftDetails['start_time']}}</span></b>
                    </p>
                </td>
                <td>
                    <p>
                        <label class="fs-4 mb-1">End Time: </label> <b class="val-box"><span id="end_time_v">{{$shiftDetails['end_time']}}</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Shift Type: </label> <b class="val-box"><span id="shift_type_v">{{$shiftDetails['shift_type']}}</span></b>
                    </p>
                </td>
                <td>
                    <p>
                        <label class="fs-4 mb-1">Total Employee: </label> <b class="val-box"><span id="employee_count_v">{{$shiftDetails['employee_count']}}</span></b>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <!--grp detail end  -->
    <h5 class="mb-3">Employee Details</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col " style="text-align: center">Employee Code</th>
                <th scope="col" style="text-align: center">Department</th>
            </tr>
        </thead>
        <tbody class="shift_employee_details">
        	{foreach $employees as $employees_index => $employees_row}
        		<tr>
	                <th scope="col">{$employees_row['first_name']} {$employees_row['last_name']}</th>
	                <th scope="col"  style="text-align: center">{$employees_row['employee_code']}</th>
	                <th scope="col" style="text-align: center">{$employees_row['department']}</th>
	            </tr>
        	{/foreach}
        </tbody>
    </table>
</div>

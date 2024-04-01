{{if count($attendance_sheet) > 0}} {foreach $attendance_sheet as $sem_index => $sem_row}
<tr class="{{if $sem_row['week_off']=='Yes'}}timesheet-week-off{{else if $sem_row['attendance']=='A'}}timesheet-absent{{else}}timesheet-present{{/if}}">
    <td align="center" valign="middle" class="text-center att-date">{{$sem_row['attendance_date']}}</td>
    <td align="center" valign="middle" class="text-center att-time timesheet-shift-row">{{$attendance_in}}</td>
    <td align="center" valign="middle" class="text-center att-time">{{$sem_row['attendance_in_time']}}</td>

    <td align="center" valign="middle" class="text-center att-time timesheet-shift-row">{{$attendance_out}}</td>
    <td align="center" valign="middle" class="text-center att-time">{{$sem_row['attendance_out_time']}}</td>
    <td align="center" valign="middle" class="text-center att-hrs">{{$sem_row['working_hr']}}</td>
    <td align="center" valign="middle" class="text-center att-status">{{$sem_row['attendance']}}</td>
    <td align="center" valign="middle" class="text-center att-action">
        {{if $sem_row['attendance_in_time'] != '--' && $sem_row['attendance_in_time']!= ""}}<i class="las la-edit" data-id="{{$sem_row['attendance_id']}}"></i>{{else}}-{{/if}}
    </td>
</tr>
{/foreach} {{else}}
<tr>
    <td colspan="8">
        <div class="mb-5">
            <img alt="" src="{{$base_url}}public/assets/images/images/no_data_found_new.png" height="150" width="150" class="mt-5" />
            <br />
            <span class="mb-4 no-data-found-message">No timesheet data found!</span>
        </div>
    </td>
</tr>

{{/if}}
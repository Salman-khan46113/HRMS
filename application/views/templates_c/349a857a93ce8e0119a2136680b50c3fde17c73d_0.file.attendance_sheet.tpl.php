<?php
/* Smarty version 4.3.2, created on 2024-04-13 15:25:09
  from '/var/www/html/extra_work/HRMS/application/views/templates/attendance_sheet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661a567dde9026_77912216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '349a857a93ce8e0119a2136680b50c3fde17c73d' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/attendance_sheet.tpl',
      1 => 1713002076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661a567dde9026_77912216 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="main-middle-container">
<div class="sub-header att-sub-header">
    <div class="sub-header-left pull-left">
        <h3>Timesheet</h3>
        
    </div>
    <div class="sub-header-right pull-right">
        <div class="timesheet-summary">
            <div class="timesheet-summary-lst">
                <label>Total Working</label>
                <span id="total_working_hrs"><?php ob_start();
echo $_smarty_tpl->tpl_vars['total_working_hours']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 Hrs</span>
            </div>
            <div class="timesheet-summary-lst year-drop-down ">
                <select class="form-select form-control" name="month_drop_down" id="month_drop_down">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'month', false, 'key_val');
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
?>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['key_val']->value+1 == count($_smarty_tpl->tpl_vars['months']->value)) {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                            <option value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                        <?php ob_start();
} else {
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                         <option value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                        <?php ob_start();
}
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="timesheet-summary-lst">
                <div class="dropdown">
                  <button class="btn btn-secondary top-btn-row" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="las la-fill-drip"></i>
                  </button>
                  <ul class="dropdown-menu p-2 mt-1" aria-labelledby="dropdownMenuButton1">
                    <li title="Present" class="pl-3"><span class="color-box present"></span>Present</li>
                    <li title="Absent" class="pl-3"><span class="color-box absent"></span>Absent</li>
                    <li title="Week Off" class="pl-3"><span class="color-box week_off"></span>Week Off</li>
                    <li title="Correction" class="pl-3"><span class="color-box correction"></span>Correction</li>
                    
                  </ul>
                </div>
            </div>
           
        </div>
        

        
        
    </div>
</div>

<div class="inner-container" style="position: static; zoom: 1;">
    <div class="timesheet-container">

        <div class="custom-modal-content custom-content-table-with-fixed-column data_table_block">
            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table" style="border-collapse: collapse;" border-color="#e1e1e1">
                <thead>
                    <tr>
                        
                        <th align="center" valign="middle" class="text-center att-date">Date</th>
                        <th align="center" valign="middle" class="text-center att-time">Shift Start</th>
                        <th align="center" valign="middle" class="text-center att-time">Time In</th>
                        <th align="center" valign="middle" class="text-center att-time">Shift End</th>
                        <th align="center" valign="middle" class="text-center att-time">Time Out</th>
                        <th align="center" valign="middle" class="text-center att-time">Working Hr</th>
                        <th align="center" valign="middle" class="text-center att-status">Present Absent</th>
                        <th align="center" valign="middle" class="text-center att-action">Action</th>
                    </tr>
                </thead>
                <tbody id="attendence_sheet_data" tabindex="5001" style="overflow: hidden; outline: none;">
                <?php ob_start();
if (count($_smarty_tpl->tpl_vars['attendance_sheet']->value) > 0) {
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attendance_sheet']->value, 'sem_row', false, 'sem_index');
$_smarty_tpl->tpl_vars['sem_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sem_index']->value => $_smarty_tpl->tpl_vars['sem_row']->value) {
$_smarty_tpl->tpl_vars['sem_row']->do_else = false;
?>
                    <tr class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['row_class'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
">
                        <td align="center" valign="middle" class="text-center att-date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_date'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</td>
                        <td align="center" valign="middle" class="text-center att-time timesheet-shift-row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_in']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</td>
                        <td align="center" valign="middle" class="text-center att-time"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_in_time'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</td>
                        

                        <td align="center" valign="middle" class="text-center att-time timesheet-shift-row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_out']->value;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</td>
                        <td align="center" valign="middle" class="text-center att-time"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance_out_time'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</td>
                        <td align="center" valign="middle" class="text-center att-hrs"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['working_hr'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</td>
                        <td align="center" valign="middle" class="text-center att-status"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['attendance'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</td>
                        <td align="center" valign="middle" class="text-center att-action"><?php ob_start();
echo $_smarty_tpl->tpl_vars['sem_row']->value['btn_html'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php ob_start();
} else {
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>

                    <tr >
                        <td colspan="8">
                            <div class="mb-5 ">
                             <img
                                alt=""
                                src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
public/assets/images/images/no_data_found_new.png"
                                height="150"
                                width="150"
                                 class="mt-5"
                            />
                            <br>
                            <span class="mb-4 no-data-found-message">No timesheet data found!</span>
                            </div>
                        </td>
                    </tr>


                <?php ob_start();
}
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
 

                    

                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Correction</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="main-content">
                <div class="card mb-3 in-time-correction-box">
                    <input type="hidden"  value="" id="attendance-id-val">
                    <input type="hidden"  value="" id="attendance-date-val">
                        <div class="row g-0 m-3">
                            
                            <div class="col-8">
                                <div class="ms-3">
                                    <p class="fs-5 mb-1 fw-bold attendance-lable">Attendance In </p>
                                        <span id="attendance-in-time-block">2024-02-29 10:13:53</span>                                    
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <input type="text" class="form-control timepicker" placeholder=" Time (Optional)" readonly="" field_signature="1318412689" form_signature="16953406393666940328" alternative_form_signature="16007236765535082429" visibility_annotation="true" id="in-time-input" data-time="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 out-time-correction-box">
                        <div class="row g-0 m-3">
                            
                            <div class="col-8">
                                <div class="ms-3">
                                    <p class="fs-5 mb-1 fw-bold attendance-lable">Attendance Out</p>
                                        <span id="attendance-out-time-block">2024-02-29 10:13:53</span>                                    
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <input type="text" class="form-control timepicker"  readonly="" field_signature="1318412689" form_signature="16953406393666940328" alternative_form_signature="16007236765535082429" visibility_annotation="true" data-time="" id="out-time-input" value="">
                            </div>
                        </div>
                    </div>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary submit-correction" >Submit</button>
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
    <link rel="stylesheet" href="public/css/attendance_sheet.css" />
    <?php echo '<script'; ?>
 type="text/javascript" >
        var month_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['months']->value);
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/attendance_sheet.js"><?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

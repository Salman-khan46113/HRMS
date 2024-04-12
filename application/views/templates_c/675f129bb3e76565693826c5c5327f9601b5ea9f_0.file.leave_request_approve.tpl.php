<?php
/* Smarty version 4.3.2, created on 2024-04-08 23:08:13
  from '/var/www/html/extra_work/HRMS/application/views/templates/leave_request_approve.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66142b85d42b62_00082384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '675f129bb3e76565693826c5c5327f9601b5ea9f' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/leave_request_approve.tpl',
      1 => 1712597891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66142b85d42b62_00082384 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card mb-3 user-details-block">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['leave_list']->value['leave_id'];?>
" id="leave_request_id" />
    <input type="hidden" value="<?php echo base64_encode(json_encode($_smarty_tpl->tpl_vars['leave_list']->value));?>
" name="" id="user_details_input" />
    <div class="row g-0 m-3">
        <div class="col-2">
            <div class="image-block">
                <img src="<?php echo $_smarty_tpl->tpl_vars['leave_list']->value['image'];?>
" width="100" height="100" />
            </div>
        </div>
        <div class="col-10 employee-detils">
            <div class="row">
                <div class="col-4 p-1">
                    <span class="employee-name employee-name-block"><?php ob_start();
echo $_smarty_tpl->tpl_vars['leave_list']->value['employee_name'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</span>
                    <span class="emp-grid-code" id="employee_code"><?php ob_start();
echo $_smarty_tpl->tpl_vars['leave_list']->value['employee_code'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</span>
                </div>
                <div class="col-4 p-1 location-block">
                    <span class="title-box">Location</span>
                    <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['leave_list']->value['location'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</span>
                </div>
                <div class="col-4 p-1 designation-block">
                    <span class="title-box">Designation</span>
                    <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['leave_list']->value['designation_name'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</span>
                </div>
                <div class="col-4 p-1 department-block">
                    <span class="title-box">Department</span>
                    <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['leave_list']->value['department_name'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</span>
                </div>
                <div class="col-4 p-1 from-date-block">
                    <span class="title-box">From Date</span>
                    <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['leave_list']->value['from_date'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</span>
                </div>
                <div class="col-4 p-1 to-date-block">
                    <span class="title-box">To Date</span>
                    <span class="val-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['leave_list']->value['to_date'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3 user-details-block">
    <div class="row g-0 m-3">
        <div class="col-12 employee-detils">
            <div class="row">
                <div class="col-4 p-1">
                    <span class="title-box">Sick Leave</span>
                    <span class="val-box "><?php ob_start();
echo $_smarty_tpl->tpl_vars['allocated_leaves']->value['SickLeave'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
 Day(s)</span>
                </div>
                <div class="col-4 p-1">
                    <span class="title-box">Paid Leave</span>
                    <span class="val-box "><?php ob_start();
echo $_smarty_tpl->tpl_vars['allocated_leaves']->value['PaidLeave'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
 Day(s)</span>
                </div>
                <div class="col-4 p-1">
                    <span class="title-box">Casual Leave</span>
                    <span class="val-box "><?php ob_start();
echo $_smarty_tpl->tpl_vars['allocated_leaves']->value['CasualLeave'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
 Day(s)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3 leave-box">
    <div class="row g-0 m-3">
        <div class="col-12 text-center">
            <div class="ms-3">
                <div class="radio-toolbar leave_aprove_reject_check">
                    <input type="radio" id="approveAll" name="allReqs" value="approve" />
                    <label for="approveAll" class="me-3"><i class="fas fa-check-circle"></i> Approve </label>

                    <input type="radio" id="denyAll" name="allReqs" value="reject" />
                    <label for="denyAll"><i class="fas fa-times-circle"></i> Reject </label>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}

<?php
/* Smarty version 4.3.2, created on 2024-03-29 23:19:11
  from '/var/www/html/extra_work/employee/application/views/templates/attendance_in_out_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6606ff17aa4a91_01398292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4118b41f74afe1d5cc02a32359196ef27e94dc80' => 
    array (
      0 => '/var/www/html/extra_work/employee/application/views/templates/attendance_in_out_block.tpl',
      1 => 1711734540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606ff17aa4a91_01398292 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="attendance-in-out-block">
	<input type="hidden" class="employee_id_val" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_id_val']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-3 col-4">
                <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
public/img/uploads/employee_profile/<?php ob_start();
echo $_smarty_tpl->tpl_vars['profile_image']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" class="img-fluid rounded-start" ]/>
            </div>
            <div class="col-md-9 col-8">
                <div class="card-body">
                    <h5 class="card-title employee-code"><?php ob_start();
echo $_smarty_tpl->tpl_vars['employee_code']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</h5>
                    <p class="card-text mb-2 employee-name"><?php ob_start();
echo $_smarty_tpl->tpl_vars['first_name']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['middle_name']->value;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['last_name']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</p>
                    <p class="card-text employee-designation"><?php ob_start();
echo $_smarty_tpl->tpl_vars['designation_name']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="attendance-in-block">
    <div class="card mb-3  <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_in_time']->value != '') {
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
disable-box<?php ob_start();
}
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
">
        <div class="row g-0 m-3">
            <div class="<?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value == "Tab") {
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
col-2<?php ob_start();
} else {
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
col-1<?php ob_start();
}
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
">
                <i class="las la-fingerprint"></i>
            </div>
            <div class="<?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value == "Tab") {
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
col-7<?php ob_start();
} else {
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
col-9<?php ob_start();
}
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
">
                <div class="ms-3">
                    <p class="fs-5 mb-1 fw-bold attendance-lable">Attendance In </p>
                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_in_time']->value != '') {
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>

                    	<span><?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_in_time']->value;
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
</span>
                    
                    <?php ob_start();
}
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>

                </div>
            </div>
            <div class="<?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value == "Tab") {
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
col-3 text-right<?php ob_start();
} else {
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
col-2 text-center<?php ob_start();
}
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
">
                <input class="form-check-input" type="checkbox" value="" id="attendance-in-check" <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_in_time']->value != '') {
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
disabled checked <?php ob_start();
}
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
 />
            </div>
        </div>
    </div>
    <div class="card mb-3 <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_out_time']->value != '' || $_smarty_tpl->tpl_vars['attendance_in_time']->value == '') {
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
disable-box<?php ob_start();
}
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
">
        <div class="row g-0 m-3">
            <div class="<?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value == "Tab") {
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
col-2<?php ob_start();
} else {
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
col-1<?php ob_start();
}
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>
">
                <i class="las la-sign-out-alt"></i>
            </div>
            <div class="<?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value == "Tab") {
$_prefixVariable30 = ob_get_clean();
echo $_prefixVariable30;?>
col-7<?php ob_start();
} else {
$_prefixVariable31 = ob_get_clean();
echo $_prefixVariable31;?>
col-9<?php ob_start();
}
$_prefixVariable32 = ob_get_clean();
echo $_prefixVariable32;?>
">
                <div class="ms-3">
                    <p class="fs-5 mb-1 fw-bold attendance-lable">Attendance Out</p>
                   <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_in_time']->value != '') {
$_prefixVariable33 = ob_get_clean();
echo $_prefixVariable33;?>

                    	<span><?php ob_start();
echo $_smarty_tpl->tpl_vars['attendance_out_time']->value;
$_prefixVariable34 = ob_get_clean();
echo $_prefixVariable34;?>
</span>
                    <?php ob_start();
}
$_prefixVariable35 = ob_get_clean();
echo $_prefixVariable35;?>

                </div>
            </div>
            <div class="<?php ob_start();
if ($_smarty_tpl->tpl_vars['type']->value == "Tab") {
$_prefixVariable36 = ob_get_clean();
echo $_prefixVariable36;?>
col-3 text-right<?php ob_start();
} else {
$_prefixVariable37 = ob_get_clean();
echo $_prefixVariable37;?>
col-2 text-center<?php ob_start();
}
$_prefixVariable38 = ob_get_clean();
echo $_prefixVariable38;?>
">
                <input class="form-check-input" type="checkbox" value="" id="attendance-out-check" <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_out_time']->value != '' || $_smarty_tpl->tpl_vars['attendance_in_time']->value == '') {
$_prefixVariable39 = ob_get_clean();
echo $_prefixVariable39;?>
disabled  <?php ob_start();
}
$_prefixVariable40 = ob_get_clean();
echo $_prefixVariable40;?>
 <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_out_time']->value != '') {
$_prefixVariable41 = ob_get_clean();
echo $_prefixVariable41;?>
checked  <?php ob_start();
}
$_prefixVariable42 = ob_get_clean();
echo $_prefixVariable42;?>
/>
            </div>
        </div>
    </div>
    <div class="text-center mb-3 submit-block mt-5 <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_out_time']->value != '' && $_smarty_tpl->tpl_vars['attendance_in_time']->value != '') {
$_prefixVariable43 = ob_get_clean();
echo $_prefixVariable43;?>
hide <?php ob_start();
}
$_prefixVariable44 = ob_get_clean();
echo $_prefixVariable44;?>
">
        <button class="btn btn-outline-primary  pb-2 pt-2" onclick="window.location.reload()">Cancel</button>
    	<?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_in_time']->value == '') {
$_prefixVariable45 = ob_get_clean();
echo $_prefixVariable45;?>

        <button class="btn btn-outline-primary  pb-2 pt-2" id="attendance_in_btn">IN</button>
        <?php ob_start();
}
$_prefixVariable46 = ob_get_clean();
echo $_prefixVariable46;?>

        <?php ob_start();
if ($_smarty_tpl->tpl_vars['attendance_in_time']->value != '' && $_smarty_tpl->tpl_vars['attendance_out_time']->value == '') {
$_prefixVariable47 = ob_get_clean();
echo $_prefixVariable47;?>

        <button class="btn btn-outline-primary  pb-2 pt-2" id="attendance_out_btn">Out</button>
        <?php ob_start();
}
$_prefixVariable48 = ob_get_clean();
echo $_prefixVariable48;?>

    </div>
</div>
<?php }
}

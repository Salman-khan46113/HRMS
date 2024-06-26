<?php
/* Smarty version 4.3.2, created on 2024-05-13 23:18:22
  from '/var/www/html/extra_work/HRMS/application/views/templates/address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664252666429c6_76700068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '212ab2f98aa8f394244d250d2cb2fe802cbcd769' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/address.tpl',
      1 => 1712603968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664252666429c6_76700068 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['bank_data']->value) == 0) {?>
<div class=" address-sub-block form-contain border border-primary rounded-2 border border-2 p-3">
    <!-- <div class="row mb-3">
        <label for="mark_as_default" class="form-label">Mark as Default 
            <input type="checkbox" id="mark_as_default_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"  name="mark_as_default[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" class="default-check" value="Yes"/>
            <i class="ti ti-trash remove-address"></i>
        </div> -->

    <div class="row action-box">
        
        <div class="col-10"></div>
        <div class="col-2">
            <i class="ti ti-trash h2 pe-3 ps-2 float-right cursor remove-address" ></i>
            <div class="float-right pt-1 pe-2">
                 <label class="h4">Default :</label> <input type="checkbox" id="mark_as_default_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
"  name="mark_as_default[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" class="default-check form-check-input  mt-1 ms-2" value="Yes" />
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="bank_name" class="form-label">Bank Name <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="bank_name_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" name="bank_name[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Please enter Bank Name">
        </div>
        <div class="col">
            <label for="bank_address" class="form-label">Bank Address <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="bank_address_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" name="bank_address[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Please enter Bank Address">
            
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="ifsc_code" class="form-label">IFSC Code<span class="star_required">*</span></label>
            <input type="text" class="form-control" id="ifsc_code_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" name="ifsc_code[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Please enter IFSC code">
        </div>
        <div class="col">
            <label for="acc_type" class="form-label">Account Type <span class="star_required">*</span></label>
            <select class="form-select form-control acc_type" name="acc_type[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" id="acc_type_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" >
                <option value="">Select Account Type</option>
                <option value="Current">Current</option>
                <option value="Domestic">Domestic</option>
                <option value="Saving">Saving</option>
                </select>
            

        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="acc_numner" class="form-label">Account Number <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="acc_numner_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" name="acc_numner[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Please enter Account number">
        </div>
        <div class="col">
            <label for="acc_holder" class="form-label">Account Holder Name <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="acc_holder_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" name="acc_holder[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Pan Number">

        </div>
    </div>
</div>
<?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bank_data']->value, 'item_val', false, 'index');
$_smarty_tpl->tpl_vars['item_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['item_val']->value) {
$_smarty_tpl->tpl_vars['item_val']->do_else = false;
?>
<div class="address-sub-block form-contain border border-primary rounded-2 border border-2 p-3">
    <input type="hidden" id="bank_id_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item_val']->value['id'];?>
" name="bank_id[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]">
    <!-- <div class="row mb-3">
        <label for="mark_as_default" class="form-label">Mark as Default
            
            <input type="checkbox" id="mark_as_default_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
"  name="mark_as_default[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" class="default-check" value="Yes" <?php if ($_smarty_tpl->tpl_vars['item_val']->value['default_bank'] == 'Yes') {?> checked <?php }?>/>
            <i class="ti ti-trash remove-address"></i>
        </div> -->
    <div class="row action-box">
        <!-- <input type="hidden" name="bank_id[0]" value="<?php echo $_smarty_tpl->tpl_vars['item_val']->value['id'];?>
" /> -->
        <div class="col-10"></div>
        <div class="col-2">
            <i class="ti ti-trash h2 pe-3 ps-2 float-right cursor remove-address" data-id="14"></i>
            <div class="float-right pt-1 pe-2">
                 <label class="h4">Default :</label> <input type="checkbox" id="mark_as_default_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
"  name="mark_as_default[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" class="default-check form-check-input  mt-1 ms-2" value="Yes" <?php if ($_smarty_tpl->tpl_vars['item_val']->value['default_bank'] == 'Yes') {?> checked <?php }?>/>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="bank_name" class="form-label">Bank Name <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="bank_name_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
" name="bank_name[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Please enter Bank Name" value="<?php echo $_smarty_tpl->tpl_vars['item_val']->value['bank_name'];?>
">
        </div>
        <div class="col">
            <label for="bank_address" class="form-label">Bank Address  <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="bank_address_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
" name="bank_address[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Please enter Bank Address" value="<?php echo $_smarty_tpl->tpl_vars['item_val']->value['branch_address'];?>
">
            
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="ifsc_code" class="form-label">IFSC Code<span class="star_required">*</span></label>
            <input type="text" class="form-control" id="ifsc_code_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
" name="ifsc_code[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Please enter IFSC code" value="<?php echo $_smarty_tpl->tpl_vars['item_val']->value['ifsc_code'];?>
">
        </div>
        <div class="col">
            <label for="acc_type" class="form-label">Account Type <span class="star_required">*</span></label>
            <select class="form-select form-control acc_type" name="acc_type[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" id="acc_type_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
" >
                <option value="">Select Account Type</option>
                <option value="Current" <?php if ($_smarty_tpl->tpl_vars['item_val']->value['account_type'] == 'Current') {?> selected <?php }?>>Current</option>
                <option value="Domestic" <?php if ($_smarty_tpl->tpl_vars['item_val']->value['account_type'] == 'Domestic') {?> selected <?php }?>>Domestic</option>
                <option value="Saving" <?php if ($_smarty_tpl->tpl_vars['item_val']->value['account_type'] == 'Saving') {?> selected <?php }?>>Saving</option>
                </select>
            

        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="acc_numner" class="form-label">Account Number <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="acc_numner_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
" name="acc_numner[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Please enter Account number" value="<?php echo $_smarty_tpl->tpl_vars['item_val']->value['account_no'];?>
">
        </div>
        <div class="col">
            <label for="acc_holder" class="form-label">Account Holder Name <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="acc_holder_<?php ob_start();
echo $_smarty_tpl->tpl_vars['index']->value;
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
" name="acc_holder[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Pan Number" value="<?php echo $_smarty_tpl->tpl_vars['item_val']->value['account_holder_name'];?>
">

        </div>
    </div>
    

</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}

<?php
/* Smarty version 4.3.2, created on 2024-04-08 23:43:37
  from '/var/www/html/extra_work/HRMS/application/views/templates/bank_add_templete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661433d1d47195_21357326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e5e6ac821e30f1001ad9c2c301f5c613abf25e' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/bank_add_templete.tpl',
      1 => 1711358532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661433d1d47195_21357326 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['bank_data']->value) == 0) {?>
<div class="form-contain border border-primary rounded-2 border border-2 p-3">
    <div class="row action-box">
        <input type="hidden" name="bank_id[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" value="">
        <div class="col-10"></div>
        <div class="col-2">
            <i class="ti ti-trash h2 pe-3 ps-2 float-right cursor delete-bank" data-id=""></i>
            <div class="float-right pt-1 pe-2"><label class="h4">Default :</label><input class="form-check-input mt-1 ms-2" type="checkbox" value="Yes" aria-label="Checkbox for following text input " id="default_bank_check_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="defaul_bank[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" /></div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="bank_name" class="form-label">Bank Name<span class="star_required">*</span></label>
            <input type="text" class="form-control" id="bank_name_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="bank_name[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Bank Name" />
        </div>
        <div class="col">
            <label for="branch_address" class="form-label">Branch Address <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="branch_address_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="branch_address[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Branch Address" />
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="ifsc_code" class="form-label">IFSC Code <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="ifsc_code_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="ifsc_code[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="IFSC Code" />
        </div>
        <div class="col">
            <label for="account_type" class="form-label">Account Type<span class="star_required">*</span></label>
            <select class="form-select form-control" name="account_type[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" id="account_type_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                <option value="">Select Account Type</option>
                <option value="Saving">Saving</option>
                <option value="Current">Current</option>
                <option value="Domestic">Domestic</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="account_number" class="form-label">Account Number<span class="star_required">*</span></label>
            <input type="text" class="form-control" id="account_number_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="account_number[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Account Number" />
        </div>
        <div class="col">
            <label for="account_holder_name" class="form-label">Account Holder Name <span class="star_required">*</span></label>
            <input type="text" class="form-control" id="account_holder_name_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="account_holder_name[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" placeholder="Branch Address" />
        </div>
    </div>
</div>

<?php } else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bank_data']->value, 'bank_data_val', false, 'key_val');
$_smarty_tpl->tpl_vars['bank_data_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_val']->value => $_smarty_tpl->tpl_vars['bank_data_val']->value) {
$_smarty_tpl->tpl_vars['bank_data_val']->do_else = false;
?>
        <div class="form-contain border border-primary rounded-2 border border-2 p-3">
            <div class="row action-box">
                <input type="hidden" name="bank_id[<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['id'];?>
">
                <div class="col-10"></div>
                <div class="col-2">
                    <i class="ti ti-trash h2 pe-3 ps-2 float-right cursor delete-bank" data-id="<?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['id'];?>
"></i>
                    <div class="float-right pt-1 pe-2"><label class="h4">Default :</label><input class="form-check-input mt-1 ms-2" id="default_bank_check_<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
" type="checkbox" value="Yes" aria-label="Checkbox for following text input" name="defaul_bank[<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
]" <?php if ($_smarty_tpl->tpl_vars['bank_data_val']->value['default_bank'] == 'Yes') {?>checked<?php }?>/></div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="bank_name" class="form-label">Bank Name<span class="star_required">*</span></label>
                    <input type="text" class="form-control" id="bank_name_<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
" name="bank_name[<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['bank_name'];?>
" placeholder="Bank Name" />
                </div>
                <div class="col">
                    <label for="branch_address" class="form-label">Branch Address <span class="star_required">*</span></label>
                    <input type="text" class="form-control" id="branch_address_<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
" name="branch_address[<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['branch_address'];?>
" placeholder="Branch Address" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="ifsc_code" class="form-label">IFSC Code <span class="star_required">*</span></label>
                    <input type="text" class="form-control" id="ifsc_code_<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
" name="ifsc_code[<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['ifsc_code'];?>
" placeholder="IFSC Code" />
                </div>
                <div class="col">
                    <label for="account_type" class="form-label">Account Type<span class="star_required">*</span></label>
                    <select class="form-select form-control" name="account_type[<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
]"  id="account_type_<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
">
                        <option value="">Select Account Type</option>
                        <option value="Saving" <?php if ($_smarty_tpl->tpl_vars['bank_data_val']->value['account_type'] == 'Saving') {?>selected<?php }?>>Saving</option>
                        <option value="Current" <?php if ($_smarty_tpl->tpl_vars['bank_data_val']->value['account_type'] == 'Current') {?>selected<?php }?>>Current</option>
                        <option value="Domestic" <?php if ($_smarty_tpl->tpl_vars['bank_data_val']->value['account_type'] == 'Domestic') {?>selected<?php }?>>Domestic</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="account_number" class="form-label">Account Number<span class="star_required">*</span></label>
                    <input type="text" class="form-control" id="account_number_<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
" name="account_number[<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['account_no'];?>
" placeholder="Account Number" />
                </div>
                <div class="col">
                    <label for="account_holder_name" class="form-label">Account Holder Name <span class="star_required">*</span></label>
                    <input type="text" class="form-control" id="account_holder_name_<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
" name="account_holder_name[<?php echo $_smarty_tpl->tpl_vars['key_val']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['bank_data_val']->value['account_holder_name'];?>
" placeholder="Branch Address" />
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
}

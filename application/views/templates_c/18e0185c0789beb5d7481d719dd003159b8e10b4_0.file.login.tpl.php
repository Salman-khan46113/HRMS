<?php
/* Smarty version 4.3.2, created on 2024-04-03 18:20:04
  from '/var/www/html/extra_work/HRMS/application/views/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660d507c04fc25_54083106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18e0185c0789beb5d7481d719dd003159b8e10b4' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/login.tpl',
      1 => 1711784779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d507c04fc25_54083106 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize </title>
  <link rel="shortcut icon" type="image/png" href="public/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="public/assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap">


<link rel="stylesheet" href="public/css/custom_toaster.css" />
<!-- loader -->
<link rel="stylesheet" href="public/css/plugin/loader.css" />
<link rel="stylesheet" href="public/css/login.css" />
 <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"><?php echo '</script'; ?>
>

    
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
  
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center outer-div-box">
     <div class="toast">
  
  <div class="toast-content">
    <i class="fas fa-solid fa-check check"></i>

    <div class="message">
      <span class="text text-1">Success</span>
      <span class="text text-2">Your changes has been saved</span>
    </div>
  </div>
  <i class="fa-solid fa-xmark close"></i>

  <!-- Remove 'active' class, this is just to show in Codepen thumbnail -->
  <div class="progress"></div>
</div>
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="javascript:void(0)" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center mb-4">Human Resources management System</p>
                <form action="javascript:void(0)" method="POST" id="login_form">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['user_name']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['password']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-2 ">
                    <div class="form-check ">
                      <input class="form-check-input primary" type="checkbox" value="" name="remember" checked>
                      <label class="form-check-label text-dark " for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
forgot.html">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2 mt-3">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                    <a class="text-primary fw-bold ms-2" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
signup.html">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <?php echo '<script'; ?>
 src="public/js/plugin/loader.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/custom_toaster.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/login.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
<?php
/* Smarty version 4.3.2, created on 2024-04-13 00:14:22
  from '/var/www/html/extra_work/HRMS/application/views/templates/attendance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6619810685d912_59944973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57e731861a58b805a2f99b6291e512be78711c82' => 
    array (
      0 => '/var/www/html/extra_work/HRMS/application/views/templates/attendance.tpl',
      1 => 1712947440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6619810685d912_59944973 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="public/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="public/assets/css/styles.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap">
<link rel="stylesheet" href="public/css/custom_toaster.css" />
<link rel="stylesheet" href="public/css/attendance.css" />

<!-- swal alert css -->
    <link rel="stylesheet" href="public/css/plugin/swal_alert/animate.css" />
    <link rel="stylesheet" href="public/css/plugin/swal_alert/sweetalert2.css" />
  <!-- swal alert css -->

<!-- loader -->
<link rel="stylesheet" href="public/css/plugin/loader.css" />
 <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"><?php echo '</script'; ?>
>
 <!-- swal alert js -->
   <?php echo '<script'; ?>
 src="public/js/plugin/swal_alert/sweetalert2.js"><?php echo '</script'; ?>
>
   <!-- swal alert js -->
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
  
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center outer-div-box">
      <div class="toast ">
      <div class="toast-content">
              <i class="fas fa-solid "></i>

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
          <div class="col-md-8 col-lg-6 col-xxl-8 main-block">
            <div class="card mb-0">
              <div class="card-body pb-0">
                
                
                <div class="row mb-3">
                	
						<div class="col-4 image-block">
							<a href="javascript:void(0)" class="text-nowrap logo-img text-center d-block py-3 w-100 mb-4">
                  <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
public/assets/images/logos/dark-logo.svg" width="140" alt="">
                </a>
				            <div class="cover-image">
				            	<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
public/assets/images/cover.avif"  alt="" >
				            </div>
				        </div>
				        <div class="col attendance-code-entry-box" >
				        	
				        	<a href="javascript:void(0)" class="tab-show-logo text-nowrap logo-img text-center  py-3 w-100 mb-4 " <?php if ($_smarty_tpl->tpl_vars['type']->value == 'web') {?>style="display:none"<?php }?>>
    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
public/assets/images/logos/dark-logo.svg" width="120" alt="">
</a>
				        	<div class="attendance-block mt-2 mb-4">
				        		<div class="attendance-input mb-4">
				        			<div class="row mt-2 p-3">
				        				<div class="col text-right">
				        					<span class="titel-box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['prefix']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
-</span>
				        				</div>
				        				<div class="col text-left">
				        						<input type="text" class="form-control  w-100" id="employee-code" name="employee-code" value="" >
				        				</div>
				        			</div>
				        			
				        		</div>
				        		<div class="attendance-btn mt-2">
									<table class="table">
									 
									  <tbody>
									    <tr class="text-center">
									      
									      <td><button class="btn btn-outline-primary number-btn" data-val="1">1</button></td>
									      <td><button class="btn btn-outline-primary number-btn" data-val="2">2</button></</td>
									      <td><button class="btn btn-outline-primary number-btn" data-val="3">3</button></td>
									    </tr>
									    <tr class="text-center">
									     
									      <td><button class="btn btn-outline-primary number-btn" data-val="4">4</button></td>
									      <td><button class="btn btn-outline-primary number-btn" data-val="5">5</button></td>
									      <td><button class="btn btn-outline-primary number-btn" data-val="6">6</button></td>
									    </tr>
									    <tr class="text-center">
									     
									      <td><button class="btn btn-outline-primary number-btn" data-val="7">7</button></td>
									      <td><button class="btn btn-outline-primary number-btn" data-val="8">8</button></td>
									      <td><button class="btn btn-outline-primary number-btn" data-val="9">9</button></td>
									    </tr>
									    <tr class="text-center">
									     
									      <td><button class="btn btn-outline-primary cancel-btn"><i class="las la-times-circle"></i></button> </td>
									      <td><button class="btn btn-outline-primary number-btn" data-val="0">0</button> </td>
									      <td><button class="btn btn-outline-primary back-btn" ><i class="las la-backspace"></i></button> </td>
									    </tr>
									    
									  </tbody>
									</table>

				        		</div>
				        		<div class="submit-btn-box text-center mt-4">
				        			<button class="btn btn-primary w-100 pb-2 pt-2" id="sumbmit_attendance">Submit</button>
				        		</div>
				        	</div>
				            
				          
				        </div>
				        <div class="col hide attendance-entry-box">
				        	<!-- <div class="attendance-in-out-block ">
				        		<div class="card mb-3" >
									  <div class="row g-0">
									    <div class="col-md-3">
									      <img src="public/img/uploads/employee_profile/pexels-photo-1097456.jpeg" class="img-fluid rounded-start" alt="...">
									    </div>
									    <div class="col-md-9">
									      <div class="card-body">
									        <h5 class="card-title employee-code">MDN-1234</h5>
									        <p class="card-text mb-2 employee-name">Aarbaj A Mulla</p>
									        <p class="card-text employee-designation	">Devloper</p>
									      </div>
									    </div>
									  </div>
									</div>
				        	</div>
				        	<div class="attendance-in-block">
				        		<div class="card mb-3 disable-box" >
									<div class="row g-0 m-3">
										<div class="col-1">
											<i class="las la-fingerprint"></i>
										</div>
										<div class="col-9">
											<div class="ms-3">
												<p class="fs-5 mb-1 fw-bold attendance-lable">Attendance In</p>
												<span>Attendance In</span>
											</div>
											
										</div>
										<div class="col-2 text-center">
											<input class="form-check-input" type="checkbox" value="" id="attendance-in-check" disabled checked>
										</div>
									</div>
				        		</div>
				        		<div class="card mb-3" >
									<div class="row g-0 m-3">
										<div class="col-1">
											<i class="las la-sign-out-alt"></i>
										</div>
										<div class="col-9">
											<div class="ms-3">
												<p class="fs-5 mb-1 fw-bold attendance-lable">Attendance Out</p>
												<span>Attendance Out</span>
											</div>
											
										</div>
										<div class="col-2 text-center">
											<input class="form-check-input" type="checkbox" value="" id="attendance-out-check" >
										</div>
									</div>
				        		</div>
				        		<div class="text-center mb-3 submit-block mt-5" >
									<button class="btn btn-outline-primary w-50 pb-2 pt-2" id="attendance_in_out">Submit</button>
				        		</div>
				             -->
				          
				        </div>
				        
					</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
 
   <?php echo '<script'; ?>
>
    var type =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['type']->value);
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
;
    var prefix = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['prefix']->value);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
;
   <?php echo '</script'; ?>
>
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
 src="public/js/attendance.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}

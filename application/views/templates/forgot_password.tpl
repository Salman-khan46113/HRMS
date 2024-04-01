 <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HRMS </title>
  <link rel="shortcut icon" type="image/png" href="public/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="public/assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap">


<link rel="stylesheet" href="public/css/custom_toaster.css" />
<!-- loader -->
<link rel="stylesheet" href="public/css/plugin/loader.css" />
<link rel="stylesheet" href="public/css/login.css" />
 <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    
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
                  <img src="{{$base_url}}public/assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center mb-4">Human Resources management System</p>
                <form action="javascript:void(0)" method="POST" id="user_verify">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>                  
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2 mt-3">Next</button>
                  
                </form>
                <form action="javascript:void(0)" method="POST" id="otp_verify" class="hide">
                	<input type="hidden" name="email" class="form-control" id="user_email">
                  <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Otp</label>
                    <input type="number" name="otp" class="form-control" >
                  </div> 
                  <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">New Password</label>
                    <input type="text" name="password" class="form-control" id="password">
                  </div>                  
                  <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Conform Password</label>
                    <input type="text" name="confirm_password" class="form-control" >
                  </div> 
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2 mt-3">Submit</button>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <script src="public/js/plugin/loader.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/custom_toaster.js"></script>
  <script src="public/js/forgot_password.js"></script>

</body>

</html>
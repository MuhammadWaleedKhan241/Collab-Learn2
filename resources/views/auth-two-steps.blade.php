<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  Title -->
    <title>NettaAdSoka</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="NettaAdSoka" />
    <meta name="author" content="" />
    <meta name="keywords" content="NettaAdSoka" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href={{asset('images/logos/favicon.ico')}} />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href={{asset('css/style.min.css')}} />
  </head>
  <body>
    <!-- Preloader -->
   
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">
            <div class="col-lg-6 col-xl-8 col-xxl-9">
              <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                <img src="assets/images/logos/dark-logo.png" width="180" alt="">
              </a>
              <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="assets/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
              </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
              <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                <div class="d-flex align-items-center w-100 h-100">
                  <div class="card-body">
                    <div class="mb-5">
                      <h3 class="fw-bolder fs-7 mb-3">Two Step Verification</h3>
                      <p>We sent a verification code to your mobile. Enter the code from the mobile in the field below.</p>
                      <h6 class="fw-bolder">******1234</h6>
                    </div>
                    <form>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-semibold">Type your 6 digits security code</label>
                        <div class="d-flex align-items-center gap-2 gap-sm-3">
                          <input type="text" class="form-control" placeholder="">
                          <input type="text" class="form-control" placeholder="">
                          <input type="text" class="form-control" placeholder="">
                          <input type="text" class="form-control" placeholder="">
                          <input type="text" class="form-control" placeholder="">
                          <input type="text" class="form-control" placeholder="">
                        </div>
                      </div>
                      <a href="javascript:void(0)" class="btn btn-primary w-100 py-8 mb-4">Verify My Account</a>
                      <div class="d-flex align-items-center">
                        <p class="fs-4 mb-0 text-dark">Didn't get the code?</p>
                        <a class="text-primary fw-medium ms-2" href="javascript:void(0)">Resend</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
    <!--  Import Js Files -->
    <script src={{asset('assets/libs/jquery/dist/jquery.min.js')}}></script>
    <script src={{asset('assets/libs/simplebar/dist/simplebar.min.js')}}></script>
    <script src={{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}></script>
    
    <script src={{asset('assets/js/app.min.js')}}></script>
    <script src={{asset('assets/js/app.init.js')}}></script>
    <script src={{asset('assets/js/app-style-switcher.js')}}></script>
    <script src={{aset('assets/js/sidebarmenu.js')}}></script>
    
    <script src={{asset('assets/js/custom.js')}}></script>

  </body>
</html>
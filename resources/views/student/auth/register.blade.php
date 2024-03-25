<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>CollabLearn</title>
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
    <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader">
        <img src="assets/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="assets/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div> --}}
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <!-- <img src="assets/images/logos/dark-logo.png" width="180" alt=""> -->
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="assets/images/backgrounds/login-security.svg" alt="" class="img-fluid"
                                width="500">
                        </div>
                    </div>

                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">

                                <h2 class=" text-center fs-7 fw-bolder">Collablearn</h2>
                                <p class=" text-center">Peer-led collaborative learning and teaching</p>
                                <div>
                                    <p class="text-center fs-7 fw-semibold">Student Register</p>
                                </div>

                                <form method="POST" action="{{ route('student.register') }}">
                                    @csrf
                                    <div class="form-group row">
                                        {{-- <label for="email" class="form-label">{{ __('SessionCode')}}</label> --}}
                                        <label class="form-label">Session Code</label>
                                        <div>
                                            <input id="number" type="number"
                                                class="form-control @error('session_code') is-invalid @enderror"
                                                name="session_code" value="{{ old('session_code') }}" autofocus>

                                            @error('session_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Register</button>
                                </form>
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
    <script src={{asset('assets/js/sidebarmenu.js')}}></script>

    <script src={{asset('assets/js/custom.js')}}></script>
</body>

</html>
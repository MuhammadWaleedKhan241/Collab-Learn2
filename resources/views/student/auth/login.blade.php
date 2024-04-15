<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Collab Learn</title>
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
    <link rel="shortcut icon" type="image/png" href={{ asset('images/logos/favicon.png') }} />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href={{ asset('css/style.min.css') }} />
<style>
    .bg-login
    {
        background: url('images/backgrounds/bg-sudent-signup.jpg');
        background-size:cover;
    }
</style>
</head>

<body>

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8 bg-login">
                        <a href="#" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <!-- <img src="assets/images/logos/dark-logo.png" width="180" alt=""> -->
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">

                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <img src="{{ asset('images/backgrounds/collablearn-logo.png') }}" alt=""
                                class="img-fluid" width="500">

                                <div class="row">
                                    <p class="mb-5 pt-3 fs-7 fw-bolder text-center ">Student Login</p>
                                </div>

                                <form method="POST" action="{{ route('student.submit-login') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="email"
                                            class="form-label">{{ __('Session
                                                                                                                                                                                                                                                                                                                    Code') }}</label>

                                        <div>
                                            <input id="number" type="number"
                                                class="form-control @error('session_code') is-invalid @enderror"
                                                name="session_code" value="{{ old('session_code') }}" required
                                                autofocus>

                                            @error('session_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email"
                                            class="form-label">{{ __('Email
                                                                                                                                                                                                                                                                                                                    ') }}</label>
                                        <div>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>

                                        <div>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        {{-- <div>
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div> --}}
                                        {{-- <a class="text-primary fw-medium" href="auth-forgot-password.html">Forgot
                                            Password ?</a> --}}
                                        <div class="d-flex ">
                                            <div class=" col-4 py-8  rounded-2">
                                                <button type="submit"
                                                    class="btn btn-primary justify-content-between    ">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <p class="fs-4 mb-0 text-dark">Don't have an Account?</p>
                                                <a class="text-primary fw-medium ms-2"
                                                    href="{{ route('student.register') }}">Register</a>
                                            </div>
                                        </div>
                                </form>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Session Code')
                                }}</label>

                            <div class="col-md-6">
                                <input id="number" type="number"
                                    class="form-control @error('code') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    </div>

    <!--  Import Js Files -->
    <script src={{ asset('assets/libs/jquery/dist/jquery.min.js') }}></script>
    <script src={{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}></script>
    <script src={{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>

    <script src={{ asset('assets/js/app.min.js') }}></script>
    <script src={{ asset('assets/js/app.init.js') }}></script>
    <script src={{ asset('assets/js/app-style-switcher.js') }}></script>
    <script src={{ asset('assets/js/sidebarmenu.js') }}></script>

    <script src={{ asset('assets/js/custom.js') }}></script>

</body>

</html>

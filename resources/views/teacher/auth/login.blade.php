{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>CollabLearn
    </title>
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
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="#" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <!-- <img src="assets/images/logos/dark-logo.png" width="180" alt=""> -->
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="{{asset('images/backgrounds/login-security.svg')}}" alt="" class="img-fluid"
                                width="500">
                        </div>
                    </div>

                    <div class="col-xl-5 col-xxl-4">

                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">

                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <h1 class="p-1 fw-bolder text-center">Collablearn</h1>
                                <p class="text-center">Peer-led collaborative learning and teaching</p>

                                <div class="row">
                                    <h2 class="mb-5 pt-3 fs-7 fw-bolder text-center ">Teacher Login</h2>
                                </div>
                                <form method="POST" action="{{ route('teacher.submit-login') }}">
                                    @csrf
                                    {{-- <div class="form-group row">
                                        <label for="email" class="form-label">{{ __('Session
                                            Code')
                                            }}</label>

                                        <div>
                                            <input id="number" type="number"
                                                class="form-control @error('code') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    <div class="form-group row">
                                        <label for="email" class="form-label">{{ __('Email
                                            ')
                                            }}</label>

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
                                        <label for="password" class="form-label">{{
                                            __('Password')
                                            }}</label>

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
                                                    href="{{route('teacher.register')}}">Register</a>
                                            </div>
                                        </div>
                                        {{-- <a class="text-primary fw-medium" href="auth-forgot-password.html">Forgot
                                            Password ?</a> --}}
                                    </div>
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
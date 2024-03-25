{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Collablearn</title>
    <!-- --------------------------------------------------- -->
    <!-- Required Meta Tag -->
    <!-- --------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="NettaAdSoka" />
    <meta name="author" content="" />
    <meta name="keywords" content="NettaAdSoka" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- --------------------------------------------------- -->
    <!-- Favicon -->
    <!-- --------------------------------------------------- -->
    <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
    <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css')}}">

    <link href={{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />

    <link rel="stylesheet" href={{asset('https://unpkg.com/leaflet/dist/leaflet.css')}} />
    <link rel="stylesheet" href={{asset('css/style.min.css')}}>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">>
        <aside class="left-sidebar">
            {{-- @include('navlayoutadmin') --}}
        </aside>
        <div class="body-wrapper">
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="p-2">
                            <i class="ti ti-dots fs-7"></i>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link pe-0" href="" id="drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <div class="user-profile-img">
                                                <img src={{asset('images/profile/user-1.jpg')}} class="rounded-circle"
                                                    width="35" height="35" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up w-25"
                                        aria-labelledby="drop1">
                                        <div class="profile-dropdown position-relative" data-simplebar>
                                            <div class="message-body">
                                                <a href="{{route('student.profile')}}"
                                                    class="py-8 px-7 mt-8 d-flex align-items-center">My Profile</a>

                                                <a href="{{ route('student.password.change') }}"
                                                    class="py-8 px-7 d-flex align-items-center">Change Password</a>

                                                <form action="{{ route('student.logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="py-8 px-7 mt-8 d-flex align-items-center">Log
                                                        Out</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- --------------------------------------------------- -->
            <!-- Header End -->
            <!-- --------------------------------------------------- -->
            <div class="container-fluid">
                {{-- <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h4 class="fw-semibold mb-8">Admin Profile</h4>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="card w-50 mx-auto">
                    <div class="card-body ">
                        <div class="row ">
                            <h2 class="text-center ">Change Password</h2>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="my-3">
                                    <label for="OldPassword" class="form-label">Old Password</label>
                                    <input type="password" class="form-control" id="OldPassword"
                                        placeholder="Enter Old Passord">
                                </div>
                                <div class="mb-3">
                                    <label for="OldPassword" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="OldPassword"
                                        placeholder="New Password">
                                </div>
                                <div class="mb-3">
                                    <label for="OldPassword" class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" id="OldPassword"
                                        placeholder="Confirm New Password ">
                                </div>
                                <button class="btn btn-primary">Change Password</button>
                            </form>
                            {{-- <div class="col-lg-4 ">
                                <div class="ms-4">
                                    <img src="{{asset('images/profile/user-1.jpg')}}" class="rounded-circle" width="100"
                                        height="100" alt="">
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-6">
                                        <h5><b>User Id</b></h5>
                                        <h5><b>Name</b></h5>
                                        <h5><b>Email</b></h5>
                                        <h5><b>Phone</b></h5>
                                        <h5><b>Education</b></h5>
                                    </div>
                                    <div class="col-6">
                                        <h5>1</h5>
                                        <h5>Admin</h5>
                                        <h5>admin@admin.com</h5>
                                        <h5>090078601</h5>
                                        <h5>MBA</h5>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- core files -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/app.init.js')}}"></script>
    <script src="{{asset('js/app-style-switcher.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <script src="assets/js/apps/chat.js"></script>
</body>

</html>
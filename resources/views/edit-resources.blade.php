<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Collablearn</title>
    <!--   Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="NettaAdSoka" />
    <meta name="author" content="" />
    <meta name="keywords" content="NettaAdSoka" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.ico') }}" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href={{ asset('css/style.min.css') }} />
    <link href={{ asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css') }} rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css') }}">

    <link href={{ asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }} />

    <link rel="stylesheet" href={{ asset('https://unpkg.com/leaflet/dist/leaflet.css') }} />
    <link rel="stylesheet" href={{ asset('css/style.min.css') }}>
</head>

<body>
    <!-- Body Wrapper -->

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('navlayout')

        <div class="body-wrapper">
            <!-- Header Start -->
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
                                                <img src={{ asset('images/profile/user-1.jpg') }} class="rounded-circle"
                                                    width="35" height="35" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up w-25"
                                        aria-labelledby="drop1">
                                        <div class="profile-dropdown position-relative" data-simplebar>
                                            <div class="message-body">
                                                <!-- Link to the user's profile -->
                                                <a href="{{ route('admin.profile.show') }}"
                                                    class="py-8 px-7 mt-8 d-flex align-items-center">My
                                                    Profile</a>

                                                <!-- Link to change password page -->
                                                <a href="{{ route('admin.password.change') }}"
                                                    class="py-8 px-7 d-flex align-items-center">Change
                                                    Password</a>

                                                <!-- Logout form -->
                                                <form action="{{ route('admin.logout') }}" method="POST">
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
            <div class="container-fluid bg-light">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form action="{{ route('admin.update.resource', $data->id) }}" method="POST"
                    class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="d-flex">
                        <div class="col-md-6 me-2  ">
                            <label for="validationTooltip01" class="form-label">File
                                title</label>
                            <input type="text" class="form-control" id="validationTooltip01" name="file_title"
                                value="{{ $data->file_title }}">
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip02" class="form-label">File Name</label>
                            <input type="file" class="form-control" id="validationTooltip02" name="file_name"
                                value="{{ $data->file_name }}">
                        </div>
                    </div>

                    <div class="col-12 modal-footer">
                        <button class="btn btn-outline-success" type="submit"
                            data-bs-dismiss="modal">Update</button>
                        <button class="btn btn-outline-danger" type="submit" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            <!-- Header End -->

        </div>
    </div>
    <!-- Customizer -->
    <!-- Import Js Files -->
    <script src={{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src={{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src={{ asset('libs/jquery/dist/jquery.min.js') }}></script>
    <script src={{ asset('libs/simplebar/dist/simplebar.min.js') }}></script>
    <script src={{ asset('libs/bootstrap/ist/js/bootstrap.bundle.min.js') }}></script>
    <!-- core files -->
    <script src={{ asset('js/app.min.js') }}></script>
    <script src={{ asset('js/app.init.js') }}></script>
    <script src={{ asset('js/app-style-switcher.js') }}></script>
    <script src={{ asset('js/sidebarmenu.js') }}></script>
    <script src={{ asset('js/custom.js') }}></script>
    <!-- current page js files -->
    {{-- <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script> --}}
    <script src={{ asset('js/dashboard4.js') }}></script>
    <script src={{ asset('js/Countries.js') }}></script>

</body>

</html>

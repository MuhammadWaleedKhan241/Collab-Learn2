<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Collab learn</title>
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
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.ico') }}" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css') }}"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('css/style.min.css') }}" />
    {{-- <script src="{{asset('https://cdn.tailwindcss.com')}}"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}



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

    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">

                    <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8 text-muted"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">My Case-Studies</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('student.casestudy') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-clipboard"></i>
                                </span>
                                <span class="hide-menu">My Case Studies</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('student.allcasestudies') }}" aria-expanded="false">
                                <span>
                                    <span>
                                        <i class="ti ti-book"></i>
                                    </span>
                                </span>
                                <span class="hide-menu">All Case Studies</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('student.feedback') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">Enter Your Feedback</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
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
                                                <img src={{ asset('images/profile/user-1.jpg') }}
                                                    class="rounded-circle" width="35" height="35"
                                                    alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up w-25"
                                        aria-labelledby="drop1">
                                        <div class="profile-dropdown position-relative" data-simplebar>
                                            <div class="message-body">
                                                <a href="{{ route('student.profile') }}"
                                                    class="py-8 px-7 mt-8 d-flex align-items-center">My
                                                    Profile</a>

                                                <a href="{{ route('student.password.change') }}"
                                                    class="py-8 px-7 d-flex align-items-center">Change
                                                    Password</a>

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
            <!--  Header End -->
            <div class="container-fluid position-relative">
                <p class=" position-absolute mt-2 fs-6 fw-bolder "> My Case Studies</p>
                <button type="button" class="btn btn-outline-success position-absolute end-0 me-2 "
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Upload Case Studies
                </button>
                <div class="card">
                    <div class="d-flex justify-content-end">
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row d-flex">
                                            <div class="mb-4">
                                                <h2 class="fs-4 fw font-semibold">Submit Case study</h2>
                                            </div>
                                            <form action="{{ route('student.submit.casestudy') }}" method="POST">
                                                @csrf
                                                <div class="col-6 mb-3 form-floating-input">
                                                    <input type="text" class="form-control" name="title"
                                                        placeholder="Title" aria-label="First name">
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <input type="text" class="form-control" name="sector"
                                                        placeholder="Sector" aria-label="Last name">
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <input type="text" class="form-control" name="country"
                                                        placeholder="Country" aria-label="First name">
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <input type="text" class="form-control" name=""
                                                        placeholder="Models and frameworks" aria-label="Last name">
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <input type="text" class="form-control" name=""
                                                        placeholder="Models and frameworks" aria-label="Last name">
                                                </div>

                                                <div class="col-6 mb-3">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Attach file</label>
                                                        <input class="form-control" type="file" name="file"
                                                            id="formFile">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-success"
                                                        data-bs-dismiss="modal">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-none mt-9 mb-0">
                            <div class="table-responsive">
                                <table class="table text-nowrap align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th class="fs-4 fw-bolder">Title</th>
                                            <th class="fs-4 fw-bolder">Session </th>
                                            <th class="fs-4 fw-bolder">Attach File</th>
                                            <th class="fs-4 fw-bolder">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-dark ">
                                        <tr>
                                            <div class="container">
                                                @foreach ($data as $records)
                                                    <div class="card mb-3">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $records->title }}</h5>
                                                            <p class="card-text"><strong>Sector:</strong>
                                                                {{ $records->sector }}</p>
                                                            <p class="card-text"><strong>Country:</strong>
                                                                {{ $records->country }}</p>
                                                            <p class="card-text"><strong>Attach File:</strong>
                                                                {{ $records->country }}</p>
                                                            <p class="card-text"><strong>Approved</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Customizer -->
    <!--  Import Js Files -->
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!--  core files -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/app.init.js') }}"></script>
    <script src="{{ asset('js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!--  current page js files -->
    <script src="{{ asset('libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- --------------------------------------------------- -->
    <!-- Title -->
    <!-- --------------------------------------------------- -->
    <title>Comment-Details</title>
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
    <link rel="stylesheet"
        href={{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css') }}
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    <link id="themeColors" rel="stylesheet" href={{ asset('assets/css/style.min.css') }} />
    <script src={{ asset('https://cdn.tailwindcss.com') }}></script>
    <link href={{ asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }} />
    <link href={{ asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css') }} rel="stylesheet">


    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.ico') }}" />
    <!-- Core Css -->

    <link id="themeColors" rel="stylesheet" href={{ asset('css/style.min.css') }} />
    <link href={{ asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css') }} rel="stylesheet">
    <script src={{ asset('https://cdn.tailwindcss.com') }}></script>
    <link href={{ asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }} />
    <link rel="stylesheet" href={{ asset('https://unpkg.com/leaflet/dist/leaflet.css') }} />
    <link rel="stylesheet" href={{ asset('css/style.min.css') }}>
</head>

<body>
    <!-- Preloader -->

    <!-- --------------------------------------------------- -->
    <!-- Body Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- --------------------------------------------------- -->
        <!-- Sidebar -->
        <!-- --------------------------------------------------- -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="index.html" class="text-nowrap logo-img">
                        <!-- <img src="assets/images/logos/dark-logo.png" class="dark-logo" width="180" alt="" /> -->
                        <img src={{ asset('assets/images/logos/light-logo.png') }} class="light-logo" width="180"
                            alt="" />
                    </a>
                    <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8 text-muted"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Comment-Details</span>
                        </li>
                    </ul>
                </nav>
            </div>
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
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link pe-0" href="" id="drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <div class="user-profile-img">
                                                <img src={{ asset('images/profile/user-1.jpg') }}
                                                    class="rounded-circle" width="35" height="35" alt="">
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
            <div class="container-fluid">
                <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <a href="{{ route('teacher.casestudy') }}" class="btn btn-outline-success round-10">
                                    <i class="bi bi-arrow-left fs-5"> </i><b>Case Study</b></a>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-2 overflow-hidden">
                    <div class="card-body p-4">
                        <h2 class="fs-7 fw-semibold my-4">Streaming video way before it was cool, go dark tomorrow</h2>
                        <div class="d-flex align-items-center gap-4">
                            {{-- <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>2252</div>
              <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>2</div> --}}
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-4 mt-7 pt-8">
                            <h4 class="mb-0 fw-semibold">Comments</h4>
                            <span
                                class="badge bg-light-primary text-primary fs-4 fw-semibold px-6 py-8 rounded">1</span>
                        </div>
                        <div class="position-relative">
                            <div class="p-4 rounded-2 bg-light mb-3">
                                <div class="d-flex align-items-center gap-3">
                                    <img src={{ asset('images/profile/user-2.jpg') }} alt=""
                                        class="rounded-circle" width="33" height="33">
                                    <h6 class="fw-semibold mb-0 fs-4">Don Russell</h6>
                                    <div class="d-flex align-items-center fs-2 ms-auto"><i
                                            class="ti ti-point text-dark"></i>Sat, Jan 14
                                    </div>
                                    <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                                </div>
                                <p class="my-3">Es do ujurus nejson imju azgudpi toceztep ji cocicoci bosawrop korze
                                    ta.
                                    Casetlu udumej umocu wanaro webmos ijafa ud muli amja softoj ma pijum.
                                </p>

                            </div>

                        </div>
                        <h4 class="mb-4 fw-semibold">Post Comments</h4>
                        <form>
                            <textarea class="form-control mb-4" rows="5"></textarea>
                            <button class="btn btn-outline-success">Post Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src={{ asset('assets/libs/jquery/dist/jquery.min.js') }}></script>
    <script src={{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}></script>
    <script src={{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>
    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src={{ asset('assets/js/app.min.js') }}></script>
    <script src={{ asset('assets/js/app.init.js') }}></script>
    <script src={{ asset('assets/js/app-style-switcher.js') }}></script>
    <script src={{ asset('assets/js/sidebarmenu.js') }}></script>

    <script src={{ asset('assets/js/custom.js') }}></script>
    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
    <script src={{ asset('assets/js/apps/chat.js') }}></script>
</body>

</html>

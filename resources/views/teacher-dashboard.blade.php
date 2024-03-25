<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Collablearn</title>
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

    <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/favicon.ico')}}" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
    <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css')}}">

    <link href={{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />

    <link rel="stylesheet" href={{asset('https://unpkg.com/leaflet/dist/leaflet.css')}} />
    <link rel="stylesheet" href={{asset('css/style.min.css')}}>
</head>

<body>

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="teacher-dashboard.html" class="text-nowrap logo-img">
                        <!-- <img src="assets/images/logos/dark-logo.png" class="dark-logo" width="180" alt="" /> -->
                        <img src="{{asset('images/logos/light-logo.png')}}" class="light-logo" width="180" alt="" />
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
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('teacher.dashboard')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-clipboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('teacher.casestudy')}}" aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>
                                </span>
                                <span class="hide-menu"> All Case Studies</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('teacher.session')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-new-section"></i>
                                </span>
                                <span class="hide-menu">Sessions</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="body-wrapper">

            <header class="app-header bg-light">
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
                                                <a href="{{route('teacher.profile.show')}}"
                                                    class="py-8 px-7 mt-8 d-flex align-items-center">My Profile</a>

                                                <a href="{{ route('teacher.password.change') }}"
                                                    class="py-8 px-7 d-flex align-items-center">Change Password</a>

                                                <form action="{{ route('teacher.logout') }}" method="POST">
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

            <!-- Header End -->
            <div class="container-fluid">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <div class="position-relative">
                            <div class=" border-2 border-primary rounded-circle">

                                <img src="{{asset('images/profile/user-1.jpg')}}" class="rounded-circle m-1" alt="user1"
                                    width="60" />
                            </div>
                        </div>
                        <div>
                            <h4 class="fw-semibold">Hi, <span class="text-dark">Teacher</span>
                            </h4>
                            <span>Cheers and Happy Activities</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-8 card-body border-0 shadow-md rounded">
                        <h4 class="m-3 fw-bolder fs-6">
                            Countries Represented
                        </h4>
                        <div id="vmap" style="margin:0 auto;width:100%;height:500px;"></div>
                    </div>
                    <div class="card-body col-4 ms-2 shadow-md border-0 d-flex flex-col ">
                        <h2 class="m-3  fw-bolder fs-6">Summary</h2>
                        <div class="m-4">
                            <h4 class="fw-semibold fs-5">2</h4>
                            <p class="fw-semibold">Enrolled Students</p>
                        </div>
                        <div class="m-4">
                            <h3 class="fw-semibold fs-5">2</h3>
                            <p class="fw-semibold">Sessions</p>
                        </div>
                        <div class="m-4">
                            <h3 class="fw-semibold fs-5">2</h3>
                            <p class="fw-semibold">Case Studies</p>
                        </div>
                        <div class="m-4">
                            <h3 class="fw-semibold fs-5">2</h3>
                            <p class="fw-semibold">All Comments</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex">
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bolder fs-6">Frameworks & Models</h5>
                                <canvas id="myChart" aria-label="chart" role="img"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch ms-2">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bolder fs-6">Sectors</h5>
                                <canvas id="myChart1" aria-label="chart" role="img"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid over -->
    </div>

    <!-- Import Js Files -->
    <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- core files -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/app.init.js')}}"></script>
    <script src="{{asset('js/app-style-switcher.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- current page js files -->
    <script src="{{asset('js/dashboard5.js')}}"></script>
    <script src="{{asset('js/apex-chart/apex.pie.init.js')}}"></script>
    <script src="{{asset('js/chart-teacher1.js')}}"></script>
    <script src="{{asset('js/custom-teacher1.js')}}"></script>
    <script src="{{asset('js/chart-teacher2.js')}}"></script>
    <script src="{{asset('js/custom-teacher2.js')}}"></script>



    <script src="{{asset('https://code.jquery.com/jquery-latest.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.world.js')}}"></script>

    <script type="text/javascript">
        var countries = '';
        
            function getCountryData() {
                    // $.ajax({
                    //     url: 'countries.json',
                    //     type: 'get',
                    //     success: function (res) {
                    //         countries = JSON.parse(res);
                    //     }
                    // });
                    $.ajax({
                    url: "countries.json",
                    type: 'get',
                    dataType: 'json', // Specify the data type
                    success: function (res) {
                    console.log(res); // Verify the response
                    countries = res; // Assign the response directly
                    },
                    error: function (xhr, status, error) {
                    console.error("Error fetching country data:", error);
                    }
                    });
            }
        
                getCountryData();
        
                $(document).ready(function () {
                    $("#vmap").vectorMap({
                    map: 'world_en',
                    backgroundColor: '#215196',
                    borderColor: '#38a3a5',
                    color: '#f6fff8',
                    hoverOpacity: 0.7,
                    selectedColor: '#38a3a5',
                    enableZoom: true,
                    enableDrag: true,
                    showTooltip: true,
                    normalizeFunction: 'polynomial',
                    onLabelShow: function (event, label, code) {
                        code = code.toUpperCase();
                        country_name = countries[code];
                        label.html('<strong>' + country_name + '</strong>');
                        }
                });
            });
    </script>
</body>

</html>
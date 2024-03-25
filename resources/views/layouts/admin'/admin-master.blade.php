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
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <!--  Favicon -->
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

        @include('sidebar')
        <!-- Sidebar End -->
        <!-- Main wrapper -->
        <div class="body-wrapper">


            {{-- navbar --}}
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
                                                    class="py-8 px-7 mt-8 d-flex align-items-center">My Profile</a>

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
            {{-- body --}}
            <div class="container-fluid">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <div class="position-relative">
                            <div class=" border-2 border-primary rounded-circle">

                                <img src="{{ asset('images/profile/user-1.jpg') }}" class="rounded-circle m-1"
                                    alt="user1" width="60" />
                            </div>
                        </div>
                        <div>
                            <h4 class="fw-semibold">Hi, <span class="text-dark">Admin</span>
                            </h4>
                            <span>Cheers and Happy Activities</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-8 card-body border-0 shadow-md rounded">
                        <h4 class="m-3 fw-bolder">
                            Countries Represented
                        </h4>
                        <div id="vmap" style="margin:0 auto;width:100%;height:500px;"></div>
                    </div>
                    <div class="card-body col-4 ms-2 shadow-md border-0 d-flex flex-col ">
                        <h4 class="m-3  fw-bolder">Summary</h4>
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
                    <div class="col-md-6 col-lg-6  d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body shadow-md  border-0">
                                <h5 class="card-title fw-bolder fs-6">Frameworks & Models</h5>
                                <canvas id="myChart" aria-label="chart" role="img"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 d-flex border-0 align-items-stretch ms-2">
                        <div class="card w-100">
                            <div class="card-body shadow-md border-0">
                                <h5 class="card-title fw-bolder fs-6">Sectors</h5>
                                <canvas id="myChart1" aria-label="chart" role="img"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src={{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>

    <script src={{ asset('libs/jquery/dist/jquery.min.js') }}></script>

    <script src={{ asset('libs/simplebar/dist/simplebar.min.js') }}></script>



    <script src={{ asset('js/app.min.js') }}></script>

    {{-- <script src={{asset('js/app.init.js')}}></script> --}}

    {{-- <script src={{asset('js/app-style-switcher.js')}}></script> --}}

    <script src={{ asset('js/sidebarmenu.js') }}></script>
    {{-- <script src={{asset('assets/js/custom.js')}}></script> --}}
    <script src={{ asset('js/custom.js') }}></script>

    <script src={{ asset('js/dashboard5.js') }}></script>
    <script src={{ asset('js/chart.js') }}></script>
    <script src={{ asset('js/custom1.js') }}></script>
    <script src={{ asset('js/chart2.js') }}></script>
    <script src={{ asset('js/custom2.js') }}></script>




    <script src="{{ asset('https://code.jquery.com/jquery-latest.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.world.js') }}"></script>

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
                success: function(res) {
                    console.log(res); // Verify the response
                    countries = res; // Assign the response directly
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching country data:", error);
                }
            });
        }

        getCountryData();

        $(document).ready(function() {
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

                onLabelShow: function(event, label, code) {
                    code = code.toUpperCase();
                    country_name = countries[code];
                    label.html('<strong>' + country_name + '</strong>');
                }
            });
        });
    </script>
</body>

</html>

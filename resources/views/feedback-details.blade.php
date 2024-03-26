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
    <link rel="shortcut icon" type="image/png" href={{ asset('images/logos/favicon.ico') }} />
    <link id="themeColors" rel="stylesheet" href={{ asset('css/style.min.css') }} />
    <link href={{ asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css') }} rel="stylesheet">

    <link href={{ asset('cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }} />
    <script src={{ asset('https://cdn.tailwindcss.com') }}></script>
    <script src={{ asset('libs/bootstrap/ist/js/bootstrap.bundle.min.js') }}></script>

    <!-- Owl Carousel -->
    <link rel="stylesheet" href={{ asset('libs/owl.carousel/dist/assets/owl.carousel.min.css') }}>
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href={{ asset('css/style.min.css') }} />
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <aside class="left-sidebar">

        </aside>
        <div class="body-wrapper">
            <!-- Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="container-fluid bg-light">
                {{-- <h1 class="fs-7">{{$title}}</h1> --}}
                <h1 class="fs-6 fw-bolder">Feedback</h1>
            </div>
            {{-- @foreach ($data as $record) --}}
            {{-- @dump(record) --}}
            <div class="container-fluid">
                <div class="d-flex flex-wrap justify-content-between gap-3 ">
                    <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column  pb-0 ">
                        <p class="fw-semibold fs-4"class="fw-semibold">Student Name</p>
                        <p>{{ $data->student?->name }}</p>
                        {{-- <p> {{ $data->student->name }}</p> --}}
                        {{-- <p>{{$data->student ? $data->student->name : '---'}}</p> --}}
                    </div>
                    <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column  pb-0 ">
                        <p class="fw-semibold fs-4">Gender</p>
                        <p>{{ $data->gender }}</p>
                    </div>
                    <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column  pb-0 ">
                        <p class="fw-semibold fs-4">Age</p>
                        <p>{{ $data->age }}</p>
                    </div>
                    <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column  pb-0 ">
                        <p class="fw-semibold fs-4">Number of years of professional experience:</p>
                        <p> {{ $data->experience }} </p>
                    </div>
                    <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column">
                        <p class="fw-semibold fs-4">Sector of experience :</p>
                        <p class=" pfont">{{ $data->sectorexperiance }}</p>
                    </div>
                    <div class=" col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column ">
                        <p class=" fw-semibold fs-4">Number of years of formal education: </p>
                        <p class=" pfont">{{ $data->educatuionYear }}</p>
                    </div>
                    <div class=" col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column">
                        <p class=" fw-semibold fs-4">Which geographical location are you referring to you in your case
                            study?
                        </p>
                        <p>{{ $data->geolocation }}</p>
                    </div>
                    <div class=" col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column">
                        <p class=" fw-semibold fs-4">Have you ever used your background experience in a classroom
                            learning
                            experience before?</p>
                        <p>{{ $data->useexpbefore }}</p>
                    </div>
                    <div class=" col-11  col-md-3 d-flex justify-content-between flex-column">
                        <p class="fw-semibold fs-4">Did you find it useful?</p>
                        <p>{{ $data->useful }}</p>
                    </div>
                    <div class="col-11 d-flex justify-content-between flex-column">
                        <p class="fw-semibold fs-4">Did using your own background experience help you understand
                            Strategic
                            Management better?</p>
                        <p>{{ $data->understandingsm }}</p>
                    </div>
                    <div class="col-11 d-flex justify-content-between flex-column">
                        <p class="fw-semibold fs-4">Did this session improve your understanding of topics related to
                            Strategic
                            Management?</p>
                        <p>{{ $data->ownbackexpunderstandingstratmang }}</p>
                    </div>

                    <div class="col-11 d-flex justify-content-between flex-column">
                        <p class="fw-semibold fs-4">Would you like to build your experience into your learning on the
                            course
                            more? Please give reasons</p>
                        <p>{{ $data->explnyourlearn }}</p>
                    </div>
                    <div class="col-11 d-flex justify-content-between flex-column">
                        <p class="fw-semibold fs-4">Did you like talking about your background experience in the
                            classroom?</p>
                        <p>{{ $data->backexpinclass }}</p>
                    </div>
                    <div class="col-11 d-flex justify-content-between flex-column">
                        <p class="fw-semibold fs-4">Did you learn from other people and their background experiences? Is
                            so,
                            how and if not, why?</p>
                        <p>{{ $data->learnfromother }}</p>
                    </div>
                    <div class="col-11 d-flex justify-content-between flex-column">
                        <p class="fw-semibold fs-4">Which aspect(s) do you think could be improved for the future?</p>
                        <p>{{ $data->improvedinfuture }}</p>
                    </div>
                    <div class="col-11 d-flex justify-content-between flex-column">
                        <p class="fw-semibold fs-4">Any other comments you would like to make</p>
                        <p>{{ $data->anyothercomment }}</p>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
        {{-- @include('layouts.partials.feedback',[
        'title'=>$title
        ]) --}}



        <!-- Customizer -->
        <!-- Import Js Files -->
        <script src={{ asset('libs/jquery/dist/jquery.min.js') }}></script>
        <script src={{ asset('libs/simplebar/dist/simplebar.min.js') }}></script>

        <!-- core files -->
        <script src={{ asset('js/app.min.js') }}></script>
        <script src={{ asset('js/app.init.js') }}></script>
        <script src={{ asset('js/app-style-switcher.js') }}></script>
        <script src={{ asset('js/sidebarmenu.js') }}></script>
        <script src={{ asset('js/custom.js') }}></script>
        <!-- current page js files -->
        <script src={{ asset('js/dashboard2.js') }}></script>

    </div>
</body>

</html>

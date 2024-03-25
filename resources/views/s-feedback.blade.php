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
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href={{ asset('css/style.min.css') }} />
    <link href={{ asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css') }} rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css') }}">

    <link href={{ asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }} />

    <link rel="stylesheet" href={{ asset('https://unpkg.com/leaflet/dist/leaflet.css') }} />
    <link rel="stylesheet" href={{ asset('css/style.min.css') }}>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="manage-tutor.html  " class="text-nowrap logo-img">
                        <!-- <img src="assets/images/logos/dark-logo.png" class="dark-logo" width="180" alt="" /> -->
                        <img src="assets/images/logos/light-logo.png" class="light-logo" width="180"
                            alt="" />
                    </a>
                    <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8 text-muted"></i>
                    </div>
                </div>

                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Feedback</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('student.casestudy') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-clipboard"></i>
                                </span>
                                <span class="hide-menu">My Case Study</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('student.allcasestudies') }}" aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>
                                </span>
                                <span class="hide-menu">All Case Studies</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('student.feedback') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">Enter your Feedback</span>
                            </a>
                        </li>
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
            <div class="container-fluid bg-light">
                <p class="fs-7 fw-bolder">Enter Feedback</p>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <div class="container mt-3 ">
                    <div class="row justify-between align-items-center">
                        <form action="{{ route('feedback.store') }}" method="POST"
                            class="row g-3 col-12 m-auto bg-white rounded p-4">
                            @csrf
                            <div class="col-md-6 mb-3">
                                <label class="form-label d-block fs-4 fw-bolder">Gender:</label>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id=""
                                        value="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id=""
                                        value="">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label d-block fs-4 fw-bolder">Age:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="age" id="age"
                                        value="">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        21-25
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="age" id="age"
                                        value="">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        26-30
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="age" id="age"
                                        value="">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        31-35
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="age" id="age"
                                        value="36-40">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        36-40
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="age" id="age"
                                        value="41-50">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        41-50
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fs-4 fw-bolder">Number of years of professional
                                    Experience:</label>
                                <input type="number" class="form-control" name="experience" id="experience"
                                    value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fs-4 fw-bolder">Number of years of formal education(including
                                    your current
                                    Master’s
                                    programme):</label>
                                <input type="number" class="form-control" name="educationyear" id="education_year"
                                    value=""required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fs-4 fw-bolder">Sector of Experiance (in case of more than
                                    one, please list all
                                    sectors in
                                    which you have worked previously):</label>
                                <textarea type="text" class="form-control" name="sectorexperiance" id="sector_experiance"></textarea>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label class="form-label fs-4 fw-bolder">Which geographical location are you referring
                                    to you in your
                                    case study?
                                </label>
                                <input type="text" class="form-control" name="geolocation" id="geo_location"
                                    value="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label d-block fs-4 fw-bolder">Have you ever used your background
                                    experience in a
                                    classroom learning
                                    experience before? </label>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="useexperiencebefore"
                                        id="use_experience_before" value="Yes">
                                    <label class="form-check-label" for="useExpYes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="useexperiencebefore"
                                        id="use_experience_before" value="No">
                                    <label class="form-check-label" for="useExpNo">
                                        No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="useexperiencebefore"
                                        id="use_experience_before" value="Maybe">
                                    <label class="form-check-label" for="useExpMaybe">
                                        Maybe
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label d-block fs-4 fw-bolder">Did you find it useful?</label>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="usefull" id="useful"
                                        value="Yes">
                                    <label class="form-check-label" for="usefulYes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="usefull" id="useful"
                                        value="No">
                                    <label class="form-check-label" for="usefulNo">
                                        No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="usefull" id="useful"
                                        value="Maybe">
                                    <label class="form-check-label" for="usefulMaybe">
                                        Maybe
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label d-block fs-4 fw-bolder">Did using your own background
                                    experience help you understand Strategic Management better?</label>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio"
                                        name="ownbackexpunderstandingstratmang"
                                        id="own_back_exp_understanding_strat_mang" value="Yes">
                                    <label class="form-check-label" for="OwnBackYes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        name="ownbackexpunderstandingstratmang"
                                        id="own_back_exp_understanding_strat_mang" value="No">
                                    <label class="form-check-label" for="OwnBackNo">
                                        No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio"
                                        name="ownbackexpunderstandingstratmang"
                                        id="own_back_exp_understanding_strat_mang" value="Maybe">
                                    <label class="form-check-label" for="OwnBackMaybe">
                                        Maybe
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label d-block fs-4 fw-bolder">Did this session improve your
                                    understanding of topics
                                    related to
                                    Strategic Management?</label>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="understandingsm"
                                        id="understanding_strategic_managment">
                                    <label class="form-check-label" for="understandingYes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="understandingsm"
                                        id="understanding_strategic_managment" value="No">
                                    <label class="form-check-label" for="understandingNo">
                                        No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="understandingsm"
                                        id="understanding_strategic_managment" value="Maybe">
                                    <label class="form-check-label" for="understandingMaybe">
                                        Maybe
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label d-block fs-4 fw-bolder" for="explnyourlearn">Would you like
                                    to build your
                                    experience into your learning on the course more? Please give reasons.</label>
                                <textarea rows="4" type="text" class="form-control" name="explainyourlearn" id="explain_your_learn"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label d-block fs-4 fw-bolder" for="BackExpInClass">Did you like
                                    talking about
                                    your background experience in the classroom?</label>
                                <textarea rows="4" type="text" class="form-control" name="backexperienceinclass"
                                    id="back_experience_in_class"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label d-block fs-4 fw-bolder" for="LearnFromOther">Did you learn
                                    from other
                                    people and their background experiences? Is so, how and if not, why?</label>
                                <textarea rows="4" type="text" class="form-control" name="learnfromother" id="learn_from_other"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label d-block fs-4 fw-bolder" for="ImprovedInFuture">Which
                                    aspect(s) do you think
                                    could be improved for the future?</label>
                                <textarea rows="4" type="text" class="form-control" name="improvedinfuture" id="improved_in_future"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label d-block fs-4 fw-bolder" for="AnyOtherComment">Any other
                                    comments you would
                                    like to make?</label>
                                <textarea rows="4" class="form-control" name="anyothercomment" id="any_other_comment"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check position-relative">
                                    <input class="form-check-input" type="checkbox" name="permission"
                                        id="permission">
                                    <label class="form-check-label fw-semibold" for="flexCheckChecked">
                                        Your responses and submitted cases will be used anonymously for research and
                                        publication purposes.Please tick here for your consent for your comments and
                                        data to be used
                                        anonymously
                                    </label>
                                    <button type="submit" class="btn btn-outline-success">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Import Js Files -->
            <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
            <script src="{{ asset('libs/simplebar/dist/simplebar.min.js') }}"></script>
            <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
            <!-- core files -->
            <script src="{{ asset('js/app.min.js') }}"></script>
            <script src="{{ asset('js/app.init.js') }}"></script>
            <script src="{{ asset('js/app-style-switcher.js') }}"></script>
            <script src="{{ asset('js/sidebarmenu.js') }}"></script>
            <script src="{{ asset('js/custom.js') }}"></script>
            <!-- current page js files -->
            {{-- <script src="{{asset('libs/apexcharts/dist/apexcharts.min.js')}}"></script> --}}
            <script src="{{ asset('js/dashboard2.js') }}"></script>
</body>

</html>

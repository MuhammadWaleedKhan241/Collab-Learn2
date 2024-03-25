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
    {{--
  <link rel="shortcut icon" type="image/png" href={{asset('images/logos/favicon.ico')}} />
  <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
  <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

  <script src={{asset('https://cdn.tailwindcss.com')}}></script>
  <link href={{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />

  <!-- Owl Carousel -->
  <link rel="stylesheet" href={{asset('libs/owl.carousel/dist/assets/owl.carousel.min.css')}}>
  <!-- Core Css -->
  <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} /> --}}
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
                {{-- <h1 class="fs-7">{{$title}}</h1> --}}
                <h1 class="fs-6 fw-bolder">Feedback</h1>

                <div class="container mt-3 ">
                    <div class="row justify-between align-items-center">
                        <form class="row g-3 col-12 m-auto bg-white rounded p-4">
                            <div>
                                <table class="table text-nowrap align-middle mb-1 table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="fs-4 fw-bolder">Student Name</th>
                                            <th class="fs-4 fw-bolder">Gender</th>
                                            <th class="fs-4 fw-bolder">Age</th>
                                            <th class="fs-4 fw-bolder">Experience</th>
                                            <th class="fs-4 fw-bolder">Education Year</th>
                                            <th class="fs-4 fw-bolder">Geo Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $record)
                                            <tr>
                                                <td>{{ $record->name }}</td>
                                                <td>{{ $record->gender }}</td>
                                                <td>{{ $record->age }}</td>
                                                <td>{{ $record->experience }}</td>
                                                <td>{{ $record->educationyear }}</td>
                                                <td>{{ $record->geolocation }}</td>
                                                <th><a
                                                        href="{{ route('admin.feedback-detail', ['id' => $record->id]) }}"><i
                                                            class="fa fa-comments"></i></a></th>
                                                {{-- <th> <a class="btn btn-outline-success"
                                                        href="{{ route('admin.feedback-details' . $record->id) }}"><i
                                                            class="fa fa-comments" x></i></a>
                                                </th> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="table-responsive table-striped table-hover ">
                <table class="table text-nowrap align-middle mb-0 table-striped table-hover ">
                  <thead>
                    <tr>
                      <th>User Id</th>
                      <th class="ps-0">Student Name</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Experience</th>
                      <th>Education Year</th>
                      <th>Sector Experience</th>
                      <th>Geo location</th>
                      <th>Use Exp. Before</th>
                      <th>Use full</th>
                      <th>Own Back Exp Understanding Strat Mang. </th>
                      <th>Understanding SM</th>
                      <th>Exp. In Your Learn</th>
                      <th>Back Exp. In Class</th>
                      <th>Learn From Other</th>
                      <th>Improved In Future</th>
                      <th>AnyOther Comment</th>
                    </tr>
                  </thead>
                  <tbody class="text-dark ">
                    @foreach ($data as $record)
                    <tr>
                      <td>{{$record->id}} </td>
                      <td>{{$record->name}}</td>
                      <td>{{$record->Gender}}</td>
                      <td>{{$record->Age}}</td>
                      <td>{{$record->Experience}}</td>
                      <td>{{$record->EducatuionYear}}</td>
                      <td>{{$record->SectorExperiance}}</td>
                      <td>{{$record->GeoLocation}}</td>
                      <td>{{$record->UseExpBefore}}</td>
                      <td>{{$record->Usefull}}</td>
                      <td>{{$record->OwnBackExpUnderstandingStratMang}}</td>
                      <td>{{$record->UnderstandingSM}}</td>
                      <td>{{$record->ExpInYourLearn}}</td>
                      <td>{{$record->BackExpInClass}}</td>
                      <td>{{$record->LearnFromOther}}</td>
                      <td>{{$record->ImprovedInFuture}}</td>
                      <td>{{$record->AnyOtherComment}}</td>
                      <td>{{$record->name}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div> --}}
                        </form>
                    </div>
                </div>
            </div>
            {{-- @include('layouts.partials.feedback',[
      'title'=>$title
      ]) --}}
        </div>
        <!-- Customizer -->
        <!-- Import Js Files -->
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
        <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src={{ asset('js/dashboard2.js') }}></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>NettaAdSoka</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
    <!-- Preloader -->
    {{-- <div class="preloader">
    <img src="{{asset('images/logos/favicon.ico')}}" alt="loader" class="lds-ripple img-fluid" />
  </div> --}}
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
                        <img src="assets/images/logos/light-logo.png" class="light-logo" width="180"
                            alt="" />
                    </a>
                    <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8 text-muted"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->

            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- --------------------------------------------------- -->
        <!-- Main Wrapper -->
        <!-- --------------------------------------------------- -->
        <div class="body-wrapper">
            <!-- --------------------------------------------------- -->
            <!-- Header Start -->
            <!-- --------------------------------------------------- -->
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
                </nav>
            </header>
            <!-- --------------------------------------------------- -->
            <!-- Header End -->
            <!-- --------------------------------------------------- -->
            <div class="container-fluid">
                <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <a href="{{ route('student.casestudy') }}" class="btn btn-outline-success round-10">
                                    <i class="bi bi-arrow-left fs-5"> </i><b>Case Study</b></a>
                                </ol>
                            </div>
                            <div class="col-3">
                                <div class="text-center mb-n5">
                                    <img src="assets/images/breadcrumb/ChatBc.png" alt=""
                                        class="img-fluid mb-n4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-2 overflow-hidden">
                    <div class="card-body p-4">
                        <h2 class="fs-7 fw-semibold my-4">{{ $casestudy->title }}</h2>
                        <div class="d-flex align-items-center gap-4">
                            {{-- <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>2252</div>
                         <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>2</div> --}}
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-4 mt-7 pt-8">
                            <h4 class="mb-0 fw-bolder">Comments</h4>
                            <span
                                class="badge bg-light-success text-primary fs-4 fw-semibold px-6 py-8 rounded">1</span>
                        </div>
                        @foreach ($comments as $comment)
                            <div class="position-relative">
                                <div class="p-4 rounded-2 bg-light mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src={{ asset('images/profile/user-2.jpg') }} alt=""
                                            class="rounded-circle" width="33" height="33">
                                        @if ($comment->is_teacher == 1)
                                            <h6 class="fw-semibold mb-0 fs-4">{{ $comment->teacher?->username }}</h6>
                                        @elseif($comment->is_admin == 1)
                                            <h6 class="fw-semibold mb-0 fs-4">{{ $comment->admin?->email }}</h6>
                                        @else
                                            <h6 class="fw-semibold mb-0 fs-4">{{ $comment->user?->username }}</h6>
                                        @endif
                                        <div class="d-flex align-items-center fs-2 ms-auto"><i
                                                class="ti ti-point text-dark"></i>Sat, Jan 14
                                        </div>
                                        <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                                    </div>
                                    <p class="my-3">{{ $comment->comment }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        <h4 class="mb-4 fw-semibold">Post Comment</h4>
                        <form action="{{ route('student.casestudy.comment-submit') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $casestudy->id }}" name="casestudy_id" id="">
                            <div>
                                <textarea class="form-control mb-4" rows="5" name="comment"></textarea>
                                <button type="submit" class="btn btn-outline-success">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Shopping Cart -->

    <!-- ---------------------------------------------- -->
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/app.init.js') }}"></script>
    <script src="{{ asset('js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('js/apps/chat.js') }}"></script>
</body>

</html>

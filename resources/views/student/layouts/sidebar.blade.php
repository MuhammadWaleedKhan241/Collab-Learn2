<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo bg-white d-flex align-items-center justify-content-between">
            <a href="{{route('student.casestudy')}}" class="text-nowrap logo-img">
                <!-- <img src="assets/images/logos/dark-logo.png" class="dark-logo" width="180" alt="" /> -->
                <img src="{{ asset('images/logos/collablearn-logo.png') }}" class="light-logo d-block" width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    {{-- <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">My Case-Studies</span> --}}
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('student.casestudy') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-clipboard"></i>
                        </span>
                        <span class="hide-menu">My Readings</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('student.allcasestudies') }}" aria-expanded="false">
                        <span>
                            <span>
                                <i class="ti ti-book"></i>
                            </span>
                        </span>
                        <span class="hide-menu">All Readings</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('student.about')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">About</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('student.help')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-help"></i>
                        </span>
                        <span class="hide-menu">Help</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('student.contact')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-help"></i>
                        </span>
                        <span class="hide-menu">Contact</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- End Sidebar scroll-->
</aside>

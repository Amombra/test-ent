<aside id="side-overlay">

    <div class="bg-image"
        style="background-image: url({{ asset('assets/media/various/bg_side_overlay_header.jpg') }};">
        <div class="bg-primary-op">
            <div class="content-header">

                <a class="img-link me-1" href="be_pages_generic_profile.html">
                    <img class="img-avatar img-avatar48"
                        src="{{ asset('public/photos/users/' . Auth::user()->photo) }}" alt="">
                </a>

                <div class="ms-2">
                    <a class="text-white fw-semibold" href="be_pages_generic_profile.html">
                        <h5> {{ Auth::user()->name }}</h5>
                    </a>
                </div>

                <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout"
                    data-action="side_overlay_close">
                    <i class="fa fa-times-circle"></i>
                </a>



            </div>
        </div>
    </div>

    <div class="content-side">

        <div class="block block-transparent pull-x pull-t mb-0">
            <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab"
                        data-bs-target="#so-settings" role="tab" aria-controls="so-settings" aria-selected="true">
                        <i class="fa fa-fw fa-cog"></i>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="so-profile-tab" data-bs-toggle="tab" data-bs-target="#so-profile"
                        role="tab" aria-controls="so-profile" aria-selected="false">
                        <i class="far fa-fw fa-edit"></i>
                    </button>
                </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">

                

                <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel"
                    aria-labelledby="so-profile-tab">
                    <form action="" method="POST" >
                        <div class="block mb-0">
                            <!-- Personal -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">INFORMATION PERSONNELLE</span>
                            </div>
                            <div class="block-content block-content-full">

                            </div>
                            <!-- END Personal -->

                        </div>
                    </form>
                </div>
                <!-- END Profile -->
            </div>
        </div>
        <!-- END Side Overlay Tabs -->
    </div>
    <!-- END Side Content -->
</aside>

<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="#">
                <span class="smini-visible">
                    D<span class="opacity-75">x</span>
                </span>
                <span class="smini-hidden">
                    
                    E-<span class="opacity-75">Courrier</span>
                </span>
                
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Toggle Sidebar Style -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                    onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>
                <!-- END Toggle Sidebar Style -->

                <!-- Dark Mode -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#dark-mode-toggler" data-class="far fa"
                    onclick="Dashmix.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>
                <!-- END Dark Mode -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times-circle"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->


    <div class="js-sidebar-scroll">

        <div class="content-side">
            <ul class="nav-main">

                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ '/' }}">
                        <i class="fa fa-1x fa-home"></i> &nbsp;
                        <span class="nav-main-link-name">Accueil</span>
                    </a>
                </li>
                <br>
                
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="#">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Tableau de bord</span>
                    </a>
                </li>


               <br><br>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="si si-settings me-1"></i>
                        <span class="nav-main-link-name">Information</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('user') }}">
                                <span class="nav-main-link-name">utilisateurs</span>
                            </a>
                        </li>
                       
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('car') }}">
                                <span class="nav-main-link-name">Véhicules</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('membre') }}">
                                <span class="nav-main-link-name">Les membres de famille</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ '/carimage' }}">
                                <span class="nav-main-link-name">Images de vehicules</span>
                            </a>
                        </li>
                       
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('carimage') }}">
                                <span class="nav-main-link-name">Véhicules attribués</span>
                            </a>
                        </li>
                       
                
              

            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>

</nav>

<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="space-x-1">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
           
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
                    <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                   
                    <div class="p-2">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Log Out <i
                                class="ti-shift-left"></i></a> --}}


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Notifications Dropdown -->
            {{-- <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                        Notifications
                    </div>
                    <ul class="nav-items my-2">
                        <li>
                            <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                <div class="flex-shrink-0 mx-3">
                                    <i class="fa fa-fw fa-check-circle text-success"></i>
                                </div>
                                <div class="flex-grow-1 fs-sm pe-2">
                                    <div class="fw-semibold">App was updated to v5.6!</div>
                                    <div class="text-muted">3 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                <div class="flex-shrink-0 mx-3">
                                    <i class="fa fa-fw fa-user-plus text-info"></i>
                                </div>
                                <div class="flex-grow-1 fs-sm pe-2">
                                    <div class="fw-semibold">New Subscriber was added! You now have 2580!</div>
                                    <div class="text-muted">10 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                <div class="flex-shrink-0 mx-3">
                                    <i class="fa fa-fw fa-times-circle text-danger"></i>
                                </div>
                                <div class="flex-grow-1 fs-sm pe-2">
                                    <div class="fw-semibold">Server backup failed to complete!</div>
                                    <div class="text-muted">30 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                <div class="flex-shrink-0 mx-3">
                                    <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                </div>
                                <div class="flex-grow-1 fs-sm pe-2">
                                    <div class="fw-semibold">You are running out of space. Please consider
                                        upgrading your plan.</div>
                                    <div class="text-muted">1 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                <div class="flex-shrink-0 mx-3">
                                    <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                </div>
                                <div class="flex-grow-1 fs-sm pe-2">
                                    <div class="fw-semibold">New Sale! + $30</div>
                                    <div class="text-muted">2 hours ago</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="p-2 border-top">
                        <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                            <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                        </a>
                    </div>
                </div>
            </div> --}}
            <!-- END Notifications Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="far fa-fw fa-list-alt"></i>
            </button>
            <!-- END Toggle Side Overlay -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

  

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>

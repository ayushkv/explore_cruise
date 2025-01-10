<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/iconsax.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v31">
</head>

<body>
    <div class="main-header">
        <header class="header-five wow fadeInDown" data-wow-delay="0.3">
            <div class="container">
                <div class="offcanvas-info">
                    <div class="offcanvas-wrap">
                        <div class="offcanvas-detail">
                            <div class="offcanvas-head">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="{{route('index')}}" class="black-logo-responsive">
                                        <img width="200px" src="{{ asset('/assets/img/logo/logo.png') }}" alt="logo-img">
                                    </a>
                                    <a href="{{route('index')}}" class="white-logo-responsive">
                                        <img width="200px" src="{{ asset('/assets/img/logo/logo.png') }}" alt="logo-img">
                                    </a>
                                    <div class="offcanvas-close">
                                        <i class="ti ti-x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu fix mb-3"></div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-overlay"></div>
                <div class="header-nav">
                    <div class="main-menu-wrapper">
                        <div class="navbar-logo">
                            <a class="logo-white header-logo" href="{{route("index")}}">
                                
                                <img src="{{ asset('/assets/img/logo/logo.png') }}" >
                            </a>
                            <a class="logo-dark header-logo" href="{{route("index")}}">
                                <img src="assets/img/logo.svg" class="logo" alt="Logo">
                            </a>
                        </div>
                        <nav id="mobile-menu">
                            <ul class="main-nav">
                                <li class="has-submenu {{request()->route()->getName() == 'index'?' active':''}}">
                                    <a href="{{route("index")}}">Home</a>
                                </li>
                                <li class="has-submenu {{request()->route()->getName() == 'about'?' active':''}}">
                                    <a href="{{route("about")}}">About</a>
                                </li>
                                <?php $serviceRoutes = ['cruise_listing','luxury_cruise','adventure_cruise', 'river_cruise', 'family_cruise','sailing_cruise','world_cruise']; ?>
                                <li class="has-submenu mega-innermenu {{ in_array(request()->route()->getName(), $serviceRoutes) ? 'active' : '' }}">
                                    <a href="{{route("cruise_listing")}}" >Cruise<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <!--<h6>Cruise Bookings</h6>-->
                                                        <ul>
                                                            <li class="{{request()->route()->getName() == 'luxury_cruise'?' active':''}}"><a href="{{route("luxury_cruise")}}">Luxury Cruise</a></li>
                                                            <li class="{{request()->route()->getName() == 'adventure_cruise'?' active':''}}"><a href="{{route("adventure_cruise")}}">Adventure Cruise</a></li>
                                                            <li class="{{request()->route()->getName() == 'river_cruise'?' active':''}}"><a href="{{route("river_cruise")}}">River Cruise</a></li>
                                                            <li class="{{request()->route()->getName() == 'family_cruise'?' active':''}}"><a href="{{route("family_cruise")}}">Family Cruise</a></li>
                                                            <li class="{{request()->route()->getName() == 'sailing_cruise'?' active':''}}"><a href="{{route("sailing_cruise")}}">Sailing Cruise</a></li>
                                                            <li class="{{request()->route()->getName() == 'world_cruise'?' active':''}}"><a href="{{route("world_cruise")}}">World Cruise</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{request()->route()->getName() == 'cruise_booking' ? 'active':''}}">
                                    <a href="{{route("cruise_booking")}}">Cruise Booking</a>
                                </li>
                                <li class="has-submenu {{request()->route()->getName() == 'contact' ? 'active':''}}">
                                    <a href="{{route("contact")}}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-btn d-flex align-items-center">
                            <div class="cart-dropdown me-3">
                                <a href="{{route('index')}}" class="position-relative">
                                    <i class="isax isax-user"></i>
                                </a>
                            </div>
                            <div class="me-3 mobile_menu_contact">
                                <a href="tel:{{ $company_info->comp_contact2 }}" id="phone-link" class="btn btn-primary call-white">
                                <i class="isax isax-call-calling5 fs-24"></i>{{ $company_info->comp_contact1 }}</a>
                            </div>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar-menu">
                                    <i class="isax isax-menu5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
<!-- header-start -->
@if(Auth::check())
    @if(Auth::user()->role === 'admin')
        <nav class="navbar navbar-expand-sm navbar-expand-lg bg-dark navbar-dark dashboard-nav" id="admin_navbar">
            <div class="container-fluid">
                <!-- Navbar Toggler for Mobile View -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="row justify-content-center w-100">

                        <ul class="navbar-nav col-md-6">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.users') }}">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.pages') }}">Pages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.blogs') }}">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.mainslider') }}">Sliders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.contacts') }}">Contact</a>
                            </li>
                        </ul>

                        <!-- Right-aligned Dropdown -->
                        <ul class="navbar-nav ms-auto col-md-6 float-right justify-content-right pr-5">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item"
                                            href="{{ route('admin.edituser', Auth::user()->id) }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.settings') }}">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#" id="logout_btn">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    @endif
@endif


<!-- Preloader Start -->
<div class="loader-wrap">
    <div class="preloader">
        <div class="preloader-close">x</div>
        <div id="handle-preloader" class="handle-preloader about-page-2">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="B" class="letters-loading">
                        B
                    </span>
                    <span data-text-preloader="e" class="letters-loading">
                        e
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="n" class="letters-loading">
                        n
                    </span>
                    <span data-text-preloader="g" class="letters-loading">
                        g
                    </span>
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="u" class="letters-loading">
                        u
                    </span>
                    <span data-text-preloader="m" class="letters-loading">
                        m
                    </span>
                    <span data-text-preloader="a" class="letters-loading">
                        a
                    </span>
                    <span data-text-preloader="n" class="letters-loading">
                        n
                    </span>
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                    <span data-text-preloader="l" class="letters-loading">
                        l
                    </span>
                    <span data-text-preloader="o" class="letters-loading">
                        o
                    </span>
                    <span data-text-preloader="b" class="letters-loading">
                        b
                    </span>
                    <span data-text-preloader="a" class="letters-loading">
                        a
                    </span>
                    <span data-text-preloader="l" class="letters-loading">
                        l
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader end -->
<!-- main header -->
<header class="main-header header-style-one">
    <div class="header-top">
        <div class="top-inner">
            <div class="top-left">
                <ul class="info clearfix">
                    <li><i class="flaticon-pin"></i>{{ $settings['address'] ?? 'No Address Found' }}</li>
                    <li>
                        <i class="flaticon-email"></i>
                        <a href="mailto:{{ $settings['email_address'] }}">{{ $settings['email_address'] }}</a>
                    </li>
                    <li><i class="flaticon-clock"></i>Mon - Sat 9:00 am to 6:00 pm</li> {{-- You can make this dynamic
                    if needed --}}
                </ul>
            </div>
            <div class="top-right d-none d-sm-flex">
                <ul class="social-links clearfix">
                    @if($settings['social_twitter'])
                    <li><a href="{{ $settings['social_twitter'] }}"><i class="fab fa-twitter"></i></a></li>@endif
                    @if($settings['social_facebook'])
                    <li><a href="{{ $settings['social_facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>@endif
                    @if($settings['social_pinterest'])
                    <li><a href="{{ $settings['social_pinterest'] }}"><i class="fab fa-pinterest-p"></i></a></li>@endif
                    @if($settings['social_instagram'])
                    <li><a href="{{ $settings['social_instagram'] }}"><i class="fab fa-instagram"></i></a></li>@endif
                </ul>
                {{-- <ul class="other-links clearfix">
                    <li><a href="{{ route('frontend.userlogin') }}">Membership</a></li>
                    <li><a href="{{ route('frontend.home.events') }}">Events</a></li>
                    <li><a href="{{ url('zoo-map') }}">Zoo Map</a></li>
                </ul> --}}
            </div>
        </div>
    </div>

    <div class="header-lower">
        <div class="outer-box">
            <div class="logo-box">
                <figure class="logo">
                    <a href="{{ route('home.index') }}">
                        <img src="{{ asset('public/assets/frontend/img/' . $settings['main_logo']) }}"
                            alt="{{ $settings['website_name'] }}">
                    </a>
                </figure>
            </div>

            <div class="menu-area">
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i><i class="icon-bar"></i><i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="{{ request()->routeIs('home.index') ? 'current' : '' }}">
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>

                            <li class="dropdown {{ request()->routeIs('frontend.about') ? 'current' : '' }}">
                                <a href="{{ route('frontend.about') }}">About</a>
                                <ul>
                                    <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                                    <li><a href="{{ route('frontend.about') }}">Our Team</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('frontend.home.events') }}">Events</a></li>

                            <li class="dropdown {{ request()->routeIs('frontend.about') ? 'current' : '' }}">
                                <a href="#">Get Involved</a>
                                <ul>
                                    <li><a href="{{ route('frontend.about') }}">Volunteer</a></li>
                                    <li><a href="{{ route('frontend.about') }}">Donators</a></li>
                                </ul>
                            </li>
                            <li class="dropdown {{ request()->routeIs('frontend.home.blogs') ? 'current' : '' }}">
                                <a href="#">Media</a>
                                <ul>
                                    <li><a href="{{ route('frontend.home.blogs') }}">Blog & News</a></li>
                                    <li><a href="{{ route('frontend.about') }}">Photos & Videos
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown {{ request()->routeIs('frontend.contact') ? 'current' : '' }}">
                                <a href="#">Contact</a>
                                <ul>
                                    <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                    <li><a href="{{ route('frontend.contact') }}">Newsletter Signup
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="menu-right-content">
                <div class="support-box">
                    <div class="icon"><i class="flaticon-phone-ringing"></i></div>
                    <span>Have Questions?</span>
                    <h6><a href="tel:{{ $settings['contact_number'] }}">{{ $settings['contact_number'] }}</a></h6>
                </div>

                {{-- <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flaticon-magnifying-glass"></i></button>
                        <div class="dropdown-menu search-panel">
                            <div class="form-container">
                                <form method="GET" action="{{ route('frontend.search') }}">
                                    <div class="form-group">
                                        <input type="search" name="query" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span
                                                class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="btn-box">
                    <a href="{{ route('frontend.home.donation') }}">Donate</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header -->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="logo-box">
                <figure class="logo">
                    <a href="{{ route('home.index') }}">
                        <img src="{{ asset('public/assets/frontend/img/' . $settings['main_logo']) }}"
                            alt="{{ $settings['website_name'] }}">
                    </a>
                </figure>
            </div>
            <div class="menu-area">
                <nav class="main-menu clearfix"><!-- JS-generated menu --></nav>
            </div>
            <div class="menu-right-content">
                <div class="support-box">
                    <div class="icon"><i class="flaticon-phone-ringing"></i></div>
                    <span>Have Questions?</span>
                    <h6><a href="tel:{{ $settings['contact_number'] }}">{{ $settings['contact_number'] }}</a></h6>
                </div>
                {{-- <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flaticon-magnifying-glass"></i></button>
                        <div class="dropdown-menu search-panel">
                            <div class="form-container">
                                <form method="GET" action="{{ route('frontend.search') }}">
                                    <div class="form-group">
                                        <input type="search" name="query" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span
                                                class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    @if ($settings['special_offer'])
        <div class="header-bottom text-center">
            <p>{{ $settings['special_offer'] }} <a href="{{ route('frontend.home.products') }}" class="browse-btn">Shop
                    Now</a></p>
        </div>
    @endif
</header>

<!-- Mobile Menu -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo">
            <a href="{{ route('home.index') }}">
                <img src="{{ asset('public/assets/frontend/img/' . $settings['main_logo']) }}"
                    alt="{{ $settings['website_name'] }}" title="{{ $settings['website_name'] }}" class="bg-white">
            </a>
        </div>

        <div class="menu-outer"><!-- Here Menu Will Come Automatically Via Javascript / Same Menu as in Header --></div>

        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>{{ $settings['address'] ?? 'No Address Found' }}</li>
                <li><a href="tel:{{ $settings['contact_number'] }}">{{ $settings['contact_number'] }}</a></li>
                <li><a href="mailto:{{ $settings['email_address'] }}">{{ $settings['email_address'] }}</a></li>
            </ul>
        </div>

        <div class="social-links">
            <ul class="clearfix">
                @if($settings['social_twitter'])
                <li><a href="{{ $settings['social_twitter'] }}"><span class="fab fa-twitter"></span></a></li>@endif
                @if($settings['social_facebook'])
                    <li><a href="{{ $settings['social_facebook'] }}"><span class="fab fa-facebook-square"></span></a></li>
                @endif
                @if($settings['social_pinterest'])
                    <li><a href="{{ $settings['social_pinterest'] }}"><span class="fab fa-pinterest-p"></span></a></li>
                @endif
                @if($settings['social_instagram'])
                <li><a href="{{ $settings['social_instagram'] }}"><span class="fab fa-instagram"></span></a></li>@endif
                @if($settings['social_youtube'])
                <li><a href="{{ $settings['social_youtube'] }}"><span class="fab fa-youtube"></span></a></li>@endif
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->
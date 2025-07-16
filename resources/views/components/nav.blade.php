  <!-- header-start -->
  @if(Auth::check())
    @if(Auth::user()->role === 'admin')
        <nav class="navbar navbar-expand-sm navbar-expand-lg bg-dark navbar-dark dashboard-nav" id="admin_navbar">
            <div class="container-fluid">
                <!-- Navbar Toggler for Mobile View -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                                <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="{{ route('admin.edituser',Auth::user()->id) }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.settings') }}">Settings</a></li>
                                    <li><hr class="dropdown-divider"></li>
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
                            <span data-text-preloader="w" class="letters-loading">
                                w
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                d
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="f" class="letters-loading">
                                f
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
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
                    <li><i class="flaticon-clock"></i>Mon - Sat 9:00 am to 6:00 pm</li> {{-- You can make this dynamic if needed --}}
                </ul>
            </div>
            <div class="top-right">
                <ul class="social-links clearfix">
                    @if($settings['social_twitter'])<li><a href="{{ $settings['social_twitter'] }}"><i class="fab fa-twitter"></i></a></li>@endif
                    @if($settings['social_facebook'])<li><a href="{{ $settings['social_facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>@endif
                    @if($settings['social_pinterest'])<li><a href="{{ $settings['social_pinterest'] }}"><i class="fab fa-pinterest-p"></i></a></li>@endif
                    @if($settings['social_instagram'])<li><a href="{{ $settings['social_instagram'] }}"><i class="fab fa-instagram"></i></a></li>@endif
                </ul>
                <ul class="other-links clearfix">
                    <li><a href="{{ route('frontend.userlogin') }}">Membership</a></li>
                    <li><a href="{{ route('frontend.home.events') }}">Events</a></li>
                    <li><a href="{{ url('zoo-map') }}">Zoo Map</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-lower">
        <div class="outer-box">
            <div class="logo-box">
                <figure class="logo">
                    <a href="{{ route('home.index') }}">
                        <img src="{{ asset('public/assets/frontend/img/' . $settings['main_logo']) }}" alt="{{ $settings['website_name'] }}">
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
                                    <li><a href="{{ route('frontend.faq') }}">FAQ</a></li>
                                    <li><a href="{{ route('frontend.careers') }}">Careers</a></li>
                                </ul>
                            </li>

                            <li class="dropdown {{ request()->routeIs('frontend.home.products') ? 'current' : '' }}">
                                <a href="{{ route('frontend.home.products') }}">Products</a>
                                @if($main_categories->count())
                                    <ul>
                                        @foreach($main_categories as $category)
                                            <li class="dropdown">
                                                <a href="{{ route('frontend.product.category', $category->slug) }}">{{ $category->name }}</a>
                                                @if($category->subCategories->count())
                                                    <ul>
                                                        @foreach($category->subCategories as $sub)
                                                            <li>
                                                                <a href="{{ route('frontend.product.subcategory', ['cat_slug' => $category->slug, 'cat_sub_slug' => $sub->slug]) }}">
                                                                    {{ $sub->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>

                            <li><a href="{{ route('frontend.home.blogs') }}">Blogs</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
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

                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-magnifying-glass"></i></button>
                        <div class="dropdown-menu search-panel">
                            <div class="form-container">
                                <form method="GET" action="{{ route('frontend.search') }}">
                                    <div class="form-group">
                                        <input type="search" name="query" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-box">
                    <a href="{{ route('frontend.ticket') }}">Book your ticket</a>
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
                        <img src="{{ asset('public/assets/frontend/img/' . $settings['main_logo']) }}" alt="{{ $settings['website_name'] }}">
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
                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-magnifying-glass"></i></button>
                        <div class="dropdown-menu search-panel">
                            <div class="form-container">
                                <form method="GET" action="{{ route('frontend.search') }}">
                                    <div class="form-group">
                                        <input type="search" name="query" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($settings['special_offer'])
        <div class="header-bottom text-center">
            <p>{{ $settings['special_offer'] }} <a href="{{ route('frontend.home.products') }}" class="browse-btn">Shop Now</a></p>
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
                <img src="{{ asset('public/assets/frontend/img/' . $settings['main_logo']) }}" alt="{{ $settings['website_name'] }}" title="{{ $settings['website_name'] }}">
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
                @if($settings['social_twitter'])<li><a href="{{ $settings['social_twitter'] }}"><span class="fab fa-twitter"></span></a></li>@endif
                @if($settings['social_facebook'])<li><a href="{{ $settings['social_facebook'] }}"><span class="fab fa-facebook-square"></span></a></li>@endif
                @if($settings['social_pinterest'])<li><a href="{{ $settings['social_pinterest'] }}"><span class="fab fa-pinterest-p"></span></a></li>@endif
                @if($settings['social_instagram'])<li><a href="{{ $settings['social_instagram'] }}"><span class="fab fa-instagram"></span></a></li>@endif
                @if($settings['social_youtube'])<li><a href="{{ $settings['social_youtube'] }}"><span class="fab fa-youtube"></span></a></li>@endif
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->










@extends('layouts.frontend')

@section('content')



    <!-- Page Title -->
    <section class="page-title">
        <div class="img-wrap parallax-demo-1">
            <div class="parallax-inner back-img"
                style="background-image: url({{ url('public/assets/frontend/images/background/' . $settings['page_banner']) }});">
            </div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li><a href="{{ route('frontend.home.ourworks') }}">Our Works</a></li>
                    <li>{{ $blog['title'] }}</li>
                </ul>
                <div class="title">
                    <h1>{{ $blog['title'] }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Blog Area Start -->
    <section class="blog_area single-post-area section-padding mt-50">
        <div class="container">
            <div class="row">
                <!-- Blog Content -->
                <div class="col-12 col-md-12 font-family-1 page-main-title">
                    <h3>{{ $blog->title }}</h3>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column page_transition_img_list">
                    <figure class="image-box">
                        <img src="{{ url('public/assets/uploads/projects/' . $blog->feature_image) }}"
                            alt="{{ $blog->title }}" />
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column page_info_content">
                    <div class="content_block_three">
                        <div class="content-box">
                            <div class="inner mb-20">
                                <h5><strong>A Second Chance with love, care, and a home.</strong>.</h5>
                            </div>
                            <div class="inner mb-20">
                                <h5><strong>Saving Stray Lives Across Asia and Africa.</strong>.</h5>
                            </div>
                            <div class="inner mb-20 page-sub-title">
                                <h3>From Street to Sanctuary</h3>
                            </div>
                            <div class="text mb-20">
                                <p class="mb-20">Every dog and cat on the street is a soul deserving of love, care, and
                                    dignity. Across Asia and Africa, countless stray animals struggle to survive, but we're
                                    working to change that. Every dog and cat on the street is a life that matters. Our
                                    teams are on the ground, delivering medical care, food, and hope, and connecting animals
                                    to forever homes.</p>
                                <p class="mb-20">At Being Human, we're giving these forgotten lives a second chance. Our
                                    teams are out every day rescuing, healing, and connecting animals with safe, loving
                                    homes.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 posts-list">
                    <div class="single-post">
                        {{-- <div class="feature-img">
                            <img src="{{ url('public/assets/uploads/projects/' . $blog->feature_image) }}"
                                alt="{{ $blog->title }}" class="border shadow-lg img-fluid" />
                        </div> --}}
                        <div class="blog_details">
                            {{-- <h2 style="color: #2d2d2d;">{{ $blog->title }}</h2> --}}
                            <div class="about_sub_description page-sub-title">{!! $blog->description !!}</div>
                            @if (!empty($blog->sub_description))
                                <div class="about_sub_description page-sub-title">{!! $blog->sub_description !!}</div>
                            @endif
                        </div>
                    </div>
                    @php
                        $url = route('frontend.blogs.article.view', $blog->slug);
                    @endphp
                    <!-- Social Navigation -->
                    <div class="navigation-top mt-30 mb-30">
                        <div>
                            <h6>Share Social Media
                            </h6>
                        </div>
                        <div class="d-sm-flex justify-content-between text-center mt-15">
                            <ul class="social-icons">
                                @php
                                    $url = urlencode(route('frontend.blogs.article.view', $blog->slug));
                                    $title = urlencode($blog->title);
                                @endphp

                                {{-- Twitter Share --}}
                                <li>
                                    <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}"
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"
                                            style="fill:#fff; width:25px;">
                                            <path
                                                d="M453.2 112L523.8 112L369.6 288.2L551 528L409 528L297.7 382.6L170.5 528L99.8 528L264.7 339.5L90.8 112L236.4 112L336.9 244.9L453.2 112zM428.4 485.8L467.5 485.8L215.1 152L173.1 152L428.4 485.8z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>

                                {{-- Facebook Share --}}
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>

                                {{-- LinkedIn Share --}}
                                <li>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $url }}&title={{ $title }}"
                                        target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>

                                {{-- YouTube (just profile link, since YouTube doesn’t support share like this) --}}
                                {{-- <li>
                                    <a href="{{ $settings['social_youtube'] }}" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li> --}}

                                {{-- Instagram (profile link only) --}}
                                {{-- <li>
                                    <a href="{{ $settings['social_instagram'] }}" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li> --}}

                                {{-- TikTok (profile link only) --}}
                                {{-- <li>
                                    <a href="{{ $settings['social_tiktok'] }}" target="_blank">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                </li> --}}

                                {{-- WhatsApp Share --}}
                                <li>
                                    <a href="https://api.whatsapp.com/send?text={{ $title }}%20{{ $url }}" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <!-- Author Info -->
                    {{-- @if ($blog->author)
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="{{ $blog->author->profile_picture ?? asset('assets/img/blog/author.png') }}"
                                alt="{{ $blog->author->name }}">
                            <div class="media-body ml-3">
                                <a href="#">
                                    <h4>{{ $blog->author->name }}</h4>
                                </a>
                                <p>{{ $blog->author->bio ?? 'No biography available.' }}</p>
                            </div>
                        </div>
                    </div>
                    @endif --}}
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Area End -->

@endsection

@push('css')
    <style>
        .social-icons {
            li {
                a {
                    position: relative;
                    display: inline-block;
                    width: 40px;
                    height: 40px;
                    line-height: 40px;
                    background: #0e131f;
                    font-size: 15px;
                    text-align: center;
                    color: #fff;

                    &:hover {
                        background: #303d5a;
                    }
                }

                position: relative;
                display: inline-block;
                float: left;
                margin-right: 10px;
            }
        }

        img.img-fluid.login-logo {
            width: 120px !important;
        }

        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }

        .breadcam_bg_2 {
            background-image: url('{{ asset('public/assets/frontend/img/banner/' . $page_blog['banner_image']) }}') !important;
            background-size: cover;
            background-position: center;
        }

        .thumb {
            img {
                width: 60px;
                height: 60px;
                object-fit: cover;
            }
        }
    </style>
@endpush

@push('css')
    <style>

    </style>
@endpush
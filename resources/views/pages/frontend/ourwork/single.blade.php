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
                <div class="col-lg-12 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img src="{{ url('public/assets/uploads/projects/' . $blog->feature_image) }}"
                                alt="{{ $blog->title }}" class="border shadow-lg img-fluid" />
                        </div>
                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;">{{ $blog->title }}</h2>
                            <p class="excert">{!! $blog->description !!}</p>
                            @if (!empty($blog->sub_description))
                                <div class="quote-wrapper">
                                    <div class="quotes">{!! $blog->sub_description !!}</div>
                                </div>
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
                                    $title = urlencode($blog->title); // optional, if you want to include the title
                                @endphp
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}"
                                        target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $url }}&title={{ $title }}"
                                        target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
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
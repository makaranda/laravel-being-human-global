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
                    <li>{{ $page_info['title'] }}</li>
                </ul>
                <div class="title">
                    <h1>{{ $page_info['title'] }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- page Content -->
    <section class="gallery-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 col-md-12 font-family-1 page-main-title">
                    <h3>{{ $page_info['title'] }}</h3>
                </div>
                <div class="col-12 col-md-12">
                    <div class="about_info pl-0">
                        <div class="pt-0 mb-0 about_sub_description page-sub-title">{!! $page_info['sub_description'] !!}
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="about_info">
                        <div class="pt-0 mb-0 about_description page-sub-title">{!! $page_info['description'] !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Page Content -->

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container pt-0">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">

                    <div class="blog-classic-content row">
                        @if($page_blogs && count($page_blogs))
                            @foreach ($page_blogs as $item)
                                <div class="col-12 col-md-6 news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="{{ route('frontend.home.ourworks.article.view', $item->slug) }}">
                                                    <img src="{{ asset('public/assets/uploads/projects/' . $item->feature_image) }}"
                                                        alt="{{ $item->title }}">
                                                </a>
                                            </figure>
                                            @if($item->created_at)
                                                <div class="post-date">
                                                    <h6>{{ $item->created_at->format('d') }}<span>{{ strtolower($item->created_at->format('M')) }}</span></h6>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info clearfix">
                                                {{-- <li><i class="far fa-user-circle"></i> <a href="#">{{ $item->author->name ?? 'Unknown' }}</a></li> --}}
                                                {{-- Optional: <li><i class="far fa-clock"></i> {{ $item->created_at->diffForHumans() }}</li> --}}
                                            </ul>
                                            <h2>
                                                <a href="{{ route('frontend.home.ourworks.article.view', $item->slug) }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h2>
                                            <div>{!! Str::limit(strip_tags($item->description), 150) !!}</div>
                                            <div class="btn-box">
                                                <a href="{{ route('frontend.home.ourworks.article.view', $item->slug) }}" class="theme-btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('css')
    <style>
                .news-block-one .inner-box .lower-content .theme-btn {
            font-size: 10px;
            background: #faf7f3;
            padding: 6.5px 35px;
            color: #151c2c !important;
            border: 1px solid;
            margin-top: 10px;
        }
        /* .page-main-title>h1,
        .page-main-title>h2,
        .page-main-title>h3,
        .page-main-title>h4,
        .page-main-title>h5,
        .page-main-title>h6 {
            color: #8a5f3c;
            font-weight: 800;
            padding-bottom: 15px;
            font-size: 50px;
        }

        .page-sub-title>h1,
        .page-sub-title>h2,
        .page-sub-title>h3,
        .page-sub-title>h4,
        .page-sub-title>h5,
        .page-sub-title>h6 {
            color: #8a5f3c;
            font-weight: 800;
            padding-bottom: 24px;
            padding-top: 24px;
            padding-left: 20px;
            font-size: 40px;
            border-left: 6px solid #8a5f3c;
            margin: 15px 0px 15px 20px;
        } */

        img.img-fluid.login-logo {
            width: 120px !important;
        }

        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }

        .breadcam_bg_2 {
            background-image: url('{{ asset('public/assets/frontend/img/banner/' . $page_info['banner_image']) }}') !important;
            background-size: cover;
            background-position: center;
        }

        .border-box {
            padding: 15px;
            border 2px solid #f79b20;
        }

        .about_sub_description {
            p {}
        }

        .about_description {
            /* p {
                                                                                                        border: 2px solid #e6b127;
                                                                                                        padding: 24px 20px;
                                                                                                        display: inline-block;
                                                                                                        height: 100%;
                                                                                                        vertical-align: top;
                                                                                                    } */
        }

        @media (max-width: 2040px) {
            /* .about_description {
                                                                                                    p {
                                                                                                        width: 49%;
                                                                                                        height: 260px;
                                                                                                    }
                                                                                                } */
        }

        @media (max-width: 1440px) {
            /* .about_description {
                                                                                                    p {
                                                                                                        width: 49%;
                                                                                                        height: 350px;
                                                                                                    }
                                                                                                } */
        }

        @media (max-width: 720px) {
            /* .about_description {
                                                                                                    p {
                                                                                                        width: 100%;
                                                                                                        height: auto;
                                                                                                    }
                                                                                                } */
        }

        @media (max-width: 540px) {
            /* .about_description {
                                                                                                    p {
                                                                                                        width: 100%;
                                                                                                        height: auto;
                                                                                                    }
                                                                                                } */
        }

        @media (max-width: 200px) {
            /* .about_description {
                                                                                                    p {
                                                                                                        width: 100%;
                                                                                                        height: auto;
                                                                                                    }
                                                                                                } */
        }
    </style>
@endpush

@push('scripts')
    <script>

    </script>
@endpush
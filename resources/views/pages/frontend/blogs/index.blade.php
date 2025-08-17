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
                    <li>Blogs</li>
                </ul>
                <div class="title">
                    <h1>Blogs</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


<!-- Blog Area Start-->

<section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">

                    <div class="blog-classic-content row">
                        @if($blogs && count($blogs))
                            @foreach ($blogs as $item)
                                <div class="col-12 col-md-6 news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="{{ route('frontend.blogs.article.view', $item->slug) }}">
                                                    <img src="{{ $item->feature_image ? url('public/assets/uploads/blogs/' . $item->feature_image) : url('public/assets/uploads/blogs/project_sample.jpg') }}"
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
                                                <a href="{{ route('frontend.blogs.article.view', $item->slug) }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h2>
                                            <div>{!! Str::limit(strip_tags($item->description), 150) !!}</div>
                                            <div class="btn-box">
                                                <a href="{{ route('frontend.blogs.article.view', $item->slug) }}" class="theme-btn">View More</a>
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

<!-- Blog Area End-->


@endsection

@push('css')
    <style>
        img.img-fluid.login-logo{
            width: 120px !important;
        }
        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }
        .breadcam_bg_2{
            background-image: url('{{ asset('public/assets/frontend/img/banner/'.$page_blog['banner_image']) }}') !important;
            background-size: cover;
            background-position: center;
        }
        .news-block-one .inner-box .lower-content .theme-btn {
            font-size: 10px;
            background: #faf7f3;
            padding: 6.5px 35px;
            color: #151c2c !important;
            border: 1px solid;
            margin-top: 10px;
        }
        .programme_section{
            .programme_section_sub{
                p{
                    margin-bottom: 6px;
                    font-size: 16px;
                    line-height: 1.4;
                }
                h2{
                    margin-bottom: 8px;
                    font-size: 20px;
                    line-height: 1.8;
                    margin-top: 15px;
                }
                h3{
                    margin-bottom: 8px;
                    font-size: 19px;
                    line-height: 1.8;
                    margin-top: 15px;
                }
                h4{
                    margin-bottom: 8px;
                    font-size: 18px;
                    line-height: 1.8;
                    margin-top: 15px;
                }

                table{
                    width: 100%;
                    border-collapse: collapse;
                    margin-bottom: 20px;
                    th, td{
                        padding: 10px;
                        border: 1px solid #ddd;
                        text-align: left;
                        border-right: 1px solid #ccc !important;
                    }
                    tr{
                        border: 1px solid #ccc;
                    }
                    th{
                        background-color: #f2f2f2;
                        font-weight: bold;
                    }
                }
            }
            .programme_section_description{
                p{
                    margin-bottom: 6px;
                    font-size: 16px;
                    line-height: 1.4;
                }
                h2{
                    margin-bottom: 8px;
                    font-size: 20px;
                    line-height: 1.8;
                    margin-top: 15px;
                }
                h3{
                    margin-bottom: 8px;
                    font-size: 19px;
                    line-height: 1.8;
                    margin-top: 15px;
                }
                h4{
                    margin-bottom: 8px;
                    font-size: 18px;
                    line-height: 1.8;
                    margin-top: 15px;
                }

                table{
                    width: 100%;
                    border-collapse: collapse;
                    margin-bottom: 20px;
                    th, td{
                        padding: 10px;
                        border: 1px solid #ddd;
                        text-align: left;
                        border-right: 1px solid #ccc !important;
                    }
                    tr{
                        border: 1px solid #ccc;
                    }
                    th{
                        background-color: #f2f2f2;
                        font-weight: bold;
                    }
                }
            }
        }
        .programme_cat{
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;

            .programme_cat_btn {
                width: 100%;
                text-align: left;
                font-size: 18px;
                .programme_cat_title {
                    width: 95%;
                    text-align: left;
                    font-size: 18px;
                    position: absolute;
                    height: 60px;
                    z-index: 9;
                    bottom: 0px;
                    text-align: center;
                    color: #fff;
                    align-content: center;
                    background-color: #00000075;
                    margin-bottom: 0px;
                }
                .programme_cat_img {
                    width: 100%;
                    height: auto;
                    transition: all 0.3s ease;
                }
            }
        }
    </style>
@endpush

@push('css')
    <style>

    </style>
@endpush

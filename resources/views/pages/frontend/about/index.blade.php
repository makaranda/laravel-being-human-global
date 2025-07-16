@extends('layouts.frontend')

@section('content')



<!-- Hero area Start-->
<div class="hero-area section-bg2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slider-area">
                    <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                        <div class="hero-caption hero-caption2">
                            <h2>About Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">About Us</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Hero area End -->

<!-- about_area  -->
<div class="about_area pb-5 mt-25">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-12">
                <div class="about_info pl-0">
                    <h3>About Us</h3>
                    <div class="pt-0 mb-0 about_sub_description">{!! $about_info['sub_description'] !!}</div>
                </div>
            </div>
            <!--<div class="col-xl-5 col-md-6">
                <div class="about_thumb">
                    <img class="img-fluid" src="{{ asset('public/assets/uploads/pages/' . $about_info['feature_image']) }}" alt="About King Viking"/>
                </div>
            </div>-->
            <div class="col-xl-12 col-md-12">
                <div class="about_info">
                    <div class="pt-0 mb-0 about_description">{!! $about_info['description'] !!}</div>
                    <!--<div class="signature">
                        <img src="{{ url('public/assets/frontend/img/about/signature.png') }}" alt="">
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ about_area  -->
<!--
<div class="singer_video">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                @if(isset($about_info['video_image'],$about_info['video']))
                <div class="image">
                    <img src="{{ url('public/assets/uploads/images/'.$about_info['video_image']) }}" alt="">
                    <div class="video_btn">
                        <a class="popup-video" href="{{ url('public/assets/uploads/videos/'.$about_info['video']) }}"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
-->

    <!-- gallery -->

    <!--/ gallery -->

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
            background-image: url('{{ asset('public/assets/frontend/img/banner/'.$about_info['banner_image']) }}') !important;
            background-size: cover;
            background-position: center;
        }
        .border-box{
            padding: 15px;
            border 2px solid #f79b20;
        }
        .about_sub_description{
            p{

            }
        }
        .about_description{
            p{
                border: 2px solid #e6b127;
                padding: 24px 20px;
                display: inline-block;
                height: 100%;
                vertical-align: top;
            }
        }
        @media (max-width: 2040px) {
            .about_description{
                p{
                    width: 49%;
                    height: 260px;
                }
            }
        }

        @media (max-width: 1440px) {
            .about_description{
                p{
                    width: 49%;
                    height: 350px;
                }
            }
        }

        @media (max-width: 720px) {
            .about_description{
                p{
                    width: 100%;
                    height: auto;
                }
            }
        }

        @media (max-width: 540px) {
            .about_description{
                p{
                    width: 100%;
                    height: auto;
                }
            }
        }

        @media (max-width: 200px) {
            .about_description{
                p{
                    width: 100%;
                    height: auto;
                }
            }
        }
    </style>
@endpush

@push('scripts')
    <script>

    </script>
@endpush

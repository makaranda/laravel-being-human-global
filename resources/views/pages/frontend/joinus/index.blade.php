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
                    <li>Join Us</li>
                </ul>
                <div class="title">
                    <h1>Join Us</h1>
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
                    <h3>Ways to Get Involved</h3>
                </div>
                <div class="col-12 col-md-12">
                    <div class="about_info pl-0">
                        <div class="pt-0 mb-0 about_sub_description page-sub-title">{!! $about_info['sub_description'] !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 font-family-1 page-main-title mt-40">
                    <h3>Non-Financial Contributions</h3>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="about_info">
                        <div class="pt-0 mb-0 about_description page-sub-title">{!! $about_info['description'] !!}</div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                @if($sections)
                    @foreach($sections as $section)
                        <div class="col-md-6 col-lg-4 mb-30">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fa {{ $section['icon'] ?? 'fa-circle' }} fa-2x text-primary me-3"></i>
                                        <h5 class="card-title mb-0">{{ $section['title'] ?? '' }}</h5>
                                    </div>

                                    {{-- Optional description --}}
                                    @if(!empty($section['description']))
                                        <p class="text-muted fst-italic small">{{ $section['description'] ?? '' }}</p>
                                    @endif

                                    <ul class="list-unstyled ms-4">
                                        @foreach($section['items'] as $item)
                                            <li><i class="fa fa-check-circle text-success me-2"></i>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- End Page Content -->


@endsection

@push('css')
    <style>
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
            background-image: url('{{ asset('public/assets/frontend/img/banner/' . $about_info['banner_image']) }}') !important;
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
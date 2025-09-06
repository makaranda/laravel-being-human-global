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
                <div class="col-lg-6 col-md-12 col-sm-12 image-column page_transition_img_list">
                    <figure class="image-box">
                        <img src="{{ url('public/assets/uploads/pages/' . $about_info['feature_image']) }}" alt="">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column page_info_content">
                    <div class="content_block_three">
                        <div class="content-box">
                            {{-- <div class="sec-title font-family-1 page-main-title">
                                <h3 class="text-capitalized">Ways to Get Involved</h3>
                            </div> --}}
                            <div class="inner mb-20">
                                {{-- <div class="icon-box"><i class="flaticon-zoo"></i></div> --}}
                                <h5><strong>Live with Purpose. Be a True Human. Join Being Human</strong>.</h5>
                            </div>
                            <div class="text mb-20">
                                <p class="mb-20">The planet is in crisis. Wildlife is disappearing. Forests are falling
                                    silent.
                                    Communities are struggling. But change begins with people who care and act. That’s where
                                    you come in. Being Human isn’t just an organization it’s a movement of everyday people
                                    doing extraordinary things to protect life on Earth. When you Join us, you become part
                                    of a growing global network of wildlife defenders, nature restorers, and community
                                    builders.</p>
                                <h4><strong>Be the reason forests grow back, lakes breathe again, and animals roam
                                        free.</strong></h4>
                            </div>
                            <div class="btn-box">
                                <a href="{{ route('frontend.contact') }}" class="theme-btn btn-one">discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="about_info pl-0 mt-20">
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
                        <div class="col-md-6 col-lg-4 mb-30 page_card-section">
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
            /* padding: 25px 45px;
                background-color: aliceblue; */

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
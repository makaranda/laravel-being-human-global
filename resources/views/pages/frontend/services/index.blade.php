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
                    <li>Services</li>
                </ul>
                <div class="title">
                    <h1>Services</h1>
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
                    <h3>Voice for the Wild and Nature</h3>
                </div>

                <div class="col-12 col-md-12 pt-20 pb-20">
                    <div class="about_info pl-0">
                        <p>At our Being Human, we prioritize the urgent need in nature and animal conservation efforts in
                            Africa & Asia. Our dedicated team works towards protecting and preserving the diverse wildlife &
                            stray animals in our region through various initiatives and campaigns. </p>
                        <p>We are committed to creating a sustainable future for all species and their habitats.</p>
                    </div>

                    <div class="row clearfix mt-30">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <figure class="image-box">
                                <img src="{{ url('public/assets/uploads/pages/' . $page_info['feature_image']) }}"
                                    alt="Services Page" />
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column page_info_content">
                            <div class="content_block_three">
                                <div class="content-box">
                                    <div class="sec-title font-family-1 page-main-title mb-20">
                                        <h3 class="text-capitalized pb-0">Nature Conservation Efforts</h3>
                                    </div>
                                    <div class="inner mb-20">
                                        {{-- <div class="icon-box"><i class="flaticon-zoo"></i></div> --}}
                                        <p>Nature doesn’t need us, we need nature. Conserving it is not a choice, it's our
                                            responsibility to life itself. When we conserve nature, we preserve the
                                            heartbeat of the Earth. Every forest saved, every lake restored, every species
                                            protected brings us closer to balance.</p>
                                    </div>
                                    <div class="text mb-20">
                                        <p class=" mb-20">We aim for Habitat & Forest Protection. We fight
                                            deforestation and land
                                            degradation by protecting forests and restoring critical ecosystems.
                                            Replanting native species, halting illegal encroachment, and preserving
                                            biodiversity are at the core of our efforts.</p>
                                        <p>A healthy planet requires balanced ecosystems. At Being Human, we lead
                                            initiatives to restore ecosystems by reviving wetlands, rewilding degraded land,
                                            and ensuring clean water sources for both wildlife and people.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('frontend.joinus') }}" class="theme-btn btn-one">Join Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 pt-20 pb-20">
                    <div class="about_info pl-0">
                        <div class="pt-0 mb-0 about_sub_description page-sub-title">{!! $page_info['sub_description'] !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 font-family-1 page-main-title">
                    <h3>Wildlife Conservation </h3>
                </div>
                <div class="col-12 col-md-12 pt-20 pb-20">
                    <div class="about_info">
                        <div class="pt-0 mb-0 about_description page-sub-title">{!! $page_info['description'] !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Page Content -->


@endsection

@push('css')
    <style>
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
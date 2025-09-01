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
                    <li>About us</li>
                </ul>
                <div class="title">
                    <h1>About us</h1>
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
                    <h3>Being Human</h3>
                </div>
                <div class="col-12 col-md-12">
                    <div class="about_info pl-0">
                        <div class="pt-0 mb-0 about_sub_description page-sub-title">{!! $about_info['sub_description'] !!}
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="about_info">
                        <div class="pt-0 mb-0 about_description page-sub-title">{!! $about_info['description'] !!}</div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12 about-being-human00">
                    <div class="about_description page-sub-title mt-30 mb-30">
                        <h3 class="title"><span>Our Name. Our Purpose. Our Promise.</span></h2>
                    </div>
                    <div class="topic_name">
                        <h4><span>B</span> – Biodiversity Protection</h4>
                        <p>We defend the rich variety of life on Earth, working to safeguard endangered species and the
                            ecosystems they
                            depend on.</p>
                    </div>

                    <div class="topic_name">
                        <h4><span>E</span> – Ecosystem Restoration</h4>
                        <p>From reforestation to reviving dried-up lakes, we restore nature’s balance bringing life back to
                            lands and
                            waters once lost.</p>
                    </div>

                    <div class="topic_name">
                        <h4><span>I</span> – Inspiring Environmental Stewardship</h4>
                        <p>We reconnect people with nature to foster awareness, responsibility, and lasting care for our
                            planet.</p>
                    </div>

                    <div class="topic_name">
                        <h4><span>N</span> – Nature-Based Solutions</h4>
                        <p>We implement sustainable, science-backed approaches that align with local communities and
                            ecological systems.
                        </p>
                    </div>

                    <div class="topic_name">
                        <h4><span>G</span> – Ground-Level Action</h4>
                        <p>Our impact is hands-on. We work where the need is greatest rescuing animals, planting trees, and
                            rebuilding
                            habitats.</p>
                    </div>

                    <div class="topic_name">
                        <h4><span>H</span> – Habitat Conservation</h4>
                        <p>We protect forests, wetlands, and wildlands to ensure safe, thriving environments for wildlife
                            and future
                            generations.</p>
                    </div>

                    <div class="topic_name">
                        <h4><span>U</span> – Uplifting Communities</h4>
                        <p>We empower people with sustainable tools, education, and opportunities that reduce pressure on
                            the
                            environment and uplift lives.</p>
                    </div>

                    <div class="topic_name">
                        <h4><span>M</span> – Mitigating Human-Wildlife Conflict</h4>
                        <p>We promote peaceful coexistence through innovative, locally driven solutions that keep both
                            people and
                            animals safe.</p>
                    </div>

                    <div class="topic_name">
                        <h4><span>A</span> – Animal Rescue & Welfare</h4>
                        <p>We care for injured, orphaned, or displaced animals restoring their health and giving them a
                            second chance in
                            the wild.</p>
                    </div>

                    <div class="topic_name">
                        <h4><span>N</span> – Nurturing a Shared Future</h4>
                        <p>Because humanity and nature are interconnected. We work toward a future where all Beings Human
                            and wild can
                            thrive together.</p>
                    </div>
                </div>
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
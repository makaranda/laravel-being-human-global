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
    <section class="about-style-three sec-pad pb-20">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 col-md-12 font-family-1 page-main-title">
                    <h3>Being Human</h3>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box">
                        <img src="{{ url('public/assets/uploads/pages/' . $about_info['feature_image']) }}" alt="">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column page_info_content">
                    <div class="content_block_three">
                        <div class="content-box">
                            <div class="sec-title font-family-1 page-main-title">
                                <h3 class="text-capitalized">Voice of the Wild and Nature</h3>
                            </div>
                            <div class="inner mb-20">
                                {{-- <div class="icon-box"><i class="flaticon-zoo"></i></div> --}}
                                <h5>Being Human emerged in Norway in 2025 from a shared dream to "<strong>Make a Difference
                                        in
                                        Everyday Life</strong>" around the world.</h5>
                            </div>
                            <div class="text mb-20">
                                <p>Our journey began with a promise made in childhood, a heartfelt commitment to protect and
                                    uplift the lives of animals everywhere. In January 2025, as our founder turned 18, that
                                    promise became a mission to give a "Voice of the Wild and Nature".</p>
                                <h4>Stand with us to protect nature, wildlife, people, and the spirit of Being Human
                                    everywhere.</h4>
                            </div>
                            <div class="btn-box">
                                <a href="{{ route('frontend.contact') }}" class="theme-btn btn-one">discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="content_block_three">
                        <div class="content-box ml-0">
                            <div class="font-family-1 mb-20 mt-40">
                                <p>The founder has been deeply concerned about the nature and declining populations of
                                    native
                                    species
                                    and the devastating impact of human activities on their natural habitats. Since then,
                                    she
                                    has worked
                                    diligently to establish Being Human as a credible and purpose-driven non-profit
                                    organization,
                                    committed to the protection and preservation of Nature, wildlife, and stray animals
                                    across
                                    vulnerable regions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-style-three sec-pad pb-20 pt-40">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column page_info_content">
                    <div class="content_block_three">
                        <div class="content-box ml-0">
                            <div class="sec-title font-family-1 page-sub-title">
                                <h3 class="text-capitalized">Born from Love, Driven by Purpose.</h3>
                            </div>
                            <div class="text mb-20">
                                <p>We extend our compassion and unwavering commitment to action beyond the wild. Inspired by
                                    our founder’s deep bond with her beloved four-legged friend, who passed after 13
                                    beautiful years, she committed her heart to a greater cause: saving stray animals and
                                    wildlife across Africa and Asia. From medical care and rehabilitation to adoption,
                                    sterilization, education, job creation, and giving justice to all animals.</p>
                                <p>Our mission also embraces the restoration of nature itself. We revive abandoned lakes,
                                    reforest degraded land, and create new water sources to support both wildlife and local
                                    communities because true compassion means healing the environment they depend on.</p>
                                <p><strong>Our work is fueled by compassion, guided by purpose, and devoted to making a
                                        lasting difference for the voiceless.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box">
                        <img src="{{ url('public/assets/uploads/pages/stray_animals_dog.jpg') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!-- chooseus-section -->
    <section class="chooseus-section sec-pad xs-pt-0 md-pt-70 pt-70">
        <div class="img-wrap parallax-demo-1">
            <div class="parallax-inner back-img"
                style="background-image: url({{ asset('public/assets/frontend/images/background/chooseus-bg.jpg')}});">
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box mr-0">
                        <div class="sec-title page-sub-title">
                            <h3>Saving Animals, Preserving Nature, Creating Jobs, Elevating Lives.</h3>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                <div class="text">
                                    <div>
                                        <p>In collaboration with local government bodies, businesses, and fellow NGOs, we
                                            have begun laying the groundwork for collective action promoting sustainable
                                            practices and raising awareness about the critical importance of wildlife
                                            conservation. Although newly formed, our organization has already initiated key
                                            projects designed to generate a lasting, positive impact on both the environment
                                            and local communities. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 text-column section_area">
                                <p>By joining our mission, you become a vital force in shaping a safer, compassionate world
                                    for vulnerable animals, giving them the future they deserve. Because when nature
                                    thrives, humanity prospers.</p>
                                <p>Join us in our efforts to create a more sustainable future for our planet and its
                                    wildlife.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->
    <section class="gallery-page-section pt-20 ">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-12 col-md-12">
                    <div class="about_info pl-0">
                        <div class="pt-0 mb-0 about_sub_description page-sub-title">{!! $about_info['sub_description'] !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 mb-40">
                    <div class="row align-items-center vision-mission-section">
                        <!-- Left Column: Vision & Mission -->
                        <div class="col-lg-7">
                            <div class="consultancy-style-one">

                                <!-- Vision Box -->
                                <div class="single-consultancy vision-mission-box mb-30">
                                    <div class="icon">
                                        <img src="{{ url('public/assets/frontend/img/vision-icon.png') }}"
                                            alt="Vision Icon">
                                    </div>
                                    <div class="information">
                                        <h4 class="title">Our Vision</h4>
                                        <p class="disc">
                                            <strong>"Making a Difference in Everyday Life".</strong> A world where
                                            biodiversity flourishes
                                            and communities thrive in balance with nature.
                                        </p>
                                        <p class="disc">
                                            We protect endangered wildlife and care for vulnerable animals while building
                                            a better life for the people who share their lands. Our mission is rooted in
                                            compassion, action, and a belief that all lives, human or animal, deserve
                                            dignity.
                                        </p>
                                        <p class="disc">We are here to make a difference not through words, but through
                                            actions that transform lives, restore ecosystems, and build a kinder, more
                                            sustainable world for generations to come.</p>
                                    </div>
                                </div>

                                <!-- Mission Box -->
                                <div class="single-consultancy vision-mission-box">
                                    <div class="icon">
                                        <img src="{{ url('public/assets/frontend/img/mission-icon.png') }}"
                                            alt="Mission Icon">
                                    </div>
                                    <div class="information">
                                        <h4 class="title">Our Mission</h4>
                                        <p class="disc">
                                            <strong>At Being Human, our mission is to protect the voiceless, uplift the
                                                forgotten,
                                                and heal the bond between people and nature.</strong> We work every day to
                                            conserve
                                            nature, wildlife, empower communities, and create meaningful opportunities
                                            guided
                                            by compassion, integrity, and the unwavering belief that every life has value.
                                        </p>
                                        <p class="disc">
                                            Our Being Human is dedicated to nature and animal conservation around the world.
                                            We are committed to addressing the urgent needs in Asia and Africa by tirelessly
                                            protecting endangered species, preserving their natural habitats, and promoting
                                            global awareness of the importance of conservation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Image -->
                        <div class="col-lg-5">
                            <div class="large-thumbnail">
                                <img src="{{ url('public/assets/frontend/img/about-vision-mission-img2.jpg') }}"
                                    alt="Vision Mission Image" class="img-fluid rounded shadow">
                            </div>
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
        .about-style-three .image-box img {
            width: 100%;
            /* transition: all 500ms ease;
                                                                                                                                    border: 14px solid #5e3614;
                                                                                                                                    border-radius: 12px;*/
        }

        .vision-mission-section {
            margin-top: 60px;

            .vision-mission-box {
                display: flex;
                align-items: flex-start;
                background: #b9e9ff;
                border-radius: 12px;
                padding: 25px;
                box-shadow: 0px 1px 20px 0px rgb(9 38 35);
                transition: all 0.3s ease;
                border: 1px solid #d1d1d1;

                &:hover {
                    transform: translateY(-5px);
                    box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.1);
                }

                .icon {
                    flex: 0 0 60px;
                    margin-right: 20px;

                    img {
                        width: 50px;
                        height: auto;
                    }
                }

                .information {
                    .title {
                        font-size: 22px;
                        font-weight: 800;
                        margin-bottom: 10px;
                        /* color: #1d3946; */
                        color: #8a5f3c;
                        font-family: 'Rubik', sans-serif;
                    }

                    .disc {
                        font-size: 15px;
                        line-height: 1.7;
                        color: #444;
                        margin-bottom: 10px;
                        font-family: 'Rubik', sans-serif;
                    }
                }
            }

            .large-thumbnail {
                text-align: center;

                img {
                    border-radius: 16px;
                    max-width: 100%;

                    /*transition: 0.3s ease;
                                                                                                                                            border: 14px solid #5e3614;
                                                                                                                                            */
                    &:hover {
                        /*transform: scale(1.03);*/
                    }
                }
            }
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
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
    <section class="about-style-three sec-pad pb-20">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 col-md-12 font-family-1 page-main-title">
                    <h3>Voice for the Wild and Nature</h3>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box">
                        <img src="{{ url('public/assets/uploads/pages/animal-1868046_1280.jpg') }}" alt="">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column page_info_content">
                    <div class="content_block_three">
                        <div class="content-box">
                            <div class="about_info mb-20">
                                <p>At our Being Human, we prioritize the urgent need in nature and animal conservation
                                    efforts in Africa & Asia. Our dedicated team works towards protecting and preserving the
                                    diverse wildlife & stray animals in our region through various initiatives and
                                    campaigns.</p>
                                <p>We are committed to creating a sustainable future for all species and their habitats.</p>

                            </div>
                            <div class="btn-box">
                                <a href="{{ route('frontend.contact') }}" class="theme-btn btn-one">discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- page Content -->
    <section class="gallery-page-section pt-40">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 col-md-12 pt-0 pb-20">
                    <div class="row clearfix mt-30">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column page_info_content">
                            <div class="content_block_three">
                                <div class="content-box">
                                    <div class="sec-title font-family-1 page-main-title mb-20">
                                        <h3 class="text-capitalized pb-0">Nature Conservation Efforts</h3>
                                    </div>
                                    <div class="inner mb-20">
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
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <figure class="image-box">
                                <img src="{{ url('public/assets/uploads/pages/' . $page_info['feature_image']) }}"
                                    alt="Services Page" />
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 pt-0 pb-20">
                    <div class="row clearfix mt-30">
                        <div class="col-lg-6 col-md-6 col-sm-12 content-column page_info_content">
                            <div class="content_block_three">
                                <div class="content-box about_sub_description ">
                                    <ul>
                                        <li>Reforestation and forest regeneration</li>
                                        <li>Renovating abandoned lakes and ponds (silt-filled).</li>
                                        <li>Creating new lakes and water sources for ecosystems.</li>
                                        <li>Restoring degraded land and soil health.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 content-column page_info_content">
                            <div class="content_block_three">
                                <div class="content-box about_sub_description ">
                                    <ul>
                                        <li>Protecting watersheds and natural catchment areas.</li>
                                        <li>Promoting sustainable land use and organic farming.</li>
                                        <li>Balancing human development with environmental conservation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="chooseus-section sec-pad xs-pt-0 md-pt-70 pt-70">
        <div class="img-wrap parallax-demo-1">
            <div class="parallax-inner back-img"
                style="background-image: url({{ asset('public/assets/frontend/images/background/chooseus-bg.jpg')}});">
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-12 col-md-12 font-family-1 page-main-title">
                    <h3>Wildlife Conservation</h3>
                </div>
                <div class="col-12 col-md-12 about_description page-sub-title">
                    <p>Safeguarding and preserving iconic, endangered species and their habitats through science-based,
                        community-centered strategies in Asia and Africa.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box mr-0">
                        <div class="sec-title page-sub-title">
                            <h3>African Endangered Species Focus:</h3>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-6 col-sm-12 text-column">
                                <div class="text about_description ">
                                    <div>
                                        <ul>
                                            <li>Elephants – Giants under siege</li>
                                            <li>Rhinos – Horns hunted to extinction</li>
                                            <li>Big Cats (Lions, Leopards, Cheetahs) – Regal predators losing ground</li>
                                            <li>Pangolins – Scaled victims of the illegal wildlife trade</li>
                                            <li>African Wild Dogs – Painted wolves on the brink</li>
                                            <li>Marine Life – Beneath the waves, a silent crisis</li>
                                            <li>Birds – Vanishing winged of wonders</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box mr-0">
                        <div class="sec-title page-sub-title">
                            <h3>Asian Endangered Species Focus:</h3>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-6 col-sm-12 text-column">
                                <div class="text about_description ">
                                    <div>
                                        <ul>
                                            <li>Asian Elephant – Endangered and shrinking in number</li>
                                            <li>Snow Leopard – Guardian of the Himalayas</li>
                                            <li>Leopard – Phantom of the Island Forests</li>
                                            <li>Red Panda – Victim of deforestation</li>
                                            <li>Orangutan – Forest orphan of Borneo and Sumatra</li>
                                            <li>Pangolin – World's most trafficked mammal</li>
                                            <li>Saola – The rare "Asian Unicorn"</li>
                                            <li>Marine life - Silent casualties of overfishing and ocean pollution</li>
                                            <li>Birds - Vanishing voices of the skies</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- page Content -->
    <section class="about-style-three sec-pad pb-20 pt-70">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 col-md-12 font-family-1 page-sub-title">
                    <h3>Human Elephant Conflict Resolution</h3>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box">
                        <img src="{{ url('public/assets/uploads/pages/animal-1868046_1280.jpg') }}" alt="">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column page_info_content">
                    <div class="content_block_three">
                        <div class="content-box">
                            <div class="about_info mb-20">
                                <p>As human populations expand and natural habitats shrink, conflicts between communities
                                    and wild elephants have become increasingly frequent and severe. These encounters often
                                    lead to crop damage, property loss, and even human and elephant fatalities. </p>
                                <p>Our mission is to promote peaceful coexistence through innovative, community-led
                                    solutions such as early warning systems, eco-fencing, sustainable land use practices,
                                    and education initiatives. </p>
                                <p>By empowering local communities and working closely with conservation partners, we aim to
                                    reduce conflict, protect livelihoods, and promote coexistence through shared value
                                    systems, conflict prevention, and awareness, ensuring a future where both people and
                                    elephants can thrive. </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- page Content -->
    <section class="gallery-page-section pt-40 pb-20">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 col-md-12 font-family-1 page-sub-title">
                    <h3>Endangered Species Conservation</h3>
                </div>
                <div class="col-12 col-md-12 pt-0 pb-20">
                    <div class="row clearfix mt-30">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column page_info_content">
                            <div class="content_block_three">
                                <div class="content-box">
                                    <div class="inner mb-20">
                                        <p>Protecting endangered species is at the heart of our conservation mission. As
                                            ecosystems face increasing threats from habitat destruction, climate change,
                                            poaching, and human encroachment, countless species are pushed to the brink of
                                            extinction. </p>
                                    </div>
                                    <div class="text mb-20">
                                        <p class=" mb-20">We work tirelessly to safeguard these vulnerable animals through
                                            habitat protection, anti-poaching efforts, scientific research, and community
                                            engagement. By preserving biodiversity, we not only save species from
                                            disappearing but also maintain the health of entire ecosystems, ensuring a
                                            balanced and sustainable future for all life on Earth.</p>
                                        <p>Safeguarding and preserving iconic, endangered species and their habitats through
                                            science-based, community-centered strategies in Asia and Africa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <figure class="image-box">
                                <img src="{{ url('public/assets/uploads/pages/ck_1756584939-54.jpg') }}"
                                    alt="Services Page" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="gallery-page-section pt-40">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 col-md-12 pt-20 pb-20">
                    <div class="about_info pl-0">
                        <div class="pt-0 mb-0 about_sub_description page-sub-title">
                            {!! $page_info['sub_description'] !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 pt-0 pb-20">
                    <div class="about_info">
                        <div class="pt-0 mb-0 about_description page-sub-title">{!! $page_info['description'] !!}</div>
                    </div>
                </div>
                <div class="col-12 col-md-12 pt-0 pb-20">
                    <div class="about_info">
                        <div class="pt-0 mb-0 about_description page-sub-title">
                            <h3>Stray Animal Welfare (Asia &amp; Africa)</h3>

                            <p>Millions of stray animals around the world face daily struggles for food, shelter, and
                                safety. At the heart of our work is the belief that every animal deserves compassion and
                                care.</p>

                            <p>We are dedicated to providing medical care, promoting adoptions, and implementing humane
                                population control for street dogs and cats, giving stray animals across Asia and Africa
                                a
                                second chance at life, filled with love, care, and the safety of a home.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 pt-0 pb-20">
                    <div class="about_info">
                        <div class="pt-0 mb-0 about_description page-sub-title">
                            <h3>Wildlife Rescue &amp; Rehabilitation</h3>

                            <p>Wildlife rehabilitation involves healing and caring for the sick, injured, and orphaned
                                through sanctuaries, hospitals, and emergency response in order to release them back
                                into
                                their natural habitat.</p>

                            <h3>Environmental Education Initiatives</h3>

                            <p>Environmental education workshops provide hands-on learning opportunities and practical
                                solutions for individuals to make positive impacts on the environment.</p>

                            <h3>Community Outreach Projects</h3>

                            <p>Community outreach programs are designed to engage and support local communities through
                                various wildlife conservation-related initiatives and services by promoting positive
                                change.
                            </p>

                            <p>Stimulating sustainable livelihoods and education through conservation programs. Creating
                                jobs, training future protectors, and uplifting the communities closest to nature.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End Page Content -->


@endsection

@push('css')
    <style>
        figure.image-box img {
            /* border: 14px solid #5e3614; */
        }

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
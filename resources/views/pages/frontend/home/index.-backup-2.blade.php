@extends('layouts.frontend')

@section('content')



<!-- Alumni Form Modal -->
<div class="modal fade" id="alumni" tabindex="-1" aria-labelledby="alumniLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 item-flex-center mt-10">
                        <h5 class="mb-0">Alumni Form</h5>
                    </div>
                    <div class="col-12">
                        <div class="contact__form">
                            <form action="#" class="needs-validation" id="alumni_form" method="post" novalidate enctype="multipart/form-data" role="form">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <select aria-label="" class="form-control form-select" id="branch" name="branch" required>
                                                <option value="" selected>Choose Branch *</option>
                                                <option value="Colombo">Colombo</option>
                                                <option value="Kandy">Kandy</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Choose Branch
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input aria-label="" type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter Your First Name *" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a full First Name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input aria-label="" type="text" class="form-control" id="surname" name="surname" placeholder="Enter Your Surname *" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a valid Surname
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input aria-label="" type="email" class="form-control" id="stuAlumniEmail" name="stu_alumni_email" placeholder="Enter Email *" required>
                                            <div class="valid-feedback">
                                                This email is valid
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a valid Email
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input aria-label="" type="text" class="form-control" id="stuId" name="stu_id" placeholder="Enter Student ID *" required>
                                            <div class="valid-feedback">
                                                This ID is valid
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a Student ID
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input aria-label="" type="text" class="form-control" id="stuPrevCourse" name="stu_prev_course" placeholder="Enter Previous Programme *" required>
                                            <div class="valid-feedback">
                                                This course is valid
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter previous programme
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input aria-label="" type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile *" required>
                                            <div class="valid-feedback">
                                                This mobile is valid
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a Mobile
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <textarea aria-label="" id="stuComment" name="stu_comment" class="form-control" rows="3" placeholder="Comments or additional info you want to provide us.." cols="50"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pt-4">
                                        <div class="item-flex-center">
                                            <button type="submit" class="contact-send-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--
        Learning Experience Tailored to Your Lifestyle
        Professional Skills Development
        Guidance for Post-Study Opportunities
    -->

    <!-- ===============>> Slider/Banner section start here <<================= -->
    <section class="slider main-home">
        <div class="slider-content slide1">
            <div class="banner brand-1">
                <div class="container-fluid">
                    <div class="banner__wrapper">
                        <!-- banner content -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 relative pl-0 pr-0">
                                <div class="item-flex-center-1">
                                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                                        <!-- Indicators/dots -->
                                      <div class="carousel-indicators">
                                            @foreach ($main_slider as $index => $slider)
                                                <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></button>
                                            @endforeach
                                        </div>

                                        <!-- The slideshow/carousel -->
                                        <div class="carousel-inner">
                                            @foreach ($main_slider as $index => $slider)
                                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                    <img src="{{ url('public/assets/frontend/img/sliders/' . $slider->banner) }}" alt="{{ $slider->heading }}" class="d-block w-100" />
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <div class="content-part pt-0">
                                                            <h3 class="sl-sub-title wow bounceInDown" data-wow-delay="400ms" data-wow-duration="2000ms">
                                                                @if($slider->icon)
                                                                    <img src="{{ asset('public/assets/frontend/img/sliders/' . $slider->icon) }}" alt="Icon" class="first-class-icon" />
                                                                @endif
                                                            </h3>
                                                            <h2 class="sl-title wow fadeInDown" data-wow-delay="500ms" data-wow-duration="2000ms">{{ $slider->heading }}</h2>

                                                            <div class="sl-desc wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                                                                {!! $slider->description !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>


                                        <!-- Left and right controls/icons -->
                                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                          <span class="carousel-control-next-icon"></span>
                                        </button>
                                    </div>
                                    {{-- <div id="image-container">
                                        <img src="{{ url('public/assets/images/banner/1.png') }}" class="p-3 " alt="Image 1" />
                                        <img src="{{ url('public/assets/images/banner/2.png') }}" class="p-3 " alt="Image 2" />
                                        <img src="{{ url('public/assets/images/banner/1.png') }}" class="p-3 " alt="Image 3" />
                                        <img data-src="{{ url('public/assets/images/banner/2.png') }}" class="p-3 " alt="Image 4" />
                                        <img data-src="{{ url('public/assets/images/banner/1.png') }}" class="p-3 " alt="Image 5" />
                                        <img data-src="{{ url('public/assets/images/banner/2.png') }}" class="p-3 " alt="Image 6" />
                                        <img data-src="{{ url('public/assets/images/banner/1.png') }}" class="p-3 " alt="Image 7" />
                                        <img data-src="{{ url('public/assets/images/banner/2.png') }}" class="p-3 " alt="Image 8" />
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="content-part pt-0">
                                    <h3 class="sl-sub-title wow bounceInDown" data-wow-delay="400ms" data-wow-duration="2000ms">
                                        Creating
                                    </h3>
                                    <h2 class="sl-title wow fadeInDown" data-wow-delay="500ms" data-wow-duration="2000ms">Leaders</h2>
                                    <h3 class="sl-sub-title-2 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                        Where Wisdom Meets Innovation
                                    </h3>
                                    <p class="sl-desc wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                                        At ImperialWisdom Graduate Campus, tradition and technology converge to shape the leaders of tomorrow. We blend academic excellence with forward-thinking solutions—empowering you to learn, grow, and lead in a rapidly evolving world.
                                    </p>
                                    <div class="item-flex-start wow fadeInUp" data-wow-delay="1400ms" data-wow-duration="2000ms">
                                        <a href="#" class="trk-btn trk-btn trk-btn--secondary2 mt-2">About Us</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Slider/Banner section end here <<================= -->




<!-- ===============>> Course Search section Start here <<================= -->
<section class="course-filter relative d-none">
    <div class="container-fluid cf-container bg-clr-1 br-0">
        <div class="row px-4 py-4">
            <div class="col-12 mb-3">
                <div class="title-cs text-center">
                    <h2>Course Details Search</h2>
                </div>
            </div>
            <form method="post" class="p-0 mb-3" action="#">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 item-flex-center py-2 pe-2"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 item-flex-center py-2 pe-2">
                        <div class="searchInputGroup relative width-100">
                            <input aria-label="" type="text" class="form-control input-custom bg-clr-2 br-20" name="" id="searchInput" placeholder="Keyword here">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 item-flex-center py-2">
                        <div class="width-100">
                            <button type="button" class="form-control input-custom bg-clr-2 btn-search br-20" name="btn-submit" id="btnSubmit">
                                Search
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 item-flex-center py-2 pe-2"></div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ===============>> Course Search section end here <<================= -->


    <!-- ===============>> About Story section start here <<================= -->
    <section class="about padding-top padding-bottom brand1-bg-1 cus-bg-story mt-0 mb-0">
        <div class="container">
            <div class="categories__wrapper">
                <div class="row g-4">
                    <div class="col-sm-12 d-none-desktop" data-aos="fade-right" data-aos-duration="800">
                        <div class="section-header pe-3">
                            <h2 class="relative title-underline-cus1">Welcome to </br>Imperial Wisdom Graduate Campus</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="item-flex-center vid-thumbnail relative p-4">
                            <a href="https://www.youtube.com/watch?v=LlCwHnp3kL4" data-fslightbox>
                                <video width="100%" autoplay muted class="item-flex-center width-100" id="video-source"></video>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="800">
                        <!--                    <div class="col-lg-4 col-md-6 col-sm-12">-->
                        <div class="section-header story-desc p-4 mb-0">
                            <div>
                                <h2 class="relative title-underline-cus1 d-none-mobile mb-5">Welcome to </br>Imperial Wisdom Graduate Campus</h2>
                                <p class="text-justify pt-15 sm-pt-10 mb-0">
                                    Welcome to ImperialWisdom Graduate Campus (IWGC) - a premier higher education institute in Sri Lanka, dedicated to nurturing academic excellence and producing globally competitive graduates. At IWGC, we provide cutting-edge academic programs, world-class faculty, and an enriching learning environment that fosters innovation, critical thinking, and personal growth.
                                </p>
                                <p class="text-justify pt-15 sm-pt-10 mb-0">
                                    Whether you're aiming for a career in business, technology, or social sciences, IWGC offers the tools, mentorship, and global exposure you need to thrive. Join a community committed to pushing boundaries and achieving greatness.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> About Story section end here <<================= -->



 <!-- ===============>> Partner section start here <<================= -->
 <section class="partner pt-50 pb-50" data-aos="fade-up" data-aos-duration="800">
    <div class="container mb-4">
        <div class="row mb-4">
            <div class="col-12 item-flex-center mb-20">
                <h2 class="relative title-underline-cus2">Why Choose ImperialWisdom?</h2>
            </div>
        </div>
    </div>
 </section>


 <!-- ===============>> Partner section start here <<================= -->
 <section class="partner pt-50 pb-50 why-choose-area" data-aos="fade-up" data-aos-duration="800">
    <div class="container mb-4">
        <div class="row why-choose-area-bg">
            <div class="col-lg-6 col-md-6 col-12">

            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="swiper partner__carousel">
                    <div class="swiper-wrapper">
                        <div class="accordion" id="accordionWhyChooseUs">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collaps_wcu_01" aria-expanded="true" aria-controls="collaps_wcu_01">
                                  Tailored Academic Pathways
                                </button>
                              </h2>
                              <div id="collaps_wcu_01" class="accordion-collapse collapse show" data-bs-parent="#accordionWhyChooseUs">
                                <div class="accordion-body">
                                  <h6 class="fw-bold">No matter what, your solution awaits</h6>
                                  <p>Whether you're stepping into higher education for the first time or looking to elevate your current qualifications, we specialize in providing <strong>bespoke academic solutions</strong>. From clarifying credentials to enhancing your profile, we guide you every step of the way</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps_wcu_02" aria-expanded="false" aria-controls="collaps_wcu_02">
                                   Find Your Direction
                                </button>
                              </h2>
                              <div id="collaps_wcu_02" class="accordion-collapse collapse" data-bs-parent="#accordionWhyChooseUs">
                                <div class="accordion-body">
                                    <h6 class="fw-bold">Lost in a maze of options? We'll help you choose right</h6>
                                    <p>Struggling to decide which course aligns with your career or migration dreams? Feeling overwhelmed by choices? Our expert counselors are here to help you <strong>make confident, informed decisions</strong> for a brighter future.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps_wcu_03" aria-expanded="false" aria-controls="collaps_wcu_03">
                                    Break Free from Academic Burdens
                                </button>
                              </h2>
                              <div id="collaps_wcu_03" class="accordion-collapse collapse" data-bs-parent="#accordionWhyChooseUs">
                                <div class="accordion-body">
                                    <h6 class="fw-bold">Life is busy. Your education should adapt</h6>
                                    <p>Tight work schedules, family responsibilities, and everyday pressures shouldn’t hold you back. We offer <strong>flexible learning models</strong>—including fully online and hybrid programs—so you can balance life and learning without compromise.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps_wcu_04" aria-expanded="false" aria-controls="collaps_wcu_04">
                                    Fix Qualification Gaps
                                </button>
                              </h2>
                              <div id="collaps_wcu_04" class="accordion-collapse collapse" data-bs-parent="#accordionWhyChooseUs">
                                <div class="accordion-body">
                                    <h6 class="fw-bold">Not satisfied with your current qualifications? You're not alone</h6>
                                    <p>If your existing credentials feel inadequate or misaligned with your goals, it's time to upgrade. We offer <strong>qualification top-ups, bridging programs, and personalized pathways</strong> to make your profile globally competitive.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps_wcu_05" aria-expanded="false" aria-controls="collaps_wcu_05">
                                    Empower What You Already Have
                                </button>
                              </h2>
                              <div id="collaps_wcu_05" class="accordion-collapse collapse" data-bs-parent="#accordionWhyChooseUs">
                                <div class="accordion-body">
                                    <h6 class="fw-bold">Unlock the full potential of your existing qualification</h6>
                                    <p>Through internships, industry workshops, learning hour upgrades, and supplementary modules, we help <strong> add value and relevance to your current education</strong>.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps_wcu_06" aria-expanded="false" aria-controls="collaps_wcu_06">
                                    Study Abroad & Migration Support
                                </button>
                              </h2>
                              <div id="collaps_wcu_06" class="accordion-collapse collapse" data-bs-parent="#accordionWhyChooseUs">
                                <div class="accordion-body">
                                    <h6 class="fw-bold">Got goals beyond borders? Let's pave the way</h6>
                                    <p>We provide expert assistance for those aiming to use their qualifications for <strong>migration or overseas study</strong>. With our global academic network, your dreams are always within reach.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps_wcu_07" aria-expanded="false" aria-controls="collaps_wcu_07">
                                    Future-Ready Learning Experience
                                </button>
                              </h2>
                              <div id="collaps_wcu_07" class="accordion-collapse collapse" data-bs-parent="#accordionWhyChooseUs">
                                <div class="accordion-body">
                                    <h6 class="fw-bold">Education that adapts to you</h6>
                                    <p>With our advanced online learning platforms, you can study anytime, from anywhere. Say goodbye to the traditional classroom hustle and hello to <strong>modern, student-centric learning</strong> that fits your lifestyle.</p>
                                </div>
                              </div>
                            </div>

                          </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ===============>> Partner section end here <<================= -->


 <!-- ===============>> Partner section start here <<================= -->
 {{-- <section class="partner pt-100 pb-50" data-aos="fade-up" data-aos-duration="800">
    <div class="container mb-4">
        <div class="row mb-4">
            <div class="col-12 item-flex-center mb-20">
                <h2 class="relative title-underline-cus2">Mission and Vision</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h3>Our Mission:</h3>
                </div>
                <div class="col-12 col-md-12">
                    <p>“At Imperial Wisdom Graduate Campus, we are dedicated to democratizing access to world-class education. Leveraging cutting-edge online platforms and dynamic in-person learning experiences, we deliver globally recognized qualifications that inspire individuals to excel as future leaders, innovators, and entrepreneurs. Our mission is rooted in fostering inclusive, student-centered environments where education transcends boundaries, empowering learners to thrive anytime, anywhere, and at an accessible cost.”</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <h3>Our Vision:</h3>
                </div>
                <div class="col-12 col-md-12">
                    <p>“Our vision is to redefine excellence in education by shaping a global community of visionary leaders and trailblazers. We aim to be the cornerstone of academic and professional achievement, equipping learners with the skills and expertise to lead in an ever-evolving world. As a trusted partner to employers worldwide, we envision a future where equitable access to transformative education uplifts individuals and reshapes societies.”</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}


 <!-- ===============>> Partner section start here <<================= -->
<section class="partner pt-50 pb-50" data-aos="fade-up" data-aos-duration="800">
    <div class="container mb-4">
        <div class="row mb-4">
            <div class="col-12 item-flex-center mb-20">
                <h2 class="relative title-underline-cus2">Our Partners</h2>
            </div>
        </div>

        <div class="swiper partner__carousel">
            <div class="swiper-wrapper">

                <!-- Partner Item Start -->
                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.uws.ac.uk/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/15.png') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.qmu.ac.uk/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/13.png') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.scu.edu.au/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/14.png') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.sqa.org.uk/sqa/70972.html" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/12.png') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.aicpa-cima.com/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/16.png') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.uws.ac.uk/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/2.jpg') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.icaew.com/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/3.jpg') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.managers.org.uk/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/4.jpg') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.ifa.org.uk/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/5.jpg') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://aatsl.lk/index.php/en/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/7.jpg') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.aiaworldwide.com/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/8.jpg') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.cipfa.org/" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/9.jpg') }}" alt="partner logo" />
                    </a>
                </div>

                <div class="swiper-slide partners-main px-2 py-4 item-flex-center">
                    <a href="https://www.accaglobal.com/gb/en.html" target="_blank">
                        <img data-src="{{ url('public/assets/images/partner/10.jpg') }}" alt="partner logo" />
                    </a>
                </div>
                <!-- Partner Item End -->

            </div>

            <!-- Pagination -->
            <div class="partners_carouser__pagination-1 text-center mt-4"></div>
        </div>
    </div>
</section>
<!-- ===============>> Partner section end here <<================= -->

<!-- campus -->
<div class="modal fade" id="campusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="campusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                Choose Campus
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" class="needs-validation" id="campusName" method="post" novalidate enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="input-group">
                                <select aria-label="" class="form-control form-select" id="campusLatter" name="campus" required>
                                    <option value="" selected>Choose Nearest Campus *</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Kandy">Kandy</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please Choose Campus
                                </div>
                            </div>
                            <div class="input-group mt-10">
                                <select aria-label="" class="form-control form-select" id="programme" name="programme" required>
                                    <option value="" selected>Choose Programme *</option>
                                    <option value="Degree Foundation">Degree Foundation</option>
                                    <option value="Business HND With Marketing Management">Business HND With Marketing Management</option>
                                    <option value="Business HND With Human Resource Management">Business HND With Human Resource Management</option>
                                    <option value="Business HND With Business Analytics">Business HND With Business Analytics</option>
                                    <option value="Australian Degree Year 1 Diploma">Australian Degree Year 1 Diploma</option>
                                    <option value="BA (Hons) International Business and Finance">BA (Hons) International Business and Finance</option>
                                    <option value="BA Global Business (Top-Up)">BA Global Business (Top-Up)</option>
                                    <option value="BSc (Hons) Business Management with international Business">BSc (Hons) Business Management with international Business</option>
                                    <option value="BSc (Hons) Business Management with Marketing Management">BSc (Hons) Business Management with Marketing Management</option>
                                    <option value="BSc (Hons) Business Management with Human Resource Management">BSc (Hons) Business Management with Human Resource Management</option>
                                    <option value="MBA International Business">MBA International Business</option>
                                    <option value="MBA (General)">MBA (General)</option>
                                    <option value="MBA in Human Resources Management">MBA in Human Resources Management</option>
                                    <option value="MBA with Business Analytics">MBA with Business Analytics</option>
                                    <option value="MSC Strategic Marketing">MSC Strategic Marketing</option>
                                    <option value="CIMA (Chartered Institute of Management Accountants)">CIMA (Chartered Institute of Management Accountants)</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please Choose Campus
                                </div>
                            </div>
                            <div class="input-group mt-10">
                                <input aria-label="" type="tel" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number *" required>
                                <div class="valid-feedback">
                                    This contact is valid
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a valid number
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-lg-12 pt-4">
                        <div class="item-flex-center">
                            <button type="submit" class="contact-send-btn">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        img.img-fluid.login-logo{
            width: 120px !important;
        }
        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }
        .music_area {
            position: relative;
            margin-top: -164px;
        }
        .wave-path {
            position: relative;
            height: 130px;
            justify-content: center;
            align-content: end;
            .wave-mask{
                width: 100%;
                height: 24px;
                background: #ffffff70;
                position: absolute;
                bottom: 0px;
                z-index: 2;
            }
            .play_btn{
                position: absolute;
                top: 10px;
                z-index: 6;
                background-color: #f50;
                border-radius: 30px;
                font-size: 11px;
                color: #fff;
            }
            .time_count{
                position: absolute;
                top: 20px;
                right: 1px;
                background: #0000009e;
                z-index: 6;
                color: #fff;
                padding: 4px;
                font-size: 11px;
            }
            .song_details{
                position: absolute;
                top: 0px;
                left: 42px;
                span{
                    font-size: 10px;
                }
                h6{
                    font-size: 11px;
                }
            }
            .published_date{
                position: absolute;
                top: 5px;
                right: 0px;
                font-size: 9px;
                color: #fff;
                text-transform: capitalize;
            }
            &:hover #waveform {
                filter: brightness(1.2);
                cursor:pointer;
                opacity:1;
            }
        }
        .about_info p {
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }

        .all_music_tracks{
            .song_details{
                span{
                    color: #000;
                }
                h6{
                    color: #000;
                }
            }
            .music_btn{
                position: absolute;
                right: 50px;
                top: 2px;
                a{

                }
            }
        }
    </style>
@endpush
@push('scripts')
    {{-- <script src="https://unpkg.com/wavesurfer.js"></script> --}}
    <script>
        $(document).ready(function () {

        });
    </script>
@endpush

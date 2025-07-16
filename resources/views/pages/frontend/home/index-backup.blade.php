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
    <!-- ===============>> Slider/Banner section start here <<================= -->
    <section class="slider main-home">
        <div class="slider-content slide1">
            <div class="banner brand-1">
                <div class="container">
                    <div class="banner__wrapper">
                        <!-- banner content -->
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 relative">
                                <div class="item-flex-center">
                                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                                        <!-- Indicators/dots -->
                                        <div class="carousel-indicators">
                                          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                                          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                        </div>

                                        <!-- The slideshow/carousel -->
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img src="{{ url('public/assets/frontend/img/sliders/slider_1.jpg') }}" alt="Los Angeles" class="d-block w-100">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="{{ url('public/assets/frontend/img/sliders/slider_2.jpg') }}" alt="Chicago" class="d-block w-100">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="{{ url('public/assets/frontend/img/sliders/slider_3.jpg') }}" alt="New York" class="d-block w-100">
                                          </div>
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
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="content-part pt-0">
                                    <h3 class="sl-sub-title wow bounceInDown" data-wow-delay="400ms" data-wow-duration="2000ms">
                                        Creating
                                    </h3>
                                    <h2 class="sl-title wow fadeInDown" data-wow-delay="500ms" data-wow-duration="2000ms">Leaders</h2>
                                    <h3 class="sl-sub-title-2 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                        for a Changing World
                                    </h3>
                                    <p class="sl-desc wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                                        Since 1985 our unwavering commitment lies in providing an exceptional learning journey to empower students.
                                        With esteemed global educational partners, we offer comprehensive and globally relevant educational opportunities.
                                        Join us as we equip you to confidently tackle the challenges of today and tomorrow, preparing you for success in the dynamic world of business.
                                    </p>
                                    <div class="item-flex-start wow fadeInUp" data-wow-delay="1400ms" data-wow-duration="2000ms">
                                        <a href="#" class="trk-btn trk-btn trk-btn--secondary2 mt-2">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Slider/Banner section end here <<================= -->


<!-- ===============>> Course Search section Start here <<================= -->
<section class="course-filter relative">
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

    <!-- ===============>> Course categories section start here <<================= -->
    <section class="categories categories--style1 padding-bottom pt-cat">
        <div class="container">
            <div class="categories__wrapper">
                <div class="row g-4">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-header pe-3">
                            <h2 class="relative title-underline-cus1">Programmes<br> We Offer</h2>
                            <p class="text-justify mt-12">
                                In collaboration with global educational bodies, we offer a comprehensive range of programs to prepare students for success in the business world.
                                Our portfolio includes undergraduate programs, postgraduate programs, professional programs, and transfer abroad programs,
                                combining theoretical knowledge with practical applications. With a strong focus on innovation, leadership, and adaptability,
                                our curriculum equips students to navigate the dynamic global business landscape and make a meaningful impact in your chosen fields.<br><br>
                                Together, we shape your future!
                            </p>
                            <div class="item-flex-start categories mobile-flex ps-lg-0">
                                <a href="#" class="trk-btn trk-btn--secondary1 mt-4">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- All courses with slider -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="course__wrapper">
                            <div class="course__slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="cat__item">
                                                <div class="cat__item-inner height-100">
                                                    <div class="cat__item-thumb">
                                                        <img data-src="{{ url('public/assets/images/course/programmes/withlogo/1.png') }}" alt="Category Image" />
                                                    </div>
                                                    <div class="cat__item-content cat__item-content--style1 always-show-title">
                                                        <div class="cat__item-author">
                                                            <h6>Degree Foundation</h6>
                                                            <p>More Info &bkarow;</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="cat__item">
                                                <div class="cat__item-inner height-100">
                                                    <div class="cat__item-thumb">
                                                        <img data-src="{{ url('public/assets/images/course/programmes/withlogo/6-i.png') }}" alt="Category Image" />
                                                    </div>
                                                    <div class="cat__item-content cat__item-content--style1 always-show-title">
                                                        <div class="cat__item-author">
                                                            <h6>International Specialised Diploma in Marketing Management</h6>
                                                            <p>More Info &bkarow;</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="cat__item">
                                                <div class="cat__item-inner height-100">
                                                    <div class="cat__item-thumb">
                                                        <img data-src="{{ url('public/assets/images/course/programmes/withlogo/3.png') }}" alt="Category Image" />
                                                    </div>
                                                    <div class="cat__item-content cat__item-content--style1 always-show-title">
                                                        <div class="cat__item-author">
                                                            <h6>International Specialised Diploma in Human Resource Management</h6>
                                                            <p>More Info &bkarow;</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="cat__item">
                                                <div class="cat__item-inner height-100">
                                                    <div class="cat__item-thumb">
                                                        <img data-src="{{ url('public/assets/images/course/programmes/withlogo/4.png') }}" alt="Category Image" />
                                                    </div>
                                                    <div class="cat__item-content cat__item-content--style1 always-show-title">
                                                        <div class="cat__item-author">
                                                            <h6>International Specialised Diploma in International Business</h6>
                                                            <p>More Info &bkarow;</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="cat__item">
                                                <div class="cat__item-inner height-100">
                                                    <div class="cat__item-thumb">
                                                        <img data-src="{{ url('public/assets/images/course/programmes/withlogo/5.png') }}" alt="Category Image" />
                                                    </div>
                                                    <div class="cat__item-content cat__item-content--style1 always-show-title">
                                                        <div class="cat__item-author">
                                                            <h6>Australian Degree Year 1 Diploma</h6>
                                                            <p>More Info &bkarow;</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="cat__item">
                                                <div class="cat__item-inner height-100">
                                                    <div class="cat__item-thumb">
                                                        <img data-src="{{ url('public/assets/images/course/programmes/withlogo/2.png') }}" alt="Category Image" />
                                                    </div>
                                                    <div class="cat__item-content cat__item-content--style1 always-show-title">
                                                        <div class="cat__item-author">
                                                            <h6>BA Global Business (Top-Up)</h6>
                                                            <p>More Info &bkarow;</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="slider__pagination-1"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Course categories section end here <<================= -->

    <!-- ===============>> About Story section start here <<================= -->
    <section class="about padding-top padding-bottom brand1-bg-1 cus-bg-story">
        <div class="container">
            <div class="categories__wrapper">
                <div class="row g-4">
                    <div class="col-sm-12 d-none-desktop" data-aos="fade-right" data-aos-duration="800">
                        <div class="section-header pe-3">
                            <h2 class="relative title-underline-cus1">Story of<br> Imperial College</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="item-flex-center vid-thumbnail relative p-4">
                            <a href="https://www.youtube.com/watch?v=LlCwHnp3kL4" data-fslightbox>
                                <video width="100%" autoplay muted class="item-flex-center width-100" id="video-source"></video>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="800">
                        <!--                    <div class="col-lg-4 col-md-6 col-sm-12">-->
                        <div class="section-header story-desc p-4 mb-0">
                            <div>
                                <h2 class="relative title-underline-cus1 d-none-mobile mb-5">Story of<br> Imperial College</h2>
                                <p class="text-justify pt-15 sm-pt-10 mb-0">
                                    Imperial College of Business Studies Sri Lanka is a beacon of excellence in education.
                                    With a rich history and commitment to transformative learning, we offer globally recognized programs.
                                    Our distinguished faculty and strategic partnerships create a dynamic environment that prepares students to thrive
                                    in the competitive business landscape.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> About Story section end here <<================= -->

    <!-- ===============>> counter start here <<================= -->
    <section class="counter padding-top padding-bottom counter-bg">
        <div class="container">
            <div class="counter__wrapper">
                <div class="row g-5">
                    <div class="col-md-8 col-sm-12 mt-0 counter-sub align-content-center">
                        <div class="row justify-content-center">
                            <div class="col-4 text-center">
                                <div class="counter__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    <!--                                <div class="counter__item">-->
                                    <div class="counter__item-inner">
                                        <div class="counter__item-content">
                                            <h2 class="text-center"><span class="counter purecounter" data-purecounter-start="0" data-purecounter-end="60" data-purecounter-once="false">60</span>+</h2>
                                            <h5 class="text-center">Awards</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="counter__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <!--                                <div class="counter__item">-->
                                    <div class="counter__item-inner">
                                        <div class="counter__item-content">
                                            <h2 class="text-center"><span class="counter purecounter" data-purecounter-start="0" data-purecounter-end="92" data-purecounter-once="false">92</span>%</h2>
                                            <h5 class="text-center"> Student Placements</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="counter__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    <!--                                <div class="counter__item">-->
                                    <div class="counter__item-inner">
                                        <div class="counter__item-content">
                                            <h2 class="text-center"><span class="counter purecounter" data-purecounter-start="0" data-purecounter-end="75" data-purecounter-once="false">75</span>K+</h2>
                                            <h5 class="text-center">Students</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 counter-main text-center mt-0">
                        <div class="counter__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <!--                        <div class="counter__item">-->
                            <div class="counter__item-inner">
                                <div class="counter__item-content">
                                    <h2 class="text-center"><span class="counter purecounter" data-purecounter-start="0" data-purecounter-end="24" data-purecounter-once="false">24</span>+</h2>
                                    <h5 class="text-center">Global Partners</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> counter end here <<================= -->

 <!-- ===============>> Testimonials section start here <<================= -->
 <section class="testimonial pt-80" data-aos="fade-up" data-aos-duration="800">
    <!--    <section class="testimonial pt-80">-->
    <div class="container mb-3">
        <div class="row mb-40 md-mb-20 sm-mb-10">
            <div class="col-12 item-flex-center mb-30 md-mb-20 sm-mb-15">
                <h2 class="relative title-underline-cus2">Success Stories</h2>
            </div>
        </div>
        <div class="row mx-4 my-3">
            <div class="section-padding">
                <div class="custom_testimonial_slider owl-carousel relative">
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t1.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=LMD0mbo_kCU" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t2.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=UJSd4g3usb8" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t3.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=rdn0ppeMyHY" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t4.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=SIrKttRRsTk" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t5.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=8CEd4INlogE" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t6.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=GpNCg9eJ0ys" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t7.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=DKUXgv0hDmY" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t8.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=dZ0DYRfisIA" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t9.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=GaLDP2kbdn8" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t10.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=qrMywJR6cAg" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item relative">
                        <img data-src="{{ url('public/assets/images/testimonial/t11.png') }}" alt="Testimonial image" title="" />
                        <div>
                            <div class="play-btn-abs">
                                <div class="play-btn-box text-center">
                                    <a href="https://www.youtube.com/watch?v=bpIU4GBvidU" data-fslightbox><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ===============>> Testimonials section end here <<================= -->

    <!-- ===============>> Blog section start here <<================= -->
    <section class="blog blog--style1 pt-80 pb-20 md-pt-50 sm-pt-30 brand1-bg-1">
        <div class="container mb-5">
            <div class="row mb-4">
                <div class="col-6 item-flex-start mb-4">
                    <h2 class="relative title-underline-cus1-2">Latest News, Blog & Articles</h2>
                </div>
                <div class="col-6 item-flex-end mb-5 blog-news">
                    <a href="#" class="trk-btn trk-btn--secondary1">View More</a>
                </div>
            </div>
            <div class="blog__wrapper pt-30 md-pt-20 sm-pt-15">
                <div class="row g-4" id=articleList>
                    <div class="blog__wrapper pt-30 md-pt-20 sm-pt-15">
                        <div class="row g-4" id="articleList"><div class="col-lg-4 col-md-4 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blog__item">
                                <div class="blog__item-inner">
                                    <div class="blog__thumb">
                                        <img src="{{ url('public/assets/frontend/img/events/62t_1737525444.jpg') }}" alt="blog Images">
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__content-top">
                                            <span class="blog__meta-tag blog__meta-tag--cat2">Event</span>
                                        </div>
                                        <h6> <a href="#">The Pride of Being Awarded for Our Contribution to Fostering Positive Change Across Sri Lanka</a> </h6>
                                        <p></p><p><span style="color:#000000"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:14px">Going from strength to strength, Imperial College of Business Studies was recently honored with two prestigious awards: the “Overall Sustainability Society Award” and the “Global Sustainability Gold Award for Sustainable Academic and Professional Education” by the ICSG Global Sustainability Recognition Awards 2025.</span></span></span></p>
        <p></p>
                                        <div class="blog__content-bottom blog__content-bottom--border">
                                            <a href="javascript:void(0)">
                                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                                20&nbsp;
                                                January&nbsp;
                                                2025&nbsp;
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 col-md-4 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <div class="blog__item">
                                <div class="blog__item-inner">
                                    <div class="blog__thumb">
                                        <img src="{{ url('public/assets/frontend/img/events/61t_1736938188.jpg') }}" alt="blog Images">
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__content-top">
                                            <span class="blog__meta-tag blog__meta-tag--cat2">Event</span>
                                        </div>
                                        <h6> <a href="#">Imperial College of Business Studies Graduation 2024 Over 500 Dreams Take Flight</a> </h6>
                                        <p></p><p style="text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Imperial College of Business Studies marked a significant milestone on the 19th of December by hosting its 7th consecutive graduation ceremony.</span></span></p>
        <p></p>
                                        <div class="blog__content-bottom blog__content-bottom--border">
                                            <a href="javascript:void(0)">
                                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                                15&nbsp;
                                                January&nbsp;
                                                2025&nbsp;
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 col-md-4 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="600">
                            <div class="blog__item">
                                <div class="blog__item-inner">
                                    <div class="blog__thumb">
                                        <img src="{{ url('public/assets/frontend/img/events/60t_1736937718.jpg') }}" alt="blog Images">
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__content-top">
                                            <span class="blog__meta-tag blog__meta-tag--cat2">Event</span>
                                        </div>
                                        <h6> <a href="#">Winter ball Christmas Party</a> </h6>
                                        <p></p><p style="text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">The Student Council of Imperial College of Business Studies, Kandy Campus, hosted Imperial Winter Ball 2024 at the Earl's Regent Hotel in Kandy.</span></span></p>
        <p></p>
                                        <div class="blog__content-bottom blog__content-bottom--border">
                                            <a href="javascript:void(0)">
                                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                                30&nbsp;
                                                December&nbsp;
                                                2024&nbsp;
                                            </a>
                                        </div>
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
    <!-- ===============>> Blog section end here <<================= -->



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


    <!-- ===============>> newsletter start here <<================= -->
{{-- <section class="newsletter" data-aos="fade-up" data-aos-duration="800">
    <!--<section class="newsletter">-->
    <div class="container">
        <div class="newsletter__wrapper">
            <div class="newsletter__content">
                <div class="newsletter__content-inner newsletter__content-inner--style1 text-center">
                    <h2>Get In Touch </h2><br>
                    <p class="newslatter-text mx-5 mb-2">Enter your email address, one of our student consultants will reach out to you within 24 hours</p>
                    <form class="newsletter-form" id="newsletter" method="post" action="#" enctype="multipart/form-data" role="form">
                        <!-- <input type="hidden" name="newsletter-form" id="newsLetterFormType" value="newsletter-frm"> -->
                        <div class="relative item-flex-center mx-5 mt-4 mb-3">
                            <input aria-label="" type="email" class="form-control input-custom newsletter-email-input width-60 my-1" name="email-news" id="emailNews" placeholder="Your email address" required>
                            <button type="submit" class="newsletter-btn my-1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ===============>> newsletter end here <<================= -->


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

@extends('layouts.frontend')

@section('content')

<!-- banner-section -->
<section class="banner-section">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
        @foreach ($main_slider as $slider)
            <div class="slide-item">
                <div class="image-layer" style="background-image:url('{{ asset('public/assets/frontend/img/sliders/' . $slider->banner) }}')"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h3>{{ $slider->icon }}</h3>
                        <h2>{{ $slider->heading }}</h2>
                        <div class="btn-box">
                            <a href="{{ $slider->link ?? route('frontend.home.products') }}" class="theme-btn btn-one">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- banner-section end -->


<!-- info-section -->
<section class="info-section">
    <div class="bg-layer"></div>
    <span class="rotate-text">wild animal zoo</span>
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-ticket"></i></div>
                        {{-- <h5><a href="index.html">Buy Tickets</a></h5> --}}
                        <p>Being Human Global is a Sri Lanka-based international conservation foundation dedicated to protecting wildlife and their natural habitats as vital components of a sustainable and thriving future. We champion a unique vision of community-driven conservation, emphasizing solutions that empower people — not by sacrificing wildlife and ecosystems, but by valuing and preserving them.</p>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-calendar"></i></div>
                        <h5><a href="index.html">new events</a></h5>
                        <p>Lorem ium dolor sit ameted pisicing elit sed do ut.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-map"></i></div>
                        <h5><a href="index.html">zoo map</a></h5>
                        <p>Lorem ium dolor sit ameted pisicing elit sed do ut.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- info-section end -->


<!-- about-section -->
<section class="about-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_one">
                    <div class="image-box">
                        <div class="shape" style="background-image: url({{ asset('public/assets/frontend/images/shape/shape-1.png')}});"></div>
                        <figure class="image"><img src="{{ asset('public/assets/frontend/images/resource/sri-lankan-lephard.jpg')}}" alt=""></figure>
                        <div class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-1.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>welcome to Being Human Global</h2>
                        </div>
                        <div class="text">
                            <h4>Help us to protect wildlife around the world.</h4>
                            <p>There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words even slightly believable.</p>
                            <ul class="list-style-one clearfix">
                                <li>Lorem Ipsum is not simply random text</li>
                                <li>If you are going to use a passage</li>
                                <li>Making this the first true generator on the Internet</li>
                            </ul>
                        </div>
                        <div class="btn-box">
                            <a href="{{route('frontend.about') }}" class="theme-btn btn-one">discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- chooseus-section -->
<section class="chooseus-section sec-pad">
    <div class="img-wrap parallax-demo-1">
        <div class="parallax-inner back-img" style="background-image: url({{ asset('public/assets/frontend/images/background/chooseus-bg.jpg')}});"></div>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                <div class="inner-box">
                    <div class="sec-title">
                        <h2>Why You should choose our Foundation?</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                            <div class="text">
                                <p>There are many variations of passages of but the majority have alteration in some form by injected humour or which don't look even slightly believe.</p>
                                {{-- <figure class="signature"><img src="{{ asset('public/assets/frontend/images/icons/signature-1.png')}}" alt=""></figure> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                            <ul class="list-style-one clearfix">
                                <li>Making this first true generator</li>
                                <li>Many desktop publish packages</li>
                                <li>Lorem Ipsum is not simply</li>
                                <li>If you are going to passage</li>
                                <li>It has roots in a piece</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="content-inner">
                        <div class="shape" style="background-image: url({{ asset('public/assets/frontend/images/shape/shape-2.png')}});"></div>
                        <figure class="image-layer  wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('public/assets/frontend/images/resource/home-membership.png')}}" alt=""></figure>
                        <h3>Quick Donation</h3>
                        <h5>Monthly Package</h5>
                        <h2>$50.00</h2>
                        <a href="index.html" class="theme-btn">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->


<!-- gallery-section -->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>amazing Animals <br />in the World</h2>
        </div>
    </div>
    <div class="outer-container">
        <div class="gallery-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/gallery/gallery-1.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <h3><a href="deer.html">deer</a></h3>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="deer.html">deer</a></h3>
                        <p>There are many type of <br />variations pass not available</p>
                        <div class="link"><a href="deer.html"><i class="flaticon-right-arrow"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/gallery/gallery-2.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <h3><a href="wolf.html">Fox</a></h3>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="wolf.html">Fox</a></h3>
                        <p>There are many type of <br />variations pass not available</p>
                        <div class="link"><a href="wolf.html"><i class="flaticon-right-arrow"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/gallery/gallery-3.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <h3><a href="elephant.html">elephant</a></h3>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="elephant.html">elephant</a></h3>
                        <p>There are many type of <br />variations pass not available</p>
                        <div class="link"><a href="elephant.html"><i class="flaticon-right-arrow"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/gallery/gallery-4.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <h3><a href="girrafe.html">leopard</a></h3>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="girrafe.html">leopard</a></h3>
                        <p>There are many type of <br />variations pass not available</p>
                        <div class="link"><a href="girrafe.html"><i class="flaticon-right-arrow"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/gallery/gallery-5.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <h3><a href="monkey.html">monkey</a></h3>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="monkey.html">monkey</a></h3>
                        <p>There are many type of <br />variations pass not available</p>
                        <div class="link"><a href="monkey.html"><i class="flaticon-right-arrow"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery-section end -->


<!-- clients-section -->
<section class="clients-section">
    <div class="img-wrap parallax-demo-1">
        <div class="parallax-inner back-img" style="background-image: url({{ asset('public/assets/frontend/images/background/clients-bg.jpg')}});"></div>
    </div>
    <div class="auto-container">
        {{-- <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-1.png')}}" alt=""></a></figure>
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-2.png')}}" alt=""></a></figure>
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-3.png')}}" alt=""></a></figure>
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-4.png')}}" alt=""></a></figure>
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-5.png')}}" alt=""></a></figure>
        </div> --}}
    </div>
</section>
<!-- clients-section end -->


<!-- adventure-section -->
<section class="adventure-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>Your adventure begins here</h2>
                        </div>
                        <div class="inner-box">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-tick"></i></div>
                                <h4>night at the zoo</h4>
                                <p>Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply man made many people recover them free text quis bibendum.</p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-tick"></i></div>
                                <h4>support wild animals</h4>
                                <p>Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply man made many people recover them free text quis bibendum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box">
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a>
                        </div>
                        <figure class="image"><img src="{{ asset('public/assets/frontend/images/resource/adventure-1.jpg')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- adventure-section end -->


<!-- testimonial-section -->
<section class="testimonial-section centred sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>What they’re <br />saying?</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="testimonil-block-one">
                <div class="inner-box">
                    <div class="author-thumb">
                        <figure class="thumb-box"><img src="{{ asset('public/assets/frontend/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                        <div class="quote"><i class="flaticon-quote"></i></div>
                    </div>
                    <div class="text">
                        <p>I was impresed by the company services, lorem is simply free text used by copytyping no refreshing.  Neque porro est qui dolorem</p>
                    </div>
                    <div class="author-info">
                        <h5>Christine Rose</h5>
                        <span class="designation">Customer</span>
                    </div>
                </div>
            </div>
            <div class="testimonil-block-one">
                <div class="inner-box">
                    <div class="author-thumb">
                        <figure class="thumb-box"><img src="{{ asset('public/assets/frontend/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                        <div class="quote"><i class="flaticon-quote"></i></div>
                    </div>
                    <div class="text">
                        <p>I was impresed by the company services, lorem is simply free text used by copytyping no refreshing.  Neque porro est qui dolorem</p>
                    </div>
                    <div class="author-info">
                        <h5>Mike hardson</h5>
                        <span class="designation">Customer</span>
                    </div>
                </div>
            </div>
            <div class="testimonil-block-one">
                <div class="inner-box">
                    <div class="author-thumb">
                        <figure class="thumb-box"><img src="{{ asset('public/assets/frontend/images/resource/testimonial-3.jpg')}}" alt=""></figure>
                        <div class="quote"><i class="flaticon-quote"></i></div>
                    </div>
                    <div class="text">
                        <p>I was impresed by the company services, lorem is simply free text used by copytyping no refreshing.  Neque porro est qui dolorem</p>
                    </div>
                    <div class="author-info">
                        <h5>sarah albert</h5>
                        <span class="designation">Customer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->


<!-- events-section -->
<section class="events-section sec-pad">
    <div class="bg-layer"></div>
    <div class="bg-image" style="background-image: url({{ asset('public/assets/frontend/images/background/events-bg.jpg')}});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                <div class="sec-title light">
                    <h2>Check zoo upcoming events</h2>
                    <a href="index.html" class="theme-btn btn-one">view all</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                <div class="inner-content">
                    <div class="events-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('public/assets/frontend/images/resource/events-1.jpg')}}" alt=""></figure>
                                <div class="post-date"><h6>16<span>dec</span></h6></div>
                            </div>
                            <div class="inner">
                                <ul class="info clearfix">
                                    <li><i class="far fa-clock"></i>2:00 am</li>
                                    <li><i class="far fa-map"></i>60 broklyn street</li>
                                </ul>
                                <h3><a href="index.html">zebra and girrafe on the street</a></h3>
                                <p>Suspendisse finibus urna mauris, lorem ipsum is simply free.</p>
                            </div>
                        </div>
                    </div>
                    <div class="events-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('public/assets/frontend/images/resource/events-2.jpg')}}" alt=""></figure>
                                <div class="post-date"><h6>05<span>dec</span></h6></div>
                            </div>
                            <div class="inner">
                                <ul class="info clearfix">
                                    <li><i class="far fa-clock"></i>2:00 am</li>
                                    <li><i class="far fa-map"></i>60 broklyn street</li>
                                </ul>
                                <h3><a href="index.html">how Interaction with Animal can</a></h3>
                                <p>Suspendisse finibus urna mauris, lorem ipsum is simply free.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- events-section end -->


<!-- funfact-section -->
<section class="funfact-section">
    <div class="img-wrap parallax-demo-1">
        <div class="parallax-inner back-img" style="background-image: url({{ asset('public/assets/frontend/images/background/funfact-bg.jpg')}});"></div>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-polar-bear"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="60">0</span><span>+</span>
                        </div>
                        <p>Wild Animals</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-whale"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="20">0</span><span>+</span>
                        </div>
                        <p>Aquatic Animals</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-bird"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="40">0</span><span>+</span>
                        </div>
                        <p>Beautiful Birds</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-smiling-emoticon-square-face"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="60">0</span><span>k</span>
                        </div>
                        <p>Happy Visitors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->


<!-- news-section -->
<section class="news-section centred">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>Latest news & <br />Articles</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-details.html"><img src="{{ asset('public/assets/frontend/images/news/news-1.jpg')}}" alt=""></a></figure>
                            <div class="post-date"><h6>16<span>dec</span></h6></div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info clearfix">
                                <li><i class="far fa-user-circle"></i><a href="blog-details.html">Admin</a></li>
                                <li><i class="far fa-comments"></i><a href="blog-details.html">2 Comments</a></li>
                            </ul>
                            <h3><a href="blog-details.html">how Interaction with Animal can Release</a></h3>
                            <div class="link"><a href="blog-details.html"><i class="flaticon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-details.html"><img src="{{ asset('public/assets/frontend/images/news/news-2.jpg')}}" alt=""></a></figure>
                            <div class="post-date"><h6>15<span>dec</span></h6></div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info clearfix">
                                <li><i class="far fa-user-circle"></i><a href="blog-details.html">Admin</a></li>
                                <li><i class="far fa-comments"></i><a href="blog-details.html">3 Comments</a></li>
                            </ul>
                            <h3><a href="blog-details.html">Donec eget condimentum sapien</a></h3>
                            <div class="link"><a href="blog-details.html"><i class="flaticon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-details.html"><img src="{{ asset('public/assets/frontend/images/news/news-3.jpg')}}" alt=""></a></figure>
                            <div class="post-date"><h6>14<span>dec</span></h6></div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info clearfix">
                                <li><i class="far fa-user-circle"></i><a href="blog-details.html">Admin</a></li>
                                <li><i class="far fa-comments"></i><a href="blog-details.html">0 Comments</a></li>
                            </ul>
                            <h3><a href="blog-details.html">Etiam vel porttitor mi convallis</a></h3>
                            <div class="link"><a href="blog-details.html"><i class="flaticon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news-section end -->


<!-- cta-section -->
<section class="cta-section">
    <div class="bg-layer"></div>
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="pattern-layer" style="background-image: url({{ asset('public/assets/frontend/images/shape/shape-3.png')}});"></div>
            <figure class="image-layer"><img src="{{ asset('public/assets/frontend/images/resource/animals-1.png')}}" alt=""></figure>
            <div class="text pull-left">
                <h2>The animals in <br />our parks</h2>
            </div>
            <div class="btn-box pull-right">
                <a href="index.html" class="theme-btn btn-one">discover more</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->


@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
       
    </style>
@endpush
@push('scripts')
    {{-- <script src="https://unpkg.com/wavesurfer.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function () {

        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.partner__carousel', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.partners_carouser__pagination-1',
                    clickable: true,
                },
                slidesPerView: 2,
                spaceBetween: 30,
                breakpoints: {
                    576: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 4,
                    },
                    992: {
                        slidesPerView: 5,
                    },
                    1200: {
                        slidesPerView: 6,
                    }
                }
            });
        });
    </script>

@endpush

@extends('layouts.frontend')

@section('content')

    <!-- banner-section -->
    <section class="banner-section">
        @if ($settings['switch_slider'] == 1)
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                @foreach ($main_slider as $slider)
                    <div class="slide-item">
                        <div class="image-layer"
                            style="background-image:url('{{ asset('public/assets/frontend/img/sliders/' . $slider->banner) }}')">
                        </div>
                        <div class="auto-container">
                            <div class="content-box">
                                <h3>{{ $slider->icon }}</h3>
                                <h2>{{ $slider->heading }}</h2>
                                <div class="btn-box">
                                    <a href="{{ $slider->link ?? route('frontend.home.donation') }}"
                                        class="theme-btn btn-one">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif($settings['switch_slider'] == 0)
            @foreach ($main_slider as $slider)
                @if($slider->switch == 0)
                    <div class="item-flex-center vid-thumbnail relative p-0">
                        <a href="{{ asset('public/assets/frontend/img/video/' . $slider->banner) }}" data-fslightbox>
                            <video width="100%" autoplay muted playsinline loop class="item-flex-center width-100" id="video-source"
                                src="{{ asset('public/assets/frontend/img/video/' . $slider->banner) }}">
                            </video>
                        </a>
                    </div>
                @endif
            @endforeach
        @endif
    </section>

    <!-- banner-section end -->


    <!-- info-section -->
    <section class="info-section">
        <div class="bg-layer"></div>
        {{-- <span class="rotate-text">Being Human Global</span> --}}
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-ticket"></i></div>
                            {{-- <h5><a href="{{ route('home.index') }}">Buy Tickets</a></h5> --}}
                            <div class="font-family-1">{!! $section1['data']['description'] ?? '' !!}</div>
                            <div class="font-family-1">{!! $section1['data']['sub_description'] ?? '' !!}</div>
                            <!-- ❝ ❞ -->
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-calendar"></i></div>
                            <h5><a href="{{ route('home.index') }}">new events</a></h5>
                            <p>Lorem ium dolor sit ameted pisicing elit sed do ut.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-map"></i></div>
                            <h5><a href="{{ route('home.index') }}">zoo map</a></h5>
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
                            <div class="shape"
                                style="background-image: url({{ asset('public/assets/frontend/images/shape/shape-1.png')}});">
                            </div>
                            <figure class="image"><img
                                    src="{{ asset('public/assets/frontend/images/resource/570x570-banner-img.jpg')}}"
                                    alt="{{ $settings['website_name'] }}"></figure>
                            <div class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-1.png')}}"
                                    alt="{{ $settings['website_name'] }}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>{{ $section2['data']['topic'] ?? '' }}</h2>
                            </div>
                            <div class="text">
                                <h4>Help us to protect wildlife around the world.</h4>
                                <div>{!! $section2['data']['description'] ?? '' !!}</div>
                                <div class="section_area">
                                    {!! $section2['data']['sub_description'] ?? '' !!}
                                </div>
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
            <div class="parallax-inner back-img"
                style="background-image: url({{ asset('public/assets/frontend/images/background/chooseus-bg.jpg')}});">
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <div class="sec-title">
                            <h2>Animal Conservation In Africa & Asia</h2>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                <div class="text">
                                    <div>{!! $section3['data']['sub_description'] ?? '' !!}</div>
                                    {{-- <figure class="signature"><img
                                            src="{{ asset('public/assets/frontend/images/icons/signature-1.png')}}"
                                            alt="{{ $settings['website_name'] }}">
                                    </figure> --}}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 text-column section_area">
                                {!! $section3['data']['description'] ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="shape"
                                style="background-image: url({{ asset('public/assets/frontend/images/shape/shape-2.png')}});">
                            </div>
                            <figure class="image-layer  wow zoomIn animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms"><img
                                    src="{{ asset('public/assets/frontend/images/resource/' . $section3['data']['image'])}}"
                                    alt="{{ $settings['website_name'] }}">
                            </figure>
                            <h3>Quick Donation</h3>
                            <h5>One time Payment</h5>
                            <h2>${{ $section3['data']['attribute']['price'] ?? '' }}</h2>
                            {{-- {{ $section3['data']['attribute']['link'] ?? '' }} --}}
                            <a href="{{ route('frontend.home.donation') }}" class="theme-btn">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


    <!-- events-section -->
    <section class="events-section sec-pad">
        <div class="bg-layer"></div>
        <div class="bg-image"
            style="background-image: url({{ asset('public/assets/frontend/images/resource/' . $section8['data']['image'])}});">
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title light">
                        <h2>{{ $section8['data']['topic'] ?? '' }}</h2>
                        <a href="{{ route('frontend.home.ourworks') }}" class="theme-btn btn-one">Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="events-block-one">
                            <div class="inner-box pl-0">
                                <div>{!! $section8['data']['description'] ?? '' !!}</div>
                                <div class="pt-10">{!! $section8['data']['sub_description'] ?? '' !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- events-section end -->


    <!-- gallery-section -->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <h2>Beautifull Animals <br />in the World</h2>
            </div>
        </div>
        <div class="outer-container">
            <div class="gallery-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                @if ($animals_details)
                    @foreach ($animals_details as $animal)
                        <div class="gallery-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img
                                        src="{{ asset('public/assets/frontend/images/animals/' . $animal->feature_image)}}"
                                        alt="{{ $settings['website_name'] }}"></figure>
                                <div class="content-box">
                                    <h3><a href="#">{{ $animal->title }}</a></h3>
                                </div>
                                <div class="overlay-content">
                                    <h3><a href="#">{{ $animal->title }}</a></h3>
                                    <div>{!! $animal->description !!}</div>
                                    <div class="link"><a href="#"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
        </div>
    </section>
    <!-- gallery-section end -->


    <!-- clients-section -->
    {{-- <section class="clients-section">
        <div class="img-wrap parallax-demo-1">
            <div class="parallax-inner back-img"
                style="background-image: url({{ asset('public/assets/frontend/images/background/clients-bg.jpg')}});"></div>
        </div>
        <div class="auto-container"> --}}
            {{-- <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <figure class="clients-logo"><a href="{{ route('home.index') }}"><img
                            src="{{ asset('public/assets/frontend/images/clients/clients-1.png')}}"
                            alt="{{ $settings['website_name'] }}"></a></figure>
                <figure class="clients-logo"><a href="{{ route('home.index') }}"><img
                            src="{{ asset('public/assets/frontend/images/clients/clients-2.png')}}"
                            alt="{{ $settings['website_name'] }}"></a></figure>
                <figure class="clients-logo"><a href="{{ route('home.index') }}"><img
                            src="{{ asset('public/assets/frontend/images/clients/clients-3.png')}}"
                            alt="{{ $settings['website_name'] }}"></a></figure>
                <figure class="clients-logo"><a href="{{ route('home.index') }}"><img
                            src="{{ asset('public/assets/frontend/images/clients/clients-4.png')}}"
                            alt="{{ $settings['website_name'] }}"></a></figure>
                <figure class="clients-logo"><a href="{{ route('home.index') }}"><img
                            src="{{ asset('public/assets/frontend/images/clients/clients-5.png')}}"
                            alt="{{ $settings['website_name'] }}"></a></figure>
            </div> --}}
            {{-- </div>
    </section> --}}
    <!-- clients-section end -->


    <!-- adventure-section -->
    {{-- <section class="adventure-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>Your adventure begins here</h2>
                            </div>
                            <div class="inner-box">
                                @if (count($section4['data']['list']))
                                @foreach ($section4['data']['list'] as $item)
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-tick"></i></div>
                                    <h4>{{ $item['title'] }}</h4>
                                    <p>{{ $item['content'] }}</p>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_two">
                        <div class="image-box">
                            <div class="video-btn">
                                <a href="{{ $section4['data']['attribute']['link'] }}" class="lightbox-image"
                                    data-caption=""><i class="fas fa-play"></i></a>
                            </div>
                            <figure class="image"><img
                                    src="{{ asset('public/assets/frontend/images/resource/' . $section4['data']['image'])}}"
                                    alt="{{ $settings['website_name'] }}">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- adventure-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section centred sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h2>Testimonials</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                @if ($testimonials)
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonil-block-one">
                            <div class="inner-box">
                                <div class="author-thumb">
                                    @php
                                        $testimonial_img = $testimonial->feature_image ?? 'user_icon.png'
                                    @endphp
                                    <figure class="thumb-box"><img
                                            src="{{ asset('public/assets/uploads/testimonials/' . $testimonial_img)}}"
                                            alt="{{ $settings['website_name'] }}">
                                    </figure>
                                    <div class="quote"><i class="flaticon-quote"></i></div>
                                </div>
                                <div class="text">
                                    <div>{!! $testimonial->description !!}</div>
                                </div>
                                {{-- {{ $testimonial->author->name }} --}}
                                <div class="author-info">
                                    <h5>{{ $testimonial->title }}</h5>
                                    <span class="designation">{{ $testimonial->type }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- events-section -->
    <section class="events-section sec-pad">
        <div class="bg-layer"></div>
        <div class="bg-image"
            style="background-image: url({{ asset('public/assets/frontend/images/resource/' . $section5['data']['image'])}});">
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title light">
                        <h2>{{ $section5['data']['topic'] }}</h2>
                        <a href="{{ route('frontend.home.ourworks') }}" class="theme-btn btn-one">view all</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="row">
                            @if($page_projects && count($page_projects))
                                @foreach ($page_projects as $item)
                                    <div class="col-12 col-md-12">
                                        <div class="events-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image">
                                                        <img src="{{ asset('public/assets/uploads/projects/' . $item->feature_image) }}"
                                                            alt="{{ $item->title }}" />
                                                    </figure>
                                                    @if($item->created_at)
                                                        <div class="post-date">
                                                            <h6>{{ $item->created_at->format('d') }}<span>{{ strtolower($item->created_at->format('M')) }}</span>
                                                            </h6>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="inner">
                                                    <ul class="info clearfix">
                                                        <li><i class="far fa-user-circle"></i>
                                                            {{ $item->author->name ?? 'Unknown' }}</li>
                                                        {{-- Optional: Add time or location if you have --}}
                                                        {{-- <li><i class="far fa-clock"></i>2:00 am</li> --}}
                                                        {{-- <li><i class="far fa-map"></i>Location here</li> --}}
                                                    </ul>
                                                    <h3>
                                                        <a href="{{ route('frontend.home.ourworks.article.view', $item->slug) }}">
                                                            {{ $item->title }}
                                                        </a>
                                                    </h3>
                                                    <p>{!! Str::limit(strip_tags($item->description), 150) !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
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
            <div class="parallax-inner back-img"
                style="background-image: url({{ asset('public/assets/frontend/images/background/funfact-bg.jpg')}});"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                @if (count($section6['data']['counts']))
                    @foreach ($section6['data']['counts'] as $countItem)
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-tree-city"></i>
                                    </div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500"
                                            data-stop="{{ $countItem['count'] }}">0</span><span>+</span>
                                    </div>
                                    <p>{{ $countItem['title'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
                @if($page_blogs && count($page_blogs))
                    @foreach ($page_blogs as $blog_item)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ asset('public/assets/uploads/blogs/' . $blog_item->feature_image) }}"
                                                alt="{{ $blog_item->title }}" />
                                        </figure>
                                        @if($blog_item->created_at)
                                            <div class="post-date">
                                                <h6>{{ $blog_item->created_at->format('d') }}<span>{{ strtolower($blog_item->created_at->format('M')) }}</span>
                                                </h6>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-user-circle"></i><a
                                                    href="#">{{ $blog_item->author->name ?? 'Unknown' }}</a></li>
                                            {{-- <li><i class="far fa-comments"></i><a href="blog-details.html">2 Comments</a></li>
                                            --}}
                                        </ul>
                                        <h3><a href="{{ route('frontend.blogs.article.view', $blog_item->slug) }}">how
                                                Interaction with Animal can Release</a></h3>
                                        <div class="link"><a href="{{ route('frontend.blogs.article.view', $blog_item->slug) }}"><i
                                                    class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- cta-section -->
    <section class="cta-section">
        <div class="bg-layer"></div>
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="pattern-layer"
                    style="background-image: url({{ asset('public/assets/frontend/images/shape/shape-green-03.png')}});">
                </div>
                <figure class="image-layer"><img
                        src="{{ asset('public/assets/frontend/images/resource/' . $section7['data']['image'])}}"
                        alt="{{ $settings['website_name'] }}"></figure>
                <div class="text pull-left font-family-1">
                    <h2>{{ $section7['data']['topic'] }}</h2>
                    <h6>{!! $section7['data']['topic'] !!}
                    </h6>
                </div>
                {{-- {{ $section7['data']['attribute']['link'] }} --}}
                <div class="btn-box pull-right">
                    <a href="{{ route('frontend.about') }}" class="theme-btn btn-one">Photo gallery</a>
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
        .plyr__controls {
            display: none !important;
        }

        .events-block-one .inner-box .image-box .image img {
            width: 100%;
            transition: all 500ms ease;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush
@push('scripts')
    {{--
    <script src="https://unpkg.com/wavesurfer.js"></script> --}}
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
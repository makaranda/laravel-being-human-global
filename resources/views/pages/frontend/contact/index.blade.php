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
                    <li>Contact us</li>
                </ul>
                <div class="title">
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    @php
        $num = $settings['contact_number'];
        $num2 = $settings['contact_number2'];
        $contact_number = '+(' . substr($num, 0, 2) . ') ' . substr($num, 2, 3) . ' ' . substr($num, 5, 3) . ' ' . substr($num, 8);
        $contact_number2 = '+(' . substr($num2, 0, 2) . ') ' . substr($num2, 2, 3) . ' ' . substr($num2, 5, 3) . ' ' . substr($num2, 8);
    @endphp
    <!--  Contact Area start  -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="container-fluid">
            <div class="map-inner">
                <div class="map-canvas">
                    <div id="map" style="">
                        <iframe src="{{ $settings['google_map'] }}" width="100%" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="content-box">
                    <h2>get in touch with us</h2>
                    <ul class="info clearfix">
                        <li><i class="flaticon-telephone"></i><a href="tel:{{ $num }}">{{ $contact_number }}</a></li>
                        <li><i class="flaticon-email"></i><a
                                href="mailto:{{ $settings['email_address'] }}">{{ $settings['email_address'] }}</a>
                        </li>
                        <li><i class="flaticon-pin"></i>{{ $settings['address'] }}</li>
                    </ul>
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-clock-1"></i></div>
                        <p>Monday - Sunday</p>
                        <h4>9:00am to 6:00pm</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- contact-section -->
    <section class="contact-section centred">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 offset-xl-2 big-column">
                    <div class="sec-title centred">
                        <h2>have question? <br />drop a line</h2>
                    </div>
                    <div class="form-inner">
                        <form method="post" action="{{ route('frontend.contactsubmit') }}" class="default-form contact_form"
                            id="contactUsForm" novalidate="novalidate">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Full name" required="" aria-required="true"
                                        class="border">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email address" required=""
                                        aria-required="true" class="border">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" required="" placeholder="Phone" aria-required="true"
                                        class="border">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" required="" placeholder="Subject" aria-required="true"
                                        class="border">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Write a message" class="border"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                    <button class="theme-btn btn-one" type="submit"
                                        name="submit-form"><span>Submit</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->



@endsection

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/contacts/contact-5/assets/css/contact-5.css" />
    <style>
        #contactUsForm label {
            width: 100%;
            text-align: left;
            color: red;
        }

        img.img-fluid.login-logo {
            width: 120px !important;
        }

        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }

        .breadcam_bg_2 {
            background-image: url('{{ asset('public/assets/frontend/img/banner/' . $page_contact['banner_image']) }}') !important;
            background-size: cover;
            background-position: center;
        }
    </style>
@endpush

@push('scripts')

    {{--
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site') }}"></script> --}}
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute("{{ config('services.recaptcha.site') }}", { action: 'submit' }).then(function (token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
        });

        $('.form-control').each(function () {
            $(this).on('blur', function () {
                if ($(this).val().trim() != "") {
                    $(this).addClass('has-val');
                }
                else {
                    $(this).removeClass('has-val');
                }
            })
        })

        $(document).ready(function () {
            $('#contactUsForm').validate({
                rules: {
                    name: { required: true, minlength: 2 },
                    subject: { required: true, minlength: 4 },
                    email: { required: true, email: true },
                    message: { required: true, minlength: 20 }
                },
                messages: {
                    name: { required: "Your name is required", minlength: "Name must be at least 2 characters long" },
                    subject: { required: "Please provide a subject", minlength: "Subject must be at least 4 characters long" },
                    email: { required: "Please provide an email address" },
                    message: { required: "Message is required", minlength: "Message must be at least 20 characters long" }
                }
            });
        });
    </script>
@endpush
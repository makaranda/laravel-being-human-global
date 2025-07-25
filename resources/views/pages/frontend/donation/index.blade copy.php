@extends('layouts.donation')

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
                    <li>Donation</li>
                </ul>
                <div class="title">
                    <h1>Donation</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- Page Content  -->

    <!-- gallery-page-section -->
    <section class="gallery-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 col-md-12">

                </div>
            </div>
        </div>
    </section>

    <!-- End Page Content -->


@endsection

@push('css')
    <link rel="stylesheet" href="{{ url('public/assets/frontend/css/parsley.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/frontend/css/jquery-confirm.css') }}">
    <style>
        .main_payment_type.active {
            background-color: #311be4 !important;
        }

        .main_payment_type {
            padding: 10px 25px !important;
        }

        span.required_field {
            color: red;
            font-size: 10px;
        }

        .amount_button_radio {
            clip: rect(0 0 0 0);
            border: 0;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }

        .amount_button_label {
            background-color: #ffffffa6;
            color: #3f00e3;
            justify-content: center;
            text-align: center;
            border: 1px solid #3f00e3;
        }

        .amount_button_label:hover {
            background-color: #3f00e3d1 !important;
            cursor: pointer;
            color: #fff;
        }

        .amount_button_label.active {
            background-color: #311be4 !important;
            color: #fff;
        }

        .collumn2 {
            background-color: #f5f5f5;
            box-shadow: 0px 0px 10px 2px #ccc;
        }

        h3 {
            color: #2a0097;
            text-transform: capitalize;
            text-shadow: 3px -1px 3px #00000052 !important;
        }

        .btn-secondary {
            color: #311be4;
            background-color: #ffffffa6;
            border-color: #311be4;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #3f00e3d1;
            border-color: #3f00e3d1;
        }

        #toTop {
            padding: 5px 3px;
            color: #8f1e1e;
            position: fixed;
            bottom: 12px;
            right: 1%;
            display: none;
            z-index: 999999;
            width: 50px;
            height: 50px;
            background-color: #4300e4;
            border-radius: 50px;
            box-shadow: 0px 0px 3px 4px #00000052;
        }

        #toTop a {
            display: table;
            color: #fff;
            text-align: center;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            /* border-radius: 4px; */
            border-radius: 50px !important;
            padding: 8px 15px;
        }

        .d-none {
            display: none !important;
        }

        .d-block {
            display: block !important;
        }


        .js-preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            opacity: 1;
            visibility: visible;
            z-index: 9999;
            -webkit-transition: opacity 0.25s ease;
            transition: opacity 0.25s ease;
        }

        .js-preloader.loaded {
            opacity: 1;
            visibility: visible;
            pointer-events: none;
        }

        .js-preloader.loaded {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        @-webkit-keyframes dot {
            50% {
                -webkit-transform: translateX(96px);
                transform: translateX(96px);
            }
        }

        @keyframes dot {
            50% {
                -webkit-transform: translateX(96px);
                transform: translateX(96px);
            }
        }

        @-webkit-keyframes dots {
            50% {
                -webkit-transform: translateX(-31px);
                transform: translateX(-31px);
            }
        }

        @keyframes dots {
            50% {
                -webkit-transform: translateX(-31px);
                transform: translateX(-31px);
            }
        }

        .preloader-inner {
            position: relative;
            width: 142px;
            height: 40px;
            background: #fff;
        }

        .preloader-inner .dot {
            position: absolute;
            width: 16px;
            height: 16px;
            top: 12px;
            left: 15px;
            background: #6f1ccb;
            border-radius: 50%;
            -webkit-transform: translateX(0);
            transform: translateX(0);
            -webkit-animation: dot 2.8s infinite;
            animation: dot 2.8s infinite;
        }

        .preloader-inner .dots {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            margin-top: 12px;
            margin-left: 31px;
            -webkit-animation: dots 2.8s infinite;
            animation: dots 2.8s infinite;
        }

        .preloader-inner .dots span {
            display: block;
            float: left;
            width: 16px;
            height: 16px;
            margin-left: 16px;
            background: #934bf1;
            border-radius: 50%;
        }

        .text-gray {
            color: #999898;
        }


        @media (min-width: 300px) {
            .amount_button_label {
                padding: 10px 25px;
                font-size: 12px;
                width: 75px !important;
            }

            .main_payment_type {
                width: 130px !important;
                text-align: center;
                padding: 12px !important;
                margin-right: 10px;
            }
        }

        @media (min-width: 540px) {
            .amount_button_label {
                padding: 10px 40px;
                font-size: 14px;
                width: 140px !important;
            }

            .main_payment_type {
                width: 130px !important;
                text-align: center;
                padding: 12px !important;
                margin-right: 10px;
            }
        }

        @media (min-width: 768px) {
            .amount_button_label {
                padding: 10px 30px;
                font-size: 16px;
                width: 82px !important;
            }

            .main_payment_type {
                width: 130px !important;
                text-align: center;
                padding: 12px !important;
                margin-right: 10px;
            }
        }

        @media (min-width: 900px) {
            .amount_button_label {
                padding: 10px 45px;
                font-size: 18px;
                width: 120px !important;
            }

            .main_payment_type {
                width: 200px !important;
                text-align: center;
                padding: 12px !important;
                margin-right: 10px;
            }
        }
    </style>
@endpush

@push('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ url('public/assets/frontend/js/jquery.redirect.js') }}"></script>
    <script src="{{ url('public/assets/frontend/js/parsley.js') }}"></script>
    <script src="{{ url('public/assets/frontend/js/jquery-confirm.js') }}"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>

    </script>
@endpush
@extends('layouts.donation')

@section('content')



    <!-- Page Content  -->


    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <div class="container mt-24 mb-24" style="background-color:#fff;box-shadow: 0px 0px 10px 2px #00000040;">
        <div class="row">
            <div id="check_data" class="col-md-12">
            </div>
            <div class="col-md-12">
                <form class="form-horizontal" id="paypal_data_form" method="POST" action="">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-12 text-center pt-4 pb-4">
                            <a href="{{ route('home.index') }}"><img
                                    src="{{ asset('public/assets/frontend/img/' . $settings['main_logo']) }}"
                                    class="img-fluid" style="width:300px;" /></a>
                        </div>

                        <div class="col-12 col-md-6 mb-3">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 text-center">
                                    <img src="{{ url('public/assets/frontend/images/banner/donation_banner_img.jpg') }}"
                                        class="img-fluid" style="" />
                                </div>
                                <div class="col-12 col-md-12 text-center mt-15">
                                    <h3>YOUR DONATION DOUBLED!</h3>
                                </div>
                                <div class="col-12 col-md-12 text-justify pt-2 pb-2">
                                    <p></p>
                                </div>
                                <div class="col-12 col-md-12 text-justify pt-2 pb-2">
                                    <label class="font-weight-bold">I would like to make a:</label> <br>
                                    <button type="button" class="btn btn-secondary pl-3 pr-3 main_payment_type active"
                                        value="one_time">One-Time Gift</button>
                                    <button type="button" class="btn btn-secondary pl-3 pr-3 main_payment_type"
                                        value="monthly">Monthly Gift</button>
                                </div>
                                <div class="col-12 col-md-12 text-justify pt-2 pb-2">
                                    <label class="font-weight-bold">Donation Amount <span
                                            class="required_field">*</span></label> <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input amount_button_radio" type="radio"
                                            name="donation_amount" id="inlineRadio1" value="50">
                                        <label class="form-check-label amount_button_label" id="inlineLabel1"
                                            for="inlineRadio1">$50</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input amount_button_radio" type="radio"
                                            name="donation_amount" id="inlineRadio2" value="75">
                                        <label class="form-check-label amount_button_label active" id="inlineLabel2"
                                            for="inlineRadio2">$75</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input amount_button_radio" type="radio"
                                            name="donation_amount" id="inlineRadio3" value="100">
                                        <label class="form-check-label amount_button_label" id="inlineLabel3"
                                            for="inlineRadio3">$100</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 text-justify pt-2 pb-2">
                                    <div class="row justify-content-center">
                                        <div class="col-4 col-sm-4 col-md-3 col-lg-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input amount_button_radio" type="radio"
                                                    name="donation_amount" id="inlineRadio4" value="150">
                                                <label class="form-check-label amount_button_label" id="inlineLabel4"
                                                    for="inlineRadio4">$150</label>
                                            </div>
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-9 col-lg-9">
                                            <div class="form-check form-check-inline w-100 pr-3">
                                                <input type="number" class="form-control pb-2 pt-2" id="other_amount"
                                                    name="other_amount" placeholder="Enter Other Amount">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 mt-3 text-justify">
                                    <p class="text-gray">Protect Wildlife, Preserve the Future!
                                        Your donation helps us safeguard endangered species and restore vital ecosystems. By
                                        contributing to our conservation fund, you support on-the-ground efforts like
                                        habitat restoration, anti-poaching initiatives, and community-led conservation
                                        programs that ensure a thriving planet for generations to come. Be a voice for the
                                        voiceless — donate today and make a lasting impact.</p>
                                    <p class="text-gray">Your privacy matters. [Wildlife Organization Name] is committed to
                                        protecting your personal information. For details, please read our <a
                                            href="">Privacy Policy</a>.Charitable Registration Number: 12345678910</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="row justify-content-center collumn2 ml-2 mr-2 p-3">
                                <div class="col-12 col-md-12">
                                    <h3>Your Information</h3>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="my_gift" name="my_gift">
                                        <label class="form-check-label" for="my_gift">My gift is on behalf of a business or
                                            organization</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>Title</label>
                                            <select class="form-control" id="info_title" name="info_title">
                                                <option value="">Please Select</option>
                                                <option value="Dr">Dr</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Ms">Ms</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>First Name <span class="required_field">*</span></label>
                                            <input type="text" class="form-control" id="info_first_name"
                                                name="info_first_name" required>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>Last Name <span class="required_field">*</span></label>
                                            <input type="text" class="form-control" id="info_last_name"
                                                name="info_last_name" required>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>Mobile Phone</label>
                                            <input type="number" class="form-control" id="info_mobile" name="info_mobile">
                                        </div>
                                        <div class="col-12 col-md-12 mt-2">
                                            <label>Email Address <span class="required_field">*</span></label>
                                            <input type="email" class="form-control" id="info_email" name="info_email"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 mt-13">
                                    <h3>Billing Information</h3>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-md-12 mt-2">
                                            <label>Country</label>
                                            <select class="form-control" id="billing_info_country"
                                                name="billing_info_country">
                                                @foreach ($countries as $key => $country)
                                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>Address 1 <span class="required_field">*</span></label>
                                            <input type="text" class="form-control" id="billing_info_address1"
                                                name="billing_info_address1" required>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>Address 2</label>
                                            <input type="text" class="form-control" id="billing_info_address2"
                                                name="billing_info_address2">
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>City <span class="required_field">*</span></label>
                                            <input type="text" class="form-control" id="billing_info_city"
                                                name="billing_info_city" required>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>Province/State <span class="required_field">*</span></label>
                                            <input type="text" class="form-control" id="billing_info_province"
                                                name="billing_info_province" required>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>Postal Code <span class="required_field">*</span></label>
                                            <input type="text" class="form-control" id="billing_info_postal_code"
                                                name="billing_info_postal_code" required>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 mt-3">
                                    <p class="font-weight-bold">Did you know that by covering the processing fee, you help
                                        {{ $settings['website_name'] }} direct more funds to critical conservation efforts?
                                        Your generosity goes even further — helping protect endangered species, restore
                                        habitats, and support frontline wildlife initiatives. Every cent counts in
                                        preserving nature’s legacy.
                                    </p>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="confirm_donation"
                                            name="confirm_donation">
                                        <label class="form-check-label" for="confirm_donation">Yes, I want to cover the 4%
                                            fee for my donation.</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 mt-2">
                                    <div class="g-recaptcha" data-sitekey="6LcZqjspAAAAAJ5540uBly6UuzR1H9yPQj6ajAMy"
                                        data-callback="onLoginCaptchaSubmit"
                                        style="display: flex; align-items: center; justify-content: center;"></div>
                                </div>
                                <div class="col-12 col-md-12 mt-13">
                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <button id="submit" name="pay_now"
                                                class="btn btn-danger donate_now_btn w-100 rounded-0 text-uppercase fw-600"
                                                style="cursor: not-allowed;" disabled>Donate Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">

                <fieldset>

                    <!-- Text input-->
                    <input id="amount" name="amount" type="hidden" placeholder="amount to pay" class="form-control input-md"
                        value="75" required="">
                    <input type='hidden' name='business' value='sb-kl8nc27246699@business.example.com'>
                    <input type='hidden' name='item_name' value='donation'>
                    <input type='hidden' name='item_number' value='1753350723'>
                    <!--<input type='hidden' name='amount' value='10'>-->
                    <input type='hidden' name='no_shipping' value='1'>
                    <input type='hidden' name='currency_code' value='USD'>
                    <input type='hidden' name='notify_url' value='notify'>
                    <input type='hidden' name='cancel_return' value='https://donation.goearc.com/cancel'>
                    <input type='hidden' name='return' value='https://donation.goearc.com/action/payment-success.php'>
                    <input type="hidden" name="cmd" value="_xclick">

                    <!-- Button -->


                </fieldset>

            </div>
        </div>
        </form>


        <div class="row justify-content-center">
            <div class="col-12 col-md-12 text-center">
                <p class="text-gray">&copy; Copyright {{ now()->year }} by
                    <a href="{{ route('home.index') }}">{{ $settings['website_name'] ?? 'YourWebsite' }}
                </p>
            </div>
        </div>
    </div>
    <div class="d-block" id="toTop" style="display: block;">
        <a href="#" class="js-gotop1"><i class="fa fa-arrow-up"></i></a>
    </div>

    <!-- End Page Content -->


@endsection

@push('css')
    <link rel="stylesheet" href="{{ url('public/assets/frontend/css/parsley.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/frontend/css/jquery-confirm.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .main_payment_type.active {
            background-color: #663309 !important;
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
            color: #005047;
            justify-content: center;
            text-align: center;
            border: 1px solid #005047;
        }

        .amount_button_label:hover {
            background-color: #005047 !important;
            cursor: pointer;
            color: #fff;
        }

        .amount_button_label.active {
            background-color: #663309 !important;
            color: #fff;
        }

        .collumn2 {
            background-color: #f5f5f5;
            box-shadow: 0px 0px 10px 2px #ccc;
        }

        h3 {
            color: #007a6c;
            text-transform: capitalize;
            text-shadow: 3px -1px 3px #00000052 !important;
        }

        .btn-secondary {
            color: #005047;
            background-color: #ffffffa6;
            border-color: #005047;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #005047;
            border-color: #005047;
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
            background-color: #015047;
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
            padding: 2px 15px;
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
            background: #015047;
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

        .boxed_wrapper {
            background-color: #e2f6ff;
        }

        .select2-container .select2-selection {
            /* padding: 10px; */
            height: 38px;
            border: 1px solid #ced4da;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            padding-top: 5px;
            /* padding-bottom: 10px; */
        }
    </style>
@endpush

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ url('public/assets/frontend/js/jquery.redirect.js') }}"></script>
    <script src="{{ url('public/assets/frontend/js/parsley.js') }}"></script>
    <script src="{{ url('public/assets/frontend/js/jquery-confirm.js') }}"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('#info_title').select2({
            selectOnClose: true
        });
        $('#billing_info_country').select2({
            selectOnClose: true
        });
    </script>
    <script>
        // Optimized & modernized donation JavaScript with SweetAlert
        $(window).on('load', () => {
            $('#js-preloader').addClass('loaded');
            setTimeout(() => $('#js-preloader').css({ opacity: '0' }), 2000);
        });

        function onLoginCaptchaSubmit(token) {
            if (token) {
                const submitButton = document.getElementById("submit");
                submitButton.disabled = false;
                submitButton.style.cursor = "pointer";
                return true;
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Captcha Error',
                    text: 'Recaptcha failed. Please refresh the page.',
                });
                return false;
            }
        }

        $(function () {
            const $toTop = $('#toTop');
            const $amount = $('#amount');
            const $otherAmount = $('#other_amount');
            const $donationRadios = $("input[name='donation_amount']");

            $donationRadios.on('click', function () {
                if ($(this).is(':checked')) {
                    $amount.val($(this).val());
                }
            });

            $(window).on('scroll', () => {
                $(window).scrollTop() >= 400 ? $toTop.fadeIn().removeClass('d-none').addClass('d-block') : $toTop.fadeOut().removeClass('d-block').addClass('d-none');
            });

            $toTop.on('click', () => {
                $('html, body').animate({ scrollTop: 0 }, 1000);
            });

            $otherAmount.on('keyup', function () {
                $amount.val($(this).val());
            });

            $('.amount_button_label').on('click', function () {
                $('.amount_button_label').removeClass('active');
                $(this).addClass('active');
            });

            $('.main_payment_type').on('click', function () {
                $('.main_payment_type').removeClass('active');
                $(this).addClass('active');

                const isOneTime = $(this).val() === 'one_time';
                const values = isOneTime ? [50, 75, 100, 125] : [15, 25, 50, 75];
                const labels = values.map(v => `$${v}`);

                values.forEach((val, i) => {
                    $(`#inlineRadio${i + 1}`).val(val);
                    $(`#inlineLabel${i + 1}`).text(labels[i]);
                });

                $('.amount_button_label').removeClass('active');
                $(`#inlineLabel${isOneTime ? 2 : 4}`).addClass('active');
                $donationRadios.filter(`[value=75]`).prop('checked', true);
                $amount.val('75');
                $otherAmount.val('');
            });

            $('#paypal_data_form').parsley();

            $('#paypal_data_form').on('submit', function (e) {
                e.preventDefault();

                const rcres = grecaptcha.getResponse();
                if (!rcres.length) {
                    grecaptcha.reset();
                    Swal.fire({
                        icon: 'error',
                        title: 'Recaptcha Required',
                        text: 'Please complete the Recaptcha.',
                    });
                    return;
                }

                if (!$('#paypal_data_form').parsley().isValid()) {
                    grecaptcha.reset();
                    Swal.fire({
                        icon: 'error',
                        title: 'Form Error',
                        text: 'There are errors in the form. Please correct them.',
                    });
                    return;
                }

                $.ajax({
                    url: "action/form_submit.php",
                    method: "POST",
                    dataType: "json",
                    data: $('#paypal_data_form').serialize(),
                    success(data) {
                        grecaptcha.reset();

                        if (data.recatcha_msg === 'success') {
                            $.redirect("https://www.sandbox.PayPal.com/cgi-bin/webscr", {
                                amount: data.amount,
                                business: data.business,
                                item_name: data.item_name,
                                item_number: data.item_number,
                                no_shipping: data.no_shipping,
                                currency_code: data.currency_code,
                                notify_url: data.notify_url,
                                cancel_return: data.cancel_return,
                                cmd: data.cmd,
                                return_value: data.return
                            }, "POST", "_self");
                        } else {
                            const messages = {
                                'failed': 'Recaptcha failed. Please refresh the page.',
                                'required': 'Recaptcha is required. Please check the box.',
                                '': 'Something went wrong. Please try again.'
                            };

                            Swal.fire({
                                icon: 'error',
                                title: 'Attention...!!!',
                                text: messages[data.recatcha_msg] || messages[''],
                            });
                        }
                    }
                });
            });
        });

    </script>
@endpush
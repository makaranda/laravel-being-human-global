@extends('layouts.donation')

@section('content')



    <!-- Page Content  -->


    <div id="js-preloader" class="js-preloader">
        <h4 class="preloader_text d-none">Waiting</h4>
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
                <form class="form-horizontal" id="data_form" method="POST">
                    <input type="hidden" name="category" id="category" value="other" />
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-12 text-center pt-4 pb-4">
                            <a href="{{ route('home.index') }}"><img
                                    src="{{ asset('public/assets/frontend/img/' . $settings['main_logo']) }}"
                                    class="img-fluid" style="width:300px;" /></a>
                        </div>

                        {{-- <div class="col-12 col-md-12 text-center mt-15 mb-15">
                            <h3 class="text-uppercase">{{ ($donation_title != '') ? 'Donation for ' . $donation_title : ''
                                }}
                            </h3>
                        </div> --}}
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
                                    <label>Donation Type</label>
                                    <select class="form-control" id="donation_type" name="donation_type" required>
                                        <option value="">Please Select</option>
                                        <option value="Medical Equipments">Medical Equipments</option>
                                        <option value="Volunteer Services">Volunteer Services</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 mt-3 text-justify">
                                    <p class="text-dark">Protect Wildlife, Preserve the Future! Your donation helps us
                                        safeguard endangered species and restore vital ecosystems. By contributing to our
                                        conservation fund, you support on-the-ground efforts like habitat restoration,
                                        anti-poaching initiatives, and community-led conservation programs that ensure a
                                        thriving planet for generations to come. Be a voice for the voiceless donate today
                                        and make a lasting impact.</p>
                                    <p class="text-dark">Simply select the type of contribution you wish to make from the
                                        dropdown menu below. Whether you're offering veterinary equipment & tools, solar
                                        panels, medicine, technology, educational materials, or volunteer expertise your
                                        support matters.</p>
                                    <p class="text-dark">When you choose your preferred way of contributing and tick the
                                        relevant box, your
                                        selection will automatically trigger an email to our team at
                                        <a href="mailto:contact@beinghumanglobal.org">contact@beinghumanglobal.org</a> We
                                        will then reach out to you personally to coordinate
                                        the next steps and ensure your contribution goes where it’s needed most.
                                    </p>
                                    <p class="text-dark">For examples of how your non-financial support can help, please
                                        visit our “<a href="{{ route('frontend.joinus') }}">Join Us</a>” page.</p>
                                    <p class="text-dark">Together, we are <strong>Making the Difference Every single
                                            day.</strong>”</p>
                                    <p class="text-dark">Your privacy matters. Being Human Global is committed to
                                        protecting your personal information. For details, please read our <a
                                            href="{{ route('frontend.privacypolicy') }}">Privacy Policy</a>.Organization No.
                                        935622077</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="row justify-content-center collumn2 ml-2 mr-2 p-3">
                                <div class="col-12 col-md-12">
                                    <h3>Your Information</h3>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-md-6 mt-2">
                                            <label>Title</label>
                                            <select class="form-control" id="info_title" name="info_title" required>
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
                                            <input type="number" class="form-control" id="info_mobile" name="info_mobile"
                                                required>
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
                                                name="billing_info_country" required>
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
                                    <p class="">Did you know that by covering the processing fee, you help
                                        {{ $settings['website_name'] }} direct more funds to critical conservation efforts?
                                        Your generosity goes even further — helping protect endangered species, restore
                                        habitats, and support frontline wildlife initiatives. Every cent counts in
                                        preserving nature’s legacy.
                                    </p>
                                </div>
                                {{-- <div class="col-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="confirm_donation"
                                            name="confirm_donation">
                                        <label class="form-check-label" for="confirm_donation">Yes, I want to cover the 4%
                                            fee for my donation.</label>
                                    </div>
                                </div> --}}
                                <div class="col-12 col-md-12 mt-13">
                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <button id="stripeDonateBtn"
                                                class="btn btn-danger donate_now_btn w-100 rounded-0 text-uppercase fw-600"
                                                style="cursor: cursor;">
                                                Donate Now
                                            </button>
                                        </div>
                                        <div class="col-md-12 text-center mt-16">
                                            <a href="{{ route('home.index') }}"
                                                class="btn btn-primary donate_now_btn w-100 rounded-0 text-uppercase fw-600"
                                                style="cursor: cursor;">
                                                Back to Home
                                            </a>
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
                        value="0" required="">
                    <input type='hidden' name='business' value='sb-kl8nc27246699@business.example.com'>
                    <input type='hidden' name='item_name' value='donation'>
                    <input type='hidden' name='item_number' value='1753350723'>
                    <!--<input type='hidden' name='amount' value='10'>-->
                    <input type='hidden' name='no_shipping' value='1'>
                    <input type='hidden' name='currency_code' value='USD'>
                    <input type='hidden' name='notify_url' value='notify'>
                    <input type='hidden' name='cancel_return' value='cancel'>
                    <input type='hidden' name='return' value='success'>
                    <input type="hidden" name="cmd" value="_xclick">

                    <!-- Button -->


                </fieldset>

            </div>
        </div>
        </form>


        <div class="row justify-content-center pt-25 pb-25">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

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

        #other_amount {
            height: 53px;
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
            text-shadow: 1px 0px 5px #00000052 !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        {
        position: relative;
        font-family: "Raleway", sans-serif;
        font-weight: 900;
        margin: 0px;
        transition: all 500ms ease;
        }

        p {
            font-family: "Source Sans 3", sans-serif !important;
            padding: 12px 0;
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
            background: #89603c;
            border-radius: 50%;
        }

        .text-gray {
            color: #999898;
        }

        .text-dark {
            color: #070e14 !important;
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

        .preloader_text {
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-size: 36px;
            font-style: normal;
            color: #015047;
            text-shadow: 1px 1px 2px #000000d1;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ url('public/assets/frontend/js/jquery.redirect.js') }}"></script>
    <script src="{{ url('public/assets/frontend/js/parsley.js') }}"></script>
    <script src="{{ url('public/assets/frontend/js/jquery-confirm.js') }}"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        $('#donation_type').select2({
            selectOnClose: true
        });
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

        // function onLoginCaptchaSubmit(token) {
        //     if (token) {
        //         const submitButton = document.getElementById("submit");
        //         submitButton.disabled = false;
        //         submitButton.style.cursor = "pointer";
        //         return true;
        //     } else {
        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Captcha Error',
        //             text: 'Recaptcha failed. Please refresh the page.',
        //         });
        //         return false;
        //     }
        // }

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

            const stripe = Stripe("{{ env('STRIPE_PUBLISHABLE_KEY') }}");

            $('#data_form').parsley();

            $('#data_form').on('submit', function (e) {
                e.preventDefault();
                console.log('Other Donation Submit');

                // reCAPTCHA v3
                grecaptcha.ready(function () {
                    grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', { action: 'submit' }).then(function (token) {
                        // Add token to form
                        $('<input>').attr({
                            type: 'hidden',
                            name: 'g-recaptcha-response',
                            value: token
                        }).appendTo('#data_form');

                        // Fetch donation amount
                        const amount = $('#amount').val();
                        let formData = $('#data_form').serializeArray(); // Replace with your actual form ID

                        // Add extra fields to the serialized data
                        formData.push({ name: 'amount', value: amount });
                        formData.push({ name: 'g-recaptcha-response', value: token });
                        formData.push({ name: '_token', value: "{{ csrf_token() }}" });

                        // Proceed with AJAX
                        $.ajax({
                            url: "{{ route('frontend.home.submitotherdonation') }}",
                            method: "POST",
                            //dataType: 'json',
                            //data: {amount: amount,'g-recaptcha-response': token, _token: "{{ csrf_token() }}"},
                            data: formData,
                            beforeSend: function () {
                                $('.preloader_text').removeClass('d-none');
                                $('#js-preloader').removeClass('loaded');
                                $('#js-preloader').css({ opacity: '1' });
                            },
                            success: function (response) {
                                $('.preloader_text').addClass('d-none');
                                $('#js-preloader').addClass('loaded');
                                $('#js-preloader').css({ opacity: '0' });
                                console.log('Response Message : ', response);
                                if (response.message === 'success') {
                                    //setTimeout(() => {
                                    //window.location.href = response.redirect_success_url;
                                    $.redirect("" + response.redirect_success_url + "", { session_id: response.session_id }, "GET", "_self");
                                    //}, 1000);
                                    // Swal.fire({
                                    //     position: "bottom-end",
                                    //     icon: "success",
                                    //     title: "Thank you! Your donation was successfully submitted.",
                                    //     showConfirmButton: false,
                                    //     timer: 4500
                                    // });

                                } else {
                                    $.redirect("" + response.redirect_error_url + "", { session_id: response.session_id }, "GET", "_self");
                                    // Swal.fire({
                                    //     position: "bottom-end",
                                    //     icon: "error",
                                    //     title: "Oops! Something went wrong.",
                                    //     text: "Please check your information and try again.",
                                    //     showConfirmButton: true
                                    // });
                                }
                            },
                            error: function (err) {
                                $('.preloader_text').addClass('d-none');
                                $('#js-preloader').addClass('loaded');
                                $('#js-preloader').css({ opacity: '0' });
                                console.log('Other Donation Error : ', err);
                                Swal.fire({
                                    position: "bottom-end",
                                    icon: 'error',
                                    title: 'Stripe Error',
                                    text: 'Unable to create payment session.',
                                });
                            }
                        });
                    });
                });
            });
        });

    </script>
@endpush
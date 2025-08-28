<!-- main-footer -->
<section class="main-footer">
    <div class="footer-top">
        <div class="pattern-layer"
            style="background-image: url({{ asset('public/assets/frontend/images/shape/shape-4.png') }});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Logo & Social -->
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget">
                        <figure class="footer-logo bg-dark">
                            <a href="{{ route('home.index') }}">
                                <img src="{{ asset('public/assets/frontend/img/' . $settings['footer_logo']) }}"
                                    alt="{{ $settings['website_name'] }}">
                            </a>
                        </figure>
                        <ul class="footer-social clearfix">
                            <li><a href="{{ $settings['social_twitter'] }}"><!--<i class="fab fa-twitter"></i>--><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"
                                        style="
    fill: #fff;
    width: 25px;
"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path
                                            d="M453.2 112L523.8 112L369.6 288.2L551 528L409 528L297.7 382.6L170.5 528L99.8 528L264.7 339.5L90.8 112L236.4 112L336.9 244.9L453.2 112zM428.4 485.8L467.5 485.8L215.1 152L173.1 152L428.4 485.8z">
                                        </path>
                                    </svg></a></li>
                            <li><a href="{{ $settings['social_facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $settings['social_youtube'] }}"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li><a href="{{ $settings['social_instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                        </ul>

                    </div>
                    <div class="widget-title mt-10 mb-10">
                        <h5>Signup Newsletter</h5>
                    </div>
                    <div class="btn-box">
                        <a href="#" class="theme-btn btn-one btn3" data-bs-toggle="modal"
                            data-bs-target="#newsletterModal">Signup Newsletter</a>
                    </div>
                </div>

                <!-- Links -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h5>Links</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                                {{-- <li><a href="{{ route('frontend.home.donation') }}">Donation</a></li> --}}
                                <li><a href="{{ route('frontend.home.blogs') }}">Blogs</a></li>
                                <li><a href="{{ route('frontend.home.ourworks') }}">Our Works</a></li>
                                <li><a href="{{ route('frontend.contact') }}">Contact</a></li>

                                <li><a href="{{ route('frontend.privacypolicy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('frontend.ethicspolicy') }}">Ethics Policy</a></li>
                                <li><a href="{{ route('frontend.cookiespolicy') }}">Cookies Policy</a></li>
                                <li><a href="{{ route('frontend.termsandconditions') }}">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h5>Contact</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="info clearfix">
                                <li><i class="flaticon-telephone"></i><a
                                        href="tel:+{{ $settings['contact_number'] }}">+{{ $settings['contact_number'] }}</a>
                                </li>
                                <li><i class="flaticon-email"></i><a
                                        href="mailto:{{ $settings['email_address'] }}">{{ $settings['email_address'] }}</a>
                                </li>
                                <li><i class="flaticon-pin"></i>{{ $settings['address'] }}</li>
                            </ul>
                        </div>

                        {{-- <div class="mt-20 mb-6">
                            <h6 class="footer-org-name">Organization No. 935622077</h6>
                        </div> --}}
                    </div>
                </div>

                <!-- Gallery -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget gallery-widget">
                        <div class="widget-title">
                            <h5>Who we Are??</h5>
                        </div>
                        <div class="widget-content">
                            <div class="text-left">
                                {!! $settings['footer_content'] !!}
                            </div>
                            {{-- <ul class="image-list clearfix">
                                @foreach (['footer-1.jpg', 'footer-2.jpg', 'footer-3.jpg'] as $image)
                                <li>
                                    <figure class="image">
                                        <img src="{{ asset('public/assets/frontend/images/resource/' . $image) }}"
                                            alt="">
                                        <a href="{{ asset('public/assets/frontend/images/resource/' . $image) }}"
                                            class="lightbox-image" data-fancybox="gallery">
                                            <i class="flaticon-plus-symbol"></i>
                                        </a>
                                    </figure>
                                </li>
                                @endforeach
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="mt-20 mb-6 text-right">
                        <h6 class="footer-org-name">Organization No. 935622077</h6>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .auto-container -->
        {{-- <div class="mt-20 mb-6 text-right">
            <h6 class="footer-org-name">Organization No. 935622077</h6>
        </div> --}}
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom centred">
        <div class="auto-container">
            <div class="copyright">
                <p>&copy; Copyright {{ now()->year }} by
                    <a href="{{ route('home.index') }}">{{ $settings['website_name'] ?? 'YourWebsite' }}</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- main-footer end -->

<!-- scroll to top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fal fa-long-arrow-up"></i>
</button>


<div class="modal fade" id="viewProductModel" tabindex="-1" aria-labelledby="viewProductModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewProductModelLabel">Product Details</h5>
                <button type="button" class="btn btn-link text-dark" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa fa-times"></i></button>
            </div>
            <div class="modal-body" id="viewProductModelBody">
                <p>Product Details is not here</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                    id="viewProductModelBtnCalcel">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="alertModel" tabindex="-1" aria-labelledby="alertModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" id="frmAlertModel">
            @csrf
            <input type="hidden" name="alertPageId" id="alertPageId">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModelLabel">Delete</h5>
                    <button type="button" class="btn btn-link text-dark" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa fa-times"></i></button>
                </div>
                <div class="modal-body" id="alertModelBody">
                    <p>Are you sure to delete this Page</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="genric-btn primary" data-bs-dismiss="modal"
                        id="alertModelBtnCalcel">Close</button>
                    <button type="submit" class="genric-btn danger" id="alertModelBtnOk">Delete</button>
        </form>
    </div>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="donationModalLabel">Donation Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Progress -->
                {{-- <div class="progress mb-4" style="height: 20px;">
                    <div class="progress-bar" role="progressbar" style="width: 33%">Step 1 of 3</div>
                </div> --}}
                <form method="POST" id="donationForm">
                    @csrf
                    <div class="step step-1">
                        <div class="row">
                            <div class="col-12 col-md-6 text-center mt-2 mb-2">
                                <a href="{{ route('frontend.home.donation', 'financial-services') }}"
                                    class="theme-btn btn-one btn3">Financial Services</a>
                            </div>
                            <div class="col-12 col-md-6 text-center mt-2 mb-2">
                                <button type="button" class="theme-btn btn-one next-btn">Other Services</button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="step step-2 d-none">
                        <div class="row">
                            <div class="col-12 col-md-6 text-center mt-16 mb-16">
                                <a href="{{ route('frontend.home.donation', 'medical-equipments') }}"
                                    class="theme-btn btn-one">Medical Equipments</a>
                            </div>
                            <div class="col-12 col-md-6 text-center mt-16 mb-16">
                                <a href="{{ route('frontend.home.donation', 'volunteer-services') }}"
                                    class="theme-btn btn-one btn3">Volunteer Services</a>
                            </div>
                            <div class="col-12 col-md-6 text-center mt-2 mb-16">
                                <a href="{{ route('frontend.home.donation', 'medicine') }}"
                                    class="theme-btn btn-one btn3">Medicine</a>
                            </div>
                            <div class="col-12 col-md-6 text-center mt-2 mb-16">
                                <a href="{{ route('frontend.home.donation', 'others') }}"
                                    class="theme-btn btn-one ">Others</a>
                            </div>
                        </div>
                        <div class="row border-top mt-16">
                            <div class="col-12 col-md-12 text-center mt-16 mb-2">
                                <button type="button" class="theme-btn btn-one btn4 prev-btn">Previous</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newsletterModal" tabindex="-1" aria-labelledby="newsletterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newsletterModalLabel">Sign up for our Newsletter</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="newsletterForm">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div id="newsletterSuccess"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="formFName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="formFName" id="formFName"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="formLName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="formLName" id="formLName"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="mb-3">
                                        <label for="formEmailAddress" class="form-label">Email Address</label>
                                        <input type="text" class="form-control" name="formEmailAddress"
                                            id="formEmailAddress" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="confirm_newsletter"
                                            name="confirm_newsletter" required>
                                        <label class="form-check-label" for="confirm_newsletter">
                                            I agree to the <a href="{{ route('frontend.privacypolicy') }}"
                                                target="_blank">Privacy Policy</a> and wish to subscribe to the
                                            newsletter.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-20">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <button type="button" class="btn btn-danger w-100"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                                <div class="col-12 col-md-6">
                                    <button type="submit" class="btn btn-primary w-100">Signup Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="cookieConsent" class="cookie-consent-banner"
    style="display: none; position: fixed; bottom: 0; width: 100%; background-color: #4cb0df; color: #fff; padding: 15px; text-align: center; z-index: 9999;">
    <span class="d-none d-sm-inline-block">We use cookies to ensure you get the best experience on our website. <a
            href="{{ route('frontend.privacypolicy') }}" style="color: #000000; text-decoration: underline;">Learn
            more</a> </span>
    <p class="d-block d-sm-none mb-10" style="color:#fff;font-size:15px;">We use cookies to ensure you get the best
        experience
        on our website. <a href="{{ route('frontend.privacypolicy') }}"
            style="color: #000000; text-decoration: underline;">Learn
            more</a> </p>
    <button id="acceptCookie"
        style="margin-left: 20px; background-color: #8a5f3c; border: none; color: white; padding: 8px 16px; cursor: pointer;border:1px solid #fff;">Accept</button>
    <button id="notCookie"
        style="margin-left: 4px; background-color: #003832; border: none; color: white; padding: 8px 16px; cursor: pointer;border:1px solid #fff;width: 86px;">No</button>
</div>



@push('css')

    <style>
        #newsletterForm .error {
            color: red;
        }
    </style>

@endpush

@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('public/assets/frontend/js/jquery.redirect.js') }}"></script>
    <script src="{{ url('public/assets/frontend/js/parsley.js') }}"></script>
    <script src="{{ url('public/assets/frontend/js/jquery-confirm.js') }}"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>

        // $(document).ready(function () {
        //     $('#newsletterForm').parsley();
        //     $('#newsletterForm').on('submit', function (e) {
        //         e.preventDefault();
        //         const rcres = grecaptcha.getResponse();
        //         if (!rcres.length) {
        //             grecaptcha.reset();
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Recaptcha Required',
        //                 text: 'Please complete the Recaptcha.',
        //             });
        //             return;
        //         }

        //         if (!$('#paypal_data_form').parsley().isValid()) {
        //             grecaptcha.reset();
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Form Error',
        //                 text: 'There are errors in the form. Please correct them.',
        //             });
        //             return;
        //         }

        //         console.log('Newsletter Submit');
        //     });
        // });

        // $(document).ready(function () {
        //     $('#newsletterForm').validate({
        //         rules: {
        //             formFName: { required: true, minlength: 3 },
        //             formLName: { required: true, minlength: 4 },
        //             formEmailAddress: { required: true, email: true }
        //         },
        //         messages: {
        //             formFName: { required: "Your First name is required", minlength: "Name must be at least 3 characters long" },
        //             formLName: { required: "Your Last name is required", minlength: "Name must be at least 4 characters long" },
        //             formEmailAddress: { required: "Please provide an email address" }
        //         }
        //     });
        // });
    </script>
    <script>
        $(document).ready(function () {
            // Show banner if no consent recorded
            if (!localStorage.getItem('cookieConsent')) {
                $('#cookieConsent').fadeIn();
            }

            // Accept cookie
            $('#acceptCookie').on('click', function () {
                localStorage.setItem('cookieConsent', true);
                $('#cookieConsent').fadeOut();
            });

            // Decline cookie (just hide banner, don't set anything)
            $('#notCookie').on('click', function () {
                $('#cookieConsent').fadeOut();
            });
        });
    </script>

@endpush
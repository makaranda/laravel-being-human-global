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
                        <figure class="footer-logo bg-white">
                            <a href="{{ route('home.index') }}">
                                <img src="{{ asset('public/assets/frontend/img/' . $settings['footer_logo']) }}"
                                    alt="{{ $settings['website_name'] }}">
                            </a>
                        </figure>
                        <ul class="footer-social clearfix">
                            <li><a href="{{ $settings['social_twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $settings['social_facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $settings['social_pinterest'] }}"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li><a href="{{ $settings['social_instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
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
                                <li><a href="{{ route('frontend.home.donation') }}">Donation</a></li>
                                <li><a href="{{ route('frontend.home.blogs') }}">Blogs</a></li>
                                <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
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
                                        href="tel:{{ $settings['contact_number'] }}">{{ $settings['contact_number'] }}</a>
                                </li>
                                <li><i class="flaticon-email"></i><a
                                        href="mailto:{{ $settings['email_address'] }}">{{ $settings['email_address'] }}</a>
                                </li>
                                <li><i class="flaticon-pin"></i>{{ $settings['address'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget gallery-widget">
                        <div class="widget-title">
                            <h5>Who we Are??</h5>
                        </div>
                        <div class="widget-content">
                            <div>
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

            </div> <!-- .row -->
        </div> <!-- .auto-container -->
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
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="formFName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="formFName" id="formFName"
                                            placeholder="John">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="formLName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="formLName" id="formLName"
                                            placeholder="Smith">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="mb-3">
                                        <label for="formEmailAddress" class="form-label">Email Address</label>
                                        <input type="text" class="form-control" name="formEmailAddress"
                                            id="formEmailAddress" placeholder="johnsmith@gmail.com">
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

@push('css')

    <style>

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
        $(document).ready(function () {
            $('#newsletterForm').parsley();
            $('#newsletterForm').on('submit', function (e) {
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

                console.log('Newsletter Submit');
            });
        });
    </script>

@endpush
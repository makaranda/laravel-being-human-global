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
                                <li><a href="{{ route('home.index') }}">About Us</a></li>
                                <li><a href="{{ route('home.index') }}">Book Tickets</a></li>
                                <li><a href="{{ route('home.index') }}">Meet the Animals</a></li>
                                <li><a href="{{ route('home.index') }}">Our Gallery</a></li>
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
                            <h5>Gallery</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="image-list clearfix">
                                @foreach (['footer-1.jpg', 'footer-2.jpg', 'footer-3.jpg'] as $image)
                                    <li>
                                        <figure class="image">
                                            <img src="{{ asset('public/assets/frontend/images/resource/' . $image) }}" alt="">
                                            <a href="{{ asset('public/assets/frontend/images/resource/' . $image) }}"
                                                class="lightbox-image" data-fancybox="gallery">
                                                <i class="flaticon-plus-symbol"></i>
                                            </a>
                                        </figure>
                                    </li>
                                @endforeach
                            </ul>
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
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {

        });
    </script>

@endpush
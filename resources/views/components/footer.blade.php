</main>
<!-- ===============>> footer start here <<================= -->

 <footer>
        <div class="footer-wrapper gray-bg">
            <div class="footer-area footer-padding">
             <!--? Subscribe Area Start -->
             <section class="subscribe-area">
                <div class="container">
                    <div class="row justify-content-between subscribe-padding">
                        <div class="col-xxl-3 col-xl-3 col-lg-4">
                            <div class="subscribe-caption">
                                <h3>Subscribe Newsletter</h3>
                                <p>Subscribe newsletter to get 5% on all products.</p>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                            <div class="subscribe-caption">
                                <form action="#">
                                    <input type="text" placeholder="Enter your email">
                                    <button class="subscribe-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-4">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="{{ $settings['social_facebook'] }}"><i class="fab fa-facebook"></i></a>
                                <a href="{{ $settings['social_instagram'] }}"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $settings['social_youtube'] }}"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Subscribe Area End -->
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-20">
                                <!-- logo -->
                                <div class="footer-logo mb-35">
                                    <a href="{{ route('home.index') }}">
                                        <img src="{{ url('public/assets/frontend/img/'.$settings['main_logo']) }}" alt="{{ $settings['website_name'] }}"></a>
                                    <p class="text-white pt-10">{{ $settings['footer_content'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($main_categories->count())
                        @foreach ($main_categories as $category)
                            @if($category->is_top == 1)
                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                                    <div class="single-footer-caption mb-50">
                                        <div class="footer-tittle">
                                                <h4>{{ $category->name }}</h4>
                                                @if ($category->subCategories->count())
                                                    <ul>
                                                        @foreach ($category->subCategories as $subcategory)
                                                            <li class="{{ request()->routeIs('frontend.product.subcategory') && request()->route('cat_sub_slug') == $subcategory->slug ? 'active' : '' }}">
                                                                <a href="{{ route('frontend.product.subcategory', ['cat_slug' => $category->slug, 'cat_sub_slug' => $subcategory->slug]) }}">
                                                                    {{ $subcategory->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ===============>> footer end here <<================= -->

<!-- Scroll Up -->
<div id="back-top" >
    <a class="wrapper" title="Go to Top" href="#">
        <div class="arrows-container">
            <div class="arrow arrow-one">
            </div>
            <div class="arrow arrow-two">
            </div>
        </div>
    </a>
</div>

<div class="modal fade" id="viewProductModel" tabindex="-1" aria-labelledby="viewProductModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewProductModelLabel">Product Details</h5>
          <button type="button" class="btn btn-link text-dark" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
        </div>
        <div class="modal-body" id="viewProductModelBody">
          <p>Product Details is not here</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="viewProductModelBtnCalcel">Close</button>
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
          <button type="button" class="btn btn-link text-dark" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
        </div>
        <div class="modal-body" id="alertModelBody">
          <p>Are you sure to delete this Page</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="genric-btn primary" data-bs-dismiss="modal" id="alertModelBtnCalcel">Close</button>
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

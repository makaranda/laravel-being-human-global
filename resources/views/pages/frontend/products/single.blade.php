@extends('layouts.frontend')

@section('content')


   <!-- bradcam_area  -->
   <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>{{ $product['title'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/ bradcam_area  -->

 <!-- ================ contact section start ================= -->
 <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">{{ $product['title'] }}</h2>
        </div>
        <div class="col-lg-8">
          {!! $product['description'] !!}
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

@endsection

@push('css')
    <style>
        img.img-fluid.login-logo{
            width: 120px !important;
        }
        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }
  
    </style>
@endpush

@push('css')
    <style>

    </style>
@endpush

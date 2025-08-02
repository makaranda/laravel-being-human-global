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

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding pb-0 mt-30">
    <div class="container">

    <div class="row">
      <div class="col-12">
      {{-- <h2 class="contact-title">Get in Touch</h2> --}}
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show w-100 p-3" role="alert">
      {{ session('success') }}
      <button type="button" class="btn btn-link text-dark flaot-right" data-bs-dismiss="alert" aria-label="Close"><i
        class="fa fa-times"></i></button>
      </div>
    @endif
      </div>
      <div class="col-lg-8 contact_left_side">
      <form class="form-contact contact_form" action="{{ route('frontend.contactsubmit') }}" method="post"
        id="contactUsForm" novalidate="novalidate">
        @csrf
        <div class="row">

        <div class="col-sm-6">
          <div class="form-group mt-8">
          <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Name'" placeholder='Name'>
          <span class="focus-input2 d-none" data-placeholder="Name"></span>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group mt-8">
          <input class="form-control" name="phone" id="phone" type="text" onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Phone'" placeholder='Phone'>
          <span class="focus-input2 d-none" data-placeholder="Phone"></span>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group mt-8">
          <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Email address'" placeholder='Email address'>
          <span class="focus-input2 d-none" data-placeholder="Email address"></span>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group mt-8">
          <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Subject'" placeholder='Subject'>
          <span class="focus-input2 d-none" data-placeholder="Subject"></span>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
          <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"
            placeholder='Message'></textarea>
          <span class="focus-input2 d-none" data-placeholder="Message"></span>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
          <div class="form-check">
          <input type="checkbox" class="form-check-input" id="confirm_contact" name="confirm_contact" required>
          <label class="form-check-label" for="confirm_contact">
            I agree to the <a href="{{ route('frontend.privacypolicy') }}" target="_blank">Privacy Policy</a> and
            consent to be contacted regarding my
            inquiry.
          </label>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
          <button class="button button-contactForm btn_4 boxed-btn theme-btn btn-one" type="submit"
          name="submit-form"><span>Send Message</span></button>
        </div>
        </div>
      </form>
      </div>
      <div class="col-lg-4 contact_right_side">
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="fas fa-home"></i></span>
        <div class="media-body">
        <h2>Address</h2>
        <h3 class="website_name">{{ $settings['website_name'] }}</h3>
        <p>{{ $settings['address'] }}</p>
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="fas fa-phone"></i></span>
        <div class="media-body">
        <h2>Phone</h2>
        <h3>{{ $settings['contact_number'] }}</h3>
        <h3>{{ $settings['contact_number2'] }}</h3>
        <p>Mon to Fri 9am to 6pm</p>
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="fas fa-envelope"></i></span>
        <div class="media-body">
        <h2>Email</h2>
        <h3>{{ $settings['email_address'] }}</h3>
        <p>Send us your query anytime!</p>
        </div>
      </div>
      <div class="media contact-info">
        <div class="footer__links-content">
        <div class="mobile-575-center">
          <ul class="social-icons">
          <li><a href="{{ $settings['social_twitter'] }}"><i class="fab fa-twitter"></i></a></li>
          <li><a href="{{ $settings['social_facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="{{ $settings['social_youtube'] }}"><i class="fab fa-youtube"></i></a>
          </li>
          <li><a href="{{ $settings['social_instagram'] }}"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>

    <div class="container-fluid mt-30">

    <div class="d-none d-sm-block mb-0 pb-0">
      <div id="map" style="">
      <iframe src="{{ $settings['google_map'] }}" width="100%" height="450" style="border:0;" allowfullscreen=""
        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
@endsection

@push('css')
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/contacts/contact-5/assets/css/contact-5.css" />
  <style>
    .social-icons {
    li {
      a {
      position: relative;
      display: inline-block;
      width: 40px;
      height: 40px;
      line-height: 40px;
      background: #0e131f;
      font-size: 15px;
      text-align: center;
      color: #fff;

      &:hover {
        background: #303d5a;
      }
      }

      position: relative;
      display: inline-block;
      float: left;
      margin-right: 10px;
    }
    }

    .contact_right_side {
    /* background-color: #d7f2ff; */
    padding: 20px;
    /* box-shadow: 0px 0px 16px 0px #000000a1; */

    .media.contact-info {
      &:not(:first-of-type) {
      padding-top: 35px;
      }

      .contact-info__icon {
      padding: 10px;

      i {
        color: #8a5f3c;
        font-size: 25px;
      }
      }

      .media-body {
      h2 {
        font-family: 'Source Sans 3';
        color: #4a2d15;
        font-size: 26px;
      }

      h3 {
        font-family: 'Source Sans 3';
        color: #0a3244;
        font-size: 18px;
      }

      p {
        font-family: 'Source Sans 3';
      }
      }
    }
    }

    .form-control {
    padding: 22px 10px;
    }

    #contactUsForm label {
    width: 100%;
    text-align: left;
    color: red;
    }

    .form-check-label {
    color: #000 !important;
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
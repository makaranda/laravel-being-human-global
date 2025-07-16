@extends('layouts.frontend')

@section('content')


<!-- Hero area Start-->
<div class="hero-area section-bg2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slider-area">
                    <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                        <div class="hero-caption hero-caption2">
                            <h2>User Register</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">User Register</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Hero area End -->
<!-- Register Area Start -->
    <div class="register-form-area">
        <div class="register-form text-center">
            <!-- Login Heading -->
            <div class="register-heading">
                <span>Sign Up</span>
                <p>Create your account to get full access</p>
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger d-block align-items-center" role="alert">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <div><i class="fa fa-ban mr-2"></i>Error</div>
                                </div>
                                <div class="col-12 col-md-10 text-left">
                                    <p style="color: red;" class="mb-0">{{ $error }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success d-block align-items-center" role="alert">
                        <div class="row">
                            <div class="col-12 col-md-2">
                                <div><i class="fa fa-check-circle mr-2"></i>Success</div>
                            </div>
                            <div class="col-12 col-md-10 text-left">
                                <p style="color: green;" class="mb-0">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <form action="{{ route('frontend.userregisterform') }}" method="POST" class="register-form-box">
            @csrf
            <!-- Single Input Fields -->
            <div class="input-box">
                <div class="single-input-fields">
                    <label>Full name</label>
                    <input type="text" placeholder="Enter full name" value="{{ old('full_name') }}" name="full_name">
                </div>
                <div class="single-input-fields">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter email address" value="{{ old('email') }}" name="email">
                </div>
                <div class="single-input-fields">
                    <label>Phone</label>
                    <input type="number" placeholder="Enter Phone Number" value="{{ old('phone_number') }}" name="phone_number">
                </div>
                <div class="single-input-fields">
                    <label>Address</label>
                    <input type="text" placeholder="Enter Address" value="{{ old('address') }}" name="address">
                </div>
                <div class="single-input-fields">
                    <label>Username</label>
                    <input type="text" placeholder="Enter Username" value="{{ old('username') }}" name="username">
                </div>
                <div class="single-input-fields">
                    <label>Password</label>
                    <input type="password" placeholder="Enter Password" name="password">
                </div>
                <div class="single-input-fields">
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" name="confirm_password">
                </div>
            </div>
            <!-- form Footer -->
            <div class="register-footer">
                <p> Already have an account? <a href="{{ route('frontend.userlogin') }}"> Login</a> here</p>
                <button type="submit" class="submit-btn3">Sign Up</button>
            </div>
          </form>
        </div>
    </div>
<!-- Register Area End -->

@endsection

@push('css')
    <style>
        .p_star .placeholder{
            background-color: transparent !important;
        }

        img.img-fluid.login-logo{
            width: 120px !important;
        }
        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }

        .border-box{
            padding: 15px;
            border 2px solid #f79b20;
        }
        .about_sub_description{
            p{

            }
        }
        .about_description{
            p{
                border: 2px solid #e6b127;
                padding: 24px 20px;
                display: inline-block;
                height: 100%;
                vertical-align: top;
            }
        }
        @media (max-width: 2040px) {
            .about_description{
                p{
                    width: 49%;
                    height: 260px;
                }
            }
        }

        @media (max-width: 1440px) {
            .about_description{
                p{
                    width: 49%;
                    height: 350px;
                }
            }
        }

        @media (max-width: 720px) {
            .about_description{
                p{
                    width: 100%;
                    height: auto;
                }
            }
        }

        @media (max-width: 540px) {
            .about_description{
                p{
                    width: 100%;
                    height: auto;
                }
            }
        }

        @media (max-width: 200px) {
            .about_description{
                p{
                    width: 100%;
                    height: auto;
                }
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            // Increase quantity
            $('.input-number-increment').click(function () {
                let id = $(this).data('id');
                updateCartQuantity(id, 'increment');
            });

            // Decrease quantity
            $('.input-number-decrement').click(function () {
                let id = $(this).data('id');
                updateCartQuantity(id, 'decrement');
            });

            function updateCartQuantity(productId, action) {
                $.ajax({
                    url: '{{ route("frontend.cart.update") }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: productId,
                        action: action
                    },
                    success: function (response) {
                        // Reload the cart view area
                        location.reload();
                    },
                    error: function (xhr) {
                        alert(xhr.responseJSON.message || 'Something went wrong!');
                    }
                });
            }
        });

    </script>
@endpush

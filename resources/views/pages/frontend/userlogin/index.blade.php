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
                            <h2>User Login</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">User Login</a></li>
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
<!-- login Area Start -->
<div class="login-form-area">
    <div class="login-form">
        <!-- Login Heading -->
        <div class="login-heading">
            <span>Login</span>
            <p>Enter Login details to get access</p>
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
        <form action="{{ route('frontend.userloginform') }}" method="POST" class="login-form-box">
        @csrf
        <!-- Single Input Fields -->
        <div class="input-box">
            <div class="single-input-fields">
                <label>Username or Email Address</label>
                <input type="text" name="username" value="{{ old('username') }}" placeholder="Username / Email address">
            </div>
            <div class="single-input-fields">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Password">
            </div>
            <div class="single-input-fields login-check">
                <input type="checkbox" id="fruit1" name="keep-log">
                <label for="fruit1">Keep me logged in</label>
                <a href="#" class="f-right" id="forget_password_form">Forgot Password?</a>
            </div>
        </div>
        <!-- form Footer -->
        <div class="login-footer">
            <p>Don’t have an account? <a href="{{ route('frontend.userregister') }}">Sign Up</a>  here</p>
            <button type="submit" class="submit-btn3">Login</button>
        </div>
    </form>
    </div>
</div>
<!-- login Area End -->

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

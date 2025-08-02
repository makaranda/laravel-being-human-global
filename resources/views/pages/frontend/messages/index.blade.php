@extends('layouts.frontend')

@section('content')

    <!-- Page Title -->
    <section class="page-title">
        <div class="img-wrap parallax-demo-1">
            <div class="parallax-inner back-img"
                style="background-image: url({{ url('public/assets/frontend/images/background/' . ($settings_banner ?? 'default-banner.jpg')) }});">
            </div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li>{{ $message_title ?? 'Message' }}</li>
                </ul>
                <div class="title">
                    <h1>{{ $message_title ?? 'Message' }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    @if($code == '200')
        <!-- Payment Receipt Section -->
        <section class="contact-section section_padding mt-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 text-center">
                        <img src="{{ asset('public/assets/images/success-svgrepo-com.svg') }}" alt="Success" class="mb-4"
                            style="max-width: 100px;" />
                        <h2 class="mb-4">Thank You!</h2>
                        <div class="receipt p-4 rounded shadow-sm bg-white text-start mt-20">
                            <h4 class="mb-3">Payment Receipt</h4>
                            {{-- <img src="{{ asset('public/assets/images/logo.png') }}" alt="Logo" style="height: 50px;"
                                class="mb-3"> --}}

                            <p><strong>Payment ID:</strong> {{ $payment_id ?? 'N/A' }}</p>
                            <p><strong>Donation Summary:</strong> {{ $form_data['donation_summary'] ?? 'Donation' }}</p>
                            <p><strong>Email:</strong> {{ $form_data['info_email'] ?? 'N/A' }}</p>
                            <p><strong>Name:</strong>
                                {{ ($form_data['info_first_name'] ?? '') . ' ' . ($form_data['info_last_name'] ?? '') }}</p>
                            <p><strong>Phone:</strong> {{ $form_data['info_mobile'] ?? '-' }}</p>
                            <p><strong>Address:</strong> {{ $form_data['billing_info_city'] ?? '' }},
                                {{ $form_data['billing_info_country'] ?? '' }}
                            </p>
                            <p><strong>Amount:</strong> <span class="fw-bold">{{ strtoupper($form_data['currency'] ?? 'USD') }}
                                    ${{ number_format($form_data['amount'], 2) }}</span></p>

                            <div class="text-center mt-4">
                                <a href="#" onclick="window.print();" class="btn btn-success">Download PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <!-- Error / Message Section -->
        <section class="contact-section section_padding error-page mt-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <img src="{{ asset('public/assets/images/' . ($message_icon ?? 'error.svg')) }}" alt="Error"
                            class="error-image mb-4" style="width: 315px;" />
                        <h1 class="error-code display-2">{{ $code ?? 'Oops!' }}</h1>
                        <h3 class="error-message mb-3">{{ $message ?? 'Something went wrong.' }}</h3>
                        <p class="mb-4">The page you're looking for may have been moved, deleted, or is temporarily unavailable.
                        </p>

                        <ul class="list-unstyled error-list mb-4">
                            <li>✔ Check the spelling of the URL</li>
                            <li>✔ Return to the <a href="{{ url('/') }}">home page</a></li>
                            <li>✔ Use the back button</li>
                            <li>✔ Contact us if the issue persists</li>
                        </ul>

                        <a href="{{ url('/') }}" class="btn theme-btn">Go to Home</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection

@push('css')
    <style>
        .error-image {
            width: 315px !important;
        }

        .receipt {
            border: 1px solid #ddd;
        }

        .receipt p {
            font-size: 20px;
            margin-bottom: 10px;
        }

        h4 {
            font-size: 24px;
        }

        h2 {
            font-size: 30px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            color: #fff;
            font-weight: bold;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
@endpush
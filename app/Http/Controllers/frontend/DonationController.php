<?php

namespace App\Http\Controllers\frontend;


use App\Helpers\VisitorHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\MainSlider;
use App\Models\MusicTrack;
use App\Models\Page;
use App\Models\ContactUs;
use App\Models\Setting;
use App\Models\Career;
use App\Models\GalleryHome;
use App\Models\Gallery;
use App\Models\GalleryItem;
use App\Models\According;
use App\Models\Programme;
use App\Models\University;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Size;
use App\Models\Color;
use App\Models\District;
use App\Models\ProgramCategory;
use App\Models\ProgramSubCategory;
use App\Models\ProgramSubCategoryItem;
use App\Models\Partner;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Testimonial;
use App\Models\Link;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ShippingCharge;
//use App\Observers\VisitorCountObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\PaymentIntent;
use App\Helpers\SmsHelper;
use App\Models\Donation;

class DonationController extends Controller
{
    public function createStripeSession(Request $request)
    {
        session(['donation_form_data' => $request->all()]);
        //dd($request->all());
        //dd(session('donation_form_data'));
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $amount = (int) $request->amount * 100; // convert to cents

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => 'Donation',
                            ],
                            'unit_amount' => $amount,
                        ],
                        'quantity' => 1,
                    ]
                ],
                'mode' => 'payment',
                'success_url' => route('payment.success') . '?session_id={CHECKOUT_SESSION_ID}',  // see next step
                'cancel_url' => route('payment.cancel'),
            ]);

            return response()->json(['id' => $session->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function success(Request $request)
    {
        $settings = Setting::first();
        $settings_banner = $settings->page_banner;
        // Retrieve saved form data from session
        $formData = session('donation_form_data');
        $sessionId = $request->get('session_id');
        if (!$formData) {
            return view('pages.frontend.messages.index', [
                'message_title' => 'Session Expired',
                'message' => 'Your session has expired. Please try again.',
                'code' => '419'
            ]);
        } elseif (!$sessionId) {
            return view('pages.frontend.messages.index', [
                'message_title' => 'Stripe Payment is not valid',
                'message' => 'Your Stripe Payment is not valid. Please try again.',
                'code' => '419'
            ]);
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = \Stripe\Checkout\Session::retrieve($sessionId);
        $paymentIntentId = $session->payment_intent;

        // Here, save $formData to your database, e.g. Donation model:
        //dd($formData);
        Donation::create([
            'payment_type' => $formData['payment_type'] ?? 'one_time',
            'amount' => $formData['amount'],
            'session_id' => $paymentIntentId,
            'cover_fee' => isset($formData['confirm_donation']),
            'title' => $formData['info_title'] ?? null,
            'first_name' => $formData['info_first_name'],
            'last_name' => $formData['info_last_name'],
            'email' => $formData['info_email'],
            'mobile' => $formData['info_mobile'] ?? null,
            'on_behalf' => isset($formData['my_gift']),
            'country' => $formData['billing_info_country'] ?? null,
            'address1' => $formData['billing_info_address1'],
            'address2' => $formData['billing_info_address2'] ?? null,
            'city' => $formData['billing_info_city'],
            'province' => $formData['billing_info_province'],
            'postal_code' => $formData['billing_info_postal_code'],
            'status' => 1,
            'confirmation' => 1,
        ]);

        // Clear session data
        session()->forget('donation_form_data');

        return view('pages.frontend.messages.index', [
            'message_title' => 'Payment Successful',
            'message' => 'Thank you! Your payment was successfully processed.',
            'message_icon' => 'success-svgrepo-com.svg',
            'form_data' => $formData,
            'payment_id' => $paymentIntentId,
            'settings_banner' => $settings_banner,
            'code' => '200'
        ]);
    }

    public function cancel()
    {
        $settings = Setting::first();
        $settings_banner = $settings->page_banner;
        $formData = session('donation_form_data');

        if (!$formData) {
            return view('pages.frontend.messages.index', [
                'message_title' => 'Session Expired and Payment Cancelled',
                'message' => 'Your payment process was cancelled and session has expired. Please try again.',
                'code' => '419'
            ]);
        }

        Donation::create([
            'payment_type' => $formData['payment_type'] ?? 'one_time',
            'amount' => $formData['amount'],
            'session_id' => '',
            'cover_fee' => isset($formData['confirm_donation']),
            'title' => $formData['info_title'] ?? null,
            'first_name' => $formData['info_first_name'],
            'last_name' => $formData['info_last_name'],
            'email' => $formData['info_email'],
            'mobile' => $formData['info_mobile'] ?? null,
            'on_behalf' => isset($formData['my_gift']),
            'country' => $formData['billing_info_country'] ?? null,
            'address1' => $formData['billing_info_address1'],
            'address2' => $formData['billing_info_address2'] ?? null,
            'city' => $formData['billing_info_city'],
            'province' => $formData['billing_info_province'],
            'postal_code' => $formData['billing_info_postal_code'],
            'status' => 0,
            'confirmation' => 0,
        ]);

        return view('pages.frontend.messages.index', [
            'message_title' => 'Payment Cancelled',
            'message' => 'Your payment process was cancelled. Please try again or contact support.',
            'message_icon' => 'error-svgrepo-com.svg',
            'form_data' => $formData,
            'payment_id' => '',
            'settings_banner' => $settings_banner,
            'code' => '400'
        ]);
    }
}

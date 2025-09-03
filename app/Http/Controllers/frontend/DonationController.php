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

    public function submitOtherDonation(Request $request)
    {
        $settings = Setting::first();
        $settings_banner = $settings->page_banner;
        $paymentIntentId = uniqid('don_', true);
        session(['other_donation_form_data' => $request->all()]);

        $donation = Donation::create([
            'payment_type'        => $request->input('payment_type', 'one_time'),
            'amount'              => $request->input('amount'),
            'session_id'          => $paymentIntentId,
            'donation_category'   => $request->input('category'),
            'donation_subcategory'=> $request->input('donation_type'),
            'cover_fee'           => $request->has('confirm_donation'),
            'title'               => $request->input('info_title'),
            'first_name'          => $request->input('info_first_name'),
            'last_name'           => $request->input('info_last_name'),
            'email'               => $request->input('info_email'),
            'mobile'              => $request->input('info_mobile'),
            'on_behalf'           => $request->has('my_gift'),
            'country'             => $request->input('billing_info_country'),
            'address1'            => $request->input('billing_info_address1'),
            'address2'            => $request->input('billing_info_address2'),
            'city'                => $request->input('billing_info_city'),
            'province'            => $request->input('billing_info_province'),
            'postal_code'         => $request->input('billing_info_postal_code'),
            'status'              => 1,
            'confirmation'        => 1,
        ]);
        //dd($donation);
        return response()->json([
            'message'       => ($donation->id > 0) ? 'success' : 'error',
            //'message'       => $donation->id,
            'code'          => '200',
            'session_id'    => $paymentIntentId,
            'redirect_success_url'  => route('donation.othersuccess'),
            'redirect_error_url'  => route('donation.othererror'),
        ]);
    }

    public function othersuccess(Request $request)
    {
        $settings = Setting::first();
        $settings_banner = $settings->page_banner;
        $formData = session('other_donation_form_data');
        // dd($request->all());
        //dd($formData);
        // Retrieve saved form data from session
        $contactData = [
                            'name'          => $formData['info_title'] . '.' . $formData['info_first_name'] . ' ' . $formData['info_last_name'],
                            'phone'         => $formData['info_mobile'],
                            'email'         => $formData['info_email'],
                            'address'       => $formData['billing_info_address1'] . ' ' . $formData['billing_info_address2'],
                            'city'          => $formData['billing_info_city'],
                            'province'      => $formData['billing_info_province'],
                            'country'       => $formData['billing_info_country'],
                            'postal_code'   => $formData['billing_info_postal_code'],
                            'amount'        => $formData['amount'],
                            'category'      => ucfirst($formData['category']),
                            'donation_type' => $formData['donation_type'],
                            'status'        => 1,
                            'ip_address'    => $request->ip(),
                            'mac_address'   => substr(exec('getmac'), 0, 17),   // ⚠ may not work on Linux servers
                            'device'        => $request->header('User-Agent'),
                        ];

        $sessionId = $request->get('session_id');
        if (!$formData) {
            return view('pages.frontend.messages.index', [
                'message_title' => 'Session Expired',
                'message' => 'Your session has expired. Please try again.',
                'code' => '419'
            ]);
        } elseif (!$sessionId) {
            return view('pages.frontend.messages.index', [
                'message_title' => 'Donation is not valid',
                'message' => 'Your Donation is not valid. Please try again.',
                'code' => '419'
            ]);
        }

        try {
            $mail = new PHPMailer(true);

            // Set up the SMTP connection (adjust SMTP details accordingly)
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            //$mail->Host = 'mail.emailhost.com'; // For example, use your SMTP host here
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME'); // Set your SMTP username from .env file
            $mail->Password = env('MAIL_PASSWORD'); // Set your SMTP password from .env file
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; // Or 465 for SSL

            // Set the sender and recipient details
            $mail->setFrom($request->email, $request->name); // The sender's email and name
            $mail->addAddress(env('MAIL_OWNER')); // Set the recipient email (Owner's email)
            //$mail->addAddress('makarandapathirana@gmail.com'); // Set the recipient email (Owner's email)

            // Set email subject and body content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Message: ' . $request->subject;
            $mail->Body = view('templates.email.donation_message', [
                'data' => $contactData,
                'settings' => $settings,
            ])->render(); // Passing the data to the view

            // Send the email
            $mail->send();

            // ==== EMAIL TO USER (Thank You) ====
            $mailUser = new PHPMailer(true);
            $mailUser->isSMTP();
            $mailUser->Host = env('MAIL_HOST');
            $mailUser->SMTPAuth = true;
            $mailUser->Username = env('MAIL_USERNAME');
            $mailUser->Password = env('MAIL_PASSWORD');
            $mailUser->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mailUser->Port = 587;

            $mailUser->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME', 'Support Team'));
            $mailUser->addAddress($request->email, $request->name);

            $mailUser->isHTML(true);
            $mailUser->Subject = 'Thank you for donating us!';
            $mailUser->Body = view('templates.email.donation_message_user', [
                'data' => $contactData,
                'settings' => $settings,
            ])->render();

            $mailUser->send();

        } catch (Exception $e) {
            // If something goes wrong with the email, log the error
            Log::error('Email could not be sent. Mailer Error: ' . $mail->ErrorInfo);
        }
        //dd($formData);
        // Clear session data
        session()->forget('other_donation_form_data');

        return view('pages.frontend.messages.index', [
            'message_title' => 'Donation Successful',
            'message' => 'Thank you! Your Donation was successfully processed.',
            'message_icon' => 'success-svgrepo-com.svg',
            'form_data' => $formData,
            'payment_id' => $sessionId,
            'settings_banner' => $settings_banner,
            'code' => '200'
        ]);
    }

    public function othercancel()
    {
        $settings = Setting::first();
        $settings_banner = $settings->page_banner;
        $formData = session('donation_form_data');

        if (!$formData) {
            return view('pages.frontend.messages.index', [
                'message_title' => 'Session Expired and Donation Cancelled',
                'message' => 'Your Donation process was cancelled and session has expired. Please try again.',
                'code' => '419'
            ]);
        }

        return view('pages.frontend.messages.index', [
            'message_title' => 'Donation Cancelled',
            'message' => 'Your Donation process was cancelled. Please try again or contact support.',
            'message_icon' => 'error-svgrepo-com.svg',
            'form_data' => $formData,
            'payment_id' => '',
            'settings_banner' => $settings_banner,
            'code' => '400'
        ]);
    }

    public function success(Request $request)
    {
        $settings = Setting::first();
        $settings_banner = $settings->page_banner;
        // Retrieve saved form data from session
        $formData = session('donation_form_data');
        $sessionId = $request->get('session_id');

        $contactData = [
                    'name'          => $formData['info_title'] . '.' . $formData['info_first_name'] . ' ' . $formData['info_last_name'],
                    'phone'         => $formData['info_mobile'],
                    'email'         => $formData['info_email'],
                    'address'       => $formData['billing_info_address1'] . ' ' . $formData['billing_info_address2'],
                    'city'          => $formData['billing_info_city'],
                    'province'      => $formData['billing_info_province'],
                    'country'       => $formData['billing_info_country'],
                    'postal_code'   => $formData['billing_info_postal_code'],
                    'amount'        => $formData['amount'],
                    'category'      => ucfirst($formData['category']),
                    'donation_type' => $formData['donation_type'],
                    'status'        => 1,
                    'ip_address'    => $request->ip(),
                    'mac_address'   => substr(exec('getmac'), 0, 17),   // ⚠ may not work on Linux servers
                    'device'        => $request->header('User-Agent'),
                ];
                
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
            'donation_category' => $formData['category'] ?? null,
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

        try {
            $mail = new PHPMailer(true);

            // Set up the SMTP connection (adjust SMTP details accordingly)
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            //$mail->Host = 'mail.emailhost.com'; // For example, use your SMTP host here
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME'); // Set your SMTP username from .env file
            $mail->Password = env('MAIL_PASSWORD'); // Set your SMTP password from .env file
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; // Or 465 for SSL

            // Set the sender and recipient details
            $mail->setFrom($request->email, $request->name); // The sender's email and name
            $mail->addAddress(env('MAIL_OWNER')); // Set the recipient email (Owner's email)
            //$mail->addAddress('makarandapathirana@gmail.com'); // Set the recipient email (Owner's email)

            // Set email subject and body content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Message: ' . $request->subject;
            $mail->Body = view('templates.email.donation_message', [
                'data' => $contactData,
                'settings' => $settings,
            ])->render(); // Passing the data to the view

            // Send the email
            $mail->send();

            // ==== EMAIL TO USER (Thank You) ====
            $mailUser = new PHPMailer(true);
            $mailUser->isSMTP();
            $mailUser->Host = env('MAIL_HOST');
            $mailUser->SMTPAuth = true;
            $mailUser->Username = env('MAIL_USERNAME');
            $mailUser->Password = env('MAIL_PASSWORD');
            $mailUser->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mailUser->Port = 587;

            $mailUser->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME', 'Support Team'));
            $mailUser->addAddress($request->email, $request->name);

            $mailUser->isHTML(true);
            $mailUser->Subject = 'Thank you for donating us!';
            $mailUser->Body = view('templates.email.donation_message_user', [
                'data' => $contactData,
                'settings' => $settings,
            ])->render();

            $mailUser->send();

        } catch (Exception $e) {
            // If something goes wrong with the email, log the error
            Log::error('Email could not be sent. Mailer Error: ' . $mail->ErrorInfo);
        }

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
            'donation_category' => $formData['category'] ?? null,
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

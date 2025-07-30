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

class DonationController extends Controller
{
    public function createStripeSession(Request $request)
    {
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
                'success_url' => url('/payment-success'),
                'cancel_url' => url('/payment-cancel'),
            ]);

            return response()->json(['id' => $session->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

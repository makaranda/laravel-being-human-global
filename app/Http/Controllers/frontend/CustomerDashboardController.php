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
use App\Models\User;
use App\Models\Color;
use App\Models\ProgramCategory;
use App\Models\ProgramSubCategory;
use App\Models\ProgramSubCategoryItem;
use App\Models\Partner;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Link;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
//use App\Observers\VisitorCountObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        VisitorHelper::updateVisitorCount();
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('frontend.userlogin')->with('error', 'You must be logged in to access this page.');
        }
        $main_slider = MainSlider::where('status',1)->get(); // Assuming there's only one main slider
        $music_tracks = MusicTrack::where('status', 1)->where('type','audio')->orderBy('order', 'asc')->orderBy('created_at', 'desc')->take(7)->get();
        $banner_music_tracks = MusicTrack::where('status', 1)->where('type','audio')->where('order',0)->first();
        $music_beats = MusicTrack::where('status', 1)->where('type','beat')->orderBy('order', 'asc')->orderBy('created_at', 'desc')->take(7)->get();
        $video_tracks = MusicTrack::where('status', 1)->where('type','video')->orderBy('order', 'asc')->orderBy('created_at', 'desc')->take(8)->get();
        $about_info = Page::where('slug','LIKE', 'about-us')->where('status', 1)->first(); // Assuming a single about section
        $gallery_home = GalleryHome::where('status', 1)->get();
        $according_home = According::where('status', 1)->where('type', 'home')->orderBy('order','asc')->get();
        $partners_home = Partner::where('status', 1)->orderBy('order','asc')->get();
        $home_sec_video = Page::where('status',1)->where('id',34)->first();
        $random_products = Product::where('status', 1)->inRandomOrder()->take(6)->get();
        $random_blogs = Blog::where('status', 1)->inRandomOrder()->take(3)->get();

        $pending_orders = Order::where('user_id', $user->id)->where('confirmation',1)->where('status', 'pending')->latest()->get();
        $cancel_orders = Order::where('user_id', $user->id)->where('confirmation',1)->where('status', 'cancelled')->latest()->get();
        $complete_orders = Order::where('user_id', $user->id)->where('confirmation',1)->where('status', 'completed')->latest()->get();

        //$admin = Auth::guard('admin')->user();
        //dd($admin);
        // if (!empty($admin->role) && $admin->role > 0) {
        //     return redirect()->route('admin.dashboard');
        // } else {
            return view('pages.frontend.customerdashboard.index',compact('gallery_home','home_sec_video','music_tracks','banner_music_tracks','video_tracks','music_beats','about_info','main_slider','according_home','partners_home','random_products','random_blogs','pending_orders','cancel_orders','complete_orders'));
        //}
    }

     public function userProfileUpdate(Request $request, $user_id){
        //VisitorHelper::updateVisitorCount();

        if (!Auth::check()) {
            return redirect()->route('frontend.userlogin')->with('error', 'You must be logged in to access this page.');
        }
        //dd($user_id);
        $user = User::where('status',1)->where('id',$user_id)->first();

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:20',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'password' => 'nullable|string|min:6',
            'confirm_password' => 'nullable|string|same:password',
        ]);

        //dd($request->all());
        // Update fields
        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->phone = $request->phone_number;
        $user->username = $request->username;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $cart = [];
        return redirect()->back()->with('success', 'Profile updated successfully.');
        //return view('pages.frontend.customerdashboard.index', compact('cart'));
        //return redirect()->route('customer.dashboard')->with('success', 'Profile updated successfully.');

    }
}

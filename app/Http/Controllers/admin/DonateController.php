<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Size;
use App\Models\Color;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\DB;
use App\Models\Gallery;
use App\Models\GalleryItem;
use App\Models\Order;
use App\Models\Donation;
use App\Models\OrderItems;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DonateController extends Controller
{

    public function index()
    {

        $donations = Donation::all();
        // $orders = Order::where('confirmation', 1)->get();
        // $products = Product::where('status', 1)->get();
        // $brands = Brand::where('status', 1)->get();
        // $categories = Category::where('status', 1)->get();
        // $subCategories = SubCategory::where('status', 1)->get();
        // $sizes = Size::where('status', 1)->get();
        // $colors = Color::where('status', 1)->get();
        // $productGalleries = ProductGallery::where('status', 1)->get();
        //dd($products);
        return view('pages.dashboard.donations.index', compact('donations'));
    }
}

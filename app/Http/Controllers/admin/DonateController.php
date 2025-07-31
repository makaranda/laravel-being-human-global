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
use Maatwebsite\Excel\Facades\Excel;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Illuminate\Support\Facades\Response;

//use Excel; // Facade from maatwebsite/excel v1.x


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

    public function delete($id)
    {
        // Find the page by ID or fail if not found
        $page = Donation::findOrFail($id);
        if (!$page) {
            return redirect()->route('admin.donations')->with('error', 'Donation not found.');
        }
        // Update the page status to 0 (inactive) instead of deleting it
        $page->status = 0;
        $page->save();

        // Redirect with success message
        return redirect()->route('admin.donations')->with('success', 'Donation status updated to inactive');

    }

    public function export(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');
        $day = $request->input('day');

        $query = Donation::query();

        if ($year) {
            $query->whereRaw('YEAR(created_at) = ?', [$year]);
        }
        if ($month) {
            $query->whereRaw('MONTH(created_at) = ?', [$month]);
        }
        if ($day) {
            $query->whereRaw('DAY(created_at) = ?', [$day]);
        }

        $donations = $query->get([
            'id',
            'payment_type',
            'amount',
            'cover_fee',
            'title',
            'first_name',
            'last_name',
            'email',
            'mobile',
            'on_behalf',
            'country',
            'address1',
            'address2',
            'city',
            'province',
            'postal_code',
            'status',
            'confirmation',
            'created_at',
            'updated_at'
        ]);

        // Prepare array for export
        // $data = [];

        // Add headers
        // $data[] = [
        //     'ID',
        //     'Payment Type',
        //     'Amount',
        //     'Cover Fee',
        //     'Title',
        //     'First Name',
        //     'Last Name',
        //     'Email',
        //     'Mobile',
        //     'On Behalf',
        //     'Country',
        //     'Address 1',
        //     'Address 2',
        //     'City',
        //     'Province',
        //     'Postal Code',
        //     'Status',
        //     'Confirmation',
        //     'Created At',
        //     'Updated At'
        // ];

        // // Add data rows
        // foreach ($donations as $donation) {
        //     $data[] = [
        //         $donation->id,
        //         $donation->payment_type,
        //         $donation->amount,
        //         $donation->cover_fee,
        //         $donation->title,
        //         $donation->first_name,
        //         $donation->last_name,
        //         $donation->email,
        //         $donation->mobile,
        //         $donation->on_behalf,
        //         $donation->country,
        //         $donation->address1,
        //         $donation->address2,
        //         $donation->city,
        //         $donation->province,
        //         $donation->postal_code,
        //         $donation->status,
        //         $donation->confirmation,
        //         $donation->created_at,
        //         $donation->updated_at,
        //     ];
        // }

        // // Export using old Laravel Excel syntax
        // return Excel::create('donations_report_' . date('Ymd_His'), function ($excel) use ($data) {
        //     $excel->sheet('Donations', function ($sheet) use ($data) {
        //         $sheet->fromArray($data, null, 'A1', false, false);
        //     });
        // })->download('xlsx'); // or 'xls'


        $fileName = 'donations_report.xlsx';
        $path = public_path("assets/exports/{$fileName}");

        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0777, true);
        }

        SimpleExcelWriter::create($path)
            ->addRows($donations->toArray());

        return response()->download($path)->deleteFileAfterSend(false);
    }

}

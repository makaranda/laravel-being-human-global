<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Donation;
use App\Models\VisitorsCount;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        //echo 'Admin';
        $admin = Auth::user();
        $visitor_counts = VisitorsCount::count() ?? 0;
        $donator_counts = Donation::where('status', 1)->count() ?? 0;
        $donation_amount = Donation::where('status', 1)->sum('amount') ?? 0;
        $cancel_donation_counts = Donation::where('confirmation', 0)->count() ?? 0;

        //$admin = Auth::guard('admin')->user();
        // dd($admin);
        // Redirect to login if user is not an admin
        if (empty($admin) || $admin->role !== 'admin') {
            return redirect()->route('admin.login');
        }

        // Load the admin dashboard view
        return view('pages.dashboard.home.index', compact('visitor_counts', 'donator_counts', 'donation_amount', 'cancel_donation_counts'));
    }

    public function donationChartData(Request $request)
    {
        // Date Wise Chart
        // $donationData = DB::table('donations')
        //     ->selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, SUM(amount) as total")
        //     ->where('status', 1)
        //     ->groupBy('month')
        //     ->orderBy('month', 'ASC')
        //     ->get();

        // $months = [];
        // $totals = [];

        // foreach ($donationData as $data) {
        //     $months[] = Carbon::createFromFormat('Y-m', $data->month)->startOfMonth()->toDateString();
        //     $totals[] = (float) $data->total;
        // }

        // return response()->json([
        //     'months' => $months,
        //     'totals' => $totals,
        // ]);

        // Month Wise Chart
        $start = $request->query('start');
        $end = $request->query('end');

        $query = DB::table('donations')
            ->selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, SUM(amount) as total")
            ->where('status', 1);

        // Apply date range if provided
        if ($start && $end) {
            $query->whereBetween('created_at', [
                Carbon::parse($start)->startOfMonth(),
                Carbon::parse($end)->endOfMonth()
            ]);
        }

        $donationData = $query
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->get();

        $months = [];
        $totals = [];

        foreach ($donationData as $data) {
            $months[] = Carbon::createFromFormat('Y-m', $data->month)->startOfMonth()->toDateString();
            $totals[] = (float) $data->total;
        }

        return response()->json([
            'months' => $months,
            'totals' => $totals,
        ]);
    }
}

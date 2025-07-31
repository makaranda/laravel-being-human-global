<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class DonatorsController extends Controller
{
    public function index()
    {
        $users = Donation::where('status', 1)->get();  // Fetch all donators
        return view('pages.dashboard.donators.index', compact('users'));  // Return the donators list view
    }

    public function delete($id)
    {
        $user = Donation::where('id', $id)->where('status', 1)->first();  // Find the user by ID
        if (!$user) {
            return redirect()->route('admin.donators')->with('error', 'Donators is not defined.');
        } // Find the user by ID
        $user->delete();  // Delete the user

        return redirect()->route('admin.donators')->with('success', 'Donator deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Testimonial::where('status', 1)->get();
        return view('pages.dashboard.testimonials.index', compact('pages'));
    }

    // Show create form
    public function create()
    {
        $pages = Testimonial::where('type', 'page')->where('status', 1)->get();
        return view('pages.dashboard.testimonials.create', compact('pages'));
    }

    // Store new page
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'sub_description' => 'nullable|string',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        // Generate slug from the title
        $slug = Str::slug($request->title);

        // Check if the slug exists, if so, add a number to make it unique
        $slugCount = \App\Models\Testimonial::where('slug', $slug)->count();
        if ($slugCount > 0) {
            $slug = $slug . ($slugCount + 1); // append number to make it unique
        }

        // Create a new Page instance
        $page = new \App\Models\Testimonial();
        $page->title = $request->title;
        $page->description = $request->description;
        $page->sub_description = $request->sub_description;
        $page->order = $request->order;
        $page->type = $request->type;
        $page->author_id = auth()->user()->id; // Assuming you want to set the author ID to the currently authenticated user
        $page->status = ($request->has('switch_publish') && $request->switch_publish == 'on') ? 1 : 0;

        // Handle file upload for feature image
        if ($request->hasFile('file_input') && $request->file('file_input')->isValid()) {
            // Log the upload process
            \Log::info('Feature image is being uploaded');

            $filePath = 'assets/uploads/testimonials/';
            $file_input = $request->file('file_input');
            $filename = 'feature_img_' . $slug . '_' . time() . '.' . $file_input->getClientOriginalExtension();

            if ($file_input->move(public_path($filePath), $filename)) {
                $page->feature_image = $filename;
            } else {
                $page->feature_image = '';
                //return redirect()->route('admin.testimonials')->with('error', 'Sorry, there was an error uploading your file.');
            }
        } else {
            \Log::error('Feature image upload failed');
        }


        // Save the new page to the database
        $page->save();

        //$this->addDynamicRoute($slug);

        // Redirect or return response
        return redirect()->route('admin.testimonials')->with('success', 'Testimonial created successfully');
    }

    // private function addDynamicRoute($slug)
    // {
    //     // Add the dynamic route for the page
    //     Route::get('page/' . $slug, [HomeController::class, 'dynamicPage'])->name('frontend.' . $slug);
    // }

    // Show edit form
    public function edit($id)
    {

        $page = Testimonial::findOrFail($id);
        $pages = Testimonial::where('type', 'page')->where('status', 1)->get();
        return view('pages.dashboard.testimonials.edit', compact('page', 'pages'));
    }

    // Update page
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_description' => 'nullable|string', // Make sure to update this to 'short_description'
            'description' => 'nullable|string',
            'order' => 'nullable|integer',
            'status' => 'nullable|boolean',
            'file_input' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust file input validation
        ]);

        // Find the page by ID
        $page = \App\Models\Testimonial::findOrFail($id);

        // Check if the title has changed, and regenerate the slug if necessary
        $newSlug = Str::slug($request->title);
        // Update page data
        $page->title = $request->title;
        $page->sub_description = $request->sub_description; // Updated to match the input field
        $page->description = $request->description;
        $page->order = $request->order;
        $page->type = $request->type;
        $page->author_id = auth()->user()->id;
        $page->status = $request->has('switch_publish') && $request->switch_publish == 'on' ? 1 : 0;

        // Handle file upload for feature image if provided
        //dd($request->file_input);
        if ($request->hasFile('file_input')) {
            $filePath = 'public/assets/uploads/testimonials/';
            if ($page->feature_image) {
                $existingImagePath = $filePath . $page->feature_image;
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath); // Delete the old image
                }
            }
            $filePath = 'assets/uploads/testimonials/';
            $file_input = $request->file('file_input');
            $filename = $newSlug . '_' . time() . '.' . $file_input->getClientOriginalExtension();

            //dd($request->file_input);
            // Ensure the file is uploaded
            if ($file_input->move(public_path($filePath), $filename)) {
                $page->feature_image = $filename;
            } else {
                $page->feature_image = '';
                return redirect()->route('admin.testimonials')->with('error', 'Sorry, there was an error uploading your file.');
            }
        }


        // Save the updated page
        $page->save();

        // Redirect or return response
        return redirect()->route('admin.testimonials')->with('success', 'Testimonial updated successfully');
    }


    // Delete page
    public function delete($id)
    {
        // Find the page by ID or fail if not found
        $page = Testimonial::findOrFail($id);
        if (!$page) {
            return redirect()->route('admin.testimonials')->with('error', 'Testimonial not found.');
        }

        // If the page has a feature image, delete it from storage

        // if ($page->feature_image) {
        //     Storage::delete('public/assets/uploads/pages/' . $page->feature_image);
        // }
        if (!empty($page->feature_image) && Storage::exists('public/assets/uploads/testimonials/' . $page->feature_image)) {
            Storage::delete('public/assets/uploads/testimonials/' . $page->feature_image);
        }
        // Update the page status to 0 (inactive) instead of deleting it
        $page->status = 0;
        $page->save();

        // Redirect with success message
        return redirect()->route('admin.testimonials')->with('success', 'Testimonial status updated to inactive');

    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    public function index()
    {
        $pages = Page::where('status', 1)->get();

        $page = Page::where('status', 1)->where('slug', 'LIKE', '%home%')->first();

        $sections = $page->attributes; // Already cast as array

        return view('pages.dashboard.homepage.edit', compact('pages', 'sections', 'page'));
    }

    // Update settings
    public function update(Request $request, $id)
    {
        // if (!$request->isMethod('put')) {
        //     return back()->with('error', 'Invalid request method.');
        // }
        //dd($request);
        $page = Page::findOrFail($id);
        $sections = [];

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'seo_keywords' => 'nullable|string',
            'seo_description' => 'nullable|string',
        ]);

        $sectionsInput = $request->input('sections', []);
        $oldImages = $request->input('old_sections', []);

        $setting = Page::first(); // Assuming only one settings record exists
        if (!$setting) {
            $setting = new Page();
        }

        // $uploadPath = public_path('assets/uploads/images/'); // Define custom upload path

        // if (!file_exists($uploadPath)) {
        //     mkdir($uploadPath, 0777, true); // Create the directory if it doesn't exist
        // }

        foreach ($sectionsInput as $name => &$section) {
            if ($request->hasFile('file_input')) {
                $filePath = 'public/assets/frontend/images/resource/';
                if ($setting->main_logo) {
                    $existingImagePath = $filePath . $setting->main_logo;
                    if (file_exists($existingImagePath)) {
                        unlink($existingImagePath); // Delete the old image
                    }
                }
                $filePath = 'assets/frontend/images/resource//';
                $file_input = $request->file('file_input');
                $filename = 'home_page_' . time() . '.' . $file_input->getClientOriginalExtension();

                //dd($request->file_input);
                // Ensure the file is uploaded
                if ($file_input->move(public_path($filePath), $filename)) {
                    $section['image'] = $filename;
                } else {
                    $section['image'] = $setting->main_logo ?? '';
                    //return redirect()->route('admin.pages')->with('error', 'Sorry, there was an error uploading your file.');
                }
            } elseif (isset($oldImages[$name]['image'])) {
                $section['image'] = $oldImages[$name]['image'];
            } else {
                $section['image'] = '';
            }
        }

        $page->title = $validated['title'];
        $page->attributes = json_encode(
            collect($sectionsInput)->map(fn($data, $name) => ['name' => $name, 'data' => $data])->values()
        );
        $page->seo_keywords = $validated['seo_keywords'] ?? null;
        $page->seo_description = $validated['seo_description'] ?? null;
        //$page->status = $request->has('switch_publish') ? 1 : 0;

        $page->save();

        return redirect()->back()->with('success', 'Homepage updated successfully.');
    }
}

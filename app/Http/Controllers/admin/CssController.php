<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CssController extends Controller
{
    public function editCssStyle()
    {
        $path = public_path('assets/css/mystyle.css');
        $cssContent = File::exists($path) ? File::get($path) : '';
        return view('pages.dashboard.editor.editstyle', compact('cssContent'));
    }

    public function editCssResponsiveStyle()
    {
        $path = public_path('assets/css/myresponsive.css');
        $cssContent = File::exists($path) ? File::get($path) : '';
        return view('pages.dashboard.editor.editresponsive', compact('cssContent'));
    }

    public function updateCssStyle(Request $request)
    {
        $request->validate([
            'css_content' => 'required|string'
        ]);

        $path = public_path('assets/css/mystyle.css');
        file_put_contents($path, $request->css_content);

        return redirect()->back()->with('success', 'Style CSS file updated successfully!');
    }

    public function updateCssResponsiveStyle(Request $request)
    {
        $request->validate([
            'css_content' => 'required|string'
        ]);

        $path = public_path('assets/css/myresponsive.css');
        file_put_contents($path, $request->css_content);

        return redirect()->back()->with('success', 'Responsive CSS file updated successfully!');
    }
}

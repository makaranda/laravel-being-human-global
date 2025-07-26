<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        dd($request->all());
        if ($request->hasFile('upload')) {
            $uploadPath = 'assets/uploads/pages/';
            $file = $request->file('upload');
            $filename = 'ckgallery_' . time() . '.' . $file->getClientOriginalExtension();

            if ($file->move(public_path($uploadPath), $filename)) {

                $uploadPath = 'public/assets/uploads/pages/';
                $url = asset($uploadPath . $filename);
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');

                return response("<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', 'Image uploaded successfully');</script>");
            }
        }

        return response("<script>window.parent.CKEDITOR.tools.callFunction(1, '', 'Image upload failed.');</script>");
    }
}

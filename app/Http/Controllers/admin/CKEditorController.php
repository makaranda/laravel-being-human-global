<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CKEditorController extends Controller
{

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = 'ck_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/uploads/pages/'), $filename);

            $url = asset('public/assets/uploads/pages/' . $filename); // Full image URL
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            return response()->make(
                "<script>
                window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url');
                window.parent.Swal.fire({
                    position: 'bottom-end',
                    icon: 'success',
                    title: 'Your image has been uploaded!',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>",
                200,
                ['Content-Type' => 'text/html; charset=utf-8']
            );
        }

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        return response()->make(
            "<script>
            window.parent.Swal.fire({
                position: 'bottom-end',
                icon: 'error',
                title: 'Image upload failed!',
                showConfirmButton: false,
                timer: 1500
            });
        </script>",
            200,
            ['Content-Type' => 'text/html; charset=utf-8']
        );
    }
}

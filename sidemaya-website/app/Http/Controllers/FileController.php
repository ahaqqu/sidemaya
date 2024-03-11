<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function showForm()
    {
        return view('upload_form');
    }

    public function uploadFile(Request $request)
    {
        // Logika untuk mengelola upload file
        // Misalnya, simpan file di folder 'storage' dan catat nama file di database

        return redirect('/upload')->with('success', 'File berhasil diupload!');
    }
}

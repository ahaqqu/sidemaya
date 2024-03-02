<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class DownloadController extends Controller
{
    public function download($directory, $filename)
    {
        $file = Storage::disk('public')->path("files/${directory}/{$filename}");

        if (file_exists($file)) {
            return response()->download($file, $filename);
        } else {
            abort(404);
        }
    }
}
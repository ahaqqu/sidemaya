<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class DocumentController extends Controller
{
    public function download($directory, $type, $filename)
    {
        $file = Storage::disk('private')->path("files/${directory}/${type}/${filename}");

        if (file_exists($file)) {
            return response()->download($file, $filename);
        } else {
            abort(404);
        }
    }
}

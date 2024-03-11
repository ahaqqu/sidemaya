<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DownloadProcessController extends Controller
{
    public function download($uuid)
    {
        $documents = DB::table('documents')->where('uuid', '=', $uuid)->distinct()->get()->toArray();
        $document = reset($documents);
        $file = Storage::disk('private')->path("files/process/$document->category/$document->filename");

        if (file_exists($file)) {
            $downloadFilename = str_replace($uuid, $document->category, $document->filename);

            return response()->download($file, $downloadFilename);
        } else {
            abort(404);
        }
    }
}

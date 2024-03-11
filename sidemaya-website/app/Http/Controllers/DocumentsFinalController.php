<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DocumentsFinalController extends Controller
{
    public function download($uuid)
    {
        $documents = DB::table('documents')->where('uuid', '=', $uuid)->distinct()->get()->toArray();
        $document = reset($documents);
        $file = Storage::disk('private')->path("files/final/$document->category/$document->filename");

        if (file_exists($file)) {
            $downloadFilename = str_replace($uuid, $document->category, $document->filename);

            return response()->download($file, $downloadFilename);
        } else {
            abort(404);
        }
    }

    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'nomorsurat' => 'required|string',
        ]);

        // Process the uploaded file
        $file = $request->file('file');
        if ($file->isValid()) {
            $nomorsurat = $request->input('nomorsurat');
            $uuid = $request->input('uuid');

            $documents = DB::table('documents')->where('uuid', '=', $uuid)->distinct()->get()->toArray();
            $document = reset($documents);

            $originalname = $file->getClientOriginalName();
            $extension = substr($originalname, strrpos($originalname, '.')+1);
            $fileName = $uuid . "." . $extension;
            $category = $document->category;
            $file->storeAs("files/final/${category}", $fileName, 'private');

            DB::table('documents')->update($document);

//            $type = str_replace('-', ' ', $doctype);

            return redirect()->back()->with('success', "Dokumen sukses diunggah.");
        } else {
            return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen: doc, docx, dan pdf');
        }
    }
}

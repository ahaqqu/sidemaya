<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AjukanSuratController extends Controller
{

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

            $document = Document::where('uuid', '=', $uuid)->firstOrFail();

            $originalname = $file->getClientOriginalName();
            $extension = substr($originalname, strrpos($originalname, '.')+1);
            $fileName = $uuid . "." . $extension;
            $category = $document->category;
            $file->storeAs("files/final", $fileName, 'private');

            $document->identifier = $nomorsurat;
            $document->status = "Selesai";
            $document->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $document->updated_by = Auth::user()->id;
            $document->update();

            return redirect()->back()->with('success', "Dokumen sukses diunggah.");
        } else {
            return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen: doc, docx, dan pdf');
        }

    }
}

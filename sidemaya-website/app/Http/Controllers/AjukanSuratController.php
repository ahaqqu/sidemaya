<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjukanSuratController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'nomorsurat' => 'required|string',
            'uuid' => 'required|string', // Tambahkan validasi untuk uuid
        ]);

        // Process the uploaded file
        $file = $request->file('file');

        if ($file->isValid()) {
            $nomorsurat = $request->input('nomorsurat');
            $uuid = $request->input('uuid');

            // Validate UUID and retrieve the document
            $document = Document::where('uuid', '=', $uuid)->firstOrFail();

            $originalname = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileName = $uuid . "." . $extension;

            // Store the file
            $file->storeAs("files/final", $fileName, 'private');

            // Update the document
            $document->identifier = $nomorsurat;
            $document->status = "Selesai";
            $document->updated_at = Carbon::now();
            $document->updated_by = Auth::user()->id;
            $document->save();

            return redirect()->back()->with('success', "Dokumen sukses diunggah.");
        } else {
            return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen: doc, docx, dan pdf');
        }
    }
}

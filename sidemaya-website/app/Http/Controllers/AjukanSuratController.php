<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AjukanSuratController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'nomorsurat' => 'required|string',
            'uuid' => 'required|string',
        ]);

        // Process the uploaded file
        $file = $request->file('file');

        if ($file->isValid()) {
            $nomorsurat = $request->input('nomorsurat');
            $uuid = $request->input('uuid');

            // Retrieve the document
            $document = Document::where('uuid', '=', $uuid)->firstOrFail();

            // Set the destination storage path based on category and filename
            $storagePath = "files/process/{$document->category}/{$document->filename}";

            // Store the file in the private storage disk
            $file->storeAs($storagePath, $file->getClientOriginalName(), 'private');

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

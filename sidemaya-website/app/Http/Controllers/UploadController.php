<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'description' => 'nullable|string',
        ]);

        // Process the uploaded file
        if ($request->file('file')->isValid()) {
            $description = $request->input('description');
            $type = $request->input('type');
            $doctype = $request->input('doctype');

            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs("files/${type}/${doctype}", $fileName, 'private');

            // Optionally, you can save file details to the database here
            // For example, you can save the file name, path, user ID, etc.

            $type = str_replace('-', ' ', $doctype);

            return redirect()->back()->with('success', "Dokumen ${type} sukses diunggah.");
        } else {
            return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen: doc, docx, dan pdf');
        }
    }
}

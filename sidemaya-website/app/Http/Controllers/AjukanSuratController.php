<?php
namespace App\Http\Controllers;

use App\Models\Document;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class AjukanSuratController extends Controller
{
    public function ajukansurat()
    {
        return view('ajukansurat');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'category' => 'required',
        ]);

        $file=$request->file('file');

        if ($file->isValid()){
            $category = $request->input('category');

            $uuid = Str::uuid()->toString();
            $filename= $uuid.'.'.$file->getClientOriginalExtension();

            $file->storeAs("files/proses/{$category}", $filename, 'private');

            $document = new Document();
            $document->uuid = $uuid;
            $document->category = $category;
            $document->identifier = "";
            $document->version = "1";
            $document->status = "Proses";
            $document->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $document->updated_by = Auth::user()->id;
            $document->created_at = Carbon::now()->toDateTimeString();
            $document->created_by = Auth::user()->id;
            $document->filename = $filename;
            $document->save();

            return redirect()->back()->with('success', "Dokumen sukses diunggah.");
        } else {
            return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen: doc, docx, dan pdf');
        }
    }
}

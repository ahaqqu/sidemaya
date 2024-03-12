<?php
namespace App\Http\Controllers;

use App\Models\Document;
//use App\Models\DokumenWarga;
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
            'file' => 'required|mimes:pdf|max:10240',
            'category' => 'required',
            'nomorsurat' => 'required|string',
        ]);


        $file=$request->file('file');

        if ($file->isValid()){
            $document = new Document();
            $document->category=$request->category;
            $category=$request->select('category');
            $nomorsurat = $request->input('nomorsurat');
            $uuid = Str::uuid()->toString();
            $filename= $uuid.'.'.$file->getClientOriginalExtension();

            $file->storeAs("files/final/{$category}", $filename, 'private');

            $document->identifier = $nomorsurat;
            $document->status = "Proses";
            $document->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $document->updated_by = Auth::user()->id;
            $document->save();

        return redirect()->back()->with('success', "Dokumen sukses diunggah.");
    } else {
            return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen hanya pdf');
        }
    }
}

       //$request->file->move('asset',$filename);

       //$data->file=$filename;

       //$data->file=$request->file;
       //$data->category=$request->category;

       //$data->save();



    //} else {
      //  return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen: doc, docx, dan pdf');

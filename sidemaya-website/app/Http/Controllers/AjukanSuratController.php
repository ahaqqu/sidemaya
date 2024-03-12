<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DokumenWarga;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AjukanSuratController extends Controller
{
    public function ajukansurat()
    {
        return view('ajukansurat');
    }


    public function surat(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:10240',
            'category' => 'required',
            // Sesuaikan dengan jenis file yang diizinkan dan batas ukuran file
        ]);

        $data=new DokumenWarga();
        $file = $request->file;
        $originalname=$file->getClientOriginalName();
        $extension=substr($originalname, strrpos($originalname, '.')+1);
        $filename= $originalname.'.'.$extension;

       //$request->file->move('asset',$filename);
       $file->storeAs('dokumenwarga',$filename);
       $data->file=$filename;

       $data->file=$request->file;
       $data->category=$request->category;

       $data->save();
       return redirect()->back();

    }

    public function show()
    {
        $data=DokumenWarga::all();
        return view('listsurat',compact('data'));
    }

   // if ($file && $file instanceof \Illuminate\Http\UploadedFile) {
     //   $extension = $file->getClientOriginalExtension();
       // Lanjutkan dengan logika Anda
       // $file->move('storage/app/files/dokumenwarga', $extension);
        //return redirect()->back()->with('success', "Dokumen sukses diunggah.");
   // } else {
     //   return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen: doc, docx, dan pdf');
    //}

}



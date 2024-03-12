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
    public function surat(Request $Request)
    {
        $Request->validate([
            'filename' => 'required|mimes:pdf|max:10240',
            'category' => 'required',
            // Sesuaikan dengan jenis file yang diizinkan dan batas ukuran file
        ]);

        $file = $Request->file('filename');

        // Pastikan file ada dan merupakan instance dari UploadedFile
       // if ($file && $file instanceof \Illuminate\Http\UploadedFile) {
         //   $extension = $file->getClientOriginalExtension();
            // Lanjutkan dengan logika Anda
           // $file->move('storage/app/dokumenwarga', $extension);
        //} else {
        //}

        $data=new DokumenWarga();
       $file=$Request->file('filename');
       $filenames=time().''.$file->getClientOriginalExtension();
       $Request->file->move('storage/app/dokumenwarga',$filenames);

       $data->file=$Request->filename;
       $data->category=$Request->category;
       $data->filenames=$Request->filename;

       $data->save();
       return redirect()->back();


    }

}


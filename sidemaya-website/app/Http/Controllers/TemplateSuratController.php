<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class TemplateSuratController extends Controller
{
    public function view()
    {
        // Get list of files from the storage folder
        $files1 = Storage::disk('public')->files('files/layanan-umum/surat-keterangan-usaha.docx');
        $files2 = Storage::disk('public')->files('files/layanan-umum/surat-keterangan-tidak-mampu.doc');
        $files3 = Storage::disk('public')->files('files/layanan-administrasi/formulir-kartu-keluarga.pdf');
        $files4 = Storage::disk('public')->files('files/layanan-administrasi/formulir-permohonan-ktp.pdf');
        $files5 = Storage::disk('public')->files('files/layanan-administrasi/surat-keterangan-domisili.doc');

        return view('templatesurat.index', compact('files1', 'files2', 'files3', 'files4', 'files5'));
    }

    public function download($folder, $file)
    {
        $path = Storage::disk('public')->path("files/{$folder}/{$file}");

        if (Storage::disk('public')->exists("files/{$folder}/{$file}")) {
            return Storage::disk('public')->download("files/{$folder}/{$file}");
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
    }
}

   /*
    public download($_file)
    {
        $path = public_path().'/files/form-layanan/'.$file.'.pdf'; // Ganti dengan path sesuai dengan lokasi file Anda
        return Response::download($path);
    }
    */



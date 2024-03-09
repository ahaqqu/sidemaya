<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        // Get list of files from the storage folder

        //files/layanan-umum/surat-keterangan-usaha/1709362043_[Alex Purwoto]Surat-Keterangan-Usaha.docx
        $files1 = Storage::disk('private')->files('files/layanan-umum/surat-keterangan-usaha');
        $files2 = Storage::disk('private')->files('files/layanan-umum/surat-keterangan-tidak-mampu');

        $files3 = Storage::disk('private')->files('files/layanan-administrasi/formulir-kartu-keluarga');
        $files4 = Storage::disk('private')->files('files/layanan-administrasi/formulir-permohonan-ktp');
        $files5 = Storage::disk('private')->files('files/layanan-administrasi/surat-keterangan-domisili');

        return view('dashboard.index', compact('files1', 'files2', 'files3', 'files4', 'files5'));
    }
}

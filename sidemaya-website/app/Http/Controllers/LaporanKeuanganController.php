<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\LaporanKeuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LaporanKeuanganController extends Controller
{

    public function view()
    {
        $documents = DB::table('laporan_keuangan')->distinct()->get()->toArray();
        $years = array("2024", "2023");
        $currentmonth = Carbon::now()->month;
        $currentyear = Carbon::now()->year;
        $document = LaporanKeuangan::where(['year' => $currentyear, 'month' => $currentmonth])->first();
        if($document) {
            $defaultuuid = $document->uuid;
        } else {
            $defaultuuid = "NotFound";
        }

        return view('laporankeuangan.index', compact('documents', 'currentmonth', 'currentyear', 'years', 'defaultuuid'));
    }

    public function dokumen($uuid)
    {
        $exists = Storage::disk('public')->exists("files/laporan-keuangan/$uuid.pdf");
        if($exists == false) {
            $file = Storage::disk('public')->path("files/laporan-keuangan/NotFound.pdf");
        } else {
            $file = Storage::disk('public')->path("files/laporan-keuangan/$uuid.pdf");
        }

        return response()->file($file);
    }

    public function periode($year, $month)
    {
        $document = LaporanKeuangan::where(['year' => $year, 'month' => $month])->first();
        if($document) {
            $defaultuuid = $document->uuid;
        } else {
            $defaultuuid = "NotFound";
        }
        $file = Storage::disk('public')->path("files/laporan-keuangan/$defaultuuid.pdf");

        return response()->file($file);
    }

    public function admin()
    {
        $documents = DB::table('laporan_keuangan')->distinct()->get()->toArray();
        $years = array("2024", "2023");
        $currentmonth = Carbon::now()->month;
        $currentyear = Carbon::now()->year;
        $document = LaporanKeuangan::where(['year' => $currentyear, 'month' => $currentmonth])->first();
        if($document) {
            $defaultuuid = $document->uuid;
        } else {
            $defaultuuid = "NotFound";
        }

        return view('laporankeuangan.admin', compact('documents', 'currentmonth', 'currentyear', 'years', 'defaultuuid'));
    }

    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:pdf|max:10240'
        ]);

        // Process the uploaded file
        $file = $request->file('file');

        if ($file->isValid()) {
            $tahun = $request->input('tahun');
            $bulan = $request->input('bulan');

            $document = LaporanKeuangan::where(['year' => $tahun, 'month' => $bulan])->first();
            if(!$document) {
                $document= new LaporanKeuangan();
            }

            $uuid = Str::uuid()->toString();
            $fileName = $uuid . ".pdf";
            $document->uuid = $uuid;
            $document->created_at = Carbon::now()->toDateTimeString();
            $document->created_by = Auth::user()->id;
            $document->filename = $fileName;
            $document->year = $tahun;
            $document->month = $bulan;
            $document->save();

            $file->storeAs("files/laporan-keuangan", $fileName, 'public');

            $options = array( 'Januari', 'Februari', 'Maret',
                         'April', 'Mei', 'Juni',
                         'Juli', 'Agustus', 'September',
                         'Oktober', 'November', 'Desember');

            $bulanstring = $options[$bulan-1];
            return redirect()->back()->with('success', "Dokumen laporan keuangan " . $bulanstring . " " . $tahun . " sukses diunggah.");
        } else {
            return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen: pdf');
        }

    }
}

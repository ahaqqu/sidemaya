<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\LaporanKeuangan;

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
}

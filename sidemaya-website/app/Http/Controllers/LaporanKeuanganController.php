<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LaporanKeuanganController extends Controller
{

    public function view()
    {
        $documents = DB::table('laporan_keuangan')->distinct()->get()->toArray();

        return view('laporankeuangan.index', compact('documents'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DaftarSuratController extends Controller
{

    public function view()
    {
        $documents = DB::table('documents')->distinct()->get()->toArray();

        return view('daftarsurat.index', compact('documents'));
    }
}

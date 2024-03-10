<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DaftarSuratController extends Controller
{

    public function view()
    {
        $documents = DB::table('documents')->where('created_by', '=', Auth::user()->id)->distinct()->get()->toArray();

        return view('daftarsurat.index', compact('documents'));
    }
}

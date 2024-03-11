<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DaftarSuratWargaController extends Controller
{

    public function view()
    {
        $documents = DB::table('documents')->distinct()->get()->toArray();

        return view('daftarsuratwarga.index', compact('documents'));
    }
}

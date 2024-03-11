<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProsesSuratController extends Controller
{

    public function view($uuid)
    {
        $documents = DB::table('documents')->where('uuid', '=', $uuid)->distinct()->get()->toArray();
        $document = reset($documents);

        return view('prosessurat.index', compact('document'));
    }
}

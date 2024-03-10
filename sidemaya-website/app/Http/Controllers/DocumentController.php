<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class DocumentController extends Controller
{

    public function table()
    {
        return view('document.index');
    }
}

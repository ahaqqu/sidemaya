<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class TemplateSuratController extends Controller
{

    public function view()
    {
        return view('templatesurat.index');
    }
}

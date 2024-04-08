<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class tentangkamicontroller extends Controller
{
    public function view()
    {
        return view('tentangkami.index');
    }
}


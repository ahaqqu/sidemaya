<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KebijakanPrivacyController extends Controller
{
    public function view()
    {

        return view('kebijakanprivacy.index');
    }
}

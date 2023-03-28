<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GesimaController extends Controller
{
    public function serviceaccess()
    {
        return view('Nosservices');
    }
    public function apropos()
    {
return view('apropos');
    }
}

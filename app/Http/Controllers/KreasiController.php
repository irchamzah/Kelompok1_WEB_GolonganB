<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KreasiController extends Controller
{
    //
    public function index()
    {
        return view('kreasi.show');
    }
}

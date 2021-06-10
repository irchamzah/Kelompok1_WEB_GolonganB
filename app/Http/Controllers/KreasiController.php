<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KreasiController extends Controller
{
    //
    public function kreasi()
    {
        return view('kreasi.detail_kreasi');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function layanan()
    {
        return view('layouts.layanan');
    }
}

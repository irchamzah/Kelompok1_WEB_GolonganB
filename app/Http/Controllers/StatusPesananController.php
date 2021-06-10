<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusPesananController extends Controller
{
    //
    public function status_pesanan()
    {
        return view('status.status_pesanan');
    }
}

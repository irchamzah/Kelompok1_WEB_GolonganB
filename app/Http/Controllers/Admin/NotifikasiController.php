<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hashids\Hashids;
use App\Models\Category;
use App\Models\Layanan;

class NotifikasiController extends Controller
{
    //
    public function index(){

        return view('back.notifikasi.manage.index');

    }
}

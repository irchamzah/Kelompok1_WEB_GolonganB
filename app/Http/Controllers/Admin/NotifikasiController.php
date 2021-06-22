<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hashids\Hashids;
use App\Models\Category;
use App\Models\Layanan;
use App\Models\Notifikasi;

class NotifikasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminMiddle');
    }

    public function index()
    {
        $notifikasis = Notifikasi::paginate(20);

        return view('back.notifikasi.manage.index', compact('notifikasis'));

    }

}

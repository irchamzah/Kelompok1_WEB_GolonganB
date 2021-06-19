<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hashids\Hashids;
use App\Models\Category;
use App\Models\Layanan;

class ProfilAdminController extends Controller
{
    //
    public function index(){

        return view('back.profiladmin.manage.index');

    }
}

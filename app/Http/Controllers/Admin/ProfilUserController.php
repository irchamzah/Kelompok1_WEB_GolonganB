<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LayananDetail;
use Auth;

class ProfilUserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('adminMiddle');
    }

    public function index()
    {
        $users = User::paginate(20);

        return view('back.profiluser.manage.index', compact('users'));

    }

    public function detail($id)
    {
        $layanan_details=LayananDetail::where('user_id', $id)->paginate(20);
        $user = User::whereId($id)->first();
        return view('back.profiluser.manage.detail', compact('user', 'layanan_details'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\User;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profil.profil', compact('user'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'password' => 'confirmed',
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->nohp = $request->nohp;
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }

        $user->update();

        return redirect('profil')->with('success', 'Update Profile Sukses!');;
    }
}

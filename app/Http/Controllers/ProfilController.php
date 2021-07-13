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
        // $this->validate($request, [
        //     'password' => 'confirmed',
        // ]);

        $rules=[
            'name'=>'required',
            'foto'=>'required|max:5000|mimes:jpeg,png,jpg',
            'email'=>'required|email',
            'alamat'=>'required',
            'nohp'=>'required',
            'password'=>'confirmed',
        ];

        $message=[
            'name.required'=>' Nama tidak boleh kosong',

            'foto.required'=>' Foto tidak boleh kosong',
            'foto.max'=>' Ukuran File Terlalu Besar',
            'foto.mimes'=>' File Format Harus jpeg,png,jpg',

            'email.required'=>' Email tidak boleh kosong',

            'alamat.required'=>' Alamat Lengkap tidak boleh kosong',

            'nohp.required'=>' No.HP tidak boleh kosong',
        ];
        $this->validate($request,$rules,$message);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->nohp = $request->nohp;
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }
        if(!empty($request->foto))
        {
            if(\File::exists('storage/'.$user->foto))
            {
                \File::delete('storage/'.$user->foto);
            }
            $fileName=time().'.'.$request->foto->extension();
            $request->file('foto')->storeAs('public', $fileName);
            $user->foto = $fileName;
        }
        $user->update();

        return redirect('profil')->with('success', 'Update Profile Sukses!');;
    }
}

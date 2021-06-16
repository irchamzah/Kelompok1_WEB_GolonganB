<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Layanan;


class LayananController extends Controller
{
    public function index()
    {
        $layanans=Layanan::orderBy('id', 'DESC')->paginate(5);
        return view('layanan.manage.index', compact('layanans'));
        //return view('layanan.index');
    }

    public function create()
    {
        $categories=Category::get();
        return view('layanan.manage.create', compact('categories'));        
    }

    public function store(Request $request)
    {
        $layanans=Layanan::create([
            'category_id'=>$request->category,
            'namapj'=>$request->namapj,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,
            'fotosampah'=>$request->fotosampah,
            'tanggaljemput'=>$request->tanggaljemput,
            'statuspesanan'=>$request->statuspesanan,
            'pendapatan'=>$request->pendapatan,
        ]);

        return back()->with('success', 'posting Data Sukses!');

    }

    public function edit($id){
        $categories=Category::get();
        $layanans=Layanan::find($id);
        return view('layanan.manage.edit',compact('categories', 'layanans'));
    } 

    

    public function update(Request $request, $id)
    {
        $layanans=Layanan::whereId($id)->first();
        $layanans->update([
            'category_id'=>$request->category,
            'namapj'=>$request->namapj,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,
            'fotosampah'=>$request->fotosampah,
            'tanggaljemput'=>$request->tanggaljemput,
            'statuspesanan'=>$request->statuspesanan,
            'pendapatan'=>$request->pendapatan,
        ]);

        return back()->with('success', 'Ubah Data Sukses!');
    }

    public function destroy($id)
    {
        Layanan::whereId($id)->delete();
        return back()->with('success', 'Hapus data sukses!');
    }

    public function show($id)
    {
        $layanans=Layanan::whereId($id)->first();
        return view('layanan.show', compact('layanans'));
    }

    

}

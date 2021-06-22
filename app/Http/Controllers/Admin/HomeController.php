<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Hashids\Hashids;
use App\Models\Category;
use App\Models\Layanan;
use App\Models\Admin;
use App\Models\LayananDetail;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('adminMiddle');
    }

    public function index(){
        // $hash = new Hashids();

        $layanan_details=LayananDetail::orderBy('id', 'DESC')->paginate(20);
        return view('back.home', compact('layanan_details'));
    }

    public function konfirmasi($id){
        // $hash = new Hashids();

        $layanan_detail=LayananDetail::find($id);
        return view('back.layanan.manage.edit', compact('layanan_detail'));
    }

    public function pesanan($id)
    {
        $layanan_detail = LayananDetail::whereId($id)->first();

        $layanan_detail->update([
            'status_id' => 2,
        ]);

        return back()->with('success', 'Status Pesanan berhasil Dikonfirmasi!, SEGERA JEMPUT SAMPAHNYA!');

    }


    //ini ketika isi pendapatan
    public function update(Request $request, $id)
    {
        // dd($request);
        $rules=[
            'pendapatan'=>'required',
        ];

        $message=[
            'pendapatan.required'=>' Pendapatan tidak boleh kosong',
        ];
        $this->validate($request,$rules,$message);
        
        $layanan_detail = LayananDetail::whereId($id)->first();

        $layanan_detail->update([
            'status_id' => 3,
            'pendapatan' => $request->pendapatan,
        ]);

        return back()->with('success', 'Input Pendapatan berhasil disimpan!');

    }

    public function destroy($id)
    {
        $layanan_detail = LayananDetail::whereId($id)->first();
        if(\File::exists('storage/'.$layanan_detail->file)){
            \File::delete('storage/'.$layanan_detail->file);
        }
        LayananDetail::whereId($id)->delete();
        return back()->with('success', 'Hapus data sukses!');
    }

    

}

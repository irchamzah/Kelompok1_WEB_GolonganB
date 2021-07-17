<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Layanan;
use App\Models\LayananDetail;
use Illuminate\Support\Facades\Validator;
use DateTime;


class LayananController extends Controller
{

    public function pesan(Request $request, $id)
    {
        //validasi input
        $validasi = Validator::make($request->all(), [
            'category'=>'required|numeric',
            'file'=>'required',
            'tanggaljemput'=>'required|after:tomorrow',
            'keterangan'=>'required',
        ]);
        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        // menyimpan ke tabel layanan
        $layanan = new Layanan;
        $layanan->user_id = $id;
        $layanan->save();

        //menyimpan ke tabel layanan detail
        $id_layanan = Layanan::where('user_id', $id)->first();
        $layanan_detail = new LayananDetail;
        $layanan_detail->layanan_id = $id_layanan->id;
        $layanan_detail->category_id = $request->category;
        $layanan_detail->user_id = $id;
        $layanan_detail->file = $request->file;
        // $layanan_detail->tanggaljemput = $now = new DateTime();
        $layanan_detail->tanggaljemput = $request->tanggaljemput;
        $layanan_detail->keterangan = $request->keterangan;
        $layanan_detail->status_id = 1;
        $layanan_detail->pendapatan = 0;
        $layanan_detail->save();

        // //menyimpan ke tabel layanan detail
        // $id_layanan = Layanan::where('user_id', $id)->first(); //ngambil id layanan
        // $layanan = LayananDetail::create(array_merge($request->all(), [
        //     'layanan_id' => $id_layanan,
        //     'category_id' => $request->category,
        //     'user_id' => $id,
        //     'file'=> $request->file,
        //     // 'tanggaljemput'=> $request->tanggaljemput,
        //     'keterangan'=> $request->keterangan,
        //     'status_id'=> 1,
        //     'pendapatan'=> 0
        // ]));

        //kirim respon ke android
        if($layanan_detail){
            return response()->json([
                'success' => 1,
                'message' => 'Berhasil Memesan!',
                'layanan' => $layanan_detail
            ]);
        }
        return $this->error('Gagal Memesan');
    }


    //function wadah pesan error
    public function error($pesan)
    {
        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
    
}

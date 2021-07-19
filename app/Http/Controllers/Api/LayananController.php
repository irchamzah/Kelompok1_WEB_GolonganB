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
            'category_id'=>'required|numeric',
            'tanggaljemput'=>'required|after:tomorrow',
            'keterangan'=>'required',
            'path'=>'required|file',
        ]);

        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        // menyimpan ke tabel layanan
        $layanan = new Layanan;
        $layanan->user_id = $id;
        $layanan->save();


        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return response()->json(['success' => 0, 'message' => $val[0]]);
        }

        if($request->path->getClientOriginalName()){
            $ext = str_replace('', '', $request->path->getClientOriginalName());
            $file = time().'.'.$request->path->extension();
            $request->path->storeAs('public', $file);
        }else{
            // $file = '';
        }


        $fileName = time().'.'.$request->path->extension();
        $id_layanan = Layanan::where('user_id', $id)->orderBy('id','desc')->first();
        $layanan_id = $id_layanan->id;
        $user_id = $id;
        $status_id = 1;
        $pendapatan = 0;

        $mData = LayananDetail::Create(array_merge($request->all(), [
            'layanan_id' => $layanan_id,
            'user_id' => $user_id,
            'file' => $fileName,
            'status_id' => $status_id,
            'pendapatan' => 0,
        ]));

        //kirim respon ke android
        if($mData){
            return response()->json([
                'success' => 1,
                'message' => 'Berhasil Memesan!',
                'layanan' => $mData
            ]);
        }
        return $this->error('Gagal Memesan');

        // //menyimpan ke tabel layanan detail
        // $id_layanan = Layanan::where('user_id', $id)->first();
        // $layanan_detail = new LayananDetail;
        // $layanan_detail->layanan_id = $id_layanan->id;
        // $layanan_detail->category_id = $request->category;
        // $layanan_detail->user_id = $id;

        // $fileName=time().'.'.'jpg';
        // $layanan_detail->file = $fileName;
        // $layanan_detail->tanggaljemput = $now = new DateTime();
        // $layanan_detail->tanggaljemput = $request->tanggaljemput;
        // $layanan_detail->keterangan = $request->keterangan;
        // $layanan_detail->status_id = 1;
        // $layanan_detail->pendapatan = 0;
        // $layanan_detail->save();

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


    }


    //function wadah pesan error
    public function error($pesan)
    {
        return response()->json([
            'Failed' => 0,
            'message' => $pesan
        ]);
    }
    
}

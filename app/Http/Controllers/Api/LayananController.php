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
            return response()->json(['success' => 0, 'message' => $val[0]]);
        }

        // menyimpan ke tabel layanan
        $layanan = new Layanan;
        $layanan->user_id = $id;
        $layanan->save();



        if($request->path->getClientOriginalName()){
            $ext = str_replace('', '', $request->path->getClientOriginalName());
            $file = date('YmdHs').'.'. $ext;
            $request->path->storeAs('public', $file);
        }else{
            // $file = '';
        }

        $id_layanan = Layanan::where('user_id', $id)->orderBy('id', 'desc')->first();
        $layanan_id = $id_layanan->id;
        $user_id = $id;
        $status_id = 1;
        $pendapatan = 0;

        $mData = LayananDetail::Create(array_merge($request->all(), [
            'layanan_id' => $layanan_id,
            'user_id' => $user_id,
            'file' => $file,
            'status_id' => $status_id,
            'pendapatan' => 0,
        ]));

        //kirim respon ke android
        if($mData){
            return response()->json([
                'success' => 1,
                'message' => 'Berhasil Memesan!',
                // 'layanan' => $mData
            ]);
        }
        return $this->error('Gagal Memesan');
    }

    public function ambildata($id){
        $layanandetails = LayananDetail::with(['user'])->whereHas('user', function ($query) use ($id){
            $query->whereId($id);
        })->where('status_id', 1)->orderBy('id', 'desc')->get();

        return response()->json([
            'success' => 1,
            'message' => 'Get data Pesanan Berhasil',
            'layanans' => collect($layanandetails)
        ]);  

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

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Notifikasi::insert([
            [
                'user_id'=>'1',
                'layanan_detail_id'=>'1',
                'title'=>'ini judul notifikasi pertama',
                'keterangan'=>'ini adalah isi keterangan notifikasi pertama',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],

            [
                'user_id'=>'1',
                'layanan_detail_id'=>'2',
                'title'=>'ini judul notifikasi ke-2',
                'keterangan'=>'ini adalah isi keterangan notifikasi ke-2',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);

    }
}

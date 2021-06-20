<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DaurulangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Daurulang::insert([
            [
                'nama'=>'tutorial membuat tas',
                'foto'=>'ehehe.jpg',
                'keterangan'=>'ini adalah isi keterangan tutorial dan penjelasan penjelasannya',
                'keterangan_detail'=>'ini adalah isi keterangan detail tutorial dan penjelasan penjelasannya ke1',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],

            [
                'nama'=>'tutorial membuat tas 2',
                'foto'=>'ehehehe.jpg',
                'keterangan'=>'ini adalah isi keterangan tutorial dan penjelasan penjelasannya ke 2',
                'keterangan_detail'=>'ini adalah isi keterangan detail tutorial dan penjelasan penjelasannya ke 2',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}

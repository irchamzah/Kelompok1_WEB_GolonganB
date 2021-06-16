<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table="layanans";

    protected $fillable=[
        'category_id',
        'namapj',
        'alamat',
        'notelp',
        'fotosampah',
        'tanggaljemput',
        'statuspesanan',
        'pendapatan',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

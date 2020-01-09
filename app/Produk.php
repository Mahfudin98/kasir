<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'nama_toko', 'stok', 'harga','hargasatuan'
    ];

    public function toko(){
        return $this->belongsTo(Toko::class);
    }
}

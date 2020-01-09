<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{

    public function users(){
        return $this->belongsTo(User::class);
    }

    protected $guarded = [];

    public function produks(){
        return $this->hasMany(Produk::class);
    }
}

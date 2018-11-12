<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_pembayaran extends Model
{
    
    public function pembayaran(){
        return $this->belongsTo('App\pembayaran');
    }

    public function tu(){
        return $this->hasOne('App\tu');
    }

    public function siswa(){
        return $this->hasOne('App\siswa');
    }
}

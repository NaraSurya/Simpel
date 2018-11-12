<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_pembayaran extends Model
{

    public function siswa(){
        return $this->belongsTo('App\siswa');
    }
}

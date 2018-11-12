<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    public function detail_pembayaran(){
        return $this->belongsTo('App\detail_pembayaran');
    }

    public function periode(){
        return $this->hasOne('App\periode');
    }

}

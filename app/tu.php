<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tu extends Model
{
    public function mading(){
        return $this->hasMany('App\mading');
    }

    public function pembayaran()
    {
        return $this->belongsToMany('App\pembayaran', 'detail_pembayarans');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tu extends Model
{
    public function mading(){
        return $this->hasMany('App\mading');
    }

    public function detail_pembayaran(){
        return $this->hasMany('App\detail_pembayaran');
    }
}

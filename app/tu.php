<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tu extends Model
{
    public function mading(){
        return $this->belongsTo('App\mading');
    }

    public function detail_pembayaran(){
        return $this->belongsTo('App\detail_pembayaran');
    }
}

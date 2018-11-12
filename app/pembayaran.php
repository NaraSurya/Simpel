<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    public function detail_pembayaran(){
        return $this->hasMany('App\detail_pembayaran');
    }
}

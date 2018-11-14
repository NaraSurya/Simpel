<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periode extends Model
{
    public function pembayaran(){
        return $this->hasMany('App\pembayaran');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_pembayaran extends Model
{
    
    public function pembayaran(){
        return $this->hasMany('App\pembayaran');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    
    public function periode(){
        return $this->belongsTo('App\periode');
    }

    public function tu()
    {
        return $this->belongsToMany('App\tu', 'detail_pembayarans');
    }
    public function siswa()
    {
        return $this->belongsToMany('App\siswa', 'detail_pembayarans');
    }
    
}

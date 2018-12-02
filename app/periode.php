<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periode extends Model
{
    public function siswa(){
        return $this->belongsToMany('App\siswa','detail_pembayarans' , 'siswa_id' , 'periode');
    }

}

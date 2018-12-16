<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periode extends Model
{

    public function siswa(){
        return $this->belongsToMany('App\siswa','detail_pembayarans' , 'siswa_id' , 'periode');
    }
    
    public function getYear(){
        $periode = $this->tahun_ajaran; 
        $tahun_pertama = str_limit($periode, 4 , $end='');
        return $tahun_pertama;
    }
    
    
    /**
     * Function relathionships
     */
    public function pembayaran(){
        return $this->hasMany('App\pembayaran');

    }

}

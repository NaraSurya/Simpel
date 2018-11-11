<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    public function agama(){
        return $this->belongsTo('App\agama');
    }
    
   public function wali()
   {
       return $this->belongsToMany('App\wali', 'detail_siswa', 'siswa_id', 'wali_id');
   }
}

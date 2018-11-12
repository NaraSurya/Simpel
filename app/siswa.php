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

   public function berkas(){
       return $this->hasMany('App\berkas');
   }
   public function kelas()
   {
       return $this->belongsToMany('App\kelas', 'detail_kelas');
   }

   public function nilai()
   {
       return $this->hasMany('App\Nilai');
   }
   

}

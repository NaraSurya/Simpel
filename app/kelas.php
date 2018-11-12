<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
   public function siswa()
   {
       return $this->belongsToMany('App\siswa', 'detail_kelas');
   }

   public function absensi()
   {
       return $this->hasMany('App\absensi');
   }
   public function jadwal()
   {
       return $this->hasMany('App\jadwal');
   }
   public function jurusan()
   {
       return $this->belongsTo('App\jurusan');
   }
   public function periode()
   {
       return $this->belongsTo('App\periode');
   }
   public function guru()
   {
       return $this->belongsTo('App\Guru');
   }


}

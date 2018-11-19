<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{

    $fillable = ['nama' , 'nis' , 'alamat' , 'no_tlp' , 'jenis_kelamin' , 'tgl_lahir' , 'pict' , 'email' , 'agama_id' ];
    



    public function agama(){
        return $this->belongsTo('App\agama');
    }
    
   public function wali()
   {
       return $this->belongsToMany('App\wali', 'detail_siswas', 'siswa_id', 'wali_id');
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
   
   public function tugas()
   {
       return $this->belongsToMany('App\Tugas', 'jawab__tugas')->withPivot('path' , 'nilai');
   }
   public function komen_tugas()
   {
       return $this->belongsToMany('App\Tugas', 'komen__tugas', 'siswa_id', 'tugas_id')->withPivot('komen');
   }
   
   public function pembayaran()
   {
       return $this->belongsToMany('App\pembayaran', 'detail_pembayarans');
   }

   public function pertanyaan()
   {
       return $this->hasMany('App\pertanyaan');
   }

   public function jawaban()
   {
       return $this->hasMany('App\jawaban');
   }

   public function mading()
   {
       return $this->belongsToMany('App\mading', 'komens');
   }
   
   

}

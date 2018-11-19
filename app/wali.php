<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
   protected $fillable = ['nama'  , 'alamat' , 'no_tlp' , 'jenis_kelamin' , 'tgl_lahir' ,'pict', 'email' , 'agama_id' ];
    
    public function siswa()
    {
        return $this->belongsToMany('App\siswa', 'detail_siswas', 'wali_id', 'siswa_id');
    }
}

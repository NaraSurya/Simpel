<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    public function gambar()
    {
        return $this->hasMany('App\gambar_pertanyaan');
    }

    public function jawaban()
    {
        return $this->hasMany('App\jawaban');
    }

    public function Mapel()
    {
        return $this->belongsTo('App\Mapel');
    }
    
    public function siswa()
    {
        return $this->belongsTo('App\siswa');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }

    public function siswa()
    {
        return $this->belongsTo('App\siswa');
    }

    
}

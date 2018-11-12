<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }

    //aku gak buat tabel ini
    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komen_Tugas extends Model
{
    public function tugas()
    {
        return $this->belongsTo('App\Tugas');
    }

    //aku nggak buat tabel ini
    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

    
    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }
}

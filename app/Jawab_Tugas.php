<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawab_Tugas extends Model
{
    public function tugas()
    {
        return $this->belongsTo('App\Tugas');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }
}

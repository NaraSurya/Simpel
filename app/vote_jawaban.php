<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vote_jawaban extends Model
{
    public function jawaban()
    {
        return $this->belongsTo('App\jawaban');
    }

    public function Guru()
    {
        return $this->belongsTo('App\Guru');
    }

    public function siswa()
    {
        return $this->belongsTo('App\siswa');
    }
}

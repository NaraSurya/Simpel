<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    public function pertanyaan()
    {
        return $this->belongsTo('App\pertanyaan');
    }

    public function vote()
    {
        return $this->hasMany('App\vote_jawaban');
    }

    public function pict()
    {
        return $this->hasMany('App\pict_jawaban');
    }

    public function siswa()
    {
        return $this->belongsTo('App\siswa');
    }

    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }
}

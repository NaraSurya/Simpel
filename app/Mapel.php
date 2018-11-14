<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    public function guru()
    {
        return $this->hasMany('App\Guru');
    }

    public function pertanyaan()
    {
        return $this->hasMany('App\pertanyaan');
    }
}

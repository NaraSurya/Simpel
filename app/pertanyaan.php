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

}

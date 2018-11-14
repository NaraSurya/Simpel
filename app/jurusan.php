<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    public function kelas()
    {
        return $this->hasMany('App\kelas');
    }
}

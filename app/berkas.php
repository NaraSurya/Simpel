<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berkas extends Model
{
    public function siswa()
    {
        return $this->belongsTo('App\siswa');
    }
}

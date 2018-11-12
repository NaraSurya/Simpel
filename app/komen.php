<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komen extends Model
{
    public function mading(){
        return $this->belongsTo('App\mading');
    }

    public function siswa()
    {
        return $this->hasOne('App\siswa');
    }

    public function guru()
    {
        return $this->hasOne('App\guru');
    }
}

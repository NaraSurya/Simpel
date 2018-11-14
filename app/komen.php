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
        return $this->belongsTo('App\siswa');
    }

    public function guru()
    {
        return $this->belongsTo('App\guru');
    }
}

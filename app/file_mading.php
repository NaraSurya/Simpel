<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file_mading extends Model
{
    public function mading(){
        return $this->belongsTo('App\mading');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mading extends Model
{
    public function file_mading(){
        return $this->hasMany('App\file_mading');
    }

    public function komen(){
        return $this->hasMany('App\komen');
    }

    public function tu(){
        return $this->belongsTo('App\tu');
    }
}

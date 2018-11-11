<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agama extends Model
{
    

    public function siswa(){
        return $this->hasMany('App\siswa');
    }
}

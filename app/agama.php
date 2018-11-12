<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agama extends Model
{
    

    public function siswa(){
        return $this->hasMany('App\siswa');
    }

    public function guru()
    {
        return $this->hasMany('App\Guru');
    }

    public function wali()
    {
        return $this->hasMany('App\wali');
    }

    public function tu()
    {
        return $this->hasMany('App\tu');
    }
    
}

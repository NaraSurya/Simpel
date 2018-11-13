<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }

    public function jawab_tugas()
    {
        return $this->hasMany('App\Jawab_Tugas');
    }

    public function komen_tugas()
    {
        return $this->hasMany('App\Komen_Tugas');
    }

    public function siswa()
    {
        return $this->belongsToMany('App\siswa','jawab__tugas')->withPivot('path','nilai');
    }

    
}

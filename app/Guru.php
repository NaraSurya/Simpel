<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    
    //aku gak buat tabel ini
    public function agama()
    {
        return $this->belongsTo('App\Agama');
    }

    public function mapel()
    {
        return $this->belongsTo('App\Mapel');
    }

    public function tugas()
    {
        return $this->hasMany('App\Tugas');
    }

    public function detail_nilai()
    {
        return $this->hasMany('App\Detail_Nilai');
    }

    
    public function komen_tugas()
    {
        return $this->hasMany('App\Komen_Tugas');
    }
}

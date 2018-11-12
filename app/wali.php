<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    public function siswa()
    {
        return $this->belongsToMany('App\siswa', 'detail_siswa', 'siswa_id', 'wali_id');
    }
}

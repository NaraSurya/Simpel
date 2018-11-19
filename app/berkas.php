<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berkas extends Model
{
    protected $fillable =['siswa_id' , 'path' , 'jenis_berkas'];
    public function siswa()
    {
        return $this->belongsTo('App\siswa');
    }
}

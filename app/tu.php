<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tu extends Model
{

    protected $fillable = ['nama' , 'alamat' , 'no_hp' , 'jenis_kelamin' , 'tgl_lahir' , 'email' , 'agama_id' , 'pict' ];

    public function mading(){
        return $this->hasMany('App\mading');
    }

    public function pembayaran()
    {
        return $this->belongsToMany('App\pembayaran', 'detail_pembayarans');
    }

    public function agama(){
        return $this->belongsTo('App\agama');
    }

}

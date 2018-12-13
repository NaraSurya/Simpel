<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_pembayaran extends Model
{

    protected $fillable = ['tu_id' , 'siswa_id' , 'tanggal','periode' ];
    
}

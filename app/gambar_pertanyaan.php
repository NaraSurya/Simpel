<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gambar_pertanyaan extends Model
{
    public function pertanyaan()
    {
        return $this->belongsTo('App\jawaban');
    }
}

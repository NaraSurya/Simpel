<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Nilai extends Model
{
    public function nilai()
    {
        return $this->belongsTo('App\Nilai');
    }
    
    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }
}

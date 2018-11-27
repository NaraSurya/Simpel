<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailTipeNilai extends Model
{
    protected $table = 'detail_tipe_nilais';
    protected $fillable = ['tipe_id', 'guru_id' , 'persentase'];
}

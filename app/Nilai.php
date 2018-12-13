<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tipeNilai;
use App\Guru;

class Nilai extends Model
{
   protected $fillable = ['siswa_id' , 'kelas_id'];

   public function nilai_total(Guru $guru){
        $nilai_total = 0; 
        foreach($guru->tipe_nilai as $tipe){
            $nilai_total += $this->rata_rata_nilai($guru , $tipe)*$tipe->pivot->persentase/100; 
        }
        return $nilai_total;
   }
   public function rata_rata_nilai(Guru $guru , tipeNilai $tipe){
        $rata_rata = 0;
        $count = 0; 
        foreach($this->guru->where('id' , $guru->id) as $nilai){
            if($nilai->pivot->tipe_nilai_id == $tipe->id){
                 $rata_rata += $nilai->pivot->nilai; 
                 $count++;
            }
        }
        return $rata_rata !=0 ? $rata_rata/$count : 0;
   }

   
    
    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

    public function guru()
    {
        return $this->belongsToMany('App\Guru','detail__nilais')->withPivot('nilai' , 'tipe_nilai_id');
    }

    public function detail_nilai(){
        return $this->hasMany('App\Detail_Nilai', 'detail__nilais');
    }

    
}

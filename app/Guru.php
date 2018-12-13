<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama' , 'nip' , 'alamat' , 'no_tlp' , 'jenis_kelamin' , 'tgl_lahir' , 'mapel_id', 'email' , 'agama_id' , 'pict' , 'username' , 'password'];
    
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

    public function jadwal()
    {
        return $this->belongsToMany('App\kelas' , 'jadwals' , 'guru_id' , 'kelas_id')->withPivot('jam_awal' , 'jam_akhir' , 'hari');
    }

    public function kelas()
    {
        return $this->hasMany('App\kelas');
    }

    public function jawaban()
    {
        return $this->hasMany('App\jawaban');
    }

    public function vote_jawaban()
    {
        return $this->hasMany('App\vote_jawaban');
    }

    public function komen()
    {
        return $this->hasMany('App\komen');
    }

    public function nilai()
    {
        return $this->belongsToMany('App\Nilai','detail__nilais')->withPivot('nilai');
    }
    public function tipe_nilai()
    {
        return $this->belongsToMany('App\tipeNilai', 'detail_tipe_nilais', 'guru_id', 'tipe_id')->withPivot('persentase');
    }



}

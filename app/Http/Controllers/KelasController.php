<?php

namespace App\Http\Controllers;

use App\Guru;
use App\detail_kelas;
use App\kelas;
use App\periode;
use App\jurusan;
use App\wali;
use App\siswa; 
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = detail_kelas::all();
        $kelases = kelas::all();
        $periodes = periode::orderBy('id')->take(7)->get()->reverse();
        $tahun_periodes = []; 
        $jumlah_kelas_periodes = [];
        $loop = 0;
        foreach($periodes as $periode){
            $tahun_periodes[$loop] = $periode->tahun_ajaran;
            $jumlah_kelas_periodes[$loop] = kelas::whereYear('created_at' , $periode->getYear())->count();
            $loop++;
            return view('tata_usaha.kelas.list_kelas',['kelas'=>$kelases , 'tahun_periode'=>$tahun_periodes , 'jumlah_kelas_periode' => $jumlah_kelas_periodes , 'detail_kelas' => $detail]);
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::all();
        $siswas = siswa::all();
        $kelases = kelas::find($id);
        
        return view('tata_usaha.kelas.info_kelas',['datakelas'=>$kelases , 'datasiswa' => $siswas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kelas)
    {
        //
    }
}

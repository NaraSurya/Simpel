<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Guru;
use App\kelas;
use App\siswa;
use App\tipeNilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
    public function list_kelas($id){
        $guru = Guru::find($id);
        return view('guru.nilai.list_kelas' , ['guru'=>$guru]);
    }
    public function list_siswa($id , $id_kelas ){
        $guru = Guru::find($id);
        $kelas = kelas::find($id_kelas);
        return view('guru.nilai.list_siswa',['guru'=> $guru , 'kelas'=> $kelas]);
    }
    public function siswa($id , $id_kelas , $id_siswa){
        $guru = Guru::find($id);
        $kelas = kelas::find($id_kelas);
        $siswa = siswa::find($id_siswa);
        $nilai = nilai::where('siswa_id' , $id_siswa)->where('kelas_id' , $id_kelas)->first(); 
        $tipes = tipeNilai::all();
        $select = []; 
        foreach($tipes as $tipe){
            $select[$tipe->id] = $tipe->tipe;
        }
        return view('guru.nilai.siswa', ['guru'=>$guru , 'kelas'=>$kelas , 'nilai'=>$nilai , 'siswa'=>$siswa, 'tipe'=>$select]);
    }
}

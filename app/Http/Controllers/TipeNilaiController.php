<?php

namespace App\Http\Controllers;

use App\tipeNilai;
use App\detailTipeNilai;
use App\guru;
use Illuminate\Http\Request;

class TipeNilaiController extends Controller
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
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['sum'] = $request->Tugas + $request->Ulangan_Harian + $request->UTS + $request->UAS;
        $validate = $request->validate([
            'sum' => 'in:100'
        ]);
        
        $guru = guru::find($request->guru_id);
        $guru->tipe_nilai()->attach([
            1 => ['persentase'=> $request->tugas] , 
            2 => ['persentase'=> $request->Ulangan_harian] , 
            3 => ['persentase'=>$request->UTS] , 
            4 => ['persentase' => $request->UAS]
        ]);
        return redirect('/guru/list-kelas/'.$guru->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipeNilai  $tipeNilai
     * @return \Illuminate\Http\Response
     */
    public function show(tipeNilai $tipeNilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipeNilai  $tipeNilai
     * @return \Illuminate\Http\Response
     */
    public function edit(tipeNilai $tipeNilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipeNilai  $tipeNilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipeNilai $tipeNilai)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipeNilai  $tipeNilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipeNilai $tipeNilai)
    {
        //
    }

    public function updateDetailTipe(Request $request){
        $request['sum'] = $request->Tugas + $request->Ulangan_Harian + $request->UTS + $request->UAS;
        $validate = $request->validate([
            'sum' => 'in:100'
        ]);
        $guru = guru::find($request->guru_id);
        $guru->tipe_nilai()->sync([
            1 => ['persentase'=> $request->Tugas] , 
            2 => ['persentase'=> $request->Ulangan_Harian] , 
            3 => ['persentase'=>$request->UTS] , 
            4 => ['persentase' => $request->UAS]
        ]);
        return redirect('/guru/list-kelas/'.$guru->id);
    }
}

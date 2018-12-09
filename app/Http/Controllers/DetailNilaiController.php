<?php

namespace App\Http\Controllers;

use App\Detail_Nilai;
use App\Nilai;
use Illuminate\Http\Request;

class DetailNilaiController extends Controller
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
     * @param  \App\Detail_Nilai  $detail_Nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_Nilai $detail_Nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail_Nilai  $detail_Nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_Nilai $detail_Nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail_Nilai  $detail_Nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail_Nilai $detail_Nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail_Nilai  $detail_Nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_Nilai $detail_Nilai)
    {
        //
    }

    public function nilai(Request $request , $id , $id_siswa , $id_kelas){
        $nilai = Nilai::firstOrCreate([
            'siswa_id' => $id_siswa , 
            'kelas_id' => $id_kelas
        ]);

        $nilai->guru()->attach($id , [ 
            'nilai' => $request->nilai , 
            'tipe_nilai_id' => $request->tipe
        ]);

        return redirect()->back();
    }
}

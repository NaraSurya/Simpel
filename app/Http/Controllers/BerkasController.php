<?php

namespace App\Http\Controllers;

use App\berkas;
use App\siswa;
use Illuminate\Http\Request;

class BerkasController extends Controller
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
        $this->validate([
            'berkas' => 'required |image' , 
            'jenis_berkas' => 'required'
        ]);


        if($request->hasFile('berkas')){
            $fileNameWithExtension = $request->file('berkas')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $fileExtension = $request->file('berkas')->getClientOriginalExtension();
            $fileNameToStorage = $fileName.'_'.time().'.'.$fileExtension;
            $filePath = $request->file('berkas')->storeAs('public/profile_wali' , $fileNameToStorage); 
        } 
        else {
            $fileName = 'PATH KE PROFILE UMUM';
        }

        $siswa = siswa::where('nis' , $request->nis);


        $berkas = new berkas;
        $berkas->path = $filePath;
        $berkas->jenis_berkas = $request->jenis_berkas;
        $berkas->siswa_id = $siswa->id;
        $berkas->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function show(berkas $berkas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function edit(berkas $berkas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berkas $berkas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function destroy(berkas $berkas)
    {
        //
    }
}

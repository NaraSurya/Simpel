<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
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
        $this->validate($request, [
            'nama' => 'required' , 
            'nip' => 'numeric|required',
            'alamat' => 'required' , 
            'no_tlp' => 'required' , 
            'jenis_kelamin' => 'required' , 
            'tgl_lahir' =>'required' , 
            'email' => 'required|email',
            'agama_id' => 'required|numeric',
            'mapel_id' => 'required|numeric',
            'pict' => 'required'
       ]);

       if($request->hasFile('pict')){
            
        $fileNameWithExtension = $request->file('pict')->getClientOriginalName();
        $fileName = $request->nis;
        $fileExtension = $request->file('pict')->getClientOriginalExtension();
        $fileNameToStorage = $fileName.'_'.time().'.'.$fileExtension;
        $filePath = $request->file('pict')->storeAs('public/profile_guru' , $fileNameToStorage); 
    } 
    else {
        $filePath = 'PATH KE PROFILE UMUM';
    }

       return $request;
       $guru = new guru; 
       $guru->nama = $request->nama; 
       $guru->nis = $request->nip;
       $guru->alamat = $request->alamat;
       $guru->no_tlp = $request->no_tlp;
       $guru->jenis_kelamin = $request->jenis_kelamin;
       $guru->tgl_lahir = $request->tgl_lahir;
       $guru->email = $request->email;
       $guru->agama_id = $request->agama_id;
       $guru->mapel_id = $request->mapel_id;
       $guru->pict = $filePath;
       $guru->save();

       return redirect('registrasi_guru'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        //
    }
}

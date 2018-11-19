<?php

namespace App\Http\Controllers;

use App\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
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
            'nis' => 'numeric|required',
            'alamat' => 'required' , 
            'no_tlp' => 'required' , 
            'jenis_kelamin' => 'required' , 
            'tgl_lahir' =>'required' , 
            'email' => 'required|email'
            'agama_id' => 'required|numeric'
            'pict' => 'required|image|'
       ]);

       //handle file 
       if($request->hasFile('pict')){
            $fileNameWithExtension = $request->file('pict')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $fileExtension = $request->file('pict')->getClientOriginalExtension();
            $fileNameToStorage = $fileName.'_'.time().'.'.$fileExtension;
            $filePath = $request->file('pict')->storeAs('public/profile_siswa' , $fileNameToStorage); 
       } 
       else {
           $fileName = 'PATH KE PROFILE UMUM';
       }
       
        $siswa = new siswa; 
        $siswa->nama = $request->nama; 
        $siswa->nis = $request->nis;
        $siswa->alamat = $request->alamat;
        $siswa->no_tlp = $request->no_tlp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->email = $request->email;
        $siswa->agama_id = $request->agama_id;
        $siswa->pict = $filePath;
        $siswa->save();

        return redirect('siswa'); 


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        //
    }
}

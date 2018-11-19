<?php

namespace App\Http\Controllers;

use App\wali;
use App\siswa;
use Illuminate\Http\Request;

class WaliController extends Controller
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
            'alamat' => 'required' , 
            'no_tlp' => 'required' , 
            'jenis_kelamin' => 'required' , 
            'tgl_lahir' =>'required' , 
            'email' => 'required|email'
            'agama_id' => 'required|numeric'
            'pict' => 'required|image|'
       ]);
       if($request->hasFile('pict')){
                $fileNameWithExtension = $request->file('pict')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                $fileExtension = $request->file('pict')->getClientOriginalExtension();
                $fileNameToStorage = $fileName.'_'.time().'.'.$fileExtension;
                $filePath = $request->file('pict')->storeAs('public/profile_wali' , $fileNameToStorage); 
        } 
        else {
            $fileName = 'PATH KE PROFILE UMUM';
        }
       $wali = wali::firstOrCreate([
           'nama' => $request->nama , 
           'alamat' => $request->alamat , 
           'no_tlp' => $request->no_tlp , 
           'jenis_kelamin' => $request->jenis_kelamin , 
           'tgl_lahir' => $request->tgl_lahir , 
           'email' => $request->email , 
           'agama_id' => $request->agama_id , 
           'pict' => $filePath
       ]);
       $siswa = siswa::where('nis',$request->nis); 
       $wali->siswa()->attach($siswa->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function show(wali $wali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function edit(wali $wali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wali $wali)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function destroy(wali $wali)
    {
        //
    }
}

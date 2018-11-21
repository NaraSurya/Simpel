<?php

namespace App\Http\Controllers;

use App\tu;
use Illuminate\Http\Request;

class TuController extends Controller
{


    private function validasi(Request $request){
        // return $request;
         //Validasi form
         $this->validate($request, [
             'agama_id' => 'required' , 
             'nama' => 'required',
             'tgl_lahir' => 'required' , 
             'jenis_kelamin' => 'required' , 
             'alamat' => 'required' , 
             'no_hp' =>'required|numeric' , 
             'pict' => 'required',
             'email' => 'required|email' , 
         ]);

        // handle foto profile siswa
        if($request->hasFile('pict')){
            
            $fileNameWithExtension = $request->file('pict')->getClientOriginalName();
            $fileName = $request->nama;
            $fileExtension = $request->file('pict')->getClientOriginalExtension();
            $fileNameToStorage = $fileName.'_'.time().'.'.$fileExtension;
            $filePath = $request->file('pict')->storeAs('public/profile_tu' , $fileNameToStorage); 
        } 
        else {
            $filePath = 'PATH KE PROFILE UMUM';
        }


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tu = Tu::get();
        return view('Tu.show_tu',compact('tu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tu = Tu::get();
        return view('Tu.registrasi_tu',compact('tu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validasi($request);
        $tu= new Tu;
        $tu->agama_id = $request->agama_id;
        $tu->nama = $request->nama;
        $tu->tgl_lahir = $request->tgl_lahir;
        $tu->jenis_kelamin = $request->jenis_kelamin;
        $tu->alamat = $request->alamat;
        $tu->no_hp= $request->no_hp;
        $tu->pict = $request->pict;
        $tu->email = $request->email;
        $tu->first = 1;
        $tu->save();
        $tu= Tu::get();
        return view('Tu.show_tu',compact('tu'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function show(tu $tu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function edit(tu $tu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tu $tu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function destroy(tu $tu)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\tu;
use App\agama;
use Illuminate\Http\Request;

class TuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tus = Tu::get();
        return view('tata_usaha.list_tu',compact('tus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $listagama = agama::all();
        return view('tata_usaha.registrasi_tu',[ 'pilihanagama'=>$listagama]);

        // $tu = Tu::get();
        // return view('tata_usaha.registrasi_tu',compact('tu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
       $tu = tu::create([
        'agama_id' => $request->agama_id,
        'nama'=> $request->nama,
        'tgl_lahir'=> $request->tgl_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp , 
        'pict' => $fileNameToStorage,
        'email' => $request->email,
        'first'=>0 
        

        
    ]);
        return redirect('/tu/biodata_tu');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tu = tu::find($id);
        return view('tata_usaha.biodata_tu',['tu'=>$tu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tu = tu::find($id);
        $agama = agama::all();
        return view('tata_usaha.form_update_tu' , ['tu'=> $tu , 'pilihanagama'=>$agama]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tu = tu::find($id);
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

      
       $tu->agama_id = $request->agama_id;
       $tu->nama = $request->nama;
       $tu->tgl_lahir = $request->tgl_lahir;
       $tu->jenis_kelamin = $request->jenis_kelamin;
       $tu->alamat = $request->alamat;
       $tu->no_hp = $request->no_hp;
       $tu->pict = $fileNameToStorage;
       $tu->email = $request->email;
       $tu->save();
       
       return redirect('/tu/biodata_tu/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tu = tu::find($id);
        $tu->delete();
        return redirect('/tu/biodata_tu');
    }


}

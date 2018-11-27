<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Mapel;
use App\agama;
use App\Mail\verify_guru_baru;
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
        $guru = guru::all();
        return view('tata_usaha.guru.list_guru',['gurus'=>$guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listagama = agama::all();
        $listmapel = mapel::all();
        return view('tata_usaha.guru.registrasi_guru',['pilihanmapel'=>$listmapel , 'pilihanagama'=>$listagama]);
        
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
            'nip' => 'required',
            'alamat' => 'required' , 
            'no_tlp' => 'required' , 
            'jenis_kelamin' => 'required' , 
            'tgl_lahir' =>'required' , 
            'email' => 'required|email',
            'agama_id' => 'required|numeric',
            'mapel_id' => 'required|numeric',
            'pict' => 'required'
       ]);
        
       $password = str_random(8);
       $hash_password = bcrypt($password);

       if($request->hasFile('pict')){
            
        $fileNameWithExtension = $request->file('pict')->getClientOriginalName();
        $fileName = $request->nip;
        $fileExtension = $request->file('pict')->getClientOriginalExtension();
        $fileNameToStorage = $fileName.'_'.time().'.'.$fileExtension;
        $filePath = $request->file('pict')->storeAs('public/profile_guru' , $fileNameToStorage); 
    } 
    else {
        $filePath = 'PATH KE PROFILE UMUM';
    }
    $guru = guru::create([
        'nama' => $request->nama,
        'nip'=> $request->nip,
        'alamat'=> $request->alamat,
        'no_tlp' => $request->no_tlp,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tgl_lahir' => $request->tgl_lahir , 
        'email' => $request->email ,
        'mapel_id' => $request->mapel_id,
        'agama_id'=>$request->agama_id , 
        'pict' => $fileNameToStorage,
        'username' => $request->email,
        'password' => $hash_password,
    
    ]);


    $dataEmail = [
        'username' => $guru->email,
        'password' => $password
    ];

    \Mail::to($guru)->send(new verify_guru_baru($dataEmail));
    return redirect('/tu/guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $guru = guru::find($id);
        return view('tata_usaha.guru.biodata_guru',['guru'=>$guru]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        $listagama = agama::all();
        $listmapel = mapel::all();
        return view('tata_usaha.guru.form_update',['guru'=>$guru , 'pilihanmapel'=>$listmapel , 'pilihanagama'=>$listagama]);
        
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
            
            $this->validate($request, [
            'nama' => 'required' , 
            'nip' => 'required',
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
        $fileName = $request->nip;
        $fileExtension = $request->file('pict')->getClientOriginalExtension();
        $fileNameToStorage = $fileName.'_'.time().'.'.$fileExtension;
        $filePath = $request->file('pict')->storeAs('public/profile_guru' , $fileNameToStorage); 
    } 
    else {
        $filePath = 'PATH KE PROFILE UMUM';
    }
        
       
        
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->alamat = $request->alamat;
        $guru->no_tlp = $request->no_tlp;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->tgl_lahir = $request->tgl_lahir;
        $guru->email = $request->email;
        $guru->agama_id = $request->agama_id;
        $guru->mapel_id = $request->mapel_id;
        $guru->pict = $fileNameToStorage;
        $guru->save();
        
    

      
        return redirect('tu/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect('/tu/guru');
    }

    public function kkm(Request $request , $id){
        $validate = $request->validate([
            'kkm' => 'integer|between:0,100'
        ]);
        $guru = guru::find($id); 
        $guru->kkm = $request->kkm; 
        $guru->save();
        return redirect('/guru/list-kelas/'.$id);
    }

 
}

<?php

namespace App\Http\Controllers;

use App\siswa;
use App\wali;
use App\agama;
use App\periode;
use App\jurusan;
use Carbon\Carbon;
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
        

        $siswas = siswa::all();
        $jumlahSiswa['X'] = siswa::whereYear('created_at' , Carbon::now()->year)->count();
        $jumlahSiswa['XI'] = siswa::whereYear('created_at' , Carbon::now()->subYear()->year)->count();
        $jumlahSiswa['XII'] = siswa::whereYear('created_at', carbon::now()->subYear(2)->year)->count();
        $periodes = periode::all();
        $tahun_periodes = []; 
        $jumlah_siswa_periode = []; 
        $loop = 0;
        foreach($periodes as $periode){
            $tahun_periodes[$loop] = $periode->tahun_ajaran;
            $jumlah_siswa_periode[$loop] = siswa::whereYear('created_at' , $periode->getYear())->count();
            $loop++;
        }
        return view('tata_usaha.siswa.list_siswa',['siswas'=>$siswas , 'tahun_periodes'=>$tahun_periodes , 'jumlah_siswa_periode' => $jumlah_siswa_periode , 'jumlah_siswa' => $jumlahSiswa]);
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
      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        return view('tata_usaha.siswa.show',['siswa'=>$siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        $jurusans = jurusan::all();
        $agama = agama::all();
        return view('tata_usaha.siswa.edit' , ['siswa'=>$siswa , 'agamas'=>$agama , 'jurusans'=>$jurusans]);
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
        
        $this->validate($request, [
            'nama' => 'required|regex:/^[a-zA-Z]/', 
            'nis' => 'required|numeric',//tambah Snumeric
            'alamat' => 'required' , 
            'no_tlp' => 'required|numeric|', //tambah numeric 
            'jenis_kelamin' => 'required', 
            'tgl_lahir' =>'required' , 
            'email' => 'required|email',
            'agama_id' => 'required|numeric',
            'jurusan' => 'required|numeric',
            'pict' => 'required', 
            'nama_wl' => 'required|regex:/^[a-zA-Z]/' , 
            'alamat_wl' => 'required' , 
            'no_tlp_wl' => 'required|numeric',//tambah numeric 
            'jenis_kelamin_wl' => 'required' , 
            'tgl_lahir_wl' =>'required' , 
            'email_wl' => 'required|email',
            'agama_wl' => 'required|numeric',
            
        ]);
        
        // handle foto profile siswa
        if($request->hasFile('pict')){
            
            $fileNameWithExtension = $request->file('pict')->getClientOriginalName();
            $fileName = $request->nis;
            $fileExtension = $request->file('pict')->getClientOriginalExtension();
            $fileNameToStorage = $fileName.'_'.time().'.'.$fileExtension;
            $filePath = $request->file('pict')->storeAs('public/profile_siswa' , $fileNameToStorage); 
        } 
        else {
            $filePath = 'PATH KE PROFILE UMUM';
        }

        $siswa->nama = $request->nama; 
        $siswa->alamat = $request->alamat;
        $siswa->nis = $request->nis;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->no_tlp = $request->no_tlp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->email = $request->email;
        $siswa->agama_id = $request->agama_id;
        $siswa->jurusan_id = $request->jurusan;
        $siswa->pict = $fileNameToStorage;
        $siswa->save();

        $wali_siswa = $siswa->wali->first();
        $wali_id = $wali_siswa->id;

        $wali = wali::find($wali_id);
        $wali->nama = $request->nama_wl;
        $wali->alamat = $request->alamat_wl;
        $wali->tgl_lahir = $request->tgl_lahir_wl;
        $wali->no_tlp = $request->no_tlp_wl;
        $wali->jenis_kelamin = $request->jenis_kelamin_wl;
        $wali->email = $request->email_wl;
        $wali->agama_id = $request->agama_wl;
        $wali->save();

        return redirect('tu/siswa/'.$siswa->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect('/tu/siswa');
    }
}

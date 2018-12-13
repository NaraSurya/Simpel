<?php

namespace App\Http\Controllers;

use App\Guru;
use App\detail_kelas;
use App\kelas;
use App\periode;
use App\jurusan;
use App\wali;
use App\siswa; 
use Illuminate\Http\Request;
use Carbon\carbon;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = detail_kelas::all();
        $kelases = kelas::all();
        $periodes = periode::all();
        return view('tata_usaha.kelas.list_kelas',['kelas'=>$kelases , 'tahun_periode'=>$periodes , 'detail_kelas' => $detail]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // mengklasifikasi siswa 

        $siswaX = siswa::whereYear('created_at' , Carbon::now()->year)->get();
        $siswaXI = siswa::whereYear('created_at' , Carbon::now()->subYear()->year)->get();
        $siswaXII = siswa::whereYear('created_at', carbon::now()->subYear(2)->year)->get();

        // klasifikasi siswa X 
        $siswaXIPA = $siswaX->where('jurusan_id',1);
        return $siswaXIPA;
        $jumlahX = $siswaX->count(); 
        $jumlahSiswaPerKelas = ceil(10*$jumlahX/100);
        $loop = 1;
        // while($siswaX as $siswa){
        //     if($loop == $jumlahSiswaPerKelas){
        //         $loop =1;
        //     }
        //     if($loop = 1){
        //         $newKelas = kelas::create([

        //         ]);
        //     }

        // }
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
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = detail_kelas::all();
        $guru = Guru::all();
        $siswas = siswa::all();
        $kelases = kelas::find($id);
        
        return view('tata_usaha.kelas.info_kelas',['datakelas'=>$kelases , 'datasiswa' => $siswas, 'detail_kelas' => $detail, ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kelas)
    {
        //
    }
}

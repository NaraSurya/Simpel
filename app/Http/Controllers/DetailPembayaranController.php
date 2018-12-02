<?php

namespace App\Http\Controllers;

use App\detail_pembayaran;
use App\periode;
use Carbon\Carbon;
use App\siswa;
use Illuminate\Http\Request;

class DetailPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('tata_usaha.pembayaran.cari_siswa');
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
        if (isset($request->cek)) {
            $selisih =  count($request->cek);
        } else {
            return 'Anda belum men checklist';
        }
       
        $id =  $request->siswa_id;
        $periode = $request->periode_id;
        $now = Carbon::now()->toDateString();
        for ($i=0; $i < $selisih ; $i++) { 
        
            $cek = detail_pembayaran::create([
                'siswa_id' => $id,
                'tanggal' => $now,
                'status' => 1,
                'periode' => $periode
            ]);
            }
            return redirect()->action(
                'DetailPembayaranController@cari', ['search' => $request->siswa_id]
            );
        }

       
    

    /**
     * Display the specified resource.
     *
     * @param  \App\detail_pembayaran  $detail_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(detail_pembayaran $detail_pembayaran)
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detail_pembayaran  $detail_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_pembayaran $detail_pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detail_pembayaran  $detail_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail_pembayaran $detail_pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detail_pembayaran  $detail_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_pembayaran $detail_pembayaran)
    {
        //
    }

    public function cari (Request $request){
        
        // $periodes = periode::all()->first();
        // $id =  $request->input('search');
        // $details = detail_pembayaran::where('siswa_id',$id)->get();
        //     if($details->count() > 0){
        //         return view('tata_usaha.pembayaran.list_pembayaran',['periodes' => $periodes,'details' => $details]);
        //     }

        //     else {
        //         return  'Siswa dengan id ' . "<b> $id </b>" . ' belum melakukan pembayaran sama sekali';
        //     }

        $id = $request->search;
        $siswa = siswa::find($id);

        if ($siswa) {
            return view('tata_usaha.pembayaran.list_pembayaran_test',['siswa' => $siswa]);
        } else {
           return 'tidak ketemu'; 
        }
        
       
    }
}

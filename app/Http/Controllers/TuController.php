<?php

namespace App\Http\Controllers;

use App\tu;
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
        $tu= new Tu;
        $tu->agama_id = $request->agama_id;
        $tu->nama = $request->nama;
        $tu->tgl_lahir = $request->tgl_lahir;
        $tu->jenis_kelamin = $request->jenis_kelamin;
        $tu->alamat = $request->alamat;
        $tu->no_hp= $request->no_hp;
        $tu->pict = $request->pict;
        $tu->username = $request->username;
        $tu->password = $request->password;
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

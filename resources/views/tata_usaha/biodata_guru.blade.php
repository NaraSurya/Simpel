@extends('layout.layout_TU')
@section('title','Biodata Guru')

@section('content')
   <div class="container-fluid">
        <div class="row my-5 p-3 bg-white mr-5">
            <div class="col-12">
                <div class="mb-3 text-center">  
                    <span class="number"> 1 </span> 
                    <span style="font-size:18px;">Data Guru</span> 
                </div>
            </div>
            <div class="col-sm-12 col-md-2 text-center">
                <a href="/storage/profile_guru/{{$guru->pict}}" target="_blank">
                    <img src="/storage/profile_guru/{{$guru->pict}}"   class="rounded" alt="logo_simple"  width="125px" height="150px">
                </a>
            </div>
            <div class="col-sm-12 col-md-10">
                <div class="row">
                    <div class="col-sm-12 col-md-6 border">
                        <h6 class="mt-3 font-color-grey">Nama</h6>
                        <h5 class=" mb-3">{{$guru->nama}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">NIP</h6>
                        <h5 class=" mb-3">{{$guru->nip}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">No Telepon</h6>
                        <h5 class=" mb-3">{{$guru->no_tlp}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">Agama</h6>
                        <h5 class=" mb-3">{{$guru->agama->agama}}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-8 border">
                        <h6 class="mt-3 font-color-grey">Alamat</h6>
                        <h5 class=" mb-3">{{$guru->alamat}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">tanggal lahir</h6>
                        <h5 class=" mb-3">{{$guru->tgl_lahir}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">jenis kelamin</h6>
                        <h5 class=" mb-3">{{$guru->jenis_kelamin}}</h5>
                    </div>
                </div>
            </div>
        </div>       
   </div>
@endsection
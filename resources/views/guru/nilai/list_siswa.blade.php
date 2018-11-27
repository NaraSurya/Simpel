@extends('layout.layout_Guru')
@section('title','list siswa')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4 class="display-5 font-color-grey">{{$kelas->nama}}</h4>
                <hr>
                <p class="font-color-grey">list siswa</p>
            </div>
        </div>
        <div class="row card-deck">
            @foreach ($kelas->siswa as $siswa)
                <div class="col-sm-12 d-flex align-items-stretch col-md-3 ">
                    <div class="text-center mt-3 w-100  d-inline-block">
                        <div class="card w-100 h-100 bg-white ">
                            <div class="card-body ">
                                    <a href="/storage/profile_siswa/{{$siswa->pict}}"  target="_blank">
                                        <img src="/storage/profile_siswa/{{$siswa->pict}}"  class="rounded-circle" alt="logo_simple"  width="80px" height="80px">
                                    </a>
                                    <h5 class="mt-3 mb-2" style="color : #565e8a">{{$siswa->nama}}</h5>
                                    <h6 class="font-color-grey mb-5">{{$siswa->nis}}</h6>
                                    <div class="mx-5 p-2 mb-5 bg-warning text-white">
                                        <h5>90</h5>
                                        <h6>Nilai Total</h6>
                                    </div>
                                    <a href="/guru/siswa/{{$guru->id}}/{{$kelas->id}}/{{$siswa->id}}" class="btn btn-md mb-3 btn-primary">Beri Nilai</a>
                            </div>
                        </div>   
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection
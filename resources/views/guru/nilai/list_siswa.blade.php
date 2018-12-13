@extends('layout.layout_Guru')
@section('title','list siswa')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4 class="display-5 font-color-grey">{{$kelas->nama}}</h4>
                <hr>
                <p class="color-grey">list siswa</p>
            </div>
        </div>
        <div class="row card-deck">
            @foreach ($kelas->siswa as $siswa)
                <div class="col-sm-12 col-md-3">
                    <div class="card w-100 h-100 p-0 border-0 ">
                        <div class="card-body p-0 purple-gradient">
                            <div class="row">
                                <div class="col-3">
                                    <a href="/storage/profile_siswa/{{$siswa->pict}}"  target="_blank">
                                        <img src="/storage/profile_siswa/{{$siswa->pict}}"  class="rounded" alt="logo_simple"  width="80px" height="80px">
                                    </a>
                                </div>
                                <div class="col-9 flex-column">
                                    <h6 class="mx-3 my-4 font-weight-bold ">{{$siswa->nama}}</h6>
                                </div>
                            </div>
                            <div class="row mx-1">
                                <div class="col-8">
                                    <p class="my-3 font-weight-bold ">{{$siswa->nis}}</p>
                                </div>
                                <div class="col-4 blue">
                                    <h5 class="my-3 mx-1">
                                        {{$siswa->nilai->where('kelas_id',$kelas->id)->first()->nilai_total($guru)}}
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <a href="/guru/siswa/{{$guru->id}}/{{$kelas->id}}/{{$siswa->id}}" class="btn btn-primary btn-sm mx-3">Beri Nilai</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection
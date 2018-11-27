@extends('layout.layout_Guru')
@section('title','siswa')
@section('content')
<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-sm-12 col-md-6">
            <div class="row bg-white mb-3">
                <div class="col-sm-6 p-3 text-center col-md-3">
                    <a href="/storage/profile_siswa/{{$siswa->pict}}"  target="_blank">
                        <img src="/storage/profile_siswa/{{$siswa->pict}}"  class="rounded-circle" alt="logo_simple"  width="80px" height="80px">
                    </a>
                </div>
                <div class="col-sm-6 py-3 col-md-9">
                    <h5>{{$siswa->nama}}</h5>
                    <p class="font-color-grey">{{$siswa->nis}}</p>
                </div>
            </div>
            <div class="row bg-white">
                <div class="col-4 p-3 border text-center">
                    <h4>100</h4>
                    <p class="font-color-grey">Rata Rata Tugas</p>
                </div>
                <div class="col-4 p-3 border text-center">
                    <h4>100</h4>
                    <p class="font-color-grey">Rata Rata Ulangan</p>
                </div>
                <div class="col-4 p-3 border text-center">
                    <h4>95</h4>
                    <p class="font-color-grey">Nilai Total</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="bg-white w-100 h-100">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h5 class="font-color-grey">List Nilai</h5>
        </div>

    </div>
    <div class="row bg-white">
        <div class="col-sm-4 col-md-1 p-3 justify-content-center d-flex">
            <button type="button" data-toggle="modal" data-target="#ModalNilai" class="btn btn-md btn-primary"> <i class="fas fa-plus"></i></button>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalNilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    {!!  Form::open(['action' => ['DetailNilaiController@nilai' , $guru->id , $siswa->id , $kelas->id] ]) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Beri Nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::label('nilai' ,'nilai' ) !!}
                {!! Form::text('kkm' , $guru->kkm , ['class'=>'form-control']) !!}
                {!! Form::label('tipe' ,'tipe' ) !!}
                {!!   Form::select('tipe', $tipe, null, ['class'=>'form-control']) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
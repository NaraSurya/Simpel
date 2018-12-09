@extends('layout.layout_Guru')
@section('title','list kelas')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <h4 class="display-5 text-bold">Mengelola Nilai</h4>
                        <p class="color-grey">list kelas yang anda ajari </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-9 bg-white shadow-sm">
                        @if (!is_null($guru->tipe_nilai->first()))
                            <div class="row text-center">
                                @foreach ($guru->tipe_nilai as $tipe_nilai)
                                    <div class="col-3 my-3 px-3">
                                        <div class="rounded-circle  align-middle orange mb-3  " style="height : 85px">
                                                <h3 class="py-4">{{$tipe_nilai->pivot->persentase}}%</h3>
                                        </div>
                                       
                                        <div class="progress mx-3" style="height:10px">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: {{$tipe_nilai->pivot->persentase}}%" aria-valuenow="{{$tipe_nilai->pivot->persentase}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>   
                                        <p class="font-color-grey my-2">{{$tipe_nilai->tipe}}</p>    
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-12 text-center mb-2">
                                        <button type="button" class="btn btn-purple btn-sm" data-toggle="modal" data-target="#EditPersentaseModal">
                                            Change Persentase
                                        </button>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-12 text-center mb-2">
                                        <h5 class="mt-5">Ups anda belum membuat presentase</h5>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#MakePersentaseModal">
                                            Make Persentase
                                        </button>
                                </div>
                            </div>
                        @endif
                        
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="h-100 w-100 shadow-sm p-3 bg-white text-center">
                            <h4 class="mb-4">KKM</h4>
                            <div class="rounded green py-2 text-white mb-5">
                                <h3>{{ $guru->kkm }}</h3>
                            </div>
                            <button type="button" class="btn btn-purple btn-sm mt-4" data-toggle="modal" data-target="#KKMModal">
                                Change KKM
                            </button>
                              
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="w-100 h-100 py-3 bg-white">
                        <canvas id="nilaiChart"></canvas>
                </div>      
            </div>
        </div>
        <div class="row mt-5 mb-3">
            <div class="col-12">
                <h3 class="font-color-grey">List Kelas</h3>
            </div>
        </div>
        <div class="row card-deck mb-5">
            @foreach ($guru->jadwal as $kelas)
                <a href="/guru/list-siswa/{{$guru->id}}/{{$kelas->id}}"style="text-decoration:none;">
                    <div class="col-sm-12 col-md-3">
                        <div class="card w-100 border-0">
                            <div class="card-body px-3 py-0">
                                <div class="row p-3 green">
                                    <div class="col-7">
                                        <h3>{{$kelas->nama}}</h3>
                                    </div>
                                    <div class="col-5 d-flex">
                                        <h5>{{$kelas->siswa->count()}}</h5>
                                        <p class="font-color-grey mx-1">Siswa</p>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <div class="col-12">
                                        <div class="d-inline-flex text-left">
                                            <a href="/storage/profile_guru/{{$kelas->guru->pict}}" class="justify-content-start" target="_blank">
                                                <img src="/storage/profile_guru/{{$kelas->guru->pict}}"  class="rounded-circle" alt="logo_simple"  width="50px" height="50px">
                                            </a>
                                            <div class=" ml-3 text-right align-middle">
                                                <h6 class="">{{$kelas->guru->nama}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
               
            @endforeach
           
        </div>
    </div>
    <div class="modal fade" id="KKMModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        {!!  Form::open(['action' => ['GuruController@kkm' , $guru->id] ]) !!}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change KKM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::label('kkm' ,'KKM' ) !!}
                    {!! Form::text('kkm' , $guru->kkm) !!}
                    {!! $errors->first('kkm' , ':message')!!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="modal fade" id="EditPersentaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        {!!  Form::open(['action' =>'TipeNilaiController@updateDetailTipe']) !!}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Persentase</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::hidden('guru_id', $guru->id)!!}
                    @foreach ($guru->tipe_nilai as $tipe)
                        <div class="form-group">
                            {!! Form::label( $tipe->tipe, $tipe->tipe) !!}
                            {!! Form::number( $tipe->tipe ,$tipe->pivot->persentase,['class'=>'form-control'])!!}
                        </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="modal fade" id="MakePersentaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        {!!  Form::open(['action' =>'TipeNilaiController@store' ]) !!}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Persentase</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::hidden('guru_id', $guru->id)!!}
                    <div class="form-group">
                        {!! Form::label( 'tugas', 'Tugas') !!}
                        {!! Form::number( 'tugas' ,'0',['class'=>'form-control'])!!}
                        {!! Form::hidden('tugas_id' , '1')!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label( 'Ulangan_harian', 'Ulangan Harian') !!}
                        {!! Form::number( 'Ulangan_harian' ,'0',['class'=>'form-control'])!!}
                        {!! Form::hidden('ulangan_id' , '2')!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label( 'UTS', 'UTS') !!}
                        {!! Form::number( 'UTS' ,'0',['class'=>'form-control'])!!}
                        {!! Form::hidden('uts_id' , '3')!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label( 'UAS', 'UAS') !!}
                        {!! Form::number( 'UAS' ,'0',['class'=>'form-control'])!!}
                        {!! Form::hidden('uas_id' , '4')!!}
                    </div>
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

@section('script')
    <script>
        var ctx = document.getElementById('nilaiChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45],
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>
@endsection
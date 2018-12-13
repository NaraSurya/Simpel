@extends('layout.layout_tu')
@section('title','Kelas')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <h3 class="display-6">Kelas Periode : </h3>
            <hr class="my-4">
            
            <select class="btn btn-primary text-center col-sm-12" style="background-color:#FFFFFF; color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">
                @foreach ($tahun_periode as $periode)
                <option value="{{ $periode->tahun_ajaran }}">{{ $periode->tahun_ajaran}}</option>
                @endforeach
            </select>
        </div>
        <br />
        <div></div>
        <div class="row">
            <div class="col-sm-12 col-md-3 text-center ">
                <div class="card w-75 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title display-4">{{$kelas->count()}}</h5>
                        <h6 class="card-subtitle mb-5 text-muted">Total Kelas </h6>
                        <p class="font-color-grey">AI NOT SPIK INGGRIS</p>
                        <a href="/tu/kelas/create" class="btn btn-primary text-center col-sm-12" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">Generate Kelas</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 text-center ">
                <div class="card w-75 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title display-4">{{$kelas->where('jurusan_id','1')->count()}}</h5>
                        <h6 class="card-subtitle mb-5 text-muted">Jumlah Kelas </h6>
                        <h4 class="font-color-black">Sains</h4>
                        <i class="fas fa-atom fa-lg"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 text-center ">
                <div class="card w-75 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title display-4">{{$kelas->where('jurusan_id','2')->count()}}</h5>
                        <h6 class="card-subtitle mb-5 text-muted">Jumlah Kelas </h6>
                        <h4 class="font-color-black">Sosial</h4>
                        <i class="fas fa-atlas fa-lg"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 text-center ">
                <div class="card w-75 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title display-4">{{$kelas->where('jurusan_id','3')->count()}}</h5>
                        <h6 class="card-subtitle mb-5 text-muted">Jumlah Kelas </h6>
                        <h4 class="font-color-black">Bahasa</h4>
                        <i class="fas fa-language fa-lg"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-">
                <table class="table table-borderless text-center">
                    <thead>
                        <tr>
                            <th scope="col" class="font-color-grey">Nama Kelas</th>
                            <th scope="col" class="font-color-grey">Jumlah Siswa</th>
                            <th scope="col" class="font-color-grey">Periode</th>
                            <th scope="col" class="font-color-grey">Wali Kelas</th>
                            <th scope="col" class="font-color-grey"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $datakelas)
                            <tr class="bg-white my-5 align-middle">
                                <td class="align-middle text-bold">{{ $datakelas->nama }}</td>
                                <td class="align-middle">{{$detail_kelas->where('kelas_id', $datakelas->id)->count()}}</td>
                                <td class="align-middle">{{ $datakelas->periode->tahun_ajaran }}</td>
                                <td class="align-middle">{{ $datakelas->guru['nama'] }}</td>
                                <td class="align-middle"><a href="/tu/kelas/{{$datakelas->id}}" class=""><i class="fas fa-external-link-alt fa-lg"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
@endsection
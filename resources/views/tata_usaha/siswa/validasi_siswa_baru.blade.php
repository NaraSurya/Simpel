@extends('layout.layout_TU')
@section('title','validasi siswa baru')

@section('style')
    <style>
        .font-color-grey{
            color: #8b93a6!important; 
        }
        .number {
            margin-right: 5px;
            margin-bottom: 5px;
            height: 25px;
            width: 25px;
            background-color: white;
            border: 1.5px solid black;
            border-radius: 50%;
            display: inline-block;
        }
    </style>    
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h4 class="display-6">Verifikasi Siswa Baru</h4>
                <hr class="my-4">
                <table class="table table-borderless text-center">
                    <thead>
                        <tr>
                            <th scope="col" class="font-color-grey"></th>
                            <th scope="col" class="font-color-grey">NIS</th>
                            <th scope="col" class="font-color-grey">Nama</th>
                            <th scope="col" class="font-color-grey">Email</th>
                            <th scope="col" class="font-color-grey"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswa)
                            <tr class="bg-white my-5 align-middle">
                                <td class="font-raleway"> 
                                    <a href="/storage/profile_siswa/{{$siswa->pict}}" target="_blank">
                                        <img src="/storage/profile_siswa/{{$siswa->pict}}"  class="rounded-circle" alt="logo_simple"  width="35px" height="35px">
                                    </a>
                                    
                                </td>
                                <td class="align-middle">{{ $siswa->nis }}</td>
                                <td class="align-middle">{{ $siswa->nama }}</td>
                                <td class="align-middle">{{ $siswa->email }}</td>
                                <td class="align-middle"><a href="/tu/biodata-siswa-baru/{{$siswa->id}}" class=""><i class="fas fa-external-link-alt fa-lg"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-3 ">
                <div class="card w-70 container">
                    <div class="card-body text-center">
                        <h5 class="card-title display-4">{{$siswas->count()}}</h5>
                        <h6 class="card-subtitle mb-5 text-muted">Siswa Belum Terverifikasi</h6>
                        <a href="#" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
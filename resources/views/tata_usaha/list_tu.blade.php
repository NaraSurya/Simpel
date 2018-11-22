@extends('layout.layout_TU')
@section('title','list tata usaha')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h4 class="display-6">List Staff Tata Usaha</h4>
                <hr class="my-4">
                    <a href="/tu/registrasi_tu" class="btn btn-primary" style="background-color:#4C9BFB; border:none; width: 200px !important; border-radius: 20px;">Registrasi Tata Usaha</a>
                <table class="table table-borderless text-center">
                    <thead>
                        <tr>
                            <th scope="col" class="font-color-grey"></th>
                            <th scope="col" class="font-color-grey">Nama</th>
                            <th scope="col" class="font-color-grey">Alamat</th>
                            <th scope="col" class="font-color-grey">Email</th>
                            <th scope="col" class="font-color-grey"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tus as $tu)
                            <tr class="bg-white my-5 align-middle">
                                <td class="font-raleway"> 
                                    <a href="/storage/profile_tu/{{$tu->pict}}" target="_blank">
                                        <img src="/storage/profile_tu/{{$tu->pict}}"  class="rounded-circle" alt="logo_simple"  width="35px" height="35px">
                                    </a>
                                    
                                </td>
                                <td class="align-middle">{{ $tu->nama }}</td>
                                <td class="align-middle">{{ $tu->alamat }}</td>
                                <td class="align-middle">{{ $tu->email }}</td>
                                <td class="align-middle"><a href="/tu/biodata_tu/{{$tu->id}}" class=""><i class="fas fa-external-link-alt fa-lg"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
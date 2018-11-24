@extends('layout.layout_TU')
@section('title','List Guru')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h4 class="display-6">List Staff Guru</h4>
                <hr class="my-4">
                    <a href="/tu/guru/create" class="btn btn-primary text-center" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">Registrasi Guru</a>
                <table class="table table-borderless text-center">
                    <thead>
                        <tr>
                            <th scope="col" class="font-color-grey"></th>
                            <th scope="col" class="font-color-grey">NIP</th>
                            <th scope="col" class="font-color-grey">Nama</th>
                            <th scope="col" class="font-color-grey">Email</th>
                            <th scope="col" class="font-color-grey"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gurus as $guru)
                            <tr class="bg-white my-5 align-middle">
                                <td class="font-raleway"> 
                                    <a href="/storage/profile_guru/{{$guru->pict}}" target="_blank">
                                        <img src="/storage/profile_guru/{{$guru->pict}}"  class="rounded-circle" alt="logo_simple"  width="35px" height="35px">
                                    </a>
                                    
                                </td>
                                <td class="align-middle">{{ $guru->nip }}</td>
                                <td class="align-middle">{{ $guru->nama }}</td>
                                <td class="align-middle">{{ $guru->email }}</td>
                                <td class="align-middle"><a href="/tu/guru/{{$guru->id}}" class=""><i class="fas fa-external-link-alt fa-lg"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
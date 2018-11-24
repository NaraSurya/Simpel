@extends('layout.layout_TU')
@section('title','Informasi Kelas')

@section('content')

   <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <a href="/tu/kelas" class="btn btn-primary text-center" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">List Kelas</a> 
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
            <a href="/tu/kelas/{{$datakelas->id}}/edit" class="btn btn-primary mr-3  " style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">Edit</a>    
            <form method="POST" class="" action="/tu/kelas/{{$datakelas->id}}">
                @csrf
                @method('DELETE')
                <button type='submit' class="btn btn-danger mr-5 text-center" style="border:none; width: 130px !important; border-radius: 20px;">Delete</button>
            </form>
            </div>
        </div>
        <div class="row my-5 p-3 bg-white mr-5">
            
            <div class="col-12">
           
           
                <div class="mb-3 text-center">  
                    <span style="font-size:18px;">Kelas {{$datakelas->nama}}</span> 
                </div>
            </div>
            <div class="col-sm-12 col-md-10">
                <div class="row">
                <div class="col-sm-12 col-md-6 border">
                        <h6 class="mt-3 font-color-grey">Wali Kelas</h6>
                            <div class="row ">
                            <a href="/storage/profile_guru/{{$datakelas->guru->pict}}" target="_blank">
                                <img src="/storage/profile_guru/{{$datakelas->guru->pict}}"   class="rounded-circle " alt="logo_simple"  width="50px" height="50px">
                            </a>
                                <h5 class=" mb-3 md-3 col-md-11">{{$datakelas->guru->nama}}</h5>
                                <td class="align-middle"><a href="/tu/guru/{{$datakelas->guru_id}}" class=""><i class="fas fa-external-link-alt fa-lg"></i></a></td>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 border">
                            <h6 class="mt-3 font-color-grey">Jurusan</h6>
                            <h5 class=" mb-3">{{ $datakelas->jurusan->jurusan }}</h5>
                        </div>
                        <div class="col-sm-12 col-md-2 border">
                            <h6 class="mt-3 font-color-grey">Periode</h6>
                            <h5 class=" mb-3">{{ $datakelas->periode->tahun_ajaran }}</h5>
                        </div>
                    
                        <div class="col-sm-12 col-md-2 border">
                            <h6 class="mt-3 font-color-grey">Ruang Kelas</h6>
                            <h5 class=" mb-3">{{$datakelas->ruangan}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-9">
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
                            @foreach ($datakelas->siswa as $siswa)
                                <tr class="bg-white my-5 align-middle">
                                    <td class="font-raleway"> 
                                        <a href="/storage/profile_siswa/{{$siswa->pict}}" target="_blank">
                                            <img src="/storage/profile_siswa/{{$siswa->pict}}"  class="rounded-circle" alt="logo_simple"  width="35px" height="35px">
                                        </a>
                                        
                                    </td>
                                    <td class="align-middle">{{ $siswa->nis}}</td>
                                    <td class="align-middle">{{ $siswa->nama }}</td>
                                    <td class="align-middle">{{ $siswa->email }}</td>
                                    <td class="align-middle"><a href="/tu/siswa/{{$siswa->id}}" class=""><i class="fas fa-external-link-alt fa-lg"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-3 mb-5">
                    <div class="card w-80">
                        <div class="card-body text-center">
                            <div class="mx-5">
                                <h5 class="card-title display-4 mt-5">125</h5>
                                <h6 class="card-subtitle mb-5 text-muted">Siswa kelas X </h6>
                                <a href="#" class="btn btn-primary mb-3">lihat siswa</a>
                            </div>
                            <hr>
                            <div class="mx-5">
                                <h5 class="card-title display-4 mt-5">115</h5>
                                <h6 class="card-subtitle mb-5 text-muted">Siswa kelas XI </h6>
                                <a href="#" class="btn btn-primary mb-3">lihat siswa</a>
                            </div>
                            <hr>
                            <div class="mx-5">
                                <h5 class="card-title display-4 mt-5">117</h5>
                                <h6 class="card-subtitle mb-5 text-muted">Siswa kelas XII </h6>
                                <a href="#" class="btn btn-primary mb-3">lihat siswa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
   </div>
@endsection
@extends('layout.layout_TU')
@section('title','Biodata Tata Usaha')

@section('content')
   <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <a href="/tu/biodata_tu" class="btn btn-primary" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">List Tata Usaha</a>    
            </div>
            <div class="col-6 text-right ">
            <a href="/tu/biodata_tu/{{ $tu->id }}/edit" class="btn btn-primary" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">Edit</a>   
            <a href="/tu/biodata_tu" class="btn btn-danger mr-5" style=" border:none; width: 130px !important; border-radius: 20px;">Delete</a>   
            </div>
        </div>
        <div class="row my-5 p-3 bg-white mr-5">
            <div class="col-12">
           
                <div class="mb-3 text-center">  
                    <span class="number"> 1 </span> 
                    <span style="font-size:18px;">Data Tata Usaha</span> 
                </div>
            </div>
            <div class="col-sm-12 col-md-2 text-center">
                <a href="/storage/profile_tu/{{$tu->pict}}" target="_blank">
                    <img src="/storage/profile_tu/{{$tu->pict}}"   class="rounded" alt="logo_simple"  width="125px" height="150px">
                </a>
            </div>
            <div class="col-sm-12 col-md-10">
                <div class="row">
                    <div class="col-sm-12 col-md-6 border">
                        <h6 class="mt-3 font-color-grey">Nama</h6>
                        <h5 class=" mb-3">{{$tu->nama}}</h5>
                    </div>

                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">Jenis Kelamin</h6>
                        <h5 class=" mb-3">{{$tu->jenis_kelamin}}</h5>
                    </div>
                    
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">Tanggal Lahir</h6>
                        <h5 class=" mb-3">{{$tu->tgl_lahir}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">Agama</h6>
                        <h5 class=" mb-3">{{$tu->agama->agama}}</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 border">
                        <h6 class="mt-3 font-color-grey">Alamat</h6>
                        <h5 class=" mb-3">{{$tu->alamat}}</h5>
                    </div>

                    <div class="col-sm-12 col-md-6 border">
                        <h6 class="mt-3 font-color-grey">Email</h6>
                        <h5 class=" mb-3">{{$tu->email}}</h5>
                    </div>

                </div>
                    
                
            </div>
        </div>       
   </div>
@endsection
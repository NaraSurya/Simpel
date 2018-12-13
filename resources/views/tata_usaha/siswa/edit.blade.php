@extends('layout.layout_TU')
@section('title','edit siswa')
@section('style')
    
<style>
    .input-container {
        display: flex;
        width: 100%;
        margin-bottom: 15px;
    }

    .icon-form {
        padding: 10px;
        background:#D5EAFF;
        border: 1px solid #FFF;
        color: #80B9FD;
        min-width: 50px;
        text-align: center;
        
    }
    
    input[type='radio']:after {
            width: 15px;
            height: 15px;
            top: -2px;
            left: -1px;
            position: relative;
            background-color:#D5EAFF ;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 2px solid white;
        }

        input[type='radio']:checked:after {
            width: 15px;
            height: 15px;
            border-radius: 15px;
            top: -2px;
            left: -1px;
            position: relative;
            background-color:#DDEFFF;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 3px solid  #4C9BFB;
            transition: all 0.5s ease 0.12s;
        }
        .btn-sub-edit  {
            width: 150px !important;
            padding: 7px 5px;
            margin: 20px auto;
            text-align: center;
            color: #CDE3FE;
        }

        .btn-sub-edit:hover {
            width: 150px !important;
            padding: 7px 5px;
            margin: 20px auto;
            text-align: center;
            background-color:#CDE6FF;
            border-radius: 20px;
            color: #CDE3FE;
            transition: all 0.5s ease 0.12s;
    }
    .alert-danger {
            font-size:14px; 
            padding:1px;
            background: white;
            border: none;
            color: red;
        }
</style>

@endsection
@section('content')
<div class="container">
        
    {{-- form siswa --}}
    <form id="form_siswa" method="POST" action="/tu/siswa/{{$siswa->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="card mt-5" style="border-color:#ACD3FB">
       
        <div class="header-text text-center mt-3">  
            <span class="number"> 1 </span> 
            <span style="font-size:18px;">Form Data Siswa</span> 
        </div>

            <div class="card-body">
                <div class="form-group col ">
                    <label for="nama_sw">Nama</label>
                    <div class="input-container">
                        <i class="fa fa-user icon-form"></i>
                        <input type="text" class="form-control" value="{{$siswa->nama}}" name="nama" id="nama_sw" placeholder="Harap diisi">  
                    </div>    
                    <span>{!!$errors->first('nama', '<p class="alert alert-danger">:message</p>') !!}</span>
                </div>
                <div class="form-group col">
                    <label for="alamat_sw">Alamat</label>
                    <div class="input-container">
                        <i class="fa fa-home icon-form"></i>
                        <input type="text" class="form-control"  value="{{$siswa->alamat}}" name="alamat" id="alamat_sw" placeholder="Harap diisi">
                    </div>
                    <span>{!!$errors->first('alamat', '<p class="alert alert-danger">:message</p>') !!}</span>
                </div>
                <div class="form-row ml-2 ">
                    <div class="form-group col mr-4">
                        <label for="nis">NIS</label>
                        <div class="input-container">
                            <i class="far fa-id-card icon-form"></i>
                            <input type="text" class="form-control" name="nis" value="{{$siswa->nis}}" id="nis" placeholder="Harap diisi">
                        </div> 
                        <span>{!!$errors->first('nis', '<p class="alert alert-danger">:message</p>') !!}</span>     
                    </div>
                    <div class="form-group col mr-3">
                        <label for="telepon_sw">Telepon</label>
                        <div class="input-container">
                            <i class="fas fa-mobile icon-form"></i>
                            <input type="text" class="form-control" name="no_tlp"  value="{{$siswa->no_tlp}}" id="telepon_sw" placeholder="Harap diisi">
                        </div> 
                        <span>{!!$errors->first('no_tlp', '<p class="alert alert-danger" >:message</p>') !!}</span> 
                    </div>
                </div>
                <div class="form-row ml-2 ">
                    <div class="form-group col mr-4">
                            <label for="tgl_sw">Tanggal lahir</label>
                            <div class="input-container">
                                <i class="far fa-calendar-alt icon-form"></i>
                                <input type="date" class="form-control" name="tgl_lahir"  value="{{$siswa->tgl_lahir}}" id="tgl_sw" placeholder="Harap diisi"><br>
                            </div>
                            <span>{!!$errors->first('tgl_lahir', '<p class="alert alert-danger" >:message</p>') !!}</span>
                    </div>
                    <div class="form-group col mr-3">
                            <label >Jenis Kelamin</label>
                            <div class="row">
                                <div class="col-md-2" >
                                        <i class="	fa fa-venus-mars icon-form" ></i>
                                </div>
                                <div class="col-md-4 pt-2" >  
                                    <input type="radio"  id="laki1" name="jenis_kelamin" {{ $siswa->jenis_kelamin == 'L' ? 'checked' : ''}} value="L">
                                    <label  for="laki1">Laki-Laki</label>
                                </div>
                                <div class="col-md-4 pt-2" >  
                                    <input type="radio"  id="perempuan1" name="jenis_kelamin"{{ $siswa->jenis_kelamin == 'P' ? 'checked' : ''}}  value="P" >
                                    <label  for="perempuan1">Perempuan</label>
                                </div>
                            </div> 
                            <span>{!!$errors->first('jenis_kelamin', '<p class="alert alert-danger mt-2" >:message</p>') !!}</span>   
                        </div> 
                    </div>
                    <div class="form-row ml-2">
                        <div class="form-group col mr-4">
                            <label for="email_sw">Email</label>
                                <div class="input-container">
                                    <i class="far fa-envelope icon-form"></i>
                                    <input type="email" class="form-control" name="email" id="email_sw"  value="{{$siswa->email}}" placeholder="Harap diisi">
                                </div> 
                                <span>{!!$errors->first('email', '<p class="alert alert-danger" >:message</p>') !!}</span>  
                        </div>
                        <div class="form-group col mr-3">
                            <label for="agama_sw">Agama</label>
                            <div class="input-container">
                                <i class="fas fa-church icon-form"></i>
                                <select id="agama_sw" name="agama_id" class="custom-select">
                                    <option selected disabled>Pilih Agama</option>
                                    @foreach ($agamas as $agama)
                                      <option value="{{$agama->id}}" {{ $siswa->agama_id == $agama->id ? 'selected' : ''}}>{{$agama->agama}}</option>    
                                    @endforeach
                                </select>
                            </div>
                            <span>{!!$errors->first('agama_id', '<p class="alert alert-danger" >:message</p>') !!}</span>
                        </div>
                    </div> 

                    <div class="form-row ml-2">
                        <div class="form-group col mr-4">
                            <label for="jurusan">Jurusan</label>
                                <div class="input-container">
                                        <i class="fas fa-book icon-form"></i>
                                        <select id="jurusan" name="jurusan" class="custom-select">
                                            <option selected disabled>Pilih Jurusan</option>
                                            @foreach ($jurusans as $jurusan)
                                                <option value="{{$jurusan->id}}">{{$jurusan->jurusan}}</option>    
                                            @endforeach
                                        </select>
                                </div> 
                                <span>{!!$errors->first('jurusan', '<p class="alert alert-danger" >:message</p>') !!}</span>  
                        </div>
                        <div class="form-group col mr-3 ">
                            <label for="foto">Foto Profile</label>
                                <div class="input-container">
                                    <i class="fas fa-camera icon-form"></i>
                                    <div class="custom-file " >
                                        <input type="file" class="custom-file-input" id="foto"  name="pict">
                                        <label class="custom-file-label" for="customFile3">Choose file</label>
                                    </div>
                                </div>    
                        </div>
                    </div>
                 </div>  
            </div>
       
        
        @foreach ($siswa->wali as $wali)
            {{-- form wali --}}
            <div class="card mt-5" style="border-color:#AED6F1">
                <div class="header-text text-center mt-3">  
                        <span class="number"> {{$loop->iteration +1}} </span> 
                        <span  style="font-size:18px;"> Form Data Wali</span> 
                </div>
                    <div class="card-body">    
                        <div class="form-group col ">
                            <label for="nama_wl">Nama</label>
                            <div class="input-container">
                                <i class="fa fa-user icon-form"></i>
                                <input type="text" class="form-control" value="{{$wali->nama}}" name="nama_wl" id="nama_wl" placeholder="Harap diisi">
                            </div> 
                            <span>{!!$errors->first('nama_wl', '<p class="alert alert-danger">:message</p>') !!}</span>
                    </div>
                    <div class="form-group col">
                        <label for="alamat_wl">Alamat</label>
                        <div class="input-container">
                            <i class="fa fa-home icon-form"></i>
                            <input type="text" class="form-control"  value="{{$wali->alamat}}" name="alamat_wl" id="alamat_wl" placeholder="Harap diisi">
                        </div>
                        <span>{!!$errors->first('alamat_wl', '<p class="alert alert-danger">:message</p>') !!}</span>
                    </div>
                    <div class="form-row ml-2 ">
                        <div class="form-group col mr-4">
                                <label for="tgl_wl">Tanggal lahir</label>
                                <div class="input-container">
                                    <i class="far fa-calendar-alt icon-form"></i>
                                    <input type="date" class="form-control"  value="{{$wali->tgl_lahir}}" name="tgl_lahir_wl" id="tgl_wl" placeholder="Harap diisi">
                                </div>
                                <span>{!!$errors->first('tgl_lahir_wl', '<p class="alert alert-danger">:message</p>') !!}</span>
                        </div>
                        <div class="form-group col mr-3">
                            <label for="telepon_wl">Telepon</label>
                            <div class="input-container">
                                <i class="fas fa-mobile icon-form"></i>
                                <input type="text" class="form-control"  value="{{$wali->no_tlp}}" name="no_tlp_wl" id="telepon_wl" placeholder="Harap diisi">
                            </div> 
                            <span>{!!$errors->first('no_tlp_wl', '<p class="alert alert-danger">:message</p>') !!}</span> 
                        </div>
                    </div>
                    <div class="form-group col">
                        <label>Jenis Kelamin</label>
                        <div class="row">
                            <div class="col-sm-1" >
                                    <i class="	fa fa-venus-mars icon-form" ></i>
                            </div>
                            <div class="col-sm-2 pt-2" >  
                                <input type="radio"  name="jenis_kelamin_wl" {{$wali->jenis_kelamin == 'L' ? 'checked' : ''}} value="L" id="laki2" >
                                <label for="laki2">Laki-Laki</label>
                            </div>
                            <div class="col-sm-2 pt-2" >  
                                <input type="radio"  name="jenis_kelamin_wl" {{$wali->jenis_kelamin == 'P' ? 'checked' : ''}} value="P" id="perempuan2" >
                                <label  for="perempuan2">Perempuan</label>
                            </div>
                        </div> 
                        <span>{!!$errors->first('jenis_kelamin_wl', '<p class="alert alert-danger w-50 mt-2">:message</p>') !!}</span>   
                    </div>         
                    <div class="form-row ml-2">
                        <div class="form-group col mr-4">
                            <label for="email_wl">Email</label>
                                <div class="input-container">
                                    <i class="far fa-envelope icon-form"></i>
                                    <input type="email" class="form-control"  value="{{$wali->email}}" name="email_wl"  id="email_wl" placeholder="Harap diisi">
                                </div> 
                                <span>{!!$errors->first('email_wl', '<p class="alert alert-danger">:message</p>') !!}</span>  
                        </div>
                        <div class="form-group col mr-3">
                            <label for="agama_wl">Agama</label>
                                <div class="input-container">
                                    <i class="fas fa-church icon-form"></i>
                                    <select id="agama_wl" name="agama_wl" class="custom-select" required>
                                    <option selected disabled>Pilih Agama</option>
                                    @foreach ($agamas as $agama)
                                    <option value="{{$agama->id}}" {{ $wali->agama_id == $agama->id ? 'selected' : ''}}>{{$agama->agama}}</option>    
                                    @endforeach
                                    </select>
                                </div>
                                <span>{!!$errors->first('agama_wl', '<p class="alert alert-danger" >:message</p>') !!}</span>
                        </div>
                    </div>
                </div>  
            </div>

        @endforeach    
        
    

    {{-- submit all form --}}
    <div class="btn-sub-edit text-center my-5">
            <button  type="submit" class="btn btn-primary" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">Submit</button>
    </div>
</form>
</div>  
@endsection
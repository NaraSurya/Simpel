@extends('layout.layout_TU')
@section('content')
@include('include.error')
    <div class="container">
        <div class="form-row ">
            <div class="form-group col">
            <a href="/tu/biodata_tu" class="btn btn-primary" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">List Tata Usaha</a>    
            </div>
            <div class="form-group col  text-center">
                <h2>Form Registrasi Tata Usaha</h2>
            </div>
            <div class="form-group col text-right">
            <a href="home/dashboard" class="btn btn-primary" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">Home</a>    
            </div>
        </div>
            {{-- form tata usaha --}}
            <form id="form_tata_usaha" method="POST" action="/tu/registu" enctype="multipart/form-data">
            @csrf

            <div class="card mt-5" style="border-color:#ACD3FB">
               
                <div class="header-text text-center">  
                        
                </div>

                    <div class="card-body">
                        <div class="form-group col ">
                            <label for="nama_gr">Nama</label>
                            <div class="input-container">
                                <i class="fa fa-user icon-form"></i>
                                <input type="text" class="form-control" name="nama" id="nama_gr" placeholder="Harap diisi">
                            </div>    
                        </div>
                        <div class="form-group col">
                            <label for="alamat_gr">Alamat</label>
                            <div class="input-container">
                                <i class="fa fa-home icon-form"></i>
                                <input type="text" class="form-control" name="alamat" id="alamat_gr" placeholder="Harap diisi">
                            </div>
                        </div>
                        <div class="form-row ml-2 ">
                            <div class="form-group col mr-4">
                            <label for="tgl_gr">Tanggal lahir</label>
                                    <div class="input-container">
                                        <i class="far fa-calendar-alt icon-form"></i>
                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_gr" placeholder="Harap diisi">
                                    </div>
                            </div>
                            <div class="form-group col mr-3">
                                <label for="telepon_gr">Telepon</label>
                                <div class="input-container">
                                    <i class="fas fa-mobile icon-form"></i>
                                    <input type="text" class="form-control" name="no_hp" id="telepon_gr" placeholder="Harap diisi">
                                </div>  
                            </div>
                        </div>

                        
                        <div class="form-row ml-2 ">    
                            <div class="form-group col mr-4">
                                    <label >Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="col-md-2" >
                                                <i class="	fa fa-venus-mars icon-form" ></i>
                                        </div>
                                        <div class="col-md-4 pt-2" >  
                                            <input type="radio"  id="laki1" name="jenis_kelamin" value="Laki-Laki" required>
                                            <label  for="laki1">Laki-Laki</label>
                                        </div>
                                        <div class="col-md-4 pt-2" >  
                                            <input type="radio"  id="perempuan2" name="jenis_kelamin"  value="Perempuan" required>
                                            <label  for="perempuan2">Perempuan</label>
                                        </div>
                                    </div>    
                            </div> 
                        
                                <div class="form-group col mr-3">
                                    <label for="email_gr">Email</label>
                                        <div class="input-container">
                                            <i class="far fa-envelope icon-form"></i>
                                            <input type="email" class="form-control" name="email" id="email_gr" placeholder="Harap diisi">
                                        </div>   
                                </div>
                        </div>

                            <div class="form-row ml-2 ">   
                                <div class="form-group col mr-4">
                                    <label for="agama_gr">Agama</label>
                                    <div class="input-container">
                                        <i class="fas fa-church icon-form"></i>
                                        <select id="agama_gr" name="agama_id" class="custom-select">
                                        <option selected disabled>Pilih Agama</option>
                                        @foreach ($pilihanagama as $pilihan)
                                        <option value="{{$pilihan->id}}">{{$pilihan->agama}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            
                               
                                <div class="form-group col mr-3">
                                        <label for="nama_gr">Foto Profile</label>
                                        <div class="input-container">
                                            <i class="fas fa-camera icon-form"></i>
                                            <div class="custom-file w-100" >
                                                <input type="file" class="custom-file-input" id="customFile3"  name="pict">
                                                <label class="custom-file-label" for="customFile3">Choose file</label>
                                            </div>
                                        </div>    
                                </div>
                            </div>
                              
                               
                     
                         <div class="btn-sub-edit my-5 text-center">
                    <button  type="submit" class="btn btn-primary" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">Submit</button>
            </div>
                    </div>
            
            
        </form>
    </div>  
         
    <!-- Optional JavaScript -->
    <script src="{{ asset('/js/dropzone.js') }}"></script>
    <script src="{{ asset('/js/submit_registrasi_guru.js') }}"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
</body>
@endsection
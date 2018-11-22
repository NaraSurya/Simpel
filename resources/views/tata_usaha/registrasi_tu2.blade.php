@extends('Layout.layout_TU')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
  
    <title>Registrasi</title>

    <style>

        body {
            background-color: white;
            font-family: 'Varela Round', sans-serif;
        }

        .custom-select , .form-control{
            border-color:  #D2E9FF;
            margin: auto;  
        }

        input[type='text'],  input[type='date'],  input[type='number'],  input[type='email'], label{
            color: #9E9E9E;
        }
        
        #agama {
            color: #9E9E9E;
        }

        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color:  #9E9E9E;
        }
            ::-moz-placeholder { /* Firefox 19+ */
            color:  #9E9E9E;
        }
            :-ms-input-placeholder { /* IE 10+ */
            color:  #9E9E9E;
        }
            :-moz-placeholder { /* Firefox 18- */
            color:  #9E9E9E;
        }
        
       .card-header{
           background-color: white;
        }

        .header-text{
            margin-top: 20px;
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

       
        .input-container {
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        /* icon diubah menjadi icon1 */
        .icon1 { 
            padding: 10px;
            background:#D5EAFF;
            border: 1px solid #FFF;
            color: #80B9FD;
            min-width: 50px;
            text-align: center;
            
        }
        
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .nav-item-edit  {
            text-decoration: none !important;
            display: block;
            width: 150px !important;
            padding: 10px 20px;
            margin: 0 10px;
            text-align: center;
            background-color: white;
            border-radius: 20px;
            box-shadow: 5px 5px #DFEDFE;
            color: #64A9FC;
        }


        .nav-item-edit:hover , .nav-item-edit:active  {
            text-decoration: none !important;
            display: block;
            width: 150px !important;
            padding: 10px 20px;
            margin: 0 10px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 5px 5px #DFEDFE;
            background-color:#CDE6FF;
            color: #64A9FC;
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


        option { 
            color:#9E9E9E; 
            background-color:white; 
        }

        .alert-danger {
            font-size:14px; 
            padding:1px;
            background: white;
            border: none;
            color: red;
        }
       
    </style>

</head>
<body>
<div class="container">

            {{-- form siswa --}}
            <form action="/tu" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card mt-5" style="border-color:#ACD3FB">
               
                <div class="header-text text-center">  
                    <span class="number"> 1 </span> 
                    <span style="font-size:18px;">Form Data Tata Usaha</span> 
                </div>

                    <div class="card-body">
                        <div class="form-group col ">
                            <label for="nama_sw">Nama</label>
                            <div class="input-container">
                                <i class="fa fa-user icon1"></i>
                                <input type="text" class="form-control" name="nama" id="nama_sw" placeholder="Harap diisi">
                            </div>  
                            <span>{!!$errors->first('nama','<p class="alert alert-danger" >:message</p>')!!}  
                            </span>
                        </div>

                        <div class="form-row ml-2 ">
                            <div class="form-group col mr-4">
                                <label for="alamat_sw">Alamat</label>
                                <div class="input-container">
                                    <i class="fa fa-home icon1"></i>
                                    <input type="text" class="form-control" name="alamat" id="alamat_sw" placeholder="Harap diisi">
                                </div> 
                                <span>{!!$errors->first('alamat','<p class="alert alert-danger" >:message</p>')!!}  
                                </span>   
                            </div>

                            <div class="form-group col mr-3">
                                <label for="telepon_sw">Telepon</label>
                                <div class="input-container">
                                    <i class="fas fa-mobile icon1"></i>
                                    <input type="text" class="form-control" name="no_hp" id="telepon_sw" placeholder="Harap diisi">
                                </div> 
                                <span>{!!$errors->first('no_hp','<p class="alert alert-danger" >:message</p>')!!}  
                                </span> 
                            </div>
                        </div>

                        <div class="form-row ml-2 ">
                            <div class="form-group col mr-4">
                                    <label for="tgl_sw">Tanggal lahir</label>
                                    <div class="input-container">
                                        <i class="far fa-calendar-alt icon1"></i>
                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_sw" placeholder="Harap diisi">
                                    </div>
                                    <span>{!!$errors->first('tgl_lahir','<p class="alert alert-danger" >:message</p>')!!}  
                                    </span>
                            </div>
                            <div class="form-group col mr-3">
                                    <label >Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="col-md-2" >
                                                <i class="	fa fa-venus-mars icon1" ></i>
                                        </div>
                                        <div class="col-md-4 pt-2" >  
                                            <input type="radio"  id="laki1" name="jenis_kelamin" value="Laki-Laki">
                                            <label  for="laki1">Laki-Laki</label>
                                        </div>
                                        <div class="col-md-4 pt-2" >  
                                            <input type="radio"  id="perempuan2" name="jenis_kelamin"  value="Perempuan">
                                            <label  for="perempuan2">Perempuan</label>
                                        </div>
                                    </div>   
                                    <span>{!!$errors->first('jenis_kelamin','<p class="alert alert-danger mt-2" >:message</p>')!!}  
                                </span> 
                                </div> 
                                
                            </div>
                            <div class="form-row ml-2">
                                <div class="form-group col mr-4">
                                    <label for="email_sw">Email</label>
                                        <div class="input-container">
                                            <i class="far fa-envelope icon1"></i>
                                            <input type="email" class="form-control" name="email" id="email_sw" placeholder="Harap diisi">
                                        </div>
                                    <span>{!!$errors->first('email','<p class="alert alert-danger" >:message</p>')!!}  
                                    </span>   
                                </div>
                                <div class="form-group col mr-3">
                                    <label for="agama_sw">Agama</label>
                                    <div class="input-container">
                                        <i class="fas fa-church icon1"></i>
                                        <select id="agama_sw" name="agama_id" class="custom-select">
                                        <option selected disabled>Pilih Agama</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <span>{!!$errors->first('agama_id','<p class="alert alert-danger" >:message</p>')!!}  
                                    </span>
                                </div>
                            </div>   


                         </div>  
                    </div>
                

             {{-- form berkas KK --}}
            <div class="card mt-5" style="border-color:#AED6F1; padding:5px 5px; ">
                <div class="header-text text-center">  
                        <span class="number"> 4 </span> 
                        <span style="font-size:18px;">Upload Picture</span> 
                </div>
                    
                        <input type="hidden" id="nis_hiddens" value="">
                        <input type="file" name="pict">
                        {{-- submit all form --}}
                      <div class="btn-sub-edit">
                        <button  type="submit" class="btn btn-primary" onclick="submitForms()" style="background-color:#4C9BFB; border:none; width: 130px !important; border-radius: 20px;">Submit</button>
                     </div>
                    </form>
            </div>


         
                  
        </div>  
         
    <!-- Optional JavaScript -->
    <script src="{{ asset('/js/dropzone.js') }}"></script>
    <script src="{{ asset('/js/submit_registrasi_siswa.js')}}"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
</body>
</html>
    
@endsection

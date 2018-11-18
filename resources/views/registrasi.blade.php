<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
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

        .icon {
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
       
    </style>

</head>
<body>
        <nav class="navbar  navbar-light" style="background-color: #FFFFFF;" >
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/logo.svg')}}" alt="logo_simple"  width="50px" height="50px">
            </a>
            <ul class="nav justify-content-center">
                    <li class="nav-item"  style="color:#4C9BFB; font-size:25px; margin-left:270px">
                    Simpel 
                    </li>
            </ul>
            
            <ul class="nav justify-content-end " >
                    <li class="nav-item">
                    <a href="#" class="nav-item-edit">Home</a>
                    </li>
                    <li class="nav-item ">
                    <a  href="#" class="nav-item-edit">Registrasi</a>
                    </li>   
            </ul>
        </div>
              
        </nav>
        <hr style="border-top: 1px solid #D2E9FF ; margin:auto">

    <div class="container">
            <form>
            <div class="card mt-5" style="border-color:#ACD3FB">
               
                <div class="header-text text-center">  
                    <span class="number"> 1 </span> 
                    <span style="font-size:18px;">Form Data Siswa</span> 
               </div>
                    <div class="card-body">
                   
                        <div class="form-group col ">
                            <label for="nama">Nama</label>
                            <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" class="form-control" name="nama_siswa" id="nama" placeholder="Harap diisi">
                            </div>
                            
                        </div>
                        <div class="form-group col">
                            <label for="alamat">Alamat</label>
                            <div class="input-container">
                            <i class="fa fa-home icon"></i>
                            <input type="text" class="form-control" name="alamat_siswa" id="alamat" placeholder="Harap diisi">
                            </div>
                           
                        </div>
                        <div class="form-row ml-2 ">
                            <div class="form-group col mr-4">
                                <label for="nis">NIS</label>
                                <div class="input-container">
                                <i class="far fa-id-card icon"></i>
                                <input type="text" class="form-control" name="nis_siswa" id="nis" placeholder="Harap diisi">
                                </div>
                                    
                            </div>

                            <div class="form-group col mr-3">
                                <label for="telepon">Telepon</label>
                                <div class="input-container">
                                 <i class="fas fa-mobile icon"></i>
                                <input type="text" class="form-control" name="tlp_siswa" id="telepon" placeholder="Harap diisi">
                                </div>
                                   
                            </div>
                            </div>
                        
                            <div class="form-row ml-2 ">
                            <div class="form-group col mr-4">
                                    <label for="tgl">Tanggal lahir</label>
                                    <div class="input-container">
                                        <i class="far fa-calendar-alt icon"></i>
                                        <input type="date" class="form-control" name="tgl_siswa" id="tgl" placeholder="Harap diisi">
                                    </div>

                            </div>
                            <div class="form-group col mr-3">
                                    <label >Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="col-md-2" >
                                                <i class="	fa fa-venus-mars icon" ></i>
                                        </div>
                                        <div class="col-md-4 pt-2" >  
                                            <input type="radio"  id="1" name="jk_siswa" value="Laki-Laki" required>
                                            <label  for="1">Laki-Laki</label>
                                        </div>
                                        <div class="col-md-4 pt-2" >  
                                            <input type="radio"  id="2" name="jk_siswa"  value="Perempuan" required>
                                            <label  for="2">Perempuan</label>
                                        </div>

                                        </div>    
                                    </div> 
                                </div>

                                <div class="form-row ml-2">
                                    <div class="form-group col mr-4">
                                        <label for="email">Email</label>
                                            <div class="input-container">
                                                    <i class="far fa-envelope icon"></i>
                                                    <input type="email" class="form-control" name="email_siswa" id="email" placeholder="Harap diisi">
                                            </div>
                                            
                                    </div>

                                    <div class="form-group col mr-3">
                                            <label for="agama">Agama</label>
                                            <div class="input-container">
                                                <i class="fas fa-church icon"></i>
                                                <select id="agama" name="agama_siswa" class="custom-select" required style="">
                                                <option selected disabled>Pilih Agama</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>     
                       
                     </div>  
                </div>

                <div class="card mt-5" style="border-color:#AED6F1">
               
                        <div class="header-text text-center">  
                                <span class="number"> 2 </span> 
                                <span  style="font-size:18px;">  Form Data Wali</span> 
                           </div>
                            <div class="card-body">
                           
                                <div class="form-group col ">
                                    <label for="nama">Nama</label>
                                    <div class="input-container">
                                    <i class="fa fa-user icon"></i>
                                    <input type="text" class="form-control" name="nama_wali" id="nama" placeholder="Harap diisi">
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group col">
                                    <label for="alamat">Alamat</label>
                                    <div class="input-container">
                                    <i class="fa fa-home icon"></i>
                                    <input type="text" class="form-control" name="alamat_wali" id="alamat" placeholder="Harap diisi">
                                    </div>
                                   
                                </div>
                                <div class="form-row ml-2 ">
                                    <div class="form-group col mr-4">
                                            <label for="tgl">Tanggal lahir</label>
                                            <div class="input-container">
                                                <i class="far fa-calendar-alt icon"></i>
                                                <input type="date" class="form-control" name="tgl_wali" id="tgl" placeholder="Harap diisi">
                                            </div>
                                    </div>
        
                                    <div class="form-group col mr-3">
                                        <label for="telepon">Telepon</label>
                                        <div class="input-container">
                                         <i class="fas fa-mobile icon"></i>
                                        <input type="text" class="form-control" name="tlp_wali" id="telepon" placeholder="Harap diisi">
                                        </div>
                                           
                                    </div>
                                    </div>

                                    <div class="form-group col">
                                        <label >Jenis Kelamin</label>
                                        <div class="row">
                                            <div class="col-sm-1" >
                                                    <i class="	fa fa-venus-mars icon" ></i>
                                            </div>
                                            <div class="col-sm-2 pt-2" >  
                                                <input type="radio"  name="jk_wali" value="Laki-Laki" id="3" required>
                                                <label for="3">Laki-Laki</label>
                                            </div>
                                            <div class="col-sm-2 pt-2" >  
                                                <input type="radio"  name="jk_wali" value="Perempuan" id="4"  required>
                                                <label  for="4">Perempuan</label>
                                            </div>
                                        </div>    
                                    </div> 
                                        
                                    <div class="form-row ml-2">
                                        <div class="form-group col mr-4">
                                            <label for="email">Email</label>
                                                <div class="input-container">
                                                        <i class="far fa-envelope icon"></i>
                                                        <input type="email" class="form-control" name="email_wali"  id="email" placeholder="Harap diisi">
                                                </div>
                                                
                                        </div>
        
                                        <div class="form-group col mr-3">
                                                <label for="agama">Agama</label>
                                                <div class="input-container">
                                                    <i class="fas fa-church icon"></i>
                                                    <select id="agama" name="agama_wali" class="custom-select" required>
                                                    <option selected disabled>Pilih Agama</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    </select>
                                                </div>
                                        </div>
                                        </div>
    
                             </div>  
                        </div>
                        
                        <div class="btn-sub-edit">
                                 <button type="submit" class="btn btn-primary" style="background-color:#4C9BFB; border:none;   width: 130px !important;; border-radius: 20px;" >Submit </button>
                        </div>
                  </form> 
            </div>    
    </div>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>

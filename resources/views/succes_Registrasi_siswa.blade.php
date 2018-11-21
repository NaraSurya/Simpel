<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <title>Document</title>

    

     

</head>
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
            </ul>
        </div>    
    </nav>
   
        <hr style="border-top: 1px solid #D2E9FF ; margin:auto">


        <div class="alert alert-success text-center" role="alert">
            REGISTRASI SUKSES
            Silahkan Cek email anda untuk informasi lebih detail
        </div>
</body>
</html>
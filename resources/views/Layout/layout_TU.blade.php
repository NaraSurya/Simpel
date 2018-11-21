<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Varela+Round" rel="stylesheet">
   <style>
        body{
            background-color: #f5f6fa;
            font-family: 'Varela Round', sans-serif;
        }
        nav{
            background-color: white;
            z-index: 999;
            
        }
        
        
        .navbar-brand{
            color: rgb(190, 190, 190);
        }
        .navbar-brand:hover{
            color:gray;
        }
        .search{
            border-style: none;
            -moz-border-radius:28px;
            -webkit-border-radius:28px;
            border-radius:28px;
            color: white !important;
            background-color: #4c9bfb!important;
            
        }
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white !important;
            opacity: 1; /* Firefox */
        }
        .sidebar{
            background-color: white !important;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100; /* Behind the navbar */
            padding: 60px 0 0; /* Height of navbar */
            width: 5% !important;
            
        }
        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }
        @supports ((position: -webkit-sticky) or (position: sticky)) {
            .sidebar-sticky {
                position: -webkit-sticky;
                position: sticky;
            }
        }
        .sidebar .nav-link {
        font-weight: 500;
        color: #333;
        }
        .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #999;
        }
        .sidebar .nav-link.active {
        color: #007bff;
        }
        .sidebar .nav-link:hover .feather,
        .sidebar .nav-link.active .feather {
        color: inherit;
        }
        .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
        }
        .menu{
            color: #cfd3dc!important;
        }
        .menu:hover{
            background-color: #198cff;
            border-right-color: #333;
            color: white !important;
        }
        [role="main"] {
            padding-top: 48px; /* Space for fixed navbar */
        }
        .search-bar{
            -moz-border-radius:28px;
            -webkit-border-radius:28px;
            border-radius:28px;
            background-color: #4c9bfb !important;
            
        }
        .icon{
            font-size: 1.25rem;
        }
        .icon-form {
            padding: 10px;
            background:#D5EAFF;
            border: 1px solid #FFF;
            color: #80B9FD;
            min-width: 50px;
            text-align: center;
            
        }
        .input-container {
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }
        .active{
            color: #007bff !important;
        }

        .form-control-no-border:focus {
            border-color:#ccc;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        /**
        * Style untuk verifikasi siswa
        */
        .font-color-grey{
            color: #8b93a6!important; 
        }
        .font-raleway{
            font-family: 'Raleway', sans-serif;
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
</head>

  <body>
        <nav class="navbar position-relative flex-md-nowrap  p-2 ">
            <img src="{{asset('img/logo.svg')}}" class="mx-3" alt="logo_simple"  width="35px" height="35px">
            <div class="relative w-25 form-inline justify-content-center search-bar bg-primary">
                <input class=" search form-control form-control-no-border form-control-light form-control-sm w-75 justify-content-center mx-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn d-flex-inline btn-primary rounded-circle ml-auto"><i class="fas fa-search"></i></button>
            </div>
            <ul class="navbar-nav d-flex">

                <li class="nav-item justify-content-end d-flex px-5 ">
                    <a class="nav-link mx-3" href="#"><i class="far fa-bell fa-lg"></i></a>
                    <button class="btn btn-primary d-flex shadow" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                            <div class="d-inline-flex mr-3">
                        
                        <img src="{{asset('img/1.png') }}"  alt="User-Profile-Image" height="25vh" weight="25vw" class="rounded-circle">

                            </div>
                            <div class="d-inline-flex align-items-center ">
                                Gus Agung
                            </div>
                        </div>
                    </button>
                    <div class="dropdown-menu position-absolute fa-ul" style="left:85%"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><span class="fa-li" ><i class="fas fa-check-square"></i></span> Logout </a>   
                    </div>
                </li>
            </ul>
        </nav>
       
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-1 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky d-flex align-items-center justify-content-center">
                        
                        <ul class="nav flex-column flex-fill   text-center">
                            @include('include.nav-TU')
                        </ul>
                    </div>
                </nav>
                <main role="main" class="col-md-11 ml-sm-auto col-lg-11 px-4">
                    @yield('content')
                </main>
            </div>
        </div> 
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
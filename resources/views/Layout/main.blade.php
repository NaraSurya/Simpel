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
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
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
            
        }
        .icon{
            font-size: 1.25rem;
        }
        .active{
            color: #007bff !important;
        }

    </style>
</head>

  <body>
        <nav class="navbar position-relative flex-md-nowrap  p-2 ">
            <a class="navbar-brand col-sm-3 col-md-1 mr-0" href="#">SIMPEL</a>
            <div class="relative w-25 form-inline justify-content-center search-bar bg-primary">
                <input class=" search form-control form-control-light form-control-sm w-75 justify-content-center mx-2 bg-primary" type="text" placeholder="Search" aria-label="Search">
                <button class="btn d-flex-inline btn-primary rounded-circle ml-auto"><i class="fas fa-search"></i></button>
            </div>
           
            <ul class="navbar-nav ">
                <li class="nav-item justify-content-end d-flex px-5 ">
                    <a class="nav-link mx-3" href="#"><i class="far fa-bell fa-lg"></i></a>
                    <button class="btn btn-primary d-flex shadow" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div>
                            <div class="d-inline-flex mr-3">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="d-inline-flex">
                                Gus Agung
                            </div>
                        </div>
                    </button>
                    <div class="dropdown-menu position-absolute align-item-right"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-1 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky d-flex align-items-center justify-content-center">
                        
                        <ul class="nav flex-column flex-fill   text-center">
                            <li class="nav-item  ">
                                <a class="nav-link active  mb-2 icon menu" href="#">
                                    <i class="fas fa-home "></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon mb-2 menu" href="#">
                                    <i class="fas fa-tasks"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon mb-2 menu" href="#">
                                    <i class="fas fa-book-open"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon  mb-2 menu" href="#">
                                    <i class="fas fa-file-alt"></i>
                                </a>
                            </li>
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
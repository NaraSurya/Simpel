<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
        body{
            background-color: rgb(248, 248, 248);
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
        }
        .sidebar{
            background-color: white !important;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100; /* Behind the navbar */
            padding: 60px 0 0; /* Height of navbar */
            
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
            color: gray !important;
        }
        .menu:hover{
            background-color: #198cff;
            color: white !important;
        }
        [role="main"] {
            padding-top: 48px; /* Space for fixed navbar */
        }
        
        .img {
            vertical-align: middle;
            border-style: none;
        }
        .img-radius {
            border-radius: 50%;
            border: 2px solid #fff;
            -webkit-box-shadow: 0 5px 10px 0 rgba(43,43,43,0.2);
            box-shadow: 0 5px 10px 0 rgba(43,43,43,0.2);
        }

        

        
        
        
    </style>
</head>

  <body>
        <nav class="navbar  flex-md-nowrap  p-2 ">
            <a class="navbar-brand col-sm-3 col-md-1 mr-0" href="#">SIMPEL</a>
            <input class=" search form-control form-control-light w-50 justify-content-center mx-2" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav"> 
             <li> 
                <div>
                    <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('img/1.png') }}" class="img-radius" alt="User-Profile-Image" height="50px" weight="50px">
                        <span>Kerte Yasa</span>
                        <i class="feather icon-chevron-down"></i>
                    </div>
                   
                            <ul  style="left:90%; right:0; position:absolute" class="dropdown-menu " data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                        <i class="fas fa-cog"></i> Settings
            
                                    </a>
                                    </li>
                                    
                                    <li>
                                        <a href="auth-sign-in-social.html">
                                                <i class="fas fa-sign-out-alt"></i> Logout
            
                                    </a>
                                    </li>
                                </ul>
                           
                        </li>
                        </ul>
            
            
                    </nav>
                    <div class="container-fluid">
                        <div class="row">
                            <nav class="col-md-1 d-none d-md-block bg-light sidebar">
                                <div class="sidebar-sticky">
                                    
                                    <ul class="nav flex-column my-5 text-center">
                                        <li class="nav-item  ">
                                            <a class="nav-link  mb-2 menu" href="#">
                                                menu 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  mb-2 menu" href="#">
                                                menu 2
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  mb-2 menu" href="#">
                                                menu 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  mb-2 menu" href="#">
                                                menu 4
                                            </a>
                                        </li>
                                    </ul>
                    </div>
                   
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
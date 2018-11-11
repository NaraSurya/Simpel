<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
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
    </style>
</head>

  <body>
        <nav class="navbar  flex-md-nowrap  p-2 ">
            <a class="navbar-brand col-sm-3 col-md-1 mr-0" href="#">SIMPEL</a>
            <input class=" search form-control form-control-light w-50 justify-content-center mx-2" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav ">
                <li class="nav-item mr-auto d-flex px-5 ">
                    <a class="nav-link mx-3" href="#">icon</a>
                    <a class="nav-link mx-3" href="#">user</a>
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
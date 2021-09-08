<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Portfolio') }}</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/unicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{asset('assets/css/tooplate-style.css')}}">
    
<!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->

  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light" style="box-shadow:0px 0px 40px #888888;  padding:0px"">
        <div class="container" >
            <a class="navbar-brand" href="{{route('Home.index')}}" ><i class='uil uil-user'></i> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                        <a href="{{route('Home.index')}}" class="nav-link"><span data-hover="Home">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('AboutUs.index')}}" class="nav-link"><span data-hover="A-propos">A-propos</span></a>
                    </li>
                   <!-- <li class="nav-item">
                        <a href="{{route('Services.index')}}" class="nav-link"><span data-hover="Services">Services</span></a>
                    </li>-->
                    <div class="dropdown">
                        <li class="nav-item">
                            <a class="nav-link hide-navigation-item" href="#services" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" >
                                <span data-hover="Services">Services</span>
                            </a>
                            <!--<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">App Mobiles</a>
                                <a class="dropdown-item" href="#">Web Developement</a>
                                <a class="dropdown-item" href="#">Web Design</a>
                            </div>-->
                            
                           
                        
                             </li>
                    </div>

                    <li class="nav-item hide-navigation-item">
                        <a href="#project" class="nav-link"><span data-hover="Projets">Projets</span></a>
                    </li>
                    <li class="nav-item hide-navigation-item">
                        <a href="#resume" class="nav-link"><span data-hover="Compétences">Compétences</span></a>
                    </li>
                    <li class="nav-item hide-navigation-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                    

                
            </div>
        </div>
    </nav>

   @yield('content')

    <!-- FOOTER -->
     <footer class="footer py-5" style="background-color:#ffc200">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">   
                                                     
                        <p class="copyright-text text-center" style="color:white">Copyright &copy; 2021 OUAZZANE . All rights reserved</p>
                        <p class="copyright-text text-center" style="color:white">Designed by <a rel="nofollow" href="" style="color:white">Oumayma</a></p>
                    </div>

               </div>
          </div>
     </footer>

    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/Headroom.js')}}"></script>
    <script src="{{asset('assets/js/jQuery.headroom.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

  </body>
</html>
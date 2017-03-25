<!DOCTYPE html>
<!--**********************************************************************
* FILENAME :        HAMBRIZZA | App Blade             
*
* DESCRIPTION :
*       Hambrizza App Blade. 
*
*       © Copyright Hambrizza 2017. All rights reserved.
* 
* AUTHOR :    Richard Maya, Benjamín Sánchez        
* 
* START DATE :    24 Mar 17     RELEASE DATE :     
*
* VERSION : 1.0
*
*-->
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- FAVICONS -->
    
    <!-- SEO INFO -->
    <meta name="keywords" content="hambrizza, pizza artesanal, pizza metepec, pizza toluca, hamburguesas metepec, hamburguesas toluca, mexico, méxico, guadalajara, jalisco, ciudad, pizza">
    <meta name="author" content="Richard Maya, Benjamín Sánchez">
    
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
<!--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
    <!-- FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">    

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
<!------------------- NAV BAR 
--------------------------------------------------------->
<section id="menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="#" class="navbar-logo"><img src="assets/images/hambrizza-logo.png" alt="hambrizza-logo"></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                       
                       @if (Auth::guest())
                       
                        <li class="nav-item nav-btn">
                            <a class="nav-link btn btn-secondary btn-white-outline" href="{{ url('/register') }}">Crear Cuenta</a>
                        </li>
                        <li class="nav-item nav-btn">
                            <a class="nav-link btn btn-secondary btn-white-outline" href="{{ url('/login') }}">Iniciar Sesión</a>
                        </li>
                        
                        @else
                        
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            
                        @endif
                        
                    </ul>
                    
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>
    
    @yield('content')

</section>

<!------------------- SCRIPTS 
---------------------------------------------------------> 
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

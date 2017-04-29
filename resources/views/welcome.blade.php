<!DOCTYPE html>
<!--**********************************************************************
* FILENAME :        HAMBRIZZA | Index             
*
* DESCRIPTION :
*       Hambrizza home page. 
*
*       © Copyright Hambrizza 2017. All rights reserved.
* 
* AUTHOR :    Richard Maya, Benjamín Sánchez        
* 
* START DATE :    09 Mar 17     RELEASE DATE :     
*
* VERSION : 1.0
*
*-->
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SITE TITLE -->
    <title>Pizza Artesanal Horneada | Toluca, Metepec, Guadalajara | HAMBRIZZA</title>
        
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-touch-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon-180x180.png') }}" />
        
    <!-- SEO INFO -->
    <meta name="description" content="Hambrizza es una empresa productora de pizzas artesanales 100% mexicana, decicada a proveer y distribuir a cualquier negocio en Toluca, Metepec y Guadalajara. Pizza artesanal, Pizza individual, Pizza congelada, Pizza Horenada, Pizza Casera. Rescatando las bases de la panadería tradicional mexicana, logramos obtener un alimento con un sabor inigualable.">
    <meta name="keywords" content="hambrizza, pizza artesanal, pizza individual, pizza congelada, pizza horneada, pizza casera, pizza pepperoni horneada, pizza hawaiana horneada, pizza cuatro estaciones horneada, pizza metepec, pizza toluca, hamburguesas metepec, hamburguesas toluca, rica comida rápida, comida precalentada, naucalpan, coacalco, ecatepec, guadalajara, jalisco, ciudad">
    <meta name="author" content="Richard Maya, Benjamín Sánchez">
        
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-material-design-font/css/material.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/et-line-font-plugin/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/animate.css/animate.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/mobirise-gallery/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
    
    <style>
        input:focus, textarea:focus{
            box-shadow: 0 0 10px rgba(235, 106, 96, 0.7);
            border: 1px solid rgba(235, 106, 96, 1);
        }
    </style>

    <!-- FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body>
<!------------------- NAV BAR 
--------------------------------------------------------->
<section id="menu-0">
    
    @if (Route::has('login'))

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="{{ url('/') }}" title="hambrizza-pizza-artesanal-toluca-metepec-guadalajara" class="navbar-logo"><img src="assets/images/hambrizza-logo.png" alt="hambrizza-logo-pizza-artesanal"></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>
                    
                    @if (Auth::check())
                        <a href="{{ url('/home') }}" title="hambrizza-pizza-artesanal-toluca-metepec-guadalajara">Home</a>
                    @else

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item nav-btn">
                            <a class="nav-link btn btn-secondary btn-white-outline" href="{{ url('/register') }}" title="hambrizza-crear-cuenta">Crear Cuenta</a>
                        </li>
                        <li class="nav-item nav-btn">
                            <a class="nav-link btn btn-secondary btn-white-outline" href="{{ url('/login') }}" title="hambrizza-iniciar-sesión">Iniciar Sesión</a>
                        </li>
                    </ul>
                    
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>
                    
                    @endif

                </div>
            </div>

        </div>
    </nav>
    
    @endif

</section>

<!------------------- VIDEO BG 
--------------------------------------------------------->
<section class="mbr-section mbr-section-hero mbr-section-full mbr-section-with-arrow mbr-after-navbar" id="header4-1" data-bg-video="https://www.youtube.com/watch?v=GMQGPwi3mHI">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-xs-12 text-xs-center">

                    <h1 class="mbr-section-title display-1" id="coverTitle">Hambrizza</h1>
                    <p class="mbr-section-lead lead" id="coverSubtitle">Pizza Artesanal 100% Mexicana.</p>
                    <div class="mbr-section-btn"> <a class="btn btn-lg btn-primary" href="#header3-e">Ver Nuestros Productos</a></div>
                </div>
            </div>
        </div>
    </div>

</section>    

<!------------------- PRODUCTS 
--------------------------------------------------------->
<section class="mbr-section mbr-section__container article" id="header3-e" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2" style="margin-top:50px;">Nuestros Productos</h3>
                <small class="mbr-section-subtitle" style="font-family:Open Sans;">Conoce nuestra variedad de pizzas horneadas.</small>
            </div>
        </div>
    </div>
</section>

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-8" style="background-color: rgb(255, 255, 255);">
  
   <div class="row" id="compra-final">
        <div class="col-xs-6 text-xs-center">
            <h5 id="final-price">Compra total: $180.00</h5><span class="icon-basket" style="color:#EB6A60; font-weight:bold; font-size:120%;"></span>
        </div>
        <div class="col-xs-6 text-xs-center">
            <button type="submit" class="btn btn-primary" style="margin-top:50px;">ORDENAR</button>
        </div>
    </div>
   
   <form action="#" method="post" data-form-title="ORDER-FORM">
     
    <div class="mbr-cards-row row">
       
        <!-- Pizza Hawaiana -->
        <div class="mbr-cards-col col-xs-12 col-md-6 col-lg-3" style="padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                 
                  <div class="card-img">
                      <img src="assets/images/pizza-hawaiana.png" class="hambrizza-pizza-hawaiana" alt="hambrizza-pizza-hawaiana">
                  </div>
                  
                  <div class="card-block">
                    <h4 class="card-title">Pizza Hawaianna</h4>
                    <h5 class="card-subtitle">Salsa marinada clásica con jamón y piña dulce.</h5>
                    
                    <!-- Individual -->   
                    <div class="form-group order-form">
                        <label class="form-control-label" for="hawaiana-individual">Tamaño: Individual $20</label>
                        <input type="number" class="form-control" name="hawaiana-individual" required="" data-form-field="hawaiana-individual" id="hawaiana-individual" placeholder="0" min="0">
                    </div>
                    
                    <!-- Mediana -->   
                    <div class="form-group order-form">
                        <label class="form-control-label" for="hawaiana-mediana">Tamaño: Mediana $25</label>
                        <input type="number" class="form-control" name="hawaiana-mediana" required="" data-form-field="hawaiana-mediana" id="hawaiana-mediana" placeholder="0" min="0">
                    </div>
                    
                  </div>
                </div>
            </div>
        </div>
        
        <!-- Pizza Pepperoni -->
        <div class="mbr-cards-col col-xs-12 col-md-6 col-lg-3" style="padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                   
                    <div class="card-img">
                        <img src="assets/images/pizza-pepperoni.png" class="hambrizza-pizza-pepperoni" alt="hambrizza-pizza-pepperoni">
                    </div>
                    
                    <div class="card-block">
                        <h4 class="card-title">Pizza de Pepperoni</h4>
                        <h5 class="card-subtitle">Salsa marinada clásica con auténtico pepperoni de estilo antiguo.</h5>
                        
                        <!-- Individual -->   
                        <div class="form-group order-form">
                            <label class="form-control-label" for="pepperoni-individual">Tamaño: Individual</label>
                            <input type="number" class="form-control" name="pepperoni-individual" required="" data-form-field="pepperoni-individual" id="pepperoni-individual" placeholder="0" min="0">
                        </div>
                    
                        <!-- Mediana -->   
                        <div class="form-group order-form">
                            <label class="form-control-label" for="pepperoni-mediana">Tamaño: Mediana</label>
                            <input type="number" class="form-control" name="pepperoni-mediana" required="" data-form-field="pepperoni-mediana" id="pepperoni-mediana" placeholder="0" min="0">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- Pizza 4 estaciones -->
        <div class="mbr-cards-col col-xs-12 col-md-6 col-lg-3" style="padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                   
                    <div class="card-img">
                        <img src="assets/images/pizza-cuatro-estaciones.png" class="hambrizza-pizza-cuatro-estaciones" alt="hambrizza-pizza-cuatro-estaciones">
                    </div>
                    
                    <div class="card-block">
                        <h4 class="card-title">Pizza 4 Estaciones</h4>
                        <h5 class="card-subtitle">Salsa marinada clásica, pepperoni, champiñones frescos, pimientos verdes frescos y cebollas rojas frescas.</h5>
                        
                        <!-- Individual -->   
                        <div class="form-group order-form">
                            <label class="form-control-label" for="estaciones-individual">Tamaño: Individual</label>
                            <input type="number" class="form-control" name="estaciones-individual" required="" data-form-field="estaciones-individual" id="estaciones-individual" placeholder="0" min="0">
                        </div>
                    
                        <!-- Mediana -->   
                        <div class="form-group order-form">
                            <label class="form-control-label" for="estaciones-mediana">Tamaño: Mediana</label>
                            <input type="number" class="form-control" name="estaciones-mediana" required="" data-form-field="estaciones-mediana" id="estaciones-mediana" placeholder="0" min="0">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- Pizza a la Carta -->
        <div class="mbr-cards-col col-xs-12 col-md-6 col-lg-3" style="padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                   
                    <div class="card-img">
                        <img src="assets/images/pizza-a-la-carta.png" class="hambrizza-pizza-a-la-carta" alt="hambrizza-pizza-a-la-carta">
                    </div>
                    
                    <div class="card-block">
                        <h4 class="card-title">Pizza a la Carta</h4>
                        <h5 class="card-subtitle">Crea una pizza a tu gusto eligiendo entre nuestras deliciosas salsas e ingredientes.</h5>
                        
                        <!-- Ingredientes -->   
                        <div class="form-group order-form">
                            <label class="form-control-label" for="carta-ingredientes">Elige tus ingredientes:</label>
                            <div style="text-align:left; padding-left:15%;">
                                <small>Jamón</small><input type="checkbox" name="carta-jamon" value="jamon" data-form-field="carta-jamon" id="carta-jamon"><br>
                                <small>Pepperoni</small><input type="checkbox" name="carta-pepperoni" value="pepperoni" data-form-field="carta-pepperoni" id="carta-pepperoni"><br>
                                <small>Piña</small><input type="checkbox" name="carta-pepperoni" value="pepperoni" data-form-field="carta-pepperoni" id="carta-pepperoni"><br>
                                <small>Pimiento</small><input type="checkbox" name="carta-pepperoni" value="pepperoni" data-form-field="carta-pepperoni" id="carta-pepperoni"><br>
                                <small>Champiñones</small><input type="checkbox" name="carta-pepperoni" value="pepperoni" data-form-field="carta-pepperoni" id="carta-pepperoni"><br>
                                <small>Cebolla</small><input type="checkbox" name="carta-pepperoni" value="pepperoni" data-form-field="carta-pepperoni" id="carta-pepperoni">
                            </div>
                        </div>
                        
                        <!-- Individual -->   
                        <div class="form-group order-form">
                            <label class="form-control-label" for="carta-individual">Tamaño: Individual</label>
                            <input type="number" class="form-control" name="carta-individual" required="" data-form-field="carta-individual" id="carta-individual" placeholder="0" min="0">
                        </div>
                    
                        <!-- Mediana -->   
                        <div class="form-group order-form">
                            <label class="form-control-label" for="carta-mediana">Tamaño: Mediana</label>
                            <input type="number" class="form-control" name="carta-mediana" required="" data-form-field="carta-mediana" id="carta-mediana" placeholder="0" min="0">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    
    </form>
</section>

<!------------------- PROMOS 
--------------------------------------------------------->
<section class="mbr-section mbr-section__container article" id="header3-9" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Paquetes y Promociones</h3>
            </div>
        </div>
    </div>
</section>
   
<section class="mbr-section mbr-section__container article" id="gallery2-d" style="background-color: rgb(255, 255, 255); padding-top: 6rem; padding-bottom: 6rem;">
    <div class="container">
        <div class="row">  
            <div class="col-xs-12 col-md-6 text-xs-center">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHAMBRIZZA%2Fposts%2F1826575110893423&width=500" width="500" height="517" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
            <div class="col-xs-12 col-md-6 text-xs-center">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHAMBRIZZA%2Fposts%2F1822516144632653&width=500" width="500" height="498" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
            <div class="clearfix visible-xs-block"></div>
            <div class="col-xs-12 col-md-6 text-xs-center">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHAMBRIZZA%2Fposts%2F1815248195359448&width=500" width="500" height="517" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>    
            <div class="col-xs-12 col-md-6 text-xs-center">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHAMBRIZZA%2Fposts%2F1814881112062823&width=500" width="500" height="498" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>           
        </div>
    </div>
</section>
   
<!------------------- ABOUT 
--------------------------------------------------------->
<section class="mbr-info mbr-info-extra mbr-section mbr-section-md-padding" id="msg-box1-f" style="background-color: #FEEF8F; padding-top: 90px; padding-bottom: 90px;">
    
    <div class="container">
        <div class="row">

            <div class="mbr-table-md-up">
                <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                  
                   <h3 class="mbr-info-title mbr-section-title display-2">Acerca</h3>
                   
                   <p style="color: #EB6A60;">Somos una empresa productora de <a target="_blank" href="https://www.facebook.com/HAMBRIZZA/" title="Hambrizza-pizzas-horneadas-metepec-toluca-guadalajara-facebook">pizzas artesanales</a> 100% mexicana, dedicada a proveer y distribuir a cualquier negocio interesado en brindar alimentos de calidad a sus clientes.</p>
                   <p style="color: #EB6A60;">Utilizamos únicamente productos frescos y sin conservadores.</p>
                   <p style="color: #EB6A60;">Rescatando las bases de la panadería tradicional mexicana, logramos obtener un alimento con un sabor inigualable.</p>
                   
                    <h2 class="mbr-info-subtitle mbr-section-subtitle" style="padding-top:0px; color: #E7452E;">Hambrizza… pizza artesanal 100% mexicana.</h2>
                    
                </div>

                <div class="mbr-table-cell col-lg-4">
                    <div class="text-xs-center">
                        <img alt="" src="assets/images/pizza-pepperoni.png" style="width:100%;" alt="hambrizza-pizza-hawaiana-horneada">
                    </div>
                </div>
            </div>


        </div>
        <br>
        <div class="row">
            <div class="text-xs-center">
                <small class="mbr-section-subtitle" style="color: #E7452E; font-family: hambrizza;">Conoce más sobre nosotros.</small>
                <iframe class="col-xs-12 col-md-6 col-md-offset-3" height="300" src="https://www.youtube.com/embed/GMQGPwi3mHI" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!------------------- CUSTOMERS 
--------------------------------------------------------->
<!--
<section class="mbr-section" id="testimonials1-g" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">Nuestros Clientes</h3>
                        <small class="mbr-section-subtitle">Actualmente distribuimos a # locales dentro del Estado de México.</small>
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
-->
               
                <!-- La Galería -->
<!--
                <div class="col-xs-12 col-lg-4">
                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face3.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">La Galería</div>
                            <small class="mbr-author-desc">Metepec</small>
                        </div>
                    </div>
                </div>
-->
                
                <!-- Lugar 2 -->
<!--
                <div class="col-xs-12 col-lg-4">
                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face3.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Nombre</div>
                            <small class="mbr-author-desc">Ubicación</small>
                        </div>
                    </div>
                </div>
-->
                
                <!-- Lugar 3 -->
<!--
                <div class="col-xs-12 col-lg-4">
                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face3.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Nombre</div>
                            <small class="mbr-author-desc">Ubicación</small>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>
-->

<!------------------- CONTACT 
---------------------------------------------------------> 
<section class="mbr-section" id="form1-h" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">Contacto</h3>
                    <small class="mbr-section-subtitle">Hablemos de negocios.</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">

                    <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">¡Gracias por ponerte en contacto con nosotros! En breve nos comunicaremos contigo.</div>
                    </div>

                    <form action="mailto:hambrizza@gmail.com" method="post" data-form-title="CONTACT-FORM">

                        <!--<input type="hidden" value="0NxzLcH1OSvDzcaF5+7DpvaVgkS363oFi/dw4VPoqVTiqctWnPlc0d/dU9WML2/53V/fWtOFKW2DPCxoPb9G5aPlB9cZ5pSEX3ZXS+szUN1T28K+PPRBgL8LINUfnp9U" data-form-email="true">-->

                        <div class="row row-sm-offset">
                            
                            <!-- Nombre -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-h-name">Nombre<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="nombre" required="" data-form-field="nombre" id="form2-h-nombre">
                                </div>
                            </div>
                            
                            <!-- Correo -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-h-email">Correo<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="correo" required="" data-form-field="correo" id="form2-h-correo">
                                </div>
                            </div>

                            <!-- Empresa -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-h-phone">Empresa<span class="form-asterisk">*</span></label>
                                    <input type="tel" class="form-control" name="empresa" required="" data-form-field="empresa" id="form2-h-empresa">
                                </div>
                            </div>

                        </div>

                       <!-- Mensaje -->
                        <div class="form-group">
                            <label class="form-control-label" for="form1-h-message">Mensaje<span class="form-asterisk">*</span></label>
                            <textarea class="form-control" name="mensaje" required="" rows="7" data-form-field="mensaje" id="form2-h-mensaje"></textarea>
                        </div>

                        <div class="text-xs-center"><button type="submit" class="btn btn-primary">ENVIAR</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!------------------- FOOTER 
--------------------------------------------------------->
<section class="mbr-section mbr-section-md-padding" id="social-buttons4-6" style="background-color: #E7452E; padding-top: 40px; padding-bottom: 0px;">
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2" style="color:#FEE441;">Síguenos</h3>
                <div>
                    <a class="btn btn-social" title="hambrizza-pizza-artesanal-facebook" target="_blank" href="https://www.facebook.com/HAMBRIZZA/">
                        <i class="socicon socicon-facebook"></i>
                    </a> 
<!--
                    <a class="btn btn-social" title="Twitter" target="_blank" href="https://twitter.com/">
                        <i class="socicon socicon-twitter"></i></a> 
                    <a class="btn btn-social" title="Google+" target="_blank" href="https://plus.google.com/">
                        <i class="socicon socicon-googleplus"></i></a> 
-->
                    <a class="btn btn-social" title="hambrizza-pizza-artesanal-youtube" target="_blank" href="https://www.youtube.com/channel/UChmOkM01BR31cAiThnbJ3Ag">
                        <i class="socicon socicon-youtube"></i>
                    </a> 
                    
                    <a class="btn btn-social" title="hambrizza-pizza-artesanal-correo" href="mailto:hambrizza@gmail.com">
                        <i class="socicon socicon-mail"></i>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-i" style="background-color: #E7452E; padding-top: 0px; padding-bottom: 0px;">
    
    <div class="container">
       <div class="text-xs-center">
<!--
            <nav>
                <a href="#" style="color:#FEE441; text-decoration:underline;">Inicio</a>
                <a href="#" style="color:#FEE441;">|</a>
                <a href="#" style="color:#FEE441; text-decoration:underline;">Términos y Condiciones</a>
                <a href="#" style="color:#FEE441;">|</a>
                <a href="#" style="color:#FEE441; text-decoration:underline;">Aviso de Privacidad</a>
            </nav><br>
-->
            <p style="color:#FEE441;">© HAMBRIZZA | Todos los derechos reservados 2017.</p> <br>
            
            <img alt="" class="img-responsive" src="assets/images/hambrizza-footer.png" style="width: 20%;">
       </div>
    </div>
</footer>

<!-- BACK TO TOP -->
<input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;" title="hambrizza-pizza-artesanal-mexicana"><i class="mbr-arrow-up-icon"></i></a></div>

<!------------------- SCRIPTS 
--------------------------------------------------------->      
<script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/tether/tether.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/smooth-scroll/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/dropdown/js/script.min.js') }}"></script>
<script src="{{ asset('assets/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('assets/viewportChecker/jquery.viewportchecker.js') }}"></script>
<script src="{{ asset('assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ asset('assets/masonry/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js') }}"></script>
<script src="{{ asset('assets/theme/js/script.js') }}"></script>
<script src="{{ asset('assets/mobirise-gallery/player.min.js') }}"></script>
<script src="{{ asset('assets/mobirise-gallery/script.js') }}"></script>
<script src="{{ asset('assets/formoid/formoid.min.js') }}"></script>

</body>
</html>

<!--**********************************************************************
* FILENAME :        HAMBRIZZA | Log-In             
*
* DESCRIPTION :
*       Hambrizza Log In. 
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
<head>
    <!-- SITE TITLE -->
    <title>HAMBRIZZA | Iniciar Sesión</title>
        
    <!-- SEO INFO -->
    <meta name="description" content="Hambrizza | Iniciar Sesión.">
    
    <style>
        label{ color: #FEEF8F; }
        small{ color: #FEE441 !important;}
        input:focus{
            box-shadow: 0 0 10px rgba(235, 106, 96, 0.7);
            border: 1px solid rgba(235, 106, 96, 1);
        }
    </style>
</head>
@extends('layouts.app')

@section('content')

<!------------------- COVER 
--------------------------------------------------------->
<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="form1-m" style="background-image: url(assets/images/hambrizza-bg.jpg); padding-top: 120px; padding-bottom: 120px;">
   
   <div class="mbr-overlay" style="opacity: 0.35; background-color:black;"></div>
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2" style="color:#FEE441;
    text-shadow: -3px 3px 5px #E7452E;">Iniciar Sesión</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4 col-md-offset-2">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="form-control-label" for="email">Correo:<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" data-form-field="Email" id="email" value="{{ old('email') }}" required autofocus>
                                    
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="form-control-label" for="password">Contraseña:<span class="form-asterisk">*</span></label>
                                    <input type="password" class="form-control" name="password" required data-form-field="Password" id="password">
                                    
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Iniciar Sesión
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#FEE441">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>
                            
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!------------------- FOOTER 
--------------------------------------------------------->
<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-i" style="background-color: #E7452E; padding-top: 1.75rem; padding-bottom:0px;">
    
    <div class="container">
       <div class="text-xs-center">
           
           <h3 class="mbr-section-title display-2" style="color:#FEE441;">Hambrizza</h3><br>
           <small class="mbr-section-subtitle">Pizza Artesanal 100% Mexicana.</small>
           
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
            
            <img alt="" class="img-responsive" src="{{ asset('assets/images/hambrizza-footer.png') }}" style="width: 20%;">
       </div>
    </div>
</footer>

<!------------------- SCRIPTS 
--------------------------------------------------------->      
<script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/tether/tether.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/smooth-scroll/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/dropdown/js/script.min.js') }}"></script>
<script src="{{ asset('assets/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('assets/viewportChecker/jquery.viewportchecker.js') }}"></script>
<script src="{{ asset('assets/theme/js/script.js') }}"></script>
<script src="{{ asset('assets/formoid/formoid.min.js') }}"></script>

@endsection
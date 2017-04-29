<!--**********************************************************************
* FILENAME :        HAMBRIZZA | Link to Reset             
*
* DESCRIPTION :
*       Hambrizza Send Link to Reset Password. 
*
*       © Copyright Hambrizza 2017. All rights reserved.
* 
* AUTHOR :    Richard Maya, Benjamín Sánchez        
* 
* START DATE :    28 Abr 17     RELEASE DATE :     
*
* VERSION : 1.0
*
*-->
<head>
    <!-- SITE TITLE -->
    <title>HAMBRIZZA | Restablecer Contraseña</title>
        
    <!-- SEO INFO -->
    <meta name="description" content="Hambrizza | Recuperar Contraseña">
    
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
<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="form1-m" style="background-image: url({{ asset('assets/images/hambrizza-bg.jpg') }}); padding-top: 120px; padding-bottom: 120px;">
   
   <div class="mbr-overlay" style="opacity: 0.35; background-color:black;"></div>
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2" style="color:#FEE441;
    text-shadow: -3px 3px 5px #E7452E;">Restablecer Contraseña</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-section mbr-section-nopadding">
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<!--                <div class="panel-heading" style="color:#FEEF8F;">Restablecer Contraseña</div>-->
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Eviar Enlace para Restablecer Contraseña
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>

<!------------------- FOOTER 
--------------------------------------------------------->
<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-i" style="background-color: #E7452E; padding-top: 1.75rem; padding-bottom: 0px;">
    
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

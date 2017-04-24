<!--**********************************************************************
* FILENAME :        HAMBRIZZA | Home             
*
* DESCRIPTION :
*       Hambrizza Home. 
*
*       © Copyright Hambrizza 2017. All rights reserved.
* 
* AUTHOR :    Richard Maya, Benjamín Sánchez        
* 
* START DATE :    31 Mar 17     RELEASE DATE :     
*
* VERSION : 1.0
*
*-->
<head>
    <!-- SITE TITLE -->
    <title>HAMBRIZZA | Crear Cuenta</title>
        
    <!-- SEO INFO -->
    <meta name="description" content="Hambrizza | Crear Cuenta">
    
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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

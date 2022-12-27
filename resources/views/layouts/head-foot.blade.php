<!DOCTYPE html>
<html lang="en">
    
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/leadmark.css') }}">
    <link rel="stylesheet" type="text/css" href="assets/vendors/themify-icons/css/themify-icons.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Portafolio @yield('title')</title>
    
   
   
    
	
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @section('menu')
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img src="assets/imgs/logo.png" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Nuestro Servicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portafolio</a>
                    </li>
                  
                    
                    <li class="nav-item">
                        <a  href="{{ route('contacto') }}"" class="ml-4 nav-link1 btn btn-primary btn-sm rounded">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @show
    <!-- End Of Second Navigation -->
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cv.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="assets/imgs/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
    
    
    <title>CV-Ángel Hernández</title>

   
</head>
<header>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    {{-- <div class="div-header">
        <table clase="table-inicio">
            <tr>
                <td>123</td>
                <td>123</td>
                <td>123s</td>
            </tr>
        </table>
    </div> --}}
    
    <style>
     
       </style>
   
            {{-- <section id="modal" class="modal">
                <div class="modal_fun">

                
                <div class="modal_container">

                    <h2>
                        Angel Hernandez
                    </h2>
                    <p>
                        123
                    </p>
                    
                </div></div>
            </section> --}}
            {{-- @if(\Session::has('mensaje')) --}}

    <script> Swal.fire({
        position: 'center-start',
        icon: 'success',
        title: 'Gracias por tu mensaje!',
        showConfirmButton: false,
        timer: 900
        })
    </script>
    {{-- @endif --}}
    <div class="header-cv " >

        <div class="web" id="particles-js"></div>
        <script src="assets/js/particles.js"></script>
        <script src="assets/js/particulas.js"></script>
        <script  src="assets/js/alertas.js" ></script>
        
        <table class="tabla-header">
            <tbody>
                <tr>
                    <td >
                        <h1 class="animate__animated animate__slideInLeft animate__delay-.5s">
                            
                           Ángel
                        </h1>
                        <h1 style="color: #0D0C18" class="animate__animated animate__slideInLeft animate__delay-1s"> Hernández</h1>
                        
                        <h2 class="color-amarillo animate__animated animate__slideInLeft animate__delay-2s">
                            Ingeniero en Sistemas Computacionales
                            {{-- Web Design --}}
                        </h2>
                        <div animate__fadeIn animate__delay-4s>
                            <img class="logo " src="assets/imgs/logo.png" alt=""><br>

                        </div>
                        {{--<option value="saab"><a href="https://wa.me/+526251058358/?text=tu%20texto%20personalizado">WhatsApp</a></option>--}}
                        {{-- <a href="mailto:angelurquijo10@gmail.com"><img src="assets/imgs/logo-mail-white.png" class="div-logo-white"></a>   
                        
                       <a href="https://wa.me/+526251058358/?text=Hola" target="blank"> <img src="assets/imgs/logo-whats-white.png" class="div-logo-white"></a>
                        <a href="https://www.linkedin.com/in/angel-hernadez-294831213/" target="blank"><img src="assets/imgs/logo-in-white.png" class="div-logo-white"></a>
                        <img src="assets/imgs/logo-in-skype.png" class="div-logo-white"> --}}
                    </td>
                    <td class="hovfot">
                        <div class="foto">
                            <img src="https://angelhernandez.work/assets/imgs/cv.png" alt="">
                        </div>
                        <div>
                            <style>
                                
                                </style>
                            <div class="dropdown">
                                <button class="btn-contacto">Contacto</button>
                                <div class="dropdown-content">
                                <a href="mailto:angelurquijo10@gmail.com"><p>Correo </p></a>
                                <hr style="color:#000">
                                <a href="https://wa.me/+526251058358/?text=¡Hola te tengo una propuesta de trabajo!" target="blank"><p>WhatsApp <i class="icofont-brand-whatsapp"></i></p></a>
                                {{-- <a href=""><p>Telefono <i class="icofont-ui-copy"></i></p></a> --}}
                                <a href="https://github.com/Sr-Hernandez" target="_blank"><p>GitHub </p></a>
                                <a href="https://www.linkedin.com/in/angel-hernadez-294831213/" target="_blank"><p>LinkedIn <i class="icofont-linkedin"></i></p></a>
                                </div>
                              </div>
                          <a href="assets/imgs/CV Angel Hernandez .pdf" download="CV Angel Hernandez FullStack"><button  class="btn-contacto">Descarga mi CV</button></a>
                        </div>
                        
                    </td>
                    <td>
                        <h1 >Perfil</h1>
                        <div id="example"></div>
                        <script type="module" src="{{asset('assets/js/app.js')}}"></script>
                        <p style="line-height: 1.5; font-size:13pt;color: #0D0C18">Ingeniero en sistemas computacionales, egresado del Tecnológico nacional
                            de México <strong>(Campus Cuauhtémoc)</strong> con 2 años de experiencia trabajando como desarrollador.</p>
                    </td>
                </tr>
            </tbody>
        </table>
       {{-- <img src="svg/wave.svg" alt=""> --}}
    </div>
</header>

<body>
    {{-- <div class="loader"></div>
    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
        </script> --}}
    <div class="separator1"></div>
    <div class="menu-2">
       
<table class="tabla-menu-2">
 <div>
       <tr >
        <td >
            <a href="#" ><span>Inicio</span> </a>       </td>
        <td >
         <span>Mas sobre mi</span>
            {{-- <a href="mailto:angelurquijo10@gmail.com" class="a-menu-2"><img src="assets/imgs/logo-whats-white.png" class="div-logo-white"></a> --}}
        </td>
        <td  onclick="mandarmensaje();">

           <a> <span>Dejar un mensaje</span></a>
            {{-- <a href="mailto:angelurquijo10@gmail.com" class="a-menu-2"><img src="assets/imgs/logo-in-white.png" class="div-logo-white"></a> --}}
        </td>
        <td >
            <span>Portafolio</span>
            {{-- <a href="mailto:angelurquijo10@gmail.com" class="a-menu-2"><img src="assets/imgs/logo-mail-white.png" class="div-logo-white"></a> --}}
        </td>
       
    </tr>
 </div>
</table>

<div class="menu-2-separator">


</div>


<script>
      
    
</script>
<div class="div-datos-menu">
    <a  style="text-decoration: none; color:#777" onclick="acciones_menu('resumen')"> <span class="titulos-datos-menu activo" id="res"><i class="icofont-star" style="font-size: 14pt"></i><b>Resumen</b></span></a>


  <a  style="text-decoration: none; color:#777"  onclick="acciones_menu('experiencia')"> <span class="titulos-datos-menu " id="ex"><i class="icofont-star" style="font-size: 14pt"></i><b> Experiencia</b></span></a>

  <a  style="text-decoration: none; color:#777" onclick="acciones_menu('habilidades')"> <span class="titulos-datos-menu " id="ha"><i class="icofont-computer" style="font-size: 14pt"></i><b> Habilidades</b></span></a>

  <a  style="text-decoration: none; color:#777" onclick="acciones_menu('educacion')"><span class="titulos-datos-menu " id="ed"><i class="icofont-certificate" style="font-size: 14pt"></i><b> Certificaciones</b></span></a>

  <a  style="text-decoration: none; color:#777" onclick="acciones_menu('referencias')"> <span class="titulos-datos-menu " id="re"><i class="icofont-info-circle" style="font-size: 14pt"></i><b> Referencias</b></span></a>



</div>
    </div>

   
        
    
    <div class="">
        <table class="tabla-central">

       
       <tr>
        <td rowspan="2" class="tabla-central-izq">


        
        <div class="inf-izquierda">
           <h1> Angel Hernandez </h1>
          
           <span>Full Stack</span> <br><hr>

           <p><i class="icofont-location-pin"></i> Cd. Cuauhtemoc Chih.</p>
           <p> <a href="https://www.angelhernandez.work" target="blank" style="text-decoration: none; color:#464646"><i class="icofont-external-link"></i> angelhernandez.work </a> </p>
        <p ><a  onclick="toastcopiar();"><i class="icofont-phone"></i> <b id="numerotelefono"> 625-105-8358 </b> <i class="icofont-ui-copy"></i></a></p>
        <p><i class="icofont-email"></i> angelurquijo10@gmail.com </p>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.all.min.js"></script>
        <script>
         
        </script>
    </td>
    <td rowspan="2" class="inf-central">
        <div>
           <div class="contenedor-habilidades" style="display:none">

            <div class="elementos-habilidades">

                <div class="card-elementos" style="background-image: url('assets/imgs/aws.jpg')">

                    <div class="textos-elementos">

                        <h3>aws</h3>
                        <p>EC 2</p>
                    </div>
                </div>
                <div class="card-elementos" style="background-image: url('assets/imgs/aws.jpg')">

                    <div class="textos-elementos">

                        <h3>aws</h3>
                        <p>EC 2</p>
                    </div>
                </div>
                <div class="card-elementos" style="background-image: url('assets/imgs/aws.jpg')">

                    <div class="textos-elementos">

                        <h3>aws</h3>
                        <p>EC 2</p>
                    </div>
                </div>
                
                <div class="card-elementos" style="background-image: url('assets/imgs/aws.jpg')">

                    <div class="textos-elementos">

                        <h3>aws</h3>
                        <p>EC 2</p>
                    </div>
                </div>
                <div class="card-elementos" style="background-image: url('assets/imgs/aws.jpg')">

                    <div class="textos-elementos">

                        <h3>aws</h3>
                        <p>EC 2</p>
                    </div>
                </div>
                <div class="card-elementos" style="background-image: url('assets/imgs/aws.jpg')">

                    <div class="textos-elementos">

                        <h3>aws</h3>
                        <p>EC 2</p>
                    </div>
                </div>

            </div>

            <div class="elementos-desc">

            </div>
           
           </div>
        </div>
        {{-- div general --}}
        <div id="div-general" >
       
                    <div class="card-prin" id="div-experiencia">
                       
                  <div class="div-datos">
                    <p class="titulos mar-1-r"><i class="icofont-star" style="font-size: 14pt"></i>&nbsp;Experiencia</p>
                   <span class="lugar"><b> Materiales del Norte </b></span> <span class="puesto"> desarrollador /</span>  <span class="p-fechas">Ago. 2020 - Actualidad</span> 
                  </div>
                
                <p class="p-1">Proyectos en equipo:</p>
                <p class="p-2">- eCommerce <a class="color-amarillo" href="https://muchomaterial.com" target="blank">muchomaterial.com</a> <span class="puesto"> (Backend & Frontend)</span></p>
                <p class="p-3">Tienda online diseñada con el framework <b>Laravel</b> y un modelo vista controlador <b> (MVC)</b></span></p>
                <p class="p-3"> conectada con un api interna para mostrar la informacion de productos en tiempo real</p>
                <br>
                <p class="p-2">- eCommerce <a class="color-amarillo" href="https://materialesdelnorte.mx" target="blank">materialesdelnorte.mx</a><span class="puesto"> (Backend & Frontend)</span></p>

                
                <div class="div-datos">
                    <span class="lugar"><b>Proyecto personal</b></span> <span class="puesto">fullstack /</span>  <span class="p-fechas">Actualidad</span>
                </div>
                    <p class="p-2">-<u><a href="https://www.angelhernandez.work" target="blank" class="color-amarillo">angelhernandez.work</a></u><span class="puesto"> (FullStack)</span> </p>
           
                    
               <div class="card-sec div_din_invisible" id="div-experiencia-t1">
                
          <div class="div-datos">

            
            <p class="titulos mar-1-r"><i class="icofont-star" style="font-size: 14pt"></i>&nbsp;Web | Laravel | Html | Css | JavaSript</p>
           <span class="lugar"><b> muchomaterial.com</b></span> <span class="puesto"> desarrollador /</span>  <span class="p-fechas">Ago. 2020 - Actualidad</span> 
          </div>
        
        <p class="p-1">Proyectos en equipo:</p>
        <p class="p-2">- eCommerce <a class="color-amarillo" href="https://muchomaterial.com" target="blank">muchomaterial.com</a> <span class="puesto"> (Backend & Frontend)</span></p>
        <p class="p-3">Tienda online diseñada con el framework <b>Laravel</b> y un modelo vista controlador <b> (MVC)</b></span></p>
        <p class="p-3"> conectada con un api interna para mostrar la informacion de productos en tiempo real</p>
        <br>
        <p class="p-2">- eCommerce <a class="color-amarillo" href="https://materialesdelnorte.mx" target="blank">materialesdelnorte.mx</a><span class="puesto"> (Backend & Frontend)</span></p>

        
        <div class="div-datos">
            <span class="lugar"><b>Proyecto personal</b></span> <span class="puesto">fullstack /</span>  <span class="p-fechas">Actualidad</span>
        </div>
        <p class="p-2">-<u><a href="https://www.angelhernandez.work" target="blank" class="color-amarillo">angelhernandez.work</a></u><span class="puesto"> (FullStack)</span> </p>
   
            
       </div>
               </div>





               <div id="div-habilidades">

               
               
               <div class="card-prin" id="div-habtec">
                <hr style="width: 50%; margin: 0%">
                <p class="titulos"><i class="icofont-architecture-alt color-amarillo" style="font-size: 14pt"></i> </i>&nbsp;HABILIDADES TECNICAS</p>
           
        <p class="p-2">C#, .NET, HTML, CSS, Java Script, Laravel, </p>
        <p class="p-2">Uso de IDE, PHP, SQL, MySQL, GIT, 
        <p class="p-2">AWS(EC2), SRCUM, Desktop Apps,Photoshop.</p>


        </div>


               <div class="card-prin" id="div-habsoc">
                

                <hr style="width: 50%; margin: 0%">
                <p class="color-amarillo"><i class="icofont-users-social color-amarillo" style="font-size: 14pt"></i>&nbsp;HABILIDADES SOCIALES</p>
           
            
            <p class="p-2">Trabajo en equipo, Comunicación,</p>
            <p class="p-2">  Paciencia, Aprendizaje rápido, Creativo</p>
            <p class="p-2">     Resolución de problemas, trabajo bajo</p>
            <p class="p-2">   presión, Ágil, Gusto por resolver</p>
            <p class="p-2">  problemas.</p>

            </div>
        </div>
          
                    <div class="card-prin" id="div-educacion">
                        <hr style="width: 50%; margin: 0%">
                    <div class="div-datos">
                        <p class="titulos"><i class="icofont-graduate-alt" style="font-size: 14pt"></i>&nbsp;Educacíon</p>
                    </div>
                    <div class="div-datos">
                    <span class="lugar"><b>CBTa 124</b></span><span class="puesto"> Técnico en informatica /</span><span class="p-fechas"> 2013 - 2016</span>
                    </div>
                    <div class="div-datos">
                        
                        <span class="lugar" ><b>TecNM</b> </span><span class="puesto"> Ingeniero en Sistemas /</span>   <span class="p-fechas">2016 - 2020</span>
                    </div>
                    </div>
                    
                  
              
                   
            
                    <div class="card-prin" id="div-referencia"> 
                        <hr style="width: 50%; margin: 0%">
                        <p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;REFERENCIAS</p>
                    {{-- poner link a materiales --}}
                    {{-- <p class="p-fechas">Ago. 2020 - Actualidad</p> --}}
                {{-- <p><b>Materiales</b> del Norte / Desarrollador</p>
                <p class="p-1">Proyectos en equipo:</p> --}}
                <p class="p-2" ><b>Materiales del Norte</b> es un home center dedicado a la venta de </p>
                <p class="p-2" >materiales para la construcción que actualmente cuenta con 5 </p>
                <p class="p-2" >sucursales en el estado de Chihuahua</p>

                </p></div>
         

                    <div class="card-prin" id="div-hob">
                        <p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;INTERESES Y HOBBIES</p>
                   
                    
                   <p><i class="icofont-game"></i>&nbsp<i class="icofont-music"></i> &nbsp<i class="icofont-brand-redbull"></i></p>
                  
                    </div>
                    
              
                </div>



                <div id="div-general-experiencia" class="div_din_invisible"  >
       
                    <div class="card-prin" id="div-experiencia">
                       
                  <div class="div-datos">
                    <p class="titulos mar-1-r"><i class="icofont-star" style="font-size: 14pt"></i>&nbsp;Experiencia</p>
                   <span class="lugar"><b> Materiales del Norte </b></span> <span class="puesto"> desarrollador /</span>  <span class="p-fechas">Ago. 2020 - Actualidad</span> 
                  </div>
                
                <p class="p-1">Proyectos en equipo:</p>
                <p class="p-2">- eCommerce <a class="color-amarillo" href="https://muchomaterial.com" target="blank">muchomaterial.com</a> <span class="puesto"> (Backend & Frontend)</span></p>
                <p class="p-3">Tienda online diseñada con el framework <b>Laravel</b> y un modelo vista controlador <b> (MVC)</b></span></p>
                <p class="p-3"> conectada con un api interna para mostrar la informacion de productos en tiempo real</p>
                <br>
                <p class="p-2">- eCommerce <a class="color-amarillo" href="https://materialesdelnorte.mx" target="blank">materialesdelnorte.mx</a><span class="puesto"> (Backend & Frontend)</span></p>

                
                <div class="div-datos">
                    <span class="lugar"><b>Proyecto personal</b></span> <span class="puesto">fullstack /</span>  <span class="p-fechas">Actualidad</span>
                </div>
                    <p class="p-2">-<u><a href="https://www.angelhernandez.work" target="blank" class="color-amarillo">angelhernandez.work</a></u><span class="puesto"> (FullStack)</span> </p>
           
                    
               <div class="" id="div-experiencia-t1">
                
          <div class="div-datos">

            
            <p class="titulos mar-1-r"><i class="icofont-star" style="font-size: 14pt"></i>&nbsp;Web | Laravel | Html | Css | JavaSript</p>
           <span class="lugar"><b> muchomaterial.com</b></span> <span class="puesto"> desarrollador /</span>  <span class="p-fechas">Ago. 2020 - Actualidad</span> 
          </div>
        
        <p class="p-1">Proyectos en equipo:</p>
        <p class="p-2">- eCommerce <a class="color-amarillo" href="https://muchomaterial.com" target="blank">muchomaterial.com</a> <span class="puesto"> (Backend & Frontend)</span></p>
        <p class="p-3">Tienda online diseñada con el framework <b>Laravel</b> y un modelo vista controlador <b> (MVC)</b></span></p>
        <p class="p-3"> conectada con un api interna para mostrar la informacion de productos en tiempo real</p>
        <br>
        <p class="p-2">- eCommerce <a class="color-amarillo" href="https://materialesdelnorte.mx" target="blank">materialesdelnorte.mx</a><span class="puesto"> (Backend & Frontend)</span></p>

        
        <div class="div-datos">
            <span class="lugar"><b>Proyecto personal</b></span> <span class="puesto">fullstack /</span>  <span class="p-fechas">Actualidad</span>
        </div>
        <p class="p-2">-<u><a href="https://www.angelhernandez.work" target="blank" class="color-amarillo">angelhernandez.work</a></u><span class="puesto"> (FullStack)</span> </p>
   
            
       </div>
               </div>

                </div>











                <div id="div-general-habilidades" class="div_din_invisible"  style="padding-bottom: 30px">
       
                    <div class="card-prin" id="div-experiencia">
                       
                  <div class="div-datos">
                    <p class="titulos mar-1-r"><i class="icofont-star" style="font-size: 14pt"></i>&nbsp;Experiencia</p>
                   <span class="lugar"><b> Materiales del Norte </b></span> <span class="puesto"> desarrollador /</span>  <span class="p-fechas">Ago. 2020 - Actualidad</span> 
                  </div>
                
                <p class="p-1">Proyectos en equipo:</p>
                <p class="p-2">- eCommerce <a class="color-amarillo" href="https://muchomaterial.com" target="blank">muchomaterial.com</a> <span class="puesto"> (Backend & Frontend)</span></p>
                <p class="p-3">Tienda online diseñada con el framework <b>Laravel</b> y un modelo vista controlador <b> (MVC)</b></span></p>
                <p class="p-3"> conectada con un api interna para mostrar la informacion de productos en tiempo real</p>
                <br>
                <p class="p-2">- eCommerce <a class="color-amarillo" href="https://materialesdelnorte.mx" target="blank">materialesdelnorte.mx</a><span class="puesto"> (Backend & Frontend)</span></p>

                
                <div class="div-datos">
                    <span class="lugar"><b>Proyecto personal</b></span> <span class="puesto">fullstack /</span>  <span class="p-fechas">Actualidad</span>
                </div>
                    <p class="p-2">-<u><a href="https://www.angelhernandez.work" target="blank" class="color-amarillo">angelhernandez.work</a></u><span class="puesto"> (FullStack)</span> </p>
           
                    
               <div class="" id="div-experiencia-t1">
                
          <div class="div-datos">

            
            <p class="titulos mar-1-r"><i class="icofont-star" style="font-size: 14pt"></i>&nbsp;Web | Laravel | Html | Css | JavaSript</p>
           <span class="lugar"><b> muchomaterial.com</b></span> <span class="puesto"> desarrollador /</span>  <span class="p-fechas">Ago. 2020 - Actualidad</span> 
          </div>
        
        <p class="p-1">Proyectos en equipo:</p>
        <p class="p-2">- eCommerce <a class="color-amarillo" href="https://muchomaterial.com" target="blank">muchomaterial.com</a> <span class="puesto"> (Backend & Frontend)</span></p>
        <p class="p-3">Tienda online diseñada con el framework <b>Laravel</b> y un modelo vista controlador <b> (MVC)</b></span></p>
        <p class="p-3"> conectada con un api interna para mostrar la informacion de productos en tiempo real</p>
        <br>
        <p class="p-2">- eCommerce <a class="color-amarillo" href="https://materialesdelnorte.mx" target="blank">materialesdelnorte.mx</a><span class="puesto"> (Backend & Frontend)</span></p>

        
        <div class="div-datos">
            <span class="lugar"><b>Proyecto personal</b></span> <span class="puesto">fullstack /</span>  <span class="p-fechas">Actualidad</span>
        </div>
        <p class="p-2">-<u><a href="https://www.angelhernandez.work" target="blank" class="color-amarillo">angelhernandez.work</a></u><span class="puesto"> (FullStack)</span> </p>
   
            
       </div>
               </div>

                </div>



</td>
<td class="tabla-central-der">
    <div class="sticky">

    
    <div class="inf-derecha">
        <div class="inf-derecha-cont">
          
            <span class="lugar"><b>Objetivo Porofesional</b> </span>
            <span><p>Mi objetivo profecional es aprender y desarrollar habilidades para poder 
            contribuir a proyectos grandes</p>
           </span>
        </div>
    </div>
    <div class="inf-derecha">
        <div class="inf-derecha-cont">
        <span><b>Experiencia en principales lenguajes</b></span>
       
        <div>
            <table class="tabla-softw">
                <tbody>
                    <tr>
                        <td class="td-softw-logo">
                            <img src="assets/imgs/logo_html.png" class="logo-software" alt="">
                        </td>
                        <td >
                         <spans tyle=" color: #F75421;"><b>HTML</b></spans>
                         <div class="progress">
                            <div class="progress-bar" style="width:99%; background: #F75421;">
                                <span class="progress-bar-text">+3 Años</span>
                            </div>
                        </div>
                    </td>
                    
                    </tr>
                  <hr>
                  <tr>
                    <td class="td-softw-logo">
                        <img src="assets/imgs/logo_css.png" class="logo-software" alt="">
                    </td>
                    <td >
                     <span style="color:#3896CF"><b>CSS</b></span>
                     <div class="progress">
                        <div class="progress-bar" style="width:85%;background:#3896CF">
                            <span class="progress-bar-text ">+2 Años</span>
                        </div>
                    </div>

                </td>

                <tr>
                    <td class="td-softw-logo">
                        <img src="assets/imgs/logo_csharp.png" class="logo-software" alt="">
                    </td>
                    <td >
                     <span style=" color: #9B4F97;"><b>C#</b></span>
                     <div class="progress">
                        <div class="progress-bar" style="width:115%; background: #9B4F97;">
                            <span class="progress-bar-text">+4 Años</span>
                        </div>
                    </div>
                </td>
                
                </tr>

                <tr>
                    <td class="td-softw-logo">
                        <img src="assets/imgs/logo_laravel.png"  class="logo-software" alt="">
                    </td>
                    <td style="margin-left5px">
                     <span style=" color: #FF2D20;"><b>Laravel</b></span>
                     <div class="progress">
                        <div class="progress-bar" style="width:85%; background: #FF2D20">
                            <span class="progress-bar-text">+2 Años</span>
                        </div>
                    </div>
                </td>
                
                </tr>
                
                </tr>
                </tbody>
            </table>  
        </div>
        </div>
    </div>
</div>
</td>
</tr>

</table>
    </div>
    <table style="width: 100%;padding-left: 10%">
        <tr>
            <td>
                <div class="card-foot">
                    <p>nivel de ingles</p>
                    <h1>A2</h1>
                </div>
            </td>
            <td>
                <div class="card-foot">
                    <p>nivel de ingles</p>
                    <h1>A2</h1>
                </div>
            </td>
            <td>
                <div class="card-foot">
                    <p>Disponibilidad</p>
                    <h1 style="font-size: 14pt">Inmediata</h1>
                </div>
            </td>
        </tr>
    </table>

    <br>
<br>
<style>
   
</style>

</body>

<div class="footer-basic">
    <footer>
        {{-- <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div> --}}
        {{-- <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul> --}}
        <p class="copyright">Ángel Hernández © 2023</p>
    </footer>
</div>
</html>
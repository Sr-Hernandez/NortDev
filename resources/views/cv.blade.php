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
                      
<!-- Otros datos del clima -->
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
    {{-- loader --}}
    {{-- <div class="loader"></div>
    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
        </script> --}}
    <div class="separator1"></div>
    <div >
    <div class="menu-2">
       

<table class="tabla-menu-2 ">
 <div>
       <tr >
        <td >
            <a href="#" ><span>Inicio</span> </a>       </td>
        <td >
         <span>Mas sobre mi</span>
        </td>
        {{-- <td  onclick="mandarmensaje();"> --}}
            <td onclick="document.getElementById('myModalmensaje').style.display='block'">

           <a> <span>Dejar un mensaje</span></a>
            {{-- <a href="mailto:angelurquijo10@gmail.com" class="a-menu-2"><img src="assets/imgs/logo-in-white.png" class="div-logo-white"></a> --}}
        </td>
        <td onclick="document.getElementById('myModalPortafolio').style.display='block'">
            <span >Portafolio</span>

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
    <a  style="text-decoration: none; color:#777" onclick="acciones_menu('resumen')"> <span class="titulos-datos-menu activo" id="res"><i class="icofont-ui-file" style="font-size: 12pt"></i><b>Resumen</b></span></a>


  <a  style="text-decoration: none; color:#777"  onclick="acciones_menu('experiencia')"> <span class="titulos-datos-menu " id="ex"><i class="icofont-star" style="font-size: 12pt"></i><b> Experiencia</b></span></a>

  <a  style="text-decoration: none; color:#777" onclick="acciones_menu('habilidades')"> <span class="titulos-datos-menu " id="ha"><i class="icofont-computer" style="font-size: 12pt"></i><b> Habilidades</b></span></a>

  <a  style="text-decoration: none; color:#777" onclick="acciones_menu('educacion')"><span class="titulos-datos-menu " id="ed"><i class="icofont-certificate" style="font-size: 12pt"></i><b> Certificaciones</b></span></a>

  <a  style="text-decoration: none; color:#777" onclick="acciones_menu('referencias')"> <span class="titulos-datos-menu " id="re"><i class="icofont-info-circle" style="font-size: 12pt"></i><b> Referencias</b></span></a>



</div>
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
        <div id="div-general" style="z-index: 9999" >
       
                    <div class="card-prin" id="div-experiencia">
                       
                  <div class="div-datos">
                    <p class="titulos mar-1-r"><i class="icofont-star" style="font-size: 14pt"></i>&nbsp;Experiencia</p>
                   <span class="lugar"><b> Materiales del Norte </b></span> <span class="puesto"> desarrollador /</span>  <span class="p-fechas">Ago. 2020 - Actualidad</span> 
                  </div>
                
                <p class="p-1">Proyectos en equipo:</p>
                <p class="p-2">- eCommerce <a class="color-amarillo" href="https://muchomaterial.com" target="blank">muchomaterial.com</a> <span class="puesto"> (Backend & Frontend)</span></p>
                
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
          
                    
                  
              
                   
            
                    <div class="card-prin" id="div-referencia"> 
                     <hr style="width: 50%; margin: 0%">
                     <p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;REFERENCIAS</p>
               
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
                   <span class="lugar"><i class="icofont-globe"></i><b> muchomaterial.com</b></span> <span class="puesto"> <span style="background-color: #FF2D20; padding:4px; color:#FFF; border-radius:4px">Laravel</span>  | <span style="background-color: #D84924; padding:4px; color:#FFF; border-radius:4px">Html</span> | <span style="background-color: #1A8FEB; padding:4px; color:#FFF; border-radius:4px">Css</span> | <span style="background-color: #7175AA; padding:4px; color:#FFF; border-radius:4px">Php</span> | <span style="background-color: #EAD41C; padding:4px; color:rgb(33, 33, 33); border-radius:4px">JavaScript</span> </span> 
                  </div>
                
                <p class="p-1">Caracteristicas</p>
                <p class="p-3"></b></span></p>
                <p class="p-3"> </p>
                <p class="p-3" style="line-height: 22px">Tienda online diseñada con el framework <b>Laravel</b> y un modelo vista controlador <b>
                     (MVC)</b>, conectada con un api interna para mostrar la informacion de productos en tiempo real. <br>
                     mi principal función fue trabajar en el <b>frontend</b>. Me encargué de diseñar y desarrollar algunas interfaces de usuario, utilizando 
                     herramientas como HTML, CSS y JavaScript para crear una experiencia atractiva y fácil de usar para los usuarios. </p> 
                <br>



                <div class="div-datos">
                   
                   
                   <span class="lugar"><i class="icofont-globe"></i><b> materialesdelnorte.mx</b></span> <span class="puesto"> <span style="background-color: #FF2D20; padding:4px; color:#FFF; border-radius:4px">Laravel</span>  | <span style="background-color: #D84924; padding:4px; color:#FFF; border-radius:4px">Html</span> | <span style="background-color: #1A8FEB; padding:4px; color:#FFF; border-radius:4px">Css</span> | <span style="background-color: #7175AA; padding:4px; color:#FFF; border-radius:4px">Php</span> | <span style="background-color: #EAD41C; padding:4px; color:rgb(33, 33, 33); border-radius:4px">JavaScript</span> </span> 
                  </div>
                
                <p class="p-1">Caracteristicas</p>
                <p class="p-3">Igual que muchomaterial.mx pero hecha para clientes locales de la empresa donde</p>
                <p class="p-3">es posible consultar saldos, cuentas, facturas etc. realizar </p>
                <p class="p-3">pagos,  </p>
                <br>


                <div class="div-datos">
                    <span class="lugar"><i class="icofont-globe"></i><b> angelhernandez.work</b></span><span class="puesto"> <span style="background-color: #FF2D20; padding:4px; color:#FFF; border-radius:4px">Laravel</span>  | <span style="background-color: #D84924; padding:4px; color:#FFF; border-radius:4px">Html</span> | <span style="background-color: #1A8FEB; padding:4px; color:#FFF; border-radius:4px">Css</span> | <span style="background-color: #7175AA; padding:4px; color:#FFF; border-radius:4px">Php</span> | <span style="background-color: #EAD41C; padding:4px; color:rgb(33, 33, 33); border-radius:4px">JavaScript</span> | <span style="background-color: #F28F00; padding:4px; color:#ffffff; border-radius:4px">AWS</span> | <span style="background-color: #E55523; padding:4px; color:#ffffff; border-radius:4px">Ubuntu</span>  </span> 
                  
                </div>
                <p class="p-1">Caracteristicas</p>
                <p class="p-3" style="line-height: 22px">Proyecto personal que consiste en crear mi propio currículum vitae en una página
               web diseñada y desarrollada por mí. Está alojada en <b>Amazon Web Services</b> 
               con un servidor <b>Ubuntu</b>, hecha en <b>Laravel</b> con un patron de diseño <b>MVC</b> (modelo  vista controlador) utilizando principalmente tecnologias 
           <b> Html</b>, <b>Css</b> y <b>JavaScript</b>. Esta pagina es mi forma de  presentarme a posibles <b>empleadores</b> y <b>clientes potenciales.</b></p> 
                          
            
           
           <div class="div-datos">
            <span class="lugar"><i class="icofont-computer"></i> <b>Enviador de balances</b></span><span class="puesto"> <span style="background-color: #4D29C9; padding:4px; color:#FFF; border-radius:4px">.net</span>  <span style="background-color: #8D3AA3; padding:4px; color:#FFF; border-radius:4px">C#</span>  <span style="background-color: #D12A27; padding:4px; color:#FFF; border-radius:4px">SQL</span>   </span> 
          
        </div>
        <p class="p-1">Caracteristicas</p>
        <p class="p-3" style="line-height: 22px">Programa automatizado para enviar 
            estados de cuenta a los clientes, el programa extrae los datos relevantes de la base de datos <b>(SQL)</b> de la empresa
             y genera automáticamente estados de cuenta precisos y personalizados para 
             cada cliente. Luego, el programa envía estos estados de cuenta por correo
             electrónico a los clientes de forma segura y eficiente, ahorrando tiempo y 
             recursos a la empresa. El programa ha mejorado significativamente la eficiencia 
             y la satisfacción del cliente, y ha liberado tiempo para que el personal se enfoque 
             en otras tareas importantes de la empresa.</p> 



             <div class="div-datos">
                <span class="lugar"><i class="icofont-computer"></i> <b>Notificador de stock</b></span><span class="puesto"> <span style="background-color: #4D29C9; padding:4px; color:#FFF; border-radius:4px">.net</span>  <span style="background-color: #8D3AA3; padding:4px; color:#FFF; border-radius:4px">C#</span>  <span style="background-color: #D12A27; padding:4px; color:#FFF; border-radius:4px">SQL</span>   </span> 
              
            </div>
            <p class="p-1">Caracteristicas</p>
            <p class="p-3" style="line-height: 22px">Programa automatizado para notificar a los clientes de muchomaterial.com 
                sobre la existencia de productos en stock. El programa monitorea continuamente el inventario de la 
                tienda y envía notificaciones por correo electrónico a los clientes interesados en productos que se habían 
                agotado, cuando estos vuelven a estar disponibles. Esta solución ha mejorado significativamente la 
                satisfacción del cliente, aumentado las ventas y liberado tiempo para el personal que antes debía 
                notificar a los clientes manualmente. Además, el programa permite a la tienda web mantener un seguimiento 
                constante del inventario y tomar decisiones de compra más informadas</p> 


               </div>

                </div>

                <style>
                    .div-general-habilidades{
                        transform: translateY(25rem);
                        width: 250px;
                    }
                .tabla-habilidades{
                    transform: translateY(20px);
                }
                </style>

                <div id="div-general-habilidades" class="div_din_invisible"  >
       
                 <table class="tabla-habilidades">
                    <tr>
                        <td>
                            <div class="card-habilidades">
                                <img style="max-height: 4rem" src="assets/imgs/logo_html.png" alt="Logo 1">
                                <h2>Html</h2>
                                <p class="info">Html</p>
                              </div>
                        </td>
                        <td>
                            <div class="card-habilidades">
                                <img style="max-height: 4rem" src="assets/imgs/logo_css.png" alt="Logo 1">
                                <h2>CSS</h2>
                                <p class="info">Html</p>
                              </div>
                        </td>
                        <td>
                            <div class="card-habilidades">
                                <img style="max-height: 4rem" src="assets/imgs/logo_js.png" alt="Logo 1">
                                <h2>JavaScript</h2>
                                <p class="info">Html</p>
                              </div>
                        </td>
                        <td>
                            <div class="card-habilidades">
                                <img style="max-height: 4rem" src="assets/imgs/logo_csharp.png" alt="Logo 1">
                                <h2>C#</h2>
                                <p class="info">Html</p>
                              </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="card-habilidades">
                                <img style="max-height: 4rem" src="assets/imgs/logo_html.png" alt="Logo 1">
                                <h2>Php</h2>
                                <p class="info">Html</p>
                              </div>
                        </td>
                        <td>
                            <div class="card-habilidades">
                                <img style="max-height: 4rem" src="assets/imgs/logo_css.png" alt="Logo 1">
                                <h2>.NET</h2>
                                <p class="info">Html</p>
                              </div>
                        </td>
                        <td>
                            <div class="card-habilidades">
                                <img style="max-height: 4rem; border-radius:8px" src="assets/imgs/laravel1.png" alt="Logo 1">
                                <h2>Laravel</h2>
                                <p class="info">Html</p>
                              </div>
                        </td>
                        <td>
                            <div class="card-habilidades">
                                <img style="max-height: 5rem; border-radius:8px" src="assets/imgs/aws.jpg" alt="Logo 1">
                                <h2>C#</h2>
                                <p class="info">AWS</p>
                              </div>
                        </td>
                    </tr>
                 </table>

                 

                  

                </div>



<style>
    .card-container {
  white-space: nowrap;
}

    .card-habilidades {
        display: inline-block;
  border-radius: 8px;
  width: 130px;
  background-color: #ffffffa4;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  text-align: center;
  padding: 20px;
  margin: 20px;
  position: relative;
}

.card-habilidades img {
  max-width: 4rem;
}

.card-habilidades h2 {
  font-size: 18px;
  margin-top: 10px;
  margin-bottom: 0;
}

.card-habilidades .info {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.8);
  color: #fff;
  padding: 10px;
  font-size: 14px;
}

.card-habilidades:hover .info {
  display: block;
}
</style>


                
                <div id="div-general-certificaciones" class="div_din_invisible" >
       
                    <a href="https://community.open-bootcamp.com/user/angel_hdez/certificaciones/7f4fb3c0-0bee-44a2-af37-05656639e4f9" target="_blank">
                    <div class="card-certificaciones">
                        <img src="assets/imgs/laravel1.png" alt="Certificación Nombre de la Certificación" >
                        <div style="text-decoration: none">
                        <h3 style="text-decoration: none">Laravel</h3>
                        <p>Certificación del curso de Laravel</p>
                        <p>03|01|23</p>
                        <p>OpenBootcamp</p>
                    </div>
                </div>
            </a>

            <a href="https://community.open-bootcamp.com/user/angel_hdez/certificaciones/d2907d19-0231-4b22-a59d-79518f49ac90" target="_blank">
                       <div class="card-certificaciones">
                        <img src="assets/imgs/htmlycss.png" alt="Certificación Nombre de la Certificación" >
                        <div style="text-decoration: none">
                        <h3 style="text-decoration: none">Html y CSS</h3>
                        <p>Descripción breve de la certificación.</p>
                        <p>Fecha de obtención: Mes, Año.</p>
                        <p>Institución que otorgó la certificación.</p>
                    </div>
                </div>
            </a>
   
           </div>
           <style>
            .card-certificaciones {
              box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
              transition: 0.3s;
              width: 300px;
              border-radius: 5px;
              padding: 10px;
              margin: 10px;
              display: inline-block;
            }
            
            .card-certificaciones:hover {
              box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            
            .card-certificaciones img {
              width: 100%;
              height: auto;
            }
            
            .card-certificaciones h3 {
              font-size: 18px;
              margin-top: 10px;
            }
            
            .card-certificaciones p {
              font-size: 14px;
              margin-top: 5px;
            }
           </style>

                </div>







</td>
<td class="tabla-central-der">
    <div class="sticky">

    
    <div class="inf-derecha">
        <div class="inf-derecha-cont">
          
            <span class="lugar"><b>Objetivo Porofesional</b> </span>
            <span><p style="font-size: 10pt">Mi objetivo profesional es conseguir un trabajo 
                remoto en una empresa que comparta mis valores 
                y tenga un impacto positivo en la sociedad. Busco una posición en 
                la que pueda aplicar mis habilidades y experiencia para contribuir 
                al éxito de la empresa mientras ayudo a las personas. 
                Me gustaría trabajar en un ambiente desafiante y dinámico que 
                me permita crecer profesionalmente y personalmente, y estoy 
                dispuesto a poner todo mi empeño para cumplir con los objetivos
                 de la empresa y superar las expectativas de los clientes.</p>
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
    {{-- <button onclick="document.getElementById('myModalPortafolio').style.display='block'">Abrir modal-portafolio</button> --}}

	<!-- La modal-portafolio  -->
	<div id="myModalPortafolio" class="modal-portafolio">
		<!-- Contenido de la modal-portafolio -->
		<div class="modal-portafolio-content">
			<span class="close" onclick="document.getElementById('myModalPortafolio').style.display='none'">&times;</span>
			<p><i  style="color: #212D3B" class="icofont-square-right"></i> Aquí puedes agregar el contenidaao de la modal-portafolio</p>
		</div>
	</div>

    <style>
        .imput-dejarMensaje{
            background-color: #0000000c;
            color: #FFF;
            width: 70px;

        }
    </style>

    <div id="myModalmensaje" class="modal-portafolio">
		<!-- Contenido de la modal-mensaje -->
		<div class="modal-portafolio-content" style="display: inline-flexbox">
			<span class="close" onclick="document.getElementById('myModalmensaje').style.display='none'">&times;</span>
			<form method="GET"action="contacto_mensaje_cv" >
                <span>Dejar un mensae</span>
                <input type="text" hidden value="cv"  name="name"   maxlength="8" size="10">
                <br>
                <input type="text" class="input-dejarMensaje"  name="phone1"  required maxlength="8" size="10" placeholder="Telefono">
                <br>
                <input type="text" class="input-dejarMensaje"  name="email"   required maxlength="8" size="10">
                <br>
                <input type="text" class="input-dejarMensaje"  name="mensaje" required   size="10">
                <br>
                <button class="btn-mensaje" type="submit">Enviar</button>
                </form> 
		</div>
	</div>


    <script>
		var modal = document.getElementById('myModalPortafolio');
        var modalMensaje = document.getElementById('myModalmensaje');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
            if (event.target == modalMensaje) {
				modalMensaje.style.display = "none";
			}
		}
	</script>
    <br>
<br>
<style>
    /* Estilo de la modal-portafolio */
    .modal-portafolio {
        display: none; /* Ocultar la modal-portafolio por defecto */
        position: fixed; /* Posición fija */
        z-index: 99; /* Colocar la modal-portafolio en la parte superior */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto; 
        background-color: rgba(0, 0, 0, 0.164);
          }

    /* Estilo del contenido de la modal-portafolio */
    .modal-portafolio-content {
        /* background-color: #fefefe; */
        margin: 10% auto; /* Centrar vertical y horizontalmente */
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        background: rgba(255, 255, 255, 0.36);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(4.8px);
        -webkit-backdrop-filter: blur(4.8px);
        border: 1px solid rgba(255, 255, 255, 0.259);
        transform: translateY(200px);
    }

    /* Estilo del botón para cerrar la modal-portafolio */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: rgb(255, 255, 255);
        text-decoration: none;
        cursor: pointer;
    }
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
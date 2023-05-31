@extends('layouts.head-foot')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/leadmark.css') }}">
    <link rel="stylesheet" type="text/css" href="assets/vendors/themify-icons/css/themify-icons.css">
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5C15RDTPQB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5C15RDTPQB');
</script>
@section('sidebar')
    <!-- End Of Second Navigation -->
    <script>
        setTimeout(title2, 10);
            function title() {
                document.getElementById("tittle").innerHTML = "Diseñamos tu Negocio";
                setTimeout(title1, 2000);
                }

                
            function title1() {
                document.getElementById("tittle").innerHTML = "Diseñamos tu Marca";
                setTimeout(title2, 2000);
                }
                function title2() {
                document.getElementById("tittle").innerHTML = "Diseñamos tu Web";
                
                }
    </script> 
    
    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">Pon tu marca <strong>Online</Strong></h1>
            <h1 class="title" id="tittle"></h1>  
        </div>  
        <div class="shape"> 
           
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#171717" fill-opacity="1" d="M0,288L80,272C160,256,320,224,480,224C640,224,800,256,960,272C1120,288,1280,288,1360,288L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->
{{-- 
    <section>
        <div class="container-body centrado">
            <div class="text-body">
              <h2>Título del Texto</h2>
              <p>Este es un ejemplo de un texto a la izquierda de una imagen.</p>
            </div>
            <div class="image-body">
              <img src="assets/imgs/web_design.webp" alt="Imagen de ejemplo">
            </div>
          </div>
    </section> --}}
    <!-- Service Section -->
    <section  id="service" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">Deja todo en nuestras manos</h6>
            {{-- <h6 class="section-subtitle text-center mb-5 pb-3">No solo hacemos lo que deseas, lo hacemos bonito</h6> --}}

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body centrado">
                            {{-- <small class="text-primary font-weight-bold">01</small> --}}
                            <h5 class="card-title mt-3">Consultoría y asesoramiento en tecnología web <h5>
                            {{-- <p class="mb-0">Lorem ipsum dolor sit amet, cquasi cupiditate voluptate debitis saepe dolorem totam dolor repudiandae quo nihil, repellendus nesciunt ab fuga quae, minima reprehenderit sequi fugit.</p> --}}
                            <img src="assets/imgs/laptop.jpg" style="border-radius: 10px;" class="w-100 mt-3 shadow-sm">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body centrado">
                            {{-- <small class="text-primary font-weight-bold">02</small> --}}
                            <h5 class="card-title mt-3">Hosting y mantenimiento de dominios<h5>
                            {{-- <p class="mb-0">Lorem ipsum dolor sit amet, cquasi cupiditate voluptate debitis saepe dolorem totam dolor repudiandae quo nihil, repellendus nesciunt ab fuga quae, minima reprehenderit sequi fugit.</p> --}}
                            <img src="assets/imgs/web-hosting.jpg" style="border-radius: 10px; max-height:185px;" class="w-100 mt-3 shadow-sm">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body centrado">
                            {{-- <small class="text-primary font-weight-bold">03</small> --}}
                            <h5 class="card-title mt-3">Diseño y desarrollo de tu página<h5>
                           
                                <img src="assets/imgs/web_design.webp" style="border-radius: 10px;  max-height:185px;" class="w-100 mt-3 shadow-sm">
                                    {{-- <p class="mb-0">Lorem ipsum dolor sit amet, cquasi cupiditate voluptate debitis saepe dolorem totam dolor repudiandae quo nihil, repellendus nesciunt ab fuga quae, minima reprehenderit sequi fugit.</p> --}}
                        </div>
                    </div>
                </div>    
                
                
            </div>
        </div>
    </section>
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
            background-color: rgba(0, 0, 0, 0.807);
              }
    
        /* Estilo del contenido de la modal-portafolio */
        .modal-portafolio-content {
            /* background-color: #fefefe; */
            margin: 10% auto; /* Centrar vertical y horizontalmente */
            padding: 20px;
            border: 1px solid #ffffff;
            width: 50%;
            background: rgba(0, 0, 0, 0.38);
            border-radius: 16px;
            box-shadow: 0 4px 40px rgba(126, 126, 126, 0.129);
            backdrop-filter: blur(4.8px);
            -webkit-backdrop-filter: blur(4.8px);
            border: 1px solid #f6a80048;
            transform: translateY(200px);
        }
    
        /* Estilo del botón para cerrar la modal-portafolio */
        .close {
            background-color: #F6A700;
            float: right;
            font-size: 28px;
            font-weight: bold;
            border-radius: 20pt;
            padding: 5px;
        }
    
        .close:hover,
        .close:focus {
            color: #F6A700;
            text-decoration: none;
            cursor: pointer;
        }


.tabla-servicios.coti {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: stretch;
}

.fila-servicio.coti {
  display: flex;
  flex-direction: row;
  width: 100%;
  margin-bottom: 1rem;
}

.columna-imagen.coti {
  flex-basis: 25%;
  margin-right: 1rem;
}

.columna-imagen.coti img {
  width: 100%;
  height: auto;
}

.columna-contenido {
  flex-basis: 75%;
   /* margin-left: 2rem; */
  
}
.columna-contenido p{
    width: 80%;
   
}

.columna-contenido h2 {
  margin-top: 0;
}

.boton-seleccionar {
  display: block;
  margin-top: 1rem;
  padding: 0.5rem 1rem;
  background-color: #F6A700;
  color: #fff;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
  width: 8rem;
  border: solid 1px #F6A700;
}
.boton-seleccionar:hover{
    color: #FFF;
   border: solid 1px #FFF;
}
.boton-body-cotiza{
    background-color: #F6A700;
    padding: 1rem;
    color:#FFF;
    border-radius: 14px;
}
.boton-body-cotiza:hover{
    transform: scale(1.1);
    transition: 50ms;
} 
.container-body {
    width: 50%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}

.text-body {
  flex: 1;
  padding: 20px;
}

.image-body {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container-body img {
  max-width: 250px;
  height: auto;
}
footer {
  background-color: #222;
  color: #fff;
  padding: 50px 0;
}

.container-footer {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.footer-col {
  flex: 1;
  max-width: 300px;
  margin-bottom: 30px;
}

.footer-col h3 {
  margin-bottom: 20px;
  font-size: 24px;
}

.footer-col p {
  margin-bottom: 20px;
  font-size: 14px;
}

.social-links {
  list-style: none;
  margin: 0;
  padding: 0;
}

.social-links li {
  display: inline-block;
  margin-right: 10px;
}

.social-links a {
  display: block;
  width: 40px;
  height: 40px;
  background-color: #fff;
  color: #222;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.social-links a:hover {
  background-color: #999;
  color: #fff;
}

.footer-bottom {
  margin-top: 50px;
  text-align: center;
}

.footer-bottom p {
  font-size: 12px;
}

@media (max-width: 768px) {
  .columna-imagen {
    flex-basis: 100%;
    margin-right: 0;
    margin-bottom: 1rem;
  }
  

  .columna-contenido {
  flex-basis: 100%;
  
}
}
    </style>
    {{-- modal --}}
    <div id="myModalmensaje" class="modal-portafolio">
		<!-- Contenido de la modal-mensaje -->
		<div class="modal-portafolio-content" style="display: inline-flexbox">
			<span class="close" onclick="document.getElementById('myModalmensaje').style.display='none'">&times;</span>
			<br>
        
              <div class="tabla-servicios coti">
                <div class="fila-servicio">
                  {{-- <div class="columna-imagen">
                    <img src="imagen-servicio-1.jpg" alt="Servicio 1">
                  </div> --}}
                  <div class="columna-contenido">
                    <h3>Web Informativa <i style="font-size: 28pt;" class="icofont-eye"></i></h3>
                    <p>Este paquete es ideal para aquellos que buscan una presencia en línea básica 
                        pero efectiva, y quieren proporcionar información detallada sobre su negocio, 
                        productos o servicios a sus clientes. Además, se incluye un diseño personalizado 
                        que refleja la identidad visual del negocio, lo que contribuye a crear una 
                        marca sólida y coherente en línea.</p>

                    <details>
                        <summary>Ver mas</summary>
                        <p class="izquierda"><i class="icofont-ui-play"></i> Página web de hasta 5 secciones </p>
                        <p class="izquierda"><i class="icofont-ui-play"></i> Diseño personalizado según la identidad visual del negocio</p>
                        <p class="izquierda"><i class="icofont-ui-play"></i> Sección de inicio con información sobre el negocio, productos o servicios, y una imagen atractiva</p>
                        <p class="izquierda"><i class="icofont-ui-play"></i> Sección "Acerca de nosotros" para presentar la historia, valores y misión del negocio</p>
                        <p class="izquierda"><i class="icofont-ui-play"></i> Sección de productos o servicios con información detallada y fotografías</p>
                        <p class="izquierda"><i class="icofont-ui-play"></i> Sección de contacto con un formulario de contacto para recibir consultas o solicitudes de información</p>
                        <p class="izquierda"><i class="icofont-ui-play"></i> Integración con redes sociales para que los visitantes puedan seguir el negocio en diferentes plataformas</p>
                    
                    </details>
                    <a  href="{{ route('contacto') }}" class="boton-seleccionar">Seleccionar</a>
                                        {{-- <a  href="{{ route('contacto') }}"" class="ml-4 nav-link1 btn btn-primary btn-sm rounded">Contacto</a> --}}

                  </div>
                  <hr>
                </div>
                
                <div class="fila-servicio">
                  {{-- <div class="columna-imagen">
                    <img src="imagen-servicio-2.jpg" alt="Servicio 2">
                  </div> --}}
                  <div class="columna-contenido" >
                    <h3>Tienda Online <i style="font-size: 28pt;" class="icofont-shopping-cart"></i></h3>
                      
                      <p>Este paquete es ideal para aquellos que buscan vender productos o servicios en línea 
                        y quieren una plataforma de venta fácil de usar y segura. Además, se incluye un diseño 
                        personalizado que refleja la identidad visual del negocio, lo que contribuye a crear 
                        una marca sólida y coherente en línea.</p>
                        
                        <details>
                            <summary>Ver Mas</summary>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Página web de hasta 10 secciones </p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sistema de carrito de compras integrado para que los clientes puedan añadir y comprar productos o servicios</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sección de inicio con información sobre el negocio, productos o servicios, y una imagen atractiva</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sección "Acerca de nosotros" para presentar la historia, valores y misión del negocio</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sección de productos o servicios con información detallada y fotografías</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sección de contacto con un formulario de contacto para recibir consultas o solicitudes de información</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Integración con redes sociales para que los visitantes puedan seguir el negocio en diferentes plataformas</p>
                            
                        </details>
                        <a  href="{{ route('contacto') }}" class="boton-seleccionar">Seleccionar</a>
                        </div>
                        <hr>
                </div>
                
                <div class="fila-servicio">
                  {{-- <div class="columna-imagen">
                    <img src="imagen-servicio-3.jpg" alt="Servicio 3">
                  </div> --}}
                  <div class="columna-contenido">
                    <h3>Servicio personalizado <i class="icofont-ui-edit"></i></h3>
                    <p>Este paquete es ideal para aquellos que buscan una presencia en línea completa 
                        y avanzada, y quieren aprovechar al máximo las posibilidades que ofrece la web. 
                        Además, se incluye un diseño personalizado que refleja la identidad visual del
                         negocio, lo que contribuye a crear una marca sólida y coherente en línea.</p>
                   
                   
                    <details>
                        <summary>Ver mas</summary>
                        <p class="izquierda" ><i class="icofont-ui-play"></i> Página web de hasta 10 secciones </p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sistema de carrito de compras integrado para que los clientes puedan añadir y comprar productos o servicios</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sección de inicio con información sobre el negocio, productos o servicios, y una imagen atractiva</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sección "Acerca de nosotros" para presentar la historia, valores y misión del negocio</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sección de productos o servicios con información detallada y fotografías</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Sección de contacto con un formulario de contacto para recibir consultas o solicitudes de información</p>
                            <p class="izquierda" ><i class="icofont-ui-play"></i> Integración con redes sociales para que los visitantes puedan seguir el negocio en diferentes plataformas</p>
                            
                    </details>

                    <button class="boton-seleccionar coti">Seleccionar</button>
                  </div>
                </div>
              </div>
              <br>
              <div class="centrado">
                  <span class="cursor-pointer"  onclick="document.getElementById('myModalmensaje').style.display='none'">Cerrar</span>
              </div>
		</div>
       
	</div>

    <!-- End OF Service Section -->
<section>
    <div class="centrado">
        <button class="boton-body-cotiza" onclick="document.getElementById('myModalmensaje').style.display='block'">¡Descubre lo que podemos hacer por ti! ¡Cotiza nuestro servicio!</button>
    </div>
</section>
    <!-- About Section -->
    
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">¿Quieres destacar?</h6>
                    <h6 class="section-subtitle mb-4"><b>Sitios web</b> hechos a la medida</h6>
                    <p >Desde logotipos hasta diseños de sitios web, te ayudamos a crear una identidad de marca unica que se destaque de la competencia.</p>
                    <img src="assets/imgs/body-3.jpeg" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/imgs/body-1.jpeg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/imgs/body-2.jpeg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                            <p>Trabajaremos con usted para crear un sitio web personalizado que satisfaga sus necesidades comerciales únicas.</p>
                            <p><b>Permítanos manejar los detalles técnicos mientras usted se enfoca en hacer crecer su negocio.</b><br>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ut a dolorem, consectetur, eos suscipit consequatur magnam est dolore obcaecati adipisci expedita, vero, iste ducimus qui numquam animi facilis officia?</p>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Portfolio Section -->
    {{-- <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <h6 class="section-title text-center">Esto es lo que hacemos</h6>
            <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>
            <div class="filters">
                <a href="#" data-filter=".new" class="active">
                    New
                </a>
                <a href="#" data-filter=".advertising">
                    Advertising
                </a>
                <a href="#" data-filter=".branding">
                    Branding
                </a>
                <a href="#" data-filter=".web">
                    Web
                </a>
            </div>

            <div class="portfolio-container"> 
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>   
                    </div>             
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div> 
                    </div>                         
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSTISING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>    
                    </div>              
                </div> 
                <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                     
                </div>

                <div class="col-md-6 col-lg-4 advertising"> 
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSITING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                       
                </div> 
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                     
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSITING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                       
                </div> 
                <div class="col-md-6 col-lg-4 advertising new"> 
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERTISING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                            
                </div> 
                <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div> 
                    </div>
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                     
                </div> 
                <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                    
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                      
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                   
                </div>
            </div>   
        </div>            
    </section> --}}
    <!-- End of portfolio section -->

    <!-- Blog Section -->
    {{-- <section class="section" id="blog">
        <div class="container">
            <h6 class="section-title mb-0 text-center">Latest Articles</h6>
            <h6 class="section-subtitle mb-5 text-center">Architecto provident deserunt eveniet libero</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">Diseño atractivo y personalizable.</h6>
                            <p>Fuga quae ratione inventore Perferendis porro.</p>
                            <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/blog-2.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title"> Harum Quae Porro</h5>
                            <p>Fuga quae ratione inventore Perferendis porro.</p>
                            <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">Qui optio neque alias</h6>
                            <p>Fuga quae ratione inventore Perferendis porro.</p>
                            <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End of Blog Section -->

    <!-- Testmonial Section -->
    {{-- <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center mb-0">Tecnologías</h6>
            <h6 class="section-subtitle mb-5 text-center">Trabajamos con</h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/aws.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">AWS</h6>
                                    <small class="text-muted mb-0">Host</small>     
                                </div>
                            </div>
                            <p class="mb-0">El mejor alojamiento con nosotros</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/logo_html.png" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">HTMLs</h6>
                                    <small class="text-muted mb-0">Lenguajde</small>      
                                </div>
                            </div>
                            <p class="mb-0">Lorem aipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/logo_css.png" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">CSS</h6>
                                    <small class="text-muted mb-0">Residential Appraiser</small>        
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <br>
               
                
            </div>
            
        </div>
    </section> --}}
    {{-- <section class="section" id="testmonial">
        <div class="container">
            
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/aws.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">AWS</h6>
                                    <small class="text-muted mb-0">Business Analyst</small>     
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-1.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Maria Garcia</h6>
                                    <small class="text-muted mb-0">Insurance Agent</small>      
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-2.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Mason Miller</h6>
                                    <small class="text-muted mb-0">Residential Appraiser</small>        
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <br>
               
                
            </div>
            
        </div>
    </section> --}}
    <!-- End of Testmonial Section -->

    <!-- Contact Section -->
  
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>

<footer id="footer" class="shock-footer scheme-1 tertiary" data-bg-color="#1e1e24">
    
    {{-- <div class="footer-content focus-trigger">
      <div class="container">
        <div class="row g-3">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="footer-item text-center">
              <h6 class="title">Quick Links</h6>
              <!-- Links list -->
              <ul class="nav-list list-unstyled">
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Who We Are</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Social Projects</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Our Services</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Success Cases</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Privacy Police</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="footer-item text-center">
              <h6 class="title">Popular Searches</h6>
              <!-- Links list -->
              <ul class="nav-list list-unstyled">
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Photography</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Art Direction</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Graphic Design</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Brand Creation</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Social Media</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="footer-item text-center">
              <h6 class="title">Inspirations</h6>
              <!-- Links list -->
              <ul class="nav-list list-unstyled">
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Web Designer</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Creative Agency</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Online Store</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Interior Design</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#your-link" class="nav-link">
                    <span class="text">Technology</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="bottom-bar centrado" data-bg-color="#1e1e24">
      <div class="text">© 2023 - <a href="www.angelhernandez.work">angelhernandez.work</a></div>
    </div>
  </footer>
</html>

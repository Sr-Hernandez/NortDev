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
                            <img src="assets/imgs/web-hosting.jpg" style="border-radius: 10px;" class="w-100 mt-3 shadow-sm">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body centrado">
                            {{-- <small class="text-primary font-weight-bold">03</small> --}}
                            <h5 class="card-title mt-3">Diseño y desarrollo de tu página<h5>
                           
                                <img src="assets/imgs/web-hosting.jpg" style="border-radius: 10px;" class="w-100 mt-3 shadow-sm">
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
            color: #F6A700;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
    
        .close:hover,
        .close:focus {
            color: #F6A700;
            text-decoration: none;
            cursor: pointer;
        }
        .container-cotizacion {
  display: flex;
}

table.servicio1-cotizacion,
table.servicio2-cotizacion,
table.servicio3-cotizacion {
  width: 33.33%;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  border-radius: 15px;
}
table.servicio1-cotizacion {
  margin-right: 20px;
}

table.servicio3-cotizacion {
  margin-left: 20px;
}
.container-cotizacion td {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: center;
}

.container-cotizacion img {
  width: 100%;
  max-width: 200px;
  height: auto;
  margin-bottom: 10px;
}

.container-cotizacion h3 {
  margin: 0;
  font-size: 24px;
}

.container-cotizacion p {
  margin: 0;
  font-size: 16px;
  line-height: 1.5;
}

.container-cotizacion button {
  display: block;
  margin: 10px auto 0;
  padding: 10px 20px;
  font-size: 18px;
  border: 3px solid #F6A700;
  background-color: #F6A700;
  color: #fff;
  cursor: pointer;
  border-radius: 10px;
}

.container-cotizacion button:hover {
    background-color: #F6A700;
    border: 3px solid #ffffff;

}
.boton-body-cotiza{
    background-color: #F6A700;
    color:#FFF;
    padding:1rem;
    border: solid 3px #F6A700;
    border-radius: 15px;


}
.boton-body-cotiza:hover{
    border: solid 3px #ffffff;
}
    </style>
    {{-- modal --}}
    <div id="myModalmensaje" class="modal-portafolio">
		<!-- Contenido de la modal-mensaje -->
		<div class="modal-portafolio-content" style="display: inline-flexbox">
			<span class="close" onclick="document.getElementById('myModalmensaje').style.display='none'">&times;</span>
			<br>
            <div class="container-cotizacion">
                <table class="servicio1-cotizacion">
                  <tr>
                    <td>
                      <img src="servicio1.jpg" alt="Servicio 1">
                      <h3>Servicio 1</h3>
                      <p>Descripción del servicio 1</p>
                      <button>Seleccionar</button>
                    </td>
                  </tr>
                </table>
                <table class="servicio2-cotizacion">
                  <tr>
                    <td>
                      <img src="servicio2.jpg" alt="Servicio 2">
                      <h3>Servicio 2</h3>
                      <p>Descripción del servicio 2</p>
                      <button>Seleccionar</button>
                    </td>
                  </tr>
                </table>
                <table class="servicio3-cotizacion">
                  <tr>
                    <td>
                      <img src="servicio3.jpg" alt="Servicio 3">
                      <h3>Servicio 3</h3>
                      <p>Descripción del servicio 3</p>
                      <button>Seleccionar</button>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="centrado">
                  <span  onclick="document.getElementById('myModalmensaje').style.display='none'">Cerrar</span>
              </div>
		</div>
       
	</div>

    <!-- End OF Service Section -->
<section>
    <div class="centrado">
        <button class="boton-body-cotiza">¡Descubre lo que podemos hacer por ti! ¡Cotiza nuestro servicio!</button>
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
    <section id="portfolio" class="section portfolio-section">
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
    </section>
    <!-- End of portfolio section -->

    <!-- Blog Section -->
    <section class="section" id="blog">
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
    </section>
    <!-- End of Blog Section -->

    <!-- Testmonial Section -->
    <section class="section" id="testmonial">
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
    </section>
    <section class="section" id="testmonial">
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
    </section>
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
</html>

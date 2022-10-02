@extends('layouts.head-foot')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/leadmark.css') }}">
    <link rel="stylesheet" type="text/css" href="assets/vendors/themify-icons/css/themify-icons.css">
	
@section('sidebar')
    <!-- End Of Second Navigation -->
    <script>
        setTimeout(title, 2000);
            function title() {
                document.getElementById("tittle").innerHTML = "Diseñamos tu Negocio";
                setTimeout(title1, 2000);
                }

                
            function title1() {
                document.getElementById("tittle").innerHTML = "Diseñamos tu Espacio";
                setTimeout(title2, 2000);
                }
                function title() {
                document.getElementById("tittle").innerHTML = "Diseñamos tu Web";
                
                }


            


    </script>
    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">Pon tu negocio <strong>Online</Strong></h1>
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
            <h6 class="section-subtitle text-center mb-5 pb-3">No solo hacemos lo que deseas, lo hacemos bonito</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3">Diseño <h5>
                            {{-- <p class="mb-0">Lorem ipsum dolor sit amet, cquasi cupiditate voluptate debitis saepe dolorem totam dolor repudiandae quo nihil, repellendus nesciunt ab fuga quae, minima reprehenderit sequi fugit.</p> --}}
                            <img src="assets/imgs/design.webp" style="border-radius: 10px;" class="w-100 mt-3 shadow-sm">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">Desarrollo<h5>
                            {{-- <p class="mb-0">Lorem ipsum dolor sit amet, cquasi cupiditate voluptate debitis saepe dolorem totam dolor repudiandae quo nihil, repellendus nesciunt ab fuga quae, minima reprehenderit sequi fugit.</p> --}}
                            <img src="assets/imgs/web_design.webp" style="border-radius: 10px;" class="w-100 mt-3 shadow-sm">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">Hosting<h5>
                           
                                <img src="assets/imgs/web-hosting.jpg" style="border-radius: 10px;" class="w-100 mt-3 shadow-sm">
                                    {{-- <p class="mb-0">Lorem ipsum dolor sit amet, cquasi cupiditate voluptate debitis saepe dolorem totam dolor repudiandae quo nihil, repellendus nesciunt ab fuga quae, minima reprehenderit sequi fugit.</p> --}}
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>

    
    <!-- End OF Service Section -->

    <!-- About Section -->
    
    {{-- <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">About Company</h6>
                    <h6 class="section-subtitle mb-4">Architecto provident deserunt</h6>
                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate molestiae temporibus et tenetur unde quasi, cum nemo quo, molestias architecto alias voluptatibus corrupti corporis earum. Necessitatibus maxime modi ipsam, quod!</p>
                    <img src="assets/imgs/about.jpg" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/imgs/about-1.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/imgs/about-2.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo iusto quidem laborum atque, sapiente ipsa excepturi fuga cum sed in assumenda eos quasi harum culpa laboriosam nulla, incidunt quae. Voluptatum.</p>
                            <p><b>Aliquid fuga sunt velit, temporibus molestias ab. Ipsa nesciunt totam, aliquid dignissimos.</b><br>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ut a dolorem, consectetur, eos suscipit consequatur magnam est dolore obcaecati adipisci expedita, vero, iste ducimus qui numquam animi facilis officia?</p>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section> --}}
    <!-- End OF About Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <h6 class="section-title text-center">Nuestro Trabajo</h6>
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
    {{-- <section class="section" id="blog">
        <div class="container">
            <h6 class="section-title mb-0 text-center">Latest Articles</h6>
            <h6 class="section-subtitle mb-5 text-center">Architecto provident deserunt eveniet libero</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">Pariatur Omnis Harum quae sint.</h6>
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
    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center mb-0">Testmonials</h6>
            <h6 class="section-subtitle mb-5 text-center">What Our Clients Says</h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">John Doe</h6>
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
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->

    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                  

                    <h6 class="mb-0">Ubicacion</h6>
                    <p class="mb-4">Chihuahua, México</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">contacto@angelhernandez.work</p>
                    <p></p>
                </div>
                <div class="col-md-7">
                    <form>
                        <h4 class="mb-4">Contactanos</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Nombre">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="Email">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="Mensaje"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
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

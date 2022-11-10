<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cv.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
    <title>CV-Ángel Hernández</title>

   
</head>
<header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
    <div class="header-cv">

        <table class="tabla-header">
            <tbody>
                <tr>
                    <td >
                        <h1>
                            {{-- Ángel Hernández Urquijo --}}
                            {{-- <span>ÁNGEL</span>
                            <span>HERNÁNDEZ</span><br>--}}
                            {{-- <span>URQUIJO</span>  --}}
                           Ángel
                        </h1>
                        <h1 style="color: #c7c7c7"> Hernández</h1>
                        
                        <h2 class="color-amarillo">
                            Ingeniero en Sistemas Computacionales
                            {{-- Web Design --}}
                        </h2>
                        <p><i class="icofont-whatsapp"></i>&nbsp;<i class="icofont-ui-email">&nbsp
                            <i class="icofont-linkedin"></i></i></p>
                        
                    </td>
                    <td class="hovfot">
                        <div class="foto">
                            <img src="https://angelhernandez.work/assets/imgs/cv.png" alt="">
                        </div>
                        <div>
                         <button href="" class="btn-contacto">Contacto</button>
                         <button href="" class="btn-contacto">Descarga mi CV</button>
                        </div>
                        
                    </td>
                    <td>
                        <h1 >Perfil</h1>
                        <p style="line-height: 1.5; font-size:13pt">Ingeniero en sistemas computacionales, egresado del Tecnológico nacional
                            de México <strong>(Campus Cuauhtémoc)</strong> con 2 años de experiencia trabajando como desarrollador.</p>
                    </td>
                </tr>
            </tbody>
        </table>
       
       
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
    <div class="div-tabla-exp">
        <table>
            <tr>
                <td><p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;</i>EXPERIENCIA</p>
                    {{-- poner link a materiales --}}
                    <p class="p-fechas">Ago. 2020 - Actualidad</p>
                <p><b>Materiales</b> del Norte / Desarrollador</p>
                <p class="p-1">Proyectos en equipo:</p>
                <p class="p-2">- eCommerce <a class="color-amarillo">muchomaterial.com</a> (Backend & Frontend)</p>
                <p class="p-2">- eCommerce <a class="color-amarillo">materialesdelnorte.mx</a> (Backend & Frontend)</p>

                <hr style="width: 50%; margin: 0%">
                    <p class="p-fechas">Actualidad</p>
                    <p>Proyecto personal</p>
                    <p class="p-2">- Proyecto personal <u><a href="https://www.angelhernandez.work" target="blank" class="color-amarillo">angelhernandez.work</a></u>  (Full Stack)</p>
           
               
            </td>
            
       

                <td><p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;EDUCACIÓN</p>
                    <p class="p-fechas">2013 - 2016</p>
                    <p >CBTa 124 / <b class="color-amarillo">Técnico en informatica</b></p>
                       <hr>
                        <p class="p-fechas">2016 - 2020</p>
                        <p >TecNM / <b class="color-amarillo">Ingeniero en Sistemas</b> </p>   
                       
                   
                    
                   </td>
                
            </tr>
            <tr>
                <td><p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;HABILIDADES TECNICAS</p>
                    {{-- poner link a materiales --}}
                    {{-- <p class="p-fechas">Ago. 2020 - Actualidad</p> --}}
                {{-- <p><b>Materiales</b> del Norte / Desarrollador</p>
                <p class="p-1">Proyectos en equipo:</p> --}}
                <p class="p-2">C#, .NET, HTML, CSS, Java Script, Laravel, </p>
                <p class="p-2">Uso de IDE, PHP, SQL, MySQL, GIT, 
                <p class="p-2">AWS(EC2), SRCUM, Desktop Apps,Photoshop.</p>

                
               
            </td>
            {{-- C#, .NET, HTML, CSS, Java Script, Laravel,
Uso de IDE, PHP, SQL, MySQL, GIT,
AWS(EC2), SRCUM, Desktop Apps,
Photoshop. --}}
            
       

                <td><p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;INTERESES Y HOBBIES</p>
                   
                    
                   <p><i class="icofont-game"></i>&nbsp<i class="icofont-music"></i></p>
                    
                   </td>
                
            </tr>

            <tr>
                <td>
                    {{-- poner link a materiales --}}
                     </td>
            
        

                {{-- <td><p><i class="icofont-circled-right"></i>&nbsp;Educacion</p></td> --}}
            </tr>
        </table>
    </div>
    <div class="main-container">
        <div class="heading">
          <h1 class="heading__title">Tecnologias usadas aqui</h1>
        </div>
        <div class="cards">
          <div class="card card-1">
            {{-- <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p> --}}
            <img class="img-cards" src="assets/imgs/logo_html_sin_fondo.png" alt="">
            {{-- <h2 class="card__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> --}}
            
            <p class="card__apply">
              {{-- <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a> --}}
            </p>
          </div>
          <div class="card card-2">
            {{-- <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p> --}}
            <img class="img-cards" src="assets/imgs/logo_css_sin_fondo.png" alt="">
            {{-- <h2 class="card__title">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2> --}}
            <p class="card__apply">
              {{-- <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a> --}}
            </p>
          </div>
          <div class="card card-3">
            {{-- <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p> --}}
            <img class="img-cards" src="assets/imgs/logo_laravel_sin_fondo.png" alt="">
            {{-- <h2 class="card__title">Ut enim ad minim veniam.</h2> --}}
            <p class="card__apply">
              {{-- <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a> --}}
            </p>
          </div>
          <div class="card card-4">
            {{-- <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p> --}}
            <img class="img-cards" src="assets/imgs/logo_aws_sin_fondo.png" alt="">
            {{-- <h2 class="card__title">Quis nostrud exercitation ullamco laboris nisi.</h2> --}}
            <p class="card__apply">
              {{-- <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a> --}}
            </p>
          </div>
     
        </div>
      </div>
   {{-- <section class="section-1 sticky-table-column">
    <div class="div-exp">
        <table >
                <tr class="">
                    <th >...</th>
                        <h2><i class="icofont icofont-verification-check"></i>Experiencia</h2>
                        <p><i class="icofont-verification-check"></i>text...</p>
                        <p><i class="icofont-verification-check"></i>text...</p>
                    <!-- Other header column ... -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="sticky-table-column__sticky">...</td>
                    <p>qwe</p>
                </tr>
            </tbody>
        </table>
    </div>
   </section>
    <table class="tabla-body-1">
        <tr>
            <td>
                <div class="card">
                    <!-- Cover -->
                    <div class="card__cover">
                        <img class="img-card" src="https://angelhernandez.work/assets/imgs/logo_html.png" alt="">
                    </div>
                
                    <!-- Content -->
                    <div class="card__content">.123..</div>
                    ...
                </div>
            </td>
            <td>
                <div class="card">
                    <!-- Cover -->
                    <div class="card__cover">
                        <img class="img-card" src="https://angelhernandez.work/assets/imgs/logo_html.png" alt="">
                    </div>
                
                    <!-- Content -->
                    <div class="card__content">.123..</div>
                    ...
                </div>
            </td>
            <td>
                <div class="card">
                    <!-- Cover -->
                    <div class="card__cover">
                        <img class="img-card" src="https://angelhernandez.work/assets/imgs/logo_html.png" alt="">
                    </div>
                
                    <!-- Content -->
                    <div class="card__content">.123..</div>
                    ...
                </div>
            </td>
            <td>
                <div class="card">
                    <!-- Cover -->
                    <div class="card__cover">
                        <img class="img-card" src="https://angelhernandez.work/assets/imgs/logo_html.png" alt="">
                    </div>
                
                    <!-- Content -->
                    <div class="card__content">.123..</div>
                    ...
                </div>
            </td>
            <td>
                <div class="card">
                    <!-- Cover -->
                    <div class="card__cover">
                        <img class="img-card" src="https://angelhernandez.work/assets/imgs/logo_html.png" alt="">
                    </div>
                
                    <!-- Content -->
                    <div class="card__content">.123..</div>
                    ...
                </div>
            </td>
        </tr>
    </table> --}}
</body>

<div class="footer-basic">
    <footer>
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Company Name © 2018</p>
    </footer>
</div>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cv.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
    <title>CV-Ángel Hernández</title>

   
</head>
<header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
    <div class="header-cv" >

        <div id="particles-js"></div>
        <script src="assets/js/particles.js"></script>
        <script src="assets/js/particulas.js"></script>
        
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
                        <h1 style="color: #ffffff"> Hernández</h1>
                        
                        <h2 class="color-amarillo">
                            Ingeniero en Sistemas Computacionales
                            {{-- Web Design --}}
                        </h2>
                        
                        <a href="mailto:angelurquijo10@gmail.com"><img src="assets/imgs/logo-mail-white.png" class="div-logo-white"></a>   
                        
                        <img src="assets/imgs/logo-whats-white.png" class="div-logo-white">
                        <img src="assets/imgs/logo-in-white.png" class="div-logo-white">
                        <img src="assets/imgs/logo-in-skype.png" class="div-logo-white">
                    </td>
                    <td class="hovfot">
                        <div class="foto">
                            <img src="https://angelhernandez.work/assets/imgs/cv.png" alt="">
                        </div>
                        <div>
                         
                         <select class="btn-contacto" name="cars" id="cars">
                            <option value="volvo">Contacto</option>
                            <option value="saab"><a href="https://wa.me/+526251058358/?text=tu%20texto%20personalizado">WhatsApp</a></option>
                            <option value="opel">Teléfono</option>
                            <option value="audi">Email</option>
                          </select>
                          <button href="" class="btn-contacto">Descarga mi CV</button>
                        </div>
                        
                    </td>
                    <td>
                        <h1 >Perfil</h1>
                        <p style="line-height: 1.5; font-size:13pt;color: #ffffff">Ingeniero en sistemas computacionales, egresado del Tecnológico nacional
                            de México <strong>(Campus Cuauhtémoc)</strong> con 2 años de experiencia trabajando como desarrollador.</p>
                    </td>
                </tr>
            </tbody>
        </table>
       <img src="svg/wave.svg" alt="">
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
                <td>
                    <div class="card-prin">
                    <p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;</i>EXPERIENCIA</p>
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
           
               </div>
            </td>
            
       

                <td>
                    <div class="card-prin">
                    <p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;EDUCACIÓN</p>
                    <p class="p-fechas">2013 - 2016</p>
                    <p >CBTa 124 / <b class="color-amarillo">Técnico en informatica</b></p>
                       <hr>
                        <p class="p-fechas">2016 - 2020</p>
                        <p >TecNM / <b class="color-amarillo">Ingeniero en Sistemas</b> </p>   
                       
                    </div>
                    
                   </td>
                
            </tr>
            <tr>
                <td>
                    <div class="card-prin">
                        <p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;HABILIDADES TECNICAS</p>
                    {{-- poner link a materiales --}}
                    {{-- <p class="p-fechas">Ago. 2020 - Actualidad</p> --}}
                {{-- <p><b>Materiales</b> del Norte / Desarrollador</p>
                <p class="p-1">Proyectos en equipo:</p> --}}
                <p class="p-2">C#, .NET, HTML, CSS, Java Script, Laravel, </p>
                <p class="p-2">Uso de IDE, PHP, SQL, MySQL, GIT, 
                <p class="p-2">AWS(EC2), SRCUM, Desktop Apps,Photoshop.</p>

                </p></div>
               
            </td>
            {{-- C#, .NET, HTML, CSS, Java Script, Laravel,
Uso de IDE, PHP, SQL, MySQL, GIT,
AWS(EC2), SRCUM, Desktop Apps,
Photoshop. --}}
            
       

                <td>
                    <div class="card-prin">
                        <p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;HABILIDADES SOCIALES</p>
                   
                    
                    <p class="p-2">Trabajo en equipo, Comunicación,</p>
                    <p class="p-2">  Paciencia, Aprendizaje rápido, Creativo</p>
                    <p class="p-2">     Resolución de problemas, trabajo bajo</p>
                    <p class="p-2">   presión, Ágil, Gusto por resolver</p>
                    <p class="p-2">  problemas.</p>

                    </div>
                   </td>
                
            </tr>
            <tr>
                <td>
                    <div class="card-prin">
                        <p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;REFERENCIAS</p>
                    {{-- poner link a materiales --}}
                    {{-- <p class="p-fechas">Ago. 2020 - Actualidad</p> --}}
                {{-- <p><b>Materiales</b> del Norte / Desarrollador</p>
                <p class="p-1">Proyectos en equipo:</p> --}}
                <p class="p-2" >Materiales del Norte es un home center dedicado a la venta de </p>
                <p class="p-2" >materiales para la construcción que actualmente cuenta con 5 </p>
              
                <p class="p-2" >sucursales en el estado de Chihuahua</p>

                </p></div>
               
            </td>
            {{-- C#, .NET, HTML, CSS, Java Script, Laravel,
Uso de IDE, PHP, SQL, MySQL, GIT,
AWS(EC2), SRCUM, Desktop Apps,
Photoshop. --}}
            
       

                <td>
                    <div class="card-prin">
                        <p class="color-amarillo"><i class="icofont-circled-right color-amarillo"></i>&nbsp;INTERESES Y HOBBIES</p>
                   
                    
                   <p><i class="icofont-game"></i>&nbsp<i class="icofont-music"></i> &nbsp<i class="icofont-brand-redbull"></i></p>
                  
                    </div>
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
                    <p>nivel de ingles</p>
                    <h1>A2</h1>
                </div>
            </td>
        </tr>
    </table>


<style>
    .card-foot{
        width: 50%;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.158);
        border-radius: 15px;
        padding: 1px;
    }
</style>
 
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
        <p class="copyright">Ángel Hernández © 2022</p>
    </footer>
</div>
</html>
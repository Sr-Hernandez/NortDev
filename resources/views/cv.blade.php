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
                        <h1 style="color: #DAA520"> Hernández</h1>
                        <h2>
                            Ingeniero en Sistemas Computacionales
                            {{-- Web Design --}}
                        </h2>
                    </td>
                    <td class="hovfot">
                        <div class="foto">
                            <img src="https://angelhernandez.work/assets/imgs/cv.png" alt="">
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
                <td><p><i class="icofont-square-right"></i>&nbsp;</i>Experiencia</p></td>
                

                <td><p><i class="icofont-square-right"></i>&nbsp;Educacion</p></td>

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
   <section class="section-1 sticky-table-column">
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
    </table>
</body>
</html>
<?php
    $con = mysqli_connect('51.83.52.200','root','');

    if(!con) {
        echo 'not connected';
    }

    if(!mysqli_select_db($con,'venevenc_wp1')) {
        echo 'no selected';
    }

    $Name = $_POST('username');
    $Mail = $_POST('email');
    $Phone = $_POST('phone');
    $Message = $_POST('message');
    
    $sql = "INSERT INTO person (Name, Mail, Phone, Message) VALUES ('$Name', '$Email', '$Phone','$Message')";

    if(!mysqli_query($con,$sql)) {
        echo 'not inserted';
    } else {
        echo 'inserted';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Venevenca</title>
<!--Iconos-->

<script src="https://kit.fontawesome.com/ca32def036.js" crossorigin="anonymous"></script>

<!------------------------------------------------------------------>

<link rel="Shorcut icon" type="image/x-icon" href="./Venevenca/icon/icono.ico">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="./Venevenca/css/bootstrap.min.css">
     <link rel="stylesheet" href="./Venevenca/css/font-awesome.min.css">
     <link rel="stylesheet" href="./Venevenca/css/owl.carousel.css">
     <link rel="stylesheet" href="./Venevenca/css/owl.theme.default.min.css">
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="./Venevenca/css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     
      <!-- PRE LOADER -->
      <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><img src="./Venevenca/images/logo 2.png"  width="170px" height="50px"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                    
                    <li><a href="#home" class="smoothScroll">INICIO</a></li>
                         <li class="padre"><a href="#about" class="smoothScroll">¿QUIENES SOMOS?</a></li>
                         
                         <li><a href="#team" class="smoothScroll">SERVICIOS<span class="caret icon-arrowdown6-"></span></a>
                          <ul class="submenu"> 
                            
                              <li><a href="EnviosMaritimos.html">Envios Aire/Mar</a></li> 
                            <li><a href="ServicioPuerta.html">Puerta a Puerta</a></li> 
                            <li><a href="Compras.html">Compras</a></li> 
                            <li><a href="Embalaje.html">Embalaje de Mercancias</a></li> 
                            <li><a href="Cargas.html">Cargas</a></li> 
                            <li><a href="Gestion.html">Gestión aduanal</a></li> 
                              
                          </ul>
                         </li>
                         <li><a href="#courses" class="smoothScroll">TARIFAS<span class="caret icon-arrowdown6-"></span></a>
                            <ul class="submenu">
                              <li><a href="Tarifa2.html">Aéreo Venezuela</a></li> 
                              <li><a href="Tarifa1.html">Marítimo Venezuela</a></li>
                              <li><a href="calculadora.html" target="_blank">Calculadora</a></li>
                          </ul>
                         </li>
                         <li><a href="#" class="smoothScroll">FORMULARIOS<span class="caret icon-arrowdown6-"></span></a>
                              <ul class="submenu">
                                   <li><a href="./Venevenca/Descargas/packinglist.pdf" target="_blank">Packing List</a></li> 
                                   <li><a href="./Venevenca/Descargas/objetosprohibidos.pdf" target="_blank">Objetos Prohibidos</a></li>
                                   </ul>
                              </li>
                         <li><a href="" class="smoothScroll">CONTÁCTANOS</a></li>
                   
                         <ul class="nav navbar-nav navbar-right">
                         <li><a href="https://api.whatsapp.com/send?phone=34625760378" target="_blank"><i class="fab fa-whatsapp"></i>+32 625760378</a></li>
                        <li><a href="https://www.instagram.com/venevenca/?hl=es-la" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
               </div>
</div>

          </div>
     </section>

     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>¿Quieres enviar desde España a Venezuela?</h1>
                                             <h3 style="font-weight: 600;">Hacemos recogidas desde Barcelona, Valencia, Madrid y alrededores y tenemos almacenes en las principales ciudades de Venezuela; porque llegamos tan lejos como se encuentre tu familia. Comienza llenando el formulario.</h3>
                                             <a href="./Venevenca/Descargas/packinglist.pdf"  target="_blank" class="section-btn btn btn-default smoothScroll">Acceder!</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Siguenos en Instagram!</h1>
                                             <h3>Sigue a detalle todos los beneficios que traemos mes a mes para tí. </h3>
                                             <a href="https://www.instagram.com/venevenca/" target="_blank" class="section-btn btn btn-default smoothScroll">Seguir!</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Somos tu aliado número 1 en envíos de Europa a Venezuela.</h1>
                                             <h3> Accede a nuestras tarifas</h3>
                                             <a href="Tarifa1.html" target="_blank" class="section-btn btn btn-default smoothScroll">Contactar</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section  id="feature">
          <div class="container"></div>
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb" >
                              <a class="boton" href="./calculadora.html" target="_blank"><img src="./Venevenca/icon/25 iconos venevenca-10.svg"></a>
                              <h3 style="color:#214">Calcularora</h3>
                              <p style="text-align: center;
                              color: black; ;">¿Quiéres tener un estimado del precio de tu paquete?</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                       
           <a class="boton" href="./Venevenca/Descargas/packinglist.pdf"  target="_blank"><img src="./Venevenca/icon/25 iconos venevenca-11.svg"></a>
                                       
                              <h3>PackingList</h3>
                              <p style="text-align: center;
                               color: black;">Accede a nuestro formulario para empezar!</p>
                              </div>
                       
                    </div>
                    

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                             <a class="boton"  href="index.html#contact"><img class="smoothScroll" src="./Venevenca/icon/Venevenca iconos - todos colores nuevos-07.svg"></a>
                              <h3>Contáctanos</h3>
                              <p style="text-align: center;
                               color: black;">Oficinas en todo el territorio nacional</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- quienes somos? -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2 style="text-align: center;">Nos diferencia nuestros tiempos de respuesta, responsabilidad y entrega en cada rincón de Venezuela.</h2>

                              <a class="mision" ><img  src="./Venevenca/icon/Venevenca iconos - todos colores nuevos-14.svg"></a>
                              <figure>
                                  
                             
                                   <figcaption>
                                        <h3>Nosotros</h3>
                                        <p>VENEVENCA es una empresa de envío de carga de España a Venezuela, aliada a un equipo con más de 20 años de experiencia en el área, que cuenta con almacenes, flota de camiones y oficinas propias en toda Venezuela, Estados Unidos, Panamá, España y China. Nacimos con la necesidad de ayudar a los venezolanos de acortar distancias. Nos diferencia nuestros tiempos de respuesta, responsabilidad y entrega en cada rincón de Venezuela.</p>
                                    </figure>     
                                   </figcaption>

                           

                           
                                   <a class="mision" ><img style=" background: #FFF;
                                        border-radius: 50px;
                                        color: #ffffff;
                                        font-size: 25px;
                                        width: 50px;
                                        height: 50px;
                                        left: 10%;
                                                  top: 65%;
                                                  transform: translateX(-50%)translateY(-50%);
                                                  position: absolute;" src="./Venevenca/icon/Venevenca iconos - todos colores nuevos-11.svg"></a>
                                   <figure>
                                   <figcaption>
                                        <h3>Visión</h3>
                                        <p> Nuestra visión es ser el aliado confiable, de la familia venezolana en el manejo y envío de carga y paquetería. </p>
                                   </figcaption>
                              </figure>

                              
                                   <a class="mision" ><img style=" background: #FFF;
                                        border-radius: 50px;
                                        color: #ffffff;
                                        font-size: 25px;
                                        width: 50px;
                                        height: 50px;
                                        left: 10%;
                                                  top: 80%;
                                                  transform: translateX(-50%)translateY(-50%);
                                                  position: absolute;" src="./Venevenca/icon/Venevenca iconos - todos colores nuevos-01.svg"></a>
                                   <figure>
                                   <figcaption>

                                        <h3>Misión</h3>
                                        <p>Ofrecer soluciones de transporte marítimo y aéreo, prestando un servicio de calidad con responsabilidad, que beneficie a nuestros clientes y contribuyamos así al desarrollo social, comercial y empresarial en Venezuela; con cultura organizacional, técnica y valores de un equipo valioso de talento humano.</p>
                                   </figcaption>
                              </figure>
                         
                    </div>
                         </div>
<!----Imagen de sustitucion al login/formulario --->
<div class="col-md-6 col-sm-12">
     <div style="vertical-align: middle;" class="contact-image"><br><br><br><br><br><br>
     <img  src="./Venevenca/images/02.jpg" class="img-responsive" style="border: oldlace;
     border-radius: 100%;
     width:650px;
     height: 550px;" >
        </div>
         </section>


     <!-- Quite el section id para al hacer click no se dirigiera en forma de scroll hacia esa seccion
     <section id="team"></section>--->
     <!--    
     <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Comenzar a enviar  <small>Sigue estos sencillos pasos.</small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Mark Wilson</h3>
                                   <span>I love Teaching</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image2.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Catherine</h3>
                                   <span>Education is the key!</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image3.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Jessie Ca</h3>
                                   <span>I like Online Courses</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   <li><a href="#" class="fa fa-linkedin"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image4.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Andrew Berti</h3>
                                   <span>Learning is fun</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-behance"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     


    Courses 
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Popular Courses <small>Upgrade your skills with newest courses</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/courses-image1.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Social Media Management</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/author-image1.jpg" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 25</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/courses-image2.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Graphic & Web Design</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/author-image2.jpg" class="img-responsive" alt="">
                                                       <span>Jessica</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 80</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/courses-image3.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Marketing Communication</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/author-image3.jpg" class="img-responsive" alt="">
                                                       <span>Catherine</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/courses-image4.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Summer Kids</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/author-image1.jpg" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 45</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/courses-image5.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Business &amp; Management</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/author-image2.jpg" class="img-responsive" alt="">
                                                       <span>Jessica</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section>


     TESTIMONIAL 
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Student Reviews <small>from around the world</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Jackson</h4>
                                             <span>Shopify Developer</span>
                                        </div>
                                        <p>You really do help young creative minds to get quality education and professional job search assistance. I’d recommend it to everyone!</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Camila</h4>
                                             <span>Marketing Manager</span>
                                        </div>
                                        <p>Trying something new is exciting! Thanks for the amazing law course and the great teacher who was able to make it interesting.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image3.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Barbie</h4>
                                             <span>Art Director</span>
                                        </div>
                                        <p>Donec erat libero, blandit vitae arcu eu, lacinia placerat justo. Sed sollicitudin quis felis vitae hendrerit.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image4.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Andrio</h4>
                                             <span>Web Developer</span>
                                        </div>
                                        <p>Nam eget mi eu ante faucibus viverra nec sed magna. Vivamus viverra sapien ex, elementum varius ex sagittis vel.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section> 

--> 
    
     <section style="background:#1e9bd7;" id="">
          <div class="row">
        <div style="background: #fffcfd;;" class="col-md-4 col-sm-4">
                         
          <div style="border:none;
         background: #fffcfd " class="feature-thumb" >
                          
                          <a class="boton2" href="https://www.google.com/maps/place/Extraroom+Trasteros+Pacifico/@40.3987277,-3.6740647,17z/data=!3m1!4b1!4m5!3m4!1s0xd42260e06eec5c7:0x4f390a914168a687!8m2!3d40.3987236!4d-3.6718707?hl=es" target="_blank"> 
                              <i class="fas fa-map-marker-alt"></i></a>
                              <br>
                              <br>
                              <br>
                              
                         
                         
                         
                         <h3 style="color: #07599f;">Madrid</h3>
                         <p style="text-align: center;
                                    font-size: 17px;
                                    color: #181831;">Calle de Seco 3 (callejón) Alcalá estantería nro 289. 28007 Madrid </p>
                                    <p style="text-align: center;
                                    color: black;
                          font-size: 17px;">Telefono:+34 625760378</p>
                                     
                                               <h3 style="color: #07599f ;"><strong>Horario:</strong></h3>
                                                          <p style="text-align: center;
                                                          color: black;
                                                font-size: 17px;">Lunes a Jueves:</p>
                                               <p style="text-align: center;
                                               font-size: 17px;
                                                         color: black;">10:00 a 14:00 y 17:00 a 20:00 </p>
                                                         
                                                         <p style="text-align: center; font-size: 17px;
                                                         color: black;">Viernes:</p>
                                                         <p style="text-align: center;
                                                         font-size: 17px;
                                                                   color: black;">10:00 a 14:00 y 17:00 a 19:00</p>
                                                                   
                                                         <p style="text-align: center;
                                                         color: black;
                                               font-size: 17px;">Sabados:</p>
                                               <p style="text-align: center;
                                               color: black;
                                     font-size: 17px;">10:00 a 14:00</p>
                                               <p style="text-align: center;
                                               font-size: 17px;
                                                         color: black;"> <strong>Domingos y Festivos Cerrados </strong></p>
                                               <p style="text-align: center;
                                               font-size: 17px;
                                                         color: black;">Venevenca@gmail.com</p>
                                              
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div style="background: #fffcfd;" class="feature-thumb">
               
                              
                              
                              
                              <h3 style="color: #07599f;">Puntos de Recogida</h3>
                              
                                          
                                                    <h3 style="color: #07599f ;"><strong>Madrid Sur:</strong></h3>
                                                               <p style="text-align: center;
                                                               color: black;
                                                     font-size: 17px;">Vallecas
Villa de Vallecas, 
Congosto,
,Ensanche de vallecas.</p>
<p style="color: black;
text-align: center;
font-size: 17px;">
+34 625760378</p>
<h3 style="color: #07599f ;"><strong>Aranjuez:</strong></h3>
                                                    <p style="text-align: center;
                                                    font-size: 17px;
                                                              color: black;">El Sapito, Calle Gonzalo Chacon # 19, Polígono Industrial, 28300 Aranjuez </p>
                                                              <p style="text-align: center;
                                                              color: black;
                                                    font-size: 17px;">
+34 625760378
</p>
<h3 style="color: #07599f ;"><strong>Recogida en Pueblos Cercanos</strong></h3>
                                                    
                                                    
                                                    <p style="text-align: center;
                                                    color: black;
                                          font-size: 17px;">Guadalajara,
Cabanillas,
Alcalá de Henares,
Villa Nueva de la Torre,
Torrejón del Rey.
</p>
                                          <p style="text-align: center;
                                          font-size: 17px;
                                                    color: black;">
+34 625760378</p>
<h3 style="color: #07599f ;"><strong>Organizamos recogidas en toda Europa!</strong></h3>
<br>



                                                 
                                                   
                         </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                                       
                                       <div style="background: #fffcfd;" class="feature-thumb">
                              
                                        <a class="boton2" href="https://www.google.com/maps/place/Calle+Napoles,+305,+08025+Barcelona,+España/@41.4039287,2.1681694,17z/data=!4m13!1m7!3m6!1s0x12a4a2c10f03d29b:0xd0582859e24d3a0e!2sCalle+Napoles,+305,+08025+Barcelona,+España!3b1!8m2!3d41.4038105!4d2.1678581!3m4!1s0x12a4a2c10f03d29b:0xd0582859e24d3a0e!8m2!3d41.4038105!4d2.1678581?hl=es" target="_blank"> 
                                             <i class="fas fa-map-marker-alt"></i></a>
                                             <br>
                                             <br>
                                             <br>
                                             <h3 style="color: #07599f;">Barcelona</h3>
                                        <p style="text-align: center;
                                                   font-size: 17px;
                                                   color: #181831;">Carrer de Napols 305, Barcelona 08025 </p>
                                                   <p style="text-align: center;
                                                   color: black;
                                         font-size: 17px;">Telefono:+34 625760378</p>
                                                    
                                                              <h3 style="color: #07599f ;"><strong>Horario:</strong></h3>
                                                                         <p style="text-align: center;
                                                                         color: black;
                                                               font-size: 17px;">Lunes a Viernes:</p>
                                                              <p style="text-align: center;
                                                              font-size: 17px;
                                                                        color: black;">10:00 a 18:00</p>
                                                                        <p style="text-align: center;
                                                                        color: black;
                                                              font-size: 17px;">Sabados:</p>
                                                              <p style="text-align: center;
                                                              color: black;
                                                    font-size: 17px;">Concertando su cita</p>
                                                    <p style="text-align: center;
                                                    font-size: 17px;
                                                              color: black;"> <strong>Domingos y Festivos Cerrados </strong></p>
                                                              <p style="text-align: center;
                                                              font-size: 17px;
                                                                        color: black;">Venevenca@gmail.com</p>
                                                                        <p style="color: #fffcfd;">.</p>
                                                                        <p style="color: #fffcfd;">.</p>
                                                                      
                                                                       
                                                                
                                                             
                        
                    </div>
         
               </div>    
          </div>
               </div>

                   
                             
                    </div>
               </div>
          
     </section>
          <section id="contact">
               <div class="container">
                    <div class="row">
     
                         <div class="col-md-6 col-sm-12">
                              <form id="contact-form" role="form" action="index.php" method="post">
                                   <div class="section-title">
                                        <h2>Contáctanos! <small>Nosotros estamos para ayudar , Empecemos!</small></h2>
                                   </div>
     
                                   <div class="col-md-12 col-sm-12">
                                        <input type="text" class="form-control" placeholder="Nombre Completo." name="username" required="">
                         
                                        <input type="email" class="form-control" placeholder="Ingresar Correo." name="email" required="">
                                        <input type="phone" class="form-control" placeholder="Ingresar Numero de Celular." name="phone" required="">
     
                                        <textarea class="form-control" rows="6" placeholder="Tu mensaje." name="message" required=""></textarea>
                                   </div>
     
                                   <div class="col-md-4 col-sm-12">
                                        <input type="submit" class="form-control" name="send" value="Enviar!">
                                   </div>
     
                              </form>
                         </div>
     
                         <div class="col-md-6 col-sm-12">
                              <div class="contact-image">
                                <a href="https://www.google.com/maps/place/Calle+Napoles,+305,+08025+Barcelona,+España/@41.4044914,2.1675833,17.27z/data=!4m13!1m7!3m6!1s0x12a4a2c10f03d29b:0xd0582859e24d3a0e!2sCalle+Napoles,+305,+08025+Barcelona,+España!3b1!8m2!3d41.4038105!4d2.1678581!3m4!1s0x12a4a2c10f03d29b:0xd0582859e24d3a0e!8m2!3d41.4038105!4d2.1678581?hl=es" target="_blank" >  <img src="./Venevenca/images/Direccion.png" class="img-responsive" style="border: oldlace;" >
                                </a> </div>
                         </div>
     
                    </div>
               </div>
                    </div>
     </section>
          </div>
     </div>


   
        
         <!-- <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Contactanos! <small>Amaremos nuestras conversaciones.</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Nombre completo" name="name" required="">
                    
                                   <input type="email" class="form-control" placeholder="Enter email address" name="e" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>       

-->
     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Dirección</h2>
                              </div>
                              <address>
                                   <p>Carrer de Napols 305<br>Barcelona 08025</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/Venevenca/" target="_blank" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   
                                   <li><a href="https://www.instagram.com/venevenca/?hl=es-la" target="_blank" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 Venevenca.</p>
                                   
                                   <p>Design:@Oscarsh12</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Información de contacto</h2>
                              </div>
                              <address>
                                   <p> <a href="https://api.whatsapp.com/send?phone=34625760378" target="_blank">+32 625760378</a>  </p>
                                   <p><a href="mailto:Venevenca.envios@gmail.com">info@venevenca.es</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Links rapidos.</h2>
                                   <ul>
                                        <li><a href="./Venevenca/Descargas/objetosprohibidos.pdf" target="_blank">Lista de objetos prohibidos</a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="./Venevenca/Descargas/terminos y condiciones.pdf" target="_blank">Terminos & Condiciones</a></li>
                                        <li><a href="#"></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

               <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Mas Información.</h2>
                                   <p>Si deseas saber sobre tus envíos escribe a soporte en línea info@venevenca.es
                                        Cualquier duda puede escribirnos por esta vía, ¿en qué podemos ayudarte?</p>
                            
     </footer>


     <!-- SCRIPTS -->
     <script src="./Venevenca/js/jquery.js"></script>
     <script src="./Venevenca/js/bootstrap.min.js"></script>
     <script src="./Venevenca/js/owl.carousel.min.js"></script>
     <script src="./Venevenca/js/smoothscroll.js"></script>
     <script src="./Venevenca/js/custom.js"></script>

</body>
</html>
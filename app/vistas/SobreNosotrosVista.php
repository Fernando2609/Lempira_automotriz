<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?php print $datos["titulo"]; ?></title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?php print RUTA.'img/favicon.ico'; ?>" rel="icon" />
    <link href="<?php print RUTA.'public/assets/img/apple-touch-icon.png'; ?>" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="<?php print RUTA.'public/assets/vendor/aos/aos.css'; ?>" rel="stylesheet" />
    <link href="<?php print RUTA.'public/assets/vendor/bootstrap/css/bootstrap.min.css'; ?>"
    rel="stylesheet"/>

    <link href="<?php print RUTA.'public/assets/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet"/>

    <link href="<?php print RUTA.'public/assets/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet" />

    <link
    href="<?php print RUTA.'public/assets/vendor/glightbox/css/glightbox.min.css'; ?>"
    rel="stylesheet"/>

    <link href="<?php print RUTA.'public/assets/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet" />
    <link href="<?php print RUTA.'public/assets/vendor/swiper/swiper-bundle.min.css'; ?>" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?php print RUTA.'assets/css/style.css'; ?>" rel="stylesheet" />
    <link href="<?php print RUTA.'public/css/hover.css'; ?>" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- =======================================================
    * Template Name: OnePage - v4.3.0
    * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a  href='<?php print RUTA.'tienda'  ?>'><img src="<?php print RUTA.'public/img/imagen2.png'  ?> " alt=""></a></h1>
        <h1 class="logo"><a  href='<?php print RUTA.'tienda'  ?>'>Lempira Automotriz</a></h1>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href='<?php print RUTA.'tienda'  ?>'>Inicio</a></li>
            <li><a class="nav-link scrollto" href='<?php print RUTA.'Autos'  ?>'>Autos</a></li>
            <li class="dropdown">
                  <a
                    ><span>Categorias</span>
                    <i class="bi bi-chevron-right"></i
                  ></a>
                  <ul>
                    <li><a  href='<?php print RUTA.'Marca'  ?>'>Marcas</a></li>
                    <li><a href="<?php print RUTA.'Modelo'  ?>">Modelos</a></li>
                    <li><a  href='<?php print RUTA.'TipoAuto'  ?>'>Tipos</a></li>
                  </ul>
            </li>
            <li class="dropdown">
                  <a
                    ><span>Conócenos</span>
                    <i class="bi bi-chevron-right"></i
                  ></a>
                  <ul>
                  <li><a class="nav-link scrollto active" href="<?php print RUTA.'SobreNosotros'  ?>">Nosotros</a></li>
            <li><a class="nav-link scrollto" href='<?php print RUTA.'Contacto'  ?>'>Contactános</a></li>
                  </ul>
            </li>
            <li class="dropdown">
                  <a  href='<?php print RUTA.'carrito/caratula' ?>'
                    ><span>Carrito <i class="bi bi-cart4"></i></span>
                  </a>
                  <ul>
                  <?php  
                    if(isset($_SESSION["carrito"]) && $_SESSION["carrito"]){
                     print" <li><a class='nav-link scrollto' href='".RUTA."carrito/caratula'>";
                    print "Carrito: $".number_format($_SESSION["carrito"],2);
                    print "</a>";
                    print "</li>";
                    }
                  ?>
           
                  </ul>
            </li>
            <form action= "<?php print RUTA; ?>Buscar/producto" class="m-3" method="POST" style="display: inline-flex;">
            <input type="text" name="buscar" id="buscar" class="form-control" size="13"
            placeholder="Buscar">
            <button type="submit" class="btn btn-light buscar"><i class="bi-search"></i></button>
            </form>
            
            <li>
              <a class="getstarted scrollto" href='<?php print RUTA.'Login'  ?>'><i class='bx bx-log-out' style="color:#FFFFFF;"></i></a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>NOSOTROS</h2>
            <ol>
              <li><a href='<?php print RUTA.'tienda'  ?>'>Inicio</a></li>
              <li>Equipo de Programación 2</li>
            </ol>
          </div>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <section class="inner-page ">
      <div class="container container2" data-aos="fade-up">
  
      <section id="team" class="team section-bg">
        <div class="container container2" data-aos="fade-up">
          <div class="section-title  animate__animated animate__fadeInRightBig">
            <h2>Equipo <i class="bi bi-people-fill"></i></h2>
          </div>

          <div class="row">
            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="assets/img/team/gabriela.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href="https://www.facebook.com/gabriela.maradiaga.58760" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/gabys_1620/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="mailto:ggmaradiaga@unah.hn" target="_blank"><i class="bi bi-google"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Gabriela Maradiaga</h4>
                  <span>Comunicadora</span>
                </div>
              </div>
            </div>
          
            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="assets/img/team/hugo.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href="https://www.facebook.com/alejandro.paz.921677" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/hugopaz6/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="mailto:hugo.paz@unah.hn" target="_blank"><i class="bi bi-google"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Hugo Paz</h4>
                  <span>Rematador</span>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="assets/img/team/leonela.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href="https://www.facebook.com/leonela.yasmin"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/yasmin0494/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="mailto:lypineda@unah.hn" target="_blank"><i class="bi bi-google"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Leonela Pineda</h4>
                  <span>Investigadora</span>
                </div>
              </div>
            </div>
            <div
            class="col-lg-3 col-md-6 d-flex align-items-stretch"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="member">
              <div class="member-img">
                <img
                  src="assets/img/team/fernando.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  <a href="https://www.facebook.com/josefortizsantos/" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/jfernando_os/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="mailto:jfortizs@unah.hn" target="_blank"><i class="bi bi-google"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>José Fernando Ortiz</h4>
                <span>Project Manager</span>
              </div>
            </div>
          </div> <div
          class="col-lg-3 col-md-6 d-flex align-items-stretch"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <div class="member">
            <div class="member-img">
              <img
                src="assets/img/team/victor.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100006516664773" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="mailto:alejandrino.garcia@unah.hn" target="_blank"><i class="bi bi-google"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Victor García</h4>
              <span>Realizador</span>
            </div>
          </div>
        </div>
            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="assets/img/team/jafet.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href="https://www.facebook.com/Reynaldo.giron2031"target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/jafeth_giron31/" target="_blank" ><i class="bi bi-instagram"></i></a>
                    <a href="mailto:reynaldo.giron@unah.hn"target="_blank"><i class="bi bi-google"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Reynaldo Giron</h4>
                  <span>Impulsor</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php  
        
        print "<div class= 'alert mt-3' data-aos='fade-up'>";
        print "<h2 class= 'text-center animate__animated animate__fadeInRightBig'><i style='font-size:20px;' class='bi bi-star-fill'></i>Misión </h2>";
        //print "<img src= 'img/Imagen.png' style='width:80%; margin-left:100px;' class='rounded float-right'/>";
        print "<p>Somos un concesionario oficial, Lempira Automotriz, especializado en la comercialización de carros nuevos, usados. Contamos con personal altamente calificado, cumplimos con los estándares de la marca, modelos  y del entorno social; trabajamos por el bienestar y crecimiento de nuestro talento humano, para lograr así la total satisfacción de nuestros clientes.</p>";
        print "<h2 class= 'text-center pt-3'><i style='font-size:20px;' class='bi bi-star-fill'></i>Visión </h2>";
        print "<p class='pb-3'>Ser el primer concesionario de la marca, Lempira Automotriz en el país, líder en calidad, tecnología, infraestructura, capital humano, rentabilidad y solidez financiera; encaminados a lograr la fidelización de nuestros clientes, convirtiéndonos en la mejor opción del mercado, excediendo las expectativas de nuestros clientes  y proveedores.</p>";
        print "<div class=''>";
        print "<h2 class= 'text-center'> <i style='font-size:20px;' class='bi bi-star-fill'></i>Nuestros Valores </h2>";
        print "<ul class='pb-3 '>";
        print "<li type='none' class='pb-3'>";
        print "<i class='bx bx-check-double'></i>  RESPETO POR LAS PERSONAS: En el ámbito personal y profesional, en cualquier situación que acontezca y tanto dentro como fuera de la organización.";
        print "</li>";
        print "<li type='none' class='pb-3' >";
        print "<i class='bx bx-check-double'></i>  EQUIPO: Trabajamos en equipo lo que supone colaborar, compartir esfuerzos y multiplicar logros.";
        print "</li>";
        print "<li type='none' class='pb-3'>";
        print "<i class='bx bx-check-double'></i>  CALIDAD: Ofrecemos un trabajo bien hecho.";
        print "</li>";
        print "<li type='none' class='pb-3'>";
        print "<i class='bx bx-check-double'></i>  TRANSPARENCIA: En todo tipo de acciones, propuestas, evaluaciones, conclusiones, resultados...";
        print "</li>";
        print "<li type='none' class='pb-3'>";
        print "<i class='bx bx-check-double'></i>  RENTABILIDAD: Somos eficientes en nuestros procesos para seguir creciendo.";
        print "</li>";
        print "<li type='none' class='pb-3'>";
        print "<i class='bx bx-check-double'></i>  LEALTAD: Con las personas, los compromisos, con los clientes y en general con la estrategia de la empresa.";
        print "</li>";
        print "</ul>";
        print "<div>";
        print "</div>";
        print "<a href='".RUTA."tienda' style='margin-left:30px;' class= 'btn btn-primary hvr-bob'/>Regresar</a>";
      
      ?>
      </section>
      <!-- End Team Section -->
     
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Lempira Automotriz</h3>
              <p class="precio" style="font-family: 'Times New Roman', Times, serif;">
                <br />
                Bulevar Juan Pablo II<br />
               <br /><br />
                <strong>Telefono:</strong> +504 2234-5842<br />
                <strong>Email:</strong> lempira.automotrizhn@gmail.com<br />
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Enlaces útiles</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="<?php print RUTA.'tienda'  ?>">Inicio</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="<?php print RUTA.'Autos'  ?>">Autos</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="<?php print RUTA.'Marcas'  ?>">Marcas</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="<?php print RUTA.'Modelo'  ?>">Modelos</a>
                </li>
                <!-- <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Privacy policy</a>
                </li> -->
              </ul>
              <ul>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Enlaces Utiles</h4>
              <ul>
              
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="<?php print RUTA.'TipoAuto'  ?>">Tipos</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="<?php print RUTA.'Carrito'  ?>">Carrito</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="<?php print RUTA.'SobreNosotros'  ?>">Nosotros</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="<?php print RUTA.'Contacto'  ?>">Contáctanos</a>
                </li>
                <!-- <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Product Management</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Graphic Design</a>
                </li> -->
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>¿Buscas un auto en especifico?</h4>
              <p>
                Ingresa la marca, el modelo o el año del auto que deseas buscar
              </p>
              <form action= "<?php print RUTA; ?>Buscar/producto" class="m-3" method="POST" style="display: inline-flex;">
            <input type="text" name="buscar" id="buscar" class="form-control" size="20"
            placeholder="buscar">
            <button type="submit" class="btn btn-light">Buscar</button>
            </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Lemprira Automotriz</span></strong
            > Derechos Reservados
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
            Equipo de Programación 2
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
<!--           <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->         
          <a href="https://www.facebook.com/profile.php?id=100068117974586" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/lempiraautomotrizhn/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UC8nJYUHkYYdaObn_Jh3jBcg" target="_blank" class="google-plus"><i class="bx bxl-youtube"></i></a>
          <a href="mailto:lempira.automotrizhn@gmail.com" class="linkedin"><i class="bx bxl-google"></i></a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="<?php print RUTA.'assets/vendor/aos/aos.js'; ?>"></script>
    <script src="<?php print RUTA.'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
    <script src="<?php print RUTA.'assets/vendor/glightbox/js/glightbox.min.js'; ?>"></script>
    <script src="<?php print RUTA.'assets/vendor/isotope-layout/isotope.pkgd.min.js'; ?>"></script>
    <script src="<?php print RUTA.'assets/vendor/php-email-form/validate.js'; ?>"></script>
    <script src="<?php print RUTA.'assets/vendor/purecounter/purecounter.js'; ?>"></script>
    <script src="<?php print RUTA.'assets/vendor/swiper/swiper-bundle.min.js'; ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php print RUTA.'assets/js/main.js'; ?>"></script>
  </body>
</html>

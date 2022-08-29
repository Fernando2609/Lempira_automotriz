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
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- =======================================================
    * Template Name: OnePage - v4.3.0
    * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="<?php print RUTA.'public/css/hover.css'; ?>" rel="stylesheet">

  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a  href='<?php print RUTA.'tienda'  ?>'><img src="<?php print RUTA.'public/img/imagen2.png'  ?> " alt=""></a></h1>
        <h1 class='animate__animated logo'><a  href='<?php print RUTA.'tienda'  ?>' class="">Lempira Automotriz</a></h1>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href='<?php print RUTA.'tienda'  ?>'>Inicio</a></li>
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
                  <li><a class="nav-link scrollto" href="<?php print RUTA.'SobreNosotros'  ?>">Nosotros</a></li>
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
              <a class="getstarted scrollto" href='<?php print RUTA.'tienda/logout'  ?>'><i class='bx bx-log-out' style="color:#FFFFFF;"></i></a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center ">
            
            <h1  class='animate__animated animate__jackInTheBox '>El Héroe que recorre tus caminos</h1>
        
            <h2></h2>
            
          </div>
        </div>
        <?php  
          print "<div >";
          print "<img src= 'img/Imagen.png' style='width:80%; margin-left:100px;' class='rounded float-right'/>";
          print "</div>";
        ?>
        <div class="text-center">
          <a href="<?php print RUTA.'Autos'  ?>"  style='height: 62px'; class="btn-get-started scrollto align-middle hvr-sweep-to-top">Ver Catálogo <i class='bx bxs-car'></i></a>
        </div>

        <div class="row icon-boxes">
           <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="300"
          >
            <div class="icon-box">
              <div class="icon"><i class="ri-stack-line"></i></div>
              <h4 class="title">Diversidad</h4>
              <p class="description">
                Diversidad de marcas y modelos de todos los tipos.
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="300"
          >
            <div class="icon-box">
              <div class="icon"><i class="ri-palette-line"></i></div>
              <h4 class="title">Estilos</h4>
              <p class="description">
                Estilos autenticos y a los mejores precios del mercado.
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="400"
          >
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-check-fill"></i></div>
              <h4 class="title">Personal</h4>
              <p class="description">
                Personal altamente calificado con las habilidades y conocimientos necesarios.
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="500"
          >
            <div class="icon-box">
              <div class="icon"><i class="ri-fingerprint-line"></i></div>
              <h4 class="title">Seguridad</h4>
              <p class="description">
                Manejo de información segura y confiable. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!--Tarjeta de autos -->
      <div class="container container2 mt-5" data-aos="fade-up">
      <h1 class="text-center">Autos Más Económicos <i class="bi bi-piggy-bank"></i>
</h1>

<?php
   $ren = 0;
   $row=0;
      for ($i=0; $i < count($datos["data"]); $i++) {
        if ($ren==0 ){
                print "<div class= 'row'  data-aos='zoom-in'
                data-aos-delay='200'>";

        }
        print "<div class='card'>";
        print "<a href='".RUTA."admonProductos/producto/";
        print $datos['data'][$i]["ID_AUTO"]."'>"."<img src='".RUTA."img/autos/".$datos ['data'][$i]["IMAGEN_AUTO"]."' ";
        print "class= 'img-responsive'";
        print "alt=' ".$datos['data'][$i]["ID_AUTO"]. "'/>"."</a>";
        print "<h4><a href='".RUTA."admonProductos/producto/";
        print $datos['data'][$i]["ID_AUTO"]."'>";
        print $datos['data'][$i]["MARCA"].' '.$datos['data'][$i]["MODELO"].' '.$datos['data'][$i]["AÑO_AUTO"]."</a></h4>";
        print "<h5 class='precio'>L.".number_format($datos["data"][$i]["PRECIO"],2)."</h5>";
        print "</div>";
        
        $ren++;
        if ($ren==3 and $row<3){
          $ren = 0;
          print "</div>";
        }
      }
      print "<br>";
      print "<h1 class='text-center mt-5'>Autos Recién Adquiridos <ion-icon name='logo-model-s'></ion-icon></h1>";
      

       $ren = 0;
       $row=0;
          for ($i=0; $i < count($datos["nuevos"]); $i++) {
            if ($ren==0){
                    print "<div class= 'row' data-aos='zoom-in'
                    data-aos-delay='200'>";
                    $row+=1;
            }
            print "<div class='card'>";
            print "<a href='".RUTA."admonProductos/producto/";
            print $datos['nuevos'][$i]["ID_AUTO"]."'>"."<img src='".RUTA."img/autos/".$datos ['nuevos'][$i]["IMAGEN_AUTO"]."' ";
            print "class= 'img-responsive'";
            print "alt=' ".$datos['nuevos'][$i]["ID_AUTO"]. "'/>"."</a>";
            print "<h4><a href='".RUTA."admonProductos/producto/";
            print $datos['nuevos'][$i]["ID_AUTO"]."'>";
            print $datos['nuevos'][$i]["MARCA"].' '.$datos['nuevos'][$i]["MODELO"].' '.$datos['nuevos'][$i]["AÑO_AUTO"]."</a></h4>";
            print "<h5 class='precio'>L.".number_format($datos["nuevos"][$i]["PRECIO"],2)."</h5>";
            print "</div>";
            $ren++;
            if ($ren==3 and $row<=3){
              $ren = 0;
              print "</div>";
            }
          }

     
          print "</div>";


       ?>
        <!-- <div class="row">
          <div class="card">
            <img src="img/img1.jpg" />
            <h4>Naturaleza</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>
          <div class="card">
            <img src="img/img1.jpg" />
            <h4>Naturaleza</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div><div class="card">
            <img src="img/img1.jpg" />
            <h4>Naturaleza</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>

          <div class="card">
            <img src="img/img2.jpg" />
            <h4>Comida</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>

          <div class="card">
            <img src="img/img3.jpg" />
            <h4>Tecnología</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>
          <div class="card">
            <img src="img/img3.jpg" />
            <h4>Tecnología</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>
          <div class="card">
            <img src="img/img3.jpg" />
            <h4>Tecnología</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>
          <div class="card">
            <img src="img/img3.jpg" />
            <h4>Tecnología</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>
          <div class="card">
            <img src="img/img3.jpg" />
            <h4>Tecnología</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>
          <div class="card">
            <img src="img/img3.jpg" />
            <h4>Tecnología</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>
          <div class="card">
            <img src="img/img3.jpg" />
            <h4>Tecnología</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>
          <div class="card">
            <img src="img/img3.jpg" />
            <h4>Tecnología</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
              excepturi unde?
            </p>
            <a href="#">Leer más</a>
          </div>
        </div> -->
      </div>
      </div>

      <!--  ======= About Section ======= -->
     <!-- <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>About Us</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem.
            </p>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <ul>
                <li>
                  <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                  aliquip ex ea commodo consequat
                </li>
                <li>
                  <i class="ri-check-double-line"></i> Duis aute irure dolor in
                  reprehenderit in voluptate velit
                </li>
                <li>
                  <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                  aliquip ex ea commodo consequat
                </li>
              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
              </p>
              <a href="#" class="btn-learn-more">Learn More</a>
            </div>
          </div>
        </div>
      </section>-->
      <!-- End About Section --> 

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg">
        <div class="container">
          <div class="row justify-content-end">
            <div
              class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch"
            >
              <div class="count-box">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="98"
                  data-purecounter-duration="2"
                  class="purecounter"
                ></span>
                <p>Clientes Felices</p>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch"
            >
              <div class="count-box">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="40"
                  data-purecounter-duration="2"
                  class="purecounter"
                ></span>
                <p>Socios</p>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch"
            >
              <div class="count-box">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="50"
                  data-purecounter-duration="2"
                  class="purecounter"
                ></span>
                <p>Años de experiencia</p>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch"
            >
              <div class="count-box">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="15"
                  data-purecounter-duration="5"
                  class="purecounter"
                ></span>
                <p>Reconocimientos</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->

      <!-- ======= About Video Section ======= -->
      <section id="about-video" class="about-video">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div
              class="col-lg-6 video-box align-self-baseline"
              data-aos="fade-right"
              data-aos-delay="100"
            >
              <img src="assets/img/imagen_video.jpg" class="img-fluid" alt="" />
              <a
                href="https://youtu.be/M3BDOcGx9dc"
                class="glightbox play-btn mb-4"
                data-vbtype="video"
                data-autoplay="true"
              ></a>
            </div>

            <div
              class="col-lg-6 pt-3 pt-lg-0 content video"
              data-aos="fade-left"
              data-aos-delay="100"
            >
              <h3>
                El Héroe que recorre tus caminos
              </h3>
              <p class="fst-italic">
              Optimizar la venta de automóviles brindando comodidad y rapidez al cliente cubriendo todas sus expectativas al ofrecerle garantía del producto. Con respecto a lo antes mencionado se busca incrementar las ventas generando mayores utilidades y rentabilidad para la compraventa.
              </p>
              
            </div>
          </div>
        </div>
      </section>
      <!-- End About Video Section -->

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients section-bg">
        <div class="container swiper-slide" data-aos="fade-up">
          <div class="row">
            <div
              class="
                col-lg-2 col-md-4 col-6
                d-flex
                align-items-center
                justify-content-center
              "
              data-aos="zoom-in"
            >
            
            <a href="<?php print RUTA.'Marca/MarcaBuscar/3'  ?>">
              <img
                src="assets/img/clients/toyota_logo.png"
                class="img-fluid"
                alt=""
              />
              
              </a>
            </div>

            <div
              class="
                col-lg-2 col-md-4 col-6
                d-flex
                align-items-center
                justify-content-center
              "
              data-aos="zoom-in"
            >
            <a href="<?php print RUTA.'Marca/MarcaBuscar/1'  ?>">
              <img
                src="assets/img/clients/ford_logo.png"
                class="img-fluid"
                alt=""
              />
              </a>
            </div>

            <div
              class="
                col-lg-2 col-md-4 col-6
                d-flex
                align-items-center
                justify-content-center
              "
              data-aos="zoom-in"
            >
            <a href="<?php print RUTA.'Marca/MarcaBuscar/2'  ?>">
              <img
                src="assets/img/clients/honda_logo.png"
                class="img-fluid"
                alt=""
              />
              </a>
            </div>

            <div
              class="
                col-lg-2 col-md-4 col-6
                d-flex
                align-items-center
                justify-content-center
              "
              data-aos="zoom-in"
            >
            <a href="<?php print RUTA.'Marca/MarcaBuscar/5'  ?>">
              <img
                src="assets/img/clients/Kia_logo.png"
                class="img-fluid"
                alt=""
              />
              </a>
            </div>
            <div
              class="
                col-lg-2 col-md-4 col-6
                d-flex
                align-items-center
                justify-content-center
              "
              data-aos="zoom-in"
            >
            <a href="<?php print RUTA.'Marca/MarcaBuscar/25'  ?>">
              <img
                src="assets/img/clients/volkswagen_logo.png"
                class="img-fluid"
                alt=""
              />
              </a>
            </div>

            <div
              class="
                col-lg-2 col-md-4 col-6
                d-flex
                align-items-center
                justify-content-center
              "
              data-aos="zoom-in"
            >
            <a href="<?php print RUTA.'Marca/MarcaBuscar/19'  ?>">
              <img
                src="assets/img/clients/nissan_logo.png"
                class="img-fluid"
                alt=""
              />
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Clients Section -->

    
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="section-title" style="padding-bottom: 0; padding-top: 30px;">
            <h2>Galeria <i class="bi bi-camera-fill"></i></h2>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Fast</li>
                <li data-filter=".filter-card">adventure</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div
            class="row portfolio-container"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets\img\portfolio\portafolio2.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="assets\img\portfolio\portafolio2.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                     
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a href="portfolio-details.html" title="More Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets\img\portfolio\portafolio1.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  
                  <div class="portfolio-links">
                    <a
                      href="assets\img\portfolio\portafolio1.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a href="portfolio-details.html" title="More Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets\img\portfolio\portafolio3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                 
                  <div class="portfolio-links">
                    <a
                      href="assets\img\portfolio\portafolio3.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a href="portfolio-details.html" title="More Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets\img\portfolio\portafolio4.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  
                  <div class="portfolio-links">
                    <a
                      href="assets\img\portfolio\portafolio4.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a href="portfolio-details.html" title="More Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets\img\portfolio\portafolio5.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                 
                  <div class="portfolio-links">
                    <a
                      href="assets\img\portfolio\portafolio5.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a href="portfolio-details.html" title="More Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets\img\portfolio\portafolio6.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  
                  <div class="portfolio-links">
                    <a
                      href="assets\img\portfolio\portafolio6.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a href="portfolio-details.html" title="More Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets\img\portfolio\portafolio7.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  
                  <div class="portfolio-links">
                    <a
                      href="assets\img\portfolio\portafolio7.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a href="portfolio-details.html" title="More Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets\img\portfolio\portafolio8.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                 
                  <div class="portfolio-links">
                    <a
                      href="assets\img\portfolio\portafolio8.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a href="portfolio-details.html" title="More Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets\img\portfolio\portafolio9.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  
                  <div class="portfolio-links">
                    <a
                      href="assets\img\portfolio\portafolio9.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a href="portfolio-details.html" title="More Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      


      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>¿Cómo Encotrarnos?   <i class='bx bxs-map'></i></h2>
          </div>

          <div>
            <iframe
              style="border: 0; width: 100%; height: 270px"
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3869.788491404046!2d-87.18246623991199!3d14.089659459966947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2shn!4v1627619259825!5m2!1ses-419!2shn" 
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>

          <div class="row mt-5 align-middle">
            <div class="">
              <div class="info d-flex justify-content-between ">
                <div class="address ">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Dirección:</h4>
                  <p>Bulevar Juan Pablo II</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>lempira.automotrizhn@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Telefono:</h4>
                  <p>+504 2234-5842</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- End Contact Section -->
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
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>

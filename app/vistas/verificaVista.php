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
                  <li><a class="nav-link scrollto" href="<?php print RUTA.'SobreNosotros'  ?>">Nosotros</a></li>
            <li><a class="nav-link scrollto active" href='<?php print RUTA.'Contacto'  ?>'>Contactános</a></li>
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
            <h2 class="text-uppercase">Verificar Datos</h2>
            <ol>
              <li><a  href='<?php print RUTA.'tienda'  ?>'>Inicio</a></li>
              <li class="breadcrumb-item"><a href='<?php print RUTA.'Carrito'  ?>'>Carrito</a></li>
              <li class="breadcrumb-item">Verifica datos</li>
            </ol>
          </div>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <section class="inner-page ">
        <div class="container " data-aos="fade-up">
        <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href='<?php print RUTA.'Carrito'  ?>'>Carrito</a></li>
      <li class="breadcrumb-item"><a href='<?php print RUTA.'Carrito/checkout'  ?>'>Datos de envío</a></li>
      <li class="breadcrumb-item"> <a>Verifica datos</a></li>
      <li class="breadcrumb-item"><a >Pagar</a></li>
    </ol>
  </nav>
  <h2>Verifique los datos</h2>
  <?php
        $verifica = false;
        $subtotal = 0;
        $envio = 0;
      //print "<p>Modo de pago: ".$datos["pago"]."</p>";
      print "<p>Nombre: ".$datos["data"]["nombre"]."</p>";
      print "<p>Direccion:"." ".$datos["data"]["direccion"]."</p>";
      print "<p>Telefono Celular:"." ".$datos["data"]["telefono_celular"]."</p>";
      print "<p>Telefono Fijo:"." ".$datos["data"]["telefono_fijo"]."</p>";
      print "<p>No. Identidad:"." ".$datos["data"]["no_identidad"]."</p>";
      //
      //
      //
      print "<table class='table table-strped' width='100%' tyle='vertical-align: middle;   
      ' width='100%'>";
      print "<tr style='text-align: center; background-color: #2d8ee4; color:whitesmoke; width=100%'>";
      print "<th width='12%'>Producto</th>";
      print "<th width='35%'>Descripción</th>";
      print "<th width='10.12%'>Condición</th>"; 
      print "<th width='1.8%'>Cant.</th>";
      print "<th width='20.12%'>Precio</th>";
//      print "<th width='10.12%'>Subtotal</th>";
      //print "<th width='1%'>&nbsp;</th>";
      print "</tr>";
      //ciclo para llebnar la tabla
      for ($i=0; $i < count($datos["carrito"]); $i++) { 
        //Variables de trabajo
        //$desc = "<b>".$datos["data"][$i]["nombre"]."</b>";
        //$desc.= substr(html_entity_decode($datos["data"][$i]["descripcion"]),0,200);
        $nom = $datos["carrito"][$i]["autos"];
        $num = $datos["carrito"][$i]["usuario"];
        $can = $datos["carrito"][$i]["cantidad"];
        $pre = $datos["carrito"][$i]["precio"];
        $img = $datos["carrito"][$i]["imagen"];
        //$des = $datos["data"][$i]["descuento"];
        $env = $datos["carrito"][$i]["envio"];
        $tot = $can*$pre;
        //IMPRESION DE LOS VARIABLES DE LA TABLA
        print "<tr style='text-align: center; background-color: #51a8e075;'>";
        print "<td><img src='".RUTA."img/autos/".$img."' width='105' alt'".$nom."'></td>";
        //print "<td>".$datos["carrito"][$i]["marca"]." ".$datos["carrito"][$i]["modelo"]." ".$datos["carrito"][$i]["AÑO_AUTO"]."</td>";
        print "<td>".$datos["carrito"][$i]["marca"]." ".$datos["carrito"][$i]["modelo"]." ".$datos["carrito"][$i]["AÑO_AUTO"]." Color ".$datos["carrito"][$i]["color"]." Con transmisión ".$datos["carrito"][$i]["TRANSMISION"]."</td>";
        print "<td>".$datos["carrito"][$i]["uso"]."</td>";
        print "<td class='text-right'>";
        //print "<input type='number' name='c".$i."' class='text-right' ";
        //print "value='".number_format($can,0)."' min='1' max='1'/>";
        print "1";
        print "<input type='hidden' name='i".$i."' value='".$num."'/>";
        print "</td>";
        print "<td class='text-right'>L.".number_format($pre,2)."</td>";
        //print "<td class='text-right'>L.".number_format($tot,2)."</td>";
        //
        //Subtotales CALCULOS
        //
        $subtotal += $tot;
        $envio += $env;
      }
      $isv=$subtotal *0.15;
      $total = $subtotal + $envio +$isv;
      print "</table>";
      print "<hr>";
      //
      //Tabla de totales
      //
      print "<table width='100%' class='text-right'>";
      print "<tr>";
      print "<td width='79.85%'></td>";
      print "<td width='11.55%'>Subtotal:</td>";
      print "<td width='9.20%'>L.".number_format($subtotal,2)."</td>";
      print "</tr>";

      print "<tr>";
      print "<td width='79.85%'></td>";
      print "<td width='11.55%'>Envío:</td>";
      print "<td width='9.20%'>L.".number_format($envio,2)."</td>";
      print "</tr>";


      print "<tr>";
      print "<td width='79.85%'></td>";
      print "<td width='11.55%'>Impuesto 15%:</td>";
      print "<td width='9.20%'>L.".number_format($isv,2)."</td>";
      print "</tr>";

      print "<tr>";
      print "<td width='79.85%' ></td>";
      print "<td width='11.55%' style='font-weight: bold;'>Total:</td>";
      print "<td width='9.20%' style='font-weight: bold;'>L.".number_format($total,2)."</td>";
      print "</tr>";
      //BOTONES

      print "<tr>";
      print "<td></td>";
     
        
      print "</table>";
      print "<table class='d-flex justify-content-end'>";
      print "<td><a href='".RUTA."carrito/formaPago' class='btn btn-success mt-3 hvr-bob' role='button' style='width: 13rem'>Pagar</a></td>";
      print "</table>";


        ?>
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

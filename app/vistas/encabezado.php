<!DOCTYPE html>
<html>
<head>
  <title><?php print $datos["titulo"]; ?></title>
  <meta charset="UTF-8">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php print RUTA.'public/css/style.css'; ?>">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="<?php print RUTA.'public/assets/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet" />
  
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <link href="<?php print RUTA.'public/css/hover.css'; ?>" rel="stylesheet">
</head>
<?php  
    if(isset($datos["login"])){
      if($datos["login"]){
        print "<body class='body' id='main'>";
         }
        }
        if(isset($datos["admon"])){
          if($datos["admon"]){
            print "<body class='admin'>";
             }
            }
            if(isset($datos["admonlogin"])){
              if($datos["admonlogin"]){
                print "<body class='admonlogin' id='main'>";
                 }
                }
      ?>
      
  
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-0 d-flex  " >
    <?php  
    if(isset($datos["admon"])){
      if($datos["admon"]){
        print "<div id='mySidebar' class='sidebar id='main''>";
        print "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'><i class='bi bi-arrow-bar-right'></i>
        </a>";
        print "<a href='".RUTA."admonUsuarios' class='dropdown-item'>Administradores <ion-icon name='people' class='align-middle'></ion-icon></a>";
        print "<a href='".RUTA."admonProveedores' class='dropdown-item '>Proveedores <i class='bi bi-truck-flatbed align-middle'></i></a>";
        print "<a href='".RUTA."admonProductos' class='dropdown-item '>Autos <ion-icon name='car' class='align-middle'></ion-icon></a>";
        print "<a href='".RUTA."admonMarca' class='dropdown-item'>Marca</a>";
        print "<a href='".RUTA."admonModelo' class='dropdown-item '>Modelo </a>";
        //print "<a href='".RUTA."admonPlantilla' class='dropdown-item '>plantilla </a>";
        print "<a href='".RUTA."admonColor' class='dropdown-item '>Color <i class='bi bi-paint-bucket align-middle'></i></a>";
        print "<a href='".RUTA."carrito/ventas' class='dropdown-item'>Ventas</a>";
        print "</div>";
        print "<div id='main'>";
        print "<button class='openbtn' onclick='openNav()'><i class='bi bi-arrow-bar-left'></i>
           Administrar</button>";
        print "</div>";
      
      }
    }
    
    ?>
    <img src="<?php print RUTA.'public/img/imagen2.png';  ?>" alt="" width='4%' href="<?php print RUTA; ?>">
    <a href="<?php print RUTA; ?>" class="navbar-brand pr-2 pl-5 text-uppercase font-weight-bold">Lempira Automotriz</a>
    <div class="collapse navbar-collapse justify-content-end" id="menu">
    
    <?php  
      
    
    ?>
    
    <?php if ($datos["menu"]) {
      print "<ul class='navbar-nav mr-auto mt-2 mt-lg-0'>";
      if(isset($datos["tienda"])){
        if($datos["tienda"]){
          print "<li class='nav-item'>";
      print "<a href='".RUTA."tienda' class='nav-link ";
      if(isset($datos["activo"]) && $datos["activo"]=="tienda") print "active";
      print "'>Tienda</a>";
      print "</li>";
           }
          }
      
      print "<li class='nav-item'>";
      print "<a href='".RUTA."Autos' class='nav-link ";
      if(isset($datos["activo"]) && $datos["activo"]=="Autos") print "active";
      print "'>Autos</a>";
      print "</li>";
      //
      
      //
      print "<li class='nav-item'>";
      print "<a href='".RUTA."SobreNosotros' class='nav-link ";
      if(isset($datos["activo"]) && $datos["activo"]=="Sobre Nosotros") print "active";
      print "'>Sobre Nosotros</a>";
      print "</li>";
      //
      print "<li class='nav-item'>";
      print "<a href='".RUTA."contacto' class='nav-link ";
      if(isset($datos["activo"]) && $datos["activo"]=="contacto") print "active";
      print "'>Contacto</a>";
      print "</li>";
      print "</ul>";
      //
      //Formulario lado derecho
      //
     
      print "<ul class='nav navbar-nav navbar-right'>";
      //
      
      ?>
     <form action= "<?php print RUTA; ?>Buscar/producto" class="form-inline" method="POST">
     <input type="text" name="buscar" id="buscar" class="form-control" size="20"
     placeholder="buscar un auto">
      <button type="submit" class="btn btn-light">Buscar</button>
    </form>
    
      <?php
    print "<li class='nav-item'>";
    print "<a href='".RUTA."logout' class='nav-link ml-3'>Logout <i class='bi bi-box-arrow-left'></i></a>";
    print "</li>";
      print "</ul>";
    }
    if(isset($datos["admon"])){
      if($datos["admon"]){
        /* print "<div id='mySidebar' class='sidebar'>";
        print "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'><i class='bi bi-arrow-bar-right'></i>
        </a>";
        print "<a href='".RUTA."admonUsuarios' class='dropdown-item'>Administradores</a>";
        print "<a href='".RUTA."admonProveedores' class='dropdown-item'>Proveedores</a>";
        print "<a href='".RUTA."admonProductos' class='dropdown-item'>Autos</a>";
        print "<a href='".RUTA."admonProductos' class='dropdown-item'>Marca</a>";
        print "<a href='".RUTA."admonProductos' class='dropdown-item'>Modelo</a>";
        print "<a href='".RUTA."admonProductos' class='dropdown-item'>Color</a>";
        print "</div>";
        print "<div id='main'>";
        print "<button class='openbtn' onclick='openNav()'><i class='bi bi-arrow-bar-left'></i>
           Administrar</button>";
        print "</div>"; */
       /* print "<ul class='navbar-nav mt-2 mt-lg-0 '>";
        print "<li class='nav-item dropdown'>";

        print "<a class='nav-link dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'>
        Opciones </a>";
        print " <div class='dropdown-menu'>";
        print "<li class='nav-item mr-5'>";
        print "<a href='".RUTA."admonUsuarios' class='nav-link'>Administradores</a>";
        print "</li>";

        print "<li class='nav-item mr-5 '>";
        print "<a href='".RUTA."admonProveedores' class='nav-link'>Proveedores</a>";
        print "</li>";
        
        print "<li class='nav-item mr-5'>";
        print "<a href='".RUTA."admonProductos' class='nav-link'>Autos</a>";
        print "</li>";
        print "</div>";

        print "</li>";
        print "</ul>"; */
        print "<ul class='navbar-nav'>";
       /*  print "<li class='nav-item dropdown '>";
        print "<a class='nav-link' href='#' id='navbardrop' data-toggle='dropdown'>Administrar  <i class='bi bi-caret-down'></i></a>";
        print "<div class='dropdown-menu float-left'>";
        print "<a href='".RUTA."admonUsuarios' class='dropdown-item'>Administradores</a>";
        print "<a href='".RUTA."admonProveedores' class='dropdown-item'>Proveedores</a>";
        print "<a href='".RUTA."admonProductos' class='dropdown-item'>Autos</a>";
        print "<a href='".RUTA."admonProductos' class='dropdown-item'>Marca</a>";
        print "<a href='".RUTA."admonProductos' class='dropdown-item'>Modelo</a>";
        print "<a href='".RUTA."admonProductos' class='dropdown-item'>Color</a>";

        print "</div>"; */
        print "<li class='nav-item ml-5'>";
        print "<abbr title='Ir a la tienda'><a href='".RUTA."tienda' class='nav-link'><i class='bx bxs-car-garage'></i></i>
        </a></abbr>";
        print "</li>";
        print "</li>";
        print "<li class='nav-item ml-5'>";
        print "<abbr title='Cerrar Sesion'><a href='".RUTA."admon' class='nav-link'><i class='bi bi-box-arrow-left'></i>
        </a></abbr>";
        print "</li>";
        print "</li>";
        
        print "</ul>"; 
      
      }
    }
    ?>
    </div>
    </div>
  </nav>
  <div class="container-fluid h-100">
    <div class="row content">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
      <?php
        if (isset($datos["errores"])) {
          if (count($datos["errores"])>0) {
            print "<div class='alert alert-danger text-center mb-5 col-md-6 d-flex justify-content-center centrar'>";
            foreach ($datos["errores"] as $key => $valor) {
              print "<strong>".$valor."</strong><br>";
            }
            print "</div>";
          }
        }
      ?>


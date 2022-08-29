

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro Color</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php print RUTA."plugins/fontawesome-free/css/all.min.css"  ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php print RUTA."plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"  ?>">
  <link rel="stylesheet" href="<?php print RUTA."plugins/datatables-responsive/css/responsive.bootstrap4.min.css"  ?>">
  <link rel="stylesheet" href="<?php print RUTA."plugins/datatables-buttons/css/buttons.bootstrap4.min.css"  ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php print RUTA."plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"  ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php print RUTA."plugins/icheck-bootstrap/icheck-bootstrap.min.css"  ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php print RUTA."plugins/jqvmap/jqvmap.min.css"  ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php print RUTA."public/dist2/css/adminlte.min.css"  ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php print RUTA."plugins/overlayScrollbars/css/OverlayScrollbars.min.css"  ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php print RUTA.'plugins/daterangepicker/daterangepicker.css'  ?>">
  <link href="<?php print RUTA.'public/assets/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet" />
  <!-- summernote -->
  <link rel="stylesheet" href="<?php print RUTA.'plugins/summernote/summernote-bs4.min.css'  ?>">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php print RUTA.'AdmonInicio'  ?>" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!--<a href="#" class="nav-link">Contact</a>-->
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto ">
      <!-- Navbar Search -->

      <li class="nav-item dropdown">
      
       <div class="d-flex align-items-center">
      <!-- <a href="<?php print RUTA.'AdmonInicio/logout'  ?>" class="nav-link" style="padding-right: 0.2rem;">Cerrar Sesión</a>

      <a href="<?php print RUTA.'AdmonInicio/logout'  ?>" class="nav-link" style="padding-right: 0.5rem; padding-left: 0.2rem;"><i class="ri-logout-circle-line"></i> </a>
      </div>
      </li>
      <?php  
      print "<a href='".RUTA."admonUsuarios/cambio2/".$_SESSION["email"]["email"]."' class='nav-link'>Mi Perfil</a>"
      ?> -->
      <li class="nav-item dropdown">
        <div class="d-flex align-items-center">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle d-flex align-items-center"> <i class="fas fa-user-tie" style="padding: 10px;"></i>        Perfil</a>
          
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><?php  
              print "<a href='".RUTA."admonUsuarios/perfil/".$_SESSION["email"]["email"]."' class='nav-link d-flex align-items-center justify-content-between'>Mí Perfil<i class='fas fa-user-check'></i>

              </a>";
              
              ?></li>
            <li><?php  
              print "<a href='".RUTA."admonUsuarios/cambio2/".$_SESSION["email"]["email"]."' class='nav-link d-flex align-items-center justify-content-between'>Editar Perfil <i class='fas fa-user-cog'></i></a>";
              
              ?></li>
              <li><a href="<?php print RUTA.'AdmonInicio/logout'  ?>" class="nav-link  d-flex align-items-center justify-content-between" >Cerrar Sesión <i class="fas fa-power-off"></i></a></li>
            
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php print RUTA.'AdmonInicio'  ?>" class="brand-link">
      <img src="<?php print RUTA."img/Imagen2.png"  ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lempira Automotriz</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex justify-content-center">
        
        
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tablas
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item  ">
                <a href="<?php print RUTA."admonUsuarios" ?>" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                  <p>Administradores</p>
                </a>
              </li>
              <li class="nav-item  ">
                <a href="<?php print RUTA."admonProductos" ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Autos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."admonProveedores" ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Proveedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."admonMarca" ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Marca</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."admonModelo" ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Modelo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."admonColor" ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Color</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."carrito/ventas" ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Ventas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Registrar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php print RUTA."admonUsuarios/alta" ?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Administrador</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."admonProductos/alta" ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Autos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."admonProveedores/alta" ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Proveedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."admonMarca/alta" ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Marca</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."admonModelo/alta" ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Modelo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."admonColor/alta" ?>" class="nav-link  active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Color</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   Administradores
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/usuarios" ?>" target="_blank" class="nav-link">
                      <i class="far fa-file-pdf nav-icon"></i>
                      <p>Reporte PDF</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/usuarios_e" ?>" class="nav-link">
                      <i class="far fa-file-excel nav-icon"></i>
                      <p>Reporte Excel</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   Autos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/productos" ?>" target="_blank" class="nav-link">
                      <i class="far fa-file-pdf nav-icon"></i>
                      <p>Reporte PDF</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/productos_e" ?>" class="nav-link">
                      <i class="far fa-file-excel nav-icon"></i>
                      <p>Reporte Excel</p>
                    </a>
                  </li>
                </ul>
                </ul>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   Proveedores
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/proveedor" ?>" target="_blank" class="nav-link">
                      <i class="far fa-file-pdf nav-icon"></i>
                      <p>Reporte PDF</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/proveedor_e" ?>" class="nav-link">
                      <i class="far fa-file-excel nav-icon"></i>
                      <p>Reporte Excel</p>
                    </a>
                  </li>
                </ul>
                </ul>

                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   Marca
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/marca" ?>" target="_blank" class="nav-link">
                      <i class="far fa-file-pdf nav-icon"></i>
                      <p>Reporte PDF</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/marca_e" ?>" class="nav-link">
                      <i class="far fa-file-excel nav-icon"></i>
                      <p>Reporte Excel</p>
                    </a>
                  </li>
                </ul>
                </ul>

                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   Modelo
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/Caratula" ?>" target="_blank" class="nav-link">
                      <i class="far fa-file-pdf nav-icon"></i>
                      <p>Reporte PDF</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/Caratula_e" ?>" class="nav-link">
                      <i class="far fa-file-excel nav-icon"></i>
                      <p>Reporte Excel</p>
                    </a>
                  </li>
                </ul>
                </ul>

                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   Color
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/color" ?>"  target="_blank" class="nav-link">
                      <i class="far fa-file-pdf nav-icon"></i>
                      <p>Reporte PDF</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php print RUTA."AdmonPlantilla/color_e" ?>" class="nav-link">
                      <i class="far fa-file-excel nav-icon"></i>
                      <p>Reporte Excel</p>
                    </a>
                  </li>
                </ul>
                </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Graficas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--               Separador de Cantidad de Vendidos-->
              <li class="nav-item bg-lightblue disabled color-palette">
                <a  class="nav-link">
                  
                  <p>Ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA."carrito/grafica" ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas Por Dia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA; ?>carrito/graficames" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas Por Mes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA; ?>carrito/graficamarca"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas Según la Marca</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA; ?>carrito/graficamodelo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas Por Modelo</p>
                </a>
              </li>
<!--               Separador de Cantidad de Vendidos-->
              <li class="nav-item bg-lightblue disabled color-palette">
                <a  class="nav-link">
                  
                  <p>Cantidad Autos Vendidos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print RUTA; ?>carrito/graficamarcacantidad" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vendidos por Marca</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php print RUTA; ?>carrito/graficamodelocantidad" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vendidos por Modelo</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php print RUTA; ?>carrito/graficaauto" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vendidos Mensualmente</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="<?php print RUTA."admonInicio/calendario" ?>"class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendario
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <?php
        if (isset($datos["errores"])) {
          if (count($datos["errores"])>0) {
            print "<div class='alert alert-danger text-center mb-5 centrar'>";
            foreach ($datos["errores"] as $key => $valor) {
              print "<strong>".$valor."</strong><br>";
            }
            print "</div>";
          }
        }
      ?>
            <h1>Registrar Color</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php print RUTA."admonInicio" ?>">Inicio</a></li>
              <li class="breadcrumb-item active">Registrar Color</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        

        <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?php print RUTA; ?>AdmonColor/alta/" method="POST" enctype="multipart/form-data">
                <!--- Aca empieza el cambio-->
                <div class="form-group text-left">    
                    <label for="DESCRIPCION">Color</label>
                    <input type="text" name="DESCRIPCION" id="DESCRIPCION" class="form-control form-control-border border-width-2" required
                    placeholder="Escribe el color del auto"  
                    value="<?php 
                    print isset($datos['data']['DESCRIPCION'])?$datos['data']['DESCRIPCION']:''; 
                    ?>"
                    >
                  </div>
                    
                  <div class="form-group text-left d-flex justify-content-end">
                  <input type="hidden" name="id" id="id" value="
                      <?php  
                        if (isset($datos["data"]["ID_COLOR"])) {
                        print $datos["data"]["ID_COLOR"];
                        }
                        else {
                          print "";
                        }
                      
                      ?>
                    ">
                    <input type="submit" value="Registrar" class="btn btn-success mr-3">
                    <a href="<?php print RUTA; ?>admonColor" class="btn btn-info">Regresar</a>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php print RUTA."plugins/jquery/jquery.min.js"  ?>"></script>
<!-- Bootstrap -->
<script src="<?php print RUTA."plugins/bootstrap/js/bootstrap.bundle.min.js"  ?>"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script src="<?php print RUTA."plugins/jszip/jszip.min.js"  ?>"></script>

<!-- AdminLTE -->
<script src="<?php print RUTA."dist2/js/adminlte.js"  ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php print RUTA."plugins/chart.js/Chart.min.js"  ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php print RUTA."dist2/js/demo.js"  ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php print RUTA."dist2/js/pages/dashboard3.js"  ?>"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>

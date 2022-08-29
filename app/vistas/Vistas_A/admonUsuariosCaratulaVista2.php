<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Lista de Usuarios Administradores</h1>
<div class="card p-4 bg-light">
  <div class="d-flex justify-content-between text-uppercase ">
<a href="<?php print RUTA; ?>admonUsuarios/alta" class="btn btn-success boton1">
Registrar Administrador          <i class="bi bi-plus-square"></i></a>
  <br>
  <a href="<?php print RUTA; ?>AdmonPlantilla/usuarios" class="btn btn-success w-25">REPORTE PDF
  </a>
  <br>
  <a href="<?php print RUTA; ?>AdmonPlantilla/usuarios_e" class="btn btn-success w-25"> REPORTE EXCEL
  </a>
  </div>
  <table class="table table-striped mt-3 text-center" width="100%">
  <thead>
    <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Status</th>
    <th>Modifica</th>
    <th>Borrar</th>
  </tr>
  </thead>
  <tbody>
    <?php
    for($i=0; $i<count($datos['data']); $i++){
      print "<tr >";
      print "<td>".$datos["data"][$i]["id"]."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["nombre"]."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["correo"]."</td>";
      if ($datos["data"][$i]["status"]==1) {
        print "<td class='text-center activo'>".'Activo'."</td>";
      }elseif ($datos["data"][$i]["status"]==0) {
        print "<td class='text-center inactivo'>".'Inactivo'."</td>";
      }
      print "<td><a href='".RUTA."admonUsuarios/cambio/".$datos["data"][$i]["id"]."' 
              class='btn btn-info'><i class='bi bi-gear text-right'></i></a></td>";
      print "<td><a href='".RUTA."admonUsuarios/baja/".$datos["data"][$i]["id"]."'
             class='btn btn-danger'><i class='bi bi-trash text-right'></i></a></td>";
      print "</tr>";
    }
    ?>
  </tbody>
  </table>
  
</div><!--card-->
<?php include_once("piepagina.php"); ?>
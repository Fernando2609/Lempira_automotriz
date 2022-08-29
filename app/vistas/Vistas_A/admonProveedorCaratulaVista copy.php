<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Lista de Proveedores</h1>
<div class="card p-4 bg-light" style="position: relative;" >
<div class="d-flex justify-content-between text-uppercase ">
<a href="<?php print RUTA; ?>admonProveedores/alta" class="btn btn-success boton1">
  Registrar Proveedor  <i class="bi bi-plus-square align-content-end"></i></a>
  <br>
  <a href="<?php print RUTA; ?>AdmonPlantilla/proveedor" class="btn btn-success w-25">REPORTE PDF
  </a>
  <br>
  <a href="<?php print RUTA; ?>AdmonPlantilla/proveedor_e" class="btn btn-success w-25">REPORTE EXCEL
  </a>
  </div>
  <table class="table table-striped mt-3 text-center" width="100%" >
  <thead>
    <tr>
    <!-- <th>id</th> -->
    <th>Nombre</th>
    <th>correo</th>
    <th>Telefono</th>
    <!-- <th>Dirección</th> -->
    <th>Status</th>
    <th>Modifica</th>
    <th>Borrar</th>
  </tr>
  </thead>
  <tbody>
    <?php
    for($i=0; $i<count($datos['data']); $i++){
      print "<tr>";
      // print "<td>".$datos["data"][$i]["id"]."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["nombre_proveedor"]."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["correo"]."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["telefono_proveedor"]."</td>";
      //print "<td class='text-left'>".$datos["data"][$i]["direccion"]."</td>";
      if ($datos["data"][$i]["status"]==1) {
        print "<td class='text-center activo'>".'Activo'."</td>";
      }elseif ($datos["data"][$i]["status"]==0) {
        print "<td class='text-center inactivo'>".'Inactivo'."</td>";
      }

      print "<td><a href='".RUTA."admonProveedores/cambio/".$datos["data"][$i]["id"]."' 
              class='btn btn-info'><i class='bi bi-gear text-right'></i></a></td>";
      print "<td><a href='".RUTA."admonProveedores/baja/".$datos["data"][$i]["id"]."'
             class='btn btn-danger'><i class='bi bi-trash text-right'></i></a></td>";
      print "</tr>";
    }
    ?>
  </tbody>
  </table>
  
</div><!--card-->
<?php include_once("piepagina.php"); ?>
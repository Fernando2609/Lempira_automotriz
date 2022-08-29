<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Lista de Autos</h1>
<div class="card p-4 bg-light">
<div class="d-flex justify-content-between text-uppercase ">
<a href="<?php print RUTA; ?>admonProductos/alta" class="btn btn-success boton1">Dar de alta un Auto    
   <i class="bi bi-plus-square align-content-end"></i>
 </a>
 <br>
  <a href="<?php print RUTA; ?>AdmonPlantilla/productos" class="btn btn-success w-25">REPORTE PDF
  </a>
  <br>
  <a href="<?php print RUTA; ?>AdmonPlantilla/productos_e" class="btn btn-success w-25">REPORTE EXCEL
  </a>
  </div>
  <table class="table table-striped mt-3" width="100%">
  <thead>
    <tr style='text-align: center;'>
    <th>Marca</th>
    <th>Modelo</th>
    <!-- <th>Chasis</th> -->
    <th>Precio</th>
    <th>Color</th>
    <th>Status</th>
    <th>Modificar</th>
    <th>Borrar</th>
  </tr>
  </thead>
  <tbody>
    <?php
    for($i=0; $i<count($datos['data']); $i++){
      //borrar
      //$marca= $datos["marcaNombre"][$i]["DESCRIPCION"]-1;
      //var_dump($datos["marcaNombre"]);
      print "<tr style='text-align: center;'>";
      print "<td class='text-center'>".$datos["data"][$i]["MARCA"]."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["MODELO"]."</td>";
      //print "<td class='text-left'>".$datos["data"][$i]["NUMERO_CHASIS"]."</td>";
      // print "<td class='text-left'>".$datos["marcaNombre"][$i]["DESCRIPCION"]."</td>";
      //print "<td class='text-left'>".$datos["marca"][$i]["DESCRIPCION"]."</td>";
      print "<td class='text-center'>"."L.".number_format($datos["data"][$i]["PRECIO"])."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["COLOR"]."</td>";
      if ($datos["data"][$i]["status"]==1) {
        print "<td class='text-center activo'>".'Activo'."</td>";
      }elseif ($datos["data"][$i]["status"]==2) {
        print "<td class='text-center inactivo'>".'Inactivo'."</td>";
      }
      
      
      
      //Botones
      print "<td><a href='".RUTA."admonProductos/cambio/".$datos["data"][$i]["ID_AUTO"]."' 
              class='btn btn-info'><i class='bi bi-gear text-right'></i></a></td>";
      print "<td><a href='".RUTA."admonProductos/baja/".$datos["data"][$i]["ID_AUTO"]."'
             class='btn btn-danger'>  <i class='bi bi-trash text-right'></i></a></td>";
      print "</tr>";
    }
    ?>
  </tbody>
  </table>
  
</div><!--card-->
<?php include_once("piepagina.php"); ?>
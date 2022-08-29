<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Lista de Colores</h1>
<div class="card p-4 bg-light">
<div class="d-flex justify-content-between text-uppercase ">
<a href="<?php print RUTA; ?>admonColor/alta" class="btn btn-success boton1">Dar de alta una Color    
   <i class="bi bi-plus-square align-content-end"></i></a>
  <br>
  <a href="<?php print RUTA; ?>AdmonPlantilla/color" class="btn btn-success w-25">REPORTE PDF
  </a>
  <br>
  <a href="<?php print RUTA; ?>AdmonPlantilla/colore" class="btn btn-success w-25">REPORTE EXCEL
  </a>
  </div> 

<table class="table table-striped mt-3 text-center  table-hover " width="100%">
  <thead>
    <tr>
    <th>Color</th>
    <th>Borrar</th>
  </tr>
  </thead>
  <tbody>
    <?php
    for($i=0; $i<count($datos['data']); $i++){
      //borrar
      //$marca= $datos["marcaNombre"][$i]["DESCRIPCION"]-1;
      //var_dump($datos["marcaNombre"]);
      print "<tr>";
    //  print "<td class='text-left'>".$datos["data"][$i]["ID_COLORAUTO"]."</td>";
      print "<td class='text-centere'>".$datos["data"][$i]["DESCRIPCION"]."</td>";
      //Botones
      print "<td><a href='".RUTA."admonColor/baja/".$datos["data"][$i]["ID_COLORAUTO"]."'
             class='btn btn-danger'><i class='bi bi-trash text-right'></i></a></td>";
      print "</tr>";
    }
    ?>
  </tbody>
  </table>
  
</div><!--card-->
<?php include_once("piepagina.php"); ?>
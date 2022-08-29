<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Lista de Marcas</h1>
<div class="card p-4 bg-light">
<div class="d-flex justify-content-between text-uppercase ">
<a href="<?php print RUTA; ?>admonMarca/alta" class="btn btn-success boton1">Dar de alta una Marca
<i class="bi bi-plus-square align-content-end"></i></a>
  <br>
  <a href="<?php print RUTA; ?>AdmonPlantilla/marca" class="btn btn-success w-25">REPORTE PDF
  </a>
  <br>
  </a>
  <a href="<?php print RUTA; ?>AdmonPlantilla/marca_e" class="btn btn-success w-25">REPORTE EXCEL
  </a>
  </div>
  <table class="table table-striped mt-3 text-center table-hover" width="100%">
  <thead>
    <tr>
    <th>ID</th>
    <th>Marca</th>
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
     print "<td class='text-center'>".$datos["data"][$i]["ID_MARCA"]."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["DESCRIPCION"]."</td>";
      //Botone
      print "<td><a href='".RUTA."admonMarca/baja/".$datos["data"][$i]["ID_MARCA"]."'
             class='btn btn-danger'><i class='bi bi-trash text-right'></i></a></td>";
      print "</tr>";
    }
    ?>
  </tbody>
  </table>
  
</div><!--card-->
<?php include_once("piepagina.php"); ?>
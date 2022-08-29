<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("content-Disposition: attachment; filename=reporte_autos.xls");
?>
<img src=C:\xampp\htdocs\lempira_automotriz\public\img\imagen.png width="250" height="100" " >
<h2>  REPORTE PRODUCTOS</h2>
<table border="1">
<tr  bgcolor=#00FFFF>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Chasis</th>
    <th>Precio</th>
    <th>Color</th>
    <th>Status</th>
  </tr>
  </thead>
  <tbody>
    <?php
    for($i=0; $i<count($datos['data']); $i++){
      //borrar
      //$marca= $datos["marcaNombre"][$i]["DESCRIPCION"]-1;
      //var_dump($datos["marcaNombre"]);
      print "<tr>";
      print "<td class='text-left'>".$datos["data"][$i]["MARCA"]."</td>";
      print "<td class='text-left'>".$datos["data"][$i]["MODELO"]."</td>";
      print "<td class='text-left'>".$datos["data"][$i]["NUMERO_CHASIS"]."</td>";
      // print "<td class='text-left'>".$datos["marcaNombre"][$i]["DESCRIPCION"]."</td>";
      //print "<td class='text-left'>".$datos["marca"][$i]["DESCRIPCION"]."</td>";
      print "<td class='text-center'>"."L.".number_format($datos["data"][$i]["PRECIO"])."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["COLOR"]."</td>";
      if ($datos["data"][$i]["status"]==1) {
        print "<td class='text-center'>".'Activo'."</td>";
      }elseif ($datos["data"][$i]["status"]==2) {
        print "<td class='text-center'>".'Inactivo'."</td>";
      }
      
    }
    ?>
  </tbody>
  </table>
  
</div><!--card-->
<?php include_once("piepagina.php"); ?>
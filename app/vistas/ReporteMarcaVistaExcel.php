<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("content-Disposition: attachment; filename=reporte_marcas.xls");
?>
<img src=C:\xampp\htdocs\lempira_automotriz\public\img\imagen.png width="250" height="100" " >
<h2>  REPORTE MARCAS</h2>
<table border="1">
<tr  bgcolor=#00FFFF>
    <th>ID</th>
    <th>Marca</th>
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
    }
    ?>
  </tbody>
  </table>
  
</div><!--card-->
<?php include_once("piepagina.php"); ?>
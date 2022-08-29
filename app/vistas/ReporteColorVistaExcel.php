<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("content-Disposition: attachment; filename=reporte_colores.xls");
?>
<img src=C:\xampp\htdocs\lempira_automotriz\public\img\imagen.png width="250" height="100" " >
<h2>  REPORTE COLOR</h2>
<table border="1">
<tr  bgcolor=#00FFFF>
    <th>Color</th>
    </tr>
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
     
    }
    ?>
  </tbody>
  </table>
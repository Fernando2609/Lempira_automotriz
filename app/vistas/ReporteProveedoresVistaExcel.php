<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("content-Disposition: attachment; filename=reporte_proveedores.xls");
?>
<img src=C:\xampp\htdocs\lempira_automotriz\public\img\imagen.png width="250" height="100" " >
<h2>  REPORTE PROVEEDORES</h2>
<table border="1">
<tr  bgcolor=#00FFFF>
    <th>id</th>
    <th>Nombre</th>
    <th>correo</th>
    <th>Telefono</th>
    <th>Dirección</th>
   </tr>
    <tbody>
    <?php
    for($i=0; $i<count($datos['data']); $i++){
      print "<tr>";
      print "<td>".$datos["data"][$i]["id"]."</td>";
      print "<td class='text-left'>".$datos["data"][$i]["nombre_proveedor"]."</td>";
      print "<td class='text-left'>".$datos["data"][$i]["correo"]."</td>";
      print "<td class='text-left'>".$datos["data"][$i]["telefono_proveedor"]."</td>";
      print "<td class='text-left'>".$datos["data"][$i]["direccion"]."</td>";
     }
    ?>
  </tbody>
  </table>
  
</div><!--card-->
<?php include_once("piepagina.php"); ?>
<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("content-Disposition: attachment; filename=reporte_administradores.xls");
?>

<img src=C:\xampp\htdocs\lempira_automotriz\public\img\imagen.png width="250" height="100" " >
<h2>  REPORTE  USUARIOS</h2>
<table border="1">
<tr  bgcolor=#00FFFF>
    <th>id</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Status</th>
   </tr>
  </thead>
  <tbody>
    <?php
    for($i=0; $i<count($datos['data']); $i++){
      print "<tr>";
      print "<td>".$datos["data"][$i]["id"]."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["nombre"]."</td>";
      print "<td class='text-center'>".$datos["data"][$i]["correo"]."</td>";
      if ($datos["data"][$i]["status"]==1) {
        print "<td class='text-center activo'>".'Activo'."</td>";
      }elseif ($datos["data"][$i]["status"]==0) {
        print "<td class='text-center inactivo'>".'Inactivo'."</td>";
      }
      
    }
    ?>
  </tbody>
  </table>
  
</div><!--card-->
<?php include_once("piepagina.php"); ?>
<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Ventas Detalle</h1>

<div class="card p-4 bg-light d-flex">
<a href="<?php print RUTA; ?>carrito/ventas" class="btn btn-success boton1">
Regresar</a>
  <table class="table table-striped" width="100%">
  <thead>
    <tr>
    <th>Id</th>
    <th>Fecha</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Envío</th>
    <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $can=0;
    $tot = 0;
    $env = 0;
    $cos = 0;
    for($i=0; $i<count($datos['data']); $i++){
      $total = $datos["data"][$i]["precio"] + $datos["data"][$i]["envio"];
      print "<tr>";
     // print "<td>".$datos["data"][$i]["id_usuario"]."</td>";
     print "<td> <abbr style='cursor:pointer; text-decoration:none;' title= ".$datos['data'][$i]['nombre'].">".$datos["data"][$i]["id_usuario"]."</td></abbr>"; 
     print "<td>".$datos["data"][$i]["fecha"]."</td>";
     print "<td class='text-left'>".number_format($datos["data"][$i]["precio"],2)."</td>";
     print "<td class='text-left'>".number_format($datos["data"][$i]["cantidad"])."</td>";
     print "<td class='text-left'>".number_format($datos["data"][$i]["envio"],2)."</td>";
     print "<td class='text-left'>".number_format($total,2)."</td>";
 
      print "</tr>";
      $tot+= $total;
      $env+= $datos["data"][$i]["envio"];
      $cos+= $datos["data"][$i]["precio"];
      $can+= $datos["data"][$i]["cantidad"];
    }
    print "<tr>";
   print "<td></td>";
    print "<td class='font-weight-bold'>Totales:</td>";
   print "<td></td>";
    //print "<td class='text-left'>".number_format($cos,2)."</td>";
    print "<td class='text-left font-weight-bold'>".number_format($can,)."</td>";    
    print "<td class='text-left font-weight-bold'>".number_format($env,2)."</td>";
    print "<td class='text-left font-weight-bold'>".number_format($tot,2)."</td>";
    print "</tr>";
    
    ?>
  </tbody>
  </table>
  
</div><!--card-->

<?php include_once("piepagina.php"); ?>
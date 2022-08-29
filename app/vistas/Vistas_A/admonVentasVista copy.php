<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Ventas por Usuario</h1>
<div class="card p-4 bg-light">
<a href="<?php print RUTA; ?>carrito/grafica" class="btn btn-success boton1">
  Gráfica de Ventas por Día <i class="bi bi-bar-chart-line-fill" style="color: whitesmoke; font-size: 1.2rem;"></i>
</a>
<br>
<a href="<?php print RUTA; ?>carrito/graficames" class="btn btn-success boton1">
  Gráfica de ventas por Mes <i class="bi bi-bar-chart-line-fill" style="color: whitesmoke; font-size: 1.2rem;"></i>
</a>
<br>
<a href="<?php print RUTA; ?>carrito/graficamarca" class="btn btn-success boton1">
  Gráfica de Ventas por Marca en Lempiras <i class="bi bi-bar-chart-line-fill" style="color: whitesmoke; font-size: 1.2rem;"></i>
</a>
<br>
<a href="<?php print RUTA; ?>carrito/graficamarcacantidad" class="btn btn-success boton1">
  Gráfica de Ventas por Marca en Cantidad <i class="bi bi-bar-chart-line-fill" style="color: whitesmoke; font-size: 1.2rem;"></i>
</a>
<br>
<a href="<?php print RUTA; ?>carrito/graficamodelo" class="btn btn-success boton1">
  Gráfica de Ventas por Modelo en Lempiras <i class="bi bi-bar-chart-line-fill" style="color: whitesmoke; font-size: 1.2rem;"></i>
</a>
<br>
<a href="<?php print RUTA; ?>carrito/graficamodelocantidad" class="btn btn-success boton1">
  Gráfica de Ventas por Modelo en Cantidad<i class="bi bi-bar-chart-line-fill" style="color: whitesmoke; font-size: 1.2rem;"></i>
</a>
<br>
<a href="<?php print RUTA; ?>carrito/graficaauto" class="btn btn-success boton1">
  Gráfica de Ventas por Auto <i class="bi bi-bar-chart-line-fill" style="color: whitesmoke; font-size: 1.2rem;"></i>
</a>
<br>

  <table class="table table-striped" width="100%">
  <thead>
    <tr>
    <th>Id</th>
    <th>Fecha</th>
    <th>Costo</th>
    <th>Envío</th>
    <th>ISV</th>
    <th>Total</th>
    <th>Detalle</th>
  </tr>
  </thead>
  <tbody>
    <?php
    $tot = 0;
    $isv = 0;
    $env = 0;
    $cos = 0;
    for($i=0; $i<count($datos['data']); $i++){
      $total = $datos["data"][$i]["costo"] + $datos["data"][$i]["envio"];
      print "<tr>";
      print "<td <abbr style='cursor: pointer; text-decoration:none;' title= ".$datos['data'][$i]['nombre'].">".$datos["data"][$i]["id_usuario"]."</td></abbr>";
      print "<td>".$datos["data"][$i]["fecha"]."</td>";
      print "<td class='text-left'>".number_format($datos["data"][$i]["costo"],2)."</td>";
      print "<td class='text-left'>".number_format($datos["data"][$i]["envio"],2)."</td>";
      print "<td class='text-left'>".number_format($datos["data"][$i]["costo"]*0.15,2)."</td>";
      print "<td class='text-left'>".number_format($total,2)."</td>";
 
      print "<td><a href='".RUTA."carrito/detalle/".substr($datos["data"][$i]["fecha"],0,10)."/".$datos["data"][$i]["id_usuario"]."' class='btn btn-info'>Detalle <i class='bi bi-journal-text'></i>
      </a></td>";
      print "</tr>";
      $tot+= $total;
      $env+= $datos["data"][$i]["envio"];
      $cos+= $datos["data"][$i]["costo"];
      $isv+= $cos*0.15;
    }
    print "<tr>";
    print "<td></td>";
    print "<td class='font-weight-bold'>Totales:</td>";
    print "<td class='text-left font-weight-bold'>".number_format($cos,2)."</td>";
    print "<td class='text-left font-weight-bold'>".number_format($env,2)."</td>";
    print "<td class='text-left font-weight-bold'>".number_format($isv,2)."</td>";
    print "<td class='text-left font-weight-bold'>".number_format($tot,2)."</td>";
    print "<td></td>";
    print "</tr>";
    ?>
  </tbody>
  </table>
  
</div><!--card-->

<?php include_once("piepagina.php"); ?>
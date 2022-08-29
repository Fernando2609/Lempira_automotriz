<?php include_once("encabezado.php"); ?>
<div class="card" id="contenedor">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Iniciar sesión</a></li>
      <li class="breadcrumb-item"><a href="#">Datos de envío</a></li>
      <li class="breadcrumb-item"><a href="#">Forma de pago</a></li>
      <li class="breadcrumb-item">Verifica datos</li>
    </ol>
  </nav>
  <h2>Verifique los datos</h2>
  <?php
  $verifica = false;
  $subtotal = 0;
  $envio = 0;
 print "Modo de pago: ".$datos["pago"]."<br>";
 print "Nombre: ".$datos["data"]["nombre"]."<br>";
 print "Direccion:"." ".$datos["data"]["direccion"]."<br>";
 print "Telefono Celular:"." ".$datos["data"]["telefono_celular"]."<br>";
 print "Telefono Fijo:"." ".$datos["data"]["telefono_fijo"]."<br>";
 print "No. Identidad:"." ".$datos["data"]["no_identidad"]."<br>";
//
//
//
print "<table class='table table-strped' width='100%'>";
print "<tr>";
print "<th width='12%'>Producto</th>";
print "<th width='35%'>Descripción</th>";
print "<th width='1.8%'>Cant.</th>";
print "<th width='20.12%'>Precio</th>";
print "<th width='10.12%'>Subtotal</th>";
print "<th width='1%'>&nbsp;</th>";
print "</tr>";
//ciclo para llebnar la tabla
for ($i=0; $i < count($datos["carrito"]); $i++) { 
  //Variables de trabajo
  //$desc = "<b>".$datos["data"][$i]["nombre"]."</b>";
  //$desc.= substr(html_entity_decode($datos["data"][$i]["descripcion"]),0,200);
  $nom = $datos["carrito"][$i]["autos"];
  $num = $datos["carrito"][$i]["usuario"];
  $can = $datos["carrito"][$i]["cantidad"];
  $pre = $datos["carrito"][$i]["precio"];
  $img = $datos["carrito"][$i]["imagen"];
  //$des = $datos["data"][$i]["descuento"];
  $env = $datos["carrito"][$i]["envio"];
  $tot = $can*$pre;
  //IMPRESION DE LOS VARIABLES DE LA TABLA
  print "<tr>";
  print "<td><img src='".RUTA."img/".$img."' width='105' alt'".$nom."'></td>";
  print "<td>".$datos["carrito"][$i]["marca"]." ".$datos["carrito"][$i]["modelo"]." ".$datos["carrito"][$i]["AÑO_AUTO"]."</td>";
  print "<td class='text-right'>";
  print "<input type='number' name='c".$i."' class='text-right' ";
  print "value='".number_format($can,0)."' min='1' max='1'/>";
  print "<input type='hidden' name='i".$i."' value='".$num."'/>";
  print "</td>";
  print "<td class='text-right'>L.".number_format($pre,2)."</td>";
  print "<td class='text-right'>L.".number_format($tot,2)."</td>";
  //
  //Subtotales CALCULOS
  //
  $subtotal += $tot;
  $envio += $env;
}
$total = $subtotal + $envio;
print "</table>";
print "<hr>";
//
//Tabla de totales
//
print "<table width='100%' class='text-right'>";
print "<tr>";
print "<td width='79.85%'></td>";
print "<td width='11.55%'>Subtotal:</td>";
print "<td width='9.20%'>L.".number_format($subtotal,2)."</td>";
print "</tr>";

print "<tr>";
print "<td width='79.85%'></td>";
print "<td width='11.55%'>Envío:</td>";
print "<td width='9.20%'>L.".number_format($envio,2)."</td>";
print "</tr>";

print "<tr>";
print "<td width='79.85%'></td>";
print "<td width='11.55%'>Total:</td>";
print "<td width='9.20%'>L.".number_format($total,2)."</td>";
print "</tr>";
//BOTONES

print "<tr>";
print "<td></td>";
print "<td></td>";
  print "<td><a href='".RUTA."carrito/gracias' class='btn btn-success' role='button'>Pagar</a></td>";
"</tr>";
print "</table>";

  ?>
</div>
        
<?php include_once("piepagina.php"); ?>
<?php include_once ("encabezado.php");
print "<h2 class='text-center'>".$datos["data"]["MARCA"]." ".$datos["data"]["MODELO"]." ".$datos["data"]["AÑO_AUTO"]. "</h2>";
print "<img src='".RUTA."img/".$datos["data"]["IMAGEN_AUTO"]."' class='rounded float-right'/>";
//carritos


    print "<h4>Marca del vehículo:</h4>";
    print "<p>".$datos["data"]["MARCA"]."</p>";

    print "<h4>Modelo del vehículo:</h4>";
    print "<p>".$datos["data"]["MODELO"]."</p>";

    print "<h4>Color del auto:</h4>";
    print "<p>".$datos["data"]["COLOR"]."</p>";

    print "<h4>Precio (LPS):</h4>";
    print "<p>L.".number_format($datos["data"]["PRECIO"],2)."</p>";




print "<a href=".RUTA. "Tienda class='btn btn-success'/>Regresa</a>";
include_once("piepagina.php"); ?>

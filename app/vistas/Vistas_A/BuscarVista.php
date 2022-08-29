<?php include_once("encabezado.php"); ?>
        <h1 class="text-center">RESULTADOS</h1>
        <div class="card p-4 bg-light">
  
          <?php
         $ren = 0;
            for ($i=0; $i < count($datos["data"]); $i++) {
              if ($ren==0){
                      print "<div class= 'row'>";
              }
              print "<div class='card pt-2 col-sm-3'>";
              print "<img src='".RUTA."img/".$datos ['data'][$i]["IMAGEN_AUTO"]." ' ";
              print "class= img-responsive' style= 'width:100% ; height:120px;";
              print "alt=' ".$datos['data'][$i]["id"]. "'/>";
              print "<p><a href='".RUTA."admonProductos/producto/";
              print $datos['data'][$i]["ID_AUTO"]."'>";
              print $datos['data'][$i]["MARCA"].' '.$datos['data'][$i]["MODELO"].' '.$datos['data'][$i]["AÑO_AUTO"]."</a></p>";
              print "</div>";
              $ren++;
              if ($ren==4){
                $ren = 0;
                print "</div>";
                
              }
            }
             ?>
        </div><!--card-->       
<?php include_once("piepagina.php"); ?>
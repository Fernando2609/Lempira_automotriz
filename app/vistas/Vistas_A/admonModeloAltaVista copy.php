<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Registrar Modelo</h1>
<div class="card p-4 bg-light mb-5">
  <form action="<?php print RUTA; ?>admonModelo/alta/" method="POST" enctype="multipart/form-data">

  <div class="form-group text-left">
      <label for="DESCRIPCION">Modelo</label>
      <input type="text" name="DESCRIPCION" class="form-control" required
      placeholder="Escribe la descripcion del auto"  
      value="<?php 
      print isset($datos['data']['DESCRIPCION'])?$datos['data']['DESCRIPCION']:''; 
      ?>"
      >
    </div>
    <div class="form-group ">
      <label for="marca">Selecciones una Marca</label>
      <select class="form-control" name="marca" id="marca">
        <option value="void">Seleccione una marca para el Auto</option>
        <?php
        for ($i=0; $i < count($datos["marca"]); $i++) { 
            print "<option value='".$datos["marca"][$i]["ID_MARCA"]."'";
            if (isset($datos["data"]["marca"])) {
              if ($datos["data"]["marca"]==$datos["marca"][$i]["ID_MARCA"]) {
                print " selected ";
              }
            }
            
            print ">".$datos["marca"][$i]["DESCRIPCION"]."</option>";
        }
        ?>
      </select>
    </div>
    <div class="form-group text-left">
      <input type="submit" value="Registrar" class="btn btn-success">
      <a href="<?php print RUTA; ?>admonModelo" class="btn btn-info">Regresar</a>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
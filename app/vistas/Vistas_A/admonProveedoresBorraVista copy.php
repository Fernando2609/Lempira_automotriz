<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Borrar Proveedor</h1>
<div class="card p-4 bg-light">
<form action="<?php print RUTA; ?>admonProveedores/baja/" method="POST">


<div class="form-group text-left">
      <label for="nombre_proveedor">Nombre del proveedor:</label>
      <input type="text" name="nombre_proveedor" class="form-control"
      placeholder="Escribe tu nombre" disabled
      value="<?php 
      print isset($datos['data']['nombre_proveedor'])?$datos['data']['nombre_proveedor']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="correo">Correo del proveedor:</label>
      <input type="email" name="correo" class="form-control" disabled
      placeholder="Escribe tu usuario (tu correo electrónico)"
      value="<?php 
      print isset($datos['data']['correo'])?$datos['data']['correo']:''; 
      ?>"
      >
    </div>

    <div class="form-group">
      <label for="status">Selecciona un status</label>
      <select class="form-control" name="status" id="status" disabled>
        <option value="void">Selecciona el status del usuario</option>
        <?php
        for ($i=0; $i < count($datos["status"]); $i++) { 
          print "<option value='".$datos["status"][$i]["indice"]."'";
          if($datos["status"][$i]["indice"]==$datos["data"]["status"]){
            print " selected ";
          }
          print ">".$datos["status"][$i]["cadena"]."</option>";
        }
        ?>
      </select>
    </div>

    <div class="form-group text-left">
      <input type="hidden" id="id" name="id" value="<?php print $datos['data']['id']; ?>"/>
      <input type="submit" value="Si" class="btn btn-danger">
      <a href="<?php print RUTA; ?>admonProveedores" class="btn btn-danger">No</a>
      <p>Una vez que los datos son borrados, no se puede recuperar.</p>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>

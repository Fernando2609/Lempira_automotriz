<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Registrar Nuevo Proveedor</h1>
<div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>admonProveedores/alta/" method="POST">

  <div class="form-group text-left">
      <label for="nombre_proveedor">* Nombre del Proveedor:</label>
      <input type="text" name="nombre_proveedor" class="form-control"
      placeholder="Escriba el nombre del proveedor" 
      required value="<?php 
      print isset($datos['data']['nombre_proveedor'])?$datos['data']['nombre_proveedor']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="correo">* Correo del proveedor:</label>
      <input type="correo" name="correo" class="form-control" required
      placeholder="Escribe el correo electrónico del proveedor"
      required value="<?php 
      print isset($datos['data']['correo'])?$datos['data']['correo']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="telefono_proveedor">* Teléfono:</label>
      <input type="text" name="telefono_proveedor" class="form-control"
      placeholder="Escribe el telefono del proveedor" 
      required value="<?php 
      print isset($datos['data']['telefono_proveedor'])?$datos['data']['telefono_proveedor']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="direccion">* Dirección:</label>
      <input type="text" name="direccion" class="form-control"
      placeholder="Escribe la dirección" 
      required value="<?php 
      print isset($datos['data']['direccion'])?$datos['data']['direccion']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <input type="submit" value="Registrar" class="btn btn-success">
      <a href="<?php print RUTA; ?>admonProveedores" class="btn btn-info">Regresar</a>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
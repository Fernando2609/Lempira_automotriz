<?php include_once("encabezado.php"); ?>
        <h1 class="text-center">Cambia tu contraseña de acceso</h1>
        <div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>login/cambiarClave/" method="POST">
    
    <div class="form-group text-left">
      <label for="clave1">Contraseña de acceso:</label>
      <input type="password" name="clave1" class="form-control">
    </div>

    <div class="form-group text-left">
      <label for="clave2">Repite la contraseña de acceso:</label>
      <input type="password" name="clave2" class="form-control">
    </div>

    <div class="form-group text-left">
      <input type="hidden" name="id" value="<?php print $datos['data'];?>"/>
      <input type="submit" value="Cambiar Contraseña" class="btn btn-success">
      <a href="<?php print RUTA.'login/'; ?>" class='btn btn-info'">Regresar</a>
    </div>
    
  </form>
</div><!--card-->
 
<?php include_once("piepagina.php"); ?>
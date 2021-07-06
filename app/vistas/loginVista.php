<?php include_once("encabezado.php"); ?>
        <h1 class="text-center">Login</h1>
        <div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>login/verifica/" method="POST">
    <div class="form-group text-left">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" placeholder="Escriba su correo electrónico"
      value="<?php print isset($datos['data']['email'])?$datos['data']['email']:'';?>">
    </div>
    <div class="form-group text-left">
      <label for="clave">Contraseña acceso:</label>
      <input type="password" name="clave" class="form-control" placeholder="Escriba su contraseña (sin espacios en blanco"
      value="<?php print isset($datos['data']['clave'])?$datos['data']['clave']:'';?>">
    </div>
    <div class="form-group text-left">
      <input type="submit" value="Enviar" class="btn btn-success">
    </div>
    <input type="checkbox" name="recordar" >
    <?php
     if(isset ($datos['data']['recordar'])){
       if($datos['data']['recordar']=="on") print "checked";
     }
    ?>
      <label for="recordar">Recordar</label>
  </form>
</div><!--card-->
  <a href="<?php print RUTA; ?>login/registro/" >Registrarse en el sistema</a><br>
  <a href="<?php print RUTA; ?>login/olvido/">¿Olvidaste tu clave de acceso?</a>
<?php include_once("piepagina.php"); ?>
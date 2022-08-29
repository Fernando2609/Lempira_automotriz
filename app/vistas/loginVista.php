<?php include_once("encabezado.php"); 
?>

        <!-- <h1 class="text-center text-uppercase">Login</h1>
        <div class="card p-4   ">
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
</div>
  <a href="<?php print RUTA; ?>login/registro/" >Registrarse en el sistema    <i class="bi bi-people-fill"></i></a><br>
  <a href="<?php print RUTA; ?>login/olvido/">¿Olvidaste tu clave de acceso?<i class="bi bi-arrow-right-circle-fill"></i></a> -->
  <form action="<?php print RUTA; ?>login/verifica/" method="POST" class="login">
  <img src="<?php print RUTA.'public/img/imagen.png';?>" alt="" class="imagen">
  <div>
  <label for="email" class="email font-weight-bold" >Email:</label>
  <input class="input" type="email" name="email" placeholder="Escriba su correo electrónico"
    value="<?php print isset($datos['data']['email'])?$datos['data']['email']:'';?>">
  </div>
  <div class="form-group text-left mb-4">
      <label for="clave" class="font-weight-bold">Contraseña acceso:</label>
      <input type="password" name="clave" class="input" placeholder="Escriba su contraseña"
      value="<?php print isset($datos['data']['clave'])?$datos['data']['clave']:'';?>">
    </div>
    <div class="form-group d-flex justify-content-between">
      <input type="submit" value="Iniciar Sesión" class="btn btn-success boton1">
      <a class="a text-right align-middle" href="<?php print RUTA; ?>login/registro/" >Registrarse en el sistema    <i class="bi bi-people-fill"></i></a>
        
    </div>
    
    <div class=" d-flex justify-content-between">
      <div>
    <input type="checkbox" name="recordar" class="cheked">
    <label for="recordar">Recordar</label>
    <?php
     if(isset ($datos['data']['recordar'])){
       if($datos['data']['recordar']=="on");
     }
    ?>
    </div>
     <a class="a" href="<?php print RUTA; ?>login/olvido/">¿Olvidaste tu clave de acceso?   <i class="bi bi-arrow-right-circle-fill"></i></a>
  </div>
 <!--  <a href="https://www.youtube.com/watch?v=V_GEclQMu6A
  " class="link">¿Has olvidado tu contraseña?</a> -->
  </form>





  <?php include_once("piepagina.php"); ?>
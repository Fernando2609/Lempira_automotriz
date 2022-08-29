<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Módulo administrativo</h1>
<div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>admon/verifica/" method="POST">
    <div class="form-group text-left">
      <label for="email" class="font-weight-bold">Correo:</label>
      <input type="text" name="email" class="form-control"
      placeholder="Escribe tú correo electrónico"
      value="<?php 
      print isset($datos['data']['email'])?$datos['data']['email']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="clave" class="font-weight-bold">Clave acceso:</label>
      <input type="password" name="clave" class="form-control"
      placeholder="Escribe tú clave de acceso (sin espacios en blanco)"
      value="<?php 
      print isset($datos['data']['clave'])?$datos['data']['clave']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left mt-5">
      <input type="hidden" name="id" id="id" value="
      <?php  
       if (isset($datos["data"]["id"])) {
       print $datos["data"]["id"];
    }
    else {
      print "3";
    }
  
        ?> 
      ">
    </div>
    <div class="form-group text-left">
       <input type="submit" value="Iniciar Sesión" class="btn btn-success"> 
    </div>
    
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
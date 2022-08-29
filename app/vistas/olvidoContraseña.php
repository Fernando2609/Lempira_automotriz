<?php include_once("encabezado.php"); ?>
        <h1 class="text-center bg-light font-weight-bold mt-4"><?php print $datos["subtitulo"];?></h1>
        <div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>login/olvido/" method="POST">
    
    <div class="form-group text-left">
      <label for="email">Correo electrónico:</label>
      <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group text-left">
      <input type="submit" value="Enviar" class="btn btn-success">
      <a href="<?php print RUTA; ?>" class="btn btn-info">Regresar</a>
    </div>
  </form>
  <p>Se te enviara un correo, favor de verificar tu bandeja de entrada.</p>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Modificar Color</h1>
<div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>admonColor/cambio/" method="POST">
    
   <div class="form-group text-left">
      <label for="DESCRIPCION">* Nombre del color:</label>
      <input type="text" name="DESCRIPCION" class="form-control"
      placeholder="Escribe el nombre del color." required
      value="<?php 
      print isset($datos['data']['DESCRIPCION'])?$datos['data']['DESCRIPCION']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
    <input type ="hidden" ID_MARCA="ID_COLORAUTO" name="ID_COLORAUTO" require value = "<?php print $datos['data']['ID_COLORAUTO']; ?>"/>
      <input type="submit" value="Modificar" class="btn btn-success">
      <a href="<?php print RUTA; ?>admonColor" class="btn btn-info">Regresar</a>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
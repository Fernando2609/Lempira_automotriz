<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Modificar Marca</h1>
<div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>admonMarca/cambio/" method="POST">
    
   <div class="form-group text-left">
      <label for="DESCRIPCION">* Nombre de la marca:</label>
      <input type="text" name="DESCRIPCION" class="form-control"
      placeholder="Escribe el nombre de la marca." required
      value="<?php 
      print isset($datos['data']['DESCRIPCION'])?$datos['data']['DESCRIPCION']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
    <input type ="hidden" ID_MARCA="ID_MARCA" name="ID_MARCA" require value = "<?php print $datos['data']['ID_MARCA'] ?>" />
      <input type="submit" value="Modificar" class="btn btn-success">
      <a href="<?php print RUTA; ?>admonMarca" class="btn btn-info">Regresar</a>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
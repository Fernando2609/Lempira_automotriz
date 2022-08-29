<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Modificar Modelo</h1>
<div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>admonModelo/cambio/" method="POST">
    
   <div class="form-group text-left">
      <label for="DESCRIPCION">* Nombre del modelo:</label>
      <input type="text" name="DESCRIPCION" class="form-control"
      placeholder="Escriba el nombre del modelo." required
      value="<?php 
      print isset($datos['data']['DESCRIPCION'])?$datos['data']['DESCRIPCION']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
    <input type ="hidden" ID_MARCA="ID_MODELO" name="ID_MODELO" require value = "<?php print $datos['data']['ID_MODELO']; ?>"/>
      <input type="submit" value="Modificar" class="btn btn-success">
      <a href="<?php print RUTA; ?>admonModelo" class="btn btn-info">Regresar</a>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
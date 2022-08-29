<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Borrar una Color</h1>
<div class="card p-4 bg-light">
<form action="<?php print RUTA; ?>admonColor/baja/" method="POST">

    <div class="form-group text-left">
      <label for="DESCRIPCION">COLOR:</label>
      <input type="text" name="DESCRIPCION" class="form-control"
      placeholder="Escribe tu Marca" disabled
      value="<?php 
      print isset($datos['data']['DESCRIPCION'])?$datos['data']['DESCRIPCION']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <input type="hidden" id="ID_COLORAUTO" name="ID_COLORAUTO" value="<?php print $datos['data']['ID_COLORAUTO']; ?>"/>
      <input type="submit" value="Si" class="btn btn-danger">
      <a href="<?php print RUTA; ?>admonColor" class="btn btn-danger">No</a>
      <p>Una vez que los datos son borrados, no se puede recuperar.</p>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>

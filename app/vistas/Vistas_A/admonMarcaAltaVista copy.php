<?php include_once("encabezado.php"); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<h1 class="text-center bg-light font-weight-bold mt-4">Registrar Marca</h1>
<div class="card p-4 bg-light mb-5">
  <form action="<?php print RUTA; ?>AdmonMarca/alta/" method="POST" enctype="multipart/form-data">
  <!--- Aca empieza el cambio-->
  <div class="form-group text-left">
      <label for="DESCRIPCION">Marca</label>
      <input type="text" name="DESCRIPCION" class="form-control" required
      placeholder="Escribe la descripcion del auto"  
      value="<?php 
      print isset($datos['data']['DESCRIPCION'])?$datos['data']['DESCRIPCION']:''; 
      ?>"
      >
    </div>
      
    <div class="form-group text-left">
      <input type="submit" value="Registrar" class="btn btn-success">
      <a href="<?php print RUTA; ?>admonMarca" class="btn btn-info">Regresar</a>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
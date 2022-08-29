<?php include_once("encabezado.php"); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<h1 class="text-center bg-light font-weight-bold mt-4">Borrar auto</h1>
<div class="card p-4 bg-light mb-5">
  <form action="<?php print RUTA; ?>admonProductos/baja/" method="POST" enctype="multipart/form-data">
  <!--- Aca empieza el cambio-->
  
    <div class="form-group">
      
    <h3 class="text-center alert alert-warning">¿ESTAS SEGURO QUE QUIERES ELIMINAR ESTE AUTO?</h3>
    
    <div class="form-group text-center ">
      <input type="hidden" name="id" id="id" value="<?php  
      print $datos["data"]["ID_AUTO"];
      
      ?>">
      <input type="submit" value="Eliminar" class="btn btn-danger mt-3 mb-3">
      <a href="<?php print RUTA; ?>admonProductos" class="btn btn-info mt-3 mb-3">Cancelar</a>
      <p>Una Vez que los datos son Borrados, no se pueden Recuperar</p>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
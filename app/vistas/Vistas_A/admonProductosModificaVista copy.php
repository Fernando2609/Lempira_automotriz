<?php include_once("encabezado.php"); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<h1 class="text-center bg-light font-weight-bold mt-4">Modificar Datos del auto</h1>
<div class="card p-4 bg-light mb-5">
  <form action="<?php print RUTA; ?>admonProductos/cambio/" method="POST" enctype="multipart/form-data">
  <!--- Aca empieza el cambio-->
  
    <div class="form-group">
      <label for="color">Selecciones una color</label>
      <select name="color" id="color" class="form-control">
      <option value="void">Seleccione una color para el Auto</option>
      <?php  
      for ($i=0; $i < count($datos["color"]); $i++) { 
       print "<option value='".$datos["color"][$i]["ID_COLORAUTO"]."'";
       if (isset($datos["data"]["color"])) {
        if ($datos["data"]["color"]==$datos["color"][$i]["ID_COLORAUTO"]) {
          print " selected ";
        }
      }
       print "'>".$datos["color"][$i]["DESCRIPCION"]."</option>";
      }
      ?>
      </select>
    </div>  
    <div class="form-group">
      <label for="uso">Selecciones el uso</label>
      <select name="uso" id="uso" class="form-control">
      <option value="uso">Seleccione un color para el Auto</option>
      <?php  
      for ($i=0; $i < count($datos["uso"]); $i++) { 
       print "<option value='".$datos["uso"][$i]["ID_USOAUTO"]."'";
       if (isset($datos["data"]["uso"])) {
        if ($datos["data"]["uso"]==$datos["uso"][$i]["ID_USOAUTO"]) {
          print " selected ";
        }
      }
       print "'>".$datos["uso"][$i]["DESCRIPCION"]."</option>";
      }
      ?>
      </select>
    </div>
    <div class="form-group text-left">
      <label for="PRECIO">Precio</label>
      <input type="text" name="PRECIO" class="form-control" required
      pattern="^(\d|-)?(\d|,)*\.?\d*$" 
      placeholder="Escribe el precio del producto sin comas ni simbolos"
      value="<?php 
      print isset($datos['data']['PRECIO'])?$datos['data']['PRECIO']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
     <!--  <label for="NUMERO_CHASIS">Numero del chasis</label> -->
      <input type="hidden" name="NUMERO_CHASIS" class="form-control" required 
      placeholder="Escribe el NUMERO DEL CHASIS"
      value="<?php 
      print isset($datos['data']['NUMERO_CHASIS'])?$datos['data']['NUMERO_CHASIS']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="IMAGEN_AUTO">* Imagen del Auto:</label>
      <input type="file" name="IMAGEN_AUTO" class="form-control" 
      accept="image/jpeg" value="<?php
        print $datos['data']['IMAGEN_AUTO'];
      
      ?>"/>
      <?php
        print "<p>".$datos['data']['IMAGEN_AUTO']."</p>";
      
      ?>
    </div>

    <div class="form-group text-left">
      <label for="AÑO_AUTO">Año del auto</label>
      <input type="text" name="AÑO_AUTO" class="form-control" required
      placeholder="Escribe el año del auto"
      value="<?php 
      print isset($datos['data']['AÑO_AUTO'])?$datos['data']['AÑO_AUTO']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="KILOMETRAJE">Kilometraje</label>
      <input type="text" name="KILOMETRAJE" class="form-control" required
      placeholder="Escribe el kilometraje del auto"
      value="<?php 
      print isset($datos['data']['KILOMETRAJE'])?$datos['data']['KILOMETRAJE']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="MOTOR_SERIE">Serie del motor</label>
      <input type="text" name="MOTOR_SERIE" class="form-control" required
      placeholder="Escribe la serie del motor del auto"
      value="<?php 
      print isset($datos['data']['MOTOR_SERIE'])?$datos['data']['MOTOR_SERIE']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="CILINDRAJE">Cilindraje</label>
      <input type="text" name="CILINDRAJE" class="form-control" required
      placeholder="Escribe el cilindraje del auto"
      value="<?php 
      print isset($datos['data']['CILINDRAJE'])?$datos['data']['CILINDRAJE']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="POTENCIA">Potencia</label>
      <input type="text" name="POTENCIA" class="form-control" required
      placeholder="Escribe la potencia del auto"
      value="<?php 
      print isset($datos['data']['POTENCIA'])?$datos['data']['POTENCIA']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="DESCRIPCION_COMBUSTIBLE">Descripcion del combustible</label>
      <input type="text" name="DESCRIPCION_COMBUSTIBLE" class="form-control" required
      placeholder="Escribe la Descripcion del combustible del auto del auto"
      value="<?php 
      print isset($datos['data']['DESCRIPCION_COMBUSTIBLE'])?$datos['data']['DESCRIPCION_COMBUSTIBLE']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="TRACCION">Traccion</label>
      <input type="text" name="TRACCION" class="form-control" required
      placeholder="Escribe la traccion del auto"  
      value="<?php 
      print isset($datos['data']['TRACCION'])?$datos['data']['TRACCION']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="TRANSMISION">Transmision</label>
      <input type="text" name="TRANSMISION" class="form-control" required
      placeholder="Escribe la trasmision del auto"  
      value="<?php 
      print isset($datos['data']['TRANSMISION'])?$datos['data']['TRANSMISION']:''; 
      ?>"
      >
    </div>
    <div class="form-group">
      <label for="status">Selecciones el status del producto</label>
      <select name="status" id="status" class="form-control">
      <option value="void">Seleccione el status del Auto</option>
      <?php  
      for ($i=0; $i < count($datos["statusProducto"]); $i++) { 
       print "<option value='".$datos["statusProducto"][$i]["indice"]."'";
       if(isset($datos["data"]["status"])){ 
         if($datos["data"]["status"]==$datos["statusProducto"][$i]["indice"]){
           print " selected ";
          }
        }
       print "'>".$datos["statusProducto"][$i]["cadena"]."</option>";
      }
      ?>
    </div>
    <div class="form-group text-left mt-5">
      <input type="hidden" name="id" id="id" value="<?php  
      print $datos["data"]["ID_AUTO"];
      
      ?> ">
      <input type="submit" value="Enviar" class="btn btn-success mt-3">
      <a href="<?php print RUTA; ?>admonProductos" class="btn btn-info mt-3">Regresar</a>
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
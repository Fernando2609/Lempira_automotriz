<?php include_once("encabezado.php"); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<h1 class="text-center bg-light font-weight-bold mt-4">Registrar Auto</h1>
<div class="card p-4 bg-light mb-5">
  <form action="<?php print RUTA; ?>admonProductos/alta/" method="POST" enctype="multipart/form-data">
  <!--- Aca empieza el cambio-->
  <div class="form-group ">
      <label for="marca">Selecciones una Marca</label>
      <select class="form-control" name="marca" id="marca">
        <option value="void">Seleccione una marca para el Auto</option>
        <?php
        for ($i=0; $i < count($datos["marca"]); $i++) { 
            print "<option value='".$datos["marca"][$i]["ID_MARCA"]."'";
            if (isset($datos["data"]["marca"])) {
              if ($datos["data"]["marca"]==$datos["marca"][$i]["ID_MARCA"]) {
                print " selected ";
              }
            }
            
            print ">".$datos["marca"][$i]["DESCRIPCION"]."</option>";
        }
        ?>
      </select>
    </div>
    <!--- Aca Termina el cambio-->
    
    

    <div class="form-group">
      <label for="modelo">Selecciones un modelo</label>
      <select name="modelo" id="modelo" class="form-control">
      <option value="void">Seleccione un modelo para el Auto</option>
      <?php  
     /* for ($i=0; $i < count($datos["modelo"]); $i++) { 
       print "<option value='".$datos["modelo"][$i]["ID_MODELO"]."'";
        if (isset($datos["data"]["modelo"])) {
          if ($datos["data"]["modelo"]==$datos["modelo"][$i]["ID_MODELO"]) {
            print " selected ";
          }
        }
       print "'>".$datos["modelo"][$i]["DESCRIPCION"]."</option>";
      }*/
      ?>
      </select>
    </div>
    <div class="form-group">
      <label for="tipo">Selecciones una tipo</label>
      <select name="tipo" id="tipo" class="form-control">
      <option value="void">Seleccione una tipo para el Auto</option>
      <?php  
      for ($i=0; $i < count($datos["tipo"]); $i++) { 
       print "<option value='".$datos["tipo"][$i]["ID_TIPOAUTO"]."'";
       if (isset($datos["data"]["tipo"])) {
        if ($datos["data"]["tipo"]==$datos["tipo"][$i]["ID_TIPOAUTO"]) {
          print " selected ";
        }
      }
       print "'>".$datos["tipo"][$i]["DESCRIPCION"]."</option>";
      }
      ?>
      </select>
    </div>  
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
      <label for="NUMERO_CHASIS">Numero del chasis</label>
      <input type="text" name="NUMERO_CHASIS" class="form-control" required
      placeholder="Escribe el NUMERO DEL CHASIS"
      value="<?php 
      print isset($datos['data']['NUMERO_CHASIS'])?$datos['data']['NUMERO_CHASIS']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="IMAGEN_AUTO">* Imagen del Auto:</label>
      <input type="file" name="IMAGEN_AUTO" class="form-control" 
      accept="image/jpeg"/>
      <?php
      if (isset($datos['data']['IMAGEN_AUTO'])){
        print "<p>".$datos['data']['IMAGEN_AUTO']."</p>";
      }
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
      <input type="text" name="KILOMETRAJE" class="form-control" 
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
      
   <!--  <div class="form-group text-left mt-5">
      <input type="hidden" name="id" id="id" value="
        <?php  
       //   if (isset($datos["data"]["ID_AUTO"])) {
         //  print $datos["data"]["ID_AUTO"];
          //}
          //else {
            //print "";
          //}
        
        ?> 
      ">-->
      <input type="submit" value="Enviar" class="btn btn-success mt-3">
      <a href="<?php print RUTA; ?>admonProductos" class="btn btn-info mt-3">Regresar</a>
    </div>
  </form>
</div><!--card-->
<script>
	    var http_request = false;

marca=document.getElementById("marca");
marca.addEventListener("change", leemarca, false);
  function leemarca(e){
        marcaid=this.value;
        url= "http://localhost:8080/lempira_automotriz/admonProductos/leemodelo.php?idmarca=7";
      //Limpiar el combo modelo
      modelo=document.getElementById("modelo");
      while(modelo.length>0) modelo.remove(0);
      var modelo_array= creaArreglo(marcaid);
      var indice2= creaArregloid(marcaid);
      //Poblamos el combobox del país
      for (var i = 0; i < modelo_array.length; i++) {
        crearOpcion(modelo, i, modelo_array[i])
    }   

  }
  function crearOpcion(combo, indice, valor) {
        var miOpcion = new Option(valor, String(indice));
        eval(combo.options[indice]=miOpcion);
      }
  function creaArreglo(marca){
    var modelo_array=[];
    <?php 
    for ($i=0; $i < count($datos["modelo"]); $i++) { 
      ?>
      
      if (marca== <?php print $datos["modelo"][$i]["ID_MARCA"]; ?>) {
        modelo_array.push("<?php print $datos["modelo"][$i]["DESCRIPCION"]; ?>")
      }
     
      <?php
    }
    ?>
    return modelo_array;
  }
  function creaArregloid(marca){
    
    var indice2=[];
    <?php 
    for ($i=0; $i < count($datos["modelo"]); $i++) { 
      ?>
      
      if (marca== <?php print $datos["modelo"][$i]["ID_MARCA"]; ?>) {
        indice2.push("<?php print $datos["modelo"][$i]["ID_MODELO"]; ?>");
        
      }
     
      <?php
    }
    ?>
    return indice2;
  }
</script>
<?php include_once("piepagina.php"); ?>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
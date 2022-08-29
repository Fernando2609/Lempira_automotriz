<?php include_once("encabezado.php"); ?>
<h1 class="text-center bg-light font-weight-bold mt-4">Modificar Proveedor</h1>
<div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>admonProveedores/cambio/" method="POST">
    
  <div class="form-group text-left">
      <label for="nombre_proveedor">* Nombre del proveedor:</label>
      <input type="text" name="nombre_proveedor" class="form-control"
      placeholder="Escribe el nombre del proveedor." required
      value="<?php 
      print isset($datos['data']['nombre_proveedor'])?$datos['data']['nombre_proveedor']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="correo">* Correo electrónico:</label>
      <input type="email" name="correo" class="form-control" required
      placeholder="Escribe el correo electrónico del proveedor."
      value="<?php 
      print isset($datos['data']['correo'])?$datos['data']['correo']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="telefono_proveedor">* Teléfono Proveedor:</label>
      <input type="text" name="telefono_proveedor" class="form-control"
      placeholder="Escribe el telefono del proveedor." required
      value="<?php 
      print isset($datos['data']['telefono_proveedor'])?$datos['data']['telefono_proveedor']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="direccion">* Dirección:</label>
      <input type="text" name="direccion" class="form-control"
      placeholder="Escribe la dirección del proveedor." required
      value="<?php 
      print isset($datos['data']['direccion'])?$datos['data']['direccion']:''; 
      ?>"
      >
    </div>

    <div class="form-group">
      <label for="status">Selecciona un status</label>
      <select class="form-control" name="status" id="status">
        <option value="void">Selecciona el status del proveedor</option>
        <?php  
      for ($i=0; $i < count($datos["status"]); $i++) { 
       print "<option value='".$datos["status"][$i]["indice"]."'";
       if(isset($datos["data"]["status"])){ 
         if($datos["data"]["status"]==$datos["status"][$i]["indice"]){
           print " selected ";
          }
        }
       print "'>".$datos["status"][$i]["cadena"]."</option>";
      }
      ?>
      </select>

    </div>


    <div class="form-group text-left">
    <input type ="hidden" id="id" name="id" value = "<?php print $datos['data']['id']; ?>"/>
      <input type="submit" value="Modificar" class="btn btn-success">
      <a href="<?php print RUTA; ?>admonProveedores" class="btn btn-info">Regresar</a>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
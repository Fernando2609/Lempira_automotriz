<?php include_once("encabezado.php"); ?>
<h1 class="text-center">Modifica un usuario administrativo</h1>
<div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>admonUsuarios/cambio/" method="POST">
    <div class="form-group text-left">
      <label for="correo">* Correo:</label>
      <input type="email" name="correo" class="form-control" required
      placeholder="Escribe tu usuario (tu correo electrónico)"
      value="<?php 
      print isset($datos['data']['correo'])?$datos['data']['correo']:''; 
      ?>"
      >

   
    <div class="form-group text-left">
      <label for="clave_actual">* Contraseña actual:</label>
      <input type="password" name="clave_actual" class="form-control"
      placeholder="Escribe tu contraseña de acceso actual."
      value="<?php 
      print isset($datos['data']['clave_actual'])?$datos['data']['clave_actual']:''; 
      ?>" 
      >

    </div>
    <div class="form-group text-left">
      <label for="clave1">Clave acceso: (SI NO DESEA DEJE EN BLANCO)</label>
      <input type="password" name="clave1" class="form-control"
      placeholder="Escribe tu clave de acceso (sin espacios en blanco)"
      value=""
      >
    </div>
    <div class="form-group text-left">
      <label for="clave2">Verifica la clave acceso:</label>
      <input type="password" name="clave2" class="form-control"
      placeholder="Verifica la clave de acceso (sin espacios en blanco)"
      value=""
      >
    </div>

    <div class="form-group text-left">
      <label for="nombre">* Nombre:</label>
      <input type="text" name="nombre" class="form-control"
      placeholder="Escribe tu nombre" required
      value="<?php 
      print isset($datos['data']['nombre'])?$datos['data']['nombre']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="telefono_celular">* Teléfono Celular:</label>
      <input type="text" name="telefono_celular" class="form-control"
      placeholder="Escribe tu telefono celular" required
      value="<?php 
      print isset($datos['data']['telefono_celular'])?$datos['data']['telefono_celular']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="telefono_fijo">* Teléfono Fijo:</label>
      <input type="text" name="telefono_fijo" class="form-control"
      placeholder="Escribe tu telefono fijo" required
      value="<?php 
      print isset($datos['data']['telefono_fijo'])?$datos['data']['telefono_fijo']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="direccion">* Dirección:</label>
      <input type="text" name="direccion" class="form-control"
      placeholder="Escribe tu dirección" required
      value="<?php 
      print isset($datos['data']['direccion'])?$datos['data']['direccion']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <label for="no_identidad">* Número de Identidad:</label>
      <input type="text" name="no_identidad" class="form-control"
      placeholder="Escribe tu número de identidad" required
      value="<?php 
      print isset($datos['data']['no_identidad'])?$datos['data']['no_identidad']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <label for="fecha_nacimiento">* Fecha de Nacimiento:</label>
      <input type="date" name="fecha_nacimiento" class="form-control"
      placeholder="Escribe tu fecha de nacimiento" required
      value="<?php 
      print isset($datos['data']['fecha_nacimiento'])?$datos['data']['fecha_nacimiento']:''; 
      ?>"
      >
    
    </div>

    <div class="form-group">
      <label for="status">Selecciona un status</label>
      <select class="form-control" name="status" id="status">
        <option value="void">Selecciona el status del usuario</option>
        <?php
        for ($i=0; $i < count($datos["status"]); $i++) { 
          print "<option value='".$datos["status"][$i]["indice"];
          print "'>".$datos["status"][$i]["cadena"]."</option>";
        }
        ?>
      </select>

    </div>


    <div class="form-group text-left">
    <input type ="hidden" id="id" name="id" value = "<?php print $datos['data']['id']; ?>"/>
      <input type="submit" value="Enviar" class="btn btn-success">
      <a href="<?php print RUTA; ?>admonUsuarios" class="btn btn-info">Regresar</a>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>
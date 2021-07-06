<?php include_once("encabezado.php"); ?>
<h2 class="text-center">Registro</h2>
<form action="<?php print RUTA; ?>login/registro/" method="POST">

    <div class="form-group text-left">
      <label for="nombre">* Nombre completo:</label>
      <input type="text" name="nombre" id="nombre" class="form-control"  placeholder="Escriba su nombre" 
      required value='<?php isset($datos["data"]["nombre"])? print $datos["data"]["nombre"]:""; ?>' />
    </div>

    <div class="form-group text-left">
      <label for="correo">* Ingrese su correo:</label>
      <input type="email" name="correo" id="correo" class="form-control" required placeholder="Escriba su correo electronico" required value='<?php isset($datos["data"]["correo"])? print $datos["data"]["correo"]:""; ?>'/>
    </div>
     
    <div class="form-group text-left">
    <label for="estado_civil">* Seleccione Su Estado Civil</label>
      <select name="estado_civil" id="estado_civil" required value='<?php isset($datos["data"]["estado_civil"])? print $datos["data"]["estado_civil"]:""; ?>' >
        <option value="1">Soltero</option>
        <option value="2">Casado</option>
        <option value="3">Divorciado</option>
        <option value="4">Viudo</option>
      </select>
      </div>
    
    <div class="form-group text-left">
      <label for="sexo">* Seleccione Su Genero</label>
      <select name="sexo" id="sexo" required value='<?php isset($datos["data"]["sexo"])? print $datos["data"]["sexo"]:""; ?>'>
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
      </select>
    </div> 

    <div class="form-group text-left">
      <label for="fecha_nacimiento">* Fecha de nacimiento:</label>
      <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="dd/mm/aaaa" required value='<?php isset($datos["data"]["fecha_nacimiento"])? print $datos["data"]["fecha_nacimiento"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="telefono_celular">* Telefono Celular:</label>
      <input type="text" name="telefono_celular" id="telefono_celular" class="form-control" required placeholder="Escriba su telefono celular" value='<?php isset($datos["data"]["telefono_celular"])? print $datos["data"]["telefono_celular"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="telefono_fijo">* Telefono Fijo:</label>
      <input type="text" name="telefono_fijo" id="telefono_fijo" class="form-control" placeholder="Escriba su telefono fijo (opcional)" required value='<?php isset($datos["data"]["telefono_fijo"])? print $datos["data"]["telefono_fijo"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="direccion">* Dirección:</label>
      <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Escriba su dirección" required value='<?php isset($datos["data"]["direccion"])? print $datos["data"]["direccion"]:""; ?>'/>
    </div>
 
    <div class="form-group text-left">
    <label for="">* Tipo de identidad:</label>
    <select name="identidad" id="identidad">
        <option value="nacional">Nacional</option>
        <option value="Extranjero">Extranjero</option>
      </select>
      </div>


    <div class="form-group text-left">
      <label for="">* Número de identidad:</label>
      <input type="text" name="no_identidad" id="no_identidad" class="form-control" placeholder="Escriba su número de identidad" required value='<?php isset($datos["data"]["no_identidad"])? print $datos["data"]["no_identidad"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="contraseña">* Ingrese su contraseña:</label>
      <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Escriba su contraseña" required value='<?php isset($datos["data"]["contraseña"])? print $datos["data"]["contraseña"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="registrarse"></label>
      <input type="submit" name="registrarse" value="Registrarse"  class="btn btn-success" role="button"/>
      <a href="<?php print RUTA; ?>login/" class="btn btn-info">Regresar</a>
    </div>
</form>
<?php include_once("piepagina.php"); ?>
<?php include_once("encabezado.php");

?>

<h2 class="text-center bg-light font-weight-bold mt-4 p-2">Registro</h2>
<form action="<?php print RUTA; ?>login/registro/" method="POST" class="card p-4 bg-light ">
    <div class="form-group text-left">
      <label for="nombre">* Nombre:</label>
      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba su nombre" 
      required value='<?php isset($datos["data"]["nombre"])? print $datos["data"]["nombre"]:""; ?>' />
    </div>

    <div class="form-group text-left">
      <label for="email">* Correo electrónico:</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Escriba su correo electrónico" required value='<?php isset($datos["data"]["email"])? print $datos["data"]["email"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
    <label for="id_estadocivil">* Seleccione Su Estado Civil</label>
      <select name="id_estadocivil" id="id_estadocivil" required value='<?php isset($datos["data"]["id_estadocivil"])? print $datos["data"]["iid_estadocivil"]:""; ?>'> <!-- Actualizacion -->
        <option value="1">Soltero</option>
        <option value="2">Casado</option>
        <option value="3">Divorciado</option>
        <option value="4">Viudo</option>
      </select>
    </div>

    <div class="form-group text-left">
      <label for="id_sexo">* Seleccione Su Genero</label>
      <select name="id_sexo" id="id_sexo" required value='<?php isset($datos["data"]["id_sexo"])? print $datos["data"]["id_sexo"]:""; ?>'> <!-- Actualizacion -->
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
      </select>
    </div>

    <div class="form-group text-left">
      <label for="fecha_nacimiento">* Fecha de nacimiento:</label>
      <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="Escriba su fecha de nacimiento" required value='<?php isset($datos["data"]["fecha_nacimiento"])? print $datos["data"]["fecha_nacimiento"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="telefono_celular">* Telefono celular:</label>
      <input type="text" name="telefono_celular" id="telefono_celular" class="form-control" placeholder="Escriba su telefono celular" required value='<?php isset($datos["data"]["telefono_celular"])? print $datos["data"]["telefono_celular"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="telefono_fijo">* Telefono fijo:</label>
      <input type="text" name="telefono_fijo" id="telefono_fijo" class="form-control" placeholder="Escriba su telefono fijo" required value='<?php isset($datos["data"]["telefono_fijo"])? print $datos["data"]["telefono_fijo"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="no_identidad">* Número de identidad:</label>
      <input type="text" name="no_identidad" id="no_identidad" class="form-control" placeholder="Escriba su numero de identidad" required value='<?php isset($datos["data"]["no_identidad"])? print $datos["data"]["no_identidad"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="direccion">* Dirección:</label>
      <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Escriba su dirección" required value='<?php isset($datos["data"]["direccion"])? print $datos["data"]["direccion"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="clave1">* Contraseña de acceso:</label>
      <input type="password" name="clave1" id="clave1" class="form-control" placeholder="Escriba su contraseña de acceso" required value='<?php isset($datos["data"]["clave1"])? print $datos["data"]["clave1"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="clave2">* Repetir contraseña de acceso:</label>
      <input type="password" name="clave2" id="clave2" class="form-control" placeholder="Verifique su contraseña de acceso" required value='<?php isset($datos["data"]["clave2"])? print $datos["data"]["clave2"]:""; ?>'/>
    </div>

    
    <div class="form-group text-left">
      <label for="enviar"></label>
      <input type="submit" value="Registrarse"  class="btn btn-success  hvr-float" role="button"/>
      <a href="<?php print RUTA; ?>login/" class="btn btn-info ">Regresar</a>
    </div>
</form>
<?php include_once("piepagina.php"); ?>
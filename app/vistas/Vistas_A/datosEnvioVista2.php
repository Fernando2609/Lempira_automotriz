<?php include_once("encabezado.php");?>
<div class="card p-3" id="contenedor">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Iniciar sesión</a></li>
      <li class="breadcrumb-item">Datos de envío</li>
      <li class="breadcrumb-item"><a href="#">Forma de pago</a></li>
      <li class="breadcrumb-item"><a href="#">Verifica datos</a></li>
    </ol>
  </nav>
<h2>Datos de Envio</h2>
<p>Por Favor verificar los siguientes datos del envío: </p>
<form action="<?php print RUTA; ?>carrito/formaPago/" method="POST" class="card p-4 bg-light ">

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

    <!--<div class="form-group text-left">
      <label for="clave1">* Contraseña de acceso:</label>
      <input type="password" name="clave1" id="clave1" class="form-control" placeholder="Escriba su contraseña de acceso" required value='<?php isset($datos["data"]["clave1"])? print $datos["data"]["clave1"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
      <label for="clave2">* Repetir contraseña de acceso:</label>
      <input type="password" name="clave2" id="clave2" class="form-control" placeholder="Verifique su contraseña de acceso" required value='<?php isset($datos["data"]["clave2"])? print $datos["data"]["clave2"]:""; ?>'/>
    </div>-->

    
    <div class="form-group text-left">
      <label for="enviar"></label>
      <input type="submit" value="Continuar"  class="btn btn-success" role="button"/>
    </div>
</form>
</div>
<?php include_once("piepagina.php"); ?>
<?php include_once("encabezado.php"); ?>
<h2 class="text-center">Registro</h2>
<form action="login/registro/" method="POST">
    <div class="form-group text-left">
      <label for="nombre">* Nombre:</label>
      <input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Escriba su nombre"/>
    </div>

    <div class="form-group text-left">
      <label for="apellidoPaterno">* Apellido Paterno:</label>
      <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" required placeholder="Escriba su apellido paterno"/>
    </div>

    <div class="form-group text-left">
      <label for="apellidoMaterno">Apellido Materno:</label>
      <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control" placeholder="Escriba su apellido materno"/>
    </div>

    <div class="form-group text-left">
      <label for="correo">* Correo electrónico:</label>
      <input type="email" name="correo" id="correo" class="form-control" placeholder="Escriba su correo electrónico"/>
    </div>

    <div class="form-group text-left">
      <label for="clave1">* Clave de acceso:</label>
      <input type="password" name="clave1" id="clave1" class="form-control" placeholder="Escriba su clave de acceso" required />
    </div>

    <div class="form-group text-left">
      <label for="clave2">* Repetir clave de acceso:</label>
      <input type="password" name="clave2" id="clave2" class="form-control" placeholder="Verifique su clave de acceso" required/>
    </div>

    <div class="form-group text-left">
      <label for="direccion">* Dirección:</label>
      <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Escriba su dirección" required />
    </div>

    <div class="form-group text-left">
      <label for="ciudad">* Ciudad:</label>
      <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Escriba su ciudad" required />
    </div>

    <div class="form-group text-left">
      <label for="estado">* Estado:</label>
      <input type="text" name="estado" id="estado" class="form-control" placeholder="Escriba su estado" required />
    </div>

    <div class="form-group text-left">
      <label for="codpos">* Código Postal:</label>
      <input type="text" name="codpos" id="codpos" class="form-control" placeholder="Escriba su código postal" required />
    </div>

    <div class="form-group text-left">
      <label for="pais">* País:</label>
      <input type="text" name="pais" id="pais" class="form-control" placeholder="Escriba su país" required />
    </div>

    <div class="form-group text-left">
      <label for="enviar"></label>
      <input type="submit" value="Enviar datos"  class="btn btn-success" role="button"/>
    </div>
</form>
<?php include_once("piepagina.php"); ?>
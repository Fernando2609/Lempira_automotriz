<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title><?php print $datos["titulo"]; ?></title>
    <link
      href="https://fonts.googleapis.com/css?family=Asap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="http://localhost/lempira_automotriz/public/css/style_registro.css" />
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <form class="registro" action="<?php print RUTA; ?>login/registro/" method="POST">
    <img style="" src="http://localhost/lempira_automotriz/public/img/Imagenes_login/Imagen2.png" alt="" class="imagen">
      <input type="text" placeholder="Ingrese su Nombre" required value='<?php isset($datos["data"]["NOMBRE"])? print $datos["data"]["NOMBRE"]:""; ?>' />
      <input type="email" placeholder="Ingrese su Correo" required value='<?php isset($datos["data"]["CORREO"])? print $datos["data"]["CORREO"]:""; ?>' />
      <label for="">Seleccione Su Estado Civil</label>
      <select name="estado_civil" id="estado_civil">
        <option value="Soltero">Soltero</option>
        <option value="casado">Casado</option>
        <option value="divorciado">Divorciado</option>
        <option value="viudo">Viudo</option>
      </select>
      <label for="">Seleccione Su Genero</label>
      <select name="genero" id="genero">
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
      </select>
      <label for="">Fecha de nacimiento</label>
      <input type="date" name="nacimiento" id="nacimiento" min="1920-01-01" max="2002-12-31" required value='<?php isset($datos["data"]["FECHA_NACIMIENTO"])? print $datos["data"]["FECHA_NACIMIENTO"]:""; ?>' />
      <input type="tel" name="" id="" placeholder="Telefono Celular" required value='<?php isset($datos["data"]["TELEFONO_CELULAR"])? print $datos["data"]["TELEFONO_CELULAR"]:""; ?>' />
      <input type="tel" name="" id="" placeholder="Telefono Fijo (Opcional)" required value='<?php isset($datos["data"]["TELEFONO_FIJO"])? print $datos["data"]["TELEFONO_FIJO"]:""; ?>' />
      <input type="text" placeholder="Direccion" required value='<?php isset($datos["data"]["DIRECCION"])? print $datos["data"]["DIRECCION"]:""; ?>' />
      <label for="">Tipo de identidad</label>
      <select name="identidad" id="identidad">
        <option value="nacional">Nacional</option>
        <option value="Extranjero">Extranjero</option>
      </select>
      <input type="text" placeholder="Ingrese su Identidad" required value='<?php isset($datos["data"]["NO_IDENTIDAD"])? print $datos["data"]["NO_IDENTIDAD"]:""; ?>' >
      <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña" required value='<?php isset($datos["data"]["CONTRASEÑA"])? print $datos["data"]["CONTRASEÑA"]:""; ?>' >

      <button class="button2" value="registrarse" type="submit" role="button">Registrarse</button>
      <button type="button" onclick="location.href='<?php print RUTA;?>login/';"/>Regresar</button>
     
    </form>


  </body>
</html>

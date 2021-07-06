<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php print $datos["titulo"]; ?></title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"><link rel="stylesheet" type="text/css" href="http://localhost/lempira_automotriz/public/css/style_login.css">
</head>

<? if ($datos["menu"]){
    #menu
}
?>

<body>
<!-- partial:index.partial.html -->
<form action="<?php print RUTA;?>login/verifica/" method="POST" class="login">
  <img style="" src="http://localhost/lempira_automotriz/public/img/Imagenes_login/Imagen2.png" alt="" class="imagen">
  <input type="text" placeholder="Correo">
  <input type="password" placeholder="contraseña">

  <button type="button" onclick="location.href='';"/>Iniciar sesión</button>
  <button type="button" onclick="location.href='<?php print RUTA;?>login/registro/';"/>Registrarse</button>

  <a href="<?php print RUTA;?>login/olvido/" class="link">¿Has olvidado tu contraseña?</a>
</form>

<!-- partial -->
  
</body>
</html>

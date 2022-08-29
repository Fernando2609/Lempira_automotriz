<?php
/**
 * Controlador Login
 */
class Login extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("LoginModelo");
  }

  function caratula(){
    if(isset($_COOKIE["datos"])){
      $datos_array = explode("|",$_COOKIE["datos"]);
      $email = $datos_array[0];
      $clave = $datos_array[1];
      $data = [
        "email" => $email,
        "clave" => $clave,
        "recordar" => "on"
      ];
    }else{
      $data = [];
    }
    $datos = [
      "titulo" => "Login",
      "menu" => false,
      "login"=>True,
      "data" => $data
    ];
    $this->vista("loginVista",$datos);
  }

  function olvido(){
    $errores = array();
    $data = array();
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $email = isset($_POST["email"])?$_POST["email"]:"";

        if ($email=="") {
          array_push($errores,"El correo es requerido");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          array_push($errores,"El correo electrónico no es válido");
        }
        if(count($errores)==0){
          if($this->modelo->validaCorreo($email)){
            array_push($errores,"El correo electrónico no es existe en nuestra base de datos!");
          }else{
            //print $email;
            if($this->modelo->enviarCorreo($email)){
              $datos = [
              "titulo" => "Cambio de contraseña de acceso",
              "menu" => false,
              "errores" => [],
              "data" => [],
              "login"=>True,
              "subtitulo" => "Cambio de contraseña de acceso",
              "texto" => "Se ha enviado un correo a ".$email." para que puedas cambiar tu contraseña y puedas acceder. Cualquier duda te puedes comunicar con nosotros.
                          No olvides revisar tu bandeja spam",
              "color" => "alert-success",
              "url" => "login",
              "colorBoton" => "btn-success",
              "textoBoton" => "Regresar"
                  ];
                $this->vista("mensajeVista",$datos);
            }else{
              $datos = [
              "titulo" => "Error en el envio del correo",
              "menu" => false,
              "errores" => [],
              "data" => [],
              "login"=>True,
              "subtitulo" => "Error en el envio del correo",
              "texto" => "Existio un problema al enviar el correo electrónico. Prueba por favor más tarde o comuniquese a nuestro servicio de soporte técnico.",
              "color" => "alert-danger",
              "url" => "login",
              "colorBoton" => "btn-danger",
              "textoBoton" => "Regresar"
                ];
              $this->vista("mensajeVista",$datos);     
            }
          }
        }
    }else{
      $datos = [
        "titulo" => "Recuperar la contraseña",
        "menu" => false,
        "login"=>True,
        "errores" => [],
        "data" => [],
        "subtitulo" => "¿Olvidaste tu contraseña?", 
        ];
        $this->vista("olvidoContraseña",$datos);
    } 
    if(count($errores)){
      $datos = [
        "titulo" => "Recuperar la contraseña",
        "menu" => false,
        "errores" => $errores,
        "login"=>True,
        "subtitulo" => "¿Olvidaste tu contraseña?", 
        "data" => []
        ];
        $this->vista("olvidoContraseña",$datos);
    }
  }

  function registro(){
    $errores = array();
    $data = array();
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
      $email = isset($_POST["email"])?$_POST["email"]:"";
      $id_estadocivil = isset($_POST["id_estadocivil"])?$_POST["id_estadocivil"]:"";  //<!-- Actualizacion -->
      $id_sexo = isset($_POST["id_sexo"])?$_POST["id_sexo"]:"";  //<!-- Actualizacion -->
      $fecha_nacimiento = isset($_POST["fecha_nacimiento"])?$_POST["fecha_nacimiento"]:"";
      $telefono_celular = isset($_POST["telefono_celular"])?$_POST["telefono_celular"]:"";
      $telefono_fijo = isset($_POST["telefono_fijo"])?$_POST["telefono_fijo"]:"";
      $no_identidad = isset($_POST["no_identidad"])?$_POST["no_identidad"]:"";
      $direccion = isset($_POST["direccion"])?$_POST["direccion"]:"";
      $clave1 = isset($_POST["clave1"])?$_POST["clave1"]:"";
      $clave2 = isset($_POST["clave2"])?$_POST["clave2"]:"";
      
      $data = [
        "nombre"=>$nombre,
        "email" => $email,
        "id_estadocivil" => $id_estadocivil, //<!-- Actualizacion -->
        "fecha_nacimiento" => $fecha_nacimiento,
        "id_sexo" => $id_sexo, //<!-- Actualizacion -->
        "telefono_celular" => $telefono_celular,
        "telefono_fijo" => $telefono_fijo,
        "no_identidad" => $no_identidad,
        "direccion" => $direccion,
        "clave1" => $clave1,
        "clave2" => $clave2,
      ];
      //Validación
      if ($nombre=="") {
        array_push($errores,"El nombre es requerido");
      }
      if ($email=="") {
        array_push($errores,"El correo es requerido");
      }
      if ($id_estadocivil=="") {
        array_push($errores,"El estado civil es requerido"); //<!-- Actualizacion -->
      }
      if ($id_sexo=="") {
        array_push($errores,"El genero es requerido"); //<!-- Actualizacion -->
      }
      if ($fecha_nacimiento=="") {
        array_push($errores,"La fecha de nacimiento requerida");
      }
      if ($telefono_celular=="") {
        array_push($errores,"El telefono celular es requerido");
      }
      if ($telefono_fijo=="") {
        array_push($errores,"El telefono fijo es requerido");
      }
      if ($no_identidad=="") {
        array_push($errores,"El numero de identidad es requerido");
      }
      if ($direccion=="") {
        array_push($errores,"La direccion es requerida");
      }
      if ($clave1=="") {
        array_push($errores,"La clave de acceso es requerida");
      }
      if ($clave2=="") {
        array_push($errores,"La clave de acceso es de verificación es requerida");
      }
      
      if ($clave1!=$clave2) {
        array_push($errores,"Las claves de acceso no coinciden");
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errores,"El correo electrónico no es válido");
      }
      if(count($errores)==0){
        $r = $this->modelo->insertarRegistro($data);
        if($r){
          $datos = [
            "titulo" => "Bienvenido A Lempira Automotriz",
            "menu" => false,
            "login"=>True,
            "errores" => [],
            "data" => [],
            "subtitulo" => "¡Bienvenid@ a Nuestra Tienda de Autos Lempira Automotriz!",
            "texto" => "Gracias por su registro!",
            "color" => "alert-success",
            "url" => "menu",
            "colorBoton" => "btn-success",
            "textoBoton" => "Iniciar"
          ];
          $this->vista("mensajeVista",$datos);
        } else {
          $datos = [
            "titulo" => "Error en el registro",
            "menu" => false,
            "login"=>True,
            "errores" => [],
            "data" => [],
            "subtitulo" => "Error en el registro del usuario",
            "texto" => "Existio un error en el registro, es posible que
                        ya exista el correo en nuestra base de datos, favor de verificarlo!",
            "color" => "alert-danger",
            "url" => "registro",
            "colorBoton" => "btn-danger",
            "textoBoton" => "Regresar"
          ];
          $this->vista("mensajeVista",$datos);
        }
      } else {
        $datos = [
        "titulo" => "Registro usuario",
        "menu" => false,
        "login"=>True,
        "errores" => $errores,
        "data" => $data
        ];
        $this->vista("loginRegistroVista",$datos);
      }
    } else {
      $datos = [
      "titulo" => "Registro usuario",
      "login"=>True,
      "menu" => false
      ];
      $this->vista("loginRegistroVista",$datos);
    } 
  }

  function cambiarClave($data){
    $errores = array();
    if($_SERVER['REQUEST_METHOD']=="POST"){
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $clave1 = isset($_POST["clave1"])?$_POST["clave1"]:"";
      $clave2 = isset($_POST["clave2"])?$_POST["clave2"]:"";
      
      if ($clave1=="") {
        array_push($errores,"La contraseña de acceso es requerida");
      }
      if ($clave2=="") {
        array_push($errores,"La contraseña de acceso de verificación es requerida");
      }
      
      if ($clave1!=$clave2) {
        array_push($errores,"Las contraseñas de acceso no coinciden");
      }
        if(count($errores)){
          $datos = [
            "titulo" => "Cambio de contraseña",
            "menu" => false,
            "errores" => $errores,
            "data" => $data 
            ];
            $this->vista("login_cambiar_clave",$datos);
        }else{
         /////no hay errores por ahora
         if($this->modelo->cambiarClaveAcceso(base64_decode($id),$clave1)){
          //no hay errores
          $datos = [
           "titulo" => "Modificar la contraseña de acceso",
           "menu" => false,
           "errores" => [],
           "data" => [],
           "subtitulo" => "Modificar la contraseña de acceso",
           "texto" => "La modificación de la contraseña de acceso fue completamente existosa. Bienvenido nuevamente!" ,
           "color" => "alert-success",
           "url" => "login",
           "colorBoton" => "btn-success",
           "textoBoton" => "Regresar"
           ];
           $this->vista("mensajeVista",$datos);
        }else{
           //error al modificar la contraseña
           $datos = [
            "titulo" => "¡Error al modificar la contraseña de acceso!",
            "menu" => false,
            "errores" => [],
            "data" => [],
            "subtitulo" => "¡Error al modificar la contraseña de acceso!",
            "texto" => "¡Existio un error al modificar la contraseña de acceso!" ,
            "color" => "alert-danger",
            "url" => "login",
            "colorBoton" => "btn-danger",
            "textoBoton" => "Regresar"
            ];
            $this->vista("mensajeVista",$datos);
         }
        }
    }else{
      $datos = [
      "titulo" => "Cambio de contraseña",
      "menu" => false,
      "login"=>True,
      "data" => $data
      ];
      $this->vista("login_cambiar_clave",$datos);
    }
  }

  function verifica(){
    $errores = array();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $email = isset($_POST["email"])?$_POST["email"]:"";
      $clave = isset($_POST["clave"])?$_POST["clave"]:"";
      $recordar = isset($_POST["recordar"])?"on":"off";
      $errores = $this->modelo->verificar($email, $clave);
      
      $valor = $email."|".$clave;
      if($recordar=="on"){
        $fecha = time()+(60*60*24*7);
      }else{
        $fecha = time() - 1;
      }
      setcookie("datos",$valor,$fecha,RUTA);
      //
      $data = [
        "email" => $email,
        "clave" => $clave,
        "recordar" => $recordar
      ];

      if(empty($errores)){
        //Iniciamos sesion
        $data = $this->modelo->getUsuarioCorreo($email);
        $sesion = new Sesion();
        $sesion->iniciarLogin($data);
        //
        header("location:".RUTA. "tienda");
      }else{
        //print "NO TIENE ACCESO.....";
        $datos = [
          "titulo" => "Login",
          "menu" => false,
          "errores" => $errores,
          "login"=>True,
          "data" => $data
        ];
        $this->vista("loginVista",$datos);
      }
    }
  }
}
?> 
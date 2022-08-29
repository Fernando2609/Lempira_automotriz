<?php
/**
 * Controlador Contacto
 */
class Contacto extends Controlador{
  private $modelo;

  function __construct(){}
   
  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas baratos
      //
        $datos = [
        "titulo" => "Contacto",//Contacto
        "activo" => "contacto",
        "menu" => true,
        "tienda"=>true,
        ];
        $this->vista("contactoVista",$datos);
    }else{
        header("location:".RUTA);
        
      }
  }

   public function enviar(){
    $errores = array();
    $data = array();
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $correo = $_POST["correo"]??"";
      $nombre = $_POST["nombre"]??"";
      $observacion = $_POST["observacion"]??"";

        if ($correo=="") {
          array_push($errores,"El correo es requerido");
        }
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
          array_push($errores,"El correo electrónico no es válido");
        }
        if ($nombre=="") {
            array_push($errores,"Su nombre es requerido");
          }
        if ($observacion=="") {
            array_push($errores,"Su observación es requerida");
        }
        if(count($errores)==0){
        //Mail del administrador.
        $email = "lempira.automotrizhn@gmail.com";
        //Enviar correo
        $asunto = "Observación de: ".$nombre;
        $msg = $nombre." ha enviado una observación<br>";
        $msg.= $correo."<br>";
        $msg.= $observacion;
        //$msg.= "<a href='13.90.75.175:8080/lempira_automotriz/login/cambiarClave/1".$id."'>Cambia tu contraseña de acceso</a>";  
        //login/cambiarContraseña/
        $headers = "LEMPIRA_AUTOMOTRÍZ-Version: 1.0\r\n"; 
        $headers.= "Content-type:text/html; charset=UTF-8\r\n"; 
        $headers.= "From:".$nombre."\r\n"; 
        $headers.= "Replay-to:".$correo."\r\n";
    
            //print $email;
            if(mail($email,$asunto, $msg, $headers)){
              $datos = [
              "titulo" => "Envio de observación",
              "menu" => true,
              "errores" => [],
              "data" => [],
              "subtitulo" => "Gracias por su correo",
              "texto" => "En breve nos comunicaremos con usted.",
              "color" => "alert-success",
              "url" => "tienda",
              "colorBoton" => "btn-success",
              "textoBoton" => "Regresar"
                  ];
                $this->vista("mensajeVista2",$datos);
            }else{
              $datos = [
              "titulo" => "Error en el envio del correo",
              "menu" => true,
              "errores" => [],
              "data" => [],
              "subtitulo" => "Error en el envio del correo",
              "texto" => "Existio un problema al enviar el correo electrónico. Prueba por favor más tarde o comuniquese a nuestro servicio de soporte técnico.",
              "color" => "alert-danger",
              "url" => "tienda",
              "colorBoton" => "btn-danger",
              "textoBoton" => "Regresar"
                ];
              $this->vista("mensajeVista2",$datos);     
            }
          
        } else if(count($errores)){
         $datos = [
         "titulo" => "Contacto",
         "menu" => true,
         "errores" => $errores,
         "subtitulo" => "Envio de correo", 
         "data" => []
         ];
        $this->vista("contactoVista",$datos);
        }
    }
  }

}
?> 
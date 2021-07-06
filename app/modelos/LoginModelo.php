<?php
/**
 * Login Modelo
 */
class LoginModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }
  
  function insertarRegistro($data){
    $r = false;
    if ($this->validaCorreo($data["email"])) {
      $clave = hash_hmac("sha512", $data["clave1"], "sistemaweb");
      $sql = "INSERT INTO usuarios VALUES(0,";
      $sql.= "'".$data["nombre"]."', ";
      $sql.= "'".$data["email"]."', ";
      $sql.= "'".$data["fecha_nacimiento"]."', ";
      $sql.= "'".$data["telefono_celular"]."', ";
      $sql.= "'".$data["telefono_fijo"]."', ";
      $sql.= "'".$data["no_identidad"]."', ";
      $sql.= "'".$data["direccion"]."', ";
      $sql.= "'".$clave."')";
      $r = $this->db->queryNoSelect($sql);
    } 
    return $r;
  }

  function validaCorreo($email){
    $sql = "SELECT * FROM usuarios WHERE email='".$email."'";
    $data = $this->db->query($sql);
    return (count($data)==0)?true:false;
  }

  function verificar($email, $clave){
    $errores = array();
    $sql = "SELECT * FROM usuarios WHERE email='".$email."'";
    $clave = hash_hmac("sha512", $clave, "sistemaweb");
    $clave = substr($clave,0,200);
    $data = $this->db->query($sql);
    if(empty($data)){
      array_push($errores, "No existe ese usuario, favor de verficarlo.");
    }else if ($clave!=$data["clave"]) {
      array_push($errores, "Contraseña de acceso erronea, favor de verficarlo.");
    }
    return $errores;
  }

  function getUsuarioCorreo($email){
    $sql = "SELECT * FROM usuarios WHERE email='".$email."'";
    $data = $this->db->query($sql);
    return $data;
  }

  function enviarCorreo($email){
    //print $email;
    $data = $this->getUsuarioCorreo($email);
    //var_dump($data);

    $id = $data["id"];
    $nombre = $data["nombre"];
    $msg = $nombre.", entra al siguiente enlace para cambiar tu contraseña de acceso a Lempira Automotríz....!<br>";
    $msg.= "<a hre='" .RUTA. "/login/cambiarContraseña/".$id."'>Cambia tu contraseña de acceso</a>";   
    
    $headers = "LEMPIRA_AUTOMOTRÍZ-Version: 1.0\r\n"; 
    $headers .= "Content-type:text/html; charset=UTF-8\r\n"; 
    $headers .= "From: lempira_automotriz\r\n"; 
    $headers .= "Repaly-to: lempira_automotriz@tiendavirtual.com\r\n";

    $asunto = "Cambiar clave de acceso";

    return @mail($email,$asunto, $msg, $headers);
  }

  function cambiarClaveAcceso($id, $clave){
    $r = false;
    $clave = hash_hmac("sha512", $clave, "sistemaweb");
    $sql = "UPDATE INTO usuarios SET";
    $sql.= "clave='".$clave."' ";
    $sql.= "WHERE id=".$id;
    $r = $this->db->queryNoSelect($sql);
    return $r;
  }
}
?>
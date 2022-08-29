<?php
/**
 * Modelo Usuarios Admon.
 */
class AdmonUsuariosModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function insertarDatos($data){
    $clave = hash_hmac("sha512", $data["clave1"], LLAVE);
    $sql = "INSERT INTO admon VALUES(0,";
    $sql.= "'".$data['nombre']."', ";
    $sql.= "'".$data['email']."', ";
    $sql.= "'".$clave."', ";
    $sql.= "1, "; // clave
    $sql.= "0, "; //baja
    $sql.= "'".$data['telefono_celular']."', ";
    $sql.= "'".$data['telefono_fijo']."', ";
    $sql.= "'".$data['direccion']."', ";
    $sql.= "'".$data['no_identidad']."', ";
    $sql.= "'".$data['fecha_nacimiento']."', ";
    $sql.= "'', "; //fecha del ultimo login
    $sql.= "'', "; //fecha del baja
    $sql.= "'', "; //fecha del modificacion
    $sql.= "(NOW()))"; //fecha del ultimo login
   return $this->db->queryNoSelect($sql);
  }

  public function getUsuarios(){
    $sql = "SELECT * FROM admon WHERE baja=0 ORDER BY `nombre` ASC";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getLlaves($tipo){
    $sql = "SELECT * FROM llaves WHERE tipo='".$tipo."'ORDER BY indice DESC";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getUsuarioId($id){
    $sql = "SELECT * FROM admon WHERE id=".$id;
    $data = $this->db->query($sql);
    return $data;
  }
  public function getUsuarioId2($correo){
    $sql = "SELECT * FROM admon WHERE correo= '".$correo."'";
    $data = $this->db->query($sql);
    return $data;
  }
  public function bajaLogica($id){
    $errores=array();
    $sql = "UPDATE admon SET baja=1, baja_dt=(NOW()) WHERE id=" .$id;
    if (!$this->db->queryNoSelect($sql)){
      array_push($errores, "Error al Modificar el registro para baja.");
    }
    return $errores;
  }

  public function validarClaveAdmon($data){
    $errores = array();

    $sql ="SELECT * FROM admon WHERE correo = '".$_SESSION['email']['email']."'";
    $clave = hash_hmac("sha512", $data['clave_actual'], LLAVE);
    $clave = substr($clave,0,200);
    $data = $this->db->query($sql);

    if ($clave!=$data['clave']) {
      array_push($errores, "La contraseña ingresada es incorrecta"); 
      return $errores;
    }  
  }

  public function modificaCLaveUsuario($data){
    $errores = array();
    
    $sql = "UPDATE admon SET ";
    if(!empty($data['clave1'] && !empty($data['clave2']))){
      $psw = hash_hmac("sha512", $data["clave1"], LLAVE);
      $sql.= " clave='".$psw."'";
    }
    $sql.= " WHERE correo='".$data['correo']."'";
    if(!$this->db->queryNoSelect($sql)){
      array_push($errores,"Existio un error al actualizar el registro.");
    }

    return $errores;
  }
  
  public function modificaUsuario($data){

    $errores = array();
    
    $sql = "UPDATE admon SET ";
    /* $sql.= "correo='".$data["correo"]."', ";
    $sql.= "nombre='".$data["nombre"]."', ";
    $sql.= "telefono_celular='".$data["telefono_celular"]."', ";
    $sql.= "telefono_fijo='".$data["telefono_fijo"]."', ";
    $sql.= "direccion='".$data["direccion"]."', ";
    $sql.= "no_identidad='".$data["no_identidad"]."', ";
    $sql.= "fecha_nacimiento='".$data["fecha_nacimiento"]."', "; */
    $sql.= "modificado_dt= (NOW()),";
    $sql.= "status=".$data["status"];
    /*if(!empty($data['clave1'] && !empty($data['clave2']))){
      $psw = hash_hmac("sha512", $data["clave1"], LLAVE);
      $sql.= ", clave='".$psw."'";
    }*/
    $sql.= " WHERE id=".$data["id"];
    if(!$this->db->queryNoSelect($sql)){
      array_push($errores,"Existio un error al actualizar el registro.");
    }
    return $errores;
  }
  public function modificaUsuario2($data){

    $errores = array();
    
    $sql = "UPDATE admon SET ";
    $sql.= "correo='".$data["correo"]."', ";
    $sql.= "nombre='".$data["nombre"]."', ";
    $sql.= "telefono_celular='".$data["telefono_celular"]."', ";
    $sql.= "telefono_fijo='".$data["telefono_fijo"]."', ";
    $sql.= "direccion='".$data["direccion"]."', ";
    $sql.= "no_identidad='".$data["no_identidad"]."', ";
    $sql.= "fecha_nacimiento='".$data["fecha_nacimiento"]."', ";
    $sql.= "modificado_dt= (NOW()),";
    $sql.= "status=".$data["status"];
    /*if(!empty($data['clave1'] && !empty($data['clave2']))){
      $psw = hash_hmac("sha512", $data["clave1"], LLAVE);
      $sql.= ", clave='".$psw."'";
    }*/
    $sql.= " WHERE id=".$data["id"];
    if(!$this->db->queryNoSelect($sql)){
      array_push($errores,"Existio un error al actualizar el registro.");
    }

    return $errores;
  }
}

?>
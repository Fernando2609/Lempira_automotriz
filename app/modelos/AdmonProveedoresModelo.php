<?php
/**
 * Modelo Usuarios Admon.
 */
class AdmonProveedoresModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function insertarDatos($data){
   
    $sql = "INSERT INTO proveedor VALUES(0,";
    $sql.= "'".$data['nombre_proveedor']."', ";
    $sql.= "'".$data['correo']."', ";
    $sql.= "'".$data['telefono_proveedor']."', ";
    $sql.= "'".$data['direccion']."', ";
    $sql.= "1, "; // clave
    $sql.= "0, "; //baja
    $sql.= "'', "; //fecha del baja
    $sql.= "'', "; //fecha del modificacion
    $sql.= "(NOW()))"; //fecha del ultimo login
   return $this->db->queryNoSelect($sql);
  }

  public function getProveedores(){
    $sql = "SELECT * FROM proveedor WHERE baja=0";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getLlaves($tipo){
    $sql = "SELECT * FROM llaves WHERE tipo='".$tipo."'ORDER BY indice DESC";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getProveedoresId($id){
    $sql = "SELECT * FROM proveedor WHERE id=".$id;
    $data = $this->db->query($sql);
    return $data;
  }
  public function bajaLogica($id){
    $errores=array();
    $sql = "UPDATE proveedor SET baja=1, baja_dt=(NOW()) WHERE id=" .$id;
    if (!$this->db->queryNoSelect($sql)){
      array_push($errores, "Error al Modificar el registro para baja.");
    }
    return $errores;
  }
  public function modificaProveedores($data){
    $errores = array();
    $sql = "UPDATE proveedor SET ";
    $sql.= "nombre_proveedor='".$data["nombre_proveedor"]."', ";
    $sql.= "correo='".$data["correo"]."', ";
    $sql.= "telefono_proveedor='".$data["telefono_proveedor"]."', ";
    $sql.= "direccion='".$data["direccion"]."', ";
    $sql.= "modificado_dt= (NOW()),";
    $sql.= "status=".$data["status"];
    $sql.= " WHERE id=".$data["id"];
    if(!$this->db->queryNoSelect($sql)){
      array_push($errores,"Existio un error al actualizar el registro del proveedor.");
    }
    return $errores;
  }
}

?>
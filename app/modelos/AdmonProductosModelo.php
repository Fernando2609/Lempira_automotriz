<?php
/**
 * Modelo Productos Admon.
 */
class AdmonProductosModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function insertarDatos($data){
    
  }
  
  public function nombreMarca($marca){
    $sql = "SELECT * FROM marca WHERE ID_MARCA='".$marca."' ";
    
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getProductos(){
    $sql = "SELECT `autos`.*, `modelo`.`DESCRIPCION` as 'MODELO', `marca`.`DESCRIPCION` as 'MARCA', `autos`.`ID_AUTO`, `colorauto`.`DESCRIPCION` as 'COLOR'
    FROM `autos` 
      LEFT JOIN `modelo` ON `autos`.`ID_MODELO` = `modelo`.`ID_MODELO` 
      LEFT JOIN `marca` ON `autos`.`ID_MARCA` = `marca`.`ID_MARCA` 
      LEFT JOIN `colorauto` ON `autos`.`ID_COLORAUTO` = `colorauto`.`ID_COLORAUTO` WHERE baja=0;";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  /* public function getCatalogo(){
    $sql = "SELECT * FROM marca";
    $data = $this->db->querySelect($sql);
    return $data;
  } */
  public function getmarca(){
    $sql = "SELECT * FROM marca ORDER BY `DESCRIPCION` ASC";
    $data = $this->db->querySelect($sql);
    return $data;
  } 
  public function getLlaves($tipo){
    $sql = "SELECT * FROM llaves WHERE tipo='".$tipo."'ORDER BY indice DESC";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  /* public function getMarca(){
    $sql = "SELECT * FROM marca";
    $data = $this->db->querySelect($sql);
    return $data;
  } */
  
  public function getModelo(){
    $sql = "SELECT * FROM modelo ORDER BY `DESCRIPCION` ASC";
    // $sql = "SELECT * FROM modelo where id_marca= ".$id_marca;
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getColor(){
    $sql = "SELECT * FROM colorauto ORDER BY `DESCRIPCION` ASC";
    // $sql = "SELECT * FROM modelo where id_marca= ".$id_marca;
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getTipo(){
    $sql = "SELECT * FROM tipo_auto ORDER BY `DESCRIPCION` ASC";
    // $sql = "SELECT * FROM modelo where id_marca= ".$id_marca;
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getUso(){
    $sql = "SELECT * FROM usoauto";
    // $sql = "SELECT * FROM modelo where id_marca= ".$id_marca;
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getProductoId($id){
    $sql = "SELECT `autos`.*, `modelo`.`DESCRIPCION` as 'MODELO', `marca`.`DESCRIPCION` as 'MARCA', `autos`.`ID_AUTO`, `colorauto`.`DESCRIPCION` as 'COLOR', `tipo_auto`.`DESCRIPCION` as 'TIPO', `usoauto`.`DESCRIPCION` as 'USO'
    FROM `autos` 
      LEFT JOIN `modelo` ON `autos`.`ID_MODELO` = `modelo`.`ID_MODELO` 
      LEFT JOIN `marca` ON `autos`.`ID_MARCA` = `marca`.`ID_MARCA` 
      LEFT JOIN `tipo_auto` ON `autos`.`ID_TIPOAUTO` = `tipo_auto`.`ID_TIPOAUTO`
      LEFT JOIN `usoauto` ON `autos`.`ID_USOAUTO` = `usoauto`.`ID_USOAUTO`
      LEFT JOIN `colorauto` ON `autos`.`ID_COLORAUTO` = `colorauto`.`ID_COLORAUTO` WHERE ID_AUTO= ".$id;
    /*$sql = "SELECT * FROM autos WHERE ID_AUTO= ".$id;*/
    $data = $this->db->query($sql);
    return $data;
  }
  public function bajaLogica($id){
    $errores=array();
    $sql = "UPDATE autos SET baja=1, baja_dt=(NOW()) WHERE ID_AUTO=" .$id;
    if (!$this->db->queryNoSelect($sql)){
      array_push($errores, "Error al Modificar el registro para baja.");
    }
    return $errores;
  }
  public function modificaProducto($data){
    $errores=array();
    $sql="UPDATE autos SET";
    $sql.= " ID_COLORAUTO=".$data["color"].", ";
    $sql.= "ID_USOAUTO =".$data["uso"].", ";
    $sql.= "KILOMETRAJE=".$data["KILOMETRAJE"].", ";
    $sql.= "MOTOR_SERIE='".$data["MOTOR_SERIE"]."', ";
    $sql.= "DESCRIPCION_COMBUSTIBLE='".$data["DESCRIPCION_COMBUSTIBLE"]."', ";
    $sql.= "PRECIO=".$data["PRECIO"].", ";
    $sql.= "CILINDRAJE=".$data["CILINDRAJE"].", ";
    $sql.= "POTENCIA=".$data["POTENCIA"].", ";
    $sql.= "TRACCION='".$data["TRACCION"]."', ";
    $sql.= "TRANSMISION='".$data["TRANSMISION"]."', ";
    $sql.= "IMAGEN_AUTO='".$data["IMAGEN_AUTO"]."', ";
    $sql.= "status=".$data["status"].", ";
    $sql.= "modificado_dt=(NOW()) ";
    $sql.= "WHERE ID_AUTO= ".$data["id"];
    if(!$this->db->queryNoSelect($sql)){
      array_push($errores,"Existio un Error al modificar el registro.");
    }


    //$errores = array();
    //var_dump($data);
    return $errores;
  }
  public function altaProducto($data)
  {
    $sql="INSERT INTO autos VALUES(0,";//1
    $sql.="'".$data['color']."', ";//2          
    $sql.="'".$data['tipo']."', ";//3
    $sql.=$data['PRECIO'].", ";//4
    $sql.="'".$data['modelo']."', ";//5
    $sql.="'".$data['marca']."', ";//6
    $sql.="'".$data['NUMERO_CHASIS']."', ";//7
    $sql.="'".$data['IMAGEN_AUTO']."', ";//8
    $sql.=$data['AÑO_AUTO'].", ";//9
    $sql.="'".$data['uso']."', ";//10
    $sql.="'".$data['KILOMETRAJE']."', ";//11
    $sql.="'".$data['MOTOR_SERIE']."', ";//12
    $sql.="'".$data['TRANSMISION']."', ";//13
    $sql.=$data['CILINDRAJE'].", ";//14
    $sql.=$data['POTENCIA'].", ";//15
    $sql.="'".$data['TRACCION']."', ";//16
    $sql.="'".$data['DESCRIPCION_COMBUSTIBLE']."', ";//17
    $sql.="'".$data['status']."', ";//18
    $sql.= "0, ";                              //19. baja
    $sql.= "(NOW()), ";                        //20. fecha alta
    $sql.= "'', ";                             //21. fecha modificado
    $sql.= "'')"; 
    print $sql;                            //22. fecha baja
    return $this->db->queryNoSelect($sql);
  }
  public function getMasBaratos()
  {
    $sql = "SELECT `autos`.*, `modelo`.`DESCRIPCION` as 'MODELO', `marca`.`DESCRIPCION` as 'MARCA', `autos`.`ID_AUTO`, `colorauto`.`DESCRIPCION` as 'COLOR'
    FROM `autos` 
      LEFT JOIN `modelo` ON `autos`.`ID_MODELO` = `modelo`.`ID_MODELO` 
      LEFT JOIN `marca` ON `autos`.`ID_MARCA` = `marca`.`ID_MARCA` 
      LEFT JOIN `colorauto` ON `autos`.`ID_COLORAUTO` = `colorauto`.`ID_COLORAUTO` WHERE PRECIO < 100000 and status=1  and baja=0 limit 6 ;";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getNuevos()
  {
    $sql = "SELECT `autos`.*, `modelo`.`DESCRIPCION` as 'MODELO', `marca`.`DESCRIPCION` as 'MARCA', `autos`.`ID_AUTO`, `colorauto`.`DESCRIPCION` as 'COLOR'
    FROM `autos` 
      LEFT JOIN `modelo` ON `autos`.`ID_MODELO` = `modelo`.`ID_MODELO` 
      LEFT JOIN `marca` ON `autos`.`ID_MARCA` = `marca`.`ID_MARCA` 
      LEFT JOIN `colorauto` ON `autos`.`ID_COLORAUTO` = `colorauto`.`ID_COLORAUTO` WHERE baja=0 and status=1 ORDER by ID_AUTO DESC LIMIT 6;";
    $data = $this ->db->querySelect($sql);
    return $data;
    
  }
}

?>
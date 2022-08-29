<?php
/**
 * Modelo Marca Admon.
 */
class AdmonMarcaModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getMarcaId($ID_MARCA){
    $sql = "SELECT * FROM marca WHERE ID_MARCA=" .$ID_MARCA;
    $data = $this->db->query($sql);
    return $data;
  }
  public function getMarca(){
    $sql = "SELECT * FROM marca ORDER BY `DESCRIPCION` ASC";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function bajaLogica($ID_MARCA){
    $errores=array();
    $sql = "DELETE FROM marca  WHERE ID_MARCA=" .$ID_MARCA;
    if (!$this->db->queryNoSelect($sql)){
      array_push($errores, "Error al Modificar el registro para baja.");
    }
    return $errores;
  }
  public function altaProducto($data)
  {
    $sql="INSERT INTO marca VALUES(0,";//1
    $sql.="'".$data['DESCRIPCION']."') ";//2
    /* $sql.="'".$data['color']."', ";//3          
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
    $sql.="'".$data['status']."', ";//18 */
   /*  $sql.= "0, ";                              //19. baja
    $sql.= "(NOW()), ";                        //20. fecha alta
    $sql.= "'', ";                             //21. fecha modificado
    $sql.= "'')";  */
    print $sql;                            //22. fecha baja
    return $this->db->queryNoSelect($sql);
  }

  function getMarcaBuscar($Marca){
    $sql = "SELECT `autos`.*,`marca`.*, `modelo`.`DESCRIPCION` as 'MODELO', `marca`.`DESCRIPCION` as 'MARCA', `autos`.`ID_AUTO`, `colorauto`.`DESCRIPCION` as 'COLOR'
    FROM `autos` 
      LEFT JOIN `modelo` ON `autos`.`ID_MODELO` = `modelo`.`ID_MODELO` 
      LEFT JOIN `marca` ON `autos`.`ID_MARCA` = `marca`.`ID_MARCA` 
      LEFT JOIN `colorauto` ON `autos`.`ID_COLORAUTO` = `colorauto`.`ID_COLORAUTO` WHERE autos.baja=0 and";
    $sql.= "`autos`.`ID_MARCA`= '".$Marca."' ";
    /*$sql.= "`modelo`.`DESCRIPCION`%".$buscar."%' OR ";
    $sql.= "`colorauto`.`DESCRIPCION`%".$buscar."%' OR ";
    $sql.= "`AÑO_AUTO`%".$buscar."%'";*/
   // print $sql;
    //
    $data = $this->db->querySelect($sql);
    return $data;
    }
    public function modificaMarca($data){
      $errores = array();
      $sql = "UPDATE marca SET ";
      $sql.= "DESCRIPCION ='".$data["DESCRIPCION"]."'";
      $sql.= " WHERE ID_MARCA =".$data["ID_MARCA"];
      if(!$this->db->queryNoSelect($sql)){
        array_push($errores,"Existio un error al actualizar el registro de la marca.");
      }
      return $errores;
    }

}
  

?>
<?php
/**
 * Modelo Marca Admon.
 */
class AdmonTipoModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  
  public function getTipo(){
    $sql = "SELECT * FROM tipo_auto";
    $data = $this->db->querySelect($sql);
    return $data;
  }
 
  function getTipoBuscar($Tipo){
    $sql = "SELECT `autos`.*, `modelo`.`DESCRIPCION` as 'MODELO', `marca`.`DESCRIPCION` as 'MARCA', `autos`.`ID_AUTO`, `colorauto`.`DESCRIPCION` as 'COLOR'
    FROM `autos` 
      LEFT JOIN `modelo` ON `autos`.`ID_MODELO` = `modelo`.`ID_MODELO` 
      LEFT JOIN `marca` ON `autos`.`ID_MARCA` = `marca`.`ID_MARCA` 
      LEFT JOIN `colorauto` ON `autos`.`ID_COLORAUTO` = `colorauto`.`ID_COLORAUTO` WHERE autos.baja=0 and ";
    $sql.= "`autos`.`ID_TIPOAUTO`= '".$Tipo."' ";
    /*$sql.= "`modelo`.`DESCRIPCION`%".$buscar."%' OR ";
    $sql.= "`colorauto`.`DESCRIPCION`%".$buscar."%' OR ";
    $sql.= "`AÑO_AUTO`%".$buscar."%'";*/
   // print $sql;
    //
    $data = $this->db->querySelect($sql);
    return $data;
    }
    public function getTipoId($ID_TIPO){
      $sql = "SELECT * FROM tipo_auto WHERE ID_TIPOAUTO=".$ID_TIPO;
      $data = $this->db->query($sql);
      return $data;
    }

}
  

?>
<?php
/**
 * Buscar Modelo
 */
class BuscarModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  } 

  function getProductosBuscar($buscar){
  $sql = "SELECT `autos`.*, `modelo`.`DESCRIPCION` as 'MODELO', `marca`.`DESCRIPCION` as 'MARCA', `autos`.`ID_AUTO`, `colorauto`.`DESCRIPCION` as 'COLOR'
  FROM `autos` 
    LEFT JOIN `modelo` ON `autos`.`ID_MODELO` = `modelo`.`ID_MODELO` 
    LEFT JOIN `marca` ON `autos`.`ID_MARCA` = `marca`.`ID_MARCA` 
    LEFT JOIN `colorauto` ON `autos`.`ID_COLORAUTO` = `colorauto`.`ID_COLORAUTO` WHERE autos.baja=0 and autos.status=1 and";
  // $sql.= "`marca`.`DESCRIPCION`= '".$buscar."' OR";
  // $sql.= "`modelo`.`DESCRIPCION`= '".$buscar."' OR";
  // $sql.= "`colorauto`.`DESCRIPCION`= '".$buscar."' OR";
  // $sql.= "`AÑO_AUTO`= '".$buscar."'";
  $sql.= "`marca`.`DESCRIPCION` LIKE '%".$buscar."%' OR";
  $sql.= "`modelo`.`DESCRIPCION` LIKE '%".$buscar."%' OR";
  $sql.= "`colorauto`.`DESCRIPCION` LIKE '%".$buscar."%' OR";
  $sql.= "`AÑO_AUTO` LIKE '%".$buscar."%'";
  /*$sql.= "`modelo`.`DESCRIPCION`%".$buscar."%' OR ";
  $sql.= "`colorauto`.`DESCRIPCION`%".$buscar."%' OR ";
  $sql.= "`AÑO_AUTO`%".$buscar."%'";*/
 // print $sql;
  //
  $data = $this->db->querySelect($sql);
  return $data;
  }

}
?>
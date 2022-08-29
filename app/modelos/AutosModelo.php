<?php
/**
 * Autos Modelo
 */
class AutosModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getAutos(){
    $sql = "SELECT `autos`.*, `modelo`.`DESCRIPCION` as 'MODELO', `marca`.`DESCRIPCION` as 'MARCA', `autos`.`ID_AUTO`, `colorauto`.`DESCRIPCION` as 'COLOR', `tipo_auto`.`DESCRIPCION` as 'TIPO' FROM `autos` 
    LEFT JOIN `modelo` ON `autos`.`ID_MODELO` = `modelo`.`ID_MODELO` 
    LEFT JOIN `marca` ON `autos`.`ID_MARCA` = `marca`.`ID_MARCA`
    LEFT JOIN `tipo_auto` ON `autos`.`ID_TIPOAUTO` = `tipo_auto`.`ID_TIPOAUTO` 
    LEFT JOIN `colorauto` ON `autos`.`ID_COLORAUTO` = `colorauto`.`ID_COLORAUTO` 
    WHERE baja=0 and status=1";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  
}
?>
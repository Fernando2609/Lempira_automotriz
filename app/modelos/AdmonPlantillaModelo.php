<?php
class AdmonPlantillaModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }
  public function getModelo(){
    $sql = "SELECT MO.ID_MODELO,MO.DESCRIPCION as 'Descripcion2', MA.DESCRIPCION from modelo MO inner JOIN marca MA on MO.ID_MARCA=MA.ID_MARCA; ";
    $data = $this->db->querySelect($sql);
    return $data;
  } 
  public function getMarca(){
    $sql = "SELECT ID_MARCA, DESCRIPCION from marca; ";
    $data = $this->db->querySelect($sql);
    return $data;
  } 
  public function getUsuarios(){
    $sql = "SELECT * FROM admon WHERE baja=0";
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
  public function getColor(){
    $sql = "SELECT * FROM colorauto";
    $data = $this->db->querySelect($sql);
    return $data;
  } 

  public function getProveedor(){
  $sql = "SELECT * FROM proveedor WHERE baja=0";
    $data = $this->db->querySelect($sql);
    return $data;
  }
}

?>
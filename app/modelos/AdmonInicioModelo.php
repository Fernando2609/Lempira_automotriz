<?php
/**
 * AdmonInicioModelo
 */
class AdmonInicioModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }
  public function getUsuarios(){
    $sql = "SELECT * FROM admon WHERE baja=0 ORDER BY `nombre` ASC";
    $data = $this->db->querySelect($sql);
    return $data;
  }
  public function getUsuarioId($id){
    $sql = "SELECT * FROM admon WHERE correo='".$id."'";
    $data = $this->db->query($sql);
    return $data;
  }
  public function ventasxdia()
 {
   $data = array();
   $sql="SELECT SUM(a.PRECIO*c.cantidad) + ";
   $sql.="SUM(c.envio * a.PRECIO) as venta, ";
   $sql.="c.fecha as fecha ";
   $sql.="FROM carrito as c, autos as a ";
   $sql.="WHERE c.id_auto=a.ID_AUTO AND ";
   $sql.="c.estado=1 ";
   $sql.= "GROUP BY DATE(c.fecha)";
   return $this->db->querySelect($sql);
 }
 public function contador(){
  $data = array();
  $sql="SELECT COUNT(*) as contador from autos where status=1";
  return $this->db->query($sql);
 }
 public function contador_usuarios(){
  $data = array();
  $sql="SELECT COUNT(*) as 'cuenta' from usuarios";
  return $this->db->query($sql);
 }
 public function contador_ventas(){
  $data = array();
  $sql="SELECT COUNT(*) FROM carrito WHERE estado=1";
  return $this->db->query($sql);
 }
 public function contador_marcas(){
  $data = array();
  $sql="SELECT COUNT(*) FROM marca";
  return $this->db->query($sql);
 }
 public function ventasxmes()
 {
  $data = array();
  $sql="SELECT SUM(a.PRECIO*c.cantidad) + ";
  $sql.="SUM(c.envio * a.PRECIO) as venta, ";
  $sql.="MONTHNAME(c.fecha) as fecha ";
  $sql.="FROM carrito as c, autos as a ";
  $sql.="WHERE c.id_auto=a.ID_AUTO AND ";
  $sql.="c.estado=1 ";
  $sql.= "GROUP BY MONTH(c.fecha)";
  return $this->db->querySelect($sql);
 }
 public function ventasxmodelo()
 {
  $data = array();
  $sql="SELECT SUM(a.PRECIO*c.cantidad) + 
  SUM(c.envio * a.PRECIO) as venta, m.DESCRIPCION as DESCRIPCION
  FROM carrito as c, autos as a, modelo as m 
  WHERE c.id_auto=a.ID_AUTO AND  a.ID_MODELO=m.ID_MODELO AND  
  c.estado=1 
  GROUP BY (c.envio * a.PRECIO) desc limit 6";
  return $this->db->querySelect($sql);
 }
 public function ventasxautocantidad()
 {
  $data = array();
  $sql="SELECT COUNT(a.ID_MARCA)as cantidad,
  m.DESCRIPCION as DESCRIPCION
  FROM carrito as c, autos as a, marca as m
  WHERE c.id_auto=a.ID_AUTO AND  a.ID_MARCA=m.ID_MARCA AND  
  c.estado=1  
  GROUP BY DESCRIPCION";
  return $this->db->querySelect($sql);
 }
}
?>
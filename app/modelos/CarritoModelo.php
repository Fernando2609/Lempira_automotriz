<?php
/**
 * Login Carrito
 */
class CarritoModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }
  //VERIFICA QUE NO SE AGREGUE 2 VECES EL MISMO AUTO
  public function verificaProducto($ID_AUTO, $idUsuario)
  {
    $sql = "SELECT * FROM carrito WHERE id_usuario=".$idUsuario." ";
    $sql.= "AND id_auto=".$ID_AUTO;
    $r = $this->db->querySelect($sql);
    return count($r);
  }
//AGREGAR AUTO AL CARRITO
  public function agregaProducto($ID_AUTO, $idUsuario)
  {
    $sql = "SELECT * FROM autos WHERE ID_AUTO=".$ID_AUTO;
    $data = $this->db->query($sql);

    $sql = "INSERT INTO carrito ";
    $sql.= "SET estado=0, "; //carrito abierto
    //$sql.= "id_auto=".$idProducto.", ";
    $sql.= "id_auto=".$ID_AUTO.", ";
    $sql.= "id_usuario=".$idUsuario.", ";
    //$sql.= "envio=".$data["envio"].", ";//problema
    $sql.= "envio=0.05, ";
    $sql.= "cantidad=1, ";//DETALLE
    $sql.= "fecha=(NOW())";
    return $this->db->queryNoSelect($sql);
  }
  //CON ESTA FUNCION LA UTILIZAMOS PARA MOSTAR LA VISTA
  public function getCarrito($idUsuario)
  {
            $sql= "SELECT c.*,a.*, 
            c.id_usuario as usuario, 
            c.id_auto as autos, 
            c.cantidad as cantidad, 
            a.PRECIO as precio,
            (c.envio * a.PRECIO) as envio, 
            a.IMAGEN_AUTO as imagen,
            co.DESCRIPCION as color,
            US.DESCRIPCION as uso,
            mo.DESCRIPCION as modelo,
            ma.DESCRIPCION as marca
            FROM carrito as c, autos as a , modelo as mo, marca as ma, usoauto as US, colorauto as co
            WHERE c.id_usuario= ".$idUsuario." AND estado=0 AND 
            c.id_auto=a.ID_AUTO  AND a.ID_MARCA=ma.ID_MARCA AND a.ID_MODELO=mo.ID_MODELO and
            a.ID_COLORAUTO=co.ID_COLORAUTO AND a.ID_USOAUTO = US.ID_USOAUTO;";
    return $this->db->querySelect($sql);
  }
  public function getfactura($idUsuario)
  {
    $sql="SELECT a.PRECIO as precio, c.cantidad as cantidad, u.nombre as nombre,  a.*,";
    $sql.="(c.envio * a.PRECIO) as envio,";
    $sql.="c.fecha as fecha, c.id_usuario as id_usuario ";
    $sql.="FROM carrito as c, autos as a, usuarios as u  ";
    $sql.="WHERE c.id_auto=a.ID_AUTO AND ";
    $sql.="c.estado=1 AND";
  //$sql.="c.estado=1  AND";
  //$sql.="DATE(c.fecha)=' ".$fecha."' AND" ;
  $sql.=" c.id_usuario= ".$idUsuario." and u.id= ".$idUsuario;
    return $this->db->querySelect($sql);
  }
  //ELIMINAR UN AUTO DEL CARRITO
  public function borrar($ID_AUTO, $idUsuario)
  {
    $sql = "DELETE FROM carrito WHERE id_usuario=".$idUsuario." AND ";
    $sql.= "id_auto=".$ID_AUTO;
    return $this->db->queryNoSelect($sql);
  }
  public function cierraCarrito($idUsuario,$estado)
  {
     $sql = "UPDATE carrito ";
    $sql.= "SET estado=".$estado.", ";
    $sql.= "fecha=(NOW())";
    $sql.= "WHERE id_usuario=".$idUsuario." AND ";
    $sql.= "estado=0"; 
    
   /*  $sql="UPDATE carrito as c, autos as a";
    $sql.= "set c.estado=".$estado.", ";
    $sql.="c.fecha=(NOW()), a.baja_dt=(NOW()), a.baja=1";
    $sql.="where c.id_usuario=".$idUsuario." AND ";
    $sql.="c.estado=0 and c.id_auto=a.id_auto"; */
    
    return $this->db->queryNoSelect($sql);

    
  }
  public function borrarcarro(){
    $sql="UPDATE autos as a, carrito as c set a.status=0, a.baja=1, a.baja_dt=(NOW()) where c.estado=1 and a.ID_AUTO=c.id_auto and a.baja=0";
    return $this->db->queryNoSelect($sql);
  }
  public function ventas()
  {
    $data = array();
    $sql="SELECT SUM(a.PRECIO*c.cantidad) as costo, a.*, ";
    $sql.="SUM(c.envio * a.PRECIO) as envio,";
    $sql.="c.fecha as fecha, c.id_usuario as id_usuario, u.nombre as nombre ";
    $sql.="FROM carrito as c, autos as a, usuarios as u ";
    $sql.="WHERE c.id_auto=a.ID_AUTO AND ";
    $sql.="c.estado=1 and c.id_usuario=u.id ";
    $sql.="GROUP BY DATE(c.fecha), c.id_usuario ";
    return $this->db->querySelect($sql);
  }
  public function factura($idUsuario)
  {
    $data = array();
    $sql="SELECT a.PRECIO as precio, c.cantidad as cantidad, u.nombre as nombre,  a.*,u.*, ";
    $sql.="(c.envio * a.PRECIO) as envio, co.DESCRIPCION as color,
    US.DESCRIPCION as uso,
    mo.DESCRIPCION as modelo,
    ma.DESCRIPCION as marca,";
    $sql.="c.fecha as fecha, c.id_usuario as id_usuario ";
    $sql.="FROM carrito as c, autos as a, usuarios as u ,modelo as mo, marca as ma, usoauto as US, colorauto as co ";
    $sql.="WHERE c.id_auto=a.ID_AUTO AND a.ID_MARCA=ma.ID_MARCA AND a.ID_MODELO=mo.ID_MODELO and
    a.ID_COLORAUTO=co.ID_COLORAUTO AND a.ID_USOAUTO = US.ID_USOAUTO AND ";
    $sql.="c.estado=1 AND fecha >= DATE_SUB(NOW(),INTERVAL 10 MINUTE) AND ";
  //$sql.="c.estado=1  AND";
  //$sql.="DATE(c.fecha)=' ".$fecha."' AND" ;
  $sql.=" c.id_usuario= ".$idUsuario." and u.id= ".$idUsuario;
    /*$data = array();
    $sql="SELECT SUM(a.PRECIO*c.cantidad) as costo, a.*,u.*,m.DESCRIPCION as marca, mo.DESCRIPCION as modelo, ";
    $sql.="SUM(c.envio * a.PRECIO) as envio,";
    $sql.="c.fecha as fecha, a.PRECIO as PRECIO,c.id_usuario as id_usuario, u.nombre as nombre, c.cantidad as cantidad ";
    $sql.="FROM carrito as c, autos as a, usuarios as u ,marca as m ,modelo as mo ";
    $sql.="WHERE c.id_auto=a.ID_AUTO AND ";
    $sql.="c.estado=1 and c.id_usuario=u.id ";
    $sql.="GROUP BY DATE(c.fecha), c.id_usuario ";*/

    return $this->db->querySelect($sql);
  }
 public function detalle($fecha, $idUsuario){
  $data = array();
    $sql="SELECT a.PRECIO as precio, c.cantidad as cantidad, u.nombre as nombre,  a.*,";
    $sql.="(c.envio * a.PRECIO) as envio,";
    $sql.="c.fecha as fecha, c.id_usuario as id_usuario ";
    $sql.="FROM carrito as c, autos as a, usuarios as u  ";
    $sql.="WHERE c.id_auto=a.ID_AUTO AND ";
    $sql.="c.estado=1 AND DATE(c.fecha)=' ".$fecha."' and";
  //$sql.="c.estado=1  AND";
  //$sql.="DATE(c.fecha)=' ".$fecha."' AND" ;
  $sql.=" c.id_usuario= ".$idUsuario." and u.id= ".$idUsuario;
return $this->db->querySelect($sql);
 }
/* public function detallefactura($idUsuario){
  $data = array();
    $sql="SELECT a.PRECIO as precio, c.cantidad as cantidad, u.nombre as nombre,  a.*,";
    $sql.="(c.envio * a.PRECIO) as envio,";
    $sql.="c.fecha as fecha, c.id_usuario as id_usuario ";
    $sql.="FROM carrito as c, autos as a, usuarios as u  ";
    $sql.="WHERE c.id_auto=a.ID_AUTO AND ";
    $sql.="c.estado=1 AND";
  //$sql.="c.estado=1  AND";
  //$sql.="DATE(c.fecha)=' ".$fecha."' AND" ;
  $sql.=" c.id_usuario= ".$idUsuario." and u.id= ".$idUsuario;
return $this->db->querySelect($sql);
 }*/
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
 public function ventasxmarca()
 {
  $data = array();
  $sql="SELECT SUM(a.PRECIO*c.cantidad) + 
  SUM(c.envio * a.PRECIO) as venta, m.DESCRIPCION as DESCRIPCION
  FROM carrito as c, autos as a, marca as m 
  WHERE c.id_auto=a.ID_AUTO AND  a.ID_MARCA=m.ID_MARCA AND  
  c.estado=1 
  GROUP BY DESCRIPCION";
  return $this->db->querySelect($sql);
 }
 public function ventasxauto()
 {
  $data = array();
  $sql="SELECT COUNT(c.id_carrito)as cantidad,
  MONTHNAME(c.fecha) as fecha 
  FROM carrito as c, autos as a 
  WHERE c.id_auto=a.ID_AUTO AND c.estado=1 
  GROUP BY MONTH(c.fecha)";
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
 public function ventasxmodelo()
 {
  $data = array();
  $sql="SELECT SUM(a.PRECIO*c.cantidad) + 
  SUM(c.envio * a.PRECIO) as venta, m.DESCRIPCION as DESCRIPCION
  FROM carrito as c, autos as a, modelo as m 
  WHERE c.id_auto=a.ID_AUTO AND  a.ID_MODELO=m.ID_MODELO AND  
  c.estado=1 
  GROUP BY DESCRIPCION";
  return $this->db->querySelect($sql);
 }
 public function ventasxmodelocantidad()
 {
  $data = array();
  $sql="SELECT COUNT(a.ID_MODELO)as cantidad,
  m.DESCRIPCION as DESCRIPCION
  FROM carrito as c, autos as a, modelo as m
  WHERE c.id_auto=a.ID_AUTO AND  a.ID_MODELO=m.ID_MODELO AND  
  c.estado=1  
  GROUP BY DESCRIPCION";
  return $this->db->querySelect($sql);
 }

}
?>
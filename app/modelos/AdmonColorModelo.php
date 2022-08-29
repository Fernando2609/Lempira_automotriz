<?php
/**
 * Modelo Marca Admon.
 */
class AdmonColorModelo {
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function altaColor($data){
    
    $sql = "INSERT INTO colorauto VALUES(0,";
    //$sql.= "'".$data['ID_COLORAUTO']."', ";
    $sql.= "'".$data['descripcion']."' ";
    return $this->db->queryNoSelect($sql);
  }
  
  public function nombreColor($DESCRIPCION){
    $sql = "SELECT * FROM colorauto WHERE DESCRIPCION='".$DESCRIPCION."' ";
    
    $data = $this->db->querySelect($sql);
    return $data;
  }
  /* public function getCatalogo(){
    $sql = "SELECT * FROM marca";
    $data = $this->db->querySelect($sql);
    return $data;
  } */

  //public function getLlaves($tipo){
    //$sql = "SELECT * FROM llaves WHERE tipo='".$tipo."'ORDER BY indice DESC";
    //$data = $this->db->querySelect($sql);
    //return $data;
  //}
  /* public function getMarca(){
    $sql = "SELECT * FROM marca";
    $data = $this->db->querySelect($sql);
    return $data;
  } */
  
  public function getColor(){
    $sql = "SELECT * FROM colorauto ORDER BY `DESCRIPCION` ASC";
    // $sql = "SELECT * FROM colorauto where ID_COLORAUTO= ".$DESCRIPCION;
    $data = $this->db->querySelect($sql);
    return $data;
  }
 // public function getTipo(){
   // $sql = "SELECT * FROM tipo_auto";
    // $sql = "SELECT * FROM modelo where id_marca= ".$id_marca;
   // $data = $this->db->querySelect($sql);
  //  return $data;
  //}
 // public function getUso(){
   // $sql = "SELECT * FROM usoauto";
    // $sql = "SELECT * FROM modelo where id_marca= ".$id_marca;
   // $data = $this->db->querySelect($sql);
   // return $data;
 // }
  public function getColorId($ID_COLORAUTO){
    $sql = "SELECT * FROM colorauto WHERE ID_COLORAUTO=".$ID_COLORAUTO;
    $data = $this->db->query($sql);
    return $data;
  }
  public function bajaLogica($ID_COLORAUTO){
    $errores=array();
    $sql = "DELETE FROM colorauto WHERE ID_COLORAUTO=" .$ID_COLORAUTO;
    if (!$this->db->queryNoSelect($sql)){
      array_push($errores, "Error al Modificar el registro para baja.");
    }
    return $errores;
  }
  
  //public function modificaProducto($data){
   // $errores = array();
  //  $sql = "UPDATE autos SET ";
   // $sql.= "ID_COLOR='".$data["color"]."', ";
    //$sql.= "ID_USOAUTO='".$data["uso"]."', ";
    //$sql.= "status=".$data["status"];
    //$sql.= " WHERE ID_AUTO=".$data["id"];
    //if(!$this->db->queryNoSelect($sql)){
     // array_push($errores,"Existio un error al actualizar el registro del producto.");
   // }
    //return $this->db->queryNoSelect($sql);;
//  }
public function altaProducto($data)
  {
    $sql="INSERT INTO colorauto VALUES(0,";//1
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
  public function modificaColor($data){
    $errores = array();
    $sql = "UPDATE colorauto SET ";
    $sql.= "DESCRIPCION ='".$data["DESCRIPCION"]."'";
    $sql.= " WHERE ID_COLORAUTO =".$data["ID_COLORAUTO"];
    if(!$this->db->queryNoSelect($sql)){
      array_push($errores,"Existio un error al actualizar el nombre del color.");
    }
    return $errores;
  }

}


?>
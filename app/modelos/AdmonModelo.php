<?php
/**
 * Administrador Modelo
 */
class AdmonModelo{
  private $db;

  function __construct()
  {
    $this->db = new MySQLdb();
  }
  public function verificarClave($data)
  {
    //Declaramops arreglo
    $errores=array();
    //Encriptar
    $clave=hash_hmac("sha512",$data['clave'],LLAVE);

    //Enviamos el query
    $sql= "SELECT id, clave, status, baja FROM admon WHERE correo='".$data['email']."'";
    $data= $this->db->query($sql);
    //Verificacion
    if (empty($data)) {
      array_push($errores, "Usuario o contraseña incorrectos, favor de verficarlo.");
    } else if($clave!=$data['clave']){
      array_push($errores, "Usuario o contraseña incorrectos, favor de verficarlo.");
    } else if($data['status']==0){
      array_push($errores, "El usuario esta desactivado");
    } else if($data['baja']==1){
      array_push($errores, "El usuario esta de baja");
    } else if(count($data)>4){
      array_push($errores, "El correo electronico esta duplicado ");
    }else{
      $sql="UPDATE admon SET login_dt=NOW() WHERE id=".$data['id'];
        if(!$this->db->queryNoSelect($sql)){
          array_push($errores, "Error al modificar la fecha del ultimo acceso");
      }
    }
    //Regresamos los errores
    return $errores;
  }
  public function getUsuarioId($id){
    $sql = "SELECT * FROM admon WHERE id=".$id;
    $data = $this->db->query($sql);
    return $data;
  }
}
?>
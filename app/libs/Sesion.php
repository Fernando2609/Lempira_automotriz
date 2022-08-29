<?php
/**
 * Manejar sesión
 */
class Sesion{
  private $login = False;
  private $email;
  
  function __construct(){
    session_start();
    if (isset($_SESSION["email"])) {
      $this->email = $_SESSION["email"];
      
      $this->login = true;
       //
      //Calculo del total del carrito
      //
      if (isset($_SESSION["email"]["id"])) {
        $idUsuario = $_SESSION["email"]["id"];
        $_SESSION["carrito"]= $this->totalCarrito($idUsuario)??0;
      }
    } else {
      unset($this->email);
      $this->login = false;
    }
  }

  public function iniciarLogin($email){
    if ($email) {
      $this->email = $_SESSION["email"] = $email;
      $this->login = true;
    }
  }

  public function finalizarLogin(){
    unset($_SESSION["email"]);
    unset($this->email);
    session_destroy();
    $this->login = false;
    
  }

  public function getLogin(){
    return $this->login;
  }

  public function getEmailUsuario(){
    return $this->email;
  }
  public function totalCarrito($idUsuario)
  {
    $db = new MySQLdb();
    $sql = "SELECT SUM(a.PRECIO * c.cantidad) as tot ";
    $sql.= "FROM carrito as c, autos as a ";
    $sql.= "WHERE c.id_usuario = ".$idUsuario." AND ";
    $sql.= "c.id_auto=a.ID_AUTO AND c.estado=0";
    $data = $db->query($sql);
    $tot = $data["tot"]??0;
    $db->cerrar();
    return $tot;
  }
}

?>
<?php
/**
 * Manejar sesión
 */
class Sesion{
  private $login = false;
  private $email;
  
  function __construct(){
    session_start();
    if (isset($_SESSION["email"])) {
      $this->email = $_SESSION["email"];
      $this->login = true;
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
    $this->login = false;
  }

  public function getLogin(){
    return $this->login;
  }

  public function getEmailUsuario(){
    return $this->email;
  }
}

?>
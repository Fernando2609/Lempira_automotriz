<?php
/**
 * Controlador Login
 */
class Tienda extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("TiendaModelo");
  }

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) { 
      //
      //Leer los productos mas baratos
      //
      $data = $this ->getMasBaratos();
      //var_dump($sesion->getEmailUsuario());

      $nuevos = $this ->getNuevos();

     
        $datos = [
        "titulo" => "LEMPIRA AUTOMOTRIZ",//tienda
        "data" => $data,
        "nuevos" => $nuevos,
        "menu" => true 
        ];
        $this->vista("tiendaVista",$datos);
     }else{
        header("location:".RUTA);
        
      } 
  }

function logout(){
  session_start();
if (isset($_SESSION["email"])) {
  $sesion = new Sesion ();
  $sesion ->finalizarLogin();
}
header ("location:".RUTA."Login");

}

  public function getMasBaratos(){
  require_once "admonProductos.php";
  $productos = new AdmonProductos();
  $data = $productos -> getMasBaratos();
  unset ($productos);
  return $data;
  } 

  public function getNuevos(){
    $data = array();
    require_once "admonProductos.php";
    $productos = new AdmonProductos();
    $data = $productos -> getNuevos();
    unset ($productos);
    return $data;
    } 
}
?> 
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
        var_dump($sesion->getEmailUsuario());
        $datos = [
        "titulo" => "BIENVENIDO A LEMPIRA AUTOMOTRÍZ",//tienda
        "menu" => false
        ];
        $this->vista("tiendaVista",$datos);
    }else{
        header("location:".RUTA);
    }
    
  }

}
?> 
<?php
/**
 * Controlador autos
 */
class Autos extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("AutosModelo");
  }

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas baratos
      //
        $data = $this ->getAutos();
        //var_dump($sesion->getEmailUsuario());

        $datos = [
        "titulo" => "AUTOS",//tienda
        "data" => $data,
        "tienda"=>true,
        "menu" => true 
        ];
        $this->vista("AutoVista",$datos);
    }else{
        header("location:".RUTA);
        
      }
  }

  public function getAutos(){
    $data = array();
    $data = $this->modelo->getAutos();
    return $data;
    } 

}

?> 
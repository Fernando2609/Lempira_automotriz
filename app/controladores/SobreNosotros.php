<?php
/**
 * Controlador SobreNosotros
 */
class SobreNosotros extends Controlador{
  private $modelo;

  function __construct(){}
   
  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas baratos
      //
        $datos = [
        "titulo" => "NOSOTROS",//tienda
        "activo" => "Sobre Nosotros",
        "menu" => true,
        "tienda"=>true,
        ];
        $this->vista("SobreNosotrosVista",$datos);
    }else{
        header("location:".RUTA);
        
      }
  }

}
?> 
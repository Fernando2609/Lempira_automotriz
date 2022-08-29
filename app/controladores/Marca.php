<?php
/**
 * Controlador Login
 */
class Marca extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("AdmonMarcaModelo");
  }

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas baratos
      //
        $data = $this ->getMarca();
        //var_dump($sesion->getEmailUsuario());

     
        $datos = [
        "titulo" => "LEMPIRA AUTOMOTRIZ",//tienda
        "data" => $data,
        "menu" => true 
        ];
        $this->vista("MarcaVista",$datos);
    }else{
        header("location:".RUTA);
        
      }
  }
  public function getMarca(){
    $data = array();
    $data = $this->modelo->getMarca();
    return $data;
    } 
    public function MarcaBuscar($Marca='')
    {
        $data=$this->modelo->getMarcaBuscar($Marca);
        $marca=$this->modelo->getMarcaId($Marca);
        if(count($data)==0){
          $datos = [
          "titulo" => "No se encontró el auto",
           "menu" => true,
           "errores" => [],
           "data" => [],
          "subtitulo" => "No hay autos",
          "texto" => "No hay autos relacionados con esa Marca".".",
          "color" => "alert-danger",
          "url" => "Marca",
          "colorBoton" => "btn-danger",
          "textoBoton" => "Regresar"
          ];
          $this->vista("mensajeVista2",$datos);
          }else{ 
             $datos = [
            "titulo" => "Búsqueda Marca",
            "id"=>$Marca,
            "errores"=> [],
            "data" => $data,
            "marca"=>$marca
          ];
       //var_dump($id);
       $this->vista("MarcaAutoVista",$datos);
      }
    }
 }

?> 
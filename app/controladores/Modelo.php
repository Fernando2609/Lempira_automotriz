<?php
/**
 * Controlador Login
 */
class Modelo extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("AdmonModeloModelo");
  }

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas baratos
      //
        $data = $this ->getModelo2();
        //var_dump($sesion->getEmailUsuario());

     
        $datos = [
        "titulo" => "LEMPIRA AUTOMOTRIZ",//tienda
        "data" => $data,
        "menu" => true 
        ];
        $this->vista("ModeloVista",$datos);
    }else{
        header("location:".RUTA);
        
      }
  }
  public function getModelo2(){
    $data = array();
    $data = $this->modelo->getModelo2();
    return $data;
    } 
    public function ModeloBuscar($Modelo='')
    {
        $data=$this->modelo->getModeloBuscar($Modelo);
        $modelo=$this->modelo->getModeloId($Modelo);
        if(count($data)==0){
          $datos = [
          "titulo" => "No se encontró el auto",
           "menu" => true,
           "errores" => [],
           "data" => [],
          "subtitulo" => "No hay autos",
          "texto" => "No hay autos relacionados con ese Modelo".".",
          "color" => "alert-danger",
          "url" => "Marca",
          "colorBoton" => "btn-danger",
          "textoBoton" => "Regresar"
          ];
          $this->vista("mensajeVista2",$datos);
          }else{ 
        $datos = [
            "titulo" => "Administrativo Modifica Alta",
            "menu" => True,
            "id"=>$Modelo,
            "errores"=> [],
            "modelo"=>$modelo,
            "data" => $data
            
          ];
       //var_dump($id);
       $this->vista("ModeloAutoVista",$datos);
    }
  }
 }

?> 
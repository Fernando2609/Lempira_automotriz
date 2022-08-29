<?php
/**
 * Controlador Login
 */
class TipoAuto extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("AdmonTipoModelo");
  }

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas baratos
      //
        $data = $this ->getTipo();
        //var_dump($sesion->getEmailUsuario());

     
        $datos = [
        "titulo" => "LEMPIRA AUTOMOTRIZ",//tienda
        "data" => $data,
        "menu" => true 
        ];
        $this->vista("TipoVista",$datos);
    }else{
        header("location:".RUTA);
        
      }
  }
  public function getTipo(){
    $data = array();
    $data = $this->modelo->getTipo();
    return $data;
    } 
    public function TipoBuscar($ID_TIPO='')
    {
        $data=$this->modelo->getTipoBuscar($ID_TIPO);
        $tipo=$this->modelo->getTipoId($ID_TIPO);
        if(count($data)==0){
          $datos = [
          "titulo" => "No se encontró el auto",
           "menu" => true,
           "errores" => [],
           "data" => [],
          "subtitulo" => "No hay autos",
          "texto" => "No hay autos relacionados con ese Tipo".".",
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
            "id"=>$ID_TIPO,
            "errores"=> [],
            "tipo"=>$tipo,
            "data" => $data
          ];
       //var_dump($id);
       $this->vista("TipoAutoVista",$datos);
      }
    }
 }

?> 
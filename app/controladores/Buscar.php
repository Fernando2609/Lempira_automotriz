<?php
/**
 * Controlador Buscar
 */
class Buscar extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("BuscarModelo");
  }

  function caratula(){}


   public function producto()
   {
    $buscar = $_POST["buscar"]??"";
    if (!empty($buscar)) {
      //
      //Leer los productos mas baratos
      //
        $data = $this->modelo->getProductosBuscar($buscar);
        //var_dump($sesion->getEmailUsuario());
        
        if(count($data)==0){
        $datos = [
        "titulo" => "No se encontró el auto",
         "menu" => true,
         "errores" => [],
         "data" => [],
        "subtitulo" => "No hay autos",
        "texto" => "No hay autos relacionados con ".$buscar.".",
        "color" => "alert-danger",
        "url" => "tienda",
        "colorBoton" => "btn-danger",
        "textoBoton" => "Regresar"
        ];
        $this->vista("mensajeVista2",$datos);
        } else {
          $datos = [
            "buscar"=>$buscar,
            "titulo" => "Autos buscados",
            "data" => $data,
            "menu" => true,
            "tienda"=>true,
          ]; 
          $this->vista("BuscarVista",$datos);
        } 
       } else{
        header("location:".RUTA);
   }
  }
}
?> 
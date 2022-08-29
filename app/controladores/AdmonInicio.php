<?php
/**
 * Controlador Login
 */
class AdmonInicio extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("AdmonInicioModelo");
  }

  function caratula(/*$correo*/){
    //Creamos sesión
    //$data = $this ->modelo->getUsuarioId($correo);
    $data = $this->modelo->ventasxdia();
    $ventasxmes = $this->modelo->ventasxmes();
    $cuenta = $this->modelo->contador();
    $cuenta_usuarios = $this->modelo->contador_usuarios();
    $cuenta_marcas = $this->modelo->contador_marcas();
    $cuenta_ventas = $this->modelo->contador_ventas();
    $ventasxmodelo = $this->modelo->ventasxmodelo();
    $ventasxautocantidad = $this->modelo->ventasxautocantidad();
    $sesion=new Sesion();
    if ($sesion->getLogin()){
      $datos = [
        "titulo" => "Administrativo | Inicio",
        "menu"=>false,
        "admon"=>true,
        "cuenta"=>$cuenta,
        "cuenta_usuarios"=>$cuenta_usuarios,
        "cuenta_ventas"=>$cuenta_ventas,
        //"correo"=>$correo,
        "cuenta_marcas"=>$cuenta_marcas,
        "ventasxmes"=>$ventasxmes,
        "ventasxmodelo"=>$ventasxmodelo,
        "ventasxautocantidad"=>$ventasxautocantidad,
        "data"=> $data
      ];
      $this->vista("AdmonInicioVista",$datos);
  }else{
    header("location:".RUTA."admon");
   }
 }
 function calendario(){
  $sesion=new Sesion();
  $this->vista("calendario");
 }
 function logout(){
  session_start();
if (isset($_SESSION["email"])) {
  $sesion = new Sesion ();
  $sesion ->finalizarLogin();
}
header ("location:".RUTA."admon");

}
}
?> 
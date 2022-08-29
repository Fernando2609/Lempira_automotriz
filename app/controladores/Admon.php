<?php
/**
 * Controlador administrativo
 */
class Admon extends Controlador{
  private $modelo;

  function __construct(){
    $this->modelo = $this->modelo("AdmonModelo");
  }

  public function caratula()
  {
    $datos = [
      "titulo" => "Administrativo",
      "menu" => false,
      "admonlogin"=>True,
      "data" => []
    ];
    $this->vista("admonVista",$datos);
  }
  public function verifica($id)
  {
    //Inicio arreglo
    $errores = array();
    $data = array();
    //Recibimos los datos de la vista
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      //Limpiamos de datos
      //$usuario = isset($_POST['usuario'])?$_POST['usuario']:"";
      $id=isset($_POST['id'])?$_POST['id']:"";
      $email = isset($_POST['email'])?$_POST['email']:"";
      $clave = isset($_POST['clave'])?$_POST['clave']:"";
      //Validaciones
      if(empty($email)){
        array_push($errores,"El usuario es requerido.");
      }
      if(empty($clave)){
        array_push($errores,"La clave del usuario es requerida.");
      }
      //arreglo de data
      $data=$this ->modelo->getUsuarioId($id);
      $data = [
        "id"=>$id,
        "email" => $email,
        "clave" => $clave
      ];
      //Verificar errores
      if (empty($errores)) {
        //Ejecutar query
        $errores = $this->modelo->verificarClave($data);
        //No hay errores
        if (empty($errores)) {
          //Creamos la sesión
          $sesion=new Sesion();
          $sesion->iniciarLogin($data);
          
          //Abrimos admonInicio
          header("location:".RUTA."admonInicio");
          
        } 
      }
      
    } 
    //enviamos errores ala vista

     $datos = [
        "titulo" => "Administrativo",
        "menu" => false,
        "admon" => false,
        "errores"=>$errores,
        "admonlogin"=>True,
        "data" => []
      ];
      $this->vista("admonVista",$datos);
    } 
  }

  
?>
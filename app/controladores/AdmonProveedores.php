<?php
/**
 * Controlador usuarios admon.
 */
class AdmonProveedores extends Controlador{
  private $modelo;
  
  function __construct()
  {
    $this->modelo = $this->modelo("AdmonProveedoresModelo");
  }

  public function caratula()
  {
     //Creamos sesión
     $sesion=new Sesion();

     if ($sesion->getLogin()){

       //Leemos los datos de la tabla
      $data = $this->modelo->getProveedores();
     
      $datos = [
       "titulo" => "Lista Proveedores",
       "menu" => false,
       "admon" => true,
       "data" => $data
    ];
    $this->vista("admonProveedorCaratulaVista",$datos); //////Aqui estaba la falla!!!
  }else{
    header("location:".RUTA."admon");
   }
  }

  public function alta()
  {
    $sesion=new Sesion();
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $errores = array();
      $data = array();
    
      $nombre_proveedor = isset($_POST['nombre_proveedor'])?$_POST['nombre_proveedor']:"";
      $correo = isset($_POST['correo'])?$_POST['correo']:"";
      $telefono_proveedor = isset($_POST['telefono_proveedor'])?$_POST['telefono_proveedor']:"";
      $direccion = isset($_POST['direccion'])?$_POST['direccion']:"";
     
      //Validacion
      if ($nombre_proveedor=="") {
        array_push($errores,"El nombre es requerido");
      }
      if($correo==""){
        array_push($errores,"El correo del proveedor es requerido.");
      }
      if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        array_push($errores,"El correo electrónico no es válido");
      }
      if($telefono_proveedor==""){
        array_push($errores,"El número del proveedor es requerido.");
      }
      if($direccion==""){
        array_push($errores,"La dirección del proveedor es requerida.");
      }
      
      //Crear arreglo de datos
      $data = [
         "nombre_proveedor" => $nombre_proveedor,
         "correo" => $correo, 
         "telefono_proveedor" => $telefono_proveedor,
         "direccion" => $direccion,
        ];
        //Verificamos que no haya errores
        if (empty($errores)) {
          if ($this->modelo->insertarDatos($data)) {
            header("location:".RUTA."admonProveedores");
          } else {
            $datos = [
              "titulo" => "Error en el registro",
              "menu" => false,
              "errores" => [],
              "data" => [],
              "subtitulo" => "Error en la inserción del registro",
              "texto" => "Existió un error al insertar el registro, favor de intentarlo más tarde o comunicarse a soporte técnico.",
              "color" => "alert-danger",
              "url" => "admonInicio",
              "colorBoton" => "btn-danger",
              "textoBoton" => "Regresar"
              ];
              $this->vista("mensajeVista",$datos);
    
          }
          
        } else {
          $datos = [
          "titulo" => "Registro Proveedores",
          "menu" => false,
          "admon" => true,
          "errores" => $errores,
          "data" => $data
        ];
        $this->vista("admonProveedoresVista",$datos);
        }
      } else {
        $datos = [
          "titulo" => "Registro Proveedores",
          "menu" => false,
          "admon" => true,
          "data" => []
        ];
        $this->vista("admonProveedoresVista",$datos);
      }
    }
  
    public function baja($id="")
    {
      $sesion=new Sesion();
     //Definiendo arreglos
     $errores = array();
     $data = array();
     //Recibiendo a la vista
     if ($_SERVER['REQUEST_METHOD']=="POST") {
       $id=isset($_POST['id'])?$_POST['id']:"";
       if(!empty($id)){
         $errores = $this->modelo->bajaLogica($id);
         //Si no hay errores regresamos
         if (empty($errores)){
           header("location:" .RUTA."admonProveedores");
         }
       }
     }
     $data = $this->modelo->getProveedoresId($id);
     $llaves = $this->modelo->getLlaves("admonStatus");
     //Abrir la vista
     $datos = [
      "titulo" => "Administrativo Usuarios Baja",
      "menu" => false,
      "admon" => true,
      "status"=>$llaves,
      "errores"=>$errores,
      "data" => $data
    ];
    $this->vista("admonProveedoresBorraVista",$datos);
    }
  
    public function cambio($id="")
    {
      $sesion=new Sesion();
      //Definiendo arreglos
      $errores = array();
      $data = array();
      //Recibiendo a la vista
      if ($_SERVER['REQUEST_METHOD']=="POST") {
        //Limpiando variables
        $id = isset($_POST['id'])?$_POST['id']:"";
        $nombre_proveedor = isset($_POST['nombre_proveedor'])?$_POST['nombre_proveedor']:"";
        $correo = isset($_POST['correo'])?$_POST['correo']:"";
        $telefono_proveedor = isset($_POST['telefono_proveedor'])?$_POST['telefono_proveedor']:"";
        $direccion = isset($_POST['direccion'])?$_POST['direccion']:"";
        $status = isset($_POST['status'])?$_POST['status']:"";    
        //Validacion
        if(empty($nombre_proveedor)){
          array_push($errores,"El nombre del proveedor es requerido.");
        }
        if(empty($correo)){
          array_push($errores,"El correo electronico del proveedor es requerido.");
        }
        if($status=="void"){
          array_push($errores,"Selecciona el status del proveedor.");
        }
        if(empty($telefono_proveedor)){
          array_push($errores,"El número de teléfono del proveedor es requerido.");
        }
        if(empty($direccion)){
          array_push($errores,"La dirección del proveedor es requerido.");
        }
    if(empty($errores)){
      //Crear arreglo de datos
        $data = [
          "id"=>$id,
          "nombre_proveedor" => $nombre_proveedor,
          "correo" => $correo,
          "telefono_proveedor" => $telefono_proveedor,
          "direccion" => $direccion,
          "status" => $status,
        ];
        //Enviamos al Modelo
        $errores=$this->modelo->modificaProveedores($data);
        //Validamos la Modificacion
        if(empty($errores)){
          header("location:".RUTA."admonProveedores");
        }
    }
  }
  $data = $this->modelo->getProveedoresId($id);/////no tocar
  $llaves = $this->modelo->getLlaves("admonStatus");
    $datos = [
    "titulo" => "Administrativo Proveedores Modifica",
    "menu" => false,
    "admon" => true,
    "status"=>$llaves,
    "errores"=>$errores,
    "data" => $data
  ];
  $this->vista("admonProveedoresModificaVista",$datos);
     
   }
  }
?>
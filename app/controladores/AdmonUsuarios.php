<?php
/**
 * Controlador usuarios admon.
 */
class AdmonUsuarios extends Controlador{
  private $modelo;
  
  function __construct()
  {
    $this->modelo = $this->modelo("AdmonUsuariosModelo");
  }

  public function caratula()
  {
     //Creamos sesión
     $sesion=new Sesion();

     if ($sesion->getLogin()){

       //Leemos los datos de la tabla
      $data = $this->modelo->getUsuarios();
     
      $datos = [
       "titulo" => "Administrativo Usuarios",
       "menu" => false,
       "admon" => true,
       "data" => $data
    ];
    //var_dump($_SESSION);
    $this->vista("admonUsuariosCaratulaVista",$datos);
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
      $email = isset($_POST['email'])?$_POST['email']:"";
      $clave1 = isset($_POST['clave1'])?$_POST['clave1']:"";
      $clave2 = isset($_POST['clave2'])?$_POST['clave2']:"";
      $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
      $telefono_celular = isset($_POST['telefono_celular'])?$_POST['telefono_celular']:"";
      $telefono_fijo = isset($_POST['telefono_fijo'])?$_POST['telefono_fijo']:"";
      $direccion = isset($_POST['direccion'])?$_POST['direccion']:"";
      $no_identidad = isset($_POST['no_identidad'])?$_POST['no_identidad']:"";
      $fecha_nacimiento = isset($_POST['fecha_nacimiento'])?$_POST['fecha_nacimiento']:"";
      //Validacion
      if(empty($email)){
        array_push($errores,"El usuario es requerido.");
      }
      if(empty($clave1)){
        array_push($errores,"La clave de acceso es requerida.");
      }
      if(empty($clave2)){
        array_push($errores,"La verificación de la clave de acceso es requerida.");
      }
      if($clave1!=$clave2){
        array_push($errores,"Las claves no coinciden, favor de verificar.");
      }
      if(empty($nombre)){
        array_push($errores,"El nombre del usuario es requerido.");
      }
      if(empty($telefono_celular)){
        array_push($errores,"El número de teléfono celular del usuario es requerido.");
      }
      if(empty($direccion)){
        array_push($errores,"La dirección del usuario es requerido.");
      }
      if(empty($no_identidad)){
        array_push($errores,"El número de identidad del usuario es requerido.");
      }
      if(empty($fecha_nacimiento)){
        array_push($errores,"La fecha de nacimiento del usuario es requerido.");
      }
      //Crear arreglo de datos
      $data = [
         "email" => $email, 
         "nombre" => $nombre,
         "clave1" => $clave1,
         "clave2" => $clave2,
         "telefono_celular" => $telefono_celular,
         "telefono_fijo" => $telefono_fijo,
         "direccion" => $direccion,
         "no_identidad" => $no_identidad,
         "fecha_nacimiento"=> $fecha_nacimiento
        ];
        //Verificamos que no haya errores
        if (empty($errores)) {
          if ($this->modelo->insertarDatos($data)) {
            header("location:".RUTA."admonUsuarios");
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
          "titulo" => "Administrativo Usuarios Alta",
          "menu" => false,
          "admon" => true,
          "errores" => $errores,
          "data" => $data
        ];
        $this->vista("admonUsuariosVista",$datos);
        }
      } else {
        $datos = [
          "titulo" => "Administrativo Usuarios Alta",
          "menu" => false,
          "admon" => true,
          "data" => []
        ];
        $this->vista("admonUsuariosVista",$datos);
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
           header("location:" .RUTA."admonUsuarios");
         }
       }
     }
     $data = $this->modelo->getUsuarioId($id);
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
    $this->vista("admonUsuariosBorraVista",$datos);
    }
  
    public function cambio($id="")
    {
      //Creamos sesión
     $sesion=new Sesion();
      
      //Definiendo arreglos

      $errores = array();
      $data = array();
      //Recibiendo a la vista
      if ($_SERVER['REQUEST_METHOD']=="POST") {
        //Limpiando variables
        $id = isset($_POST['id'])?$_POST['id']:"";
       /* $correo = isset($_POST['correo'])?$_POST['correo']:"";
        $clave_actual = isset($_POST['clave_actual'])?$_POST['clave_actual']:"";
        $clave1 = isset($_POST['clave1'])?$_POST['clave1']:"";
        $clave2 = isset($_POST['clave2'])?$_POST['clave2']:"";
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";*/
        $status = isset($_POST['status'])?$_POST['status']:"";
        /*$telefono_celular = isset($_POST['telefono_celular'])?$_POST['telefono_celular']:"";
        $telefono_fijo = isset($_POST['telefono_fijo'])?$_POST['telefono_fijo']:"";
        $direccion = isset($_POST['direccion'])?$_POST['direccion']:"";
        $no_identidad = isset($_POST['no_identidad'])?$_POST['no_identidad']:"";
        $fecha_nacimiento = isset($_POST['fecha_nacimiento'])?$_POST['fecha_nacimiento']:"";*/
        //Validacion
        /* if(empty($correo)){
          array_push($errores,"El usuario es requerido.");
        }
        if(empty($nombre)){
          array_push($errores,"El nombre del usuario es requerido.");
        }
        if($status=="void"){
          array_push($errores,"Selecciona el status del usuario.");
        }
        if (!empty($clave1) && !empty($clave2)){
          if ($clave1 != $clave2){
            array_push($errores,"Las claves no coninciden.");
          }
        }

        if(empty($telefono_celular)){
          array_push($errores,"El número de teléfono celular del usuario es requerido.");
        }
        if(empty($telefono_fijo)){
          array_push($errores,"El número de teléfono fijo del usuario es requerido.");
        }
        if(empty($direccion)){
          array_push($errores,"La dirección del usuario es requerido.");
        }
        if(empty($no_identidad)){
          array_push($errores,"El número de identidad del usuario es requerido.");
        }
        if(empty($fecha_nacimiento)){
          array_push($errores,"La fecha de nacimiento del usuario es requerido.");
        } */
        
    if(empty($errores)){
      //Crear arreglo de datos
        $data = [
          "id"=>$id,
         // "nombre" => $nombre,
         // "telefono_celular" => $telefono_celular,
         // "telefono_fijo" => $telefono_fijo,
         // "direccion" => $direccion,
         // "no_identidad" => $no_identidad,
         // "fecha_nacimiento" => $fecha_nacimiento,
          //"clave_actual" => $clave_actual,
          //"clave1" => $clave1,
          //"clave2" => $clave2,
          "status" => $status,
         // "correo" => $correo
        ];
        var_dump($data);
        //Enviamos al Modelo
        
       // $errores=$this->modelo->validarClaveAdmon($data);
        
        //if (!$this->modelo->validarClaveAdmon($data)){
          $errores=$this->modelo->modificaUsuario($data);
          if(empty($errores)){
            header("location:".RUTA."admonUsuarios");
          }
        //}
        //Validamos la Modificacion
        
    }
  }
  $data = $this->modelo->getUsuarioId($id);
  $llaves = $this->modelo->getLlaves("admonStatus");
    $datos = [
    "titulo" => "Administrativo Usuarios Modifica",
    "menu" => false,
    "admon" => true,
    "status"=>$llaves,
    "errores"=>$errores,
    "data" => $data
  ];
  
    $this->vista("admonUsuariosModificaVista",$datos);

 
     
   }
  
  public function cambio2($correo="")
    {
      //Creamos sesión
     $sesion=new Sesion();
      
      //Definiendo arreglos

      $errores = array();
      $data = array();
      //Recibiendo a la vista
      if ($_SERVER['REQUEST_METHOD']=="POST") {
        //Limpiando variables
        $id = isset($_POST['id'])?$_POST['id']:"";
        $correo = isset($_POST['correo'])?$_POST['correo']:"";
        //$clave_actual = isset($_POST['clave_actual'])?$_POST['clave_actual']:"";
        //$clave1 = isset($_POST['clave1'])?$_POST['clave1']:"";
        //$clave2 = isset($_POST['clave2'])?$_POST['clave2']:"";
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
        $status = isset($_POST['status'])?$_POST['status']:"";
        $telefono_celular = isset($_POST['telefono_celular'])?$_POST['telefono_celular']:"";
        $telefono_fijo = isset($_POST['telefono_fijo'])?$_POST['telefono_fijo']:"";
        $direccion = isset($_POST['direccion'])?$_POST['direccion']:"";
        $no_identidad = isset($_POST['no_identidad'])?$_POST['no_identidad']:"";
        $fecha_nacimiento = isset($_POST['fecha_nacimiento'])?$_POST['fecha_nacimiento']:"";
        //Validacion
        if(empty($correo)){
          array_push($errores,"El usuario es requerido.");
        }
        if(empty($nombre)){
          array_push($errores,"El nombre del usuario es requerido.");
        }
        if($status=="void"){
          array_push($errores,"Selecciona el status del usuario.");
        }
        if (!empty($clave1) && !empty($clave2)){
          if ($clave1 != $clave2){
            array_push($errores,"Las claves no coninciden.");
          }
        }

        if(empty($telefono_celular)){
          array_push($errores,"El número de teléfono celular del usuario es requerido.");
        }
        
        if(empty($direccion)){
          array_push($errores,"La dirección del usuario es requerido.");
        }
        if(empty($no_identidad)){
          array_push($errores,"El número de identidad del usuario es requerido.");
        }
        if(empty($fecha_nacimiento)){
          array_push($errores,"La fecha de nacimiento del usuario es requerido.");
        }
        
    if(empty($errores)){
      //Crear arreglo de datos
        $data = [
          "id"=>$id,
          "nombre" => $nombre,
          "telefono_celular" => $telefono_celular,
          "telefono_fijo" => $telefono_fijo,
          "direccion" => $direccion,
          "no_identidad" => $no_identidad,
          "fecha_nacimiento" => $fecha_nacimiento,
          //"clave_actual" => $clave_actual,
          //"clave1" => $clave1,
          //"clave2" => $clave2,
          "status" => $status,
          "correo" => $correo
        ];
        var_dump($data);
        //Enviamos al Modelo
        
        //$errores=$this->modelo->validarClaveAdmon($data);
        
       //if (!$this->modelo->validarClaveAdmon($data)){
        $errores=$this->modelo->modificaUsuario2($data);
          if(empty($errores)){
            header("location:".RUTA."admonUsuarios");
          }
        //}
        //Validamos la Modificacion
        
    }
  }
  $data = $this->modelo->getUsuarioId2($correo);
  $llaves = $this->modelo->getLlaves("admonStatus");
    $datos = [
    "titulo" => "Administrativo Usuarios Modifica",
    "menu" => false,
    "admon" => true,
    "status"=>$llaves,
    "errores"=>$errores,
    "data" => $data
  ];
  //var_dump($data);
  if (($_SESSION["email"]["email"])==$datos["data"]["correo"]) {
    $this->vista("admonUsuariosModificaVista2",$datos);
  }else {
    print("No ".$datos["data"]["nombre"]." Fuera de acá, No Eres el/la que esta Logueado");
    //$this->vista("admonUsuariosModificaVista",$datos);
  }
 
     
   }
   public function perfil($correo="")
    {
      //Creamos sesión
     $sesion=new Sesion();
      
      //Definiendo arreglos

      $errores = array();
      $data = array();
      //Recibiendo a la vista
      if ($_SERVER['REQUEST_METHOD']=="POST") {
        //Limpiando variables
        $id = isset($_POST['id'])?$_POST['id']:"";
        $correo = isset($_POST['correo'])?$_POST['correo']:"";
        $clave_actual = isset($_POST['clave_actual'])?$_POST['clave_actual']:"";
        $clave1 = isset($_POST['clave1'])?$_POST['clave1']:"";
        $clave2 = isset($_POST['clave2'])?$_POST['clave2']:"";
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
        $status = isset($_POST['status'])?$_POST['status']:"";
        $telefono_celular = isset($_POST['telefono_celular'])?$_POST['telefono_celular']:"";
        $telefono_fijo = isset($_POST['telefono_fijo'])?$_POST['telefono_fijo']:"";
        $direccion = isset($_POST['direccion'])?$_POST['direccion']:"";
        $no_identidad = isset($_POST['no_identidad'])?$_POST['no_identidad']:"";
        $fecha_nacimiento = isset($_POST['fecha_nacimiento'])?$_POST['fecha_nacimiento']:"";
        //Validacion
        if(empty($correo)){
          array_push($errores,"El usuario es requerido.");
        }
        if(empty($nombre)){
          array_push($errores,"El nombre del usuario es requerido.");
        }
        if($status=="void"){
          array_push($errores,"Selecciona el status del usuario.");
        }
        if (!empty($clave1) && !empty($clave2)){
          if ($clave1 != $clave2){
            array_push($errores,"Las claves no coninciden.");
          }
        }

        if(empty($telefono_celular)){
          array_push($errores,"El número de teléfono celular del usuario es requerido.");
        }
        if(empty($telefono_fijo)){
          array_push($errores,"El número de teléfono fijo del usuario es requerido.");
        }
        if(empty($direccion)){
          array_push($errores,"La dirección del usuario es requerido.");
        }
        if(empty($no_identidad)){
          array_push($errores,"El número de identidad del usuario es requerido.");
        }
        if(empty($fecha_nacimiento)){
          array_push($errores,"La fecha de nacimiento del usuario es requerido.");
        }
        
    if(empty($errores)){
      //Crear arreglo de datos
        $data = [
          "id"=>$id,
          "nombre" => $nombre,
          "telefono_celular" => $telefono_celular,
          "telefono_fijo" => $telefono_fijo,
          "direccion" => $direccion,
          "no_identidad" => $no_identidad,
          "fecha_nacimiento" => $fecha_nacimiento,
          "clave_actual" => $clave_actual,
          "clave1" => $clave1,
          "clave2" => $clave2,
          "status" => $status,
          "correo" => $correo
        ];
        var_dump($data);
        //Enviamos al Modelo
        
        //$errores=$this->modelo->validarClaveAdmon($data);
        
       //if (!$this->modelo->validarClaveAdmon($data)){
        //$errores=$this->modelo->modificaUsuario($data);
          if(empty($errores)){
            header("location:".RUTA."admonUsuarios");
          }
        //}
        //Validamos la Modificacion
        
    }
  }
  $data = $this->modelo->getUsuarioId2($correo);
  $llaves = $this->modelo->getLlaves("admonStatus");
    $datos = [
    "titulo" => "Administrativo Usuarios Modifica",
    "menu" => false,
    "admon" => true,
    "status"=>$llaves,
    "errores"=>$errores,
    "data" => $data
  ];
  //var_dump($data);
  if (($_SESSION["email"]["email"])==$datos["data"]["correo"]) {
    $this->vista("admonPerfilVista",$datos);
  }else {
    print("No ".$datos["data"]["nombre"]." Fuera de acá, No Eres el/la que esta Logueado");
    //$this->vista("admonUsuariosModificaVista",$datos);
  }
 
     
   }
   public function cambioClavePerfil($correo="")
    {
      //Creamos sesión
     $sesion=new Sesion();
      
      //Definiendo arreglos

      $errores = array();
      $data = array();
      //Recibiendo a la vista
      if ($_SERVER['REQUEST_METHOD']=="POST") {
        //Limpiando variables
        $correo = isset($_POST['correo'])?$_POST['correo']:"";
        //$correo = isset($_POST['correo'])?$_POST['correo']:"";
        $clave_actual = isset($_POST['clave_actual'])?$_POST['clave_actual']:"";
        $clave1 = isset($_POST['clave1'])?$_POST['clave1']:"";
        $clave2 = isset($_POST['clave2'])?$_POST['clave2']:"";
        
        //Validacion
        if (!empty($clave1) && !empty($clave2)){
          if ($clave1 != $clave2){
            array_push($errores,"Las claves no coninciden.");
          }
        }
        
    if(empty($errores)){
      //Crear arreglo de datos
        $data = [
          "correo" => $correo,
          "clave_actual" => $clave_actual,
          "clave1" => $clave1,
          "clave2" => $clave2
         
        ];
        //var_dump($data);
        //Enviamos al Modelo
        
       $errores=$this->modelo->validarClaveAdmon($data);
        
       if (!$this->modelo->validarClaveAdmon($data)){
        $errores=$this->modelo->modificaCLaveUsuario($data);
          if(empty($errores)){
            header("location:".RUTA."admonUsuarios");
          }
        }
        //Validamos la Modificacion
        
    }
  }
  $data = $this->modelo->getUsuarioId2($correo);
  //$llaves = $this->modelo->getLlaves("admonStatus");
    $datos = [
    "titulo" => "Modificar Perfil",
    "menu" => false,
    "admon" => true,
    "errores"=>$errores,
    "data" => $data
  ];
  //var_dump($data);
  $this->vista("admonUsuariosModificaClaveVista",$datos);
  /*if (($_SESSION["email"]["email"])==$datos["data"]["correo"]) {
    
  }else {
    print("No ".$datos["data"]["nombre"]." Fuera de acá, No Eres el/la que esta Logueado");
    //$this->vista("admonUsuariosModificaVista",$datos);
  }*/
 
     
   }
  }
?>
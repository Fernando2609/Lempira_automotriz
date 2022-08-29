<?php
/**
 * Controlador usuarios admon.
 */
class AdmonColor extends Controlador{
  private $modelo;
  
  function __construct()
  {
    $this->modelo = $this->modelo("AdmonColorModelo");
  }

  public function caratula()
  {
     //Creamos sesión
     $sesion=new Sesion();

     if ($sesion->getLogin()){

       //Leemos los datos de la tabla
      $data = $this->modelo->getColor();
     
      $datos = [
       "titulo" => "Lista Color",
       "menu" => false,
       "admon" => true,
       "data" => $data
    ];
    $this->vista("admonColorCaratulaVista",$datos); //////Aqui estaba la falla!!!
  }else{
    header("location:".RUTA."admon");
   }
  }

  /* public function altaColor()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $errores = array();
      $data = array();
      $DESCRIPCION= isset($_POST['descripcion'])?$_POST['descripcion']:"";
       //Validacion
       if (empty($DESCRIPCION)) {
        array_push($errores,"La descripcion es requerido");
        //Crear arreglo de datos
      $data = [
        "descripcion" => $DESCRIPCION   
       ];
      }
      if(empty($errores)){
        if ($this->modelo->altaColor($data)) {
          # code...
        } else {
          # code...
        }
        

      }else {
        $datos = [
          "titulo" => "Registro Color",
          "menu" => false,
          "admon" => true,
          "errores" => $errores,
          "data"=>$data
        ];
        $this->vista("admonColorAltaVista",$datos);
      }
    }else{
      $datos = [
        "titulo" => "Registro Color",
        "menu" => false,
        "admon" => true,
        //"errores" => $errores,
        "data" => []
      ];
      $this->vista("admonColorAltaVista",$datos);
    }
     
        //Verificamos que no haya errores
        /* if (empty($errores)) {
          if () {
            header("location:".RUTA."admonColor");
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
          "titulo" => "Registro Color",
          "menu" => false,
          "admon" => true,
          "errores" => $errores,
          "data" => $data
        ];
        $this->vista("admonColorAltaVista",$datos);
        } 
      } else {
        $datos = [
          "titulo" => "Registro Color",
          "menu" => false,
          "admon" => true,
          "data" => []
        ];
        $this->vista("admonColorAltaVista",$datos);
      
    }*/
    public function alta()
    {
      $sesion=new Sesion();
        $data=array();
        $errores=array();
        /* $color=$this->modelo->getColor();
        $tipo=$this->modelo->getTipo();
        $uso=$this->modelo->getUso();
        $statusProducto=$this->modelo->getLlaves("statusProducto");
        $marca=$this->modelo->getmarca();
        $modelo=$this->modelo->getModelo(); */

        //Recibimos informacion de la vista
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            //Recibimos la informacion
            // si existe id es una modiifcación, sino es un alta
            $id=$POST['id'] ?? "";
            $DESCRIPCION= isset($_POST['DESCRIPCION'])?$_POST['DESCRIPCION']:"";
            
           /*  //
            $Marca=$_POST["marca"] ?? "";
            $Modelo=$_POST["modelo"]??"";
            $Tipo=$_POST["tipo"]??"";
            $Color=$_POST["color"]??"";
            $Uso=$_POST["uso"]??"";
            $PRECIO=Valida::numero($_POST["PRECIO"]??"");
            $NUMERO_CHASIS=$_POST["NUMERO_CHASIS"]??"";
            //Ya no se utiliza en POST
            //$IMAGEN_AUTO=$_POST["IMAGEN_AUTO"]??"";
            $IMAGEN_AUTO=$_FILES["IMAGEN_AUTO"]["name"];
            $IMAGEN_AUTO=Valida::Archivo($IMAGEN_AUTO);
            $AÑO_AUTO=Valida::numero($_POST["AÑO_AUTO"]??"");
            $KILOMETRAJE=$_POST["KILOMETRAJE"]??"";
            $MOTOR_SERIE=$_POST["MOTOR_SERIE"]??"";
            $CILINDRAJE=Valida::numero($_POST["CILINDRAJE"]??"");
            $POTENCIA=Valida::numero($_POST["POTENCIA"]??"");
            $DESCRIPCION_COMBUSTIBLE= Valida::cadena($_POST['DESCRIPCION_COMBUSTIBLE'] ?? "");
            $TRACCION=$_POST["TRACCION"]??"";
            $status=$_POST["status"]??"";
            $TRANSMISION=$_POST["TRANSMISION"]??"";
            //Validamos la informacion
            if (empty($Marca)) {
                array_push($errores,"La marca del vehiculo es requerida");
            }
            if (empty($Modelo)) {
                array_push($errores,"El modelo del vehiculo es requerida");
            }
            if (empty($Tipo)) {
                array_push($errores,"El tipo del vehiculo es requerida");
            }
            if (empty($Color)) {
                array_push($errores,"El color del vehiculo es requerida");
            }
            if (empty($Uso)) {
                array_push($errores,"El Uso del vehiculo es requerida");
            }
            if (!is_numeric($PRECIO)) {
                array_push($errores,"El precio del vehiculo debe de ser un numero");
            }
            if (empty($NUMERO_CHASIS)) {
                array_push($errores,"El numero del chasis del vehiculo es requerida");
            }
            
            if (!is_numeric($AÑO_AUTO)) {
                array_push($errores,"El año del vehiculo debe de ser un numero");
            }
            if (empty($KILOMETRAJE)) {
                array_push($errores,"El Kilometraje del vehiculo es requerida");
            }
            if (empty($MOTOR_SERIE)) {
                array_push($errores,"La serie del motor del vehiculo es requerida");
            }
            if (!is_numeric($CILINDRAJE)) {
                array_push($errores,"El cilindraje del vehiculo debe de ser numerica");
            }
            if (!is_numeric($POTENCIA)) {
                array_push($errores,"La Potencia del motor del vehiculo debe de ser numerico");
            }
            if (empty($DESCRIPCION_COMBUSTIBLE)) {
                array_push($errores,"La descripcion del combustible del vehiculo es requerida");
            }
            if (empty($TRACCION)) {
                array_push($errores,"La traccion del vehiculo es requerida");
            }
            if (empty($TRANSMISION)) {
                array_push($errores,"La transmision del vehiculo es requerida");
            }
            if (empty($status)) {
                array_push($errores,"El status del vehiculo es requerida");
            }
            if(empty($IMAGEN_AUTO)){
                array_push($errores,"Debes seleccionar una imagen para el producto");
            }else if ($_FILES['IMAGEN_AUTO']['tmp_name']) {
               //Cambiamos el nombre del archivo
                $IMAGEN_AUTO=Valida::Archivo(html_entity_decode($NUMERO_CHASIS));
                $IMAGEN_AUTO=strtolower($IMAGEN_AUTO.".jpg");
            
                //SUbir archivo
                if (is_uploaded_file($_FILES['IMAGEN_AUTO']['tmp_name'])) {
                copy($_FILES['IMAGEN_AUTO']['tmp_name'],"img/".$IMAGEN_AUTO);
                //Validar 240px
                Valida::Imagen($IMAGEN_AUTO,240);
                } else {
                array_push($errores,"Error all subir el archivo de imagen");
            }
            } else {
                array_push($errores,"Formato de la imagen no aceptado");
            }
            
            //Cambiamos el nombre del archivo
            $IMAGEN_AUTO=Valida::Archivo($NUMERO_CHASIS);
            $IMAGEN_AUTO=strtolower($IMAGEN_AUTO.".jpg");
        
            //SUbir archivo
            if (is_uploaded_file($_FILES['IMAGEN_AUTO']['tmp_name'])) {
            copy($_FILES['IMAGEN_AUTO']['tmp_name'],"img/".$IMAGEN_AUTO);
            //Validar 240px
            Valida::Imagen($IMAGEN_AUTO,240);
            } else {
            array_push($errores,"Error all subir el archivo de imagen");
            } */
            

            //Crear el arreglo de datos 
            $data=[
               "id"=>$id, 
               "DESCRIPCION"=>$DESCRIPCION
              /*  "marca"=>$Marca,
               "modelo"=>$Modelo,
               "tipo"=>$Tipo,
               "color"=>$Color,
               "uso"=>$Uso,
               "NUMERO_CHASIS"=>$NUMERO_CHASIS,
               "KILOMETRAJE"=>$KILOMETRAJE,
               "MOTOR_SERIE"=>$MOTOR_SERIE,
               "DESCRIPCION_COMBUSTIBLE" => $DESCRIPCION_COMBUSTIBLE,
               "PRECIO"=>$PRECIO,
               "AÑO_AUTO"=>$AÑO_AUTO,
               "CILINDRAJE"=>$CILINDRAJE,
               "POTENCIA"=>$POTENCIA,
               "TRACCION"=>$TRACCION,
               "TRANSMISION"=>$TRANSMISION,
               "IMAGEN_AUTO"=>$IMAGEN_AUTO,
               "status"=>$status */
            ];
            if (empty($errores)) {
                //Enviamos al modelo
                if($id==""){
                    //alta
                    if ($this->modelo->altaProducto($data)) {
                        header("location:".RUTA."AdmonColor");
                     }
                }else {
                    //modificación
                    if ($this->modelo->modificaProducto($data)) {
                        header("location:".RUTA."admonColor");
                     }
                }
             }
         }
        //vista alta
        $datos = [
            "titulo" => "Administrativo Color Alta",
            "menu" => false,
            "admon"=>true,
           /* "modelo"=>$modelo,
            "color"=>$color,
            "tipo"=>$tipo, 
            "uso"=>$uso, */
            "errores"=> $errores,
            /* "marca" => $marca,
            "statusProducto"=>$statusProducto, */
            "data" => $data
          ];
          //var_dump($data);
          $this->vista("admonColorAltaVista",$datos);
    }
    public function baja($ID_COLORAUTO="")
    {
      $sesion=new Sesion();
     //Definiendo arreglos
     $errores = array();
     $data = array();
     //Recibiendo a la vista
     if ($_SERVER['REQUEST_METHOD']=="POST") {
       $ID_COLORAUTO=isset($_POST['ID_COLORAUTO'])?$_POST['ID_COLORAUTO']:"";
       if(!empty($ID_COLORAUTO)){
         $errores = $this->modelo->bajaLogica($ID_COLORAUTO);
         //Si no hay errores regresamos
         if (empty($errores)){
           header("location:" .RUTA."admonColor");
         }
       }
     }
     $data = $this->modelo->getColorId($ID_COLORAUTO);
     //$llaves = $this->modelo->getLlaves("ProveedorStatus");
     //Abrir la vista
     $datos = [
      "titulo" => "Administrativo Color Baja",
      "menu" => false,
      "admon" => true,
      //"status"=>$llaves,
      "errores"=>$errores,
      "data" => $data
    ];
    $this->vista("admonColorBorraVista",$datos);
    }
  
    public function cambio($ID_COLORAUTO="")
    {
      $sesion=new Sesion();
      //Definiendo arreglos
      $errores = array();
      $data = array();
      //Recibiendo a la vista
      if ($_SERVER['REQUEST_METHOD']=="POST") {
        //Limpiando variables
        $ID_COLORAUTO = isset($_POST['ID_COLORAUTO'])?$_POST['ID_COLORAUTO']:"";
        $DESCRIPCION = isset($_POST['DESCRIPCION'])?$_POST['DESCRIPCION']:"";
   
        //Validacion
        if(empty($DESCRIPCION)){
          array_push($errores,"El nombre del color requerido.");
        }
    if(empty($errores)){
      //Crear arreglo de datos
        $data = [
          "ID_COLORAUTO"=>$ID_COLORAUTO,
          "DESCRIPCION" => $DESCRIPCION,

        ];
        //Enviamos al Modelo
        $errores=$this->modelo->modificaColor($data);
        //Validamos la Modificacion
        if(empty($errores)){
          header("location:".RUTA."admonColor");
        }
    }
  }
  $data = $this->modelo->getColorId($ID_COLORAUTO);/////no tocar
  //$llaves = $this->modelo->getLlaves("admonStatus");
    $datos = [
    "titulo" => "Administrativo Colores Modifica",
    "menu" => false,
    "admon" => true,
    //"status"=>$llaves,
    "errores"=>$errores,
    "data" => $data
  ];
  $this->vista("admonColorModificaVista",$datos);
     }
   
  }
?>
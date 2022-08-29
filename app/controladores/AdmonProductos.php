<?php  
/**
 * Controlador para productos
 */
    class AdmonProductos extends Controlador 
    {
        private $modelo;

        function __construct(){
            $this->modelo=$this->modelo("AdmonProductosModelo");
          } 
    public function caratula()
    {
        //Creamos sesion
        $sesion=new Sesion();
        if ($sesion->getLogin()) {
            $data=$this->modelo->getProductos();
            //$marcaNombre = $this->modelo->nombreMarca("marca");
            $datos = [
                "titulo" => "Administrativo Productos",
                "menu" => false,
                "admon"=>true,
                //"marca"=>$marcaNombre,
                "data" => $data
              ];
              $this->vista("admonProductosCaratulaVista",$datos);
        }
        else {
            header("location:".RUTA."admon");
        }
    }
    public function alta()
    {
        $sesion=new Sesion();
        $data=array();
        $errores=array();
        $color=$this->modelo->getColor();
        $tipo=$this->modelo->getTipo();
        $uso=$this->modelo->getUso();
        $statusProducto=$this->modelo->getLlaves("statusProducto");
        $marca=$this->modelo->getmarca();
        $modelo=$this->modelo->getModelo();

        //Recibimos informacion de la vista
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            //Recibimos la informacion
            // si existe id es una modiifcación, sino es un alta
            //
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
            if ($KILOMETRAJE<0) {
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
                copy($_FILES['IMAGEN_AUTO']['tmp_name'],"img/autos/".$IMAGEN_AUTO);
                //Validar 240px
                Valida::Imagen($IMAGEN_AUTO,1080);
                } else {
                array_push($errores,"Error al subir el archivo de imagen");
            }
            } else {
                array_push($errores,"Formato de la imagen no aceptado");
            }
            
            //Cambiamos el nombre del archivo
            $IMAGEN_AUTO=Valida::Archivo($NUMERO_CHASIS);
            $IMAGEN_AUTO=strtolower($IMAGEN_AUTO.".jpg");
        
            //SUbir archivo
            if (is_uploaded_file($_FILES['IMAGEN_AUTO']['tmp_name'])) {
            copy($_FILES['IMAGEN_AUTO']['tmp_name'],"img/autos/".$IMAGEN_AUTO);
            //Validar 240px
            Valida::Imagen($IMAGEN_AUTO,1080);
            } else {
            array_push($errores,"Error al subir el archivo de imagen");
            }
            

            //Crear el arreglo de datos 
            $data=[
               "marca"=>$Marca,
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
               "status"=>$status
            ];
           
             if (empty($errores)) {
                //Enviamos al modelo
                
                    //alta
                    $this->modelo->altaProducto($data);
                    header("location:".RUTA."admonProductos");
    
             }
         }
        //vista alta
        $datos = [
            "titulo" => "Administrativo Productos Alta",
            "menu" => false,
            "admon"=>true,
            "modelo"=>$modelo,
            "color"=>$color,
            "tipo"=>$tipo, 
            "uso"=>$uso, 
            "errores"=> $errores,
            "marca" => $marca,
            "statusProducto"=>$statusProducto,
            "data" => $data
          ];
          //var_dump($data);
          $this->vista("admonProductosAltaVista",$datos);
    }
    public function baja($id="")
    {
        $sesion=new Sesion();
        $data=array();
        $errores=array();
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $id=isset($_POST['id'])?$_POST['id']:"";
            if (!empty($id)) {
                $errores=$this->modelo->bajaLogica($id);
                //Si no hay errores regresamos
                if (empty($errores)) {
                    header("location:".RUTA."admonProductos");
                }
            }
        }
        $data=$this->modelo->getProductoId($id);
        /* $color=$this->modelo->getColor();
        $tipo=$this->modelo->getTipo();
        $uso=$this->modelo->getUso();
        $statusProducto=$this->modelo->getLlaves("statusProducto");
        $marca=$this->modelo->getmarca();
        $modelo=$this->modelo->getModelo();  */
        $datos = [
            "titulo" => "Administrativo Modifica Borra",
            "menu" => false,
            "admon"=>true,
           /*  "modelo"=>$modelo,
            "color"=>$color,
            "tipo"=>$tipo, 
            "uso"=>$uso,  */
            /* "marca  " => $marca,
            "statusProducto"=>$statusProducto, */
            "errores"=> $errores,
            "data" => $data
          ];
          $this->vista("admonProductosBorraVista",$datos);
    }
    public function cambio($id="")
    {
        $sesion=new Sesion();
        $data=array();
        $errores=array();
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            //Recibimos la informacion
            // si existe id es una modiifcación, sino es un alta
            //
            $id=isset($_POST['id'])?$_POST['id']:"";
            $Color=$_POST["color"]??"";
            $Uso=$_POST["uso"]??"";
            $PRECIO=Valida::numero($_POST["PRECIO"]??"");
            $NUMERO_CHASIS=$_POST["NUMERO_CHASIS"]??"";
            //Ya no se utiliza en POST
            //$IMAGEN_AUTO=$_POST["IMAGEN_AUTO"]??"";
            $IMAGEN_AUTO=$_FILES["IMAGEN_AUTO"]["name"];
            $IMAGEN_AUTO=Valida::Archivo($IMAGEN_AUTO);
            $KILOMETRAJE=$_POST["KILOMETRAJE"]??"";
            $MOTOR_SERIE=$_POST["MOTOR_SERIE"]??"";
            $CILINDRAJE=Valida::numero($_POST["CILINDRAJE"]??"");
            $POTENCIA=Valida::numero($_POST["POTENCIA"]??"");
            $DESCRIPCION_COMBUSTIBLE= Valida::cadena($_POST['DESCRIPCION_COMBUSTIBLE'] ?? "");
            $TRACCION=$_POST["TRACCION"]??"";
            $status=$_POST["status"]??"";
            $TRANSMISION=$_POST["TRANSMISION"]??"";
            //Validamos la informacion
           
            if (empty($Color)) {
                array_push($errores,"El color del vehiculo es requerida");
            }
            if (empty($Uso)) {
                array_push($errores,"El Uso del vehiculo es requerida");
            }
            if (!is_numeric($PRECIO) and $PRECIO<0) {
                array_push($errores,"El precio del vehiculo debe de ser un numero y un numero positivo");
            }
            
    
            if (!is_numeric($KILOMETRAJE) and $KILOMETRAJE<0 ) {
                array_push($errores,"El Kilometraje del vehiculo es requerida y un numero positvo");
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
            }else if (Valida::archivoImagen($_FILES['IMAGEN_AUTO']['tmp_name'])) {
               //Cambiamos el nombre del archivo
                $IMAGEN_AUTO=Valida::Archivo(html_entity_decode($NUMERO_CHASIS));
                $IMAGEN_AUTO=strtolower($IMAGEN_AUTO.".jpg");
            
                //SUbir archivo
                if (is_uploaded_file($_FILES['IMAGEN_AUTO']['tmp_name'])) {
                copy($_FILES['IMAGEN_AUTO']['tmp_name'],"img/autos/".$IMAGEN_AUTO);
                //Validar 240px
                Valida::Imagen($IMAGEN_AUTO,240);
                } else {
                array_push($errores,"Error all subir el archivo de imagen");
            }
            } else {
                array_push($errores,"Formato de la imagen no aceptado");
            }
            
            if(empty($errores)){

             $data=[
                "id"=>$id,
                "color"=>$Color,
                "uso"=>$Uso,
                "KILOMETRAJE"=>$KILOMETRAJE,
                "MOTOR_SERIE"=>$MOTOR_SERIE,
                "DESCRIPCION_COMBUSTIBLE" => $DESCRIPCION_COMBUSTIBLE,
                "PRECIO"=>$PRECIO,
                "CILINDRAJE"=>$CILINDRAJE,
                "POTENCIA"=>$POTENCIA,
                "TRACCION"=>$TRACCION,
                "TRANSMISION"=>$TRANSMISION,
                "IMAGEN_AUTO"=>$IMAGEN_AUTO,
                "status"=>$status
             ];
             
             //var_dump($data);
             $errores=$this->modelo->modificaProducto($data);

             //Validamos la Modificacion
             if(empty($errores)){
                header("location:".RUTA."admonProductos");
             }
            }
        }
            $data=$this->modelo->getProductoId($id);
            $color=$this->modelo->getColor();
            $tipo=$this->modelo->getTipo();
            $uso=$this->modelo->getUso();
            $statusProducto=$this->modelo->getLlaves("statusProducto");
            $marca=$this->modelo->getmarca();
            $modelo=$this->modelo->getModelo();
            $datos = [
                "titulo" => "Administrativo Modifica Alta",
                "menu" => false,
                "admon"=>true,
                "modelo"=>$modelo,
                "color"=>$color,
                "tipo"=>$tipo, 
                "uso"=>$uso, 
                "id"=>$id,
                "marca  " => $marca,
                "statusProducto"=>$statusProducto,
                "errores"=> $errores,
                "data" => $data
              ];
              //var_dump($id);
              $this->vista("admonProductosModificaVista",$datos);
        
          
    }
    public function getMasBaratos()
       {
        return $this ->modelo->getMasBaratos();
       }

       public function getNuevos()
       {
        return $this ->modelo->getNuevos();
       }

       public function producto($id='',$regresa='')
       {
        $sesion=new Sesion();
         //Leemos los datos del registro del id
         $data = $this->modelo->getProductoId($id);
         //
         //Enviamos el id del usuario
         $sesion = new Sesion();
         $idUsuario = $_SESSION["email"]["id"];
        
         //
         //Vista Alta
         $datos = [
           "titulo" => "Productos",
           "subtitulo" =>"LEMPIRA AUTOMOTRIZ",
           "menu" => true,
           "admon" => false,
           "regresa" => $regresa,
           "idUsuario" => $idUsuario,
           "errores" => [],
           "data" => $data
         ];
         $this->vista("productoVista",$datos);
       }
    }
    
?>
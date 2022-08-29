<?php
$pago='';
/**
 * Controlador Carrito
 */
class Carrito extends Controlador{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("CarritoModelo");

  }

  function caratula($errores=[]){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      $errores = array();
      //
      //Recuperamos el id del usuario
      //
      $idUsuario = $_SESSION["email"]["id"];
      //
      //Leer los productos del carrito
      //
      $data = $this->modelo->getCarrito($idUsuario);
      //VAR_DUMP($data);
      //
      $datos = [
        "titulo" => "Carrito",
        "data" => $data,
        "idUsuario" => $idUsuario,
        "errores" => $errores,
        "menu" => true
      ];
      $this->vista("carritoVista",$datos);
    } else {
      header("location:".RUTA);
    }
  }
//Funcion para evitar errores en la verificacion y agregacion de productosr
  public function agregaProducto($ID_AUTO, $idUsuario)
  {
    $errores = array();
    if ($this->modelo->verificaProducto($ID_AUTO, $idUsuario)==false) {
      //Añadir el registro
      if ($this->modelo->agregaProducto($ID_AUTO, $idUsuario)==false) {
        array_push($errores,"Error al insertar el producto al carrito");
      }
    }
    //Caratula
 
    $this->caratula($errores);
  }

//BORRAR UN AUTO DEL CARRITO
  public function borrar($ID_AUTO, $idUsuario)
  {
    $errores = array();
    if (!$this->modelo->borrar($ID_AUTO, $idUsuario)) {
      array_push($errores, "Error al borrar el registro del carrito");
    }
    $this->caratula($errores);
  }
  public function checkout()
  {
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      $data= $_SESSION["email"];
      //
      $datos=[
        "titulo" => "Carrito | Datos de Envio",
        "data"=>$data, 
        "menu" => true
      ];
      $this->vista("datosEnvioVista",$datos);
    } else {
      $datos=[
        "titulo" => "Carrito | Checkout",
        "menu" => true
      ];
      $this->vista("checkoutVista",$datos);
    }
  }
  public function formaPago($value=''){
      $sesion = new Sesion();
      //Recuperamos el id del usuario
      $idUsuario = $_SESSION["email"]["id"];
      //Leer los productos del carrito
      //$carrito = $this->modelo->getCarrito($idUsuario);
      $data = $_SESSION["email"];
    $datos=[
        "data"=>$data,
        "titulo"=>"Carrito | Forma de Pago",
        "menu"=>true
    ];
    $this->vista("formaPagoVista",$datos);
  }
  public function verificar(){
    $sesion = new Sesion();
      //Recuperamos el id del usuario
      $idUsuario = $_SESSION["email"]["id"];
      //Leer los productos del carrito
      $carrito = $this->modelo->getCarrito($idUsuario);
     
    $pago=$_POST["pago"]??"";
    
    $data = $_SESSION["email"];
    $datos=[
      "titulo"=>"Carrito | Verificar Datos",
      "pago"=>$pago,
      "data"=>$data,
      "carrito"=>$carrito,
      "menu"=>true
    ];
    
    $this->vista("verificaVista",$datos);
  }
  public function gracias(){
    
    $sesion = new Sesion();
    $data = $_SESSION["email"];
    $idUsuario=$_SESSION["email"]["id"];
    if ($carrito = $this->modelo->cierraCarrito($idUsuario,1)){
      $this->modelo->borrarcarro();
      $datos=[
      "titulo"=>"Carrito | Gracias por su Compra",
      "data"=> $data,
      "menu"=>true
    ];
    $this->vista("graciasVista",$datos);
  }else{
    $datos = [
      "titulo" => "Error la actualización del carrito",
      "menu" => true,
      "errores" => [],
      "data" => [],
      "subtitulo" => "Error la actualización del carrito",
      "texto" => "Existió un problema al actualizar el estado del carrito. Prueba por favor más tarde o comuníquese a nuestro servicio de soporte técnico.",
      "color" => "alert-danger",
      "url" => "tienda",
      "colorBoton" => "btn-danger",
      "textoBoton" => "Regresar"
    ];
    $this->vista("mensajeVista",$datos);
  }
  }
  public function ventas(){
    $data= $this->modelo->ventas();
    $datos=[
      "titulo"=>"Ventas",
      "data"=>$data,
      "menu"=>false,
      "admon"=>true
    ];
    $this->vista("admonVentasVista",$datos);
  }
  public function detalle($fecha, $idUsuario){
    $data = $this->modelo->detalle($fecha, $idUsuario);
    //var_dump($data);
    $datos=[
      "titulo"=>"Ventas Detalle",
      "data"=>$data,
      "menu"=>false,
      "admon"=>true
    ];
    $this->vista("admonVentasDetalleVista",$datos);  
  }
  public function grafica()
  {
    $sesion=new Sesion();
    //
    $data = $this->modelo->ventasxdia();
    //
    $datos=[
      "titulo" => "Ventas x dia",
      "data" => $data,
      "menu" => false,
      "admon" => true
    ];
    $this->vista("admonVentasGraficaVista",$datos);
  }
  public function graficames()
    {
      $sesion=new Sesion();
      //
      $data = $this->modelo->ventasxmes();
      //
      $datos=[
        "titulo" => "Ventas x mes",
        "data" => $data,
        "menu" => false,
        "admon" => true
      ];
      $this->vista("admonVentasGraficaMesVista",$datos);
    }
    public function graficamarca()
    {
      $sesion=new Sesion();
      //
      $data = $this->modelo->ventasxmarca();
      //
      $datos=[
        "titulo" => "Ventas x marca",
        "data" => $data,
        "menu" => false,
        "admon" => true
      ];
      $this->vista("admonVentasGraficaMarcaVista",$datos);
    }
    public function graficaauto()
    {
      $sesion=new Sesion();
      //
      $data = $this->modelo->ventasxauto();
      //
      $datos=[
        "titulo" => "Ventas x auto",
        "data" => $data,
        "menu" => false,
        "admon" => true
      ];
      $this->vista("admonVentasGraficaAutoVista",$datos);
    }
    public function graficamarcacantidad()
    {
      $sesion=new Sesion();
      //
      $data = $this->modelo->ventasxautocantidad();
      //
      $datos=[
        "titulo" => "Ventas x autocantidad",
        "data" => $data,
        "menu" => false,
        "admon" => true
      ];
      $this->vista("admonVentasGraficaAutoCantidadVista",$datos);
    }
    public function graficamodelo()
    {
      $sesion=new Sesion();
      //
      $data = $this->modelo->ventasxmodelo();
      //
      $datos=[
        "titulo" => "Ventas x modelo",
        "data" => $data,
        "menu" => false,
        "admon" => true
      ];
      $this->vista("admonVentasGraficaModeloVista",$datos);
    }
    public function graficamodelocantidad()
    {
      $sesion=new Sesion();
      //
      $data = $this->modelo->ventasxmodelocantidad();
      //
      $datos=[
        "titulo" => "Ventas x modelocantidad",
        "data" => $data,
        "menu" => false,
        "admon" => true
      ];
      $this->vista("admonVentasGraficaModeloCantidadVista",$datos);
    }
    public function factura(){
      $sesion = new Sesion();
      $data = $_SESSION["email"];
      $idUsuario=$_SESSION["email"]["id"];
      $data= $this->modelo->factura($idUsuario);
      //global $pago;
      $datos=[
        "titulo"=>"Ventas",
        "data"=>$data,
        //"pago"=>$pago,
        "menu"=>false,
        "admon"=>true
      ];
      //var_dump($data);
      $this->vista("ReporteFacturaVista",$datos);
    }
    }
  ?> 
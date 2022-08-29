<?php
/**
 * Controlador administrativo
 */
class AdmonPlantilla extends Controlador 
{
    private $modelo;

function __construct(){
    $this->modelo=$this->modelo("AdmonPlantillaModelo");
      } 
public function caratula()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getModelo();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteModeloVista",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
}
public function caratula_e()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getModelo();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteModeloVistaExcel",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
}
public function marca()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getMarca();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteMarcaVista",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
}
public function marca_e()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getMarca();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteMarcaVistaExcel",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
}


public function usuarios()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getUsuarios();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteUsuariosVista",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
}
public function usuarios_e()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getUsuarios();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteUsuariosVistaExcel",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
}
public function productos()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getProductos();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteProductosVista",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
}
public function productos_e()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getProductos();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteProductosVistaExcel",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
}

public function color()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getColor();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteColorVista",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
    
}
public function colore()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getColor();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteColorVistaExcel",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }
    
}

public function proveedor()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getProveedor();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteProveedorVista",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }

}
public function proveedor_e()
{
    //Creamos sesion
    $sesion=new Sesion();
    if ($sesion->getLogin()) {
        $data=$this->modelo->getProveedor();
        $datos = [
            "titulo" => "Reporte",
            "menu" => false,
            "admon"=>true,
            "data" => $data
          ];
          $this->vista("ReporteProveedoresVistaExcel",$datos);
    }
    else {
        header("location:".RUTA."admon");
    }

}


    }
?>
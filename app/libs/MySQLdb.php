<?php
/**
 * Aqui realizamos la conexión de la base de datos MySQL
 */
class MySQLdb{
  private $host = "localhost";
  private $usuario = "root";
  private $clave = "";
  private $db = "lempira_automotriz";
  private $puerto = ""; 
  private $conn;
  
  function __construct()
  {
    $this->conn = mysqli_connect($this->host, 
      $this->usuario, 
      $this->clave,
      $this->db);

    if (mysqli_connect_errno()) {
      printf("Error en la conexión a la base de datos %s",
      mysqli_connect_errno());
      exit();
    } else {
      //print "Conexión exitosa"."<br>";
    }

    if (!mysqli_set_charset($this->conn, "utf8")) {
      printf("Error en la conversión de caracteress %s",
      mysqli_connect_error());
      exit();
    } else {
      //print "El conjunto de caracteres es: ".mysqli_character_set_name($this->conn)."<br>";
    }
  } // Final de la clase contructora.

  function query($sql){
     $data = array();
     $r = mysqli_query($this->conn, $sql);
     if($r){
      if(mysqli_num_rows($r)>0){
       $data = mysqli_fetch_assoc($r);
     }
    }
    return $data;
  }
  function querySelect($sql){
    $data = array();
    $r = mysqli_query($this->conn, $sql);
    if($r){
      while($row = mysqli_fetch_assoc($r)){
        array_push($data, $row);
    }
   }
   return $data;
 }
//Query regresa un valor booleano
  function queryNoSelect($sql){
    $r = mysqli_query($this->conn, $sql);
    return $r;
  }
  public function cerrar()
  {
    mysqli_close($this->conn);
  }
  
}
?>
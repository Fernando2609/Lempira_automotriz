<?php  
class Valida
{
    function __construct(){

    }
    public static function numero($cadena){
        $buscar  = array(' ', '$', ',');
        $reemplazar = array('', '', '');
        $numero = str_replace($buscar, $reemplazar, $cadena);
        return $numero;
    }
    public static function Archivo($cadena){
        $buscar  = array(' ', '*', '!','@','?','á','é','í','ó','ú','Á','É','í','ó','Ú','ñ','Ñ','Ü','ü','¿','¡');
        $reemplazar = array('-', '', '','','','a','e','i','o','u','A','E','I','O','U','n','N','U','u','','');
        $cadena = str_replace($buscar, $reemplazar, $cadena);
        return $cadena;
    }
        public static function imagen($imagen, $anchoNuevo){
            //Acceder al archivo
            $archivo = "img/autos/".$imagen;
        
            //Recuperar los datos del archivo
            $info = getimagesize($archivo);
            $ancho = $info[0];
            $alto = $info[1];
            $tipo = $info['mime'];
        
            //Calculamos las nuevas dimensiones
            $nuevoAncho = $anchoNuevo;
            $factor = $anchoNuevo / $ancho;
            $nuevoAlto = $alto * $factor;
        
            $imagen = imagecreatefromjpeg($archivo);
        
            //Creamos el lienzo para la nueva imagen
            $lienzo = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
        
            //Vaciamos la imagen modificada al lienzo
            imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
        
            //Crear el nuevo archivo
            imagejpeg($lienzo,$archivo,100);
    }
    public static function cadena($cadena){
        //$cadena=escapeshellcmd($cadena);
        $buscar  = array('^', 'delete', 'drop','truncate','exec','system');
        $reemplazar = array('-', 'dele*te', 'dr*op','trunca*te','exe*c','sys*tem');
        $cadena = str_replace($buscar, $reemplazar, $cadena);
        $cadena=addslashes(htmlentities($cadena));
        return $cadena; 
    }
    public static function archivoImagen($archivo)
    {
        $imagen_array=getimagesize($archivo);
        $imagenTipo=$imagen_array[2];
        return (bool)(in_array($imagenTipo,array(IMAGETYPE_JPEG,IMAGETYPE_PNG)));
    }
}

?>
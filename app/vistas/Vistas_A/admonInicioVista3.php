<?php include_once("encabezado.php"); ?>

    <h1 class="text-center text-uppercase color font-weight-bold mt-4">Bienvenido al modulo administrativo</h1>
    <?php  
        print  "<img src='".RUTA."img/Imagen.png"."' class=' img-responsive ml-5 p-auto' width='90%'/>  ";
        print "<h1 class='bg-white'>".$datos["data"]["nombre"]."</h1>";
        
    ?>
    
<?php include_once("piepagina.php"); ?>

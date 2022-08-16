<?php

$usu=$_GET["usu"];


 

switch ($usu) {
    case 1:
       
require ("mensajes/crear-telefonos.php"); 
        break;
    case 2:
        

require ("mensajes/editar-telefonos.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-telefonos.php"); 
      
break;
       
}



   
?>   
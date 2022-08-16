<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-marca.php"); 
        break;
    case 2:
        

require ("mensajes/editar-marca.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-marca.php"); 
      
break;
       
}


 
   
?>
<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-monitor.php"); 
        break;
    case 2:
        

require ("mensajes/editar-monitor.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-monitor.php"); 
      
break;
       
}



   
?>   
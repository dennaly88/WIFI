<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-sistemas.php"); 
        break;
    case 2:
        

require ("mensajes/editar-sistemas.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-sistemas.php"); 
      
break;
       
}

 

   
?>
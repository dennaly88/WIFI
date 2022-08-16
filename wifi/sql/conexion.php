<?php
 

$conexion=pg_connect("host=localhost port=5432 dbname=wifi user=postgres password=vtv") or die  (" ERROR  BASE DE DAT
     	" . pg_last_error());
 
 
if(!$conexion) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "\n";
}
 

 
?>




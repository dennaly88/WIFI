<?php
include ('sql/conexion.php');
include ('scrips/seguridad.php')

?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/icon-vtv.png">

			     <meta charset="utf-8">
			     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
        
        
                                 <title>SIDI</title>
						
</head>

 
            
        <body style="background-color:#BDBABA;">
        
 
        
       <!-- LIBRERIAS CSS I JS      --> 
        
                 <?php require ("scrips/librerias.php");?><!-- LIBRERIAS CSS I JS      --> 
                 <?php require ("principal-menu.php");?><br><br><br><!-- MENU  -->
                 <?php require ("cuerpo-telefonos.php");?>
                 <?php require ("editar-telefonos.php");?>
                  
                 
               
        </body>
               <?php require ("footer.php");?><!-- FOOTER  -->
               <?php require ("mensaje-gerencia.php");?> 
               
               
       
</html>




<?php
include ('sql/conexion.php');
include ('scrips/seguridad.php')

?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/FAVicon.ico"> 
			     <meta charset="utf-8">
			     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
        
        
                                 <title>WIFI</title>
						
</head>


            
<body style="background:rgb(7, 2, 2) no-repeat center center fixed;">
        
        

         
       
                
                 <?php require ("scrips/librerias.php");?><!-- LIBRERIAS CSS I JS      --> 
                 <?php require ("principal-menu.php");?><br><br><br><!-- MENU  -->
                 <?php require ("cuerpo-wifi.php");?>
                 <?php require ("eliminar-wifi.php");?>
                  

              
               
        </body>
               <?php require ("footer.php");?>
               <?php require ("mensaje.php");?> 
               
             
</html>



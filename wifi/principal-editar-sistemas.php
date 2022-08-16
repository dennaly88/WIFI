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
<link rel="stylesheet" href="css/fondo-principal.css">
        
        
                                 <title>VTV</title>
						
</head>


            
        <body>
        
 
         
       
        <link rel="stylesheet" href="css/fondo-principal.css">
                 <?php require ("scrips/librerias.php");?><!-- LIBRERIAS CSS I JS      --> 
                 <?php require ("principal-menu.php");?><br><br><br><!-- MENU  -->
                 <?php require ("administrar-sistemas.php");?>
                 <?php require ("editar-sistemas.php");?>
                 
<!--CUERPO PRINCIPAL -->
              
               
        </body>
               <?php require ("footer.php");?>
               <?php require ("mensaje-gerencia.php");?> 
               
             
</html>


<!DOCTYPE html>
<link rel="shortcut icon" href="img/FAVicon.ico"> 
<title>VTV</title>
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/fondo-login.css" crossorigin="anonymous">
<meta charset="utf-8">

<?php
unset($usu);
$usu1=$_GET["usu"];


      if($usu1<8){

      
    } else{

require ("mensajes/error-usuario.php");



    }


   
     
?>

<br><br><br><br><br>


<center><div class="card text-center border-secondary" style="max-width: 25rem;">
<div class="card-header bg"><center><img src="img/logo-menu.png"></div>
  <div class="card-body">
    
    <form class="form-container" method="post"action="sql/validacion.php">
    <div class="form-group input-group-sm mb-3">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control"  name="usuario" id="usuario" aria-describedby="emailHelp" placeholder="&#x1f468;" required>
                    
                  </div>
                  

                  
                  
                  <div class="form-group input-group-sm mb-3">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="&#128274" required>
                  </div>
                  <div class="form-check">
                    
                  </div>
                  <button type="submit" class="btn btn-info btn-sm">Enviar</button>
                  <input type="submit"  class="btn btn-danger btn-sm" onClick="window.location='http://192.168.6.95/'" value="Salir" >
             </form>
  </div>
  <div class="card-footer text-white">
  <button type="submit" class="btn btn btn-sm">Division de Servidores y Redes</button>


  </div>
</div>







</html>
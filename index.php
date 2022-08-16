





<link rel="shortcut icon" href="wifi/img/FAVicon.ico"> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="particles.css" rel="stylesheet" id="bootstrap-css">
<title>WIFI</title>
<script src="cuerpo/particles.js"></script>
<br><br><div class="container"><br><br>
	<div id="login-box">
		<div class="logo">
			<img src="wifi/img/logo-menu.png" class="img img-responsive  center-block"/>
			<h1 class="logo-caption"><span class="tweak">W</span>ifi</h1>
		</div><!-- /.logo -->
		<div class="controls">
		<form class="form-container" method="post"action="wifi/sql/validacion.php">
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
                  <button type="submit" class="btn btn-default btn-block btn-custom">Enviar</button>
                  
             </form>
		</div>
	</div>
</div>
<div id="particles-js"></div>

<?php
                                unset($usu);
                                $usu1=$_GET["usu"];
                                  if($usu1==8){
                                    require ("wifi/mensajes/mensaje_usuario.php");
                                } 
                            ?>             
   





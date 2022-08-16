<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="cuerpo.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<script src="cuerpo.js"></script>
<br><br><div class="container">
	<div id="login-box">
		<div class="logo">
			<img src="wifi/img/logo-menu.png" class="img img-responsive img-circle center-block"/>
			<h1 class="logo-caption"><span class="tweak">W</span>ifi</h1>
		</div><!-- /.logo -->

		<form class="form-container" method="post"action="wifi/sql/validacion.php">
		<div class="controls">
			<input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
			<input type="password" name="pass" placeholder="Contraseña" class="form-control" required>
		
		</div>
		          <button type="submit" class="btn btn-default btn-block btn-custom">Enviar</button>
                  <input type="submit"  class="btn btn-default btn-block btn-custom" onClick="window.location='http://192.168.6.95/'" value="Salir" >
             </form>
	</div><!-- /#login-box -->
</div><!-- /.container -->
<div id="particles-js"></div>

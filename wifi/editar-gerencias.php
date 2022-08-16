
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
 






<?php
include ('sql/conexion.php');
$id = $_GET['id'];
   


     $query = "SELECT * FROM gerencias WHERE id = $id";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

      $row['id'] ;
      $row['tag'] ;
      $row['nombre'];
      $row['siglas'];
      $row['ubicacion']; 

      


?>



    <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" >
                      <span aria-hidden="true">Editar Gerencia</span>
                      </button>
                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary"> 
           <center>
<form method="post"  action="sql/modificar-gerencia.php">
id<input class="form-control form-control-sm" type="text" name="id" id="id" placeholder="id" value="<?php echo $row['id'] ?>" required >
Tag<input class="form-control form-control-sm" type="text" name="tag" id="" placeholder="tag" value="<?php echo $row['tag'] ?>" required >
Nombre<input class="form-control form-control-sm" type="text" name="nombre" id="nombre" placeholder="nombre" value="<?php echo $row['nombre'] ?>" required >
Sigla<input class="form-control form-control-sm" type="text" name="siglas" id="siglas" placeholder="siglas" value="<?php echo $row['siglas'] ?>" required >
Ubicacion<input class="form-control form-control-sm" type="text" name="ubicacion"  id="ubicacion" placeholder="ubicacion" value="<?php echo $row['ubicacion'] ?>" required >



   </div>   
    </div>
  </div>
   <div class="modal-footer btn btn-secondary">
                 <input class="btn-submit btn btn-primary btn-sm"  type="submit" size="35" value="Modificar"> 
                 <input class="btn-reset btn btn-success btn-sm"  type="reset" size="35" value="Limpiar">
                 <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">Cerrar</span>
                                   </button>
</div>
</div> 
</div>
</div>
</div>
</div>
 

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/editar-usuario.js"></script>
  </body>
</html>
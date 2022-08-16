
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <?php
include ('sql/conexion.php');
$id = $_GET['id'];
   


     $query = "SELECT * FROM telefonos WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

     

      $row['id'] ;
      $row['bn'] ;
      $row['mar'];
      $row['ser'];
      $row['sis']; 
      $row['ubu'];
      $row['es'];
      $row['usu']; 
      $row['nom'];
      $row['ger'];


?>



    <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" >
                      <span aria-hidden="true">Editar Telefonos </span>
                      </button>
                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
            <form method="post"  action="sql/editar-telefonos.php">
Id<input class="form-control form-control-sm" type="text" name="id_edit" readonly id="id_edit" placeholder="id"  value="<?php echo $row['id'] ?>" required >
Bien Nacional<input class="form-control form-control-sm" type="text" name="bn_edit" id="bn_edit" placeholder="usuario" value="<?php echo $row['bn'] ?>" required >
Marca<input class="form-control form-control-sm" type="text" name="mar_edit" id="mar_edit" placeholder="marca" value="<?php echo $row['marcas'] ?>" required >
Serial<input class="form-control form-control-sm" type="text" name="ser_edit" id="ser_edit" placeholder="seria" value="<?php echo $row['seria'] ?>" required >
Sistema<input class="form-control form-control-sm" type="text" name="sis_edit"  id="sis_edit" placeholder="sistema" value="<?php echo $row['sistema'] ?>" required >
Ubicaciom<br><input class="form-control form-control-sm" type="text" name="ubu_edit" id="ubu_edit" placeholder="ubicacion" value="<?php echo $row['ubicacion'] ?>" required >
Estado<input class="form-control form-control-sm" type="text" name="es_edit" id="es_edit" placeholder="estado" value="<?php echo $row['estado'] ?>" required >
Usuario<input class="form-control form-control-sm" type="text" name="usu_edit" id="usu_edit" placeholder="usuario" value="<?php echo $row['usuario'] ?>" required >
Nombre<input class="form-control form-control-sm" type="text" name="nom_edit" id="nom_edit" placeholder="nombre" value="<?php echo $row['nombre'] ?>" required >
Gerencia<input class="form-control form-control-sm" type="text" name="ger_edit" id="ger_edit" placeholder="gerencia" value="<?php echo $row['gerencia'] ?>" required >
      
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
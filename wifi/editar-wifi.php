
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <?php
include ('sql/conexion.php');
$id = $_GET['id'];
   


     $query = "SELECT * FROM wifi WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

     

     $row['id'] ;
     $row['activo'];
     $row['bn'];
     $row['ip'];
     $row['clave_administrador']; 
     $row['ssid'];
     $row['clave_paso'];
     $row['verificado']; 
     $row['seria'];
     $row['modelo'];
     $row['marca'];
     $row['gerencia'];
     $row['lugar'];
 

?>



    <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" >
                      <span aria-hidden="true">Editar Wifi</span>
                      </button>
                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center> 
            <form method="post"  action="sql/editar-wifi.php">
Id<input class="form-control form-control-sm" type="text" name="id_edit" readonly id="id_edit" placeholder="id"  value="<?php echo $row['id'] ?>" required >
Activo<input class="form-control form-control-sm" type="text" name="activo_edit" readonly id="activo_edit" placeholder="activo" value="<?php echo $row['activo'] ?>" required >
Ip<input class="form-control form-control-sm" type="text" name="ip_edit" id="ip_edit" placeholder="ip_edit" value="<?php echo $row['ip'] ?>" required >
Bien Nacional<input class="form-control form-control-sm" type="text" name="bn_edit" id="bn_edit" placeholder="bn_edit" value="<?php echo $row['bn'] ?>" required >
Clave Administrador<input class="form-control form-control-sm" type="text" name="clave_adm_edit" id="clave_adm_edit" placeholder="clave administrador" value="<?php echo $row['clave_administrador'] ?>" required >
SSID<input class="form-control form-control-sm" type="text" name="ssid_edit"  id="ssid_edit" placeholder="ssid_edit" value="<?php echo $row['ssid'] ?>" required >
Clave de Paso<input class="form-control form-control-sm" type="text" name="clave_paso_edit" id="clave_paso_edit" placeholder="clave de paso" value="<?php echo $row['clave_paso'] ?>" required >
Verificado<input class="form-control form-control-sm" type="text" name="verificado_edit" id="verificado_edit" placeholder="verificado" value="<?php echo $row['verificado'] ?>" required >
Serial<input class="form-control form-control-sm" type="text" name="seria_edit" id="seria_edit" placeholder="serial" value="<?php echo $row['seria'] ?>" required >
Modelo<input class="form-control form-control-sm" type="text" name="modelo_edit" id="modelo_edit" placeholder="modelo" value="<?php echo $row['modelo'] ?>" required >
Gerencia<input class="form-control form-control-sm" type="text" name="gerencia_edit" id="gerencia_edit" placeholder="gerencia" value="<?php echo $row['gerencia'] ?>" required >
Ubicacion<input class="form-control form-control-sm" type="text" name="ubicacion_edit" id="ubicacion_edit" placeholder="ubicacion" value="<?php echo $row['lugar'] ?>" required >
Marca<input class="form-control form-control-sm" type="text" name="marca_edit" readonly id="marca_edit" placeholder="marca" value="<?php echo $row['marca'] ?>" required >    
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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


                               <title>WIFI</title>
             
             
             <body class="">
             
             
             
             
            </head> 

            
         <center>
         <div class="card border-dark mb-3" style="max-width: 100rem;">
          <div class="card-header card text-white bg-secondary mb-3">
          
          
          
          <center><button type="button" class="btn-close btn btn-light btn-sm" data-dismiss="modal" onclick="location.href='#'" style="max-width: 80rem;" >
                      <span aria-hidden="true" class="text-dark">Servidores</span>
                      </button>

                      
                      
                      
                      

          
                      
          
          
          
          
          </div>
          <div class="card-body text-secondary"> 
          <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
          <table id="p" class="table active border-secondary responsive"style="max-width: 100rem";>
          <thead>
         <tr class="bg-secondary text-white">
                  <h4>
                       <td>Id</td><center>
                        <td>IP</td>
                        <td>Clve Administrador</td>
                        <td>SSID</td>
                        <td>Clave de Paso</td>
                        <td>Serial</td>
                        <td>Modelo</td>
                        <td>Gerencia</td>
                        <td>Ubicacion</td>
                        <td>Marca</td>
                        <td>Accion</td >
                        
                 </h4>
      </tr>
  </thead>
<?php
$query = 'SELECT * FROM wifi ';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
while ($mostrar=pg_fetch_array($result)) {
                $id=$mostrar['id'];
                $bn=$mostrar['bn'];
                $marca=$mostrar['marca'];
                $ser=$mostrar['seria'];
                $sis=$mostrar['sistema'];
                $ubi=$mostrar['ubicacion'];
                $es=$mostrar['estado'];
                $usu=$mostrar['usuario'];
                $nom=$mostrar['nombre'];
                $ger=$mostrar['gerencia'];
                              
?>  
 
  <tr>
             
              <center><td><?php echo $mostrar['id'] ?></td><center>
              
              <center><td><?php echo $mostrar['ip'] ?></td><center>
              <center><td><?php echo $mostrar['clave_administrador'] ?></td><center>
              <center><td><?php echo $mostrar['ssid'] ?></td><center>
              <center><td><?php echo $mostrar['clave_paso'] ?></td><center>
              <center><td><?php echo $mostrar['seria'] ?></td><center>
              <center><td><?php echo $mostrar['modelo'] ?></td><center>
              <center><td><?php echo $mostrar['gerencia'] ?></td><center>
              <center><td><?php echo $mostrar['lugar'] ?></td><center>
              <center><td><?php echo $mostrar['marca']?></td><center><td>
<!--___________________________BOTON ELIMINAR_________________________________________________________________________-->
  

<a href="principal-eliminar-wifi.php?id=<?php echo $id;?>"> 
       
    <button type= 'button' class= 'btn btn-danger btn-sm'  title="Eliminar">&#x274e;</button>

                         
    <a href="principal-consola.php?id=<?php echo $id;?>"> 
        
        
        <button type= 'button' class= 'btn btn-dark btn-sm'  title="Consola">&#x1f4bb;</button>

<!--__________________________________________________________________________________________________________________-->
                     <a href="#"  data-target="#myModal" class="edit" data-toggle="modal"
                     data-id="<?php echo $id;?> "
                     data-usu="<?php echo $usu;?>"
                     data-pass="<?php echo $pass;?>" 
                     data-per="<?php echo $per;?>"
                     data-cor="<?php echo $cor;?>"
                     data-nom="<?php echo $nom;?>"
                     data-ape="<?php echo $ape;?>"
                     data-tel="<?php echo $tel;?>"
                     data-ced="<?php echo $ced;?>" >

<!--_____________________________________BOTON EDITAR_________________________________________________________________-->
                    

                    
                     
                      

      <a href="principal-editar-wifi.php?id=<?php echo $id;?>"> 
       
        <button type= 'button' class= 'btn btn-info btn-sm'  title="Editar"> &#x1f4dd; </button>






         
                       
<!--__________________________________________________________________________________________________________________-->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info " data-dismiss="modal" >
                      <span aria-hidden="true">Editar Usuario</span>
                      </button>
                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
            <form method="post"  action="sql/modificar-usuario.php">
Id<input class="input form-control" type="text" name="edit_id" readonly id="edit_id" placeholder="id"  value="<?php echo $row['id'] ?>" required >
Usuario<input class="input form-control" type="text" name="edit_usu" id="edit_usu" placeholder="usuario" value="" required >
Contraseña<input class="input form-control" type="text" name="edit_pass" id="edit_pass" placeholder="pass" value="" required >
Perfil<input class="input form-control" type="text" name="edit_per" id="edit_per" placeholder="perfil" value="" required >
Correo<input class="input form-control" type="text" name="edit_cor"  id="edit_cor" placeholder="correo" value="" required >
Nombre<br><input class="input form-control" type="text" name="edit_nom" id="edit_nom" placeholder="nombre" value="" required >
Apellido<input class="input form-control" type="text" name="edit_ape" id="edit_ape" placeholder="apellido" value="" required >
Telefono<input class="input form-control" type="text" name="edit_tel" id="edit_tel" placeholder="telefono" value="" required >
Cedula<input class="input form-control" type="text" name="edit_ced" id="edit_ced" placeholder="cedula" value="" required >
   </div>   
    </div>
  </div>
   <div class="modal-footer btn btn-secondary">
                 <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Modificar"> 
                 <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar">
                 <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">Cerrar</span>
                                   </button>
</div>
</div> 
</div>
</div>
</div>
</div>

</form>

         </td><center >
    </tr>                                              

<?php 
    } 
 ?>
 
    <div class="modal fade " id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  mb-3" role="document">
    <div class="modal-content">
<!--___________________________________________________CABEZERA DEL MODAL________________________________________________________________________________________-->


<div class="modal-header btn btn-secondary mb-3">
<button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" >
<span aria-hidden="true">Agregar Wifi</span>
              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
            <form method="post"  action="sql/crear-wifi.php">

   
<label for="recipient-name" class="col-form-label">Activo</label>
  <select class="form-control form-control-sm" placeholder name="ac"  id="ac" required>
        <option selected>.....</option>
        <option selected>Bueno</option>
        <option selected>Malo</option>
        <option selected>Almacen</option>
        <option selected>.....</option>
  </select>
Bien Nacional<input class="form-control form-control-sm" type="tex" name="bn"  id="bn" placeholder="" value="" required >
IP<input class="form-control form-control-sm" type="tex" name="ip"  id="ip" placeholder="" value="" required >
Clave Administrador<input class="form-control form-control-sm" type="tex" name="cl"  id="cl" placeholder="" value="" required >
SSID<input class="form-control form-control-sm" type="tex" name="ssid"  id="ssid" placeholder="" value="" required >
Clave Paso<input class="form-control form-control-sm" type="tex" name="cla"  id="cla" placeholder="" value="" required >

<label for="recipient-name" class="col-form-label">Verificado</label>
  <select class="form-control form-control-sm" placeholder name="ver"  id="ver" required>
        <option selected>.....</option>
        <option selected>SI</option>
        <option selected>NO</option>
        <option selected>.....</option>
  </select>
  Serial<input class="form-control form-control-sm" type="tex" name="ser"  id="ser" placeholder="" value="" required >
  Modelo<input class="form-control form-control-sm" type="tex" name="mod"  id="mod" placeholder="" value="" required >
 

  <?php     
                                     
                                     $query = 'SELECT * FROM gerencias;';
                                     $resulatdo = pg_query($query) or die ("error ");
                                     $numReg = pg_num_rows($resulatdo);

                           ?>

<div class="form-group">

   
               <label for="recipient-name" class="col-form-label">Gerencia:</label>
                 <select class="form-control form-control-sm" placeholder name="ger"  id="ger" required>
                       <option selected>Elige una opción</option>
                                     <?php
                                     while ($fila=pg_fetch_array($resulatdo)){
                                           echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
                                     }
                                     ?>
                 </select>
 </div>                           






 <?php     
                                     
                                     $query = 'SELECT * FROM ubicacion;';
                                     $resulatdo = pg_query($query) or die ("error ");
                                     $numReg = pg_num_rows($resulatdo);

                           ?>

<div class="form-group">

   
               <label for="recipient-name" class="col-form-label">Ubicacion:</label>
                 <select class="form-control form-control-sm" placeholder name="ubi"  id="ubi" required>
                       <option selected>Elige una opción</option>
                                     <?php
                                     while ($fila=pg_fetch_array($resulatdo)){
                                           echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
                                     }
                                     ?>
                 </select>










               
                                  <?php     
                                     
                                              $query = 'SELECT * FROM marcas;';
                                              $resulatdo = pg_query($query) or die ("error ");
                                              $numReg = pg_num_rows($resulatdo);

                                    ?>

        <div class="form-group">

            
                        <label for="recipient-name" class="col-form-label">Marcas:</label>
                          <select class="form-control form-control-sm" placeholder name="mar"  id="mar" required>
                                <option selected>Elige una opción</option>
                                              <?php
                                              while ($fila=pg_fetch_array($resulatdo)){
                                                    echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
                                              }
                                              ?>
                          </select>
          </div>
                              


         


                             
</div> 
</div>
</div>
<div class="modal-footer btn btn-secondary">
<input class="btn-submit btn btn-primary btn-sm"  type="submit" size="35" value="Crear">
<input class="btn-reset btn btn-success btn-sm"  type="reset" size="35" value="Limpiar">
<button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">Cerrar</span>
</button>
</div>
</div>         
</div>
</div>
</form>
                                                                                            
</table>

<center><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" onclick="location.href='principal-wifi.php'" style="max-width: 10rem;" >
                      <span aria-hidden="true" class="text-light">Sistema de WIFI</span>
                      </button>
</div>
</div>
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

</body>
<center>
<script type="text/javascript">
$(document).ready( function () {
    $('#p').DataTable();


} );
</script>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


                               <title>SIDI</title>
             
             
             <body class="">
             
             
             
             
            </head> 

            
         <center>
          <div class="card border-secondary mb-3" style="max-width: 80rem;">
          <div class="card-header card text-white bg-secondary mb-3">
          
          
          
          <center><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" onclick="location.href='principal-cpu.php'" style="max-width: 10rem;" >
                      <span aria-hidden="true" class="text-light">CPU</span>
                      </button>

                      <button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" onclick="location.href='principal-monitor.php'" style="max-width: 10rem;" >
                      <span aria-hidden="true" class="text-light">Monitores</span>
                      </button>
                      <button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" onclick="location.href='principal-telefonos.php'" style="max-width: 10rem;" >
                      <span aria-hidden="true" class="text-light">Telefonos</span>
                      </button>
                      <button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" onclick="location.href='principal-impresora.php'" style="max-width: 10rem;" >
                      <span aria-hidden="true" class="text-light">Impresora</span>
                      </button>
                      

          
                      
          
          
          
          
          </div>
          <div class="card-body text-secondary"> 
          <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
          <table id="p" class="table active border-secondary responsive"style="max-width: 80rem";>
          <thead>
         <tr class="bg-secondary text-white">
                  <h4>
                       <td>Id</td><center>
                        <td>Bn</td>
                        <td>Marca</td>
                        <td>Serial</td>
                        <td>Sistema</td>
                        <td>Ubicacion</td>
                        <td>Estado</td>
                        <td>Usuario</td>
                        <td>Nombre</td>
                        <td>Gerencia</td>
                        <td>Accion</td >
                        
                 </h4>
      </tr>
  </thead>
<?php
$query = 'SELECT * FROM telefonos ';
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
              <center><td><?php echo $mostrar['bn'] ?></td><center>
              <center><td><?php echo $mostrar['marcas'] ?></td><center>
              <center><td><?php echo $mostrar['seria'] ?></td><center>
              <center><td><?php echo $mostrar['sistema'] ?></td><center>
              <center><td><?php echo $mostrar['ubicacion'] ?></td><center>
              <center><td><?php echo $mostrar['estado'] ?></td><center>
              <center><td><?php echo $mostrar['usuario'] ?></td><center>
              <center><td><?php echo $mostrar['nombre'] ?></td><center>
              <center><td><?php echo $mostrar['gerencia']?></td><center><td>
<!--___________________________BOTON ELIMINAR_________________________________________________________________________-->
  

<a href="principal-eliminar-telefonos.php?id=<?php echo $id;?>"> 
       
    <button type= 'button' class= 'btn btn-danger btn-sm'  title="Eliminar">&#x274e;</button>

  
<!--__________________________ ________________________________________________________________________________________-->
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
                    

                    
                     
                      

                       <a href="principal-editar-telefonos.php?id=<?php echo $id;?>"> 
       
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
<span aria-hidden="true">Agregar Telefono</span>
              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
            <form method="post"  action="sql/crear-telefono.php">


              
               Bien Nacional<input class="form-control form-control-sm" type="text" name="bn" id="bn" placeholder="" value="" required >
               
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
                              Serial<input class="form-control form-control-sm" type="tex" name="ser"  id="ser" placeholder="" value="" required >


                              <?php     
                                     
                                     $query = 'SELECT * FROM sistemas;';
                                     $resulatdo = pg_query($query) or die ("error ");
                                     $numReg = pg_num_rows($resulatdo);

                           ?>

<div class="form-group">

   
               <label for="recipient-name" class="col-form-label">Sistema Operativo:</label>
                 <select class="form-control form-control-sm" placeholder name="sis"  id="sis" required>
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
                 <select class="form-control form-control-sm" placeholder name="ubu"  id="ubu" required>
                       <option selected>Elige una opción</option>
                                     <?php
                                     while ($fila=pg_fetch_array($resulatdo)){
                                           echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
                                     }
                                     ?>
                 </select>
 </div>

 <div class="form-group">

   
               <label for="recipient-name" class="col-form-label">Estado:</label>
                 <select class="form-control form-control-sm" placeholder name="es"  id="es" required>
                       <option selected>.....</option>
                       <option selected>Bueno</option>
                       <option selected>Malo</option>
                       <option selected>Almacen</option>
                       <option selected>.....</option>
                 </select>
 </div>

Usuario<input class="form-control form-control-sm" type="text" name="usu"  id="usu" placeholder="" value="" required >
Nombre del Equipo<input class="form-control form-control-sm" type="text" name="nom" id="nom" placeholder="" value="" required >
                              
                              
                              
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

<center><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" onclick="location.href='principal-telefonos.php'" style="max-width: 10rem;" >
                      <span aria-hidden="true" class="text-light">Telefonos</span>
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


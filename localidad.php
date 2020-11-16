<?php 
include("componentes/conexion.php");
include("componentes/headeradmin.php");



if (isset($_GET['id'])) {
	
	$id = $_GET['id'];
	$query = "SELECT * FROM localidad WHERE id_localidad = $id";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result)==1) {
		$row=mysqli_fetch_array($result);

$id_localidad= $row['id_localidad'];
$localidad= $row['nombre_localidad'];
$region= $row['id_region'];
$url_localidad= $row['url_localidad'];



	}
}
 

if (isset($_POST['update'])) {

$id_localidad= $_GET['id_localidad'];
$localidad= $_POST['nombre_localidad'];
$region= $_POST['id_region'];
$url_localidad= $_POST['url_localidad'];

$query = "UPDATE localidad set 
nombre_localidad = '$localidad',
id_region = '$region',
url_localidad = '$url_localidad'

WHERE id_localidad = '$id_localidad'"; 

$result = mysqli_query($conn, $query);

if (!$result) {
  
$_SESSION['message'] = 'Error al actualizar la localidad' ;
$_SESSION['message_type'] = 'danger';
header("Location: localidad.php");
} else{

$_SESSION['message'] = 'Propiedad actualizada exitosamente';
$_SESSION['message_type'] = 'success';
header("Location: localidad.php");
}

}





?>

<!--Modal AGREGAR localidad -->
<!-- Button trigger modal -->
<div class="container text-right">
  <button type="button" class="btn btn-primary rounded-pill shadow-sm" data-toggle="modal" data-target="#new_localidad"><i class="fa fa-plus mr-2"></i>Nueva Localidad </button>
</div>

 <h2 class="display-4 ">Localidades</h2>

<!-- Modal -->
<div class="modal fade" id="new_localidad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva localidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<div class="form-group">
	
<form action="componentes/agregarLocalidad.php" method="POST">
<!--Id Localidad -->	
<label>ID Localidad</label>
<input type="text" disabled="" name="id_localidad" class="form-control input-sm">
<!-- -->

<!--Nombre Localidad -->
<label>Nombre Localidad</label>
<input type="text" name="nombre_localidad" class="form-control input-sm">
<!-- -->


<!--Region -->
<label>Región</label>
 <select class="custom-select" name="id_region">
    <option selected>Seleccione</option>
    <?php 

    $query = "SELECT * FROM region";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    /*<option value="1">One</option>*/
    echo '<option value="'.$valores['id_region'].'">'.$valores['nombre_region'].'</option>';
}
     ?>
  </select>
<!-- -->

<!--Nombre Localidad -->
<label>URL Localidad</label>
<input type="text" name="url_localidad" class="form-control input-sm">
<!-- -->



</div>



      </div>
      <div class="modal-footer">
      
        <button type="submit"  name="save_lo" value="save" class="btn btn-success">Guardar</button>
      </div>

</form>

    </div>
  </div>
</div>

<!--Fin nueva localidad -->




<!--MOSTRAR LOCALIDAD -->
<div class="row">
	
	<div class="col-sm-12"></div>

	<table class="table table-hover table-condensed table-bordered" id="data_table">

	<tr>
		<td>Id</td>
		<td>Localidad</td>
		<td>Región</td>
		<td>URL</td>
		
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>


<?php 


$sql= "SELECT Lo.id_localidad ,Lo.nombre_localidad,Lo.url_localidad, Re.nombre_region FROM localidad Lo INNER JOIN region Re ON Lo.id_region = Re.id_region";

 $result=mysqli_query($conn,$sql);

 while($ver=mysqli_fetch_array($result)){
 ?>



	<tr>
		<td><?php echo $ver['id_localidad'] ?></td>
		<td><?php echo $ver['nombre_localidad'] ?></td>
		<td><?php echo $ver['nombre_region'] ?></td>
		<td><?php echo $ver['url_localidad'] ?></td>



<!-- Actualizar localidad -->		
		<td>

			<a href="componentes/editarlocalidad.php?id=<?php echo $ver['id_localidad']?>" 
			 class="btn btn-warning">

			 <i class="fas fa-pen"  style="color:#FFF;"></i>

			</a>
		</td>  




<!--Eliminar localidad -->
         
        <td>

			<a href="componentes/eliminarlocalidad.php?id=<?php echo $ver['id_localidad']?>"

			 class="btn btn-danger">

			 <i class="fas fa-trash" style="color:#FFF;"></i>

			</a>
		</td> 

	</tr>
<?php 
}
 ?>
	</table>

</div>


<!-- -->






<?php 
include("componentes/footeradmin.php");
 ?>



   </body>

</html>
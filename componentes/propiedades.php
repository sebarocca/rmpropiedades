<?php 
include("conexion.php")

 ?>
<div class="row">
	
	<div class="col-sm-12"></div>

	<table class="table table-hover table-condensed table-bordered">

	<tr>
		<td>Id</td>
		<td>Localidad</td>
		<td>Tipo de vivienda</td>
		<td>Precio</td>
		<td>Moneda</td>
		<td>Id post</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>


<?php 


$sql= "SELECT Pr.id_propiedad, Pr.precio, Pr.id_post, Lo.nombre_localidad, Vi.tipo_vivienda, Mo.tipo_moneda FROM propiedad Pr INNER JOIN localidad Lo ON Pr.id_localidad = Lo.id_localidad INNER JOIN vivienda Vi ON Pr.id_tipo_vivienda = Vi.id_tipo_vivienda INNER JOIN moneda Mo ON Pr.id_tipo_moneda = Mo.id_moneda;";

 $result=mysqli_query($conn,$sql);

 while($ver=mysqli_fetch_array($result)){
 ?>



	<tr>
		<td><?php echo $ver['id_propiedad'] ?></td>
		<td><?php echo $ver['nombre_localidad'] ?></td>
		<td><?php echo $ver['tipo_vivienda'] ?></td>
		<td><?php echo $ver['precio'] ?></td>
		<td><?php echo $ver['tipo_moneda'] ?></td>
		<td><?php echo $ver['id_post'] ?></td>


<!-- Actualizar propiedad-->		
		<td>

			<a href="componentes/editarpropiedad.php?id=<?php echo $ver['id_propiedad']?>"

			 class="btn btn-warning">

			 <i class="fas fa-pen" data-toggle="modal" data-target="#modaleditar" style="color:#FFF;"></i>

			</a>
		</td>

<!--Eliminar propiedad -->
        <td>

			<a href="componentes/eliminarpropiedad.php?id=<?php echo $ver['id_propiedad']?>"

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
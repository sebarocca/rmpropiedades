<?php 
include("conexion.php");


if (isset($_GET['id'])) {

$id = $_GET['id'];
$query = "DELETE FROM localidad WHERE id_localidad = $id";

$result = mysqli_query($conn, $query);

if (!$result) {
$_SESSION['message'] = 'Error al eliminar la localidad, probablemente esté asociada a alguna propiedad, por lo que si desea eliminarla antes debe eliminar la propiedad';
$_SESSION['message_type'] = 'danger';
	header("Location: ../localidad.php");
} else{

$_SESSION['message'] = 'Localidad eliminada exitosamente';
$_SESSION['message_type'] = 'success';
	header("Location: ../localidad.php");
}




}



?>
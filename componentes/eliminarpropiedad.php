<?php 
include("conexion.php");


if (isset($_GET['id'])) {

$id = $_GET['id'];
$query = "DELETE FROM propiedad WHERE id_propiedad = $id";

$result = mysqli_query($conn, $query);

if (!$result) {
$_SESSION['message'] = 'Error al eliminar la propiedad';
$_SESSION['message_type'] = 'danger';
	header("Location: ../admin.php");
} else{

$_SESSION['message'] = 'Propiedad eliminada exitosamente';
$_SESSION['message_type'] = 'success';
	header("Location: ../admin.php");
}




}



?>
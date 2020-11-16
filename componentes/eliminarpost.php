<?php 
include("conexion.php");


if (isset($_GET['id'])) {

$id = $_GET['id'];
$query = "DELETE FROM post WHERE id_post = $id";

$result = mysqli_query($conn, $query);

if (!$result) {
$_SESSION['message'] = 'El post está asociado a una propiedad, para eliminarlo debe cambiar el id del post en la propiedad asociada';
$_SESSION['message_type'] = 'danger';
	header("Location: ../post.php");
} else{

$_SESSION['message'] = 'Post eliminado exitosamente';
$_SESSION['message_type'] = 'success';
	header("Location: ../post.php");
}




}



?>
<?php 
include("conexion.php");


if (isset($_POST['Guardar'])) {
$titulo = $_POST["titulo"];
$contenido = $_POST["contenido"];

echo $titulo;
echo $contenido;


$sql="INSERT INTO post
(titulo,contenido)

values('$titulo','$contenido')";

$result = mysqli_query($conn, $sql);

if (!$result) {
	
$_SESSION['message'] = 'Error al registrar el post' ;
$_SESSION['message_type'] = 'danger';
header("Location: ../post.php");
} else{

$_SESSION['message'] = 'Post guardado exitosamente';
$_SESSION['message_type'] = 'success';
header("Location: ../post.php");
}

}

 ?>
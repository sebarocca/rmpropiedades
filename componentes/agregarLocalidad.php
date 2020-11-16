<?php 
include("conexion.php");



if (isset($_POST['save_lo'])) {
$id_localidad=$_POST['id_localidad'];
$localidad=$_POST['nombre_localidad'];
$region=$_POST['id_region'];
$url_localidad=$_POST['url_localidad'];

$sql="INSERT INTO localidad 
(id_localidad, nombre_localidad,
id_region, url_localidad)

values('$id_localidad','$localidad',
'$region','$url_localidad')";

$result = mysqli_query($conn, $sql);

if (!$result) {
	
$_SESSION['message'] = 'Error al ingresar los datos' ;
$_SESSION['message_type'] = 'danger';
header("Location: ../localidad.php");
//echo $result;
} else{

$_SESSION['message'] = 'Localidad guardada exitosamente';
$_SESSION['message_type'] = 'success';
	header("Location: ../localidad.php");
}

/*echo $id_localidad;
echo $localidad;
echo $region;
echo $url_localidad;*/


}


 ?>
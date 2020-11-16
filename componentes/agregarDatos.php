<?php 
include("conexion.php");


if (isset($_POST['save_pro'])) {

$propiedad=$_POST['id_propiedad'];
$localidad=$_POST['id_localidad'];
$vivienda=$_POST['id_tipo_vivienda'];
$operacion=$_POST['id_tipo_operacion'];
$precio=$_POST['precio'];
$moneda=$_POST['id_tipo_moneda'];
$m2=$_POST['cant_m2'];
$banos=$_POST['cant_banos'];
$dormitorios=$_POST['cant_dormitorios'];
$descripcion=$_POST['descripcion'];
$f1=$_POST['url_foto1'];
$f2=$_POST['url_foto2'];
$f3=$_POST['url_foto3'];
$f4=$_POST['url_foto4'];
$f5=$_POST['url_foto5'];
$f6=$_POST['url_foto6'];
$f7=$_POST['url_foto7'];
$f8=$_POST['url_foto8'];
$detalle1=$_POST['url_detalle'];
$detalle2=$_POST['url_detalle2'];
$id_post=$_POST['id_post'];
$url_propiedad=$_POST['url_propiedad'];





$sql="INSERT INTO propiedad 
(id_propiedad,
id_localidad, 
id_tipo_vivienda,
id_tipo_operacion, 
precio, 
id_tipo_moneda,
cant_m2,
cant_banos,
cant_dormitorios,
descripcion,
url_foto1,url_foto2,url_foto3,url_foto4,url_foto5,url_foto6,url_foto7,url_foto8,
url_detalle,
url_detalle2, id_post, url_propiedad)

values('$propiedad',
'$localidad',
'$vivienda',
'$operacion',
'$precio',
'$moneda',
'$m2',
'$banos',
'$dormitorios',
'$descripcion',
'$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8',
'$detalle1',
'$detalle2','$id_post','$url_propiedad')";

$result = mysqli_query($conn, $sql);

if (!$result) {
	
$_SESSION['message'] = 'Error al ingresar los datos' ;
$_SESSION['message_type'] = 'danger';
header("Location: ../admin.php");
} else{

$_SESSION['message'] = 'Propiedad guardada exitosamente';
$_SESSION['message_type'] = 'success';
	header("Location: ../admin.php");
}



}

 ?>
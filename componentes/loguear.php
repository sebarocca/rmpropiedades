<?php 
if(!isset($_SESSION)) 
{ 

	session_start();

}
   include("conexion.php");
  /*  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } */

if (isset($_POST['login'])) {
  $correo = $_POST['correo'];
  $password = $_POST['password'];
  

 $sql = "SELECT COUNT(*) AS contar FROM usuario WHERE correo = '$correo' and password = '$password'";
 $consulta = mysqli_query($conn,$sql);
 $array = mysqli_fetch_array($consulta);
 
 if ($array['contar']>0) {
   $_SESSION['email'] = $correo;
   header("Location: ../admin.php");

 }else{ 
$_SESSION['message'] = 'Los datos ingresados son incorrectos';
$_SESSION['message_type'] = 'danger';
header("Location: ../login.php");
 }



}

?>
<?php

if(!isset($_SESSION)) 
{ 

	session_start();

}
    
$conn = mysqli_connect(
'186.64.118.155',
'cantera1_sebarocca',
'Tecladoymouse1511',
'cantera1_roccamatte'
);

// checamos la conexion
if (mysqli_connect_errno())
{
echo "Error al conectarse con MYSQL: " . mysqli_connect_error();
}

?>
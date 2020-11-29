<?php 

include("conexion.php");


if (isset($_GET['id'])) {
	
	$id = $_GET['id'];
	
	$query = "SELECT * FROM localidad WHERE id_localidad = $id";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result)==1) {
		$row=mysqli_fetch_array($result);

		$id_localidad = $row['id_localidad'];
		$nombre_localidad = $row['nombre_localidad'];
		$id_region = $row['id_region'];
    $url_localidad = $row['url_localidad'];

	

	}
}



if (isset($_POST['update'])) {
	

$id = $_GET['id'];
$nombre =$_POST['nombre_localidad'];
$region =$_POST['id_region'];
$url_localidad =$_POST['url_localidad'];




$query = "UPDATE localidad set nombre_localidad = '$nombre', id_region = '$region', url_localidad = '$url_localidad' WHERE id_localidad = '$id' ";

$result = mysqli_query($conn, $query);

if (!$result) {
	
$_SESSION['message'] = 'Error al actualizar los datos' ;
$_SESSION['message_type'] = 'danger';
header("Location: ../localidad.php");
echo $result;
} else{

$_SESSION['message'] = 'Localidad actualizada correctamente';
$_SESSION['message_type'] = 'success';
	header("Location: ../localidad.php");
}

}






 ?>


<?php include ("headercrud.php") ?>

<div class="container mt-5">


<form action="editarlocalidad.php?id=<?php echo $_GET['id']; ?>" method="POST">
<!-- Localidad-->
  <div class="form-group">
    <label>Id Localidad</label>
    <input type="text" disabled="" name="id_localidad" value="<?php echo $id_localidad; ?> " class="form-control">
  </div>

<!--Nombre localidad -->
  <div class="form-group">
    <label>Nombre Localidad</label>
    <input type="text" class="form-control" name="nombre_localidad" value="<?php echo $nombre_localidad; ?>"  >
  </div>

<!--Region -->
  <div class="form-group">
    <label>Region</label>
    <!--<input type="text" class="form-control" name="id_region" value="<?php echo $id_region; ?> ">-->


 <select name="id_region" class="custom-select">
    <option selected >Seleccione</option>
    <?php 

    $query = "SELECT * FROM region";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    /*<option value="1">One</option>*/
    echo '<option value="'.$valores[id_region].'">'.$valores[nombre_region].'</option>';
}
     ?>
  </select>
<!--Fin tipo operacion -->




  </div> 


  <!--URL localidad -->
  <div class="form-group">
    <label>URL Localidad</label>
    <input type="text" class="form-control" name="url_localidad" value="<?php echo $url_localidad; ?>"  >
  </div> 


  <button type="submit" name="update" class="btn btn-success">Actualizar</button>


</form>


</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/funciones.js"></script>

<script type="text/javascript">
  $(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});
</script>



<script type="text/javascript">
  $(document).ready(function(){

$('#propiedades').load('componentes/propiedades.php');
  });
</script>


  </body>
</html>
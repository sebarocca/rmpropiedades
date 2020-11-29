<?php 

include("conexion.php");


if (isset($_GET['id'])) {
	
	$id = $_GET['id'];
	
	$query = "SELECT * FROM post WHERE id_post = $id";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result)==1) {
		$row=mysqli_fetch_array($result);

		$id_post = $row['id_post'];
		$titulo = $row['titulo'];
		$contenido = $row['contenido'];

	

	}
}



if (isset($_POST['update'])) {
	

$id = $_GET['id'];
$titulo =$_POST['titulo'];
$contenido =$_POST['contenido'];



$query = "UPDATE post set titulo = '$titulo', contenido = '$contenido' WHERE id_post = '$id' ";

$result = mysqli_query($conn, $query);

if (!$result) {
	
$_SESSION['message'] = 'Error al actualizar el post' ;
$_SESSION['message_type'] = 'danger';
header("Location: ../post.php");
echo $result;
} else{

$_SESSION['message'] = 'Post actualizado correctamente';
$_SESSION['message_type'] = 'success';
	header("Location: ../post.php");
}

}






 ?>


<?php include ("headercrud.php") ?>


<div class="container mt-5">


<form action="editarpost.php?id=<?php echo $_GET['id']; ?>" method="POST">
<!-- Localidad-->
  <div class="form-group">
    <label>Id Post</label>
    <input type="text" disabled="" name="id_post" value="<?php echo $id_post; ?> " class="form-control">
  </div>

<!--Nombre localidad -->
  <div class="form-group">
    <label>Titulo</label>
    <input type="text" class="form-control" name="titulo" value="<?php echo $titulo; ?>"  >
  </div>



<textarea name="contenido" id="editor" rows="10" cols="80">

	<?php echo $contenido ?>
  
</textarea>







  </div>  

<br>
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

<!--Script ck editor -->
<script>
	CKEDITOR.replace( 'editor' );
</script>




<script type="text/javascript">
  $(document).ready(function(){

$('#propiedades').load('componentes/propiedades.php');
  });
</script>


  </body>
</html>
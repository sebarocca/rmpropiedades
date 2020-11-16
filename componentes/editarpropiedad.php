<?php 
include("conexion.php");


if (isset($_GET['id'])) {
	
	$id = $_GET['id'];
	$query = "SELECT * FROM propiedad WHERE id_propiedad = $id";

	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result)==1) {
		$row=mysqli_fetch_array($result);

$propiedad= $row['id_propiedad'];
$localidad= $row['id_localidad'];
$vivienda= $row['id_tipo_vivienda'];
$operacion= $row['id_tipo_operacion'];
$precio= $row['precio'];
$moneda= $row['id_tipo_moneda'];
$m2= $row['cant_m2'];
$banos= $row['cant_banos'];
$dormitorios= $row['cant_dormitorios'];
$descripcion= $row['descripcion'];
$f1= $row['url_foto1'];
$f2= $row['url_foto2'];
$f3= $row['url_foto3'];
$f4= $row['url_foto4'];
$f5= $row['url_foto5'];
$f6= $row['url_foto6'];
$f7= $row['url_foto7'];
$f8= $row['url_foto8'];
$detalle1= $row['url_detalle'];
$detalle2= $row['url_detalle2'];
$id_post=$row['id_post'];
$url_propiedad=$row['url_propiedad'];


	}
}
 

if (isset($_POST['update'])) {

$propiedad=$_GET['id'];
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

$query = "UPDATE propiedad set 
id_localidad = '$localidad',
id_tipo_vivienda = '$vivienda',
id_tipo_operacion = '$operacion',
precio = '$precio',
id_tipo_moneda = '$moneda',
cant_m2 = '$m2',
cant_banos = '$banos',
cant_dormitorios = '$dormitorios',
descripcion = '$descripcion',
url_foto1 = '$f1',
url_foto2 = '$f2',
url_foto3 = '$f3',
url_foto4 = '$f4',
url_foto5 = '$f5',
url_foto6 = '$f6',
url_foto7 = '$f7',
url_foto8 = '$f8',
url_detalle = '$detalle1',
url_detalle2 = '$detalle2',
id_post = '$id_post',
url_propiedad = '$url_propiedad'
WHERE id_propiedad = '$propiedad'"; 

$result = mysqli_query($conn, $query);

if (!$result) {
  
$_SESSION['message'] = 'Error al actualizar los datos' ;
$_SESSION['message_type'] = 'danger';
header("Location: ../admin.php");
echo $result;
} else{

$_SESSION['message'] = 'Propiedad actualizada exitosamente';
$_SESSION['message_type'] = 'success';
  header("Location: ../admin.php");
}



}



 ?>

<!-- Header-->
<?php include ("headercrud.php") ?>
<!-- -->

<div class="container mb-5">

  <div class="row">

    <div class="col-12">
	
<div class="form-group">

   <form action="editarpropiedad.php?id=<?php echo $_GET['id']; ?>" method="POST">

    
        <label>ID</label>
        <input type="text" name="id_propiedad" readonly disabled="" value="<?php echo $propiedad; ?>" class="form-control form-control-sm input-sm">

        <label>Localidad</label>
        <!-- <input type="text" name="id_localidad" value="<?php echo $localidad; ?>" class="form-control form-control-sm input-sm"> -->

        <!--Localidad -->
<select class="custom-select" name="id_localidad">
    <option selected> <?php echo $localidad; ?> </option>
    <?php 

    $query = "SELECT * FROM localidad";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    /*<option value="1">One</option>*/
    echo '<option value="'.$valores[id_localidad].'">'.$valores[nombre_localidad].'</option>';

}
     ?>

  </select>
<!--fin localidad -->



  

<!--Tipo de vivienda -->
<label>Tipo de vivienda</label>
 <select class="custom-select" name="id_tipo_vivienda">
    <option selected> <?php echo $vivienda; ?></option>
    <?php 

    $query = "SELECT * FROM vivienda";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    /*<option value="1">One</option>*/
    echo '<option value="'.$valores[id_tipo_vivienda].'">'.$valores[tipo_vivienda].'</option>';
}
     ?>
  </select>
<!--Fin tipo vivienda -->



      
<!--Tipo de operacion -->
<label>Tipo de Operación</label>
 <select class="custom-select" name="id_tipo_operacion">
    <option selected><?php echo $operacion; ?></option>
    <?php 

    $query = "SELECT * FROM operacion";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    /*<option value="1">One</option>*/
    echo '<option value="'.$valores[id_operacion].'">'.$valores[tipo_operacion].'</option>';
}
     ?>
  </select>
<!--Fin tipo operacion -->


        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo $precio; ?>" class="form-control form-control-sm input-sm">



        <!--Tipo de operacion -->
<label>Tipo de moneda</label>
 <select class="custom-select" name="id_tipo_moneda">
    <option selected><?php echo $moneda; ?></option>
    <?php 

    $query = "SELECT * FROM moneda";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    /*<option value="1">One</option>*/
    echo '<option value="'.$valores[id_moneda].'">'.$valores[tipo_moneda].'</option>';
}
     ?>
  </select>
<!--Fin tipo operacion -->



        <label>Metros cuadrados</label>
        <input type="text" name="cant_m2" value="<?php echo $m2; ?>" class="form-control form-control-sm input-sm">
        <label>Cantidad de baños</label>
        <input type="text" name="cant_banos" value="<?php echo $banos; ?>" class="form-control form-control-sm input-sm">
        <label>Cantidad de dormitorios</label>
        <input type="text" name="cant_dormitorios" value="<?php echo $dormitorios; ?>" class="form-control form-control-sm input-sm">

        <label>Descripcion</label>
    <!--    <input type="text" rows="5" class="form-control form-control-sm" name="descripcion"
         value="<?php echo $descripcion; ?>">-->

         <textarea rows="7" class="form-control form-control-sm" name="descripcion">
           <?php echo $descripcion; ?>
         </textarea>
        


        <label>Link foto 1</label>
        <input type="text" name="url_foto1" required value="<?php echo $f1; ?>" class="form-control form-control-sm input-sm">
        <label>Link foto 2</label>
        <input type="text" name="url_foto2" required value="<?php echo $f2; ?>" class="form-control form-control-sm input-sm"> 
        <label>Link foto 3</label>
        <input type="text" name="url_foto3" required value="<?php echo $f3; ?>" class="form-control form-control-sm input-sm">
        <label>Link foto 4</label>
        <input type="text" name="url_foto4" value="<?php echo $f4; ?>" class="form-control form-control-sm input-sm"> 
        <label>Link foto 5</label>
        <input type="text" name="url_foto5" value="<?php echo $f5; ?>" class="form-control form-control-sm input-sm"> 
        <label>Link foto 6</label>
        <input type="text" name="url_foto6" value="<?php echo $f6; ?>" class="form-control form-control-sm input-sm"> 
        <label>Link foto 7</label>
        <input type="text" name="url_foto7" value="<?php echo $f7; ?>" class="form-control form-control-sm input-sm"> 
        <label>Link foto 8</label>
        <input type="text" name="url_foto8" value="<?php echo $f8; ?>" class="form-control form-control-sm input-sm"> 
        
        

        <label>URL detalle 1</label>
        <input type="text" name="url_detalle" value="<?php echo $detalle1;?>" class="form-control form-control-sm input-sm">                          
        <label>URL detalle 2</label>
        <input type="text" name="url_detalle2" value="<?php echo $detalle2;?>" class="form-control form-control-sm input-sm"> 

        <!--Id post -->
<label>Id Post</label>
<select class="custom-select" name="id_post">
    <option selected> <?php echo $id_post ?> </option>
    <?php 

    $query = "SELECT * FROM post";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    /*<option value="1">One</option>*/
    echo '<option value="'.$valores[id_post].'">'.$valores[id_post].' - '.$valores[titulo].'</option>';

}
     ?>

  </select>
<!--fin idpost -->

 <label>URL propiedad</label>
 <input type="text" disabled="" name="url_propiedad" value="<?php echo $url_propiedad;?>" class="form-control form-control-sm input-sm"> 



      </div>


</div> 
<!--cuerpo html -->

<!--fin cuerpo html -->
  <button class="btn btn-success" name="update">Actualizar</button>
</form>

</div>
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

    <!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>



<script type="text/javascript">
  $(document).ready(function(){

$('#propiedades').load('componentes/propiedades.php');
  });
</script>


  </body>
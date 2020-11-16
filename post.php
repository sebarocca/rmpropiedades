<?php 
include("componentes/conexion.php"); 
include ('componentes/headeradmin.php');

?>



  <!-- Demo content -->
  <h2 class="display-4 ">Post</h2>

<form action="componentes/guardarpost.php" method="POST">
<div class="form-group">
<input type="text" class="form-control" name="titulo" placeholder="Ingrese un título para el post ">
</div>

  <div class="container">
<textarea name="contenido" id="editor" rows="10" cols="80">

</textarea>
 </div>


<input type="submit" class="btn btn-success mt-2" name="Guardar" value="Guardar">
</form>




<!--MOSTRAR POSTS -->
<div class="row mt-5">
  
  <div class="col-sm-12"></div>

  <table class="table table-hover table-condensed table-bordered">

  <tr>
    <td>Id post</td>
    <td>titulo</td>
    <td>Editar</td>
    <td>Eliminar</td>
  </tr>


<?php 


$sql= "SELECT id_post, titulo FROM post;";

 $result=mysqli_query($conn,$sql);

 while($ver=mysqli_fetch_array($result)){
 ?>



  <tr>
    <td><?php echo $ver['id_post'] ?></td>
    <td><?php echo $ver['titulo'] ?></td>



<!-- Actualizar propiedad-->    
    <td>

      <a href="componentes/editarpost.php?id=<?php echo $ver['id_post']?>"

       class="btn btn-warning">

       <i class="fas fa-pen" data-toggle="modal" data-target="#modaleditar" style="color:#FFF;"></i>

      </a>
    </td>

<!--Eliminar propiedad -->
        <td>

      <a href="componentes/eliminarpost.php?id=<?php echo $ver['id_post']?>"

       class="btn btn-danger">

       <i class="fas fa-trash" style="color:#FFF;"></i>

      </a>
    </td>

  </tr>
<?php 
}
 ?>
  </table>


</div>


<!--Script ck editor -->


<!--Script ck editor -->
<!--Script ck editor -->
<script>
  CKEDITOR.replace( 'editor' );
</script>









<?php
 include ('componentes/footeradmin.php');
  ?>



</body>
</html>

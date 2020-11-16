<?php
include("componentes/headeradmin.php");
?>






<div class="container text-right">
  <button type="button" class="btn btn-primary rounded-pill shadow-sm" data-toggle="modal" data-target="#modalregistro"><i class="fa fa-plus mr-2"></i>Nueva Propiedad </button>
</div>




  <!-- Demo content -->
  <h2 class="display-4 ">Propiedades</h2>
  
 <div id="propiedades">
  </div>


  <!--Modal registro propiedades-->

<div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva propiedad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="form-group">

   <form action="componentes/agregarDatos.php" method="POST">
        <label>ID</label>
        <input type="text" disabled="" name="id_propiedad" class="form-control input-sm">

        <label>Localidad</label>
        <!-- <input type="text" name="id_localidad" class="form-control input-sm"> -->

<!--Localidad -->
<select class="custom-select" name="id_localidad">
    <option selected>Seleccione</option>
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
 <select  class="custom-select" name="id_tipo_vivienda">
    <option selected>Seleccione</option>
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
    <option selected>Seleccione</option>
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
        <input type="text" name="precio" class="form-control input-sm">


        <!--Tipo de operacion -->
<label>Tipo de moneda</label>
 <select class="custom-select" name="id_tipo_moneda">
    <option selected>Seleccione</option>
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
        <input type="text" name="cant_m2" class="form-control input-sm">
        <label>Cantidad de baños</label>
        <input type="text" name="cant_banos" class="form-control input-sm">
        <label>Cantidad de dormitorios</label>
        <input type="text" name="cant_dormitorios" class="form-control input-sm">
        <label>Descripcion</label>
        <input type="text" name="descripcion" class="form-control input-sm">
        <label>Link foto 1</label>
        <input type="text" name="url_foto1" class="form-control input-sm">
        <label>Link foto 2</label>
        <input type="text" name="url_foto2" class="form-control input-sm"> 
        <label>Link foto 3</label>
        <input type="text" name="url_foto3" class="form-control input-sm"> 
        <label>Link foto 4</label>
        <input type="text" name="url_foto4" class="form-control input-sm"> 
        <label>Link foto 5</label>
        <input type="text" name="url_foto5" class="form-control input-sm"> 
        <label>Link foto 6</label>
        <input type="text" name="url_foto6" class="form-control input-sm"> 
        <label>Link foto 7</label>
        <input type="text" name="url_foto7" class="form-control input-sm"> 
        <label>Link foto 8</label>
        <input type="text" name="url_foto8" class="form-control input-sm"> 
        
                                                      
        <label>URL detalle 1</label>
        <input type="text" name="url_detalle" class="form-control input-sm">                          
        <label>URL detalle 2</label>
        <input type="text" name="url_detalle2" class="form-control input-sm"> 

<!--Id post -->
<label>Id Post</label>
<select class="custom-select" name="id_post">
    <option selected>Seleccione</option>
    <?php 

    $query = "SELECT * FROM post";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    /*<option value="1">One</option>*/
    echo '<option value="'.$valores[id_post].'">'.$valores[id_post].'->'.$valores[titulo].'</option>';

}
     ?>

  </select>
<!--fin idpost -->

 <label>URL propiedad</label>
 <input type="text" name="url_propiedad" class="form-control input-sm"> 


<br>


      </div>

      <div class="modal-footer">

        <input type="submit" class="btn btn-success" name="save_pro" value="Guardar">

      </div>
</form>        
        
    </div>
  </div>
</div>



<?php 
include("componentes/footeradmin.php");
 ?>


   </body>

</html>
<?php 
include("../componentes/header_comunas.php");
 ?>

<!-- -->
<div class="container-fluid">
  
<div class="row">
<!--Lista ciudades -->
<?php
include ("../componentes/lista_ciudades_c.php");
?>
<!-- Fin lista de ciudades -->





<!--Destacada -->
<?php 


    $query = "SELECT Pr.cant_m2,Pr.cant_dormitorios, Pr.cant_banos,Pr.precio, Pr.url_propiedad, Pr.url_foto1, Lo.nombre_localidad, Pr.descripcion FROM propiedad Pr INNER JOIN localidad Lo ON Pr.id_localidad = Lo.id_localidad WHERE Pr.id_localidad = 21 ORDER BY rand() limit 1;";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {

echo '<div class="col-lg-10 mt-2">';
echo '<div class="container titulo mt-4"><h6 class="">Destacada en '.$valores['nombre_localidad'].'</h6>';
echo'<div class="jumbotron jumbotron-fluid" style="background:url('.$valores['url_foto1'].') ">';
echo' <div class="container">';
echo' <div class="row transparencia">';
echo'<div class="col-lg-5  ml-2">';
echo'<h1 class="display-4 mt-2">'.$valores['nombre_localidad'].'</h1>';
echo' <p class="lead">'.$valores['cant_m2'].' <br> '.$valores['cant_dormitorios'].'  dormitorios <br> '.$valores['cant_banos'].' baño</p>';
echo'<hr class="my-4">';
echo'<p>desde '.$valores['precio'].' UF</p>';
echo'<p class="lead">';
echo'<a class="btn btn-primary btn-lg" href="'.$valores['url_propiedad'].'" role="button">Ver más</a>';
echo'</p>';
echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';



}


 ?>

<!-- --> 
    

<div class="container-fluid">
<div class="row">

<ul class="list-group w-100">

 
 <?php 

    $query = "SELECT Vi.tipo_vivienda, Op.tipo_operacion, Pr.precio, Mo.tipo_moneda, Pr.cant_banos, Pr.cant_dormitorios, Pr.cant_m2, Pr.url_propiedad, Pr.url_foto1, Lo.nombre_localidad
FROM propiedad Pr 
INNER JOIN vivienda Vi ON Pr.id_tipo_vivienda = Vi.id_tipo_vivienda 
INNER JOIN operacion Op ON Pr.id_tipo_operacion = Op.id_operacion
INNER JOIN moneda Mo ON Pr.id_tipo_moneda = Mo.id_moneda
INNER JOIN localidad Lo ON Pr.id_localidad = Lo.id_localidad where Pr.id_localidad = 21";
$result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {


echo '<li class="list-group-item">';
echo '<a href="'.$valores['url_propiedad'].'"><div class="container-fluid ">';
echo '<div class="row">';
echo '<div class="col-lg-3 col-sm-3"><img src="'.$valores['url_foto1'].'" class="img-fluid"></div>';
echo '<div class="col-lg-6 col-sm-4 text-left">';
echo '<h6><small>Desde</small></h6>';
echo '<h4>'.$valores['precio'].' '.$valores['tipo_moneda'].'</h4>';
echo '<h6><small>'.$valores['cant_m2'].' | '.$valores['cant_dormitorios'].' dormitorios</small></h6>';
echo '<h6><small >'.$valores['tipo_vivienda'].' EN '.$valores['tipo_operacion'].'</small></h6>';
echo '<h6><small>'.$valores['nombre_localidad'].'</small></h6>';
echo ' </div>';
echo ' </div>';
echo '</div>';
echo '</a>';
echo '</li>';

}
     ?>




</ul>

  </div>
</div>


  </div>
<!-- -->

</div>

</div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
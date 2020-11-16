<!--Lista ciudades -->
<div class="col-lg-2  d-none d-sm-none d-md-block">

  <div class="container">
    <div class="row mt-5">
      <div class="col-12 titulolist  mt-4">
        <h5>Sector</h5>
      </div>
      <div class="col-12">
                <ul class="list-group ciudades">


         
 <?php 

    $query = "SELECT * FROM Localidad";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    echo '<li class="list-group-item">';	
    echo '<a href="l/'.$valores['url_localidad'].'"> '.$valores['nombre_localidad'].' </a>';
    echo ' </li>';


}
     ?>
   


       </ul>

      </div>
    </div>
  </div>

</div>
<!-- Fin lista de ciudades -->
<?php 
include("componentes/conexion.php");
 ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!--Estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

<!--FontAwesome -->
<script src="https://kit.fontawesome.com/b3350630c2.js" crossorigin="anonymous"></script>
   


  <title>Rocca Matte Propiedades</title>
  </head>
  <body>


<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
<div class="container">
  <a class="navbar-brand" href="index.php"><img src="https://ucarecdn.com/2832e06b-ef61-49f6-9a58-ca8f84687723/logotipo.png" class="img-fluid"></a>

  <div id="contactobanner" class="row ml-5">

  <a class="navbar-brand" href="https://n9.cl/w8ad">
    <i class="fab fa-facebook-f"></i>
  </a>

  <a class="navbar-brand" href="https://n9.cl/hrrjh">
    <i class="fab fa-1x fa-whatsapp"></i>
  </a>

  <a class="navbar-brand" href="mailto:propiedades@roccamatte.cl?Subject=Contacto%20desde%20el%20sitio%20web">
    <i class="far fa-1x fa-envelope"></i>
  </a>

 <a class="navbar-brand" href="https://n9.cl/095a">
   <i class="fab fa-1x fa-instagram"></i>
  </a>
  </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-lg-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Propiedades
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

 <?php 

    $query = "SELECT * FROM Localidad";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {
    echo '<a class="dropdown-item"  href="l/'.$valores['url_localidad'].'"> '.$valores['nombre_localidad'].' </a>';

}
     ?>



        </div>
      </li>

      </li>
      <li class="nav-item ml-lg-5">
        <a href="login.php"><i class="fas fa-2x fa-sign-in-alt"></i></a>
      </li>   


    </ul>
  </div>
 </div>
</nav>
  
<!--Fin navbar -->



<!--Carousel -->

<div id="bienvenida" class="carousel slide d-none d-sm-none d-md-block" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">


<div class="carousel-item active">
<img src="https://ucarecdn.com/7230dc6c-5b38-4a33-8af5-352ac2947195/homefotos305.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption mt-5 ">
<h5>La Florida</h5>
<h2>62 A 82m2</h2>
<p id="bannerdescripcion">Proyecto en blanco ideal para inversionistas.Edificios de 10 pisos con moderna y hermosa arquitectura emplazado en 4.800 m2 de terreno. Vista privilegiada Gran jardín con plaza central. Estacionamientos subterráneos. Modernos ascensores. 2 gimnasios equipados. 6 quinchos panorámicos. Amplia piscina. Lavandería. Sala juego de niños. Departamentos de 1-2 y 3 dormitorios totalmente equipados.</p>
<p><a href="l/la-florida/003.php">Ver más</a></p>
</div>
</div>



<?php 

 $query = "SELECT Pr.cant_m2, Pr.url_propiedad, Pr.url_foto1, Lo.nombre_localidad, Pr.descripcion FROM propiedad Pr INNER JOIN localidad Lo ON Pr.id_localidad = Lo.id_localidad ORDER BY rand();";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {

echo ' <div class="carousel-item">';
echo '<img src="'.$valores['url_foto1'].'" class="d-block w-100" alt="...">';
echo '<div class="carousel-caption mt-5 ">';
echo '<h5>'.$valores['nombre_localidad'].'</h5>';
echo '<h2>'.$valores['cant_m2'].'</h2>';
echo '<p id="bannerdescripcion">'.$valores['descripcion'].'</p>';
echo '<p><a href="l/'.$valores['url_propiedad'].'">Ver más</a></p>';
echo '</div>';
echo '</div>';


    }

 ?>

    



  </div>
  <a class="carousel-control-prev" href="#bienvenida" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#bienvenida" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Fin carousel -->

<div class="container-fluid">
  <div class="row">

<?php 
include ("componentes/lista_ciudades_l.php");
 ?>



<div class="col-lg-10 col-sm-12 ">
<!--Ultimas propiedades-->
<div class="container titulo mt-4"><h6 class="">Últimas propiedades añadidas</h6>
</div>

<div class="container ">
<div id="ultimaspro" class="owl-carousel owl-theme">




 <?php 

    $query = "SELECT Vi.tipo_vivienda, Op.tipo_operacion, Pr.precio, Mo.tipo_moneda, Pr.cant_banos, Pr.cant_dormitorios, Pr.cant_m2, Pr.url_propiedad, Pr.url_foto1, Lo.nombre_localidad
FROM propiedad Pr 
INNER JOIN vivienda Vi ON Pr.id_tipo_vivienda = Vi.id_tipo_vivienda 
INNER JOIN operacion Op ON Pr.id_tipo_operacion = Op.id_operacion
INNER JOIN moneda Mo ON Pr.id_tipo_moneda = Mo.id_moneda
INNER JOIN localidad Lo ON Pr.id_localidad = Lo.id_localidad ORDER BY rand() limit 6;";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {

echo '<a href="l/'.$valores['url_propiedad'].'">';
echo '<div class="item shadow rounded">';
echo '<img src="'.$valores['url_foto1'].'">';
echo '<div class="container">';
echo '<small>'.$valores['tipo_vivienda'].' EN '.$valores['tipo_operacion'].'</small>';
echo '<h4>'.$valores['precio'].' '.$valores['tipo_moneda'].'</h4>  ';
echo '<i class="fas fa-toilet"><small class="ml-1">'.$valores['cant_banos'].'</small></i>';
echo '<i class="fas fa-bed"><small class="ml-1">'.$valores['cant_dormitorios'].'</small></i>';
echo '<i class="fas fa-vector-square"><small class="ml-1">'.$valores['cant_m2'].'</small></i> ';
echo '<br>';
echo '<small id="direccion" class="mt-2 mb-4">'.$valores['nombre_localidad'].'</small>';
echo '</div>';
echo '</div>';
echo '</a>';

}
     ?>


</div>
</div>
<!-- Fin ultimas propiedades-->



<!--Propiedades destacadas -->
  <div class="container titulo mt-4"><h6 class="">Propiedades destacadas</h6></div>
<div class="container">
  

<div id="prodestacadas" class="owl-carousel owl-theme">



 <?php 

    $query = "SELECT Vi.tipo_vivienda, Op.tipo_operacion, Pr.precio, Mo.tipo_moneda, Pr.cant_banos, Pr.cant_dormitorios, Pr.cant_m2, Pr.url_propiedad, Pr.url_foto1, Lo.nombre_localidad
FROM propiedad Pr 
INNER JOIN vivienda Vi ON Pr.id_tipo_vivienda = Vi.id_tipo_vivienda 
INNER JOIN operacion Op ON Pr.id_tipo_operacion = Op.id_operacion
INNER JOIN moneda Mo ON Pr.id_tipo_moneda = Mo.id_moneda
INNER JOIN localidad Lo ON Pr.id_localidad = Lo.id_localidad ORDER BY rand() limit 8;";
    $result = mysqli_query($conn, $query);

    while ($valores = mysqli_fetch_array($result)) {

echo '<a href="l/'.$valores['url_propiedad'].'">';
echo '<div class="item shadow rounded">';
echo '<img src="'.$valores['url_foto1'].'">';
echo '<div class="container">';
echo '<small>'.$valores['tipo_vivienda'].' EN '.$valores['tipo_operacion'].'</small>';
echo '<h4>'.$valores['precio'].' '.$valores['tipo_moneda'].'</h4>  ';
echo '<i class="fas fa-toilet"><small class="ml-1">'.$valores['cant_banos'].'</small></i>';
echo '<i class="fas fa-bed"><small class="ml-1">'.$valores['cant_dormitorios'].'</small></i>';
echo '<i class="fas fa-vector-square"><small class="ml-1">'.$valores['cant_m2'].'</small></i> ';
echo '<br>';
echo '<small id="direccion" class="mt-2 mb-4">'.$valores['nombre_localidad'].'</small>';
echo '</div>';
echo '</div>';
echo '</a>';

}
     ?>




<!--Fin carousel y container y propiedades -->
</div>
</div>


<!--Fin col propiedades -->
</div>



<!--Fin row -->
</div>


<!--Fin container -->
</div>



<div class="container titulo text-center mt-5">
  <h3>Confíanos tu propiedad</h3>
</div>

<a href="https://n9.cl/hrrjh">
<div class="container  text-center mt-5 mb-5 shadow">
  <div class="row bg-white">

    <div class="col-lg-4 col-sm-12  border">
      <img src="https://ucarecdn.com/a98b1108-1925-490d-b335-54d80b6fe378/house.png" class="mt-4">
      <h4>¿Quieres comprar o arrendar?</h4>
    </div>

    <div class="col-lg-4 col-sm-12 border ">
      <img src="https://ucarecdn.com/c7e95992-329f-4a68-bd07-a8371a79f89b/red.png" class="mt-4">
      <h4>¿Quieres vender o buscar arrendatarios?</h4>
    </div>

    <div class="col-lg-4 col-sm-12 border ">
      <img src="https://ucarecdn.com/7744da4b-ddfc-4126-9cc6-6e21cf21c843/arquitecto.png" class="mt-4">
      <h4>Te asesoramos en construcción</h4>
    </div>

  </div>
</div>
</a>



   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="js/jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>

<script type="text/javascript">
$('#ultimaspro').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})
</script>


<script type="text/javascript">
  $('#prodestacadas').owlCarousel({
     loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})
</script>







  </body>
</html>
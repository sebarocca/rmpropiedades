
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
    <link rel="stylesheet" href="../../css/estilos.css">

    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/b3350630c2.js" crossorigin="anonymous"></script>

    <!-- jQuery 1.8 or later, 33 KB -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Fotorama from CDNJS, 19 KB -->
<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

  <title>Propiedades Rocca Matte</title>
  </head>
  <body>
<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
<div class="container">
<a class="navbar-brand" href="../../index.php"><img src="https://ucarecdn.com/2832e06b-ef61-49f6-9a58-ca8f84687723/logotipo.png" class="img-fluid"></a>

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
        <a class="nav-link active" href="../../index.php">Inicio</a>
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
    echo '<a class="dropdown-item"  href="../'.$valores['url_localidad'].'"> '.$valores['nombre_localidad'].' </a>';

}
     ?>


        </div>
      </li>
      <li class="nav-item ml-lg-5">
        <a href="../../login.php"><i class="fas fa-2x fa-sign-in-alt"></i></a>
      </li>           
    </ul>

  </div>
 </div>
</nav>
  
<!--Fin navbar -->
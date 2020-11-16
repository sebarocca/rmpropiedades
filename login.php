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
    <link rel="stylesheet" href="css/signin.css">


<!--FontAwesome -->
<script src="https://kit.fontawesome.com/b3350630c2.js" crossorigin="anonymous"></script>
   


  <title>Rocca Matte Propiedades</title>
  </head>

  <body class="text-center">



   
  <form class="form-signin" method="POST" action="componentes/loguear.php">
  <a href="index.php"><img class="mb-4" src="img/logotipo.png"  alt="" ></a>
  <h1 class="h3 mb-3 font-weight-normal">Por favor inicia sesión</h1>
  <!--Correo electronico -->
  <label for="inputEmail" class="sr-only">Correo electrónico</label>
  <input type="email" name="correo" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
  <!--Contraseña -->
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>

      <?php 
if (isset($_SESSION['message'])) { ?>
  
<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
  <?=$_SESSION['message'] ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php session_unset();}  ?>



  <!--Boton -->
  <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Iniciar sesión</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>



</form> 










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="js/jquery.min.js"></script>
    
  
  </body>
  </html>
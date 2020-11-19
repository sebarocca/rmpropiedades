<?php 

if(!isset($_SESSION)) 
{ 

  session_start();

}

include("componentes/conexion.php");

if (!isset($_SESSION['email'])) {
header("Location: login.php");
}

 ?>
<!-- -->
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<!--Estilos -->
    <link rel="stylesheet" href="css/admin.css">

<!--FontAwesome -->
<script src="https://kit.fontawesome.com/b3350630c2.js" crossorigin="anonymous"></script>

<!--CK EDITOR -->
<script src="librerias/ckeditor/ckeditor.js"></script>

  <title>Administrar sitio</title>
  </head>
  <body>

    
<!-- -->


<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="img/logotipo.png" alt="..." width="85" class="mr-3  img-thumbnail shadow-sm">
      <div class="media-body">
        <small class="m-0">
          



      <?php  echo $_SESSION['email']; ?>






        </small>
        <p class="font-weight-light text-muted mb-0">Administrador</p>
        <?php $correo ?>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Administrar</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="admin.php" class="nav-link text-dark  bg-light">
                <i class="far fa-building"></i>
                Propiedades
            </a>
    </li>
    <li class="nav-item">
      <a href="localidad.php" class="nav-link text-dark bg-light ">
               <i class="far fa-flag"></i>
                Localidades
            </a>
    </li>

    <li class="nav-item">
      <a href="post.php" class="nav-link text-dark bg-light ">
                <i class="far fa-sticky-note"></i>
                Posts
            </a>
    </li>

    <li class="nav-item mt-5">
      <a href="componentes/logout.php" class="nav-link text-primary bg-light ">
                <i class="fas fa-sign-out-alt"></i>
                Cerrar sesión
            </a>
    </li>         
   
  </ul>


 
</div>
<!-- End vertical navbar -->




<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fas fa-align-left"></i><small class="text-uppercase font-weight-bold"></small></button>

  <!--Propiedades-->
  <a href="admin.php" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="far fa-building"></i><small class="text-uppercase font-weight-bold"></small></a>

  <!--Localidad -->
  <a href="localidad.php" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="far fa-flag"></i><small class="text-uppercase font-weight-bold"></small></a>


    <!--Post-->
  <a href="post.php" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="far fa-sticky-note"></i><small class="text-uppercase font-weight-bold"></small></a>
 
   <!--Home-->
  <a href="index.php" type="button" class="btn btn-light bg-light rounded-pill shadow-sm px-4 mb-4"><i class="fas fa-home"></i><small class="text-uppercase font-weight-bold"></small></a>


  <!--Cerrar sesion-->
  <a href="componentes/logout.php" type="button" class="btn btn-light bg-danger text-white rounded-pill shadow-sm px-4 mb-4"> <i class="fas fa-sign-out-alt"></i><small class="text-uppercase font-weight-bold"></small></a>


<?php 
if (isset($_SESSION['message'])) { ?>
  
<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
  <?=$_SESSION['message'] ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

 <?php unset($_SESSION['message']);}  ?>


<?php 

include("../../componentes/conexion.php");

$sql= "SELECT Pr.id_propiedad, Pr.precio, Pr.id_post, Pr.cant_m2, Pr.cant_banos, Pr.cant_dormitorios, Pr.descripcion, Pr.url_foto1,Pr.url_foto2,Pr.url_foto3,Pr.url_foto4,Pr.url_foto5,Pr.url_foto6,Pr.url_foto7,Pr.url_foto8, Lo.nombre_localidad, Pr.url_detalle, Pr.url_detalle2, Vi.tipo_vivienda, Mo.tipo_moneda, Op.tipo_operacion, Po.contenido FROM propiedad Pr 

INNER JOIN localidad Lo ON Pr.id_localidad = Lo.id_localidad 
INNER JOIN vivienda Vi ON Pr.id_tipo_vivienda = Vi.id_tipo_vivienda 
INNER JOIN moneda Mo ON Pr.id_tipo_moneda = Mo.id_moneda
INNER JOIN operacion Op ON Pr.id_tipo_operacion = Op.id_operacion
INNER JOIN post Po ON Pr.id_post = Po.id_post

WHERE id_propiedad = 5;";

 $result=mysqli_query($conn,$sql);

  $row=mysqli_fetch_array($result);


 ?>


<?php 
include ("../../componentes/header_l.php");
 ?>

 <!-- -->   
<nav aria-label="breadcrumb" class="container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../../index.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="../la-serena.php"><?php echo $row['nombre_localidad'];?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $row['id_propiedad'];?></li>
  </ol>
</nav>
 <!-- -->

<div id="individualmain" class="container bg-white rounded-lg">
  <div class="row">

<div class="container titulo mt-4"><h6 class=""><?php echo $row['nombre_localidad'];?></h6>
</div>    

<div class="col-lg-7 col-sm-12 mt-1">
<!-- Add images to <div class="fotorama"></div> -->
<div class="fotorama" data-nav="thumbs">
  <a href="1.jpg"><img src="<?php echo $row['url_foto1'];?>" width="144" height="96"></a>
  <a href="2.jpg"><img src="<?php echo $row['url_foto2'];?>" width="144" height="96"></a>
  <a href="3.jpg"><img src="<?php echo $row['url_foto3'];?>" width="144" height="96"></a>
  <a href="4.jpg"><img src="<?php echo $row['url_foto4'];?>" width="144" height="96"></a>
  <a href="5.jpg"><img src="<?php echo $row['url_foto5'];?>" width="144" height="96"></a>
  <a href="6.jpg"><img src="<?php echo $row['url_foto6'];?>" width="144" height="96"></a>
  <a href="7.jpg"><img src="<?php echo $row['url_foto7'];?>" width="144" height="96"></a>
  <a href="8.jpg"><img src="<?php echo $row['url_foto8'];?>" width="144" height="96"></a>


</div>
</div>
<!--Especificaciones -->
  <div class="col-lg-4 col-sm-12 ">
    <div class="row">
      <small id="tipoaccion"><?php echo $row['tipo_vivienda'];?> EN <?php echo $row['tipo_operacion'];?></small>
    </div>
    <div class="row">
      <span class="titulo ">Precio desde: <h1><?php echo $row['precio'];?> <?php echo $row['tipo_moneda'];?></h1></span>
    </div>
 
    <div id="medidas" class="row mt-3 ">
     <div class="col-12 "><h6 class="text-left "><i class="fas fa-vector-square mr-4"></i><?php echo $row['cant_m2'];?></h6></div>
     <div class="col-12 "><h6 class="text-left "><i class="fas fa-toilet mr-4 ml-1"></i><?php echo $row['cant_banos'];?> Baños </h6></div>
     <div class="col-12 "><h6 class="text-left "><i class="fas fa-bed mr-4"></i><?php echo $row['cant_dormitorios'];?> Dormitorios</h6></div>
    </div>


    <div class="row mt-2" style="color: #707070;">
  <div class="col-12 ">
    <div class="titulo">Descripción</div>
    <p>
<?php echo $row['descripcion'];?>
</p>

  </div>

</div>




<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">Cotizar</button>
  </div>
  <!-- -->

   <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #F5F5F5;">
        <h5 class="modal-title" id="exampleModalLongTitle">Métodos de contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"style="background-color: #F5F5F5;" >
      <div class="container" >
     <div class="row" style="background-color: #FFF;" >

<div class="col-12 border shadow">
<a href="mailto:propiedades@roccamatte.cl?Subject=Contacto%20desde%20el%20sitio%20web">
  <i class="far fa-envelope-open"></i>
  <h5>Envíanos un email</h5>
  <small>Puedes enviarnos un mail a: propiedades@roccamatte.cl</small>
</div>
</a>

<div class="col-12 border shadow my-1">
<a href="tel:965337051">
  <i class="fas fa-phone-alt"></i>
  <h5>Llámanos por teléfono</h5>
  <small>Puedes llamar al siguiente numero: 9 6533 7051</small>
</div>
</a>

<div class="col-12 border shadow">
<a href="https://n9.cl/hrrjh">
  <i class="fab fa-whatsapp"></i>
  <h5>Chatea con nosotros</h5>
  <small>Envíanos un Whatsapp al +56 9 6533 7051</small>
</div>
</a>
   
    
     </div>
     </div>
      </div>
      <div class="modal-footer" style="background-color: #F5F5F5;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>
<!-- -->




</div>





<div class="row mt-5">
  
<div class="col-12">

<style type="text/css">
  #cont {
  
  
  /* Control de la altura con base en el texto del div*/
  height: auto;
  word-wrap: break-word;
}
</style>

<div class="container titulo mt-4 mb-4" id="cont"><h6>Más detalles</h6>  


<?php echo $row['contenido'];?>



</div>

<div class="col-12 mt-5 text-right">
  <button type="button" class="btn btn-link"><a href="<?php echo $row['url_detalle'];?>">Detalles</a></button>
</div>



</div>




<?php 
include ("../../componentes/footer_l.php");
 ?>
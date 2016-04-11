<?php include '../modelo/config.php';?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <title>Calendario</title>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url_css?>css/calendar.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$base_url_css?>js/es-ES.js"></script>
        <script src="<?=$base_url_css?>js/jquery.min.js"></script>
        <script src="<?=$base_url_css?>js/moment.js"></script>
        <script src="<?=$base_url_css?>js/funciones.js"></script>
        <script src="<?=$base_url_css?>js/bootstrap.min.js"></script>
        <script src="<?=$base_url_css?>js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="<?=$base_url_css?>css/bootstrap-datetimepicker.min.css" />
       <script src="<?=$base_url_css?>js/bootstrap-datetimepicker.es.js"></script>
       <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>


    </head>


<nav class="navbar navbar-inverse">
<div class="">

    <ul class="nav navbar-top-links navbar-right">
  
<a href="reg.articulo.php" role="button"> <button type="button" class="btn btn-default navbar-btn"   > <span> <i class="glyphicon glyphicon-log-out"></i></span>  Cerrar Sesión  </button></a> 

            </ul>


     <li> <a href="admin.php"> <span> <i class="glyphicon glyphicon-chevron-left fa-2x "> ATRAS </i> </span> </a></li>

      </div>
  </nav>

<div class="container">
  

<?php
 include 'formularios/form.categoria.php';
 ?>
</div>
<div class="container">

 <?php  include 'listas/list.categoria.php';
 ?>




  <footer>
    
        <script src="<?=$base_url_css?>js/underscore-min.js"></script>
    <script src="<?=$base_url_css?>js/calendar.js"></script>
<script>
  $(document).ready(function() {
    $('#articulo').DataTable();
} );

</script>

  </footer>
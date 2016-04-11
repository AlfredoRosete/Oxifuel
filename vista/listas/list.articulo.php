<?php


 $bd  = $conexion->query("SELECT articulo.id_articulo,articulo.articulo,articulo.precio,articulo.TotalPiezas, categoria.id_categoria,categoria.categoria, estatus.descripcions FROM articulo,categoria,estatus where articulo.id_categoria = categoria.id_categoria and articulo.clave = estatus.clave");

    ?>



<?php if(sizeof($bd)>0): ?>
  <table id="articulo" class="ui celled table" cellspacing="0" width="100%">
    <thead>
     <tr>
        <th>Articulo</th>
        <th>Precio</th>
        <th>Piezas en almacen</th>
        <th>Categoria</th>
        <th>Status</th>
        <th>Editar</th>
        <th>Eliminar</th>

     </tr>
    </thead>
 <tbody>
     <?php 
     while ($row = mysqli_fetch_assoc($bd)){ 
      ?>
     <tr>
      <td> <?php echo $row['articulo']; ?></td>
      <td> <?php echo $row['precio']; ?></td>
      <td> <?php echo $row['TotalPiezas']; ?></td>
      <td> <?php echo $row['categoria']; ?></td>
      <td><span class="label label-default"><?php echo $row['descripcions']; ?></span></td>
      

      <td> 
       <a  data-toggle="modal" data-target=".articulo<?php echo $row['id_articulo']?>"> 
       <span > <i class="glyphicon glyphicon-pencil"> </i></span> </a>
        <?php //include 'formularios.mod/mod.articulo.php'; ?>
        </td>
      <td>  <a href="javascript:;" onclick="aviso('../controlador/controlador.articulo.php?ope=2&id=<?php echo $row['id_articulo']?>'); return false;"><span  > <i class="glyphicon glyphicon-trash"> </i> </span> </a></td>
      </tr>  
      <?php } ?>
      <?php endif; ?>
  </tbody>
</table>
</fieldset>



</div>
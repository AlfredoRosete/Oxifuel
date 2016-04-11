<?php


 $bd  = $conexion->query("SELECT categoria.id_categoria, categoria.categoria , estatus.descripcions FROM categoria,estatus where categoria.clave= estatus.clave;");

    ?>



<?php if(sizeof($bd)>0): ?>
  <table id="articulo" class="ui celled table" cellspacing="0" width="100%">
    <thead>
     <tr>
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
      <td> <?php echo $row['categoria']; ?></td>
      <td> <?php echo $row['descripcions']; ?></td>
      <td> 
       <a  data-toggle="modal" data-target=".categoria<?php echo $row['id_categoria']?>"> 
       <span > <i class="glyphicon glyphicon-pencil"> </i></span> </a>
        <?php //include 'formularios.mod/mod.categoria.php'; ?>
        </td>
      <td>  <a href="javascript:;" onclick="aviso('../controlador/controlador.categoria.php?ope=2&id=<?php echo $row['id_categoria']?>'); return false;"><span  > <i class="glyphicon glyphicon-trash"> </i> </span> </a></td>
      </tr>  
      <?php } ?>
      <?php endif; ?>
  </tbody>
</table>
</fieldset>



</div>
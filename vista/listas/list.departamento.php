<?php


 $bd  = $conexion->query("SELECT departamento.id_departamento,departamento.departamento, estatus.descripcions FROM departamento , estatus where departamento.clave=estatus.clave;");

    ?>



<?php if(sizeof($bd)>0): ?>
  <table id="articulo" class="ui celled table" cellspacing="0" width="100%">
    <thead>
     <tr>
        <th>Departamento</th>
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
      <td> <?php echo $row['departamento']; ?></td>
      <td> <?php echo $row['descripcions']; ?></td>
      <td> 
       <a  data-toggle="modal" data-target=".categoria<?php echo $row['id_departamento']?>"> 
       <span > <i class="glyphicon glyphicon-pencil"> </i></span> </a>
        <?php //include 'formularios.mod/mod.departamento.php'; ?>
        </td>
      <td>  <a href="javascript:;" onclick="aviso('../controlador/controlador.departamento.php?ope=2&id=<?php echo $row['id_departamento']?>'); return false;"><span  > <i class="glyphicon glyphicon-trash"> </i> </span> </a></td>
      </tr>  
      <?php } ?>
      <?php endif; ?>
  </tbody>
</table>
</fieldset>



</div>

<?php


 $bd  = $conexion->query("SELECT usuario.nombre ,  usuario.tipo, usuario.id_usuario , usuario.ap, usuario.am,usuario.contrasenia,usuario.nick, estatus.descripcions , tipo_usuario.descripcion, departamento.id_departamento ,departamento.departamento FROM usuario,estatus,tipo_usuario,departamento where estatus.clave = usuario.clave and tipo_usuario.tipo= usuario.tipo and usuario.clave = 'A' and usuario.tipo = 'Usu'");

    ?>

<?php include 'formularios/form.usuario.php'; ?>

<?php if(sizeof($bd)>0): ?>
  <table id="usuarios" class="ui celled table" cellspacing="0" width="100%">
    <thead>
     <tr>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Nickname</th>
        <th>contraseña</th>
        <th>Status</th>
        <th>Departamento</th>
        <th>Tipo usuario</th>
        <th>Editar</th>
        <th>Eliminar</th>

     </tr>
    </thead>
 <tbody>
     <?php 
     while ($row = mysqli_fetch_assoc($bd)){ 
      ?>
     <tr>
      <td> <?php echo $row['nombre']; ?></td>
      <td> <?php echo $row['ap']; ?></td>
      <td> <?php echo $row['am']; ?></td>
      <td> <?php echo $row['nick']; ?></td>
      <td><?php echo $row['contrasenia']; ?></td>
      <td><?php echo $row['descripcion']; ?></td>
      <td><?php echo $row['departamento']; ?></td>

      <td><?php echo $row['descripcions']; ?></td>
      <td> 
       <a  data-toggle="modal" data-target=".modo<?php echo $row['id_usuario']?>"> 
       <span > <i class="glyphicon glyphicon-pencil"> </i></span> </a>
        <?php include 'formularios.mod/mod.usuario.php'; ?>
        </td>
      <td>  <a href="javascript:;" onclick="aviso('../controlador/controlador.usuario.php?ope=2&id=<?php echo $row['id_usuario']?>'); return false;"><span  > <i class="glyphicon glyphicon-trash"> </i> </span> </a></td>
      </tr>  
      <?php } ?>
      <?php endif; ?>
  </tbody>
</table>
</fieldset>
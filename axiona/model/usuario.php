<?php
 include('conexion.php');

  $Id = $_POST['Id_usuario'];
  $nombre = $_POST['nombre'];
  $apPat = $_POST['apPat'];
  $apMat = $_POST['apMat'];
  $nickname = $_POST['nickname'];
  $password = $_POST['password'];
  $departamento = $_POST['departamento'];
  $Id_tipoU = $_POST['Id_tipoU'];
  $status = $_POST['status'];

  switch ($proceso) {
  	case 'Registro':
  		mysql_query("INSERT INTO usuarios(nombre,apPat,apMa,nickname,password,departamento,Id_tipoU,status)
  			values('$nombre','$apPat'.'$apMat','$nickname','$password','$departamento',$Id_tipoU,$status)");
  		break;
  	
  	case 'Edicion':
  		mysql_query("UPDATE usuarios SET nombre = '$nombre',apPat = '$apPat',apMat = '$apMat',nickname ='$nickname',
  			departamento = '$departamento',Id_tipoU = '$Id_tipoU',status ='status' WHERE Id = '$Id_usuario'");
  		break;
  }

  $registro = mysql_query("SELECT nombre, apPat, apMat,nickname,password,departamento,descripcion,status from usuario INNER JOIN tipousuario on usuario.'Id_usuario' = tipousuario.'Id_tipoU'");

  echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Nombre</th>
                <th width="200">Apellido Paterno</th>
                <th width="200">Apellido Materno</th>
                <th width="150">Nickname</th>
				<th width="150">Password</th>
                <th width="150">Departamento</th>
                <th width="150">Usuario tipo</th>
                 <th width="50">Status</th>

            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nombre'].'</td>
				<td>'.$registro2['apPat'].'</td>
				<td>S/. '.$registro2['apMat'].'</td>
				<td>S/. '.$registro2['nickname'].'</td>
				<td>S/. '.$registro2['password'].'</td>
				<td>S/. '.$registro2['departamento'].'</td>
				<td>S/. '.$registro2['descripcion'].'</td>
				<td>S/. '.$registro2['status'].'</td>
				<td><a href="javascript:editarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
echo '</table>';
?>



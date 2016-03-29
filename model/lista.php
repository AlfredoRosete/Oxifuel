<?php
	//include("../model/conexion.php");
	include('../model/conexion.php');
	include("../model/usuario.php");
    
	
	
	$tmp=new Usuario(NULL);//se hace un objeto de la clase
	$paginas='5';//numero de paginas que se mostraran 
	$actual = (!isset ($_GET['pg']))?1:$_GET['pg'];
	$objetos=$tmp->listartodos("select * from usuario where status='A'",0,0);//seleccionamos lo que se mostrara
	$total = count($objetos);
	if ($actual == 1) {
		$desde = "0";
	}
	elseif ($actual != 1) {
		$desde = $actual * $paginas - $paginas;
	}
	$tp = ($total / $paginas);
	if (strstr($tp,'.')){ 
		$tp = explode (".",$tp);
		$tp = ($tp[0]+1);
	}
	
	//echo "<a href='../paginas/menu.php'><img src='../imagenes/home.png' align='left'></a>";
	//echo "<a href='borrado.php'><h1>Mostrar Borrados</h1></a>"; //liga de regreso al menu
	$objetos=$tmp->listartodos("select * from usuario where status='A'",$desde,$paginas);//seleccionamos lo que se mostrara
	echo " <div class='table-responsive'> <div id='contenido'> <center><table class='table'>
		<tr>
		<th>Nombre</th>
		<th>Apellido
		Paterno</th>
		<th>Apellido
		Materno</th>
		<th>Nombre de usuario</th>
		<th>Contraseña</th>
		<th>Departamento</th>
		<th>Usuario tipo</th>
		<th>Estatus</th>
		<th>Eliminar</th>
		<th>Modificar</th></tr>";
		//var_dump($objetos);
		foreach($objetos as $elemento)
		{
		
   		echo "<tr>";      	
      		echo "<td>" . $elemento->getId_usuario()."</td>";
			echo "<td>" . $elemento->getnombre()."</td>";
        	echo "<td>" . $elemento->getapPat()."</td>";
			echo "<td>" . $elemento->getapMat()."</td>";
			echo "<td>"	. $elemento->getnickname()."</td>";
			echo "<td>" . $elemento->getpassword()."</td>";
			echo "<td>"	. $elemento->getId_depto()."</td>";
			echo "<td>"	. $elemento->getId_tipoU()."</td>";
			echo "<td>" . $elemento->getstatus()."</td>";

		
		echo "<td align=\"center\"><img alt=\"Eliminar\" src=\"../imagenes/eliminar.png\" onclick=\"confirmarborrado('../controladores/controladorProfesor.php?clave=".$elemento->getId_profesor()."&ope=2','yesi','GET')\"/></td>";
		
		echo "<td align=\"center\"><img alt=\"Modificar\" src=\"../imagenes/editar.png\" onClick=\"Enviar('concepto2.php?clave=".$elemento->getId_profesor()."','content','GET')\"/></td>";		
      		echo "</tr>";
   		}
	echo "</table> </center></div> </div>";
	
	$pag = ($tp == 1) ? 'PAGINA' : 'PAGINAS';
	$reg = ($total == 1) ? 'REGISTRO' : 'REGISTRO';
	?>
	ENCONTRADOS <b><?=$total?></b> <?=$reg?> EN <b><?=$tp?></b> <?=$pag?><br>
	<?php
	$anterior = true;
	$siguiente = true;
	if (($actual == 1) AND ($actual == $tp)) {
	$anterior = false;
	$siguiente = false;
	}
	elseif ($actual == $tp) {
	$anterior = true;
	$siguiente = false;
	}
	elseif ($actual == 1) {
	$anterior = false;
	$siguiente = true;
	}
	if ($anterior) {
	 
	 echo " <a href='listarProfesor.php?pg=".($actual-1)."'><div> < PÁGINA ANTERIOR </div></a>";
	//echo "<a onClick=\"Enviar('istar/listarProfesor.php?pg=".($actual-1)."','header-section','GET')\">&lt; PÁGINA ANTERIOR</a> | ";
	//echo "<a onClick=\"Enviar('../Listar/listarProfesor.php?pg=".($actual-1)."','contenido','GET')\">&lt; PÁGINA ANTERIOR</a> | ";
	}
	else {
	echo "|";
	}
	for ($i = 1; $i <= $tp;$i++) {
	if ($i == $actual) {
	echo " <b>".$i."</b> | ";
	}
	else {
	//echo "<a onClick=\"Enviar('listarProfesor.php?pg=".$i."','header-section','GET')\"> ".$i."</a> |";
	//echo "<a onClick=\"Enviar('../Listar/listarProfesor.php?pg=".$i."','contenido','GET')\"> ".$i."</a> |";
	}
	}
	if ($siguiente) {
	echo " <a href='listarProfesor.php?pg=".($actual+1)."'><div>PÁGINA SIGUIENTE &gt;</div></a>";
	//echo " <a onClick=\"Enviar('Listar/listarProfesor.php?pg=".($actual+1)."','contenido','GET')\"> PÁGINA SIGUIENTE &gt;</a>";
	//echo " <a onClick=\"Enviar('listarProfesor.php?pg=".($actual+1)."','header-section','GET')\"> PÁGINA SIGUIENTE &gt;</a>";
	}
	
	
	?> 
	<div id="yesi">

	
	</div> 
    

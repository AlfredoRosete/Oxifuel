<?php


	include("../model/conexion.php");
	$nom=addslashes($_POST["nickname"]);
	$passw=addslashes($_POST["password"]);
	$conex=new conexion;
	$conex->conectar();
	
	
	$consulta="select * from usuario where nickname='Reyes' and password= 12345";
	  
	
	$resu=$conex->consulta($consulta);
	if($conex->num_rows($resu)<1)
	{

	}
	else
	{
		$id=$conex->fetch_array($resu);
		if($id['Id_tipoU']== 1)
		{		
			session_start();
		$_SESSION['Id_tipoU'] = $id['Id_usuario'];
		$_SESSION['administrador'] = $id['nombre'];
		echo "<script language=’JavaScript’>alert(‘Eres un Administrador ’);</script>"; 
		$redir2="../calendario/vistaAdmin.php";
		header("Location:" . $redir2); 
		}
		if ($id['Id_tipoU']==2)
		{
			session_start();
		$_SESSION['Id_tipoU'] = $id['Id_usuario'];
		$_SESSION['cliente'] = $id['nombre'];
		echo "<script language=’JavaScript’>alert(‘Eres un Usuario ’);</script>"; 
		$redir3="../calendario/vistaUsuario.php";
		header("Location:".$redir3); 

		}
		else 
		{		
		echo "<script language=’JavaScript’>alert(‘Error los datos son incorrectos’);</script>"; 
echo $id['Id_tipoU'];
		}
		
		
		
	}
?>
	

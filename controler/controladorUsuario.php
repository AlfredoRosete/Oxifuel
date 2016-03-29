<?php
include_once("../model/Usuario.php");
$ope=$_REQUEST['ope'];
	if($ope==null){
		$ope=$_GET['ope'];
		if($ope==null){
			exit;
		}
	}



   switch ($ope)
	{
		case 1:		
		$objeto=new Usuario(array('0',$_POST["nombre"],$_POST["apPat"],$_POST["apMat"],$_POST["nickname"],$_POST["password"],$_POST["Id_depto"],$_POST["Id_tipoU"],$_POST["status"]));
			if($objeto->guardar())
			{
			echo "<script language='javascript'> alert('se guardo exitosamente'); location.href='../view/vistaUsuario.php'; </script>";
			
			}
		break;
		case 2:		
		$objeto=new Usuario(array($_GET["clave"]));
			if($objeto->eliminar())
			{
			echo "si";
			echo "<script language='javascript'> alert('se elimino exitosamente'); location.href='../formulario/formCarreras.php'; </script>";
			}
		
	}

?>
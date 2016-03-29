<?php
include_once("../model/categoria.php");
$ope=$_REQUEST['ope'];
	//$ope=$_POST['ope'];
	if($ope==null){
		$ope=$_GET['ope'];
		if($ope==null){
			exit;
		}
	}

	

   switch ($ope)
	{
		case 1:		
		$objeto=new categoria(array($_POST["categoria"],$_POST["status"]));
			if($objeto->guardar())
			{
			//echo "si";
			echo "<script language='javascript'> alert('se guardo exitosamente'); location.href='../view/vistaCategoria.php'; </script>";
			}
		break;
		case 2:		
		$objeto=new categoria($_GET["clave"]));
			if($objeto->eliminar())
			{
			//echo "si";
			echo "<script language='javascript'> alert('se elimino exitosamente'); location.href='../view/vistaCategoria.php'; </script>";
			}
		
	}

?>
<?php
include_once("../model/articulo.php");
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
		$objeto=new articulo(array($_POST["articulo"],$_POST["precio"],$_POST["Totalpiezas"],$_POST["Id_categoria"],$_POST["status"]));
			if($objeto->guardar())
			{
			//echo "si";
			echo "<script language='javascript'> alert('se guardo exitosamente'); location.href='../view/vistaArticulo.php'; </script>";
			}
		break;
		case 2:		
		$objeto=new articulo(array($_GET["clave"]));
			if($objeto->eliminar())
			{
			//echo "si";
			echo "<script language='javascript'> alert('se elimino exitosamente'); location.href='../view/vistaArticulo.php'; </script>";
			}
		
	}

?>
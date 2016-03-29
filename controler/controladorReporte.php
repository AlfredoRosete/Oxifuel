<?php
include_once("../model/reporte.php");
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
		$objeto=new reporte(array($_POST["Id_articulo"],$_POST["Id_categoria"],$_POST["Id_usuario"],$_POST["piezas"],$_POST["total"]));
			if($objeto->guardar())
			{
			//echo "si";
			echo "<script language='javascript'> alert('se guardo exitosamente'); location.href='../view/vistaReporte.php'; </script>";
			}
		break;
		case 2:		
		$objeto=new reporte(array($_GET["clave"]));
			if($objeto->eliminar())
			{
			//echo "si";
			echo "<script language='javascript'> alert('se elimino exitosamente'); location.href='../view/vistaReporte.php'; </script>";
			}
		
	}

?>
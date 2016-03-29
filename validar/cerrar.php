<?php
	
	session_start();
	
	$_SESSION["administrador"];
	$_SESSION["cliente"];
	unset($_SESSION["nickname"]);
	unset($_SESSION["password"]);
	session_destroy();
	header("Location:../calendario/vistaUsuario.php");
	exit;
	?>

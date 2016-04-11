<?php
session_start();
unset($_SESSION['puerta']);
unset( $_SESSION['Id_admin']);
unset($_SESSION['admin']);
session_destroy();
header("Location:../index.php");
?>
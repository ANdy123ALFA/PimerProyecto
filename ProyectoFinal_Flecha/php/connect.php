<?php
	$server = "LocalHost";
	$user = "root";
	$password = "";
	$db = "pagina";
	$conexion = new mysqli($server, $user, $password, $db);
	$id =0;
	
	mysqli_set_charset($conexion, "utf8");	
?>
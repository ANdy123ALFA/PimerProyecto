<?php
	include("connect.php");
	$user = $_POST['user'];
	$password = $_POST['password'];
	if ($query = $conexion->prepare("SELECT usuario, contrasena FROM usuarios WHERE usuario = ?")) {

        $query->bind_param("s", $user);
        $query->execute();
        $query->bind_result($usuario, $contrasena);
        $query->fetch();
        $query->close();

		if ($password == $contrasena){
			session_start();
			$_SESSION['usuario'] = $user;
			header("Location: ../php/administrar.php");
		} else {
			echo "Usuario o contraseña incorrecta.";
		};
	};
?>
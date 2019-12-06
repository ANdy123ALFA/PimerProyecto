<?php
	include("connect.php");
	$consulta="SELECT* FROM relojes ";
	$resultado = $conexion->query($consulta);
	while($ResultadoArray = mysqli_fetch_assoc($resultado)){
		$Array[] = $ResultadoArray; 
	};
	$Json = json_encode($Array);
	echo $Json;
?>

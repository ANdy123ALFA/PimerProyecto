<?php
	
	include("connect.php");
	
	$consulta="SELECT marca, mecanico,material,cronometro,descripcion,precio, imagen FROM relojes ";
	$resultado = $conexion->query($consulta);
	
	
	while($fila = $resultado->fetch_assoc()) {
		
		echo "<div class='contenedor_articulo'>
				<div class = 'contenedor_imagen'><img class ='imagen' src='" . $fila['imagen'] . "' width=450 height=450></div>
				<div class = 'descripcion_articulo'><p>Marca: ". $fila['marca'] ."<br>Material: ". $fila['material'] ." <br>Mecanico: ". (($fila['mecanico']==true) ? "Si" : "No") ." <br> Cronometro:". (($fila['cronometro'] ==true) ? "Si" : "No") ." <br> Precio: $". $fila['precio'] ." <br>Descripcion: ". $fila['descripcion'] ." </p>
				</div>
			</div>";
	};
?>

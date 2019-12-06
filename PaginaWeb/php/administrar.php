<!DOCTYPE html>
<html>
<head>
	<title>Relojes-Administrar</title>
	<meta charset=“UTF-8”>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<main>
	<header>
		<div class='contenedor_header'>
			<img class='imagen_relojito'src='../imagenes_relojes/img_header.png' height= 53px width = 100px > <p class='titulo_header'>RELOJES DE BOLSILLO</p><div class='contenedor_boton'><button class='boton' href='../principal/index.php'>Volver</button></div>
		</div>
	</header>
	<section>
		<div align='center'>
			<table class="tabla_administrar" cellpadding='0' cellspacing='0' bgcolor='#F6F6F6' bordercolor='#FFFFFF' border=0>
				<tr>
				<td width='200' style='font-weight: bold'>MARCA</td>
				<td width='250' style='font-weight: bold'>MECANICO</td>
				<td width='200' style='font-weight: bold'>MATERIAL</td>
				<td width='200' style='font-weight: bold'>CRONOMETRO</td>
				<td width='250' style='font-weight: bold'>DESCRIPCIÓN</td>
				<td width='200' style='font-weight: bold'>PRECIO</td>
				<td width='200' style='font-weight: bold'>URL IMG</td>
				<td width='150' style='font-weight: bold'>------</td>
				<td width='150' style='font-weight: bold'>------</td>
				</tr>
				<?php

				include("connect.php");

				$consulta="SELECT idReloj, marca, mecanico,material,cronometro,descripcion,precio, imagen FROM relojes ";
				$resultado = $conexion->query($consulta);
			
				
				while($registro = $resultado->fetch_assoc()) {
				echo "
				<tr>
				<td width='200'>".$registro['marca']."</td>
				<td width='250'>".(($registro['mecanico']==true) ? "True" : "False")."</td>
				<td width='200'>".$registro['material']."</td>
				<td width='200'>".(($registro['cronometro']==true) ? "True" : "False")."</td>
				<td width='250'>".$registro['descripcion']."</td>
				<td width='200'> $".$registro['precio']."</td>
				<td width='200'>".$registro['imagen']."</td>
				<td width='150'><button class='boton_actualizar'  onclick='location.href=\"administrar.php?id=".$registro['idReloj']."\";'>Actualizar</button></td>
				<td width='150'><button class='boton_borrar' onclick='location.href=\"crud.php?operacion=eliminar&id=".$registro['idReloj']."\";'>Borrar</button></td>
				</tr>
				";
				};
				 
				
				
				?>
			</table><br>
			
			<h2>AGREGAR</h2>
			<form class='carga' action="crud.php?operacion=agregar"  method = "POST" >
			  <div >
				<p>Marca:</p>
				<input class='txtbox'type="text" name="r_marca">
				<p>Material:</p>
				<input class='txtbox'type="text" name="r_material">
				<p>Mecanico:</p>
				<input class='checkbox'type="checkbox" name="r_mecanico">
				<p>Cronometro:</p>
				<input class='checkbox'type="checkbox" name="r_cronometro">
				<p>Descripcion:</p>
				<input class='txtbox'type="text" name="r_descripcion">
				<p>Precio:</p>
				<input class='txtbox'type="text" name="r_precio">
				<p>Imagen:</p>
				<input class='txtbox'type="text" name="r_img">
				</div>
			  <div>
				<br><input class="cargar" type='submit' value='CARGAR'>
			  <div>
			</form>

<?php
if(isset($_GET['id']))
{

	$consulta="SELECT * FROM relojes WHERE idReloj = ".$_GET['id'];
	$resultado = $conexion->query($consulta);
	
	
	while($registro = $resultado->fetch_assoc()) {

?>

		<h2>EDITAR</h2>
		<form class='carga' action="crud.php?operacion=editar"  method = "POST" >
		<input type="text" hidden value="<?php echo $registro['idReloj']; ?>" name="id">
			<div >
			<p>Marca:</p>
			<input class='txtbox'type="text" name="r_marca" value="<?php echo $registro['marca']; ?>">
			<p>Material:</p>
			<input class='txtbox'type="text" name="r_material" value="<?php echo $registro['material']; ?>">
			<p>Mecanico:</p>
			<input class='checkbox'type="checkbox" name="r_mecanico" value="<?php echo $registro['mecanico']; ?>">
			<p>Cronometro:</p>
			<input class='checkbox'type="checkbox" name="r_cronometro" value="<?php echo $registro['cronometro']; ?>">
			<p>Descripcion:</p>
			<input class='txtbox'type="text" name="r_descripcion" value="<?php echo $registro['descripcion']; ?>">
			<p>Precio:</p>
			<input class='txtbox'type="text" name="r_precio" value="<?php echo $registro['precio']; ?>">
			<p>Imagen:</p>
			<input class='txtbox'type="text" name="r_img" value="<?php echo $registro['imagen']; ?>">
			</div>
			<div>
			<br><input class="cargar" type='submit' value='CARGAR'>
			<div>
		</form>

<?php

	}

}
?>
	
			<br>
		</div>
	</section>
</main>
	<footer>Hecho por Andrea Flecha. Todos los derechos reservados.
	</footer>
</body>
</html>	

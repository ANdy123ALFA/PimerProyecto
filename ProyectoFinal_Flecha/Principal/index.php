<!DOCTYPE html>
<html>
<head>
	<title>Relojes de Bolsillo</title>
	<meta charset=“UTF-8”>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<main>
	<header>
		<div class='contenedor_header'>
			<img class='imagen_relojito'src='../imagenes_relojes/img_header.png' height= 53px width = 100px > 
			<p class='titulo_header'>RELOJES DE BOLSILLO</p>
			<div class='contenedor_boton'>
			<button class='boton' onclick="location.href='../php/login.php';">Administrar</button>
			</div>
		</div>
	</header>
	<section>
		<section  class = "relojes" >
			<center>
				<div class = 'contenedor'>
					<?php include('../php/cargar_relojes.php');?> 
				</div>
			</center>
			<br><br><br>
		</section>
	</section>
</main>
	<footer>Hecho por Andrea Flecha. Todos los derechos reservados.
	</footer>
</body>
</html>	


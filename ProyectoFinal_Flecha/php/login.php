<!DOCTYPE html>
<html>
<head>
	<title>Relojes-Login</title>
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
				<button class='boton' onclick="location.href='api.php';">API</button>
			</div>
		</div>
	</header>
	<section>
		<div class='contenedor_formulario'>
			<form action = "checkLogin.php"  method = "POST" >
			  <div >
				<p>USUARIO:</p>
				<input class='text_boxs'type="text" name="user">
				<p>CONTRASEÑA:</p>
				<input class='text_boxs'type="password" name="password">
				</div>
			  <div>
				<br><input class="submit" type='submit' value='INGRESAR'>
			  <div>
			</form>
		</div>
	</section>
</main>
	<footer>Hecho por Andrea Flecha. Todos los derechos reservados.
	</footer>
</body>
</html>	


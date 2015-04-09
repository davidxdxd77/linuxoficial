<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/estilos.css">
	<link href="img/logo.png" type="image/x-icon" rel="shortcut icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>Streaming</title>
	<script src="js/prefixfree.js"></script>
</head>
<body>
	<header>
		<figure id="logo">
			<img src="img/logo-linux.png" alt="">
		</figure>
	</header>	
	<nav>
		
		<ul>
			<li><a href="index.php" >Inicio</a></li>
			<li><a href="que-es-linux.php">¿Qué es linux?</a></li>
			<li><a href="tutoriales.php">Tutoriales</a></li>
			<li><a href="streaming.php" id="activo">Streaming</a></li>
			<li><a href="contacto.php">Contacto</a></li>
		</ul>
		
	</nav>
	<div id="streaming-contenedor">
		<section id="chat">
			<aside>
				<form action="comentarios.php" id="chat-campo" method="post">
					<input type="text" placeholder="tu nombre" id="textbox" name="nombre">
					<br>
					<input type="text" placeholder="escribe tu comentario..." id="textbox" name="comentario"> 
					<input type="submit" class="btn" value="comentar">
				</form>
			</aside>
		</section>
		<section id="streaming">
			<iframe src="https://www.youtube.com/embed/qdpwgcDCLyg?modestbranding=1;autohide=1&amp;showinfo=0&amp;controls=0;"; frameborder="0" width="800px" height="400px"></iframe>
			<h2 id="intro">video de prueba...</h2>
		</section>
	</div>
	<footer>
		<p>Web creada por la comunidad linux chile</p>
		<p>Copyright © Todos los Derechos Reservados, 2015</p>
		<p>Linux Chile 2015</p>
	</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/cssResponsive.css">
	<!-Las fuentes de google->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<script src="js/jquery.js"></script>
	<link href="img/logo.png" type="image/x-icon" rel="shortcut icon">
	<title>Linux Chile</title>
</head>
<body>
	<header>
		<figure id="logo">
			<img src="img/logo-linux.png" alt="">
		</figure>
	</header>	
	<nav>
		<ul>
			<li><a href="index.php" id="activo">Inicio</a></li>
			<li><a href="que-es-linux.php">¿Qué es linux?</a></li>
			<li><a href="tutoriales.php">Tutoriales</a></li>
			<li><a href="streaming.php">Streaming</a></li>
			<li><a href="contacto.php">Contacto</a></li>
</ul>
	</nav>
	<!--h2 id="bienvenidos">Bienvenidos</h2-->
	<section id="home">
	<img src="img/note.jpg">
	<div id="slider">
			<div><img src="slider/1.jpg"></div>
			<div><img src="slider/2.jpg"></div>
			<div><img src="slider/3.jpg"></div>
			<div><img src="slider/4.jpg"></div>
			<div><img src="slider/5.jpg"></div>
			<div><img src="slider/6.jpg"></div>
			<div><img src="slider/7.jpg"></div>
			<div><img src="slider/8.jpg"></div>
			<div><img src="slider/9.jpg"></div>
		</div>
	</div>
	</section>
	<h2 id="text-noticias">Lo ultimo en linux</h2>
	<section id="noticias">
				<article class="cont-noticias">
			<figure>
				<a href="https://manjaro.github.io/Manjaro-KDE-0.9.0-pre5-edition-released/"><img src="noticias/img/manjaro.jpg"></a>
			</figure>
			<p>llega la beta 5 de manjaro 0.9 y se dice que habrá muchos cambios</p>
			<a href="https://manjaro.github.io/Manjaro-KDE-0.9.0-pre5-edition-released/"><p><strong>Ver mas...</strong></p></a>
		</article>
		<article class="cont-noticias">
			<figure>
				<a href="https://wiki.ubuntu.com/VividVervet/ReleaseNotes"><img src="noticias/img/ubuntu.jpg"></a>
			</figure>
			<p>Ya esta disponible el nuevo ubuntu 15.04, pero a un no es 100% estable</p>
			<a href="https://wiki.ubuntu.com/VividVervet/ReleaseNotes"><p><strong>Ver mas...</strong></p></a>
		</article>
				<article class="cont-noticias">
			<figure>
				<a href="http://crunchbang.org/"><img src="noticias/img/crunchbang.jpg"></a>
			</figure>
			<p>El proyecto crunch bang llegó a su fín... el creador dice que ya no segira en el proyecto</p>
			<a href="http://crunchbang.org/"><p><strong>Ver mas...</strong></p></a>
		</article>
	</section>
	<footer>
		<p>Web creada por la comunidad linux chile</p>
		<p>Copyright © Todos los Derechos Reservados, 2015</p>
		<p>Linux Chile 2015</p>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/slider.js"></script>
    <script src="js/prefixfree.js"></script>
</body>
</html>
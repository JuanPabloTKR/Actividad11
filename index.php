<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">	
	<meta name="description" content="HTML,CSS,JS" />
    <meta name="autor" content="pabloTKR"/>
    <meta name="Inicio" content="Desarrollo web" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Inicio</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";	
	?>
	<section class="contenido">
			<h3>Tutorial </h3>
			<article class="serv1">
				<figure>
					<img src="imagenes/TimBerners-Lee.jpg" alt="">
				</figure>
				<center><h4>HTML</h4></center>				
				<p>
					Creado por El Britanico TimBernesLee es un lenguaje de marcado
				</p>
				<figure>
					<img src="imagenes/html.png" alt="">
				</figure>
			</article>

			<article class="serv1">
				<figure>
					<img src="imagenes/TimBerners-Lee.jpg" alt="">
				</figure>
				<center><h4>CSS</h4></center>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, voluptate. 
				</p>
				<figure>
					<img src="imagenes/scc.jpeg" alt="">
				</figure>
			</article>

			<article class="serv1">
				<figure>
					<img src="imagenes/TimBerners-Lee.jpg" alt="">
				</figure>
				<center><h4>Java Script</h4></center>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, voluptate. 
				</p>
				<figure>
					<img src="imagenes/Js.jpg" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>
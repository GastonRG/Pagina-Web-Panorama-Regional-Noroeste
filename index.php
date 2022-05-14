<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Panorama Regional</title>
	<link rel="stylesheet" href="cambioocho.css">
    <link rel="shortcut icon" href="http://panoramaregionalvds.com/logouno.ico">

</head>
<body class="grid-container">
	<header class="header">
		<img src="http://panoramaregionalvds.com/logo.png" class="logo">
	</header>
	<nav class="navbar">
			<ul>
				<li><a href="http://panoramaregionalvds.com/locales.php">Locales</a></li>
				<li><a href="http://panoramaregionalvds.com/regionales.php">Regionales</a></li>
				<li><a href="http://panoramaregionalvds.com/provinciales.php">Provinciales</a></li>
				<li><a href="http://panoramaregionalvds.com/nacionales.php">Nacionales</a></li>
				<li><a href="http://panoramaregionalvds.com/internacionales.php">Internacionales</a></li>
			</ul>
	</nav>

	<aside class="sidebar">
		<div>
			<img src="PUBLIUNO.jpg" class="gifdos">
		</div>
		<div>
			<img src="PUBLIDOS.jpg" class="gifdos">
		</div>
		<div>
			<img src="PUBLIUNO.jpg" class="gifdos">
		</div>
		<div>
			<img src="PUBLIDOS.jpg" class="gifdos">
		</div>
			<div>
			<img src="PUBLIUNO.jpg" class="gifdos">
		</div>
		<div>
			<img src="PUBLIDOS.jpg" class="gifdos">
		</div>
	</aside>


	<article class="main">
		<div class="contienetitulo">
			<p class="titulouno">Noticias Generales</p>	
		</div>
		<div class="grid">
			<div class="primerados">
			<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE importancia >= 7 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
			<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE importancia >= 7 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
			<div class="primerados">
					<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE importancia >= 7 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
			<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE importancia >= 7 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
		</div>
		<div class="contienetitulo">
			<p class="titulouno">Noticias Locales</p>	
		</div>
		<div class="grid">
		<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'locales' and idnota  % 2 = 0 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
			<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'locales' and idnota  % 2 = 1 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
		</div>
		<div class="contienetitulo">
			<p class="titulouno">Noticias Regionales</p>	
		</div>
		<div class="grid">
		<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'regionales' and idnota  % 2 = 0 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
			<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'regionales' and idnota  % 2 = 1 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
		</div>
		<div class="contienetitulo">
			<p class="titulouno">Noticias Provinciales</p>	
		</div>
		<div class="grid">
		<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'provinciales' and idnota  % 2 = 0 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
			<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'provinciales' and idnota  % 2 = 1 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
		</div>
		<div class="contienetitulo">
			<p class="titulouno">Noticias Nacionales</p>
		</div>
		<div class="grid">
		<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'nacionales' and idnota  % 2 = 0 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
			<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'nacionales' and idnota  % 2 = 1 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				<?php
				}
				?>
			</div>
		</div>

		<div class="contienetitulo">
		
			<p class="titulouno">Noticias Internacionales</p>	

		</div>
		

		<div class="grid">
		<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'internacionales' and idnota  % 2 = 0 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				
				<?php
				}
				?>
			</div>
			
			<div class="primerados">
				<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'internacionales' and idnota  % 2 = 1 ORDER BY RAND() LIMIT 1";
				$result = mysqli_query($Conexion,$query);
				while ($mostrar = mysqli_fetch_array($result)) {
				?>
				 
				<p  align="center"><img class="fondodos" src="http://panoramaregionalvds.com/imagenes/<?php echo $mostrar['imagen']; ?>"></p>       
				<a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $mostrar['idnota']; ?>"><p class="segundados"> <?php echo $mostrar['titulo']; ?></p></a>
				<p class="tercerados"> <?php echo $mostrar['subtitulo']; ?></p>
				
				<?php
				}
				?>
			</div>
		</div>
	</article>
	
	<footer class="footer">
			
			<div class="fodiez">
				<a class="founo" href="http://panoramaregionalvds.com/locales.php">Locales</a>
				<a class="founo" href="http://panoramaregionalvds.com/regionales.php">Regionales</a>
				<a class="founo" href="http://panoramaregionalvds.com/provinciales.php">Provinciales</a>
				<a class="founo" href="http://panoramaregionalvds.com/nacionales.php">Nacionales</a>
				<a class="founo" href="http://panoramaregionalvds.com/internacionales.php">Internacionales</a>
			</div>
		<div >
			<p class="final"> Neo Centro Tecnologico - © 2022 Copyright Panorama Digital VDS. Todos los derechos reservados. </p>
		</div>
	</footer>
</body>
</html>
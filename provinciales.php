<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Panorama Regional VDS</title>
	<link rel="stylesheet" href="estilotres.css">
	<link rel="shortcut icon" href="http://panoramaregionalvds.com/logo.ico">
</head>
<body class="grid-container">
	<header class="header">
		<img src="logo.png" class="logo">
	</header>
	<nav class="navbar">
			<ul>
				<li><a href="http://panoramaregionalvds.com/">Portada</a></li>
				<li><a href="http://panoramaregionalvds.com/locales.php">Locales</a></li>
				<li><a href="http://panoramaregionalvds.com/regionales.php">Regionales</a></li>
				<li><a href="http://panoramaregionalvds.com/nacionales.php">Nacionales</a></li>
				<li><a href="http://panoramaregionalvds.com/internacionales.php">Internacionales</a></li>
			</ul>
	</nav>
	<h1 class="primera">Noticias Provinciales</h1>
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
		<center>
		<table  width="80%" border="0"  >
			<tbody>
			<?php
				include("conexion1.php");
				$query = "SELECT * FROM notauno WHERE lugar = 'provinciales' ORDER BY idnota DESC";
				$result = $Conexion->query($query);
				while ($row = $result->fetch_assoc()) {
			?>

			<tr class="fila">
			<td class="estilo1" align="center"><img class="imagentrans" src="http://panoramaregionalvds.com/imagenes/<?php echo $row['imagen']; ?>"></td>
			<td  class="estilo2" colspan="3" align="left">
			<table  >
			<tbody  >
			<tr><a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $row['idnota']; ?>"><p class="ttitulo"> <?php echo $row['titulo']; ?></p></a>
				</tr>
			<br>
			<br>
			<tr><a href="http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $row['idnota']; ?>"><p class="tsubtitulo"><?php echo $row['subtitulo']; ?></p></a></tr>
			<br>
			<br>
			<tr><p class="tfecha"><?php echo $row['fecha']; ?></p></tr>
			</tbody>
			</table>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>

	</center>
	</article>
	<footer class="footer">
			
		<div class="fodiez">
				<a class="founo" href="http://panoramaregionalvds.com/index.php">Portada</a>
				<a class="founo" href="http://panoramaregionalvds.com/locales.php">Locales</a>
				<a class="founo" href="http://panoramaregionalvds.com/regionales.php">Regionales</a>
				<a class="founo" href="http://panoramaregionalvds.com/nacionales.php">Nacionales</a>
				<a class="founo" href="http://panoramaregionalvds.com/internacionales.php">Internacionales</a>
			</div>
		<div >
			<p class="final"> Neo Centro Tecnologico - © 2022 Copyright Panorama Regional VDS. Todos los derechos reservados. </p>
		</div>
	</footer>
	
</body>
</html>
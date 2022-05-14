<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Panorama Regional VDS</title>
	<link rel="stylesheet" href="estilorecibirtrece.css">
	<link rel="shortcut icon" href="http://panoramaregionalvds.com/logo.ico">
</head>
<body class="grid-container">
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v9.0" nonce="HDnDXNRZ"></script>
	<header class="header">
		<img src="logo.png" class="logo">
	</header>
	<nav class="navbar">
			<ul>
				<li><a href="http://panoramaregionalvds.com/index.php">Portada</a></li>
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
			<?php
				include("conexion1.php");
				$v1=$_GET['var1'];
				$query = "SELECT * FROM notauno WHERE idnota = '$v1'";
				$result = $Conexion->query($query);
				while ($row = $result->fetch_assoc()) {
			?>
			<img class="imagentrans" src="http://panoramaregionalvds.com/imagenes/<?php echo $row['imagen']; ?>">
		<p class="ttitulo"> <?php echo $row['titulo']; ?></p>	
			<br>
			<br>
		<p class="tsubtitulo"><?php echo $row['subtitulo']; ?></p>
			<br>
			<br>
			<p class="tfecha">Fecha: <?php echo $row['fecha']; ?></p>
			<br>
			<br>
			<p class="tnota"><?php echo $row['nota']; ?></p>
			<?php
			function encodeURIComponent($str) {
			$revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
			return strtr(rawurlencode($str), $revert);
			}
			$mensaje = "En Panorama Regional VDS, disfruta de las ultimas noticias. https://panoramaregionalvds.com";
			$enlace = "https://api.whatsapp.com/send?text=" . encodeURIComponent($mensaje);
			?>
			<div class="contieneboton">
				<div class="botonwhatsapp">
					<a href="<?php echo $enlace ?>" class="whatsappboton">Compartir Whatsapp</a>
				</div>
				<div class="botonface">
					<div class = "fb-share-button" data-href = "http://panoramaregionalvds.com/policialesllegada.php?var1=<?php echo $row['idnota']; ?>" data-size = "large" > <a target = "_blank" href = "https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpanoramaregional.com%2Fpolicialesllegada.php%3Fvar1%3D<?php echo $row['idnota']; ?>&t=<?php echo $row['titulo'];?>&p[images][0]=http://panoramaregionalvds.com/imagenes/<?php echo $row['imagen'];?>&src=sdkpreparse" class="facebookcolor">Compartir Facebook</a> </div>       
				</div>
		    </div>
		    	<?php
				}
			?>
	</article>
	<footer class="footer">
			<div class="fodiez">
				<a class="founo" href="http://panoramaregionalvds.com/index.php">Portada</a>
				<a class="founo" href="http://panoramaregionalvds.com/locales.php">Locales</a>
				<a class="founo" href="http://panoramaregionalvds.com/regionales.php">Regionales</a>
				<a class="founo" href="http://panoramaregionalvds.com/provinciales.php">Provinciales</a>
				<a class="founo" href="http://panoramaregionalvds.com/nacionales.php">Nacionales</a>
				<a class="founo" href="http://panoramaregionalvds.com/internacionales.php">Internacionales</a>
			</div>
		<div >
			<p class="final"> Neo Centro Tecnologico - © 2020 Copyright Panorama Regional VDS. Todos los derechos reservados. </p>
		</div>
	</footer>
</body>
</html>





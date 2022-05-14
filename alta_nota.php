<?php 
	
	$conexion= mysqli_connect("localhost","xxx","yyy","zzz")or die("Sin Coneccion");
	$titulo = $_POST["titulo"]; 
	$subtitulo = $_POST["subtitulo"];
	$nota = $_POST["nota"];
	$fecha = $_POST["fecha"];
	$seccion = $_POST["seccion"];
	$lugar = $_POST["lugar"];
	$importancia = $_POST["importancia"];
	$imagen = $_POST["imagen"];

	$sql = "INSERT INTO notauno(titulo,subtitulo,nota,fecha,seccion,lugar,importancia,imagen) VALUES('$titulo','$subtitulo','$nota','$fecha','$seccion','$lugar','$importancia','$imagen')";
	$result= mysqli_query($conexion,$sql); 

	if($result){
		echo "datos insertados"; 
	}else{
		echo "no pudo insertar";
	}
?>
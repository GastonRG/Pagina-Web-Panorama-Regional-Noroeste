<?php
$conexion= mysqli_connect("localhost","xxx","yyy","zzz")or die("Sin Coneccion");
	
	$idnota = $_POST["idnota"];
	$titulo = $_POST["titulo"]; 
	$subtitulo = $_POST["subtitulo"];
	$nota = $_POST["nota"];
	$fecha = $_POST["fecha"];
	$imagen = $_POST["imagen"];
	

	$sql="UPDATE notauno SET titulo= '$titulo' , subtitulo='$subtitulo', nota='$nota', fecha='$fecha', imagen='$imagen' WHERE idnota='$idnota'";
	$result= mysqli_query($conexion,$sql); 

	if($result){
		echo "datos actualizados correctamente"; 
	}else{
		echo "no se pudo actualizar";
	}
	mysqli_close($conexion);
?>
<?php
$conn = mysqli_connect("localhost","xxx","yyy","zzz");
$titulo = $_POST["titulo"]; 
$subtitulo = $_POST["subtitulo"];
$nota = $_POST["nota"]; 
$fecha = $_POST["fecha"]; 
$seccion = $_POST["seccion"]; 
$lugar = $_POST["lugar"]; 
$importancia = $_POST["importancia"]; 
$imagen = $_POST["imagen"]; 


$query =  "INSERT INTO nota (titulo, subtitulo, nota, fecha, seccion, lugar, importancia, imagen) VALUES('$titulo','$subtitulo','$nota','$fecha','$seccion','$lugar','$importancia', '$imagen')"; 

$result=mysqli_query($conn,$query) or die(mysql_error()); 

if($result){
	echo "datos insertados";
}else{
	echo "no se pudo insertar";
}

?>
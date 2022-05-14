
<?php 

$con = mysqli_connect("localhost","xxx","yyy")or die("Sin Coneccion");
mysqli_select_db($con,"zzz");
$sql="SELECT idnota, titulo, subtitulo, nota, fecha, seccion, lugar, importancia, imagen FROM notauno";
$datos=array();
if ($rs=mysqli_query($con,$sql))
{
  while($row=mysqli_fetch_object($rs)) {
	 $datos[]=$row;
      
     }
}

echo json_encode($datos);
?>


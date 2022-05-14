<?PHP


	if(isset($_POST["documento"])){
		$documento=$_POST["documento"];

		$conexion= mysqli_connect("localhost","xxx","yyy","zzz")or die("Sin Coneccion");

		$sql="DELETE FROM notauno WHERE idnota= ? ";
		$stm=$conexion->prepare($sql);
		$stm->bind_param('i',$documento);

		if($stm->execute()){
			echo "elimina";
		}else{
			echo "noElimina";
		}

		mysqli_close($conexion);
	}
	else{
		echo "noExiste";
	}

?>
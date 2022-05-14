<?php

	$name = $_POST['name']; 
	$image= $_POST['image']; 

	$decodedImage = base64_decode("$image");
	file_put_contents("imagenes/" . $name . ".jpg", $decodedImage); 

?>
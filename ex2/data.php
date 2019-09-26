<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<?php 
	$nombre = $_GET["firstname"];
	$apellido = $_GET["secondname"];
	$genero = $_GET["gender"];
	$correo = $_GET["email"];

	$datos = "$nombre\t$apellido\t$genero\t$correo\n";
	$arxivo = "data.txt";

	echo $datos;

	file_put_contents($arxivo, $datos);

	
	?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>dades</title>
</head>
<body>
	<h1>Calcular operacio</h1>
	<?php
		$a = $_GET["a"];
		$b = $_GET["b"];
		$c = $_GET["c"];

		$neg = -1;

		$menosb = $b * $neg;
		$oper1 = pow($b, 2);
		$oper2 = 4 * $a * $c;
		$resta = $oper1 - $oper2;
		$raiz =  sqrt ( $resta);
		$dos_a = 2 * $a;

		if ($dos_a > 0 and $resta > 0){

		$resultado1 = ($menosb + $raiz) / $dos_a;
		$resultado2 = ($menosb - $raiz) / $dos_a;

		}else{

		$resultado1 = 0;
		$resultado2 = 0;

		}

		echo "El valor de x1 es: ".$resultado1." <br />";
		echo "El valor de x2 es: ".$resultado2." <br />";

		?>

		<br><a href="ex2.php" class="button">Back </a>

		
</body>
</html>
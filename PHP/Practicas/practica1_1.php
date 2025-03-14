<!-- 1. Imprimir los numeros del 10 al 30, realizar la suma y calcular el promedio. 
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Practica 1</title>
</head>

<body>
	<?php
	$sum = 0;
	$ini = 10;
	$end = 30;
	for ($i = $ini; $i <= $end; $i++) {
		if ($i == $end)
			echo "$i";
		else
			echo "$i, ";

		$sum += $i;
	}
	echo "<br>Suma: $sum";
	echo "<br>Promedio: " . ($sum / ($end - $ini));
	?>
</body>

</html>
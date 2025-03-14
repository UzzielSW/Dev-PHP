<!-- 3. Sumar tres notas de un estudiante y calcular el promedio, imprimir las notas y el promedio. Crear las variables y asignar las notas. 
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
		function promedio($arr, $band=false)
		{
			$sum = 0;
			foreach ($arr as $val) {
				$sum += $val;
				if ($band) 
					echo "| $val ";
			}

			$prom = $sum/count($arr);

			return $prom;
		}

		//funciona para 3 o mas notas
		$notas = [71, 81, 100];
		echo "Notas: ";
		$prom = promedio($notas, true);
		echo "<br> Promedio: $prom";
	?>
</body>
</html>
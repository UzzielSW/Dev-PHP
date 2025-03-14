<!-- 2. Imprimir los numeros del -10 al 25 y dira que numeros son negativos y cuales positivos. 
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
		function numeros($begin, $end)
		{
			for ($i=$begin; $i <= $end ; $i++) { 
				if($i < 0)
					echo "$i : negativo <br>";
				elseif($i == 0) 
					echo "$i<br>";
				else
					echo "$i : positivo <br>";
			}
		}

		numeros(-10, 25);	
	?>
</body>
</html>
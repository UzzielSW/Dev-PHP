<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo 1</title>
</head>
<body>
	<form action="ejemplo1.php" method="POST">
		Ingrese el numero hasta donde desea ver los multiplos: 
		<input type="number" name="numero">
		multiplo de: <input type="number" name="multiplo" value=6>
		<input type="submit" name="ad" value="ver">
	</form>

	<?php 

		if (isset($_POST['numero'])) 
		{
			$multiplo = $_POST['multiplo'];
			$end = $_POST['numero'];
			echo "Los multiplos de $multiplo hasta $end son: <br>";
			for ($i=1; $i <= $end; $i++) 
			{ 
				if (($i % $multiplo) == 0) 
					echo "$i <br>";
			}
		}
	?>
</body>
</html>
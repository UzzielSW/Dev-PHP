<!-- 
Realice un programa que resuelva la siguiente ecuacion Y = 2x + 8 donde debe crear una funcion que almacenara la ecuacion, el usuario indica el valor de x.
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parcial 3</title>
</head>
<body>
	<form action="parcial3_4.php" method="post">
		<legend>Evaluar la ecuacion Y = 2x + 8</legend><br>
		Ingrese valor de x: <input type="number" name="numero" required>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php 
		function ecuacion($n){return 2 * $n + 8;}

		if(isset($_POST['enviar']))
		{
			$numero = $_POST['numero'];
			printf("Y = 2($numero) + 8 = %.2f", ecuacion($numero));
		}
	?>
</body>
</html>
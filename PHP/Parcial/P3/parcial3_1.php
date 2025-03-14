<!-- 
Realice un programa que calcule la raiz de un numero y su potencia cuadrada utilizando funciones.
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parcial 3</title>
</head>
<body>
	<form action="parcial3_1.php" method="post">
		<legend>Calcular la raiz de un numero y su potencia cuadrada</legend><br>
		Ingrese numero: <input type="number" name="base" required>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php 
		function potencia($b){return pow($b, 2);}
		function raiz($b){return sqrt($b);}

		if(isset($_POST['enviar']))
		{
			$base = $_POST['base'];
			printf("Raiz: %f\n",raiz($base));
			echo "<br>";
			printf("Potencia cuadrada: %d\n",potencia($base));
		}
	?>
</body>
</html>
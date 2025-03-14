<!-- 
Realice un programa que indique si la letra ingresada es una vocal o no utilizando funciones.
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parcial 3</title>
</head>
<body>
	<form action="parcial3_2.php" method="post">
		<legend>Verificar si la letra ingresada es una vocal o no</legend><br>
		Ingrese una letra: <input type="text" name="letra" required>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php 
		function vocal($s){return (strlen($s) == 1)? preg_match("/[aeiou]/", $s) : false;}

		if(isset($_POST['enviar']))
		{
			$letra = $_POST['letra'];
			printf(vocal($letra)? "Es una vocal" : "No es una vocal");
		}
	?>
</body>
</html>
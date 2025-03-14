<!-- 
Realice un programa donde indique si el numero ingresado se encuentra en el rango de 1 a 50, utilizando funciones.
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parcial 3</title>
</head>
<body>
	<form action="parcial3_3.php" method="post">
		<legend>Verificar si encuentra en el rango de 1 a 50</legend><br>
		Ingrese numero: <input type="number" name="numero" required>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php 
		function rango($n){return $n > 0 and $n < 51;}

		if(isset($_POST['enviar']))
		{
			$numero = $_POST['numero'];
			echo "El numero ". (rango($numero)? "esta en el rango" : "No esta en el rango");
		}
	?>
</body>
</html>
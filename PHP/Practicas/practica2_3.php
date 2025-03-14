<!-- 
Calcule la potencia de los datos ingresados por el usuario que son: base y potencia
(utilice funciones).
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prac2</title>
</head>
<body>
	<form action="practica2_3.php" method="post">
		Base: <input type="number" name="base" required>
		Potencia: <input type="number" name="potencia" required>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php 
		if(isset($_POST['enviar']))
		{
			$base = $_POST['base'];
			$potencia = $_POST['potencia'];
			printf("Tenemos que %.1f^%.1f = %.1f",$base, $potencia, pow($base, $potencia));
		}
	?>
</body>
</html>
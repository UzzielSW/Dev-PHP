<!-- 
Realice un código que convierta a mayúscula lo que ingrese el usuario (utilice
funciones).
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prac2</title>
</head>
<body>
	<form action="practica2_2.php" method="post">
		Texto: <input type="text" name="texto" required>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php 
		if(isset($_POST['enviar']))
		{
			$texto = $_POST['texto'];
			printf("La cadena \"$texto\" en mayuscula: %s",strtoupper($texto));
		}
	?>
</body>
</html>
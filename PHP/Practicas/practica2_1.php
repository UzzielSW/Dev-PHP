<!-- 
Realice un codigo donde cuente de cuantas letras esta conformada la palabra que
ingresa el usuario(utilizando funciones y lo aprendido anteriormente en clases).
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prac2</title>
</head>
<body>
	<form action="practica2_1.php" method="post">
		Texto: <input type="text" name="texto" required>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php 
		if(isset($_POST['enviar']))
		{
			$texto = $_POST['texto'];
			printf("La cadena \"$texto\" consta de %d letras", strlen($texto));
		}
	?>
</body>
</html>
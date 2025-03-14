<!-- 
4. Contruir la tabla de multiplicacion que el usuario indique hasta el 20, imprimir la tabla de multiplicacion. Utilizar formulario.

autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width">
	<title>Parcial 2</title>
</head>
<body>
	<h1>Tabla de Multiplicacion</h1>
	<form action="parcial2_4.php" method="POST">
		Ingrese el numero que sera multiplicado: 
		<input type="number" name="numero" required>
		hasta: <input type="number" name="end" value=20>
		<input type="submit" name="ad" value="Ver">
	</form>

	<?php 
		if (isset($_POST['numero'])) 
		{
			$end = $_POST['end'];
			$numero = $_POST['numero'];
			echo "<br>Tabla de multiplicacion del $numero: <br>";
			for ($i=1; $i <= $end; $i++) 
			{ 
				echo "$numero x $i = ".($numero*$i)."<br>";
			}
		}
	?>
</body>
</html>
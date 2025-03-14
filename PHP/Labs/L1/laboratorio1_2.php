<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Laboratorio 1</title>
	<style>
		@import "https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css";
		@import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

		body {
			font-family: "Varela Round", sans-serif;
			font-weight: 400;
			font-style: normal;
		}

		.column.box.is-two-fifths.table-container {
			display: flex;
			justify-content: center;
		}
	</style>
</head>

<body>
	<section class="section">
		<div class="container">
			<h1 class="title has-text-link">
				<a class="tag is-primary" href="laboratorio1_1.php">P1</a>
				Problema 2
				<a class="tag is-warning" href="laboratorio1_3.php">P3</a>
				<a class="tag is-danger" href="laboratorio1_4.php">P4</a>
			</h1>
			<p class="subtitle">
				Realice una tabla de dividir donde debe utilizar formulario para ingresar los datos que son el numero que sera dividido y hasta cuando se dividira el numero.
			</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<p class="title is-3">Tabla de Dividir</p>
			<form class="form box" action="laboratorio1_2.php" method="POST">
				<div class="field has-addons has-addons-centered">
					<p class="control">
						<a class="button is-static">
							Numero:
						</a>
					</p>
					<p class="control">
						<input class="input" type="number" id="numero" name="numero" required>
					</p>

					<p class="control">
						<a class="button is-static">
							Limite:
						</a>
					</p>
					<p class="control">
						<input class="input" type="number" id="limite" name="limite" value="12" required>
					</p>

					<p class="control">
						<button class="button is-link" type="submit">Generar Tabla</button>
					</p>
				</div>
			</form>
		</div>

		<div class="container">
			<div class="columns is-mobile is-centered">
				<div class="column box is-two-fifths table-container">
					<?php
					if (isset($_POST['numero']) && isset($_POST['limite'])) {
						$numero = $_POST['numero'];
						$limite = $_POST['limite'];

						echo "<table class=\"table is-bordered is-narrow is-hoverable\">";
						echo "<thead><tr><th>Dividendo</th><th>Divisor</th><th>Cociente</th><th>Residuo</th></tr></thead><tbody>";

						for ($divisor = 1; $divisor <= $limite; $divisor++) {
							$cociente = $numero / $divisor;
							$residuo = $numero % $divisor;

							echo "<tr>";
							echo "<td>$numero</td>";
							echo "<td>$divisor</td>";
							echo "<td>" . number_format($cociente, 2) . "</td>";
							echo "<td>$residuo</td>";
							echo "</tr>";
						}

						echo "</tbody></table>";
					} else {
						echo "Error: No se han enviado los datos del formulario.";
					}
					?>
				</div>
			</div>
		</div>
	</section>
</body>

</html>
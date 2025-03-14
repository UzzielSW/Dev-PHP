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

		.column.box.is-one-quarter {
			display: flex;
			justify-content: center;
		}
	</style>
</head>

<body>
	<section class="section">
		<div class="container">
			<h1 class="title has-text-danger">
				<a class="tag is-primary" href="laboratorio1_1.php">P1</a>
				<a class="tag is-link" href="laboratorio1_2.php">P2</a>
				<a class="tag is-warning" href="laboratorio1_3.php">P3</a>
				Problema 4
			</h1>
			<p class="subtitle">
				Contruir la tabla de multiplicación que el usuario indique hasta el 15, imprimir la tabla de multiplicación.
			</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<p class="title is-3">Tabla de Multiplicación</p>
			<form class="form box" action="laboratorio1_4.php" method="POST">
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
						<input class="input" type="number" id="limite" name="limite" value="15" required>
					</p>

					<p class="control">
						<button class="button is-danger" type="submit">Generar Tabla</button>
					</p>
				</div>
			</form>
		</div>

		<div class="container">
			<div class="columns is-mobile is-centered">
				<div class="column box is-one-quarter has-text-white">
					<?php
					if (isset($_POST['numero']) && isset($_POST['limite'])) {
						$numero = $_POST['numero'];
						$limite = $_POST['limite'];

						for ($i = 1; $i <= $limite; $i++) {
							echo "$numero * $i = " . ($numero * $i) . "<br>";
						}
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
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Laboratorio 2</title>
	<style>
		@import "https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css";
		@import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

		body {
			font-family: "Varela Round", sans-serif;
			font-weight: 400;
			font-style: normal;
		}
	</style>
</head>

<body>
	<section class="section">
		<div class="container">
			<h1 class="title has-text-primary">
				<a class="tag is-link" href="laboratorio2_1.php">P1</a>
				Problema 2
				<a class="tag is-warning" href="laboratorio2_3.php">P3</a>
				<a class="tag is-danger" href="laboratorio2_4.php">P4</a>
			</h1>
			<p class="subtitle">
				Realice un codigo donde se despliegue los multiplos de 2, desde 1 al 100.
			</p>

			<div class="columns">
				<div class="column is-three-fifths is-offset-one-fifth is-half has-text-primary">
					<p>Resultado</p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-three-fifths is-offset-one-fifth box has-text-white">
					<?php
					$min = 2;
					$max = 100;
					echo "<div class=\"block\"> [";
					for ($i = $min; $i <= $max; $i++) {
						if ($i % 2 == 0) {
							echo "$i";
							echo ($i < $max) ? ", " : "] </div>";
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>
</body>

</html>
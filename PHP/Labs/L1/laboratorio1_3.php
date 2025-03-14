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
	</style>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
	<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
	<section class="section">
		<div class="container">
			<h1 class="title has-text-warning">
				<a class="tag is-primary" href="laboratorio1_1.php">P1</a>
				<a class="tag is-link" href="laboratorio1_2.php">P2</a>
				Problema 3
				<a class="tag is-danger" href="laboratorio1_4.php">P4</a>
			</h1>
			<p class="subtitle">
				Evaluar la funcion \(Y(x) = 2x^2 + 8x + 12\), cuando <strong>\(x\)</strong> tiene un rango de \([-3, 12]\).
			</p>

			<div class="columns">
				<div class="column is-3 is-offset-2 has-text-warning">
					<p>Resultado</p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-3 is-offset-2 box has-text-white">
					<?php
					for ($i = -3; $i <= 12; $i++)
						echo "\(Y($i) = " . (2 * pow($i, 2) + 8 * $i + 12) . "\)<br>";
					?>
				</div>
			</div>
		</div>
	</section>
</body>

</html>
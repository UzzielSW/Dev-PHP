<!-- 
3. Evaluar la funcion Y = 5x^4 + 12x + 2	
cuando x tiene un rango de 1 a 20. 

autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width">
	<title>Parcial 2</title>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
	<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
	<p>
		Evaluando la funcion \(f(x) = 5x^4 + 12x + 2\) en el rango [1 al 20]:
	</p>
	<?php 
		for ($i=1; $i <= 20; $i++) 
			echo "f($i) = ".(5*pow($i, 4) + 12*$i + 2)."<br>";
	?>
</body>
</html>
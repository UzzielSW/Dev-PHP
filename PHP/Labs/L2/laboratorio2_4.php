<!-- 
Leer los lados de un triangulo, indique si es un triangulo equilatero, isosceles o escaleno y encuentre el area de dicho triangulo.

 * El área del triángulo equilátero viene definida por la siguiente fórmula: 
 	Area = (raiz(3)/4) * (a^2)			siendo (a) el lado el triangulo.

 * El área del triángulo isósceles se calcula mediante la siguiente fórmula:
	Area = (b * raiz(a^2 - (b^2)/4))/2
	donde a es uno de los dos lados iguales y b es el otro lado.

 * El área del triángulo escaleno puede calcularse mediante la fórmula de Herón si se conocen todos sus lados (a, b y c).

	Area = raiz(s * (s - a) * (s - b) * (s - c))
	donde a, b, c son los lados y s es el semiperimetro: s = (a + b + c)/2

autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Laboratorio 2</title>
	<style type="text/css">
		* {
			padding: 0;
			font-family: "open sans";
		}
		canvas{
			margin: 2%;
			background: #F2F2F2;
		}

		h1{margin: 0}
		label{margin: 2% 0 0 2%}
		input{width: 5em}
		.env{margin: 2% 0 0 2%}
	</style>
</head>

<body>
	<h1>Determinar el tipo de triangulo:</h1>
	<canvas id="canvas"></canvas>
	<br>
	<form action="laboratorio2_4.php" class="formulario" method="POST">
			<label for="Lado A">Lado A:</label>
			<input type="number" name="LA" id="LA" value=1 autofocus required>

			<label for="Lado B">Lado B:</label>
			<input type="number" name="LB" id="LB" value=1 required>

			<label for="Lado C">Lado C:</label>
			<input type="number" name="LC" id="LC" value=1 required>

			<input class="env" type="submit" value="Enviar">	
	</form> 

	 <?php 
		if (isset($_POST['LA']) && isset($_POST['LB']) && isset($_POST['LC'])) 
		{
			$ladoA = $_POST['LA'];
			$ladoB = $_POST['LB'];
			$ladoC = $_POST['LC'];
			$area = 0.0;
			echo "<br>";
			if($ladoA == $ladoB && $ladoB == $ladoC)
			{
	           echo("El triangulo es equilatero");
	           $area = (sqrt(3)/4) * pow($ladoA, 2);
			} 
	        else if($ladoA == $ladoB || $ladoB == $ladoC || $ladoA == $ladoC)
	        {
	           echo("El triangulo es isosceles "); $A=0; $B=0;
	           if($ladoA == $ladoB) 
	           	{
	           		$A = $ladoA;
	           		$B = $ladoC;
	           	}
	           else if($ladoB == $ladoC)
	           {
					$A = $ladoB;
					$B = $ladoA;
	           }
	           else
	           {
	           		$A = $ladoA;
	           		$B = $ladoB;
	           }
	           $area = ($B * sqrt(pow($A, 2) - pow($B, 2)/4))/2;
	        }
	        else//(a!=b && b!=c)
	        {
	           echo("El triangulo es escaleno ");
	           $S = ($ladoA + $ladoB + $ladoC)/2;
	           $area = sqrt($S * ($S - $ladoA) * ($S - $ladoB) * ($S - $ladoC));
	        }  

           echo "<br>";
           echo "Area del triangulo: ".number_format($area, 2);
	    }
	?>
	
	<script type="text/javascript">
		//dibujo de figuras geométricas
		const ALTURA_CANVAS = 200, ANCHURA_CANVAS = 200;
		
		const canvas = document.querySelector("#canvas");// Obtener el elemento del DOM
		canvas.width = ANCHURA_CANVAS;
		canvas.height = ALTURA_CANVAS;
		
		const ctx = canvas.getContext("2d");// Del canvas, obtener el contexto para poder dibujar

		let izq = 40;
		let der = ANCHURA_CANVAS - izq;
		let up = izq;
		let down = ALTURA_CANVAS - up;
		let med = ANCHURA_CANVAS/2;

		// Estilo de dibujo
		//letras
		ctx.font="bold 20px sans-serif";
		ctx.fillText("A", med/3, med);
		ctx.fillText("B", med+(med/2), med);
		ctx.fillText("C", med, down+up/2);

		//triangulo
		// ctx.lineWidth = 5;// Grosor de línea
		// ctx.strokeStyle = "black";// Color de línea
		ctx.fillStyle = "#3FFA29";// Color de relleno
		ctx.moveTo(med, up);
		ctx.lineTo(izq, down);
		ctx.lineTo(der, down);
		
		ctx.closePath();// Y dejamos que JS cierre nuestro dibujo
		ctx.stroke();// Hacemos que se dibuje
		ctx.fill();// Lo rellenamos
	</script>
  </body>
</html>
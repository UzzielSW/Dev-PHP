<!-- 
En un hotel se necesita un programa donde los clientes registran la cantidad de dias que se quedaran y se desplara su precio, junto a su descuento y el importe a pagar.
El hotel cuenta con una promocion de 20% de descuento de hospedaje de 2 dias y 30% en 3 dias. El precio de estadia es de B/.120.00

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
			margin: 0;
			padding: 0;
			font-family: "open sans";
		}
		.base{
			width: 80%;
    		background: #F2F2F2;
			position: relative;
			align-content: center;
			text-align: center;
		}
		.formulario{
			background-color: rgb(158, 157, 157);
		    color: rgb(0, 0, 0);
		    width: 30%;
		    margin: 2% 3%;
		    padding: 1% 0 1% 2%;
		    border: 2px solid rgb(255, 255, 255);
		    border-radius: 4px;
		}
		img{width: 50%}
		.promo{font-weight: bold}
	</style>
</head>
<body>
	<div class="base">
		<h1>Hotel Panama</h1>
		<img src="https://www.elpanama.com/cache/0f/39/0f391dbcdb609106741d0e0c79e62261.jpg">
		<div class="info">
			<p>El precio de estadia por dia es de B/.120.00</p>
			<div class="promo">
				<p> El hotel cuenta con una promocion:</p>
				<p>20% de descuento de hospedaje para 2 dias</p>
				<p>30% de descuento de hospedaje para 3 dias</p>
			</div>
		</div>
		
	</div>
	<form action="laboratorio2_3.php" class="formulario" method="POST">
			<label for="days">Cantidad de dias a reservar:</label>
			<input type="number" name="days" id="days" value=1 autofocus cus required />

			<input type="submit" value="Enviar">	
	</form>

	<?php 
		if (isset($_POST['days'])) 
		{
			$days = $_POST['days'];
			$precio =  $days * 120.00;
			$descuento = 0.00;
			echo "<div div class='formulario'>";
			echo "<p>Registro para su estadia de $days dias:</p>";
			echo "<p>Precio: B/.".number_format($precio, 2)."</p>";
				
			switch ($days){
				case 2: $descuento = 0.20 * $precio;break;
				case 3: $descuento = 0.30 * $precio;break;
			}
			
			if($descuento > 0.00)
				echo "<p>Descuento: B/.".number_format($descuento, 2)."</p>";

			echo "<p>Importe a pagar: B/.".number_format(($precio - $descuento), 2)."<p>";
			echo "</div>";
		}
	?>
</body>
</html>
<!-- 
En un hotel se necesita un programa donde los clientes registran la cantidad de dias que se quedaran y se desplara su precio, junto a su descuento y el importe a pagar.
El hotel cuenta con una promocion de 25% de descuento de hospedaje de 2 dias , 35% en 3 dias y 40% en 7 dias. El precio de estadia es de B/.140.00

// Se requiere internet para ver el diseño correctamenete
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parcial 2</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		.title{
			background: rgb(255, 255, 255, 0.7);
			font-size:1.5em;
			border-radius: 2px;
		}
		.price{
			background: transparent;
		}
		.info{
    		color: var(--bs-gray)
    	}
  		.out{
  			background: rgba(238,238,238,255);
  			border-radius: 4px;
  		}
  		.one{
  			background: white;
  			font-size: 1.2em;
  			font-weight: bold;
  		}
  		.two{
  			background: rgb(180, 180, 180, 0.5);
  			border: white 3px solid;
  			font-size: 1em;
  			font-weight: bold;
  			display: flex;
  			align-items: center;
  		}
  		.fondo{
  			background: rgba(238,238,238,255);
  		}
	</style>

  	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<header style="background-image: url('https://directoriozolicol.com/img/empresas/hotelriuplaza_header.png'); background-size: 100%; height: 175px;">
		<div class="container">
			<div class="row justify-content-md-center ">
				<div class="col-3 text-center title">HOTEL RIU</div>
			</div>
			<br>
			<div class="row g-2 price text-center">
				<div class="col-1 one"><small class="text-muted">Desde</small><br>140 USD</div>
				<div class="col-4 two">Por dia + Desayuno Incluido</div>
			</div>
		</div>

	</header>
	<br>
	<div class="container content">
		<div class="row- info">RIU Hotels & Resorts te ofrece una gran variedad de hoteles en los mejores destinos del mundo para que disfrutes de unas vacaciones inolvidables. En nuestros hoteles encontrarás unas completas instalaciones en las que disfrutar de la amplia oferta gastronómica, del mejor entretenimiento y de un sinfín de servicios exclusivos característicos de la compañía.</div>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-6">
					<img src="https://www.riu.com/en/binaris/Playa%20Blanca%20(4)_tcm55-224473.jpg?v=tm270120_1206" class="img-fluid img-thumbnail">
				</div>
				<div class="col text-center fondo">
					<h3>Descuentos Especiales</h3>
					25% de descuento de hospedaje para 2 dias
					35% de descuento de hospedaje para 3+ dias
					40% de descuento de hospedaje para 7+ dias
				</div>
			</div>
		</div>
		
	</div>
	<br>
	<div class="container">
		<form action="parcial2_1.php" class="formulario" method="POST">
			<div id="numberHelp" class="form-text">Ingrese cantidad de dias:</div>
			<div class="row g-3 align-items-center">
				<div class="col-auto">
					<label for="inputNumber" class="form-label">Reserva hoy:</label>
				</div>
				<div class="col-auto">
					<input type="number" class="form-number" name="days" id="days" min=1 required/>
				</div>
				<div class="col-auto">
					<input type="submit" class="btn-sm btn-primary " value="Enviar">
				</div>
			</div>
		</form>
	</div>
	

 	<?php 
		if (isset($_POST['days'])) 
		{
			$days = $_POST['days'];
			$precio =  $days * 140.00;
			$descuento = 0.00;

			echo "<br>";
			echo "<div class='container'>";
			echo "<div class='row justify-content-md-center text-center'>";
			echo "<div class='col-auto out'>";
			echo "<p>Registro para su estadia de $days dias:</p>";
			echo "<div>Precio: B/.".number_format($precio, 2)."</div>";
				
			if($days == 2)
				$descuento = 0.25 * $precio;
				
			else if($days >= 3 && $days < 7)
				$descuento = 0.35 * $precio;
			
			else if($days >= 7)
				$descuento = 0.4 * $precio;
			
			if($descuento > 0.00)
				echo "<div>Descuento: B/.".number_format($descuento, 2)."</div>";

			echo "<div>Importe a Pagar: B/.".number_format(($precio - $descuento), 2)."</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}
	?>
</body>
</html>
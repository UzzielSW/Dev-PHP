<!-- 
Realice un codigo que pueda calcular el area de un triangulo y un circulo, pedir al usuario los datos necesarios para calcular el area de lo solicitado.

Area de un triangulo: A = (b * h)/2
Area de un circulo: A = PI*r^2

// Se requiere internet para ver el diseño correctamenete
autor: @Brayan Puyol
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parcial 2</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style type="text/css">
		* {
			padding: 0;
			border: 0;
		}
		.out{
  			background: rgba(238,238,238,255);
  			border-radius: 4px;
  		}
  		.imagen{
			width: 200px;
		}
    </style>
</head>

<body>
	<header>
		<div class="container">
			<div class="row principal">
				<!-- triangulo -->
				<div class="col text-center">
					<p class="h4">Calcular el Area de un Triangulo</p>
					<div class="row">
						<img src="https://www.rbjlabs.com/wp-content/uploads/2018/10/primer_caso_%C3%A1rea_tri%C3%A1ngulo_11.png" class="imagen rounded mx-auto d-block img-thumbnail">		
					</div>
					<br>
					<div class="row">
						<form action="parcial2_2.php" method="POST">
							<p class="form-text">Ingresar valores:</p>
							<div class="row">
								<!-- align-items-start -->
								<!-- base -->
								<div class="col-auto">
									<label for="inputNumber" class="form-label">Base (b):</label>
								</div>
								<div class="col-auto">
									<input type="number" class="border" name="base" id="base" min=0 required/>
								</div>
								<!-- altura -->
								<div class="col-auto">
									<label for="inputNumber" class="form-label">Altura (h):</label>
								</div>
								<div class="col-auto">
									<input type="number" class="border" name="altura" id="altura" min=0 required/>
								</div>
								<div class="col-auto">
									<input type="submit" class="btn-sm btn-success" value="Enviar">
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- circulo -->
				<div class="col text-center">
					<p class="h4">Calcular el Area de un Circulo</p>
					<div class="row">
						<img src="https://www.fisicalab.com/sites/all/files/contenidos/fundmat/circulo.png" class="imagen rounded mx-auto d-block img-thumbnail">		
					</div>
					<br>
					<div class="row">
						<form action="parcial2_2.php" method="POST">
							<p class="form-text">Ingresar valor:</p>
							<div class="row g-3">
								<!-- radio -->
								<div class="col-auto">
									<label for="inputNumber" class="form-label">Radio (r):</label>
								</div>
								<div class="col-auto">
									<input type="number" class="border" name="radio" id="radio" min=0 required/>
								</div>
								<div class="col-auto">
									<input type="submit" class="btn-sm btn-primary" value="Enviar">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>

	<br>
	<div class="container">
	<div class='row justify-content-md-center text-center out'>

	<?php 
		if (isset($_POST['base']) && isset($_POST['altura'])) 
		{
			$base = $_POST['base'];
			$altura = $_POST['altura'];
			$area = ($base * $altura)/2;
           echo "Area del triangulo: ".number_format($area, 2);
	    }
	    if(isset($_POST['radio']))
	    {
	    	$radio = $_POST['radio'];
			$area = pi()*pow($radio, 2);
           	echo "Area del circulo: ".number_format($area, 2);
	    }
	?>
	
	</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!-- pagina de comprar boleto -->
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require 'php/head.php'?>
</head>
<body>
<!-- HEADER -->
<header>
	<!-- TOP HEADER -->
	<div id="top-header">
		<div class="container">
			<ul class="header-links pull-left">
				<li><a href="#"><i class="fa fa-phone"></i> +507 6328-1441</a></li>
				<li><a href="#"><i class="fa fa-envelope-o"></i> leo199807@gmail.com</a></li>
				<li><a href="#"><i class="fa fa-map-marker"></i> Panamá,City</a></li>
			</ul>
			<ul class="header-links pull-right">
				<!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
				<li><a href="#"><i class="fa fa-user-o"></i> Iniciar Sesion</a></li>
			</ul>
		</div>
	</div>
	<!-- /TOP HEADER -->

	<!-- logo -->
	<?php require 'php/logo.php'?>
	<!-- /logo -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
</nav>
<!-- /NAVIGATION -->

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Comprar Boleto</h3>
				<ul class="breadcrumb-tree">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Comprar</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- main -->
<main>

<div class="section">
	<!-- container -->
	<div class="container">
			<!-- Formulario -->
			<form class="form" action="pagar.php" method="post">
					<!-- row -->
					<div class="row">
						<!-- tribunas -->
						<div class="col caja">
							<label>TIPO:</label>
							<select class="form-select tribuna" name="opcTribuna" id="TIPO">
								<option value="1" selected>TRIBUNA OESTE</option>
								<option value="2">TRIBUNA ESTE</option>
								<option value="3">BUTACA</option>
								<option value="4">PALCOS VIP</option>
							</select>
						</div>
						<!-- tribunas -->

						<!-- precio y cantidad -->
						<div class="col caja">
							<label>Cantidad:</label>
							<select class="form-select opcnumeros" name="opcCantidad" id="CANT">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>	    
							</select> 
						</div>

						<div class="col-2">
							<h2 class="h2">Precio</h2>
							<div>
								<h3 class="h3 precio" id="PRECIO">$6.00</h3>
							</div>
						</div>
						<!-- precio y cantidad -->

						<!-- submit -->
						<div class="col-2 caja">
							<input type="submit"  value="Comprar" name="comprarB">
						</div>
						<!-- submit -->
					</div>
					<!-- row -->
			</form>
			<!-- /formulario -->
	</div>
	<!-- /container -->
</div>

</main>
<!-- /main -->

<!-- FOOTER -->
<footer id="footer">
	<?php require 'php/footer.php'?>
</footer>
<!-- /FOOTER -->

<?php require 'php/scripts.php'?>

<script src="js/ajusteB.js"></script>

</body>
</html>
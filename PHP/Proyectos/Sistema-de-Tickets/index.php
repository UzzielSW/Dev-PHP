<!-- Proyecto de sistema de compra de tickets -->
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
				<li><a href="blank.php"><i class="fa fa-phone"></i> +507 6328-1441</a></li>
				<li><a href="#"><i class="fa fa-envelope-o"></i> leo199807@gmail.com</a></li>
				<li><a href="#"><i class="fa fa-map-marker"></i> Panamá,City</a></li>
			</ul>
			<ul class="header-links pull-right">
				<!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
				<li><a href="#"><i class="fa fa-user-o"></i> Registrarte</a></li>
				<li><a href="sql/inicio.php"><i class="fa fa-user-o"></i> Iniciar Sesion</a></li>
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

<!-- MAIN -->
<main>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- shop -->
				<div class="col-md-6 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="./img/boleto.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Partido<br></h3>
							<a href="comprarB.php" class="cta-btn">Comprar Ahora<i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->

				<!-- shop -->
				<div class="col-md-6 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="./img/estacionamiento.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Estacionamiento<br></h3>
							<a href="comprarE.php" class="cta-btn">Comprar Ahora<i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- Redes: social -->
	<?php require 'php/social.php'?>
	<!-- /social -->
</main>
<!-- /MAIN -->

<!-- FOOTER -->
<footer id="footer">
	<!-- top footer -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">About Us</h3>
						<p>Esto es un proyecto de Programacion 4</p>
						<ul class="footer-links">
							<li><a href="#"><i class="fa fa-map-marker"></i>Panamá,City</a></li>
							<li><a href="#"><i class="fa fa-phone"></i>+507 6328-1441</a></li>
							<li><a href="#"><i class="fa fa-envelope-o"></i>leo199807@gmail.com</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /container -->
	</div>  
	<!-- /top footer -->

	<?php require 'php/footer.php'?>

</footer>
<!-- /FOOTER -->

<?php require 'php/scripts.php'?>

</body>
</html>
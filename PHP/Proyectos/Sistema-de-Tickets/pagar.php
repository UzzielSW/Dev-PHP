<!-- pagina de pagar -->

<?php require 'php/funcionComprar.php'?>

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
				<h3 class="breadcrumb-header">Pagar</h3>
				<ul class="breadcrumb-tree">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Pagar</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- MAIN -->
<main>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- User Details -->
				<div class="col-md-7">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Detalles de Usuario</h3>
						</div>
						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="Nombre">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="last-name" placeholder="Apellido">
						</div>

						<div class="form-group">
							<input class="input" type="tel" name="tel" placeholder="Celular">
						</div>
						<div class="form-group">
							<div class="input-checkbox">
								<input type="checkbox" id="create-account">
								<label for="create-account">
									<span></span>
									Desea crear una cuenta?
								</label>
								<div class="caption">
									<p>Si no se ha registrado puede crear un usuario y registrar su compra en su cuenta</p>
									<input class="input" type="password" name="password" placeholder="Ingrese una contraseña segura">
								</div>
							</div>
						</div>
					</div>
					<!-- /Billing Details -->
				</div>
				<!-- User Details -->

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Detalles de Compra</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>Tickets</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>
						<div class="order-products">
							<div class="order-col">
								<!-- precio tickets-->
								<?php 
									echo <<<EOT
										<div>${cant}x $comprade</div>
										<div>\$$precio</div>
									EOT;
								?>
							</div>
						</div>
						<div class="order-col">
							<div>Cargo por servicio</div>
							<!-- precio de servicio -->
							<div>$<?php echo "$precio_s"; ?></div>
						</div>
						<div class="order-col">
							<div><strong>TOTAL</strong></div>
							<div><strong class="order-total">
								<!-- Precio Total -->
									$<?php echo $precio+$precio_s; ?>
								</strong></div>
						</div>
					</div>
					<div class="payment-method">
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-1" checked>
							<label for="payment-1">
								<span></span>
								Transferencia bancaria directa
							</label>
							<div class="caption">
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-2">
							<label for="payment-2">
								<span></span>
								Pago con Cheque
							</label>
							<div class="caption">
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-3">
							<label for="payment-3">
								<span></span>
								Paypal
							</label>
							<div class="caption">
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
							</div>
						</div>
					</div>
					<div class="input-checkbox">
						<input type="checkbox" id="terms" checked>
						<label for="terms">
							<span></span>
							He leído y acepto los<a href="#">términos y condiciones.</a>
						</label>
					</div>
					<!-- <input type="submit" name="enviar" value="Pagar" class="primary-btn order-submit"> -->
					<a href="#" class="primary-btn order-submit">Pagar</a>
				</div>
				<!-- /Order Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
</main>
<!-- /MAIN -->

<!-- FOOTER -->
<footer id="footer">
	<?php require 'php/footer.php'?>
</footer>
<!-- /FOOTER -->

<?php require 'php/scripts.php'?>

</body>
</html>
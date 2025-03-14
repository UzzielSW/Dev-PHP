<?php 
session_start();

if(isset($_POST['nombre']))
{
	$_SESSION['nombre'] = $_POST['nombre'];
	$_SESSION['clave'] = $_POST['pin'];;
	$_SESSION['Saldo'] = 1000;
	$_SESSION['numeroCuenta'] = "2345456";
	$_SESSION['cable'] = false;
	$_SESSION['agua'] = false;
	$_SESSION['telefono'] = false;
}

function Operaciones($Sesion)
{
	$boton1="";
	$boton2="";
	$boton3="";
	$boton4="";
	$boton5="";

	$Saldo = $Sesion['Saldo'];
	$cable = 300;
	$agua = 150;
	$telefono = 50;

	if (isset($_POST['boton1'])) $boton1 = $_POST['boton1'];
	if (isset($_POST['boton2'])) $boton2 = $_POST['boton2'];
	if (isset($_POST['boton3'])) $boton3 = $_POST['boton3'];
	if (isset($_POST['boton4'])) $boton4 = $_POST['retirar'];
	if (isset($_POST['boton5'])) $boton5 = $_POST['depositar'];
	

	if ($boton1 && $Sesion['cable'] == false) 
	{
		if($Saldo >= $cable)
		{
			$Saldo -= $cable;
			$Sesion['cable'] = true;
		}else
			echo "Saldo insuficiente para realizar el pago";
	}

	if ($boton2 && $Sesion['agua'] == false)
	{
		if($Saldo >= $agua)
		{
			$Saldo -= $agua;
			$Sesion['agua'] = true;
		}else
			echo "Saldo insuficiente para realizar el pago";
	}

	if ($boton3 && $Sesion['telefono'] == false)
	{
		if($Saldo >= $telefono)
		{
			$Saldo -= $telefono;
			$Sesion['telefono'] = true;
		}else
			echo "Saldo insuficiente para realizar el pago";
	}

	if ($boton4) 
	{
		if(0 < $boton4 && $boton4 <= $Saldo)
		{
			echo "Usted retiro una cantidad de dinero de: ".$boton4."<br>";
			$Saldo -= $boton4;
			// echo "su saldo actual en la cuenta es de: " .$Saldo."<br>";
		}
		else
		{
			echo "usted no pudo realizar el retiro, saldo insuficiente<br>";
		}

	}

	if ($boton5) 
	{
		echo "Usted deposito una cantidad de dinero de: ".$boton5."<br>";
		$Saldo += $boton5;
		// echo "Su saldo actual en la cuenta es de: " .$Saldo."<br>";
	}

	$Sesion['Saldo'] = $Saldo;
	return $Sesion;
}//fin funcion Operaciones

	//main
	$_SESSION = Operaciones($_SESSION);
?>


<!DOCTYPE html>
<html lang="es">
<style>
	* {
		margin: 0;
		padding: 0;
	}

	body{
		background-color: rgb(221, 218, 218);
		font-family: "Courier new";
		font-weigth: "bold";
		max-width: 1400px;
	}

	input[type="submit"]{
		background-color:rgb(64, 237, 148);
		font-family: Handlee, constantia;
		font-size: 1em;
		font-weight: bold;
		padding: 0.2%;
		margin-left: 1%;
		border: none;
		border-radius: 3px;
	}

	input[type="submit"]:hover{
		color:gray;
		border: 0.5px solid rgb(255, 255, 255);
		box-shadow: 0 1px 2px rgb(0, 87, 138) ;
	}

	.mostrar{
		background-color:#0B1A11;
		width: 80%;
		margin: auto;
		padding: 3em;
	}
	.mostrar p, .mostrar h2{
		text-align: center;
		color: white;
	}
</style>
<head>
<body>	
	<meta charset="UTF-8">
	<title>BANCO UNIVERSIDAD</title>

	<center>
		<h1>.:Bienvenido:.</h1>
		<h2>BANCO UNIVERSIDAD</h2>
		<h3>La cuenta tiene un saldo de inicio de B/.1000.00</h3>
	</center><br><br>

	<center><h4>SELECCIONE LA OPERACION A REALIZAR</h4></center><br>

	<form action="guardar.php" method="post">
	<center>
		Ingrese  la cantidad a retirar 
	</center>
	<center>
		retirar: <input type="text" name="retirar">
		<input type="submit" name="boton4" value="Enviar">
	</center><br>
   
	<center>Ingrese la cantidad a depositar </center>
	<center>
		depositar: <input type="text" name="depositar">
		<input type="submit" name="boton5" value="Enviar">
	</center><br>

	<center><h5> Cual servicio desea pagar?</h5></center>
	<center>
		<input type="submit" name="boton1" value="Cable">
		<input type="submit" name="boton2" value="Agua">
		<input type="submit" name="boton3" value="Telefono">
	</center>

	<ion-header>
		<ion-toolbar>
	<ion-buttons slot = "star">
		<ion-back-button defautHref=""></ion-back-button>>
	</ion-button>
	</ion-toolbar>
	</ion-header>
	<ion-content padding>
		</ion-content>

	<?php
		include("mostrar.php")
	?>
</form>
</head>
</body>
</html>
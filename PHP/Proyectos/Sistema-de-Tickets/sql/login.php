<?php
	session_start();

	if (isset($_SESSION['users_id'])){
		header('Location: /inicio.php');
	}
	
	require 'conexion.php';

	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		$records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
		$records->bindParam(':email', $_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$message = '';

		if (count($results) > 0 && password_verify($_POST['password'], $results['password']))
		{
			$_SESSION['users_id'] = $results['id'];
			header("Location: /inicio.php");
		} else {
			$message = 'Lo siento, los datos no coinciden!';
		}
	}

?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Entrar</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<?php require 'partials/header.php' ?><!-- arreglar y poner lo que iba en esta importacion -->
		<?php if(!empty($message)): ?>
			<p> <? $message ?> </p>
		<?php endif; ?>

		<h1>Entrar</h1>	
		<span>o <a href="registrar.php">Registrate</a></span>

		<form action="login.php" method="POST">
			<input type="email" type ="text" placeholder="Ingrese su email">
			<input type="password" type ="password" placeholder="Ingrese su contraseña">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
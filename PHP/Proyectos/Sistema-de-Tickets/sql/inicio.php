<?php  

	session_start();

	require 'conexion.php';

	if (isset($_SESSION['users_id'])){
		$records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
		$records->bindParam(':id', $_SESSION['users_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$user = null;

		if (count($results) > 0){
			$user = $results;
		}
	}
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Bienvenidos a TICKETS ONLINE</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    	<link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
		<!-- esto que rayos es??? -->
		<?php if(!empty($user)): ?>
			<br> Bienvenido. <?php $user['email']; ?> 
			<br>Inicio de sesion correcto<br>
			<a href="logout.php">
				sesion cerrada
			</a>
		<?php else: ?>
			<h1>Inicia sesion o Registrate </h1>

			<a href="login.php"> Entrar</a> o 
			<a href="registrar.php"> Registrate </a>
		<?php endif; ?> 
	</body>
</html>

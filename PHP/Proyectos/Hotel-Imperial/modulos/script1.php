<?php 
	function getDestino($n)
	{
		switch ($n) {
			case 1:	$str = "Seccion Principal"; break;
			case 2:	$str = "Seccion de Clase"; break;
			case 3:	$str = "Seccion Resort"; break;
		}
		return $str;
	}

	function getChildren($n)
	{
		echo'
			<div class="col-12">
			<div class="input-group mb-3">
			<label class="input-group-text" for="inputGroupSelect01">Niño '.$n.': </label>
			<select name="child'.$n.'" class="form-select" id="inputGroupSelect01" required>
			<option value="1" selected>0 - 6</option>
			<option value="2">7 - 12</option>
			</select>
			</div>
			</div>
		';
	}

	if(isset($_POST['reservar']))
	{
		$seccion = $_POST['seccion'];
		$cuartos = $_POST['room'];
		$adultos = $_POST['adult'];
		$children = $_POST['children'];
		$entrada = $_POST['check-in'];
		$salida = $_POST['check-out'];

		// $_POST = array();
	}else
	{
		// echo "No se enviaron los datos";
		header('Location: index.php');
	}
?>
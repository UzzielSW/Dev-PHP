<?php 

	if(isset($_POST['reservacion']))
	{
		$childG = 0;
		$childN = 0;
		$usuario = $_POST['user'];
		$mail = $_POST['mail'];
		$celular = $_POST['celular'];
		$seccion = $_POST['seccion'];
		$cuartos = intval($_POST['room']);
		$adultos = intval($_POST['adult']);
		$children = intval($_POST['children']);
		$entrada = $_POST['check-in'];
		$salida = $_POST['check-out'];
		$early = ((isset($_POST['early']))? true : false);
		$precioEarly = (($early)? 30.00 : 0);

		if($children > 0)
		{
			for ($i=1; $i <= $children; $i++) { 
				$opc = intval($_POST['child'.$i]);
				(($opc == 1)? $childG++ : $childN++);
			}
		}

		$precio = getPrecio($seccion);
		$subtotal = ($precio * $adultos) + ($childN * 60.00) + $precioEarly;
	}else
	{
		echo "No se enviaron los datos";
		header('Location: index.php');
	}

	function getDestino($n)
	{
		switch ($n) {
			case 1:	$str = "Seccion Principal"; break;
			case 2:	$str = "Seccion de Clase"; break;
			case 3:	$str = "Seccion Resort"; break;
		}
		return $str;
	}

	function getEntrada($exp)
	{
		return (($exp)? "10:00am" : "3:00pm");
	}

	function getSalida($exp)
	{
		return (($exp)? "4:00pm" : "12:00pm");
	}

	function getPrecio($opc)
	{
		switch ($opc) {
			case 1:	$cost = 150.00; break;
			case 2:	$cost = 140.00; break;
			case 3:	$cost = 130.00; break;
		}
		return $cost;
	}

	function getImpuesto($n, $imp=12)
	{
		return ($n * $imp)/100;
	}

	function getChildren($n, $opc)
	{
		if($opc == 1) // 0 - 6
		{
			echo '<li class="list-group-item d-flex justify-content-between bg-light">
		            <div class="text-success">
		              <h6 class="my-0">x'.$n.' Niños (0 - 6)</h6>
		            </div>
		            <span class="text-success b"><b>GRATIS</b></span>
				</li>';
		}
		else if($opc == 2) // 7 - 12
		{
			echo '<li class="list-group-item d-flex justify-content-between lh-sm">
		            <div>
		              <h6 class="my-0">x'.$n.' Niños (7 - 12)</h6>
		              <small class="text-muted">precio para niños 60$ </small>
		            </div>
		            <span class="text-muted">$ '.($n * 60.00).'</span>
		          </li>';
		}
	}
?>

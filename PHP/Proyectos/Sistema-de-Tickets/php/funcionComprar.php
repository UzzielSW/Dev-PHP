<?php 
	$precio = 0.00;
	$precio_s = 0.00;
	$comprade = "";

	if(isset($_POST['comprarB']))
	{
		$comprade = "Tickets";
		if(isset($_POST['opcCantidad']) and isset($_POST['opcTribuna']))
		{
			$cant = $_POST['opcCantidad'];
			$opc = $_POST['opcTribuna'];
			
			switch ($opc) {
				case 1: $precio = $cant * 5.00;		break;
				case 2: $precio = $cant * 10.00;	break;
				case 3: $precio = $cant * 15.00;	break;
				case 4: $precio = $cant * 25.00;	break;
			}

			$precio_s = $cant * 1.00;
		}
		else echo "No se seleccionaron los campos";
	}
	else if(isset($_POST['comprarE']))
	{
		$comprade = "Estacionamientos";
		if(isset($_POST['cantidad']) and isset($_POST['opcion']))
		{
			$cant = $_POST['cantidad'];
			$opc = $_POST['opcion'];
			$precio = 0.00;
			
			switch ($opc) {
				case 1: $precio = $cant * 2.00;	break;
			}

			$precio_s = $cant * 1.00;
		}
		else echo "No se seleccionaron los campos";
	}
?>


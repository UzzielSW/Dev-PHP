var eventTipo = document.getElementById('TIPO');
var eventCantidad = document.getElementById('CANT');

eventTipo.addEventListener("change", cambiaPrecio);
eventCantidad.addEventListener("change", cambiaPrecio);

function cambiaPrecio()
{
	var text = document.getElementById('PRECIO');
	var tipo = document.getElementById('TIPO');
	var cantidad = document.getElementById('CANT');

	var opc = parseInt(tipo.value);
	var cant = parseInt(cantidad.value);

	var precio = 0.00;

	switch (opc) {
		case 1: precio = cant * 5.00;	break;
		case 2: precio = cant * 10.00;	break;
		case 3: precio = cant * 15.00;	break;
		case 4: precio = cant * 25.00;	break;
	}

	var precio_s = cant * 1.00;

	// alert(text.innerHTML);
	var nuevoTexto = "$ " + String(precio_s + precio);
	text.innerHTML = nuevoTexto;
}

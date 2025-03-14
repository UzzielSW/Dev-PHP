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
		case 1: precio = cant * 2.00;	break;
	}

	var precio_s = cant * 1.00;

	var nuevoTexto = "$ " + String(precio_s + precio);
	text.innerHTML = nuevoTexto;
}

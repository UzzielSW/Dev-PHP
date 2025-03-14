<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Venta de múltiples artículos</title>
</head>

<body>
    <h1>Venta de múltiples artículos</h1>
    <p>2. Calcular la venta de artículos en una empresa. Se debe introducir:
        Nombre del cliente
        Nombre del producto
        Cantidad del producto
        Precio del producto
        Calcular el total a pagar. Si el total a pagar excede 100.00 hacer un descuento del 10%.</p>
    <form action="Lab1_2.php" method="post">
        <label for="nombreCliente">Nombre del cliente:</label>
        <input type="text" id="nombreCliente" name="nombreCliente" required /><br />

        <h2>Artículos</h2>
        <div id="articulos">
            <div class="articulo">
                <label for="nombreProducto1">Nombre del producto:</label>
                <input type="text" id="nombreProducto1" name="nombreProducto[]" required /><br />

                <label for="cantidadProducto1">Cantidad:</label>
                <input type="number" id="cantidadProducto1" name="cantidadProducto[]" required /><br />

                <label for="precioProducto1">Precio unitario:</label>
                <input type="number" step="0.01" id="precioProducto1" name="precioProducto[]" required /><br />

                <button class="eliminarArticulo" onclick="eliminarArticulo(this)">
                    Eliminar artículo</button><br />
            </div>
        </div>

        <button type="button" onclick="agregarArticulo()">Agregar artículo</button><br />
        <input type="submit" value="Calcular" />
    </form>

<?php

if (isset($_POST['nombreCliente']) && isset($_POST['nombreProducto']) && isset($_POST['cantidadProducto']) && isset($_POST['precioProducto'])) {
    $nombreCliente = $_POST['nombreCliente'];
    $nombresProducto = $_POST['nombreProducto'];
    $cantidadesProducto = $_POST['cantidadProducto'];
    $preciosProducto = $_POST['precioProducto'];

    $total = 0;
    $descuentoTotal = 0;

    for ($i = 0; $i < count($nombresProducto); $i++) {
        $subtotal = $cantidadesProducto[$i] * $preciosProducto[$i];
        $total += $subtotal;

        if ($total > 100.00) {
            $descuento = $subtotal * 0.1;
            $descuentoTotal += $descuento;
            $total -= $descuento;
        }
    }

    echo "<br><br>";
    echo "Cliente: $nombreCliente<br>";
    echo "<h2>Artículos</h2>";
    echo "<table border=1>";
    echo "<tr><th>Nombre</th><th>Cantidad</th><th>Precio Unit.</th><th>SubTotal</th></tr>";

    for ($i = 0, $subtotal = 0; $i < count($nombresProducto); $i++) {
        $totalArticulo = $cantidadesProducto[$i] * $preciosProducto[$i];
        $subtotal += $totalArticulo;
        echo "<tr><td>{$nombresProducto[$i]}</td><td>{$cantidadesProducto[$i]}</td><td>$$preciosProducto[$i]</td><td>$$totalArticulo</td></tr>";
    }

    echo "<tr><td></td><td></td><td></td><td><b>SubTotal: $$subtotal</b></td></tr>";

    if ($descuentoTotal > 0) {
        echo "<tr><td></td><td></td><td></td><td>Descuento (10%): $$descuentoTotal</td></tr>";
        echo "<tr><td></td><td></td><td></td><td><b>Total a pagar: $$total</b></td></tr>";
    } else {
        echo "<tr><td></td><td></td><td></td><td><b>Total a Pagar: $$total</b></td></tr>";
    }

    echo "</table>";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Error: No se ingresaron los datos correctamente.";
    }

?>


    <script>
        function agregarArticulo(event) {
            // event.preventDefault();
            var divArticulos = document.getElementById("articulos");
            var nuevoArticulo = divArticulos.cloneNode(true);

            // Cambiar IDs de los nuevos elementos
            var inputs = nuevoArticulo.getElementsByTagName("input");
            for (var i = 0; i < inputs.length; i++) {
                var numero =
                    parseInt(inputs[i].id.substring(inputs[i].id.length - 1)) + 1;
                inputs[i].id =
                    inputs[i].id.substring(0, inputs[i].id.length - 1) + numero;
                inputs[i].name = inputs[i].name.replace(
                    /\[[0-9]+\]/,
                    "[" + (numero - 1) + "]"
                );
            }

            var botonEliminar =
                nuevoArticulo.getElementsByClassName("eliminarArticulo")[0];
            botonEliminar.onclick = function () {
                eliminarArticulo(this);
            };

            divArticulos.appendChild(nuevoArticulo);
        }

        function eliminarArticulo(boton) {
            boton.parentNode.parentNode.removeChild(boton.parentNode);
        }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de venta de artículos</title>
</head>

<body>
    <h1>Calcular la venta de artículos en una empresas</h1>
    <form action="Problema2.php" method="post">
        <label for="nombreCliente">Nombre del cliente:</label>
        <input type="text" id="nombreCliente" name="nombreCliente" value="Ashly" required><br><br>

        <label for="nombreProducto">Nombre del producto:</label>
        <input type="text" id="nombreProducto" name="nombreProducto" value="Pan" required><br><br>

        <label for="cantidadProducto">Cantidad del producto:</label>
        <input type="number" id="cantidadProducto" name="cantidadProducto" value="100" required><br><br>

        <label for="precioProducto">Precio del producto:</label>
        <input type="number" step="0.01" id="precioProducto" name="precioProducto" value="1.99" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <div>
        <?php

        // Validación de datos completa
        if (isset($_POST['nombreCliente']) && isset($_POST['nombreProducto']) && isset($_POST['cantidadProducto']) && isset($_POST['precioProducto'])) {

            $nombreCliente = $_POST['nombreCliente'];
            $nombreProducto = $_POST['nombreProducto'];
            $cantidadProducto = $_POST['cantidadProducto'];
            $precioProducto = $_POST['precioProducto'];

            // Cálculo del total, descuento y total final
            $total = $cantidadProducto * $precioProducto;

            if ($total > 100.00) {
                $descuento = $total * 0.10;
                $totalFinal = $total - $descuento;
            } else {
                $descuento = 0;
                $totalFinal = $total;
            }

            // Mostrar resultados
            echo "<h3>Resultado de la venta:</h3>";
            echo "<p>Nombre del cliente: $nombreCliente</p>";
            echo "<p>Nombre del producto: $nombreProducto</p>";
            echo "<p>Cantidad: $cantidadProducto</p>";
            echo "<p>Precio unitario: $$precioProducto</p>";
            echo "<p>Subtotal: $$total</p>";
            echo "<p>Descuento: $$descuento</p>";
            echo "<p>Total a pagar: $$totalFinal</p>";
        } else {
            echo "Error: No se ingresaron los datos correctamente.";
        }
        ?>
    </div>
</body>

</html>
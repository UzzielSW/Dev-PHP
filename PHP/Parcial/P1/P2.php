<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular compra de artículos</title>
</head>

<body>
    <h1>Calcular compra de artículos</h1>
    <p>2. Calcular la compra de artículos. Debe introducir el precio de cada unidad, si se paga con tarjeta de crédito
        el descuento es de 20%, si se paga en efectivo el descuento es de 15%. Como salida debe mostrar el costo de cada
        unidad, el precio sin descuento, el descuento y el total a pagar.
    </p>
    <form action="P2.php" method="post">
        <label for="precioUnidad">Precio por unidad:</label>
        <input type="number" id="precioUnidad" name="precioUnidad" required><br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required><br><br>

        <label for="metodoPago">Método de pago:</label>
        <select id="metodoPago" name="metodoPago" required>
            <option value="tarjeta">Tarjeta de crédito</option>
            <option value="efectivo">Efectivo</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

<?php
if (isset($_POST['precioUnidad']) && isset($_POST['cantidad']) && isset($_POST['metodoPago'])) {
    $precioUnidad = $_POST['precioUnidad'];
    $cantidad = $_POST['cantidad'];
    $metodoPago = $_POST['metodoPago'];

    // Calcular el descuento
    if ($metodoPago == "tarjeta") {
        $descuento = $precioUnidad * $cantidad * 0.20;
    } else {
        $descuento = $precioUnidad * $cantidad * 0.15;
    }

    // Calcular el precio sin descuento
    $precioSinDescuento = $precioUnidad * $cantidad;

    // Calcular el total a pagar
    $totalPagar = $precioSinDescuento - $descuento;

    // Mostrar los resultados
    echo "<h1>Resultado de la compra</h1>";
    echo "<p>Precio por unidad: $" . $precioUnidad . "</p>";
    echo "<p>Cantidad: " . $cantidad . "</p>";
    echo "<p>Descuento: $" . $descuento . "</p>";
    echo "<p>Precio sin descuento: $" . $precioSinDescuento . "</p>";
    echo "<p>Total a pagar: $" . $totalPagar . "</p>";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Error: No se ingresaron los datos correctamente.";
    }
?>

</body>

</html>
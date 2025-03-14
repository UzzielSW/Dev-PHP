<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Préstamo Hipotecario</title>
</head>

<body>
    <h1>Calcular el valor del monto a pagar por un préstamo hipotecario</h1>

    <form action="Problema3.php" method="post">
        <label for="montoPrestamo">Monto del Préstamo:</label>
        <input type="number" id="montoPrestamo" name="montoPrestamo" required>

        <label for="tipoEmpleado">Tipo de Empleado:</label>
        <select id="tipoEmpleado" name="tipoEmpleado" required>
            <option value="publico">Empleado Público</option>
            <option value="privado">Empleado Privado</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST["montoPrestamo"]) && isset($_POST["tipoEmpleado"])) {
        $montoPrestamo = $_POST["montoPrestamo"];
        $tipoEmpleado = $_POST["tipoEmpleado"];

        if ($tipoEmpleado == "publico") {
            $tasaInteres = 9;
        } else {
            $tasaInteres = 11;
        }

        $interesTotal = ($montoPrestamo * $tasaInteres) / 100;
        $pagoTotal = $montoPrestamo + $interesTotal;

        echo "<h2>Resultado del Cálculo</h2>";
        echo "<p>Monto del Préstamo: $montoPrestamo</p>";
        echo "<p>Tipo de Empleado: $tipoEmpleado</p>";
        echo "<p>Tasa de Interés: $tasaInteres%</p>";
        echo "<p>Pago Total: $pagoTotal</p>";
    } else {
        echo "Error: No se ingresaron los datos correctamente.";
    }
    ?>

</body>

</html>
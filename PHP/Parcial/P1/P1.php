<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cálculo de pago de horas extras</title>
</head>

<body>
    <h1>Cálculo de pago de horas extras</h1>
    <p>
        1. Introduzca el valor que gana por hora el trabajador y la cantidad de
        horas trabajadas. Debe determinar la cantidad de dinero que recibirá un
        trabajador por concepto de las horas extras trabajadas en una empresa,
        sabiendo que cuando las horas de trabajo exceden de 40, el resto se
        consideran horas extras y que estas se pagan al doble de una hora normal
        cuando no exceden de 8; si las horas extras exceden de 8 se pagan las
        primeras 8 al doble de lo que se pagan las horas normales y el resto al
        triple
    </p>
    <form action="P1.php" method="post">
        <label for="pago_hora">Pago por hora:</label>
        <input type="number" step="0.01" id="pago_hora" name="pago_hora" required />
        <br />
        <label for="horas_trabajadas">Horas trabajadas:</label>
        <input type="number" id="horas_trabajadas" name="horas_trabajadas" required />
        <br />
        <br />
        <button type="submit">Calcular</button>
    </form>
</body>

<?php
if (isset($_POST["pago_hora"]) && isset($_POST["horas_trabajadas"])) {
    // Obtener valores del formulario
    $pago_hora = $_POST["pago_hora"];
    $horas_trabajadas = $_POST["horas_trabajadas"];

    // Definir variables para pago normal, horas extras y pago total
    $pago_normal = 0;
    $pago_extras = 0;
    $pago_total = 0;

    echo "<h1>Resultado de cálculo de pago de horas extras</h1>";
    echo "<p>Pago por hora: $" . $pago_hora . "</p>";
    echo "<p>Horas trabajadas: " . $horas_trabajadas . "</p>";

    // Calcular pago normal (hasta 40 horas)
    if ($horas_trabajadas <= 40) {
        $pago_normal = $pago_hora * $horas_trabajadas;
    } else if ($horas_trabajadas > 40) {
        $pago_normal = $pago_hora * 40;
        $horas_extras = $horas_trabajadas - 40;
        if ($horas_extras <= 8) {
            $pago_extras = $pago_hora * 2 * $horas_extras;
        } else {
            // Calcular pago de las primeras 8 horas extras
            $pago_extras += $pago_hora * 2 * 8;

            // Calcular pago de las horas extras restantes (más de 8)
            $horas_extras_restantes = $horas_extras - 8;
            $pago_extras += $horas_extras_restantes * $pago_hora * 3;
        }
    }

    echo "<p>Pago normal: $" . $pago_normal . "</p>";

    // Calcular pago total
    $pago_total = $pago_normal + $pago_extras;

    // Mostrar resultados

    echo "<p>Pago de horas extras: $" . $pago_extras . "</p>";
    echo "<p>Pago total: $" . $pago_total . "</p>";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Error: No se ingresaron los datos correctamente.";
    }
?>

</html>
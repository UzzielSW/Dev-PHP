<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor y suma de 5 números</title>
</head>

<body>
    <h2>Ingresar por teclado 5 números enteros y mostrar el menor de los 5 números ingresados y la suma de dichos números.</h2>
    <form action="Problema1.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" value="1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" value="1" required><br>

        <label for="num3">Número 3:</label>
        <input type="number" id="num3" name="num3" value="1" required><br>

        <label for="num4">Número 4:</label>
        <input type="number" id="num4" name="num4" value="1" required><br>

        <label for="num5">Número 5:</label>
        <input type="number" id="num5" name="num5" value="1" required><br>

        <br>
        <input type="submit" value="Procesar">
    </form>

    <div>
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5'])) {
            $menor = $_POST['num1'];
            $suma = $menor;

            for ($i = 2; $i <= 5; $i++) {
                $num = $_POST['num' . $i];
                if ($num < $menor) {
                    $menor = $num;
                }
                $suma += $num;
            }

            echo "El menor número ingresado es: " . $menor . "<br>";
            echo "La suma de los números ingresados es: " . $suma;
        } else {
            echo "Error: No se ingresaron los datos correctamente.";
        }
        ?>
    </div>
</body>

</html>
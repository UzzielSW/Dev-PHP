<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title>Menor número y producto de tres números</title>
</head>

<body>
    <h1>Calcular el menor número y producto de tres números</h1>
    <p>1. Ingresar por teclado 5 números enteros y mostrar el menor de los 3 números ingresados y la suma de dichos
        números
    </p>
    <form action="Lab1_1.php" method="post">
        <label for="numero1">Primer número:</label>
        <input type="number" id="numero1" name="numero1" required><br>

        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" required><br>

        <label for="numero3">Tercer número:</label>
        <input type="number" id="numero3" name="numero3" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        $menor = min($numero1, $numero2, $numero3);
        $producto = $numero1 * $numero2 * $numero3;

        echo "El menor número es: $menor<br>";
        echo "El producto de los números es: $producto";
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Error: No se ingresaron los datos correctamente.";
    }
    ?>
</body>

</html>
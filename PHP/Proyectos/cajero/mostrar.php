
<div class="mostrar">
    <?php
        $nombre = $_SESSION['nombre'];
        $num = $_SESSION['numeroCuenta'];
        $saldo = $_SESSION['Saldo'];
        $fecha = date("Y-m-d");
        echo "<h2> Reporte de Cliente</h2> <br><br>";
        echo "<p>Nombre de cliente: " . $nombre . "</p><br> ";
        echo "<p>Numero de cuenta: " . $num . "</p><br> ";
        echo "<p>Saldo de cliente: " . $saldo . "</p><br>";
        if($_SESSION['cable'] == true)
            echo "<p>Pago el servicio de: Cable</p><br>";
        if($_SESSION['agua'] == true)
            echo "<p>Pago el servicio de: Agua</p><br>";
        if($_SESSION['telefono'] == true)
            echo "<p>Pago el servicio de: Telefono</p><br>";
        echo "<p>Fecha: ${fecha}";
    ?>
</div>
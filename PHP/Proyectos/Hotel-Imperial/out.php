<!-- 
autor: @Brayan Puyol
-->
<?php require 'modulos/script2.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Imperial</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

<header>
  <div class="container">
    <div class="py-5 text-center bglogo">
      <img class="d-block mx-auto mb-4 logo" src="img/logo.png" alt="">
      <h2>Reservacion Completada</h2>
      <div class="float-start prev"><a href="index.php"><img src="img/prev.png">Regresar</a></div><br>
    </div>
  </div>
</header>


<!-- Container base -->
<div class="container">
  <!-- main -->
  <main class="main">
    <h4 class="text-center">
      <span class="text-primary">Datos de Usuario</span>
    </h4>

    <hr class="my-3">

    <!-- Row 1 -->
    <div class="row justify-content-md-center text-center">
      <!-- Datos Usuario-->

      <div class="col-3 block-info">
        <p class="h5">Usuario Registrado</p>
        <div class="bloque">
          <?php echo "$usuario"; ?>
        </div>
      </div>

      <div class="col-4 block-info">
        <p class="h5">Email</p>
        <div class="bloque">
          <?php echo "$mail"; ?>
        </div>
      </div>

      <div class="col-3 block-info">
        <p class="h5">Celular</p>
        <div class="bloque">
          <?php echo "+507 $celular"; ?>
        </div>
      </div>

      <hr class="my-3 line">

      <div class="col-3 block-info">
        <p class="h5">Destino</p>
        <div class="bloque">
          <?php echo getDestino($seccion); ?>
        </div>
      </div>

      <div class="col-2 block-info">
        <p class="h5">Cuartos</p>
        <div class="bloque">
          <?php echo "$cuartos"; ?>
        </div>
      </div>

      <div class="col-2 block-info">
        <p class="h5">Adultos</p>
        <div class="bloque">
          <?php echo "$adultos"; ?>
        </div>
      </div>

      <div class="col-2 block-info">
        <p class="h5">Niños</p>
        <div class="bloque">
          <?php echo "$children"; ?>
        </div>
      </div>

      <div class="col-1 block-info">
        <p class="h5">Early</p>
        <div>
          <?php echo ((($early)? '<i class="fa fa-check-square-o yes"></i>' : '<i class="fa fa-times-circle noup"></i>')); ?>
        </div>
      </div>

      <hr class="my-3 line">

      <div class="col-3 block-info">
        <p class="h5">Fecha de Entrada</p>
        <div class="bloque">
          <?php echo "$entrada"; ?>
        </div>
      </div>

      <div class="col-2 block-info">
        <p class="h5">Hora de Entrada</p>
        <div class="bloque">
          <?php echo getEntrada($early); ?>
        </div>
      </div>

      <div class="col-3 block-info">
        <p class="h5">Fecha de Salida</p>
        <div class="bloque">
          <?php echo "$salida"; ?>
        </div>
      </div>

      <div class="col-2 block-info">
        <p class="h5">Hora Salida</p>
        <div class="bloque">
          <?php echo getSalida($early) ?>
        </div>
      </div>
      <!-- Datos de Usuario-->
    </div>
    <!-- Row 1 -->
    <hr class="my-4">

    <!-- Row 2 -->
    <div class="row justify-content-md-center">

      <div class="col-md-5 col-lg-5 order-md-last">
        <h4 class="text-center">
          <span class="text-primary">Datos de Reservacion</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Precio de Hospedaje (Adultos)</h6>
              <small class="text-muted">
                Precio en <?php echo getDestino($seccion); ?>
              </small>
            </div>
            <span class="text-muted">
              <?php echo "$ ".$precio; ?>
            </span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">
                <?php echo "x".$adultos." Adultos"?>
              </h6>
            </div>
            <span class="text-muted">
              <?php echo "$ ". ($precio * $adultos); ?>
            </span>
          </li>

          <?php

            if($childN > 0)
              getChildren($childN, 2);

            if($childG > 0)
              getChildren($childG, 1);

            if($early){
              echo '<li class="list-group-item d-flex justify-content-between lh-sm">
                      <div>
                        <h6 class="my-0">Early Check In o Late Check Out</h6>
                      </div>
                      <span class="text-muted">$'.$precioEarly.'</span>
                    </li>';
            }
          ?>
          
          <li class="list-group-item d-flex justify-content-between">
            <span>Sub-Total</span>
            <strong>
              <?php echo '$ '.$subtotal; ?>
            </strong>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>Impuesto</span>
            <small class="text-muted">ITBMS 12%</small>
            <strong>
              <?php echo '$ '.getImpuesto($subtotal);  ?>
            </strong>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span style="font-size: 1.2em; font-weight: bold;">Total (USD)</span>
              <span style="font-size: 1.5em; color: red; font-weight: bold;" >
                <?php echo '$ '.($subtotal + getImpuesto($subtotal));  ?>
              </span>
          </li>
        </ul>
      </div>
    </div>
    <!-- row 2 -->

  </main>
  <!-- main -->
</div>
<!-- container base -->

<!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="row text-center">
      <p class="mb-0">
      Copyright © 
      <span class="tm-current-year"></span> 
      Imperial . Diseñado por 
      <a rel="#" href="https://github.com/UzzielG" target="blank"><b>Brayan Puyol</b></a>
      </p>
    </div>
  </div>
</footer>
<!-- footer -->

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
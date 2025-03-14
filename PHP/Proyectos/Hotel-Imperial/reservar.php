<!-- 
autor: @Brayan Puyol
-->
<?php require 'modulos/script1.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Imperial</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

<header>
  <div class="container">
    <div class="py-5 text-center bglogo">
      <img class="d-block mx-auto mb-4 logo" src="img/logo.png" alt="">
      <h2>Formulario de Reservacion</h2>
      <div class="float-start prev"><a href="index.php"><img src="img/prev.png">Regresar</a></div>
      <br>
    </div>
  </div>
</header>

<!-- Container base -->
<div class="container">
  <!-- main -->
  <main class="main">
    <!-- row -->
    <div class="row justify-content-md-center ">
      <!-- col -->
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3 text-center">Informacion de Usuario</h4>
        <!-- formulario -->
        <form action="out.php" method="post">
          <!-- row 1 -->
          <div class="row g-3">

            <!-- User -->
            <div class="col-12">
              <label for="username" class="form-label">Usuario</label>
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="text" name="user" class="form-control" id="username" placeholder="Nombre de usuario" required>
              </div>
            </div>
            <!-- user -->

            <!-- email -->
            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="mail" class="form-control" id="email" placeholder="you@example.com" required>
            </div>
            <!-- email -->

            <!-- telefono -->
            <div class="col-12">
              <label for="telefono" class="form-label"> # Celular </label>
              <div class="input-group">
                <span class="input-group-text">+ 507</span>
                <input type="tel" class="form-control" id="telefono" placeholder="example: 62317621" name="celular" pattern="[0-9]{8}" required>
              </div>  
            </div>
            <!-- telefono -->

            <!-- destino -->
            <div class="col-md-4">
              <label for="Seccion" class="form-label">Destino</label>
              <select name="seccion" class="form-control redy" id="Seccion" required>
                <?php 
                  echo "<option value='$seccion' selected>".getDestino($seccion)."</option>";
                ?>
              </select> 
            </div>
            <!-- destino -->

            <!-- cuartos -->
            <div class="col-md-4">
              <label for="Room" class="form-label">Cuartos</label>
              <select name="room" class="form-control redy" id="Room" required>
                <?php 
                  echo "<option value='$cuartos' selected>".$cuartos."</option>";
                ?>
              </select>
            </div>
            <!-- cuartos -->

            <!-- adultos -->
            <div class="col-md-2">
              <label for="Adult" class="form-label">Adultos</label>
              <select name="adult" class="form-control redy" id="Adult" required>
                <?php 
                  echo "<option value='$adultos' selected>".$adultos."</option>";
                ?>
              </select>
            </div>
            <!-- adultos -->

            <!-- children -->
            <div class="col-md-2">
              <label for="Children" class="form-label">Niños</label>
              <select name="children" class="form-control redy" id="Children" required>
                <?php 
                  echo "<option value='$children' selected>".$children."</option>";
                ?>
              </select>
            </div>
            <!-- children -->
          </div>
          <!-- row 1 -->

          <hr class="my-4">

          <!-- row 2 -->
          <div class="row">
            <!-- Inputs de los children -->
            <?php 
              if (intval($children) > 0) {
                echo "<legend>Ingrese las edades de los niños</legend>";

                for ($i=1; $i <= $children ; $i++) { 
                  getChildren($i);
                }
              }
            ?>
            <!-- Inputs de los children -->

            <!-- Entrada -->
            <div class="col-md-6">
              <label for="inputCheckIn" class="form-label">Entrada</label>
                <?php 
                  echo "<input name='check-in' type='text' class='form-control redy' id='inputCheckIn' value='$entrada' required>";
                ?>
            </div>
            <!-- Entrada -->

            <!-- Salida -->
            <div class="col-md-6">
              <label for="inputCheckOut" class="form-label">Salida</label>
                <?php 
                  echo "<input name='check-out' type='text' class='form-control redy' id='inputCheckOut' value='$entrada' required>";
                ?> 
            </div>
            <!-- Salida -->

            <hr class="my-4">

            <!-- Early -->
            <div class="form-check">
              <input type="checkbox" name="early" class="form-check-input" id="Early" value="false">
              <label class="form-check-label" for="Early">Early Check In o Late Check Out</label>
            </div>
            <!-- Early -->
          </div>
          <!-- row 2 -->

          <hr class="my-4">

          <!-- submit -->
          <button class="w-100 btn btn-primary btn-lg" name="reservacion" type="submit" id="btnSubmit">Reservar ya</button>
        </form>
        <!-- formulario -->
      </div>
      <!-- col -->
    </div>
    <!-- row -->
  </main>
  <!-- main -->
</div>
<!-- container base -->

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

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
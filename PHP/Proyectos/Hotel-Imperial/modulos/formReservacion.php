<!-- formulario de reserva -->
<form action="reservar.php" method="POST" class="tm-search-form tm-section-pad-2">
  
  <!-- Row F 1 -->
  <div class="form-row tm-search-form-row">  
    <!-- g1 Seccion-->
    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
      <label for="inputCity">Elige tu Destino</label>
      <select name="seccion" class="form-control tm-select" id="inputCity">
          <option value="1" selected>Seccion Principal</option>
          <option value="2">Seccion de Clase</option>
          <option value="3">Seccion Resort</option>
      </select> 
    </div>
    <!-- g1 -->

    <!-- g2 -->
    <div class="form-group tm-form-group tm-form-group-1">  
      <!-- g2/1 Cuartos-->
      <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
          <label for="inputRoom">¿Cuantos Cuartos?</label>
          <select name="room" class="form-control tm-select" id="inputRoom">
              <option value="1" selected>1 Cuarto</option>
              <option value="2">2 Cuartos</option>
              <option value="3">3 Cuartos</option>
              <option value="4">4 Cuartos</option>
              <option value="5">5 Cuartos</option>
              <option value="6">6 Cuartos</option>
              <option value="7">7 Cuartos</option>
              <option value="8">8 Cuartos</option>
              <option value="9">9 Cuartos</option>
              <option value="10">10 Cuartos</option>
          </select>                                        
      </div>
      <!-- g2/1 -->

      <!-- g2/2 Adultos-->
      <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
        <label for="inputAdult">Adultos<span class="textmin">+13</span></label>     
        <select name="adult" class="form-control tm-select" id="inputAdult">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>                                        
      </div>
      <!-- g2/2 -->

      <!-- g2/3 Ninios -->
      <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
        <label for="inputChildren">Niños<span class="textmin">0 - 12</span></label>                                       
        <select name="children" class="form-control tm-select" id="inputChildren">
          <option value="0" selected>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>                                        
      </div>
      <!-- g2/3 -->
    </div>
    <!-- g2 -->
  </div> 
  <!-- Row F 1 -->

  <!-- Row F 2 -->
  <div class="form-row tm-search-form-row">
      <!-- g1 fecha entrada -->
      <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
          <label for="inputCheckIn">Fecha de entrada</label>
          <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Entrada" required>
      </div>
      <!-- g1 -->

      <!-- g2 fecha de salida -->
      <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
          <label for="inputCheckOut">Fecha de salida</label>
          <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Salida" required>
      </div>
      <!-- g2 -->

      <!-- g3 submit-->
      <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
          <label for="btnSubmit">&nbsp;</label>
          <button name="reservar" type="submit" class="btn btn-primary tm-btn tm-btn-search text-uppercase" id="btnSubmit">Reservar</button>
      </div>
      <!-- g3 -->
  </div>
    <!-- Row F 2 -->
</form>                             
<!-- formulario de reserva
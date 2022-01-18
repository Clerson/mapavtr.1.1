<?   require "mapas_model.php"; ?>

<div>


<form action="?page=mapas_model&acao=insert" method="POST"  class="row gx-3 gy-2 text-center">

    <div class="form-floating ">
    <h4>Selecione a Ala</h4> <!-- ALA DO SERVIÇO -->       
        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option1" autocomplete="off" value="Alpha"  required>
          <label class="btn btn-outline-primary" for="option1">Alpha</label>
        </div>

        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option2" autocomplete="off" value="Bravo"  required>
          <label class="btn btn-outline-primary" for="option2">Bravo</label>
        </div>

        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option3" autocomplete="off" value="Charlie"  required>
          <label class="btn btn-outline-primary" for="option3">Charlie</label>
        </div>

        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option4" autocomplete="off" value="Delta"  required>
          <label class="btn btn-outline-primary" for="option4">Delta</label>
        </div>

    </div>


    <div class="form-floating"> <!-- DATA DO SERVIÇO -->
      <input type="date" class="form-control" name="date" placeholder="Data do serviço" value="<?php echo
      Date('Y-m-d');?>"  required>
      <label for="date">Data do serviço:</label>
    </div>

<div class="form-floating"> <!-- OFICIAL DE DIA -->
          <select name="ofdia" class="form-select" required>
            <?php
            $sql_ofdia1 = "SELECT codmil, nomeguerra, status FROM pessoas WHERE status = 's'";
            $result_ofdia1 = mysqli_query($conn, $sql_ofdia1);

            if (mysqli_num_rows($result_ofdia1) > 0) {

              do  { ?>

            <option value="<?php echo $row_ofdia1['codmil'];?>" ><?php echo $row_ofdia1['nomeguerra'];?></option>

            <?php } while($row_ofdia1 = mysqli_fetch_assoc($result_ofdia1)) ;} ;?>

          </select>
    <label for="ofdia">Oficial de Dia:</label>
</div>

<div class="form-floating"> <!-- CHEFE DO SERVIÇO DE DIA -->
       <input class="form-control form-control-sm" list="chefe" name="chefe" placeholder="chefe" required>
          <datalist id="chefe">
            <?php
            $sql_chefe1 = "SELECT nomeguerra, status FROM pessoas WHERE status = 's'";
            $result_chefe1 = mysqli_query($conn, $sql_chefe1);

            if (mysqli_num_rows($result_chefe1) > 0) {

              while($row_chefe1 = mysqli_fetch_assoc($result_chefe1)) { ?>

            <option value="<?php echo $row_chefe1['nomeguerra'];?>" hidden>

            <?php } } ;?>

          </datalist>
    <label for="chefe">Chefe de Socorro:</label>
</div>

<div class="form-floating"> <!-- TELEFONISTA 1 -->

       <input class="form-control" list="tel1" name="tel1" placeholder="tel1" required>
          <datalist id="tel1">
            <?php 
            $sql_telef1 = "SELECT nomeguerra, status FROM pessoas WHERE status = 's'";
            $result_telef1 = mysqli_query($conn, $sql_telef1);

                if (mysqli_num_rows($result_telef1) > 0) {

                    while($row_telef1 = mysqli_fetch_assoc($result_telef1)) { ?>

                        <option value="<?php echo $row_telef1['nomeguerra'];?>" >

                    <?php } 

                ;} 
            ;?>

          </datalist>
    <label for="tel1">Telefonista 1:</label>
</div>

<div class="form-floating"> <!-- TELEFONISTA 2 -->

       <input class="form-control" list="tel2" name="tel2" placeholder="tel2" required>
          <datalist id="tel2">
            <?php 
            $sql_telef2 = "SELECT nomeguerra, status FROM pessoas WHERE status = 's'";
            $result_telef2 = mysqli_query($conn, $sql_telef2);

                if (mysqli_num_rows($result_telef2) > 0) {

                    while($row_telef2 = mysqli_fetch_assoc($result_telef2)) { ?>

                        <option value="<?php echo $row_telef2['nomeguerra'];?>" >

                    <?php } 

                ;} 
            ;?>

          </datalist>
    <label for="tel2">Telefonista 2:</label>
</div>

  <button type="submit" class="btn btn-primary mt-3" name="mapas_acao" value="<?php echo $acao ;?>">Enviar</button>

</form>


</div>



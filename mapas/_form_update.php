<?php include "_head.php"; ?>

    <form action="model.php" method="POST" class="row gx-3 gy-2 text-center">

      <div class="form-floating">
 
        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option1" autocomplete="off" value="Alpha" required <?php if ($row['ala'] == 'Alpha') echo "checked";?>>
          <label class="btn btn-outline-primary" for="option1">Alpha</label>
        </div>

        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option2" autocomplete="off" value="Bravo" required <?php if ($row['ala'] == 'Bravo') echo "checked";?>>
          <label class="btn btn-outline-primary" for="option2">Bravo</label>
        </div>

        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option3" autocomplete="off" value="Charlie" required <?php if ($row['ala'] == 'Charlie') echo "checked";?>>
          <label class="btn btn-outline-primary" for="option3">Charlie</label>
        </div>

        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option4" autocomplete="off" value="Delta" required <?php if ($row['ala'] == 'Delta') echo "checked";?>>
          <label class="btn btn-outline-primary" for="option4">Delta</label>
        </div>

    </div>

      <div class="form-floating"> <!-- DATA DO SERVIÇO -->
      <input type="date" class="form-control" name="data" placeholder="Data do serviço" value="<?php echo date('Y-m-d', strtotime($row['data']));?>"  required>
      <label for="data">Data do serviço:</label>
     </div>

      <div class="form-floating"> <!-- OFICIAL DE DIA -->
        <input class="form-control" list="idofdia" name="idofdia" placeholder="idofdia" required>
          <datalist id="idofdia">
            <?php
            $sql_ofdia1 = "SELECT codmil, nomeguerra, pstatus FROM pessoas WHERE pstatus = 's'";
            $result_ofdia1 = mysqli_query($conn, $sql_ofdia1);

            if (mysqli_num_rows($result_ofdia1) > 0) {

              while($row_ofdia1 = mysqli_fetch_assoc($result_ofdia1))  { ?>

            <option value="<?php echo $row_ofdia1['nomeguerra'];?>" >

            <?php }  ;} ;?>
            </datalist>
          <label for="idofdia">Oficial de Dia:</label>
    </div>


    <div class="form-floating"> <!-- CHEFE DO SERVIÇO DE DIA -->
       <input class="form-control" list="idchefe"  name="idchefe" placeholder="idchefe" required>
          <datalist id="idchefe">
            <option value="<?php echo $idchefe;?>">
            <?php
            $sql_chefe1 = "SELECT nomeguerra, pstatus FROM pessoas WHERE pstatus = 's'";
            $result_chefe1 = mysqli_query($conn, $sql_chefe1);

            if (mysqli_num_rows($result_chefe1) > 0) {

              while($row_chefe1 = mysqli_fetch_assoc($result_chefe1)) { ?>

            <option value="<?php echo $row_chefe1['nomeguerra'];?>">

            <?php } } ;?>

          </datalist>
    <label for="idchefe">Chefe de Socorro:</label>
  </div>


    <div class="form-floating"> <!-- TELEFONISTA 1 -->

      <input class="form-control" list="idtelefonista1" name="idtelefonista1" placeholder="idtelefonista1" required>
          <datalist id="idtelefonista1">
            <option value="<?php echo $idtelefonista1;?>" >
            <?php 
            $sql_telef1 = "SELECT nomeguerra, pstatus FROM pessoas WHERE pstatus = 's'";
            $result_telef1 = mysqli_query($conn, $sql_telef1);

                if (mysqli_num_rows($result_telef1) > 0) {

                    while($row_telef1 = mysqli_fetch_assoc($result_telef1)) { ?>

                        <option value="<?php echo $row_telef1['nomeguerra'];?>" >

                    <?php } 

                ;} 
            ;?>

          </datalist>
      <label for="idtelefonista1">Telefonista 1:</label>
    </div>

  <div class="form-floating"> <!-- TELEFONISTA 2 -->

       <input class="form-control" list="idtelefonista2" name="idtelefonista2" placeholder="idtelefonista2" required>
          <datalist id="idtelefonista2">
            <option value="<?php echo $idtelefonista2;?>" >
            <?php 
            $sql_telef2 = "SELECT nomeguerra, pstatus FROM pessoas WHERE pstatus = 's'";
            $result_telef2 = mysqli_query($conn, $sql_telef2);

                if (mysqli_num_rows($result_telef2) > 0) {

                    while($row_telef2 = mysqli_fetch_assoc($result_telef2)) { ?>

                        <option value="<?php echo $row_telef2['nomeguerra'];?>" >

                    <?php } 

                ;} 
            ;?>

          </datalist>
    <label for="idtelefonista2">Telefonista 2:</label>
  </div>

  
    <input type="number" name="idmapa" value="<?php echo $idmapa;?>" hidden>

  <div class="form-floating">
    <button type="submit" class="btn btn-primary" name="acao" value="updatemapa">Enviar</button>
  </div>

</form>
        

<?php include '../templates/footer.php'; ?>
<?php

 $idmapa = $idvtr = $vtrtipo = "";
 
    if(isset($_GET['idmapa'])){
        $idmapa = $_GET['idmapa'];
    ;}

?>

<form action="?page=detmapas_insert&idmapa=<?php echo $idmapa; ?>" method="POST" class="row gx-3 gy-2 align-items-center">

<?php if (isset($_GET['idvtr'])) { ?>

<div class="form-floating"> <!-- vtr -->
            <?php 
                    $idvtr = $_GET['idvtr']; 
                    $sql_vtr = "SELECT vtrtipo FROM detmapa, vtr WHERE vtrid=$idvtr";
                    $result_vtr = mysqli_query($conn, $sql_vtr);
                    $row_vtr = mysqli_fetch_assoc($result_vtr);
                    echo "<input class='form-control' name='vtr' placeholder='vtr' value='".$row_vtr['vtrtipo']."' required>";
    
    
            ;?>

    <label for="vtr">Viatura:</label>
</div>



<?php } else { ?>

<div class="form-floating"> <!-- vtr -->
       <input class="form-control" list="vtr" name="vtr" placeholder="vtr" required>
          <datalist id="vtr">
            <?php
                $sql_vtr = "SELECT vtrtipo, vtrstatus FROM vtr WHERE vtrstatus = 'ativa'";
                $result_vtr = mysqli_query($conn, $sql_vtr);
                $row_vtr = mysqli_fetch_assoc($result_vtr);
                
                    if (mysqli_num_rows($result_vtr) > 0) {
                        while($row_vtr = mysqli_fetch_assoc($result_vtr)) { ?>
                        <option value="<?php echo $row_vtr["vtrtipo"];?>">
                        <?php } 
                    } 
                ;?>
          </datalist>
    <label for="vtr">Viatura:</label>
</div>


<?php } ;?>


<div class="form-floating"> <!-- motorista -->
       <input class="form-control" list="motorista" name="motorista" placeholder="motorista" required>
          <datalist id="motorista">
            <?php
            $sql_motorista = "SELECT nomeguerra, status FROM pessoas WHERE status = 's'";
            $result_motorista = mysqli_query($conn, $sql_motorista);
            $row_motorista = mysqli_fetch_assoc($result_motorista);

            if (mysqli_num_rows($result_motorista) > 0) {

              while($row_motorista = mysqli_fetch_assoc($result_motorista)) { ?>

            <option value="<?php echo $row_motorista['nomeguerra'];?>">

            <?php } } ;?>

          </datalist>
    <label for="motorista">Motorista:</label>
</div>

<div class="form-floating "> 
        <?php
                             
                if (isset($_GET['idvtr'])) {
                    $idvtr = $_GET['idvtr'];
                    $sql_km = "SELECT odomentr FROM detmapa WHERE idvtr=$idvtr ORDER BY iddetmp DESC LIMIT 1";
                    $result_km = mysqli_query($conn, $sql_km);
                    $row_km = mysqli_fetch_assoc($result_km);

                    if(mysqli_num_rows($result_km) > 0) { $ultimo_odomsaida = $row_km['odomentr']; }
                    
                    else { $ultimo_odomsaida = 0 ;}

                }

                     else { 

                        $ultimo_odomsaida = 0;
                } 
                     
        ;?>

      <input type="number" class="form-control" name="odomsaida" placeholder="odomsaida" value="<?php echo $ultimo_odomsaida;?>"  required>
      <label for="odomsaida">KM Saída:</label>
</div>

<div class="form-floating"> 
      <input type="number" class="form-control" name="odomentr" placeholder="odomentr"  value="<?php echo $ultimo_odomsaida;?>" required>
      <label for="odomentr">KM Chegada:</label>
</div>

<div class="form-floating"> 
      <input type="time" class="form-control" name="horasaida" placeholder="horasaida" value="<?php echo date('H:i');?>" required>
      <label for="horasaida">Hora Saída:</label>
</div>

<div class="form-floating"> 
      <input type="time" class="form-control" name="horaentr" placeholder="horaentr" value="<?php echo date('H:i');?>" required>
      <label for="horaentr">Hora Chegada:</label>
</div>

<div class="form-floating"> 
        <select class="form-select" name="destino"  required>
          <option selected value="Ocorrencia">Ocorrencia</option>
          <option value="Abastecimento">Abastecimento</option>
          <option value="Vistoria">Vistoria</option>
          <option value="Vistoria">Oficina</option>
          <option value="Vistoria">Outros</option>
        </select>
      <label for="destino">Destino:</label>
</div>

<div class="form-floating"> 
      <textarea rows="5" cols="30"class="form-control" name="obs" placeholder="Adicione outras informações"></textarea>
      <label for="obs">Observações:</label>
</div>

<input type="text" name="idmapa" value="<?php echo $idmapa;?>" hidden >

  <button type="submit" class="btn btn-primary " name="detmapas_envia" value="ok">Enviar</button>
</form>




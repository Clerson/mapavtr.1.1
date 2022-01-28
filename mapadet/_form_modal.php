<?php 


if (!empty($_GET['idvtr'])) {

    $iddetmp = $row_detmapa["iddetmp"];
    $idvtr = $row_detmapa["idvtr"];
    $vtrtipo = $row_detmapa["vtrtipo"];
    $vtrimg = $row_detmapa["vtrimg"];
    $idpessoa = $row_detmapa["idpessoa"];
    $grad = $row_detmapa["grad"];
    $nomeguerra = $row_detmapa["nomeguerra"];
    $img = $row_detmapa["img"];
    $odomsaida = $row_detmapa["odomsaida"];
    $odomentr = $row_detmapa["odomentr"];
    $horasaida = $row_detmapa["horasaida"];
    $horaentr = $row_detmapa["horaentr"];
    $destino = $row_detmapa["destino"];
    $detmp_status = $row_detmapa["detmp_status"];
    $obs = $row_detmapa["obs"];

}


;?>

<div class="modal fade" id="duplicar<?php echo $iddetmp ;?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-info">
        <h4 class="modal-title">Duplicando o Registro #<?php echo $iddetmp; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div class="row">

          <div class="col-sm-5">
          
            <img class="card-img-top" src="../veiculos/vtrimg/<?php echo $vtrimg; ?>" alt="Card image">

            <div class="btn-info p-2 text-center rounded-top"><h5><i class="fas fa-ambulance"></i> <?php echo $row_detmapa["vtrtipo"]; ?></h5></div>
          
          </div>

        <div class="col-sm">

  <form action='model.php' method='POST' class='row gx-3 gy-2 align-items-center'>

  <div class="row gx-1 gy-1">

     <?php if(!empty($img)) { ?>
    <div class="form-floating col-sm-1 me-3">
        <img src="../pessoas/pessoas_img/<?php echo $img.".jpg";?>" width="55" height="65" class=" shadow-sm">
    </div>
    <?php } ;?>

    <div class='form-floating ms-2 col-sm'>

    <select class='form-select' name='pessoa' required>
      <?php if(!$idvtr) echo "<option value=''>Selecione um motorista</option>";?>
      <option value="<?php echo $idpessoa;?>"><?php echo $grad." ".$nomeguerra;?></option>

      <?php

        $sql_pessoas = "SELECT * FROM pessoas WHERE pstatus = 's' ORDER BY nomeguerra ASC";
        $result_pessoas = mysqli_query($conn, $sql_pessoas);
        $row_pessoas = mysqli_fetch_assoc($result_pessoas);

       do { ?>
        <option value="<?php echo $row_pessoas['codmil'];?>"><?php echo $row_pessoas['nomeguerra'];?></option>  
      <?php } while ($row_pessoas = mysqli_fetch_assoc($result_pessoas)) ;?>

      </select>
      <label for='pessoa' class='form-label'>Motorista:</label>
    </div>

</div>

      <div class="input-group"  id='odomentr'>
          <span class="input-group-text"><i class="fas fa-tachometer-alt"></i></span>
          <span class="input-group-text">Saída</span>
          <input type="number" class="form-control"  name="odomsaida"   value="<?php echo $odomentr;?>" placeholder="KM saída">
          <span class="input-group-text">Chegada</span>
          <input type="number" class="form-control"  name="odomentr"  value="<?php echo $odomentr;?>" placeholder="kM chegada">
        </div>

        <div class="input-group">
          <span class="input-group-text"><i class='far fa-hourglass'></i></span>
          <span class="input-group-text">Saída</span>
          <input type="time" class="form-control" name="horasaida"  value="<?php echo date('H:i');?>" placeholder="Hora saída">
          <span class="input-group-text">Chegada</span>
          <input type="time" class="form-control"  name="horaentr" value="<?php echo date('H:i');?>" placeholder="Hora chegada" >
        </div>

        <div class="col-sm form-floating"> 
        <select class="form-select" name="destino"  required>
          <option value="Ocorrencia" <?php if($destino == 'Ocorrencia') echo 'selected';?>>Ocorrencia</option>
          <option value="Ordem de Serviço" <?php if($destino == 'Ordem de Serviço') echo 'selected';?>>Ordem de Serviço</option>
          <option value="Ponto Base" <?php if($destino == 'Ponto Base') echo 'selected';?>>Ponto Base</option>
          <option value="Abastecimento" <?php if($destino == 'Abastecimento') echo 'selected';?>>Abastecimento</option>
          <option value="Vistoria" <?php if($destino == 'Vistorias') echo 'selected';?>>Vistorias</option>
          <option value="Oficina" <?php if($destino == 'Oficina') echo 'selected';?>>Oficina</option>
          <option value="Outros" <?php if($destino == 'Outros') echo 'selected';?>>Outros</option>
        </select>
      <label for="destino">Destino:</label>
      </div>
    
        <div class="form-floating col-sm"> 

        <select class="form-select" name="status" required>
          <option value='aberta'>Aberta</option>
        </select>
        <label for="status">Status:</label>
        </div>

      <div class="form-floating"> 
      <textarea rows="5" cols="50" class="form-control" name="obs" placeholder="obs"><?php echo $obs; ?></textarea>
      <label for="obs">Observações:</label>
      </div>
        
        <input type="number" name="idmapa" value="<?php echo $idmapa;?>" hidden>
        <input type="number" name="idvtr" value="<?php echo $idvtr;?>" hidden>


  <button type="submit" class="btn btn-primary " name="enviar" value="enviar">Enviar</button>
</form>
</div>
</div>

    <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
</div>
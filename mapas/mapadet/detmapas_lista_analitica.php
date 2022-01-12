<?php
require "detmapas_model.php";
?>

<div class="row">

<?php if (mysqli_num_rows($result_detmapa) > 0) {
  // output data of each row
 
do { ?>

  <div class="col-2">


          <div class="container1 shadow m-0">
            <a href="" class="text-decoration-none"  data-bs-toggle="modal" data-bs-target="#<?php echo $row_detmapa["vtrtipo"]; ?>">

            <img class="image" src="veiculos/vtrimg/<?php echo $row_detmapa["vtrimg"]; ?>" alt="Card image">
            <div class="middle">
              <div class="vtrtitle"><?php echo $row_detmapa["vtrtipo"]; ?><br>
              <i class='fas fa-user-check'></i> &nbsp;<?php echo $row_detmapa["nomeguerra"]; ?></div>
            </div>

          </a>

        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#excluir<?php echo $row_detmapa["vtrtipo"]; ?>">
          <i class='fas fa-trash'></i>
        </button>
  </div>

  </div>
  




  <!-- The Modal -->
<div class="modal fade" id="<?php echo $row_detmapa["vtrtipo"]; ?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-truck"></i> <?php echo $row_detmapa["vtrtipo"]; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
        <div class="col-5"><img class="card-img-top" src="veiculos/vtrimg/<?php echo $row_detmapa["vtrimg"]; ?>" alt="Card image"></div>
        <div class="col">

<form action='?page=detmapas_model&acao=update&idmapa=<?php echo $idmapa;?>&iddetmp=<?php echo $row_detmapa['iddetmp'];?>' method='POST' class='row gx-3 gy-2 align-items-center'>

        <div class="input-group">
           <span class="input-group-text">Motorista</span>
          <input type="text" class="form-control" name="pessoa" value="<?php echo $row_detmapa['grad']." ".$row_detmapa["nomeguerra"]; ?>" readonly>
        </div>

        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-tachometer-alt"></i></span>
          <span class="input-group-text">Saída</span>
          <input type="text" class="form-control"  name="odomsaida"   value="<?php echo $row_detmapa["odomsaida"];?>" placeholder="KM saída" readonly>
          <span class="input-group-text">Chegada</span>
          <input type="number" class="form-control"  name="odomentr"  value="<?php echo $row_detmapa["odomentr"];?>" placeholder="kM chegada">
        </div>

        <div class="input-group">
          <span class="input-group-text"><i class='fas fa-clock'></i></span>
          <span class="input-group-text">Saída</span>
          <input type="time" class="form-control" name="horasaida"  value="<?php echo $row_detmapa["horasaida"];?>" placeholder="Hora saída" readonly>
          <span class="input-group-text">Chegada</span>
          <input type="time" class="form-control"  name="horaentr" value="<?php echo $row_detmapa["horaentr"];?>" placeholder="Hora chegada" >
        </div>

        <div class="form-floating"> 
        <select class="form-select" name="destino"  required>
          <option value="Ocorrencia" <?php if($row_detmapa['destino'] == 'Ocorrencia') echo 'selected';?>>Ocorrencia</option>
          <option value="Ordem de Serviço" <?php if($row_detmapa['destino'] == 'Ordem de Serviço') echo 'selected';?>>Ordem de Serviço</option>
          <option value="Ponto Base" <?php if($row_detmapa['destino'] == 'Ponto Base') echo 'selected';?>>Ponto Base</option>
          <option value="Abastecimento" <?php if($row_detmapa['destino'] == 'Abastecimento') echo 'selected';?>>Abastecimento</option>
          <option value="Vistoria" <?php if($row_detmapa['destino'] == 'Vistorias') echo 'selected';?>>Vistorias</option>
          <option value="Oficina" <?php if($row_detmapa['destino'] == 'Oficina') echo 'selected';?>>Oficina</option>
          <option value="Outros" <?php if($row_detmapa['destino'] == 'Outros') echo 'selected';?>>Outros</option>
        </select>
      <label for="destino">Destino:</label>
</div>

<div class="form-floating"> 
      <textarea rows="5" cols="50" class="form-control" name="obs" placeholder="obs"><?php echo $row_detmapa['obs']; ?></textarea>
      <label for="obs">Observações:</label>
</div>
        <input type="text" name="pessoa" value="<?php echo $row_detmapa['idpessoa']; ?>" hidden>
        <input type="text" name="idmapa" value="<?php echo $row_detmapa['idmapa'];?>" hidden>
        <input type="text" name="iddetmp" value="<?php echo $row_detmapa['iddetmp'];?>" hidden>
        <input type="text" name="idvtr" value="<?php echo $row_detmapa['idvtr'];?>" hidden>

  <button type="submit" class="btn btn-primary " name="acao" value="update">Enviar</button>
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

<div class="modal fade" id="excluir<?php echo $row_detmapa["vtrtipo"]; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Excluir <?php echo $row_detmapa["vtrtipo"]; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <p>Tem certeza que deseja excluir esse registro?</p>
         <a href="?page=detmapas_model&acao=delete&idmapa=<?php echo $idmapa;?>&iddetmp=<?php echo $row_detmapa['iddetmp'];?>" class="btn btn-warning">Sim</a> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
 <?php } while ($row_detmapa = mysqli_fetch_assoc($result_detmapa)) ;} ;?>
</div>



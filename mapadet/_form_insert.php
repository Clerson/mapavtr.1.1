<div class="modal fade" id="insertmapadet">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-route"></i> Nova Rota</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


    <form action='model.php' method='POST' class='row gx-2 gy-2 align-items-center'>


  <div class='form-floating'>
    <select class='form-select' name='pessoa'  required>
    <option value=''>Selecione o motorista</option>
<?php 

     do { 

      echo "
      <option value=".$row_pessoas['codmil'].">".$row_pessoas['nomeguerra']."</option>  
      "
    ;} while($row_pessoas = mysqli_fetch_assoc($result_pessoas));

   echo "
      </select>
      <label for='pessoa' class='form-label'>Motorista:</label>
    </div>

   <div class='form-floating'> 
   
      <select class='form-select' name='idvtr' onchange='atualizaOdomVtr(this.value)' required>
      <option value=''>Selecione uma viatura</option>";


        do { 

        echo "<option value='".$row_vtr["vtrid"]."'>".$row_vtr["vtrtipo"]."</option>";

      } while ($row_vtr = mysqli_fetch_assoc($result_vtr));

      echo "
      </select>
    <label for='destino'>Veículo:</label>

    </div>

     <div class='input-group' id='odomentr'>
      <span class='input-group-text'><i class='fas fa-tachometer-alt'></i></span>
      <span class='input-group-text'>Saída:</span>
      <input type='number' class='form-control' name='odomsaida' value='".$odomentr."' >
      <span class='input-group-text'>Chegada:</span>
      <input type='number' class='form-control' id='odomentr' name='odomentr' min=".$odomentr." value='".$odomentr."' required>
    </div>";

;?>
 
     
 <div class='input-group'>
  <span class="input-group-text"><i class='far fa-hourglass'></i></span>
  <span class='input-group-text'>Saída:</span>
  <input type='time' class='form-control' name='horasaida' value='<?php echo date('H:i');?>'  required>
  <span class='input-group-text'>Chegada:</span>
  <input type='time' class='form-control' name='horaentr' value='<?php echo date('H:i');?>' required>
</div>
            
<div class="form-floating  col-sm"> 
        <select class="form-select" name="destino"  required>
          <option value="Ocorrencia">Ocorrencia</option>
          <option value="Ordem de Serviço">Ordem de Serviço</option>
          <option value="Ponto Base">Ponto Base</option>
          <option value="Abastecimento">Abastecimento</option>
          <option value="Vistoria">Vistorias</option>
          <option value="Oficina">Oficina</option>
          <option value="Outros">Outros</option>
        </select>
      <label for="destino">Destino:</label>
</div>

        <div class="form-floating col-sm"> 
        <select class="form-select" name="status" required>
          <option value='aberta' >Aberta</option>
          <option value='fechada' >Fechada</option>
        </select>

        <label for="status">Status:</label>
        </div>

<div class="form-floating"> 
      <textarea rows="5" cols="30"class="form-control" name="obs" placeholder="obs">RAI:</textarea>
      <label for="obs">Observações:</label>
</div>

<input type="text" name="idmapa" value="<?php echo $idmapa;?>" hidden>

  <button type="submit" class="btn btn-primary " name="enviar" value="enviar">Enviar</button>
</form>



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
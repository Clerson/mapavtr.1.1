<?php
require "mapas/mapadet/detmapas_model.php";
require "veiculos/veiculos_model.php";
require "pessoas/pessoas_model.php";
 $acao = $_GET['acao'];

if (isset($_GET['acao'])) {

echo
"
<div class='bg-primary text-light p-2 mb-2'><i class='fas fa-truck'></i>  <b>INSERINDO VEÍCULO NO MAPA DE VIATURAS</b></div>

<form action='?page=detmapas_model&acao=view&idmapa=".$idmapa."&iddetmp=".$iddetmp."' method='POST' class='row gx-3 gy-2 align-items-center'>
";
// ----------------------------------------------------------
  if (($_GET['acao']) == 'update') {


  echo "
    <div class='form-floating'>
      <input class='form-control' name='vtr' placeholder='vtr' value='".$row_detmapa['vtrtipo']."' readonly>
      <label for='vtr'>Viatura:</label>
    </div>

    <input name='idvtr' placeholder='idvtr' value='".$row_detmapa['idvtr']."' hidden>

    <div class='form-floating'>
    <select class='form-select' id='pessoa' name='pessoa' placeholder='pessoa'>
  ";

    do { 
      echo "<option value=".$row_pessoas['codmil'].">".$row_pessoas['nomeguerra']."</option>"
        ;} while ($row_pessoas = mysqli_fetch_assoc($result_pessoas)); 

  echo "
    </select>
    <label for='pessoa' class='form-label'>Motorista:</label>
  </div>
  ";

// ----------------------------------------------------------

    echo "
                <div class='input-group'>
                  <span class='input-group-text'>ODOMETRO:</span>
                  <span class='input-group-text'>SAÍDA:</span>
                  <input type='number' class='form-control' name='odomsaida'value='".$row_detmapa['odomentr']."'  readonly>
                  <span class='input-group-text'>CHEGADA:</span>
                  <input type='number' class='form-control' name='odomentr' min=".$row_detmapa['odomentr']." value='".$row_detmapa['odomentr']."' required>
                </div>
    "

;}

// ----------------------------------------------------------

 if (($_GET['acao']) == 'insert') { 

// INICIO CAMPO MOTORISTA
  echo "  
  <div class='form-floating'>
    <select class='form-select' name='pessoa'  required>
  ";     
    while($row_pessoas = mysqli_fetch_assoc($result_pessoas)) {
      echo "
      <option value=".$row_pessoas['codmil'].">".$row_pessoas['nomeguerra']."</option>  
      "
    ;}

   echo "
      </select>
      <label for='pessoa' class='form-label'>Motorista:</label>
    </div>
  ";

 // ----------------------------------------------------------

      if (isset($_GET['filter'])) {

        if (($_GET['filter']) == 'vtrid') {

          if (isset($_GET['idvtr'])) {

            echo "

            <div class='form-floating'> 
            <input class='form-control' name='vtr' placeholder='vtr' value='".$row_detmapa['vtrtipo']."' readonly>
            </div>


            <div class='form-floating'> 
            <input class='form-control' name='idvtr' placeholder='idvtr' value='".$_GET['idvtr']."' hidden>
            </div>
            ";

        if(mysqli_num_rows($result_km) == 0) {

                    $iddetmp = 0;
                    $row_km['odomentr'] = 0; 
                  }

            echo "
            
                <div class='input-group'>
                  <span class='input-group-text'>ODOMETRO:</span>
                  <span class='input-group-text'>SAÍDA:</span>
                  <input type='number' class='form-control' name='odomsaida'value='".$row_km['odomentr']."'  readonly>
                  <span class='input-group-text'>CHEGADA:</span>
                  <input type='number' class='form-control' name='odomentr' min=".$row_km['odomentr']." value='".$row_km['odomentr']."' required>
                </div>
            

            "; } 

          

        ;}
        
// ----------------------------------------------------------
        if (($_GET['filter']) == 'idmapa') {

              if(isset($_GET['idmapa'])) {

              $iddetmp = "";
              $odomentr = 0;                

                

                echo " <h3>Selecione uma viatura acima</h3>";

                    
                  
            ;} //FIM DA GET IDMAPA

        ;} // FIM DA GET FILTER IDMAPA

// ----------------------------------------------------------

    ;} // FIM DA GET FILTER
  
  ;} // fim da GET INSERT

;} // fim da GET ACAO

;?>
 
     
 <div class='input-group'>
  <span class='input-group-text'>HORARIO:</span>
  <span class='input-group-text'>SAÍDA:</span>
  <input type='time' class='form-control' name='horasaida' value='<?php echo $row_detmapa['horaentr'];?>'  readonly>
  <span class='input-group-text'>CHEGADA:</span>
  <input type='time' class='form-control' name='horaentr' value='<?php echo date('H:i');?>' required>
</div>
            
<div class="form-floating"> 
        <select class="form-select" name="destino"  required>
          <option value="Ocorrencia" <?php if($row_detmapa['destino']) { $row_detmapa['destino'] == 'Ocorrencia'; echo 'selected' ;} else {echo "";} ?>>Ocorrencia</option>
          <option value="Ordem de Serviço" <?php if($row_detmapa['destino']) { $row_detmapa['destino'] == 'Ordem de Serviço'; echo 'selected' ;} else {echo "";} ?>>Ordem de Serviço</option>
          <option value="Ponto Base" <?php if($row_detmapa['destino']) { $row_detmapa['destino'] == 'Ponto Base'; echo 'selected' ;} else {echo "";} ?>>Ponto Base</option>
          <option value="Abastecimento" <?php if($row_detmapa['destino']) { $row_detmapa['destino'] == 'Abastecimento'; echo 'selected' ;} else {echo "";} ?>>Abastecimento</option>
          <option value="Vistoria" <?php if($row_detmapa['destino']) { $row_detmapa['destino'] == 'Vistorias'; echo 'selected' ;} else {echo "";} ?>>Vistorias</option>
          <option value="Oficina" <?php if($row_detmapa['destino']) { $row_detmapa['destino'] == 'Oficina'; echo 'selected' ;} else {echo "";} ?>>Oficina</option>
          <option value="Outros" <?php if($row_detmapa['destino']) { $row_detmapa['destino'] == 'Outros'; echo 'selected' ;} else {echo "";} ?>>Outros</option>
        </select>
      <label for="destino">Destino:</label>
</div>

<div class="form-floating"> 
      <textarea rows="5" cols="30"class="form-control" name="obs" placeholder="obs">N° RAI:</textarea>
      <label for="obs">Observações:</label>
</div>

<input type="text" name="idmapa" value="<?php echo $idmapa;?>" hidden>
<input type="text" name="iddetmp" value="<?php echo $iddetmp;?>" hidden>

  <button type="submit" class="btn btn-primary " name="acao" value="<?php echo $acao ;?>">Enviar</button>
</form>




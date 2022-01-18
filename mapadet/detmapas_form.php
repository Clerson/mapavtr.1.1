<script>
function atualizaOdomVtr(str) {
  if (str == "") {
    document.getElementById("odomentr").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("odomentr").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","mapadet/getVtrKm.php?idvtr="+str,true);
    xmlhttp.send();
  }
}
</script>
<?php
require "detmapas_model.php";
require "veiculos/veiculos_model.php";
require "pessoas/pessoas_model.php";



if (isset($_GET['acao'])) {
$acao = $_GET['acao'];

echo "

<form action='?page=detmapas_model&acao=".$acao."&idmapa=".$idmapa."&iddetmp=".$iddetmp."' method='POST' class='row gx-3 gy-2 align-items-center'>";


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


    

        
// ----------------------------------------------------------

if(isset($_GET['idmapa'])) {



     echo "
   <div class='form-floating'> 
   
      <select class='form-select' name='idvtr' onchange='atualizaOdomVtr(this.value)' required>";

      do { 

        echo "<option value='".$row_vtr['vtrid']."'>".$row_vtr['vtrtipo']."</option>";

      } while ($row_vtr = mysqli_fetch_assoc($result_vtr));

      echo "
      </select>
  
    </div>

     <div class='input-group' id='odomentr'>
      <span class='input-group-text'>ODOMETRO:</span>
      <span class='input-group-text'>SAÍDA:</span>
      <input type='number' class='form-control' name='odomsaida' value='".$odomentr."'  readonly>
      <span class='input-group-text'>CHEGADA:</span>
      <input type='number' class='form-control' id='odomentr' name='odomentr' min=".$odomentr." value='".$odomentr."' required>
    </div>";
 ;} //FIM DA GET IDMAPA

  
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




  <?php
require "model.php";
require "veiculos/model.php";
require "pessoas/model.php";
?>

<div class="container-fluid">               

  
  <div class="row sticky-top">
    
    <nav class="navbar navbar-expand-sm bg-warning navbar-light sticky-top rounded-3">
    <ul class="navbar-nav p-1">
      <li class="nav-item"><a href='?page=mapadet&idmapa=<?php echo $idmapa;?>' class='btn btn-light shadow-sm'><i class="fas fa-home"></i> Início</a></li>
      <li class="nav-item ms-2"><a href='javascript:history.back()' class='btn btn-light shadow-sm'><i class="fas fa-reply"></i> Voltar</a></li>
      <li class="nav-item ms-2"><a href='#' class='btn btn-light'  data-bs-toggle="modal" data-bs-target="#insertdetmapa"><i class="fas fa-ambulance"></i> Adicionar</a></li>
      </li>
      <li class="nav-item ms-2"><?php include_once "mapas/mapadet_lista.php";?></li>
      </li>
    </ul>
    </nav>
      
  </div>

 <div class="row">
  <?php
          
    if (isset($_GET["idmapa"])) { $p = "sint.php";

      if (isset($_GET["idvtr"])) { $p = "analit.php"; }

      echo include_once $p;
    }
  ?>

   </div>
   
 </div>

<div class="modal fade" id="insertdetmapa">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Novo Saida de Viatura</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


    <form action='?page=detmapas_model&idmapa=<?php echo $idmapa;?>' method='POST' class='row gx-2 gy-2 align-items-center'>


  <div class='form-floating'>
    <select class='form-select' name='pessoa'  required>
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
   
      <select class='form-select' name='idvtr' onchange='atualizaOdomVtr(this.value)' required>";
      if(!$_GET['idvtr']) { echo "<option value=''>Selecione uma viatura</option>"; } 

       // if($_GET['idvtr']) {echo "<option value='".$row_detmapa['vtrid']."'>".$row_detmapa['vtrtipo']."</option>"; }
            
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
  <span class='input-group-text'><i class='fas fa-clock'></i></span>
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
      <textarea rows="5" cols="30"class="form-control" name="obs" placeholder="obs">N° RAI:</textarea>
      <label for="obs">Observações:</label>
</div>

<input type="text" name="idmapa" value="<?php echo $idmapa;?>" hidden>
<input type="text" name="iddetmp" value="<?php echo $iddetmp;?>" hidden>

  <button type="submit" class="btn btn-primary " name="acao" value="insertmapadet">Enviar</button>
</form>



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>

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
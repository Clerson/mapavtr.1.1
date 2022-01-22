
<div class="modal fade" id="insertmapa">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-map"></i> Novo Mapa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

      <form action="?page=mapas_model" method="POST" class="row gx-3 gy-2 text-center">

        <?php $idmapa = $ala = $idofdia = $idchefe = $idtelefonista1 = $idtelefonista2 = $date = "";?>

     
        <div class="form-floating">
        <h4><i class='fas fa-bookmark'></i> Selecione a Ala</h4> <!-- ALA DO SERVIÇO -->

 
        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option1" autocomplete="off" value="Alpha" required>
          <label class="btn btn-outline-primary" for="option1">Alpha</label>
        </div>

        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option2" autocomplete="off" value="Bravo" required>
          <label class="btn btn-outline-primary" for="option2">Bravo</label>
        </div>

        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option3" autocomplete="off" value="Charlie" required>
          <label class="btn btn-outline-primary" for="option3">Charlie</label>
        </div>

        <div class="form-check-inline">
          <input type="radio" class="btn-check" name="ala" id="option4" autocomplete="off" value="Delta" required>
          <label class="btn btn-outline-primary" for="option4">Delta</label>
        </div>

    </div>

  
      <div class="form-floating"> <!-- DATA DO SERVIÇO -->
      <input type="date" class="form-control" name="date" placeholder="Data do serviço" value="<?php echo date('Y-m-d');?>"  required>
      <label for="date">Data do serviço:</label>
     </div>

 <div class="row gx-3 gy-2 text-center">
      <div class="form-floating col-sm"> <!-- OFICIAL DE DIA -->
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


    <div class="form-floating col-sm"> <!-- CHEFE DO SERVIÇO DE DIA -->
       <input class="form-control" list="idchefe"  name="idchefe" placeholder="idchefe" required>
          <datalist id="idchefe">
            <?php
            $sql_chefe1 = "SELECT nomeguerra, pstatus FROM pessoas WHERE pstatus = 's'";
            $result_chefe1 = mysqli_query($conn, $sql_chefe1);

            if (mysqli_num_rows($result_chefe1) > 0) {

              while($row_chefe1 = mysqli_fetch_assoc($result_chefe1)) { ?>

            <option value="<?php echo $row_chefe1['nomeguerra'];?>" hidden>

            <?php } } ;?>

          </datalist>
    <label for="idchefe">Chefe de Socorro:</label>
</div>

  <div class="row gx-3 gy-2 text-center">
    <div class="form-floating col-sm"> <!-- TELEFONISTA 1 -->

      <input class="form-control" list="idtelefonista1" name="idtelefonista1" placeholder="idtelefonista1" required>
          <datalist id="idtelefonista1">
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
  


  <div class="form-floating col-sm"> <!-- TELEFONISTA 2 -->

       <input class="form-control" list="idtelefonista2" name="idtelefonista2" placeholder="idtelefonista2" required>
          <datalist id="idtelefonista2">
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

</div>

  <button type="submit" class="btn btn-primary" name="acao" value="insertmapa">Enviar</button>
</div>

</form>
        

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>

<!------------------- Fim do Modal -->

<?php
require_once "model.php";
?>

<style type="text/css">
   .row, .col {padding: 0; margin: 0;}
</style>

<?php if(mysqli_num_rows($result) > 0) { ;?>

<div class="row m-0 sticky-top">

  <nav class="navbar navbar-expand-sm bg-warning navbar-light sticky-top rounded-3">
    <ul class="navbar-nav p-1">
      <li class="nav-item"><a href='javascript:history.back()' class='btn btn-light shadow-sm me-2'><i class="fas fa-reply"></i> Voltar</a></li>
      <li class="nav-item ms-2"><a href='#' class='btn btn-light' data-bs-toggle="modal" data-bs-target="#insertmapa"><i class="fas fa-map"></i> Adicionar</a></li>
    </ul>
    </ul>
  </nav>

</div>  



<div class="row mt-0">


   <div class="col-sm">

    <?php

    $p = "list.php";

      if (isset($_GET["p"])) { 
        
        if ($_GET["p"] == 'list') {

        $p = "list.php";
      }

    }

    echo include $p;
    
    ;?>

      </div>
 </div>

<?php } ;?>


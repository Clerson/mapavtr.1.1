<?php

include "model.php";



?>



<div class="container-fluid p-0 m-0"> 

<div class="row m-0 sticky-top">

  <nav class="navbar navbar-expand-sm navbar-white bg-white sticky-top mb-2 shadow-sm">
  <ul class="navbar-nav p-1">
    <li class="nav-item"><a href='javascript:history.back()' class='btn btn-secondary shadow-sm me-2'><i class="fas fa-reply"></i> Voltar</a></li>
    <li class="nav-item"><a href="?page=pessoas" class="btn btn-secondary shadow-sm"><i class="fas fa-users"></i> Pessoas</a></li>
    <li class="nav-item ms-2"><a href='#' class='btn btn-secondary shadow-sm'  data-bs-toggle="modal" data-bs-target="#insertpessoa"><i class="fas fa-user-plus"></i> Adicionar</a></li>

  </ul>
  </nav>
  
</div>

<div class="row m-0">


   <div class="col-sm">

    <?php 
      $p = "card.php"; 
     
      // if (isset($_GET["p"])) {

      //   $p = $_GET['p'];

      //   switch ($p) {
      //     case "form": $p = "form.php";break;
      //     case "model": $p = "model.php";break;
        
      //   }  
       
      // }

      echo include $p;
            
    ?>

      </div>

   </div>
 </div>

<div class="modal fade" id="insertpessoa">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-user-plus"></i>Incluindo Pessoas<h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm">

            <form action="?page=pessoas_model" method="POST"  class="was-validated">

    <?php $grad = $rg =  $nomeguerra =  $nome =  $contato = $pstatus = "";?>

              <div class="form-floating mb-3 mt-3"> 
                   <input class="form-control" list="grad" name="grad" placeholder="grad" value="<?php echo $grad;?>" required>
                      <datalist id="grad">
                        <option value="Cel QOC">
                        <option value="TC QOC">
                        <option value="Maj QOC">
                        <option value="Cap QOC">
                        <option value="Cap QOA">            
                        <option value="1º Ten QOC">
                        <option value="1º Ten QOA">            
                        <option value="2º Ten QOC">
                        <option value="2º Ten QOA">
                        <option value="Asp Of">
                        <option value="ST QPC">
                        <option value="1º Sgt QPC">
                        <option value="2º Sgt QPC">
                        <option value="3º Sgt QPC">
                        <option value="Cb QPC">
                        <option value="Sd QPC">
                        <option value="Sd 2º Classe">
                      </datalist>
                <label for="grad">Posto/Grad:</label>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Preecha este campo!</div>
            </div>

            <div class="form-floating mb-3 mt-3">   
                <input type="text" class="form-control" name="rg" value="<?php echo $rg;?>" placeholder="numero do RG"   required>
                <label for="rg">RG:</label>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Preecha este campo!</div>
            </div>

            <div class="form-floating mb-3 mt-3"> 
                <input type="text" class="form-control" value="<?php echo $nomeguerra;?>" name="nomeguerra" placeholder="Nome de guerra" required>
                <label for="nomeguerra">Nome de Guerra:</label>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Preecha este campo!</div>
            </div>


            <div class="form-floating mb-3 mt-3"> 
                  <input type="text" class="form-control" value="<?php echo $nome;?>" name="nome" placeholder="Nome completo"  required>
                  <label for="nome">Nome Completo:</label>
                  <div class="valid-feedback">Válido</div>
                  <div class="invalid-feedback">Preecha este campo!</div>
            </div>

            <div class="form-floating mb-3 mt-3"> 
                  <input type="text" class="form-control" value="<?php echo $contato;?>" name="contato" placeholder="Contato"  required>
                  <label for="contato">Contato:</label>
                  <div class="valid-feedback">Válido</div>
                  <div class="invalid-feedback">Preecha este campo!</div>

            <div class="form-floating mb-3 mt-3">
               
                <select class="form-select"  name="pstatus"  value="<?php echo $pstatus;?>" placeholder="Status" required>
                  <option value="s" <?php if($pstatus == 's') echo 'selected';?>>Ativa</option>
                  <option value="n" <?php if($pstatus == 'n') echo 'selected';?>>Inativa</option>
                </select>
                <label for="pstatus">Status:</label>
            </div>

              <button type="submit" class="btn btn-primary mt-3" name="acao" value="pessoasinsert">Enviar</button>
            </form>

        </div>

      </div>

    </div>

    <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>

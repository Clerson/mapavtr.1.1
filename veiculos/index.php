<?php

require_once "model.php";

?>



<div class="container-fluid p-0 m-0"> 

<div class="row m-0 sticky-top">

  <nav class="navbar navbar-expand-sm bg-warning navbar-light sticky-top rounded-3">
  <ul class="navbar-nav p-1">
    <li class="nav-item"><a href='javascript:history.back()' class='btn btn-light shadow-sm me-2'><i class="fas fa-reply"></i> Voltar</a></li>
    <li class="nav-item"><a href="?page=vtr" class="btn btn-light"><i class="fas fa-ambulance"></i> Veículos</a></li>
    <li class="nav-item ms-2"><a href='#' class='btn btn-light'  data-bs-toggle="modal" data-bs-target="#insertvtr"><i class="fas fa-ambulance"></i> Adicionar</a></li>

  </ul>
  </nav>
  
</div>

<div class="row m-0">


   <div class="col-sm">

    <?php 
      $p = "list.php"; 
     
      if (isset($_GET["p"])) {

        $p = $_GET['p'];

        switch ($p) {
          case "form": $p = "form.php";break;
          case "model": $p = "model.php";break;
        
        }  
       
      }

      echo include $p;
            
    ?>

      </div>

   </div>
 </div>

<div class="modal fade" id="insertvtr">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">#<?php echo $vtrid; ?> <i class="fas fa-truck"></i> <?php echo $vtrtipo; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5"><img class="card-img-top" src="veiculos/vtrimg/<?php echo $vtrimg; ?>" alt="Card image"></div>
          <div class="col-sm">

            <form action='?page=vtr_model' method='POST' class='row gx-3 gy-2 align-items-center'>

              <?php $vtrid = $vtrpref = $vtrtipo = $vtrmarcamod = $vtrano = $vtrstatus = $vtrimg = ""; ?>

              <div class="input-group">
                <span class="input-group-text">Nomenclatura</span>
                <input type="text" class="form-control" name="vtrtipo" value="<?php echo $vtrtipo; ?>" required>
              </div>
              <div class="input-group">
                <span class="input-group-text">Prefixo</span>
                <input type="text" class="form-control" name="vtrpref" value="<?php echo $vtrpref; ?>" required>
              </div>
              <div class="input-group">
                <span class="input-group-text">Marca/Modelo</span>
                <input type="text" class="form-control"  name="vtrmarcamod"   value="<?php echo $vtrmarcamod;?>" placeholder="Marca/Modelo" required >
              </div>
              <div class="input-group">
                <span class="input-group-text">Ano de fabricação</span>
                <input type="number" class="form-control"  name="vtrano"  value="<?php echo date('Y');?>" placeholder="Ano de fabricação" required>
              </div>
              <div class="input-group">
                <span class="input-group-text">Status</span>
                <select class="form-select"  name="vtrstatus"  value="<?php echo $vtrstatus;?>" placeholder="Status" required>
                  <option value="ATIVA" <?php if($vtrstatus == 'ATIVA') echo 'selected';?>>Ativa</option>
                  <option value="INATIVA" <?php if($vtrstatus == 'INATIVA') echo 'selected';?>>Inativa</option>
                </select>
              </div>
              <input type="text" name="vtrid" value="<?php echo $vtrid;?>" hidden>

              <button type="submit" class="btn btn-primary " name="acao" value="vtrinsert">Enviar</button>
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

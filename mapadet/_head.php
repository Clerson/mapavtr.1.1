  <?php
include "../conexao.php";

include "model.php";

include "../templates/header.php";

include "../templates/index.php";

include "../veiculos/model.php";

include "../pessoas/model.php";

include "_form_insert.php";

?>

  <div class="row m-1 sticky-top">
    
    <nav class="navbar navbar-expand-sm bg-warning navbar-light sticky-top rounded-3">
    <ul class="navbar-nav p-1">
      <li class="nav-item"><a href='index.php?idmapa=<?php echo $idmapa;?>' class='btn btn-light shadow-sm'><i class="fas fa-home"></i> Início</a></li>
      <li class="nav-item ms-2"><a href='javascript:history.back()' class='btn btn-light shadow-sm'><i class="fas fa-reply"></i> Voltar</a></li>
      <li class="nav-item ms-2"><a href='#' class='btn btn-light'  data-bs-toggle="modal" data-bs-target="#insertmapadet" title="Adicionar nova rota"><i class="fas fa-route"></i> Adicionar</a></li>
      </li>
      <li class="nav-item ms-2"><?php include "../mapas/mapadet_lista.php";?></li>
      </li>
    </ul>
    </nav>
      
  </div>

 <div class="row m-1">




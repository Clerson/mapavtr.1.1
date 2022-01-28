
<?php

include_once "../conexao.php";

include_once "../templates/header.php";

include "../templates/index.php";

include "model.php";

include "_form_insert.php";

?>  


<div class="row m-1 sticky-top">

  <nav class="navbar navbar-expand-sm bg-warning rounded-3">
    <ul class="navbar-nav">
      <li class="nav-item me-2"><a href='javascript:history.back()' class='btn btn-light'><i class="fas fa-reply"></i> Voltar</a></li>
      <li class="nav-item me-2"><a href="/pessoas" class="btn btn-light"><i class="fas fa-users"></i> Pessoas</a></li>
      <li class="nav-item me-2"><a href='#' class='btn btn-light'  data-bs-toggle="modal" data-bs-target="#insertpessoa"><i class="fas fa-user-plus"></i> Adicionar</a></li>
      <li class="nav-item me-2">
          <input class="form-control" type="text" placeholder="Pesquisar pessoas"  name="search_text" id="search_text">
      </li>
      <li class="nav-item me-2">
          <span class="btn btn-light">Número de militares ativos: <b><?=mysqli_num_rows($result_pessoas)?></b></span>
      </li>

      <!-- <li class="nav-item me-2 d-flex">
        <form action="" method="POST" class="d-flex">
          <select class="form-select me-2" name="pstatus">
            <option value="" >"Filtrar por status"</option>
            <option value="s" selected>Ativos</option>
            <option value="n" >Inativos</option>
          </select>
          <input type="submit" class="btn btn-primary" name="">
        </form>
    </li> -->
    </ul>
  </nav>
  
</div> 

<div class="row m-1">
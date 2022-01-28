<?php
include_once "../conexao.php";

include_once "../templates/header.php";

include "../templates/index.php";

include "model.php";

include '_form_insert.php';

?>


<div class="row m-1 sticky-top">

  <nav class="navbar navbar-expand-sm bg-warning rounded-3">
  <ul class="navbar-nav">
    <li class="nav-item"><a href='javascript:history.back()' class='btn btn-light shadow-sm me-2'><i class="fas fa-reply"></i> Voltar</a></li>
    <li class="nav-item me-2"><a href="index.php" class="btn btn-light"><i class="fas fa-ambulance"></i> Veículos</a></li>
    <li class="nav-item me-2"><a href='#' class="btn btn-light" data-bs-toggle="modal" data-bs-target="#insertvtr"><i class="fas fa-ambulance"></i> Adicionar</a></li>
    <li class="nav-item me-2 d-flex">
      <form action="" method="POST" class="d-flex">
        <select class="form-select me-2" name="vtrstatus">
          <option value="" >"Filtrar por status"</option>
          <option value="ATIVA" >Ativas</option>
          <option value="INATIVA" >Inativas</option>
        </select>
        <input type="submit" class="btn btn-primary" name="">
      </form>
    </li>
    <li class="nav-item me-2">
          <span class="btn btn-light">Número de viaturas: <b><?=mysqli_num_rows($result_vtr)?></b></span>
      </li>
  </ul>
  </nav>
  
</div>

<div class="row m-1">



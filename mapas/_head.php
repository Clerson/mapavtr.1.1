<?php

include_once "../conexao.php";

include_once "../templates/header.php";

include "../templates/index.php";

include "model.php";

include "_form_mapa_insert.php";

?>  


<div class="row m-1 sticky-top">

  <nav class="navbar navbar-expand-sm bg-warning navbar-light sticky-top rounded-3">
    <ul class="navbar-nav p-1">
      <li class="nav-item me-2"><a href='javascript:history.back()' class='btn btn-light shadow-sm'><i class="fas fa-reply"></i> Voltar</a></li>
      <li class="nav-item me-2"><a href='#' class='btn btn-light' data-bs-toggle="modal" data-bs-target="#insertmapa"><i class="fas fa-map"></i> Adicionar</a></li>
      <li class="nav-item me-2">
        <form class="d-flex" action="" method="POST">
          <input class="form-control me-2" type="date" name="fdata">
          <input class="btn btn-primary" type="submit" name="submit">
        </form>

      </li> 
      <!-- <li class="nav-item ms-2">Vizualizar como: <a href="?page=mapas&p=card" class="btn btn-info" ><i class="fas fa-table"></i></a></li>
      <li class="nav-item ms-2"><a href="?page=mapas&p=list"  class="btn btn-info" ><i class="fas fa-list"></i></a></li> -->

    </ul>
  </nav>
</div>  

<div class="row m-1">
  
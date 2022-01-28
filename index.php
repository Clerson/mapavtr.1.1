<?php 

include_once "templates/header.php";

include "templates/index.php";

?>

  <nav class="navbar navbar-expand-sm navbar-light">
        <ul class="navbar-nav text-center">
          <li class="nav-item p-2 m-2 btn-light rounded-3 shadow">
            <a class="nav-link" href="/"><i class='fas fa-home'></i><br />  INÍCIO</a>
          </li> 
          <li class="nav-item p-2 m-2 btn-light rounded-3 shadow">
            <a href="/mapas" class="nav-link"><i class="fas fa-map"></i><br />  MAPAS</a>
          </li>
          <li class="nav-item p-2 m-2 btn-light rounded-3 shadow">
            <a class="nav-link" href="/veiculos"><i class='fas fa-ambulance'></i><br />  VEÍCULOS</a>
          </li>
          <li class="nav-item p-2 m-2 btn-light rounded-3 shadow">
            <a class="nav-link" href="/pessoas"><i class='fas fa-users'></i><br />  PESSOAS</a>
          </li>
          <li class="nav-item p-2 m-2 btn-light rounded-3 shadow">
            <a class="nav-link" href="#"><i class='far fa-file-alt'></i><br />  RELATÓRIOS</a>
          </li>
          <li class="nav-item p-2 m-2 btn-light rounded-3 shadow">
            <a class="nav-link" href="#"><i class='fas fa-phone'></i><br />  CONTATOS</a>
          </li>
          <li class="nav-item p-2 m-2 btn-light rounded-3 shadow">
            <a class="nav-link" href="#"><i class='fas fa-globe-americas'></i><br /> LINKS ÚTEIS</a>
          </li>
        </ul>
    </nav>


<?php

include 'templates/footer.php';

?>

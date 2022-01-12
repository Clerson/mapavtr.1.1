<?php
session_start();

if(isset($_GET['page'])) {
$_SESSION['page'] = $_GET['page'];
}

require 'conexao.php';

?>
<head>
  <title>Mapa Viaturas</title>
  <meta charset="utf-8">
<!--   <meta http-equiv="refresh" content="1">
 -->  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="icon" type="image/x-icon" href="favico.gif">

</head>

<body>
<div class="row m-0 p-0">
<div class="col-sm-2 bg-dark p-0">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-0">
        <ul class="navbar-nav flex-column">
          <li class="nav-item"><a href="index.php"><img src="img_topo.png" width="100%"  class="bg-white"></a></li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <form class="d-flex">
                <input class="form-control me-2 small" type="text" placeholder="Pesquisar">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
              </form>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class='fas fa-home'></i> Inicio</a>
          </li>
          <li class="nav-item"><a href="?page=mapas&acao=view" class="nav-link"><i class="fas fa-map-marked-alt"></i> Mapas</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="?page=vtr&acao=view&view=sint"><i class='fas fa-ambulance'></i> Veículos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=pessoas"><i class='fas fa-users'></i> Pessoas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class='far fa-file-alt'></i> Relatórios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class='fas fa-phone'></i> Contatos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class='fas fa-globe-americas'></i> Links úteis</a>
          </li>
        </ul>
    </nav>

  </div>



  <div class="col p-0 m-0">
    
   <?php

      if (isset($_GET["page"])) {

        $page = $_GET['page']; 

          if($page == "vtr") {$page = "veiculos/index.php"; $page_title = "Lista de Viaturas";}
          // if($page == "vtr_insert") {$page = "veiculos/veiculos_insert.php"; $page_title = "Adicionar Viaturas";}
          // if($page == "vtr_update") {$page = "veiculos/veiculos_update.php"; $page_title = "Alterar Viaturas";}
          // if($page == "pessoas"){ $page = "pessoas/pessoas_lista.php"; $page_title = "Lista de Pessoas";}
          // if($page == "pessoas_insert") {$page = "pessoas/pessoas_insert.php"; $page_title = "Adicionar Pessoas";}
          // if($page == "pessoas_update") {$page = "pessoas/pessoas_update.php"; $page_title = "Alterar Pessoas";}
          if($page == "mapas") {$page = "mapas/index.php";}
          //if($page == "mapas_insert") {$page = "mapas/mapas_form.php"; $page_title = "Adicionar Mapas";}
          // if($page == "mapas_update") {$page = "mapas/mapas_update.php"; $page_title = "Alterar Mapas";}
          //if($page == "mapas_envia") {$page = "mapas/mapas_envia.php"; $page_title = "Alterar Mapas";}
          if($page == "mapadet") {$page = "mapas/mapadet/index.php";}
          //if($page == "detmapas") {$page = "mapas/mapadet/detmapas_lista.php"; $page_title = "Detalhes do Mapa";}
          // if($page == "detmapas_envia") {$page = "mapas/mapadet/detmapas_envia.php"; $page_title = "Detalhes do Mapa";}
          // if($page == "detmapas_insert") {$page = "mapas/mapadet/detmapas_insert.php"; $page_title = "Detalhes do Mapa";}
          if($page == "detmapas_model") {$page = "mapas/mapadet/detmapas_model.php"; $page_title = "Detalhes do Mapa";}
          //if($page == "detmapas_form") {$page = "mapas/mapadet/detmapas_form.php"; $page_title = "Detalhes do Mapa";}
          // if($page == "detmapa_analitica") {$page = "mapas/mapadet/detmapas_lista_analitica.php"; $page_title = "Detalhes do Mapa";}
        echo include $page;
      } else { ?> 

      <div class='row p-2 bg-warning m-0'>
        <div class="col-sm">
         <h4>MAPA DE VIATURAS DO 9ºBBM</h4>
       </div>
       <div class="col-sm-2">
        <i class=" far fa-calendar-check"></i> <?php echo date("d/m/Y")."
        <br /><input type='text' value='00:00:00' id='relogio' readonly size='6'/>
 <i class='far fa-clock'></i> ".date('H:i:s');?>
      </div>


      <?php };

      

        if(isset($_POST['enviar'])){ echo require "pessoas/pessoas_update.php";}
        if(isset($_POST['insert'])){ echo require "pessoas/pessoas_insert.php";}
        if(isset($_POST['vtr_insert'])){ echo require "veiculos/veiculos_insert.php";}
        if(isset($_POST['vtr_update'])){ echo require "veiculos/veiculos_lista.php";}
        // if(isset($_POST['mapas_insert'])){ echo require "mapas/mapas_insert.php";}
        // if(isset($_POST['mapas_update'])){ echo require "mapas/mapas_update.php";}
        if(isset($_POST['mapas_envia'])){ echo require "mapas/mapas_model.php";}
        if(isset($_POST['detmapas_envia'])){ echo require "mapas/mapadet/detmapas_envia.php";}


      ;?>


  </div>

</div>
<script type="text/javascript" src="relogio.js"></script>

</body>

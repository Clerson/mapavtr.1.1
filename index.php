<?php include_once "templates/header.php";?>

   <div class="col-sm-2 bg-white me-2 p-2 rounded-3 shadow">
    <a href="index.php"><img src="img_topo.png" width="100%"  class="bg-white"></a>

      <?php include_once "templates/menu_vert_esq.php";?> 
       
    </div>
 
    <div class="col-sm p-2 rounded-3 bg-light shadow">
          
      <?php

      if (isset($_GET["page"])) {
         
        switch ($page) {
          case "vtr": $page = "veiculos/index.php"; break;
          case "vtr_model": $page = "veiculos/model.php"; break;
          case "mapas": $page = "mapas/index.php"; break;
          case "mapas_model": $page = "mapas/model.php"; break;
          case "pessoas": $page = "pessoas/index.php"; break;
          case "mapadet": $page = "mapadet/index.php"; break;
          case "detmapas_model": $page = "mapadet/model.php"; break;
          case "mapas_form": $page = "mapas/form.php"; break;
        }  
       
          echo include_once $page;

      }

  ;?>

      </div><!-- Fim da div col -->

<?php include 'templates/footer.php';?>

<?php 

include_once "templates/header.php";

include "templates/index.php";

      if (isset($_GET["page"])) {
         
        switch ($page) {
          case "vtr": $page = "veiculos/index.php"; break;
          case "vtr_model": $page = "veiculos/model.php"; break;
          case "mapas": $page = "mapas/index.php"; break;
          case "mapas_model": $page = "mapas/model.php"; break;
          case "pessoas": $page = "pessoas/index.php"; break;
          case "pessoas_model": $page = "pessoas/model.php"; break;
          case "mapadet": $page = "mapadet/index.php"; break;
          case "detmapas_model": $page = "mapadet/model.php"; break;
          case "mapas_form": $page = "mapas/form.php"; break;
        }  
       
          echo include_once $page;

      }

include 'templates/footer.php';

?>

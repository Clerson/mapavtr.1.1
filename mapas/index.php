<?php

include_once "../conexao.php";

include_once "../templates/header.php";

include "../templates/index.php";

include "_head.php";

include "model.php";

include "_form_mapa_insert.php";
      
     $p = 'list.php'; 
          
    if (isset($_GET["p"])) {

      if($_GET['p'] == "card")  { $p = "card.php" ;}
      if($_GET['p'] == "list")  { $p = "list.php" ;}


      }

      echo include_once $p;
    
include '../templates/footer.php';

?>




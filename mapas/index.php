<?php

require_once "mapas/mapas_model.php";

?>

  <?php if(mysqli_num_rows($result) > 0) { ;?>

<div class="row m-0 sticky-top">

  <nav class="navbar navbar-expand-sm bg-warning navbar-light sticky-top">
  <ul class="navbar-nav p-1">
    <li class="nav-item"><a href="?page=mapas&acao=view" class="btn btn-primary"><i class="fas fa-map-marked-alt"></i> Mapas</a></li>
    <li class="nav-item ms-2"><a href="?page=mapas&acao=insert" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Adicionar</a></li>
  </ul>
  </nav>
  
  <div class="col-sm-1 bg-primary">
    <div class="btn m-0 bg-primary text-light text-center p-2" data-bs-toggle="offcanvas" data-bs-target="#menu_index"><i class="fas fa-bars"></i></div>
  </div>
  
  <div class="col-sm bg-primary text-light text-center p-2"><i class='fas fa-map-marked-alt'></i></i> MAPA SELECIONADO</div>
  <div class="col-sm-2 bg-primary text-light text-center p-2"><!-- <i class="fas fa-ambulance"></i> VIATURAS INSERIDAS --></div>

</div>

<div class="row mt-0">


   <div class="col-sm">

      <?php 

      $pagina = "mapas_lista.php";
      
         if (isset($_GET["acao"])) {

            if (($_GET["acao"]) == 'view' ) {

              if (isset($_GET["view"])) {
            
                if (($_GET["view"]) == 'analit' ) {$pagina = "mapas_lista.php";}
                if (($_GET["view"]) == 'sint' ) {$pagina = "mapas_lista.php";}
              
              } $pagina="mapas_lista.php";

            ;}   else $pagina="mapas_lista.php";

            if (($_GET["acao"]) == 'insert' ) {$pagina = "mapas_form.php";}
            if (($_GET["acao"]) == 'update' ) {$pagina = "mapas_update.php";}

           

         }  echo include $pagina;

         ;?>

      </div>

      <div class="col-sm-2  p-0 bg-primary">
        
      </div>

 </div>

<?php } ;?>
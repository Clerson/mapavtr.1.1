<?php

require_once "veiculos_model.php";

?>



<div class="container-fluid p-0 m-0"> 

<div class="p-2 bg-warning d-flex m-0 te">
   <h4>VEÍCULOS DO 9ºBBM</h4>
</div>

<div class="row m-0 sticky-top">

  
      
              <div class="col-sm-1 bg-primary">
                  <div class="btn m-0 bg-primary text-light text-center p-2" data-bs-toggle="offcanvas" data-bs-target="#menu_index"><i class="fas fa-bars"></i></div>
              </div>



              <div class="col-sm bg-primary text-light text-center p-2"><i class="fas fa-ambulance"></i> VIATURA SELECIONADA - <?php echo $row_vtr["vtrtipo"]; ?> </div>
              <div class="col-sm-2 bg-primary text-light text-center p-2"><i class="fas fa-ambulance"></i> VIATURAS INSERIDAS</div>

</div>

<div class="row m-0">


   <div class="col">

      <?php 
      
         if (isset($_GET["acao"])) {

            if (($_GET["acao"]) == 'view' ) {
            
            if (($_GET["view"]) == 'analit' ) {$pagina = "veiculos_lista_analitica.php";}
            if (($_GET["view"]) == 'sint' ) {$pagina = "veiculos_lista_sint.php";}
                 
             

            ;}   else $pagina="vtrs_lista_analitica.php";

            if (($_GET["acao"]) == 'insert' ) {$pagina = "veiculos_form.php";}
            if (($_GET["acao"]) == 'update' ) {$pagina = "veiculos_form.php";}

            echo include $pagina;

         }  ;

         ;?>

      </div>

      <div class="col-sm-2  p-0 bg-primary">
         <?php include "veiculos_lista_vert.php";?>
        
      </div>

   </div>
 </div>


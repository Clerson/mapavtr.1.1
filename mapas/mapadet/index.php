<?php

require_once "detmapas_model.php";

?>



<div class="container-fluid p-0 m-0">               


   <div class="row m-0 sticky-top">
      
      <?php include_once "mapas/mapadet_lista.php";?>
   

      <div class="col-sm-1 bg-primary">
         <div class="btn  bg-primary text-light text-center m-0 p-2" data-bs-toggle="offcanvas" data-bs-target="#menu_index"><i class="fas fa-bars"></i></div>
      </div>



      <div class="col-sm bg-primary text-light text-center p-2"><i class="fas fa-ambulance"></i> VIATURA SELECIONADA - <?php echo $row_detmapa["vtrtipo"]; ?> </div>
      <div class="col-sm-2 bg-primary text-light text-center p-2"><i class="fas fa-ambulance"></i> VIATURAS INSERIDAS</div>

   </div>

   <div class="row m-0">


      <div class="col-sm">

         <?php 
         
            if (isset($_GET["acao"])) {

               if (($_GET["acao"]) == 'view' ) {
               
               if (($_GET["view"]) == 'analit' ) {$pagina = "detmapas_lista_analitica.php";}
               if (($_GET["view"]) == 'sint' ) {$pagina = "detmapas_lista_sint.php";}
                    
                

               ;}   else $pagina="detmapas_lista_analitica.php";

               if (($_GET["acao"]) == 'insert' ) {$pagina = "detmapas_form.php";}
               if (($_GET["acao"]) == 'update' ) {$pagina = "detmapas_form.php";}

               echo include $pagina;

            }  ;

            ;?>

         </div>

         <div class="col-sm-2  p-0">
         </div>

   </div>
   
 </div>


<?php include '_head.php';?>

<div class="col-sm">
 
 <div class="row">

  <?php

do { 

    $iddetmp = $row_detmapa['iddetmp'];
    $destino = $row_detmapa['destino'];
    $obs = $row_detmapa['obs'];

    if($row_detmapa['detmp_status'] == 'aberta') {

      echo "<div class='col-sm-2 m-1 p-1 shadow rounded-3'>";
    }

    else echo "<div class='col-sm-2 m-1 p-1 rounded-3 bg-secondary'>";   

    ;?>  

      <a href="#" data-bs-toggle="modal" data-bs-target="#iddetmp<?=$iddetmp ;?>">
        <div class="btn-warning p-2 text-center rounded-3"><?=$row_detmapa["vtrtipo"]; ?></div>
        <img  src="../veiculos/vtrimg/<?=$row_detmapa["vtrimg"]; ?>" width="100%">
      </a>
      <span><i class="fas fa-route"></i> <?=$destino?></span>

    </div>


<?php 

include '_form_update.php';

include '_form_modal.php';

include '_form_delete.php';

} while ($row_detmapa = mysqli_fetch_assoc($result_detmapa)); ?>

</div>

</div>

    <div class="col-sm-2">

    <?php include '_sint.php';?>

    </div>

</div>

</div>


<?php include '../templates/footer.php';?>

<script src="atualizaOdomVtr.js"></script>
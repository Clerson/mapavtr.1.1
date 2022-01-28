<?php

include '_head.php';

?>

<div class="col-sm">
 
 <div class="row">

  <?php

do { 

    $iddetmp = $row_detmapa['iddetmp'];
    $destino = $row_detmapa['destino'];
    $obs = $row_detmapa['obs'];

    if($row_detmapa['detmp_status'] == 'aberta') {

      echo "<div class=' col-sm-2 p-1 shadow-sm rounded-3'>";
    }

    else echo "<div class='col-sm-2 p-1 shadow-sm rounded-3 bg-secondary'>";   

    ;?>  

      <a href="#" data-bs-toggle="modal" data-bs-target="#iddetmp<?=$iddetmp ;?>">
        <div class="btn-warning p-2 text-center rounded-3"><?=$row_detmapa["vtrtipo"]; ?></div>
        <img  src="../veiculos/vtrimg/<?=$row_detmapa["vtrimg"]; ?>" width="100%">
      </a>
      <span><?=$destino."<br>".$obs?></span>

    </div>


<?php 

include '_form_edit_modal.php';

include '_form_modal.php';

include '_modal_delete.php';

} while ($row_detmapa = mysqli_fetch_assoc($result_detmapa)); ?>

</div>

</div>


<div class=" col-sm-2 m-1 p-1 shadow-sm rounded-3">

    

       <?php

          $idmapa = $_GET['idmapa'];
          $sql_detmapa2 = "SELECT idvtr FROM detmapa WHERE idmapa=$idmapa GROUP BY idvtr";
          $result_detmapa2 = mysqli_query($conn, $sql_detmapa2);
          $row_detmapa2 = mysqli_fetch_assoc($result_detmapa2);

        do { 

        $idvtr = $row_detmapa2['idvtr']; 
        $sql_vtr_m = "SELECT * FROM vtr WHERE vtrid = $idvtr AND vtrstatus='ativa' ORDER BY vtrtipo ASC";
        $result_vtr_m = mysqli_query($conn, $sql_vtr_m);
        $row_vtr_m = mysqli_fetch_assoc($result_vtr_m);


        ;?>  


          
              <a href="analit.php?idmapa=<?php echo $idmapa;?>&idvtr=<?php echo $row_vtr_m['vtrid'];?>"">

                <img  src="../veiculos/vtrimg/<?php echo $row_vtr_m['vtrimg']; ?>" width="100%">

                <div class="btn-warning p-2 text-center rounded-3"><?php echo $row_vtr_m["vtrtipo"]; ?></div>

              </a>


    

       <?php } while ($row_detmapa2 = mysqli_fetch_assoc($result_detmapa2)); ?>
</div>


</div>

</div>


<?php     
include '../templates/footer.php';

?>

<script src="atualizaOdomVtr.js"></script>

<?php

include '_head.php';

do { 

    $iddetmp = $row_detmapa['iddetmp'];

    if($row_detmapa['detmp_status'] == 'aberta') {

      echo "<div class='col-sm-2 p-1 shadow-sm rounded-3'>";
    }

    else echo "<div class='col-sm-2 p-1 shadow-sm rounded-3 bg-secondary'>";   

    ;?>  

    <a href="#" data-bs-toggle="modal" data-bs-target="#iddetmp<?php echo $iddetmp ;?>">
      <div class="btn-warning p-2 text-center rounded-3"><?php echo $row_detmapa["vtrtipo"]; ?></div>
      <img  src="../veiculos/vtrimg/<?php echo $row_detmapa["vtrimg"]; ?>" width="100%">
    </a>


    <div class="btn btn-secondary col-sm" data-bs-toggle="modal" data-bs-target="#duplicar<?php echo $iddetmp ;?>"><i class="fas fa-ambulance"></i></div>

</div>

 
<?php 

include '_form_edit_modal.php';

include '_form_modal.php';

include '_modal_delete.php';

} while ($row_detmapa = mysqli_fetch_assoc($result_detmapa))  ;?>


<?php 

include '../templates/footer.php';

?>


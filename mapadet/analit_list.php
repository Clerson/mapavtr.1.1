<?php include '_head.php';?>

<div class="col-sm">
  
 <?php do { ;?>  

 <div class="row">

    <a href="#" data-bs-toggle="modal" data-bs-target="#iddetmp<?=$row_detmapa['iddetmp'] ;?>">
      <table class="table">
        <tr>
          <td><img src="../veiculos/vtrimg/<?=$row_detmapa["vtrimg"]; ?>" width="60px"></td>
          <td><?=$row_detmapa["vtrtipo"]; ?></td>
          <td><?=$row_detmapa["grad"]." ".$row_detmapa["nomeguerra"]; ?></td>
          <td><i class="far fa-clock"></i> <?=date('H:i', strtotime($row_detmapa['horasaida']))."h / ".date('H:i', strtotime($row_detmapa['horaentr']))."h" ;?></td>
          <td><i class='fas fa-tachometer-alt'></i> <?=$row_detmapa["odomentr"];?> / <?=$row_detmapa["odomsaida"];?></td>
          <td><i class="bi bi-geo-alt"></i> <?=$row_detmapa['destino']?></td>
        </tr>
      </table>  
    </a>

</div>
<?php 

include '_form_update.php';

include '_form_modal.php';

include '_form_delete.php';



} while ($row_detmapa = mysqli_fetch_assoc($result_detmapa)); ?>



</div>


<div class="col-sm-2"> <?php include '_sint.php';?></div>



<?php include '../templates/footer.php';?>

<script src="atualizaOdomVtr.js"></script>
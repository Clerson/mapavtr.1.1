<?php require "veiculos/veiculos_model.php"


;?>
<div id="accordion">

  <div class="card">
    <div class="card-header p-0 text-center ">
      <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
        <i class='fas fa-ambulance'></i> Veículos
      </a>
    </div>
    <div id="collapseOne" class="collapse text-center" data-bs-parent="#accordion">
      <?php do { ;?>
          <!-- <a href="?page=mapadet&acao=insert&idmapa=<?php echo $idmapa;?>&filter=vtrid&idvtr=<?php echo $row_vtr["vtrid"];?>" class="btn btn-outline-danger m-1 d-grid"> -->
            <a href="?page=mapadet&acao=view&idmapa=<?php echo $idmapa;?>&filter=vtrid&idvtr=<?php echo $row_vtr["vtrid"];?>" class="btn btn-outline-danger m-1 d-grid">
            <?php echo $row_vtr["vtrtipo"];?>
          </a>
      <?php } while ($row_vtr = mysqli_fetch_assoc($result_vtr)); ?>
    </div> 

  </div>
</div>

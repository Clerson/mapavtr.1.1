

<div id="accordion">

  <div class="card">
    <div class="card-header p-0 text-center">
      <a class="btn small" data-bs-toggle="collapse" href="#mapaslista">
        <i class='fas fa-map-marked-alt'></i> Mapas
      </a>
    </div>
    <div id="mapaslista" class="collapse text-center" data-bs-parent="#accordion">
      <?php do { $data = date('d/m/y', strtotime($row["data"]));?>
        
          <a href="?page=mapadet&acao=view&view=sint&idmapa=<?php echo $row['idmapa'];?>" class="btn btn-outline-danger m-1 d-grid">
            <?php echo $data ;?>
          </a>
      <?php } while ($row = mysqli_fetch_assoc($result)); ?>
    </div> 

  </div>
</div>